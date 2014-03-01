 /*
    |--------------------------------------------------------------------------
    | CONTACTO
    |--------------------------------------------------------------------------
    */

    $(document).ready(function(){

$('#submit').click(function(){

$.post("enviar.php", $("#contactform").serialize(),  function(response) {
$('#success').html(response);
//$('#success').hide('slow');
});
return false;

});

});
