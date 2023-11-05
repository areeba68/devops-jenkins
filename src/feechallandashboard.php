<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css files/feechallanDashboard.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Comfortaa"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- navbar -->
    <div class="Container">
      <div class="nav">
        <img src="./assests/busLogo.png" alt="img not found" class="logo" />
        <a
          class="btnInactive"
          href="Dashboard.php"
          style="text-decoration: none"
        >
          <img
            src="./assests/Home icon.png"
            alt="icon not found"
            class="iconInactive"
          />
          <p class="btntxtInactive" style="margin-top: 10%">Home</p>
        </a>
        <a
          class="btnInactive"
          href="profiledashboard.php"
          style="text-decoration: none"
        >
          <img
            src="./assests/profile.png"
            alt="icon not found"
            class="iconInactive"
          />
          <p class="btntxtInactive">Profile</p>
        </a>
        <a
          class="btnInactive"
          href="routesdashboard.php"
          style="text-decoration: none"
        >
          <img
            src="./assests/routes.png"
            alt="icon not found"
            class="iconInactive"
          />
          <p class="btntxtInactive">Routes</p>
        </a>
        <a
          class="btn"
          href="feechallandashboard.php"
          style="text-decoration: none"
        >
          <img
            src="./assests/Fee chalan.png"
            alt="icon not found"
            class="icon"
            style="
              width: 25px;
              height: 25px;
              margin-left: 35px;
              filter: brightness(0) invert(1);
            "
          />
          <p
            class="btntxt"
            style="
              padding-right: 30px;
              font-size: 18px;
              padding-top: 3px;
              font-family: poppins;
            "
          >
            Challan
          </p>
        </a>
        <a
          class="btnInactive"
          href="DashboardCoordinators.php"
          style="text-decoration: none"
        >
          <img
            src="./assests/team.png"
            alt="icon not found"
            class="iconInactive"
          />
          <p class="btntxtInactive">Team</p>
        </a>
        <a
          class="btnInactive"
          href="helpdashboard.php"
          style="text-decoration: none"
        >
          <img
            src="./assests/help.png"
            alt="icon not found"
            class="iconInactive"
          />
          <p class="btntxtInactive">Help</p>
        </a>
        <a class="signoutBtn" href="signIn.php" style="text-decoration: none"
          >Sign Out</a
        >
      </div>
      <!-- Dashboard -->
      <div class="Container1">
        <div class="container3">
          <div class="container2">
            <h1>Fee Challan</h1>
          </div>
          <div class="Container4">
            <a href="./assests/Fee Challan.pdf" download class="printBtn" style="width:150px;height:30px; text-decoration: none; text-align:center; padding-top:15px; border-radius:0px" >Print Challan</a>
            <img
              src="./assests/Notification1.png"
              alt="icon not found"
              class="notification"
            />
            <img src="./assests/newpic.png" alt="icon not found" class="accPic" />
          </div>
        </div>
        <div class="challancombine" style="text-align: center">
          <div>
            <img src="./assests/Group 308.png" height="90%" width="80%" />
          </div>
          <div>
            <img src="./assests/Group 309.png" height="90%" width="80%" />
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
