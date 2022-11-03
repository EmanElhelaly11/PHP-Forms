<?php

session_start();
if(!isset($_SESSION['login'])){
	header("Location: login.php");
} 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class="container register">
        <div class="row">
            <div class="col-md-12 register-left">
                <h1> Welcome To Home Page!</h1>
                <a href="logout.php">Log Out!</a>
            </div>
            <div>
</body>

</html>