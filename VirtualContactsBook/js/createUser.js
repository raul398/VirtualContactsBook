function createUser(Name, Lastname, Mail, Password) {
    $.ajax({
        url:'App/createUser.php',
        type:'POST',
        async: true,
        data: {
            Name:Name,
            Lastname:Lastname,
            Mail:Mail,
            Password:Password,
        },
        beforeSend: function(){
        },
        success: function(response){
            console.log(response)
            if(response == true){
                location.href ="index.php";
                alert('Se ha creado un nuevo Usuario');
            } else {
                alert(response);
            }
        },
        error: function(error){
            console.log(error);
        }
    });
}


$('#register').on('click', function() {
    var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
    var Name = $('#Name').val();
    var Lastname = $('#Lastname').val();
    var Mail = $('#Mail').val();
    var Password = $('#Password').val();
    if (caract.test(Mail) == false){
        alert('El correo ingresado es incorrecto')
    }else{
        if (!Name || !Lastname || !Mail || !Password) {
            alert('Los campos no pueden estar vacios');
        } else {
            createUser(Name, Lastname, Mail, Password);
        }
    }
});