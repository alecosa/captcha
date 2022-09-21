# captcha
Generador de captcha alfanumérico en PHP.

# uso
Importe este simple script en el formulario que desea insertar el captcha, luego valide que los campos $captcha_random y $captcha_digitado sean iguales.

Ejemplo:

```php
<?PHP
$captcha_random=$_POST["captcha_random"];
$captcha_digitado=$_POST["captcha_digitado"];

if($captcha_random==$captcha_digitado){
    echo("Captcha corresponde");
}else{
    echo("El captcha no corresponde");
}
?>
```
