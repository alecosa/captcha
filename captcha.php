<?PHP
/*
copyright © 2022 parablan - Hector Alejandro Parada Blanco

Powered by parablan

Captcha alfanumerico de 6 dígitos

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
function no_pegar() {
    var myInput = document.getElementById('captcha_digitado');
    myInput.onpaste = function(e) {
      e.preventDefault();
      return false;
    }
}
</script>
<input type=hidden id='captcha_random' name='captcha_random' value='".$captcha_final."'>
<input type=text id='captcha' name='captcha' value='".$captcha_final."' style='text-align:center; border: 0; width:75px; font-weight: bold;' disabled>
<input type='text' id='captcha_digitado' name='captcha_digitado' placeholder='captcha' maxlength='6' style='text-align:center; width:72px;' onfocus='no_pegar();'>
");
?>
