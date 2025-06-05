<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Projects</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>My Projects</h1>
    <div class="grid">
        <?php foreach ($projects as $project): ?>
            <a href="project.php?id=<?= $project['id'] ?>" class="project-box">
                <img src="<?= $project['image'] ?>" alt="<?= $project['title'] ?>">
                <div class="overlay">
                    <h2><?= $project['title'] ?></h2>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</body>
</html>