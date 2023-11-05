<?php
include('controllers/user.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign in</title>
  <link rel="stylesheet" href="./css files/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet" />
  <style>
    body {
      font-family: "Poppins";
      font-size: 22px;
    }

    .headings {
      font-family: "Comfortaa";
      font-size: 45px;
    }

    .submitbtn {
      font-family: "Poppins";
      font-size: 15px;
    }

    .studentbtn {
      font-family: "Poppins";
      font-size: 15px;
    }

    .adminbtn {
      font-family: "Poppins";
      font-size: 15px;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" />
</head>

<body>

  <div class="vh-100" style="margin-right: 100px;">
    <div class="container1">
      <img src="./assests/Group152.png" class="vh-100" />
    </div>
    <div class="container2">
      <button type="button" class="btn-dark student">Student</button>
      <a type="button admin" href="signinadmin.php" class="btn-light" style="text-decoration:none; ">Admin</a>
    </div>
    <div class="container3">
      <img class="img-fluid" src="./assests/Group 273.png" />
    </div>
    <div class="container4">
      <p class="headings">Sign In</p>
    </div>
    <?php
    if ($wrongInput) {
      echo "<p class='text-danger fw-bold'>Invalid username or password</p>";
    };
    ?>

    <div class="container5">
      <form method="post">
        <input class="regno" type="text" placeholder="Registration Number" name="regno" required />
        <br />
        <input class="password" type="password" placeholder="Password" name="password" required />
        <br />
        <input class="btn-primary" type="submit" name="user-signin" />
        <p class="belowoption">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Dont have an Account? <a href="signup.php" class="signbtn">Sign Up</a>
        </p>
      </form>
    </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>