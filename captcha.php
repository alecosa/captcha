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

echo("
<script>
/*
Función en javascript que impide pegar texto en el input donde el usuario debe digitar el captcha
*/
function no_pegar() {
    var inputCaptcha = document.getElementById('captcha_digitado');
    inputCaptcha.onpaste = function(e) {
      e.preventDefault();
    }
}
</script>
<input type=hidden id='captcha_random' name='captcha_random' value='".$captcha_final."'>
<input type=text id='captcha' name='captcha' value='".$captcha_final."' style='text-align:center; border: 0; width:100px; font-weight: bold; font-size: 18px;' disabled>
<input type='text' id='captcha_digitado' name='captcha_digitado' placeholder='captcha' maxlength='6' style='text-align:center; width:72px;' onfocus='no_pegar();'>
");
?>
