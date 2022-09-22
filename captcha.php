<?PHP
/*
Powered by parablan
Hector Alejandro Parada Blanco
Captcha alfanumérico de 6 dígitos
*/

// Generar captcha
$captcha_box="0ab1cd2ef3gh4ij5kl6mn7op8qr9st.uv-wx+yz*";
$nuevo=array();

for($x=1;$x<=6;$x++){
    $aleatorio=rand(0, 39);
    $componente_captcha=substr($captcha_box, $aleatorio, 1);
    $nuevo[]=$componente_captcha;
}

$captcha_final=implode($nuevo);

// Jquery es utilizado con el fin de deshabilitar la opción de pegar en el input que recibe el captcha
echo("
<script src='https://code.jquery.com/jquery-3.6.1.min.js'></script>
<script>
$(document).ready(function(){
    $('#captcha_digitado').on('paste',function(e) {
       e.preventDefault();
    });
});
</script>
<input type=hidden id='captcha_random' name='captcha_random' value='".$captcha_final."'>
<input type=text id='captcha' name='captcha' value='".$captcha_final."' style='text-align:center;' disabled>
<input type='text' id='captcha_digitado' name='captcha_digitado' placeholder='captcha' maxlength='6' style='text-align:center;'>
");
?>
