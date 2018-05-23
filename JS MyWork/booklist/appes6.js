class Book{
    constructor (title, author, isbn){
        this.title = title;
        this.author = author;
        this.isbn = isbn;
    }
}

class UI{


    addBookToList(book){
        const list = document.getElementById('book-list');
        //Create tr element
        const row = document.createElement('tr');
        // Insert cols
        row.innerHTML = `
        <td>${book.title}</td>
        <td>${book.author}</td>
        <td>${book.isbn}</td>
        <td><a href="#" class="delete">X</a></td>
    `;

        list.appendChild(row);
    }


    showAlert(message, className){
        const div = document.createElement('div');

        div.className = `alert ${className}`;
        div.appendChild(document.createTextNode(message));
        const container = document.querySelector('.container');

        // Get form
        const form = document.querySelector('#book-form');

        // Insert alert
        container.insertBefore(div, form);

        // Timeout after 3 seconds
        setTimeout(function () {
            document.querySelector('.alert').remove();
        }, 3000);
    }

    deleteBook(target){
        if (target.className === 'delete'){
            target.parentElement.parentElement.remove();
        }
    }

    clearFields(){
        document.getElementById('title').value = '';
        document.getElementById('author').value = '';
        document.getElementById('isbn').value = '';
    }
}

//Local storage

class Store{
    static getBooks(){
        let books;
        if (localStorage.getItem('books') === null){
            books = [];
        } else {
            books = JSON.parse(localStorage.getItem('books'));
        }

        return books;
    }

    static displayBooks (){
        const books = Store.getBooks();

        books.forEach(function(book) {
            const ui = new UI;

            // Add book to ui
            ui.addBookToList(book);
        });
    }

    static addBook(book){
        const books = Store.getBooks();
        books.push(book);
        localStorage.setItem('books', JSON.stringify(books));
    }

    static removeBook(isbn){
        const books = Store.getBooks();

        books.forEach(function (book, index) {
            if (book.isbn === isbn){
                books.splice(index, 1);
            }
        });

        localStorage.setItem('books', JSON.stringify(books));
    }
}

// DOM Load event

document.addEventListener('DOMContentLoaded', Store.displayBooks);

// Event Listener
document.getElementById('book-form').addEventListener('submit', function (e) {
    // Get form values
    const title = document.getElementById('title').value,
        author = document.getElementById('author').value,
        isbn = document.getElementById('isbn').value;


    // Instantiate book
    const book = new Book(title, author, isbn);

    // Instantiate UI
    const ui = new UI();


    // Validate
    if (title === '' || author === '' || isbn === ''){
        // Error alert
        ui.showAlert('Please fill in all fields', 'error');
    } else {
        ui.addBookToList(book);

        // Add to local storage
        Store.addBook(book);


        // Show success
        ui.showAlert('Book Added!', 'success');

        // Clear fields
        ui.clearFields();
    }



    e.preventDefault();
});

// Event listener for delete
document.getElementById('book-list').addEventListener('click', function (e) {


    // Instantiate UI
    const ui = new UI();

    // Delete Book
    ui.deleteBook(e.target);

    // Remove from local storage
    Store.removeBook(e.target.parentElement.previousElementSibling.textContent);

    // Show message
    ui.showAlert('Book Removed!', 'success');
    e.preventDefault();
});
