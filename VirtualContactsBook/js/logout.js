$('#logout').on('click', function() {
    $.ajax({
        url:'App/logout.php',
        type:'POST',
        async: true,
        data:{
            action : 'logout'
        },
        beforeSend: function(){
        },
        success: function(response){
            console.log(response)
            if(response == true){
                location.href ="index.php";
            } else {
                console.log(response);
            }
        },
        error: function(error){
            console.log(error);
        }
    });
});