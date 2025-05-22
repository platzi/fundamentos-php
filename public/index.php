<?php

$app = require __DIR__ . '/../bootstrap.php';

$question = $_POST['question'] ?? '';
$answer = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $question) {
    $answer = $app->getResponse($question);
}
?>

<form method="POST">
    <label for="question">Ask anything to AI</label>
    <input type="text" name="question" value="<?= htmlspecialchars($question) ?>" required>
    <button type="submit">Ask</button>
</form>

<p>
    <?php if ($answer): ?>
        <strong>Answer:</strong> <?= htmlspecialchars($answer) ?>
    <?php endif; ?>
</p>