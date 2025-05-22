<?php
$course = "Curso de PHP";

// $tag_1 = "PHP";
// $tag_2 = "Laravel";
// $tag_3 = "Composer";

$tags = ["PHP", "Laravel", "Composer"];
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
            <li><?= $tags[0] ?></li>
            <li><?= $tags[1] ?></li>
            <li><?= $tags[2] ?></li>
        </ul>
    </p>
</body>
</html>