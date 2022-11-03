<?php

session_start();
include 'conn.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$email = $_POST['email'];
$pass = $_POST['pass'];
$encpass = md5($pass);

$qselect = "SELECT * FROM users2 WHERE email='$email' and pass='$encpass'";
$selected = $conn->query($qselect);
$numberofrows = $selected->num_rows;

if($numberofrows != 0){
	$_SESSION['login'] = true;
    header("Location: home.php");
}else{
	header("Location: login.php");
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <h3>Log In</h3><br><br><br><br>
                <a href="index.php">Sign Up!</a>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Hirer</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    </div>

                    <form action="login.php" method="post">
                        <div class="row register-form">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" name="email"
                                        required />
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" name="pass"
                                        required />
                                </div>

                                <input type="submit" class="btnRegister" value="Login" />
                            </div>
                    </form>
                </div>
            </div>
</body>

</html>