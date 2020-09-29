<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormuIndex</title>
</head>
<body>
    <form action="confirm.php" method="POST">
        <h4>Nombre completo</h4>
        <input type="text" name="nombre" value="">
        <h4>Dirección</h4>
        <input type="text" name="direccion" value="">
        <h4>Correo electronico</h4>
        <input type="email" name="correo" value="">
        <h4>Contraseña</h4>
        <input type="password" name="contrasena" value="">
        <h4>Fecha de nacimiento</h4>
        <input type="date" name="fNacimiento" value="">
        <h4>Sexo</h4>
       <input type="radio" name="sexo" value="Mujer">Mujer
       <input type="radio" name="sexo" value="Hombre">Hombre
        <h4>Por favor elegir tema de interes</h4>
        <input type="checkBox" name="temas[]" value="Ficcion">Ficcion
       <input type="checkBox" name="temas[]" value="Terror">Terror
        <input type="checkBox" name="temas[]" value="Accion">Acción
        <input type="checkBox" name="temas[]" value="Suspense">Suspense
        <input type="checkBox" name="temas[]" value="Comedia">Comedia
        <h4>Selecciona tus aficiones</h4>
        <select name="aficiones">
            <option value="Deporte al aire libre">Deporte al aire libre</option> 
            <option value="Deporte aventura" >Deporte aventura</option>
            <option value="Musica Pop">Musica Pop</option>
            <option value="Musica Rock" selected>Musica Rock</option>
            <option value="Otros">Otros</option>      
        </select>
        <br>
        <input type="submit" name="enviar">
        <br>
        <input type="reset" name="borrar">
    <form>

    
</body>
</html>