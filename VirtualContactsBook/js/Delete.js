function contactDelete(Id) {
    $.ajax({
        url:'App/Delete.php',
        type:'POST',
        async: true,
        data: {
            Id:Id
        },
        beforeSend: function(){
        },
        success: function(response){
            if(response == true){
                location.href ="home.php";
                alert('Se ha Eliminado el contacto exitosamente');
            } else {
                alert(response);
            }
        },
        error: function(error){
            console.log(error);
        }
    });
}


$(document).on('click', '.Delete', function (e) {
    e.preventDefault();
    var Id = $(this).attr('id');
    $('#confirmedDelete').on('click', function (e) {
        e.preventDefault();
        contactDelete(Id);
    });
});
