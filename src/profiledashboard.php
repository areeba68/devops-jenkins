<?php include("controllers/user.php");
include ("controllers/redirect.php");
$regno=$_SESSION["regno"];
$name=$_SESSION["name"];
$phone=$_SESSION["phone"];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css files/profiledashboard.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet" />
    <style>
        span {
            display: block;
        }
        .headings{
          font-family: 'Comfortaa';font-size: 45px;
        }
    </style>
    
  </head>
  <body>
    <!-- navbar -->
    <div class="Container">
      <div class="nav">
        <img src="./assests/busLogo.png" alt="img not found" class="logo" />
        <a class="btnInactive" href="Dashboard.php" style="text-decoration: none;">
          <img src="./assests/Home icon.png" alt="icon not found" class="iconInactive"/>
          <p class="btntxtInactive" style="margin-top: 10%;">Home</p>
        </a>
        <a class="btn" href="profiledashboard.php" style="text-decoration: none;">
          <img src="./assests/profile.png" alt="icon not found" class="icon" style="width: 25px;
          height: 25px;
          margin-left: -80px;
          filter: brightness(0) invert(1);" />
          <p class="btntxt" style="padding-right: 30px;
          font-size: 18px;
          padding-top: 3px;
          margin-top: -30px;
          margin-left: 45px;
          font-family: poppins;">Profile</p>
        </a>
        <a class="btnInactive" href="routesdashboard.php" style="text-decoration: none;">
          <img src="./assests/routes.png" alt="icon not found" class="iconInactive" />
          <p class="btntxtInactive">Routes</p>
        </a>
        <a class="btnInactive" href="feechallandashboard.php" style="text-decoration: none;">
          <img
            src="./assests/Fee chalan.png"
            alt="icon not found"
            class="iconInactive"
          />
          <p class="btntxtInactive">Challan</p>
        </a>
        <a class="btnInactive" href="DashboardCoordinators.php" style="text-decoration: none;">
          <img src="./assests/team.png" alt="icon not found" class="iconInactive" />
          <p class="btntxtInactive">Team</p>
        </a>
        <a class="btnInactive" href="helpdashboard.php" style="text-decoration: none;">
          <img src="./assests/help.png" alt="icon not found" class="iconInactive" />
          <p class="btntxtInactive">Help</p>
        </a>
        <a class="signoutBtn" href="signIn.php" style="text-decoration: none;">Sign Out</a>
      </div>
      <!-- Dashboard -->
      <div class="Container1">
        <div class="container3">
          <div class="container2">
            <h1>Profile</h1>
          </div>
          <div class="Container4">
            <img
              src="./assests/Notification1.png"
              alt="icon not found"
              class="notification"
            />
            <img src="./assests/newpic.png" alt="icon not found" class="accPic" />
            
          </div>
        </div>
        <div>
            <div style="display: flex; margin-bottom: 5%;">
                <div class="col-4 pfpic">
                    <img height="100%" width="60%" src="./assests/newpic.png">
                </div>
                <div class="col-6" style="margin-left: -80px; padding-top: 70px;">
                    <h1> <?php echo $name ?></h1>
                    <h1> <?php echo $regno ?></h1>
                    <a href="#"><img src="./assests/Group 311.png" alt="icon not found" class="editPic"
                          width="100px" height="100px" style="margin-left: -180px;"/></a>
                </div>
                <div class="col-2" style="padding: 20px; padding-top: 150px;">
                    <button class="editBtn">Edit Profile</button>
                </div>
                
            </div>
            <div style="max-width: 80%; display: flex; border: solid white 1px; background-color: #F1F1F1"  >
                <div style=" padding: 25px; padding-right: 50px; padding-left: 40px; background-color: rgb(227, 227, 227); color: #4B2980;">
                  <div><p>Name</p></div>
                  <div><p>Registration No.</p></div>
                    <div><p>Phone No.</p></div>
                    <div><p>Email</p></div>
                    <div><p>Route</p></div>
                </div>
                <div style="padding: 25px; padding-right: 10px; padding-left: 80px; background-color: #F1F1F1; color:black;">
                  <div><p style="color: black;"><?php echo $name ?></p></div>
                  <div><p style="color: black;"><?php echo $regno ?></p></div>
                    <div><p style="color: black;"><?php echo $phone ?></p> </div>
                    <div><p style="color: black;"><?php echo $regno ?>@gmail.com</p></div>
                    <div><p style="color: black;">1</p></div>
                </div>

            </div>
            
          
            
           
        </div>
      </div>
    </div>
  </body>
</html>
