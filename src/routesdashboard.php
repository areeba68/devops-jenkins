<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css files/routedashboard.css" />
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
            <h1 class="headings">Routes</h1>
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
            <p>Your Selected Route: Route 1</p>
            <div class="container4b">
                <div class="route-table">
                    <table style="width:100%">
                        <tr>
                            <th>Routes</th>
                            <th>Details of Stops</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td class="column1">Route 1</td>
                            <td class="column2">F-11 Markaz Hamza Chowk, F-11 Khokha Stop, F-11 Golra More,
                                E-11 Signal (Main Margalla Road), Jugnu Stop, E-11 Service Road, F-10 Roud about,
                                F-9 DCI, E-9 P.A.F Complex Gate, E-9 Shaheen Chowk, E-8/F-8 Madina Market,
                                Zafar Chowk, E-7/F-7 Faisal Chowk,
                                F-7 Rana Market, F-7 Parbat Road Signal, F-6 Flower Market, F-6 Press Club</td>
                            <td style="padding-left: 15px; padding-bottom: 30px;">
                            <a href="/TransportSystemWebPHPFinalOne/route1dashboard.php">
                                <img src="./assests/Group 293.png" height="55%" width="55%">
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="column1">Route 2</td>
                            <td class="column2">G-11/2 Apple School/Markaz, G-11/3, Allahdin Apartment,
                                G-10/G-11 Round About, G-10 Umer Market, G-10 Buland Market.</td>
                            <td style="padding-left: 15px; padding-bottom: 30px;">
                            <a href="/TransportSystemWebPHPFinalOne/route1dashboard.php">
                                <img src="./assests/Group 293.png" height="55%" width="55%">
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="column1">Route 3</td>
                            <td class="column2">G-10/3-4 Signal, G-9/1, Street No.44, G-9 Markaz/GPO, G-9 Alfalah Bank,
                                G-9 Qazafi Chowk, G-9 Bohar Masjid, G-8/1 Flats/Markaz, G-8 Jehlum Road,
                                G-8 Noori Gate, G-8/4 Round About.</td>
                           <td style="padding-left: 15px; padding-bottom: 30px;">
                            <a href="/TransportSystemWebPHPFinalOne/route1dashboard.php">
                                <img src="./assests/Group 293.png" height="55%" width="55%">
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="column1">Route 4</td>
                            <td class="column2">Serena Hotel, Chak Shahzad, G-6 Abpara Market,
                                G-6/1 Street No. 34, G-6/1-2 Stop, G-7 Iqbal Hall,
                                G-7 Markaz Sitara Market, G-7 Bank Colony, G-7 Zero Point.</td>
                            <td style="padding-left: 15px; padding-bottom: 30px;">
                            <a href="/TransportSystemWebPHPFinalOne/route1dashboard.php">
                                <img src="./assests/Group 293.png" height="55%" width="55%">
                            </a>
                            </td>
                        </tr>
                    </table>
                </div>
            
        
            </div>
        </div>
      </div>
    </div>
  </body>
</html>
