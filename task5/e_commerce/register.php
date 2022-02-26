<?php
include_once "layouts/header.php";
include_once "layouts/nav.php";
?>



<?php
require('db.php');

if (isset($_POST['submit'])) {

    $username = stripslashes($_POST['firstname,lastname']);
    $username = mysqli_real_escape_string($mysqli, $username);
    $email    = stripslashes($_POST['email']);
    $email    = mysqli_real_escape_string($mysqli, $email);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($mysqli, $password);
    $phone    = stripslashes($_POST['phone']);
    $phone    = mysqli_real_escape_string($mysqli, $phone);
    $gender = stripslashes($_POST['m,f']);
    $gender = mysqli_real_escape_string($mysqli, $gender);

    $create_datetime = date("Y-m-d H:i:s");
    $query    = "INSERT into `users` (firstname,lastname, password, email, gender,phone, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email','$gender','$phone', '$create_datetime')";
    $result   = mysqli_query($mysqli, $query);
    if ($result) {
        echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
    } else {
        echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
    };
}
?>

<div class="container">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Register<small>It's free!</small></h3>
                </div>
                <div class="panel-body">
                    <form action="login.php" method="POST">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone" class="form-control input-sm" placeholder="phone">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <select>
                                    <option value="gender">male</option>
                                    <option value="gender">female</option>
                                </select>
                            </div>
                        </div>

                        <input type="submit" value="Register" class="btn btn-info btn-block"><a href="login.php"></a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






<?php
include_once "layouts/footer.php";
include_once "layouts/scripts.php";
?>