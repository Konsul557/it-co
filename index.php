<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="static/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div class="container back-img " id="img_back">
            <img src="img/layer.png " id="layer" class="fixed-top">
            <nav class="navbar navbar-expand-lg navbar-dark" id="nav">
                <div class="container" id="collapse">
                    <button class="navbar-toggler" id="coll" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" ></span>
                </button>
                    <div class="collapse navbar-collapse" id="basicExampleNav">
                        <ul class=" navbar-nav mr-auto smooth-scroll ">
                            <li class="nav-intem ">
                                <a href="#home " class="nav-link waves-effect waves-light " id="a_nav">Home</a>
                            </li>
                            <li class="nav-intem ">
                                <a href="#about " class="nav-link waves-effect waves-light " id="a_nav">About</a>
                            </li>
                        </ul>
                    </div>
                    <object type="image/svg+xml" data="img/logo-1.svg" id="logo"></object>
                    <div class="collapse navbar-collapse" id="basicExampleNav">
                        <ul class=" navbar-nav mr-auto smooth-scroll " style="margin-top: -1%;">
                            <li class="nav-intem ">
                                <a href="#service " class="nav-link waves-effect waves-light " id="a_nav">Service</a>
                            </li>
                            <li class="nav-intem ">
                                <a href="#contact " class="nav-link waves-effect waves-light " id="a_nav">Contact</a>
                            </li>
                            <?php 
                            require 'api/conn.php';
                            $email_ar = [];
                            $email = $_SESSION['email'];
                            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                array_push($email_ar, $row['email']);  
                            }
                            if ($email != null) {
                                echo '<li class="nav-intem ">
                                <a href="api/exit.php" id="reg">Выйти</a>
                                </li>';
                                
                            } else {
                                echo '<li class="nav-intem ">
                                <a href="auth_reg.html" id="reg">SignIn SignUp</a>
                                </li>';
                            }
                            ?>
                        </ul>


                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div id="sans120">
        <h1>I am Open Sans 120px</h1>
    </div>
    <div class="text-48px">
        <h1>I am open sans extra bold 48px</h1>
        <p>Please follow all directions, make fonts the same size, respect</p>
    </div>
    <div class="contanier-fluid" style="position: relative; margin: 0px 50px;">
        <div class="card-deck" style="margin-bottom: 50px;">
            <div class="card">
                <img src="img/card1.png " class="card-img">
            </div>
            <div class="card ">
                <img src="img/card2.png " class="card-img ">

            </div>
            <div class="card ">
                <img src="img/card3.png" class="card-img ">
            </div>
        </div>
    </div>







    <!-- JQuery -->
    <script type=" text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js "></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js "></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js "></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js "></script>
    <script src="static/scripts.js "></script>

</body>

</html>