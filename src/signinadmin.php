<?php
include('controllers/user.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Transport System</title>
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

  <div class="vh-100">
    <div class="container1">
      <img src="./assests/Group152.png" class="vh-100" />
    </div>
    <div class="container2">
      <a type="button" class="btn-dark" href="signIn.php" style="text-decoration:none; 
      padding: 4px;text-align: center; margin-top: 2%;">Student</a>
      <button type="button" class="btn-light">Admin</button>
    </div>
    <div class="container3">
      <img class="img-fluid" src="./assests/Group 273.png" />
    </div>
    <div class="container4">
      <p class="headings">Sign In</p>
    </div>
    <p class="text-danger fw-bold error" style="display: none;">Invalid username or password</p>
    <div class="container5">
      <form method="post" onsubmit="return validate()" action="AdminDashboard.php">
        <input class="name" type="text" placeholder="Name" required />
        <br />
        <input class="password" type="password" placeholder="Password" required />
        <br />
        <input class="btn-primary" type="submit" id="adminsign" />
        
      </form>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
  </script>
  <script>
    function validate() {
      if ($(".name").val() == "admin" && $(".password").val() == "admin") {
        return true
      } else {
        $(".error").css({
          display: "block"
        })
        return false
      }
    }
  </script>

</body>

</html>