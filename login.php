<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>myRecipes Login</title>
    <link rel="stylesheet" type="text/css" href="Style/style.css">
    <link rel="stylesheet" type="text/css" href="Style/login_register.css">
</head>

<body>
    <nav class="navbar navbar-light bg-light navbar-expand-md fixed-top">
        <a class="navbar-brand" href="index.php">
            <img src="Pictures/myrecipeslogo.png" alt="logo" style="width: 40px; height: 30px;" class="ml-md-4">
        </a>
    </nav>
        <div class="header">
            <h2 class="cool-link">Login</h2>
        </div>

        <form method="post" action="login.php">
            <?php include('errors.php'); ?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
            </div>
            <p>
                Not yet a member? <a href="register.php" class="cool-link">Sign up</a>
            </p>
        </form>
</body>

</html>