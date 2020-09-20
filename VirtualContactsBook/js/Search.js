//In this line getContacts function is called
$(getContacts());


function getContacts(Query){
    var valueOut = ''
    $.ajax({
        url:'App/Search.php',
        type:'POST',
        async: true,
        data:{
            Query:Query,
        },
        beforeSend: function(){
        },
        success: function(response){
            console.log(response);
            if(response == 'noData'){
                valueOut = 'No se han encontrado registros';
            } else {
                valueOut =  $.parseJSON(response);
                console.log(valueOut);
            }
            $('#contactList').html(valueOut);
        },
        error: function(error){
            console.log(error);
        }
    });
} //End Create Records

$('#Search').keyup(function(){
    var value = $('#Search').val();
    if(value){
        getContacts(value);
    }else{
        getContacts();
    }
});  //End keyup