<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css files/route1dashboard.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet" />
    <style>
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
        <a class="btnInactive" href="profiledashboard.php" style="text-decoration: none;">
          <img src="./assests/profile.png" alt="icon not found" class="iconInactive" />
          <p class="btntxtInactive" style="margin-top: 10%;">Profile</p>
        </a>
        <a class="btn" href="routesdashboard.php" style="text-decoration: none;">
          <img src="./assests/routes.png" alt="icon not found" class="icon" style="width: 25px;
          height: 25px;
          margin-left: -80px;
          filter: brightness(0) invert(1);" />
          <p class="btntxt" style="padding-right: 30px;
          font-size: 18px;
          padding-top: 3px;
          margin-top: -30px;
          margin-left: 45px;
          font-family: poppins;">Routes</p>
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
            <p class="headings">Routes</p>
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
            <div>
                <div class="route-table">
                    <table style="width:100%">
                        <tr>
                            <th>Route 1</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td class="column1">Stops</td>
                            <td class="column2">F-11 Markaz Hamza Chowk, F-11 Khokha Stop, F-11 Golra More,
                                E-11 Signal (Main Margalla Road), Jugnu Stop, E-11 Service Road, F-10 Roud about,
                                F-9 DCI, E-9 P.A.F Complex Gate, E-9 Shaheen Chowk, E-8/F-8 Madina Market</td>
                        </tr>
                        <tr>
                            <td class="column1">Bus No.</td>
                            <td class="column2">AWX-1447</td>
                        </tr>
                        <tr>
                            <td class="column1">Driver</td>
                            <td class="column2">Tanveer Ahmad, Muhammad Ahmad</td>
                        </tr>
                        <tr>
                            <td class="column1">Shifts</td>
                            <td class="column2"><span style="display: block;">Morning Shift: 8am - 2:45pm</span>
                            <span>Evening Shift: 10:30am - 5:45pm</span></td>
                        </tr>
                        <tr>
                            <td class="column1">Capacity</td>
                            <td class="column2">42 seats filled
                                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                 <span style="color: #1D85EA;">Total 60</span></td>
                            
                        </tr>
                    </table>
                   
                </div>
                <button class="routeBtn">Select Route</button>
            
        
            </div>
        </div>
      </div>
    </div>
  </body>
</html>
