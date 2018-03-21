let domain = 'http://localhost/chatbox';

$(document).ready(function () {
    $('#addmessage').on('click', function () {

        var dataString = {
            name:  $('#name').val(),
            message: $('#message').val()
        };

       if (dataString.name == '' || dataString.message == ''){
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

       return false
    });
});