function loginValidate(email, password) {
    $.ajax({
        url:'App/login.php',
        type:'POST',
        async: true,
        data:{
            email : email,
            password : password
        },
        beforeSend: function(){
        },
        success: function(response){
            console.log(response)
            if(response == true){
                location.href ="home.php";
            } else {
                alert('Los campos son incorrectos');
            }
        },
        error: function(error){
            console.log(error);
        }
    });
}


$('#login').on('click', function() {
    var email = $('#email').val();
    var password = $('#password').val();
    if (!email || !password) {
        alert('Los campos no pueden estar vacios');
    } else {
        loginValidate(email, password);
    }
});