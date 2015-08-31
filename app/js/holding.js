$("#notify").submit(function() {
    var url = "notify.php"; 

    $.ajax({
           type: "POST",
           url: url,
           data: $( "#notify" ).serialize(), 
           success: function(data)
           {
               // On success, replace signup box with thank you message
               $( ".signup" ).text('Thanks!');
           }
         });

    return false; // avoid to execute the actual submit of the form.
});