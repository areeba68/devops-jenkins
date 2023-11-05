<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link rel="stylesheet" href="./css files/AdminDashboard.css" />
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
    <div class="Container" style="height: 100%">
      <div class="nav">
        <img src="./assests/busLogo.png" alt="img not found" class="logo" />
        <a
          class="btnInactive"
          href="AdminDashboard.php"
          style="text-decoration: none"
        >
          <img
            src="./assests/Home icon.png"
            alt="icon not found"
            class="iconInactive"
          />
          <p class="btntxtInactive">Home</p>
        </a>

        <a
          class="btnInactive"
          href="StudentsRegistered.php"
          style="text-decoration: none"
        >
          <img
            src="./assests/Students.png"
            alt="icon not found"
            class="iconInactive"
          />
          <p class="btntxtInactive">Students</p>
        </a>

        <a
          class="btnInactive"
          href="RoutesAdmin.php"
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
          class="btnInactive"
          href="AdminFeeChallan.php"
          style="text-decoration: none"
        >
          <img
            src="./assests/Fee chalan.png"
            alt="icon not found"
            class="iconInactive"
          />
          <p class="btntxtInactive">Challan</p>
        </a>
        <a
          class="btn"
          style="
            text-decoration: none;
            margin-top: 10px;
            width: 150px;
            margin-left: 10px;
          "
        >
          <img src="./assests/help.png" alt="icon not found" class="icon" />
          <p class="btntxt">Queries</p>
        </a>
        <a
          class="btnInactive"
          href="BusRegistration.php"
          style="text-decoration: none"
        >
          <img
            src="./assests/bus.png"
            alt="icon not found"
            class="iconInactive"
          />
          <p class="btntxtInactive">Registration</p>
        </a>

        <a
          class="signoutBtn"
          href="signinadmin.php"
          style="text-decoration: none"
          >Sign Out</a
        >
      </div>
      <!-- Dashboard -->
      <div class="Container1">
        <div class="container3">
          <div class="container2">
            <h1>Student Queries</h1>
          </div>
          <div class="Container4">
            <img
              src="./assests/Notification1.png"
              alt="icon not found"
              class="notification"
            />
          </div>
        </div>
        <img
          src="./assests/Queries.png"
          alt="img not found"
          style="height: 85%; width: 85%; margin-top: 30px"
        />
      </div>
    </div>
  </body>
</html>
