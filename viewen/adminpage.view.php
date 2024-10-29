<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: adminLogin.view.php');
    exit;
}

include '../model/db_connection.php'; // Voeg je database connectie toe

// Voeg project toe
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_project'])) {
    $name = $_POST['name'];
    $goal = $_POST['goal'];
    $skills = $_POST['skills'];
    $duration = $_POST['duration'];

    $stmt = $pdo->prepare("INSERT INTO projects (project_id, project_naam, project_doel, project_duur,vaardigheden) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([project_id, project_naam, project_doel, project_duur,vaardigheden]);
}

// Haal contactgegevens en projecten op
$contacts = $pdo->query("SELECT * FROM contact")->fetchAll();
$projects = $pdo->query("SELECT * FROM projects")->fetchAll();
?>

    <h2>Contact Form Submissions</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Date</th>
        </tr>
        <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?= htmlspecialchars($contact['naam']) ?></td>
                <td><?= htmlspecialchars($contact['email']) ?></td>
                <td><?= htmlspecialchars($contact['bericht']) ?></td>
                <td><?= $contact['created_at'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Add New Project</h2>
    <form method="POST" action="">
        <input type="hidden" name="add_project" value="1">
        <input type="text" name="name" placeholder="Project Name" required><br>
        <textarea name="goal" placeholder="Project Goal" required></textarea><br>
        <input type="text" name="skills" placeholder="Skills" required><br>
        <input type="text" name="duration" placeholder="Duration" required><br>
        <button type="submit">Add Project</button>
    </form>

    <h2>Current Projects</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Goal</th>
            <th>Skills</th>
            <th>Duration</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($projects as $project): ?>
            <tr>
                <td><?= htmlspecialchars($project['name']) ?></td>
                <td><?= htmlspecialchars($project['goal']) ?></td>
                <td><?= htmlspecialchars($project['skills']) ?></td>
                <td><?= htmlspecialchars($project['duration']) ?></td>
                <td>
                    <a href="edit_project.php?id=<?= $project['id'] ?>">Edit</a>
                    <a href="delete_project.php?id=<?= $project['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php
