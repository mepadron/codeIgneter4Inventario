


<?php
// echo "soy la  vista persona ".base_url();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    
    <form action="<?php echo base_url()?>/PersonasController" method="post">
        <label for="login">Login</label>
        <input type="text" name="loginForm" id="loginForm"><br><br>
        <label for="clave">Clave</label>
        <input type="text" name="claveForm" id="claveForm"><br><br>
        <input type="submit" value="Enviar"></input>
    </form>
    <?php //print_r($_POST);?>
</body>
</html>
