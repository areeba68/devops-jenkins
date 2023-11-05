<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css files/helpdashboard.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Comfortaa"
      rel="stylesheet"
    />
    <style>
      span {
        display: block;
      }
      .headings {
        font-family: "Comfortaa" !important;
        font-size: 45px;
      }
    </style>
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
          <p class="btntxtInactive" style="margin-top: 15px">Home</p>
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
          <p class="btntxtInactive" style="margin-top: 15px">Profile</p>
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
          <p class="btntxtInactive" style="margin-top: 15px">Routes</p>
        </a>
        <a
          class="btnInactive"
          href="feechallandashboard.php"
          style="text-decoration: none"
        >
          <img
            src="./assests/Fee chalan.png"
            alt="icon not found"
            class="iconInactive"
          />
          <p class="btntxtInactive" style="margin-top: 15px">Challan</p>
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
          <p class="btntxtInactive" style="margin-top: 15px">Team</p>
        </a>
        <a class="btn" href="helpdashboard.php" style="text-decoration: none">
          <img
            src="./assests/help.png"
            alt="icon not found"
            class="icon"
            style="
              width: 25px;
              height: 25px;
              margin-left: -80px;
              filter: brightness(0) invert(1);
            "
          />
          <p
            class="btntxt"
            style="
              padding-right: 30px;
              font-size: 18px;
              padding-top: 3px;
              margin-top: -30px;
              margin-left: 45px;
              font-family: poppins;
            "
          >
            Help
          </p>
        </a>
        <a class="signoutBtn" href="signIn.php" style="text-decoration: none"
          >Sign Out</a
        >
      </div>
      <!-- Dashboard -->
      <div class="Container1">
        <div class="container3">
          <div class="container2">
            <h1 class="headings"><b>Help</b></h1>
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
          <div
            class="container4b"
            style="padding-top: 5%; padding-bottom: 5%; width: 60%"
          >
            <p>
              For more assistance/information and any query of regarding
              transport office/service/routes etc. you may contact on following
              contact numbers during office/business hours;
            </p>
            <p><b>Routes/Buses/Transport Service Information;</b></p>
            <p>
              <span>051-9049-5932 Ext: 5932</span>
              <span>051-9049-6128 Ext: 6128</span>
            </p>

            <p><b>General Information/Complaints;</b></p>
            <p>
              <span>051-9049-5932 Ext: 5932</span>
              <span>051-9049-5933 Ext: 5933</span>
            </p>
          </div>
          <img src="./assests/chat.png" alt="icon not found" class="chat" style="width: 30%;height: 70%;position: absolute;bottom: 40px;right: 50px;" />
        </div>
      </div>
    </div>
  </body>
</html>
