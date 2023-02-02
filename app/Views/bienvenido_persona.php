


<?php
// echo "soy la  vista persona ".base_url();
print_r($datos);
echo "<br>";
print_r(count($datos));
echo "<br>";
for($i=0;$i<count($datos);$i++){
    echo $datos['nombre']." - ";
    echo $datos['apellido']." - ";
    echo $datos['cedula']." - ";
}

echo "<br>";
foreach($datos as $d){
    print_r($d." *** ");
}

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

<table border="1">
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Cedukla</th>
    <tbody>
        <?php foreach($datos as $d){?>
        <tr>
            <td><?php echo $d;?></td>
            
        </tr>
        <?php }?>
    </tbody>
</table>
    
    <!-- <form action="<?php echo base_url()?>/PersonasController" method="post">
        <label for="login">Login</label>
        <input type="text" name="loginForm" id="loginForm"><br><br>
        <label for="clave">Clave</label>
        <input type="text" name="claveForm" id="claveForm"><br><br>
        <input type="submit" value="Enviar"></input>
    </form> -->
    <?php //print_r($_POST);?>
</body>
</html>
