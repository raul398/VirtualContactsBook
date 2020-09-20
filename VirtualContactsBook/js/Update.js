function updateContact(Id, Name, Lastname, Mail, Address, Phone, Birthday) {
    $.ajax({
        url:'App/Update.php',
        type:'POST',
        async: true,
        data: {
            Id:Id,
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
                alert('El contacto se ha actualizado exitosamente');
            } else {
                alert(response);
            }
        },
        error: function(error){
            console.log(error);
        }
    });
}

$(document).on('click', '.Edit', function (e) {
    e.preventDefault();
    var Id = $(this).attr('id');
    //confirmedDelete();
    $('#Update').on('click', function (e) {
        e.preventDefault();
        var Name = $('#editName').val();
        var Lastname = $('#editLastname').val();
        var Mail = $('#editMail').val();
        var Address = $('#editStreet').val();
        var Phone = $('#editPhone').val();
        var Birthday = $('#editBirthday').val();
        if (!Name && !Lastname && !Mail && !Address && !Phone && !Birthday) {
            alert('Debe ingresar al menos un campo para modificar');
        } else {
            updateContact(Id, Name, Lastname, Mail, Address, Phone, Birthday);
        }
    });
});
