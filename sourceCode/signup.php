<?php

  include ('./php_includes/database.inc.php');
  include ('./php_includes/functions.inc.php');
  $msg = '';
  $name = '';
  $email = '';
  $password = '';

  if(isset($_POST['submit'])){
    $email = get_safe_value($_POST['email']);
    $password = MD5(get_safe_value($_POST['password']));
    $name = get_safe_value($_POST['name']);

    mysqli_query($con,"insert into users (name,email,password) values ('$name','$email','$password')");

    redirect('./login');
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/signInSignUp.css" />

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- Page Title -->
    <title>Sign Up Page</title>
  </head>
  <body>
    <div class="main">
      <div class="row">
        <div class="col-md-6 left">
          <img src="./assets/images/img.jpg" class="left__img img-fluid">
        </div>
        <div class="col-md-6 right">
          <div class="container">
            <div class="form">
              <p class="form__title">Create an Account !</p>
              <p class="form__desc">Please, provide details to create an account.</p>
              <form class="form__loginForm" method="post">
                <div class="form-group">
                  <input type="email" placeholder="Email Address" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                  <input type="text" placeholder="Name" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                  <input type="password" placeholder="Password" class="form-control" name="password" required>
                </div>
                <button name="submit" class="form__loginForm__submit btn">Sign Up</button>
                <br><a href="./login" class="form__loginForm__signup">Already a User? Log in</a>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
