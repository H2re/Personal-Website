<?php
include 'data.php';

$id = $_GET['id'] ?? '';
$project = null;

foreach ($projects as $p) {
    if ($p['id'] === $id) {
        $project = $p;
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $project ? $project['title'] : 'Project Not Found' ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if ($project): ?>
        <div class="project-detail">
            <h1><?= $project['title'] ?></h1>
            <img src="<?= $project['image'] ?>" alt="<?= $project['title'] ?>">
            <p><?= $project['description'] ?></p>
            <a href="index.php">← Back to Projects</a>
        </div>
    <?php else: ?>
        <p>Project not found.</p>
        <a href="index.php">← Back to Projects</a>
    <?php endif; ?>
</body>
</html>