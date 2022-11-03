<?php

include 'conn.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$birth_date = $_POST['birth_date'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$country = $_POST['country'];
$gender = $_POST['gender'];
$pass = $_POST['pass'];
$encpass = md5($pass);
$confirm_pass = $_POST['confirm_pass'];
$encconrirm_pass = md5($confirm_pass);

if ($encpass == $encconrirm_pass){
    $q = "INSERT INTO users2(fname, lname, birth_date, email, phone_number, country, gender, pass, confirm_pass, date) VALUES ('$fname','$lname',
    '$birth_date','$email','$phone_number','$country','$gender','$encpass','$encconrirm_pass',Now())";
    $inserted = $conn->query($q); 
    if ($inserted){
        header("Location: login.php");
     } 
    }
}

?>


<!DOCTYPE html>

<head>
    <title>Registration</title>
    <link href="style.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <h3>Welcome</h3>
                <p>You are 30 seconds away from earning your own money!</p><br>
                <a href="login.php">Log In!</a>
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
                        <h3 class="register-heading">Apply as a Employee</h3>
                    </div>

                    <form action="index.php" method="post">
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name *" name="fname"
                                        required />
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name *" name="lname"
                                        required />
                                </div>

                                <div class="form-group">
                                    <input type="date" class="form-control" placeholder="Date of Birth *"
                                        name="birth_date" required />
                                </div>

                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="male" required>
                                            <span> Male </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="female" required>
                                            <span>Female </span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" name="email"
                                        required />
                                </div>

                                <div class="form-group">
                                    <input type="text" name="phone_number" class="form-control"
                                        placeholder="Your Phone *" required />
                                </div>

                                <div class="form-group">
                                    <select class="form-control" name="country" required>
                                        <option class="hidden" selected disabled>Please Select Your Country</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="India">India</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" name="pass"
                                        required />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password *"
                                        name="confirm_pass" required />
                                </div>
                                <input type="submit" class="btnRegister" value="Register" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>

</html>