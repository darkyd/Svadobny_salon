function getMessages(letter) {  
     var div = $("#messages");  
     $.get('messages.php', function(data) {  
               div.html(data);  
          });  
}  
  
setInterval(getMessages, 2000);