<?php
//class projectscontroller{
//    public function show(){
//        require "../viewen/projects.view.php";
//    }
//}

function projectsController(){// om taken te kunnen uitvoeren
    require('./viewen/projects.view.php');
}

$host = 'localhost';
$db = 'portfolioapp';
$user = 'root';
$pass = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Kon geen verbinding maken: " . $e->getMessage());
}

try {
    // Query om alle projecten op te halen
    $stmt = $pdo->query("SELECT * FROM projects ORDER BY project_id DESC");
    $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error retrieving projects: " . $e->getMessage();
}
?>