<?php
include('server.php');
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
    <link rel="stylesheet" href="indexstyle.css">
    <title>myRecipes</title>


    <style>
    li img{
    height: 100px;
    width: 200px;
}
#recipes ul {
    columns: 3;
    list-style-type: none;
    height: 450px;
}
h1, p {
    font-style: italic; font-family:Georgia, 'Times New Roman', Times, serif;
}
h1 {
    font-size:50px;
}
#about {
    font-size: 20px;
}



    </style>
</head>

<body>


    <nav class="navbar navbar-light bg-light navbar-expand-md fixed-top">
        <a class="navbar-brand" href="#">
            <img src="myrecipeslogo.png" alt="logo" style="width: 40px; height: 30px;" class="ml-md-4">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
        </a>
        <div class="collapse navbar-collapse" id="navbarmenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ml-3">
                    <a onclick="loginalert()" name="loginalert" class="nav-link cool-link" href="loggedinpage.php">myRecipes
                        <?php if (isset($_SESSION['username'])) {
                            echo $_SESSION['username'];
                        } ?>
                    </a>
                </li>
                <?php
                if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
                    echo "<li class='nav-item ml-3'>";
                    echo "<a class='cool-link nav-link' href='login.php'>Login</a>";
                    echo "</li>";
                    echo "<li class='nav-item ml-3'>";
                    echo "<a class='nav-link cool-link' href='register.php'>Register</a>";
                    echo "</li>";
                }
                ?>
                <li class="nav-item ml-3">
                    <a class="nav-link cool-link" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link cool-link" href="https://facebook.com/"><i class="fa fa-facebook-square"></i></a>
                </li>
            </ul>
        </div>

    </nav>


    <div id="mainDiv">
        <div id="mainDiv1">
            <div id="frontPage" class="text-center mt-5" style="padding: 2% ">
                <img id="logo" src="myrecipeslogo.png" alt="logo" class="mt-5">
                <h1 style="font-style: italic; font-family:Georgia, 'Times New Roman', Times, serif; font-size: 50px">
                    Welcome to
                    myRecipes!</h1>

                <!-- dugme za paljenje tabele sa receptima-->

                <a role="button" class="cool-link mt-5 collapse-toggler" data-toggle="collapse" data-target="#recipes" id="recipeToggler" onclick="removeCar(this)">Step into the
                    magic of tastes...
                </a>

                <!-- kolapsirajuca tabela sa receptima-->

                <div class="collapse" id="recipes">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <h1 class="mt-5 mb-5">About us</h1>
                            <p id="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat blanditiis temporibus quod placeat nihil ut sed pariatur, neque voluptatum sit excepturi quidem distinctio assumenda? Necessitatibus modi minus in magni incidunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, alias quos! Temporibus accusamus sunt aliquam deleniti illum enim rem, eaque impedit eum nihil cupiditate reprehenderit sequi iusto minus et! Illum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laudantium atque distinctio maxime. Animi enim eius nemo? Magni voluptate, sint vel ex, non adipisci odit odio accusantium et aliquam saepe!</p>
                        </div>
                        <div class="col-md-6 col-12">
                            <h1 class="mt-5 mb-5">Recipes</h1>
                        <ul style="overflow-y : scroll;">
                            <li>
                                <img src="trpeza.jpg" alt="">
                                <p>recipe 1</p>
                            </li>
                            <li>
                                <img src="trpeza.jpg" alt="">
                                <p>recipe 1</p>
                            </li>
                            <li>
                                <img src="trpeza.jpg" alt="">
                                <p>recipe 1</p>
                            </li>
                            <li>
                                <img src="trpeza.jpg" alt="">
                                <p>recipe 1</p>
                            </li>
                            <li>
                                <img src="trpeza.jpg" alt="">
                                <p>recipe 1</p>
                            </li>
                            <li>
                                <img src="trpeza.jpg" alt="">
                                <p>recipe 1</p>
                            </li>
                            <li>
                                <img src="trpeza.jpg" alt="">
                                <p>recipe 1</p>
                            </li>
                            <li>
                                <img src="trpeza.jpg" alt="">
                                <p>recipe 1</p>
                            </li>
                            <li>
                                <img src="trpeza.jpg" alt="">
                                <p>recipe 1</p>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--carousel-->

            <div id="carousel" class="carousel slide d-md-block d-none text-center" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#karusel" data-slide-to="1" class="active"></li>
                    <li data-target="#karusel" data-slide-to="2"></li>
                    <li data-target="#karusel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="trpeza.jpg" alt="img1">

                    </div>
                    <div class="carousel-item">
                        <img src="pica.jpg" alt="img2">

                    </div>
                    <div class="carousel-item">
                        <img src="trpeza2.jpg" alt="img3">

                    </div>

                </div>
                <a class="carousel-control-prev" href="#carousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>

                <a class="carousel-control-next" href="#carousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>

            <div class="d-md-none">
                <img style="height: 300px;width: 100%;" src="trpeza2.jpg" alt="img3">
            </div>
        </div>
    </div>
</body>


<script src="script.js"></script>

</html>