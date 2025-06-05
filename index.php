<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Projects</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="header-content">
        <div class="header-left">
            <h1>Projects</h1>
        </div>
        <div class="header-center">
            <input type="text" id="searchBar" placeholder="Search projects...">
        </div>
        <div class="header-right">
            <a href="https://github.com/yourusername" target="_blank" title="GitHub">
                <img src="images/github.svg" alt="GitHub">
            </a>
            <a href="https://linkedin.com/in/yourprofile" target="_blank" title="LinkedIn">
                <img src="images/linkedin.svg" alt="LinkedIn">
            </a>
            <!-- Add more icons as needed -->
        </div>
    </div>
</header>

    <main>
        <div class="grid" id="projectGrid">
            <?php foreach ($projects as $project): ?>
                <a href="project.php?id=<?= $project['id'] ?>" class="project-box" data-title="<?= strtolower($project['title']) ?>">
                    <img src="<?= $project['image'] ?>" alt="<?= $project['title'] ?>">
                    <div class="overlay">
                        <h2><?= $project['title'] ?></h2>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </main>

    <script>
        const searchBar = document.getElementById('searchBar');
        const boxes = document.querySelectorAll('.project-box');

        searchBar.addEventListener('input', () => {
            const query = searchBar.value.toLowerCase();
            boxes.forEach(box => {
                const title = box.getAttribute('data-title');
                box.style.display = title.includes(query) ? 'block' : 'none';
            });
        });
    </script>
</body>
</html>