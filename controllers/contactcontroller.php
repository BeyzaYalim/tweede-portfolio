<?php
//class contactcontroller{
//    public function show(){
//        require "../viewen/contact.view.php";
//    }
//}


function contactController()
{// om taken te kunnen uitvoeren
    require('./viewen/contact.view.php');
}


require './model/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $bericht = $_POST['bericht'];

//    var_dump($_POST); hiermee getest wat er niet goed ging



    // Voorbereiden en uitvoeren van de SQL-instructie
    $sql = "INSERT INTO contact (naam, email, bericht) VALUES (:naam, :email, :bericht)";
    $stmt = $pdo->prepare($sql);

    $stmt->execute(['naam' => $naam, 'email' => $email, 'bericht' => $bericht]);

    echo "Bedankt voor je bericht!";
}



