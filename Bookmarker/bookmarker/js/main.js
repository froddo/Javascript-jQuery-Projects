//listen for form submit

document.getElementById('myForm').addEventListener('submit', saveBookmark);

//save bookmark
function saveBookmark(e) {
    //prevent form, form submitting
    var siteName = document.getElementById('siteName').value;
    var siteUrl = document.getElementById('siteUrl').value;


    var bookmark = {
        name: siteName,
        url: siteUrl
    };


    //Local Storage just test
    /*
    localStorage.setItem('test','Hello');
    console.log(localStorage.getItem('test'));
    localStorage.removeItem('test');
    console.log(localStorage.getItem('test'));
    */

    //just test if bookmarks is null
    if (localStorage.getItem('bookmarks') === null){
        //add to array
        var bookmarks = [];
        //set to array
        bookmarks.push(bookmark);
        //set to localStorage
        localStorage.setItem('bookmarks', JSON.stringify(bookmarks));
    } else {
        //get bookmark from localStorage
        var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));
        //add bookmark to array
        bookmarks.push(bookmark);
        //Re-set back to localStorage
        localStorage.setItem('bookmarks', JSON.stringify(bookmarks));
    }

    //reset form
    //$('#myForm')[0].reset();
    document.getElementById('myForm').reset();


    fetchBookmarks();

    e.preventDefault();
}

//delete bookMark
function deleteBookmark(url) {
    var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));

    for(var i = 0; i < bookmarks.length; i++){
        if (bookmarks[i].url == url){
            bookmarks.splice(i,1);
        }
    }
    //Re-set back to localStorage
    localStorage.setItem('bookmarks', JSON.stringify(bookmarks));

    //reset form again->if put any url or name and press delete button, the form will be fill in again
    document.getElementById('myForm').reset();

    fetchBookmarks();
}

//fetch bookmarks

function fetchBookmarks() {
    //get bookmark from localStorage
    var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));
    //get output id
    var bookmarksResults = document.getElementById('bookmarksResults');
    bookmarksResults.innerHTML = '';

    for (var i = 0; i < bookmarks.length; i++){
        var name = bookmarks[i].name;
        var url = bookmarks[i].url;
        bookmarksResults.innerHTML += '<div class="well">'+'<h3>'+name+' <a class="btn btn-default" target="_blank" href="'+url+'">Visit</a> '+'<a onclick="deleteBookmark(\''+url+'\')" class="btn btn-danger" href="#">Delete</a> '+'</h3>'+'</div>';
    }

}



















