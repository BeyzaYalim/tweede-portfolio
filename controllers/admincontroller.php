<?php
//session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: ../viewen/adminLogin.view.php');
    exit;
}

include '../model/db_connection.php';

try {
    // Controleer of de 'delete' parameter in de URL aanwezig is
    if (isset($_GET['delete'])) {
        $contact_id = $_GET['delete'];

        echo "Deleting contact with ID: " . htmlspecialchars($contact_id) . "<br>"; // Debugging

        // Verwijder contact uit de database op basis van het ID
        $stmt = $pdo->prepare("DELETE FROM contact WHERE message_id = :id");
        $stmt->bindParam(':id', $contact_id, PDO::PARAM_INT);
        $stmt->execute();

    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
