<?php require 'layout/header.php'; ?>

    <main class="mainindex">
        <div class="zwart">
            <img src="../viewen/css/plaatjes/blackandwhite.jpg" alt="bergen" class="img">
        </div>

<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Dummy login check - vervang door je eigen validatie
    if ($username == 'admin' && $password == 'pinda') {
        $_SESSION['logged_in'] = true;
        header('Location: adminpage.view.php');
        exit;
    } else {
        $error = "Incorrect username or password";
    }
}
?>

    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
<?php if(isset($error)) echo "<p>$error</p>"; ?>


<?php
require 'layout/footer.php';
