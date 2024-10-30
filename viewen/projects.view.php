
<?php require 'layout/header.php';

?>
<main class="mainindex">
    <div class="zwart">
        <img src="../viewen/css/plaatjes/blackandwhite.jpg" alt="bergen" class="img">
    </div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Voeg een Project Toe</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <?php

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projecten</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <div class="projects-container">
        <h2>Mijn Projecten</h2>
        <?php if (count($projects) > 0): ?>
            <div class="projects-list">
                <?php foreach ($projects as $project): ?>
                    <div class="project-card">
                        <h3><?= htmlspecialchars($project['project_naam']) ?></h3>
                        <p><strong>Projectduur:</strong> <?= htmlspecialchars($project['project_duur']) ?></p>
                        <p><strong>Beschrijving:</strong> <?= htmlspecialchars($project['project_doel']) ?></p>
                        <p><strong>Vaardigheden:</strong> <?= htmlspecialchars($project['vaardigheden']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>Er zijn momenteel geen projecten beschikbaar.</p>
        <?php endif; ?>
    </div>
    </body>
    </html>


<?php
require 'layout/footer.php';
?>