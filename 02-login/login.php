
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos 01</title>
</head>
<body>
<div id="container">
    <?php
    // personalizar error
    if (isset($_GET['msg'])){
        
        $errores = ['error Nombre y usuario 0 ','Error EN DB 1 ','vacio 2'];
        echo "<p>".$errores[$_GET['msg']]."</p>";
    }
    ?>
        <form action="acceso.php" method="POST">
            <!-- Username -->
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario">
            <!-- Password -->
            <label for="Clave">Contraseña:</label>
            <input type="password" name="password">
            <p><a href="#">Olvidaste la contraseña ?</a>
            <p><a href="#">Registrate?</a>
            
            <div id="lower">
                <input type="checkbox"><label class="check" for="checkbox">Mantenerse Logeado</label>
                <!-- Submit Button -->
                <input type="submit" value="Login">
            </div>
        </form>       
    </div>

    
    

</body>
</html>
