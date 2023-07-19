<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animales del zoológico</title>
</head>
<body>
    <h1>INVENTARIO DE ANIMALES EN EL ZOOLÓGICO</h1>    
    <!-- Lista no ordenada con HTML puro -->
    <h2>Lista no ordenada con HTML puro</h2>
    <ul>
        <li>Tigre</li>
        <li>Oso</li>
        <li>Piojo</li>
        <li>Mamut</li>
        <li>Ornitorrinco</li>
    </ul>
    <!-- Lista no ordenada con PHP -->
    <h2><?php echo $titulo ?></h2>    
    <ul>
        <?php
            foreach($listaAnimales as $animal) {
                echo '<li>' . $animal . '</li>';
            }
        ?>
    </ul>
</body>
</html>