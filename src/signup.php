<?php
include('controllers/user.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup</title>
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
    <div class="vh-100 " style="margin-right: 100px;">
        <div class="container1">
            <img src="./assests/Group152.png" class="vh-100" />
        </div>
        <div class="container2">
            
            
        </div>
        <div class="container3">
            <img class="img-fluid" src="./assests/Group 273.png" />
        </div>
        <div style="margin-left: 70.2%;" class="container4">
            <p class="headings">Sign Up</p>
        </div>
        <div class="container5">
            <form method="post" onsubmit="return validate()">
                <input type="hidden" name="userType" class="user-type" />
                <input class="regno" name="regno" type="text" placeholder="Registration Number" />
                <br />
                <input class="name" name="name" type="text" placeholder="Name" id="Name" />
                <br />
                <input class="phone" name="phone" type="tel" placeholder="Phone no.(1234-1234567)" pattern="[0-9]{4}-[0-9]{7}" />
                <br />
                <input class="password" name="password" type="password" placeholder="Password" id="Password" />
                <br />
                <input class="cf-password" name="cfpassword" type="password" placeholder="Confirm Password" />
                <br />
                <input type="submit" name="user-signup" class="btn-primary">
                <p class="belowoption">
                    &nbsp; &nbsp; &nbsp &nbsp &nbspAlready have an Account? <a href="signIn.php" class="signbtn">Sign In</a>
                </p>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $(".admin-btn").click(() => {
            $(".user-type").val("admin")
        })
        $(".student-btn").click(() => {
            $(".user-type").val("student")
        })
        $(".user-type").val("student")

        function validate() {
            var name = document.getElementById('Name').value;
            var password = document.getElementById('Password').value;
            var validateName = /([A-Z]{1})([a-z]+)(\s)([A-Z]{1})([a-z]+){1}/;
            var validatePass = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/;
            if (name.length < 6) {
                alert("Your name must be atleast 6 digits long!");
                return false;
            } else if (!validateName.test(name)) {
                alert("Your first and last name should start with capital letter and there should be space in betweeen!");
                return false;
            } else if (password.length < 8) {
                alert("Your password must be atleast 8 digits long!");
                return false;
            } else if (!validatePass.test(password)) {
                alert("Your password must contain a letter and a number");
                return false;
            } else {
                return true;
            }
        }
    </script>
</body>

</html>