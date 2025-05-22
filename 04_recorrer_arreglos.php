<?php
$course = "Curso de PHP";

$tags = ["PHP", "Laravel", "Composer", "Javascript"];
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
        <strong>Etiquetas:</strong>
        <ul>
            <?php foreach ($tags as $tag): ?>
                <li><?= $tag ?></li>
            <?php endforeach; ?>
        </ul>
    </p>
</body>
</html>