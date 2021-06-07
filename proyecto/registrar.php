<?php

include("conectar.php");

if (isset($_POST['registrar'])){

    if (strlen($_POST['nombres']) >= 1 && strlen($_POST['apellidos']) >= 1 && strlen($_POST['correo'])) {
        $name = trim($_POST['nombres']);
	    $apel = trim($_POST['apellidos']);
	    $email = trim($_POST['correo']);
        $fecha= date("d/m/y");
        $consulta = "INSERT INTO cuentas(nombre,apellidos,correo,fecha_reg) VALUES ('$name', '$apel', '$email', '$fecha')";
       $resultado = mysqli_query($conexx,$consulta);

       if ($resultado) {
        ?> 
        <h3 class="ok">¡Ahora estas participando!</h3>
       <?php
    } else {
        ?> 
        <h3 class="bad">Algo ocurrio mal, verifica los datos ingresados.</h3>
       <?php
    }
}   else {
        ?> 
        <h3 class="bad">Creo que te falto algo!</h3>
       <?php
}
}



?>