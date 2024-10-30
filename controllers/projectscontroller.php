<?php
//class projectscontroller{
//    public function show(){
//        require "../viewen/projects.view.php";
//    }
//}

function projectsController(){// om taken te kunnen uitvoeren
    require('./viewen/projects.view.php');
}
require '../model/db_connection.php';

try {
    // Query om alle projecten op te halen
    $stmt = $pdo->query("SELECT * FROM projects ORDER BY project_id DESC");
    $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error retrieving projects: " . $e->getMessage();
}
?>