<?php

  session_start();
  include ('./php_includes/database.inc.php');
  include ('./php_includes/functions.inc.php');
  $msg = '';
  $email = '';
  $password = '';

  if(isset($_POST['submit'])){
    $email = get_safe_value($_POST['email']);
    $password = MD5(get_safe_value($_POST['password']));
    
    $query = "select * from users where email ='$email' and password='$password'";
    $res = mysqli_query($con,$query);
    $count = mysqli_num_rows($res);

    if($count>0){
      $row = mysqli_fetch_assoc($res);
      $_SESSION['SUCCESS'] = 'yes';
      $_SESSION['USER'] = $row['name'];
      $_SESSION['EMAIL'] = $row['email'];
      redirect('index');
    }
    else{
      $msg = "Please Enter valid details";
    }
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
    <title>Login Page</title>
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
              <p class="form__title">Welcome Back !</p>
              <p class="form__desc">Please, provide login credentials to proceed further.</p>
              <form class="form__loginForm" method="post">
                <div class="form-group">
                  <input type="email" placeholder="Email Address" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                  <input type="password" placeholder="Password" class="form-control" name="password" required>
                </div>
                <div class="error_msg">
                <?php
                  echo $msg;
                ?>
              </div>
                <button name="submit" class="form__loginForm__submit btn">Login</button>
                <br><a href="./signup" class="form__loginForm__signup">New User? Create an account</a>
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
