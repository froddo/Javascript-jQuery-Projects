let domain = 'http://localhost/chatbox';

$(document).ready(function () {

    //Add Message
    $('#addmessage').on('click', function () {

        let dataString = {
            name:  $('#name').val(),
            message: $('#message').val()
        };

       if (dataString.name === '' || dataString.message === ''){
           alert('Please fill in your name and message');
       } else {
           $.ajax({
               type:"POST",
               url:domain + "/db_chatbox.php",
               data:dataString,
               cache:false,
               success:function (html) {

                   $('#shouts ul').prepend(html);

               }
           });
       }

        $("#cform")[0].reset();

       return false;
    });
    //Delete message by id
    $('#deleteLastElement').click(function () {
            console.log('ok');
            if (confirm('Are you sure you want to delete last element?')){
            var lastElement = $('#shouts li').last();
            var id = lastElement.attr('data-id');

            $.post("db_delete.php",{id: id}).done(function (data) {
                lastElement.remove();
                console.log("removed");
            });
            }
        return false;
    });
});