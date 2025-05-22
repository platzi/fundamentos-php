<?php
$course = "Curso de PHP";
$archived = true; // false
$status = $archived ? "archivado" : "activo"; // Ternary operator
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course ?></title>
</head>
<body>
    <h1>Bienvenido al <?= $course ?></h1>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>

    <p>
        <?php if ($archived): ?>
            <strong>Este curso está archivado</strong>
        <?php else: ?>
            <strong>Este curso está activo</strong>
        <?php endif; ?>        
    </p>

    <p>
        <strong>Este curso está</strong> <?= $status ?>
    </p>
</body>
</html>