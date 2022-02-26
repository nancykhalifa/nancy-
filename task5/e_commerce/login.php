<?php
include_once "layouts/header.php";
include_once "layouts/nav.php";
require 'db.php';
session_start();

if (isset($_POST['submit'])) {
    $username = stripslashes($_POST['username']);
    $username = mysqli_real_escape_string($mysqli, $username);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($mysqli, $password);

    $query =
        "SELECT * FROM `users` WHERE username='$username'
                     AND password='" .
        md5($password) .
        "'";
    ($result = mysqli_query($mysqli, $query)) or die(mysqli_error($mysqli));
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['username'] = $username;

        header('Location: profile.php');
    } else {
        echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
    }
} else {
};
?>

<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Sign In</h3>
                <div class="card-body">
                    <form method="post" action="login.php">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">username</span>
                            </div>
                            <input type="text" class="form-control" placeholder="username">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">password</span>
                            </div>
                            <input type="password" class="form-control" placeholder="password">
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Remember Me
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn float-center login_btn"> <a href="profile.php"></a>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="register.php">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php

    include_once "layouts/footer.php";
    include_once "layouts/scripts.php";
    ?>