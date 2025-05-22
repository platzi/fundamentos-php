<?php
class Course {
    public function __construct(
        public string $title,
        public string $subtitle,
        public string $description,
        public array $tags = []
    ) {
    }
}

$course = new Course(
    title: 'Curso de PHP',
    subtitle: 'Aprende PHP desde cero',
    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.',
    tags: ['php', 'programación', 'backend']
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course->title ?></title>
</head>
<body>
    <h1>Bienvenido al <?= $course->title ?></h1>

    <h2><?= $course->subtitle ?></h2>

    <p><?= $course->description ?></p>

    <p>
        <strong>Etiquetas:</strong>
        <ul>
            <?php foreach ($course->tags as $tag): ?>
                <li><?= $tag ?></li>
            <?php endforeach; ?>
        </ul>
    </p>
</body>
</html>