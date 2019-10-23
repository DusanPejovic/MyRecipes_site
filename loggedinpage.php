<?php

session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="loggedpage.css">
    <title>myRecipes</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light navbar-expand-md fixed-top">
        <a class="navbar-brand" href="index.php">
            <img src="myrecipeslogo.png" alt="logo" style="width: 40px; height: 30px;" class="ml-md-4">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
        </a>
        <div class="collapse navbar-collapse" id="navbarmenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ml-3">
                    <a class="nav-link cool-link" href="#">Welcome <?php echo $_SESSION['username']; ?></a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link cool-link" href="logout.php">Log out</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link cool-link" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link cool-link" href="https://facebook.com/"><i class="fa fa-facebook-square"></i></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="d-md-6 d-12 text-center mt-5" id="left">
                <div id="userimg">
                    <img src="kuvar.png" alt="">
                    <h1><?php echo $_SESSION['username']; ?></h1>
                    <a class="cool-link" href="changecredentials.php"> Promeni kredencijale</a><br>
                    <a class="cool-link" href="">Moji recepti</a><br>
                    <a class="cool-link" href="logout.php">Odjavi se</a>
                </div>
                <div id="userrecipes">
                    <h2 onclick="toggle(this)" style="font-style: italic; font-family:Georgia, 'Times New Roman', Times, serif; font-size: 40px" class="pt-4 mb-5 cool-link">moji recepti<span class="btn"> &#9776;</span> </h2>
                    <div id="myrecipes">
                        <ul id="recipeList">
                        </ul>
                    </div>
                </div>

            </div>
            <div class="d-md-6 d-12 mt-5" id="right">
                <div id="serverrecipes">
                    <div class="text-center">
                        <h2 class="mb-5 pt-4" style=" font-style: italic; font-family:Georgia, 'Times New Roman', Times, serif; font-size: 50px">recepti</h2>
                    </div>
                    <div id="recipes">
                        <ul>
                            <li>
                                <img src="trpeza.jpg" alt="">
                                <p>recipe 1 <i onclick="like(this)" class="fa fa-thumbs-up"></i></p>
                            </li>
                            <li>
                                <img src="trpeza.jpg" alt="">
                                <p>recipe 1 <i onclick="like(this)" class="fa fa-thumbs-up"></i></p>
                            </li>
                            <li>
                                <img src="trpeza.jpg" alt="">
                                <p>recipe 1 <i onclick="like(this)" class="fa fa-thumbs-up"></i></p>
                            </li>
                            <li>
                                <img src="trpeza.jpg" alt="">
                                <p>recipe 1 <i onclick="like(this)" class="fa fa-thumbs-up"></i></p>
                            </li>
                            <li>
                                <img src="trpeza.jpg" alt="">
                                <p>recipe 1 <i onclick="like(this)" class="fa fa-thumbs-up"></i></p>
                            </li>
                            <li>
                                <img src="trpeza.jpg" alt="">
                                <p>recipe 1 <i onclick="like(this)" class="fa fa-thumbs-up"></i></p>
                            </li>
                            <li>
                                <img src="trpeza.jpg" alt="">
                                <p>recipe 1 <i onclick="like(this)" class="fa fa-thumbs-up"></i></p>
                            </li>
                            <li>
                                <img src="trpeza.jpg" alt="">
                                <p>recipe 1 <i onclick="like(this)" class="fa fa-thumbs-up"></i></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="script.js"></script>
</body>

</html>