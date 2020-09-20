function createContact(Name, Lastname, Mail, Address, Phone, Birthday) {
    $.ajax({
        url:'App/createContact.php',
        type:'POST',
        async: true,
        data: {
            Name:Name,
            Lastname:Lastname,
            Mail:Mail,
            Address:Address,
            Phone:Phone,
            Birthday:Birthday
        },
        beforeSend: function(){
        },
        success: function(response){
            console.log(response)
            if(response == true){
                location.href ="home.php";
                alert('Se ha creado un nuevo contacto');
            } else {
                alert(response);
            }
        },
        error: function(error){
            console.log(error);
        }
    });
}


$('#create').on('click', function() {
    var Name = $('#Name').val();
    var Lastname = $('#Lastname').val();
    var Mail = $('#Mail').val();
    var Address = $('#Street').val();
    var Phone = $('#Phone').val();
    var Birthday = $('#Birthday').val();
    if (!Name || !Lastname || !Mail || !Address || !Phone || !Birthday) {
        alert('Los campos no pueden estar vacios');
    } else {
        createContact(Name, Lastname, Mail, Address, Phone, Birthday);
    }
});