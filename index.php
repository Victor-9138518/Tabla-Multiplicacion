<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabla de multiplicar</title>
    <style>
        body { background: blue; color: white; text-align: center; font-family: "Times New Roman", serif; margin: 0; padding: 10px; }
        h1 { font-size: 40px; margin: 5px 0 25px; }
        .contenedor { display: flex; flex-wrap: wrap; justify-content: center; gap: 8px; }
        .tabla { background: black; border: 4px solid white; padding: 5px 10px; font-size: 22px; line-height: 1.4; }
    </style>
</head>
<body>
    <h1>Tabla de multiplicar</h1>
    <div class="contenedor">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<div class='tabla'>";
        for ($j = 1; $j <= 10; $j++) {
            echo $i . " x " . $j . " = " . ($i * $j) . "<br>";
        }
        echo "</div>";
    }
    ?>
    </div>
</body>
</html>
