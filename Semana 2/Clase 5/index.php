<?php
    $roll = 'gerente';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <h1>Condicionales</h1>

    <?php if($roll == 'admin'):?>
        <h2>Bienvenido administrador</h2>
    <?php elseif ($roll == 'gerente'):?>
        <h2>Bienvenido gerente</h2>
    <?php elseif ($roll == 'usuario'):?>
        <h2>Bienvenido</h2>
    <?php elseif ($roll == 'generico'):?>
        <h2>Bienvenido</h2>
    <?php else:?>
        <h2>No pudo acceder</h2>
    <?php endif;?>

    <h3>Gracias por su visita</h3>

</body>
</html>