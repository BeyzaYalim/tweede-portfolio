<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: adminLogin.view.php');
    exit;
}
require ('../controllers/admincontroller.php');
include '../model/db_connection.php'; // Voeg je database connectie toe

// Voeg project toe
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_project'])) {
    $name = $_POST['name'];
    $goal = $_POST['goal'];
    $skills = $_POST['skills'];
    $duration = $_POST['duration'];

    // Project toevoegen aan de database
    $stmt = $pdo->prepare("INSERT INTO projects (project_naam, project_doel, vaardigheden, project_duur) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $goal, $skills, $duration]);
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
        <th>Actions</th>
    </tr>
    <?php foreach ($contacts as $contact): ?>
        <tr>
            <td><?= htmlspecialchars($contact['naam']) ?></td>
            <td><?= htmlspecialchars($contact['email']) ?></td>
            <td><?= htmlspecialchars($contact['bericht']) ?></td>
            <td><?= $contact['created_at'] ?></td>
            <td>
                <a href="adminpage.view.php?delete=<?= $contact['message_id'] ?>" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</a>
            </td>
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
            <td><?= htmlspecialchars($project['project_naam']) ?></td>
            <td><?= htmlspecialchars($project['project_doel']) ?></td>
            <td><?= htmlspecialchars($project['vaardigheden']) ?></td>
            <td><?= htmlspecialchars($project['project_duur']) ?></td>
            <td>
                <a href="edit_project.php?id=<?= $project['project_id'] ?>">Edit</a>
                <a href="delete_project.php?id=<?= $project['project_id'] ?>" onclick="return confirm('Are you sure you want to delete this project?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
