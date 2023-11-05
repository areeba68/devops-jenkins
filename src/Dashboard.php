<?php include("controllers/user.php");
include ("controllers/redirect.php");
$regno=$_SESSION["regno"];
$name=$_SESSION["name"];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css files/Dashboardmain.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet" />
  </head>
  <body>
    <!-- navbar -->
    <div class="Container">
      <div class="nav">
        <img src="./assests/busLogo.png" alt="img not found" class="logo" />
        <a class="btn" href="Dashboard.php" style="text-decoration: none;" >
          <img src="./assests/Home icon.png" alt="icon not found" class="icon" />
          <p class="btntxt">Home</p>
        </a>
        
        <a class="btnInactive" href="profiledashboard.php" style="text-decoration: none;">
          <img src="./assests/profile.png" alt="icon not found" class="iconInactive" />
          <p class="btntxtInactive">Profile</p> 
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
          <p class="btntxtInactive" >Challan</p>
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
            <h1>Hello <?php echo $name ?>!</h1>
            <img src="./assests/./wave.png" alt="icon not found" class="wave" />
          </div>
          <div class="Container4">
             <div><img style="margin-top:11%" src="./assests/Notification1.png" alt="icon not found"class="notification">
    <div
      class="modal"
      style="
        display: none;
        position: fixed;
        width: 300px;
        height: 300px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-left:-200px;
        margin-top:80px">
      <div>
        <img width="100%" height="100%" src="./assests/NotificationPic.png">
      </div>
    </div>
  </div>
            <img src="./assests/newpic.png" alt="icon not found" class="accPic" />
          </div>
        </div>
        <h3>Welcome To COMSATS Transport System</h3>
        <!-- profile container -->
        <div class="ProfileContainer">
          <img src="./assests/newpic.png" alt="img not found" class="profileImg" />
          <div class="user">
            <div class="username" name="username"><?php echo $name ?></div>
            <div class="regno" name="regno"><?php echo $regno ?></div>
          </div>
        </div>
        <div class="Containers">
          <a class="RContainers" href="routesdashboard.php" style="text-decoration: none;" >
            <img src="./assests/RouteCard.png" alt="img not found" class="cardIcon" />
            <h1>Routes</h1>
          </a>
          <a class="FContainers" href="feechallandashboard.php" style="text-decoration: none;">
            <img src="./assests/challanCard.png" alt="img not found" class="cardIcon" />
            <h1>Fee Challan</h1>
          </a>
          <a class="HContainers" href="helpdashboard.php" style="text-decoration: none;">
            <img src="./assests/HelpCard.png" alt="img not found" class="cardIcon" />
            <h1>Help</h1>
          </a>
        </div>
      </div>
    </div>
     <script>
        document.querySelector(".notification").addEventListener("click", () => {
          if(document.querySelector(".modal").style.display=="none")
          {
            document.querySelector(".modal").style.display = "flex";
          }
          else
          {
            document.querySelector(".modal").style.display = "none";
          }
        });
      </script>
  </body>
</html>
