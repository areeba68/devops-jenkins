<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link rel="stylesheet" href="./css files/AdminDashboard.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet" />
  </head>
  <body>
    <!-- navbar -->
    <div class="Container">
      <div class="nav">
        <img src="./assests/busLogo.png" alt="img not found" class="logo" />
        <a class="btn" href="AdminDashboard.php" style="text-decoration: none">
          <img
            src="./assests/Home icon.png"
            alt="icon not found"
            class="icon"
          />
          <p class="btntxt">Home</p>
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
          class="btnInactive"
          href="AdminQueries.php"
          style="text-decoration: none"
        >
          <img
            src="./assests/help.png"
            alt="icon not found"
            class="iconInactive"
          />
          <p class="btntxtInactive">Queries</p>
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
        
        <a class="signoutBtn" href="signinadmin.php" style="text-decoration: none"
          >Sign Out</a
        >
      </div>
      <!-- Dashboard -->
      <div class="Container1">
        <div class="container3">
          <div class="container2">
            <h1>Admin Dashboard</h1>
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
        margin-left:-250px;
        margin-top:80px">
      <div>
        <img width="100%" height="100%" src="./assests/NotificationPic.png">
      </div>
    </div>
  </div>
           
          </div>
        </div>
        <!-- profile container -->
        <div
          style="
            display: flex;
            flex-direction: row;
            justify-content: space-between;
          "
        >
        
        <a class="ProfileContainer" href="AdminQueries.php" style="text-decoration: none;">
            <div style="width: 90%">
              <div
                style="
                  display: flex;
                  flex-direction: row;
                  align-items: center;
                  justify-content: space-between;
                "
              >
                <h1 style="color: white">Queries</h1>
                <img src="./assests/more2 (1).png" alt="" style="height: 40px" />
              </div>

              <img src="./assests/search.png" alt="" style="width: 100%" />
              <div
                style="display: flex; flex-direction: row; align-items: center"
              >
                <img
                  src="./assests/profile1.png"
                  alt=""
                  style="width: 60px; height: 60px"
                />
                <div>
                  <p class="p1">
                    <b> Mr. Admin</b> <br />
                    Good Afternoon
                  </p>
                </div>
              </div>
            </div>
          </a>
          <a class="RContainers" href="RoutesAdmin.php" style="text-decoration: none;">
            <img
              src="./assests/RouteCard.png"
              alt="img not found"
              class="cardIcon"
            />
            <h1>Routes</h1>
          </a>
        </div>
        <div
          style="
            display: flex;
            flex-direction: row;
            justify-content: space-between;
          "
        >
        <a class="ProfileContainer2" href="StudentsRegistered.php" style="text-decoration: none;background-color: white">

            <div style="width: 85%; margin-top: 20px">
              <h1 style="font-size: 28px">Students Registered</h1>
              <div class="header">
                <div class="th1">Registration No.</div>
              </div>
              <div class="table">
                <img
                  src="./assests/newpic.png"
                  alt=""
                  style="width: 40px; height: 40px; margin-left: 40px"
                />
                <div class="regNo">FA20-BCS-053.</div>
              </div>
            </div>
        </a>
          <a class="FContainers" href="AdminFeeChallan.php" style="text-decoration: none;">
            <img
              src="./assests/challanCard.png"
              alt="img not found"
              class="cardIcon"
            />
            <h1>Fee Challan</h1>
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
