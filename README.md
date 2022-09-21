# Captcha
Generador de captcha alfanumérico en PHP.

# Modo de uso
Importe el script [captcha.php](https://github.com/alecosa/captcha/blob/main/captcha.php) en el formulario que desea insertar el captcha.


Ejemplo:

```php
<?PHP
echo("
<!DOCUMENT TYPE='es'>
<html lang='es'>
    <head>
        <title>Captcha</title>
    </head>
    <body>
        <form method='POST' action='validar.php'>
        <table border=0 width='100%'>
        <tr>
");
include('captcha.php');
echo("
        <tr>
        <td><button>Validar</button>
        </table>
        </form>
    </body>
</html>
");
?>
```

Posteriormente en el archivo que captura la informacion del formulario, valide que los campos $captcha_random y $captcha_digitado sean iguales.

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
