<?php
include('server.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/login_register.css">
    <title>Document</title>

    <style>
        .change {
            display: none;
        }

        h2 {
            color: black;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light navbar-expand-md fixed-top">
        <a class="navbar-brand" href="index.php">
            <img src="Pictures/myrecipeslogo.png" alt="logo" style="width: 40px; height: 30px;" class="ml-md-4">
        </a>
    </nav>
    <div class="header">
        <h2>Change Credentials</h2>
        <div><a class="cool-link" onclick="openPass(); closePass()">Change your password</a></div>
        <div><a class="cool-link" onclick="openEmail();">Change your email</a></div>
        <div><a class="cool-link" onclick="openUsername()">Change your username</a></div>
    </div>
    <!--change password-->
    <form id="CHPform" class="change" method="post" action="changecredentials.php">
        <?php include('errors.php'); ?>
        <button style="float:right" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="input-group">
            <label>New password</label>
            <input type="password" name="newpassword_1">
        </div>
        <div class="input-group">
            <label>Repeat password</label>
            <input type="password" name="newpassword_2">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="change_pass">Change</button>
        </div>
        <p>
            <a href="index.php" class="cool-link">Go back</a>
        </p>
    </form>
    <!--change email-->
    <form id="CHEform" class="change" method="post" action="changecredentials.php">
        <?php include('errors.php'); ?>
        <button style="float:right" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="input-group">
            <label>New email</label>
            <input type="email" name="newemail">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="change_mail">Change</button>
        </div>
        <p>
            <a href="index.php" class="cool-link">Go back</a>
        </p>
    </form>
    <!--change username-->
    <form id="CHUform" class="change" method="post" action="changecredentials.php">
        <?php include('errors.php'); ?>
        <button style="float:right" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="input-group">
            <label>New username</label>
            <input type="username" name="newusername">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="change_name">Change</button>
        </div>
        <p>
            <a href="index.php" class="cool-link">Go back</a>
        </p>
    </form>

    <script type="text/javascript" src="JS/script.js"></script>
</body>

</html>