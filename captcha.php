<?PHP
/*

Powered by parablan
Hector Alejandro Parada Blanco
Captcha alfanumérico de 6 dígitos

*/

// Generar captcha
$captcha_box="0ab1cd2ef.3gh4ij-5kl6mn7op+8qr9st*uvwxyz#";
$nuevo=array();

for($x=1;$x<=6;$x++){
    $aleatorio=rand(0, 40);
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
<td align='center'>
<input type=hidden id='captcha_random' name='captcha_random' value='".$captcha_final."'>
<input type=text id='captcha' name='captcha' value='".$captcha_final."' style='text-align:center; border:0; width:110px; font-weight:bold; font-size:20px; color:328bd7; background:transparent; letter-spacing: 3px' disabled>
<tr>
<td align='center'>
<input type='text' id='captcha_digitado' name='captcha_digitado' placeholder='captcha' maxlength='6' style='text-align:center; width:90px; letter-spacing: 3px' onfocus='no_pegar();'>
");
?>
