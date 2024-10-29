<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>Mijn Portfolio</title>-->
<!--    <link rel="stylesheet" href="styleport.css">-->

<!--</head>-->
<!--<body>-->
<!--<header>-->
<!--    <div class="parent">-->
<!--        <div class="mijnnaam">-->
<!--        <h1>Beyza Yalim</h1></div>-->
<!--        <div class="Inhoud">-->
<!--        <nav>-->
<!--            <ul>-->
<!--            <li><a href="Home"> Home</a></li>-->
<!--            <li><a href="Portfolio"> Portfolio</a></li>-->
<!--            <li><a href="Projects"> Projects</a></li>-->
<!--            <li><a href="About"> About</a></li>-->
<!--            <li><a href="Contact"> Contact</a></li>-->
<!--            </ul>-->
<!--        </nav>-->
<!--        </div>-->
<!--    </div>-->

<!--</header>-->
<!--<main>-->
<!--    <aside class="zwart">-->
<!--        <div>-->
<!--            <img src="blackandwhite.jpg" alt="bergen" class="img">-->
<!--        </div>-->
<!--    </aside>-->
<!--    <div>-->
<!--    <section class="schrijven">-->
<!--        <p>Welkom op mijn Portfolio</p>-->
<!--    </section></div>-->
<!--</main>-->
<!--<div class="Gegevens">-->
<!--    <footer>-->
<!--        <p>LinkedIn:Beyza Ylmm </p>-->
<!--        <p>Mail:s1212645@student.windesheim.nl</p>-->
<!--        <p>Nummer:06-39690815 </p>-->
<!--    </footer>-->
<!--</div>-->
<!--</body>-->

<!--</html>-->
<!--        <nav>-->
<!--        <div class="Home">-->
<!--            <a href="Home">Home</a>-->
<!--        </div>-->
<!--        <div class="Portfolio">-->
<!--        <a href="Portfolio">Portfolio</a>-->
<!--        </div>-->
<!--        <div class="About">-->
<!--            <a href="About">About</a>-->
<!--        </div>-->
<!--        <div class="Contact">-->
<!--            <a href="Contact">Contact</a>-->
<!--        </div>-->
<!--        </nav>-->



<!--    dit is een andere grid html code-->
<!--    <div class="parent">-->
<!--        <div class="div1"> </div>-->
<!--        <div class="div2"> </div>-->
<!--        <div class="div3"> </div>-->
<!--        <div class="div4"> </div>-->
<!--    </div>-->
<!--<div class= "mijnnaam"></div>-->
<!--    <h1> Beyza Yalim </h1>-->
<!--<div class="buttons">-->
<!--    <nav>-->
<!--        <a href="Home">Home</a>-->
<!--        <a href="Portfolio">Portfolio</a>-->
<!--        <a href="About">About</a>-->
<!--        <a href="Contact">Contact</a>-->
<!--    </nav>-->
<!--    </div>-->
<!--    <h1> Beyza Yalim </h1>-->
<!--    <h2><a> href="Home">Home</a></h2>-->
<!--    <h2><a> href="Portfolio">Portfolio</a></h2>-->
<!--    <h2><a> href="about">About</a></h2>-->
<!--    <h2><a> href="contact">Contact</a></h2>-->


<?php

$url= $_SERVER["REQUEST_URI"];
   function show(){
        require "./viewen/home.view.php";
    }

switch ($url) {
    case "/":
        require "./controllers/homecontroller.php";
        $controller=new HomeController();
        $controller=show();
        break;
    case "/Projects":
        require ('./controllers/projectscontroller.php');
        projectsController();
        break;

        break;
    case "/About":
        require ('controllers/AboutController.php');
        AboutController();
        break;
    case '/Contact':
        require ('controllers/contactcontroller.php');
        contactController();
        break;
    case "/admin":
        require "controllers/admincontroller.php";
        adminController();
        break;
}

