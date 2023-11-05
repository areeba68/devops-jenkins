<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css files/DashboardCoordinators.css" />
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
        <a class="btnInactive" href="routesdashboard.php" style="text-decoration: none;">
          <img src="./assests/routes.png" alt="icon not found" class="iconInactive" />
          <p class="btntxtInactive" style="margin-top: 10%;">Routes</p>
        </a>
        <a class="btnInactive" href="feechallandashboard.php" style="text-decoration: none;">
          <img
            src="./assests/Fee chalan.png"
            alt="icon not found"
            class="iconInactive"
          />
          <p class="btntxtInactive" style="margin-top: 10%;">Challan</p>
        </a>
        <a class="btn" href="DashboardCoordinators.php" style="text-decoration: none;">
          <img src="./assests/team.png" alt="icon not found" class="icon" style="width: 25px;
          height: 25px;
          margin-left: -85px;
          filter: brightness(0) invert(1);"/>
          <p class="btntxt" style="padding-right: 30px;
          font-size: 18px;
          color: white;
          font-family: poppins;">Team</p>
        </a>
        <a class="btnInactive" href="helpdashboard.php" style="text-decoration: none;">
          <img src="./assests/help.png" alt="icon not found" class="iconInactive" />
          <p class="btntxtInactive" style="margin-top: 10%;">Help</p>
        </a>
        <a class="signoutBtn" href="signIn.php" style="text-decoration: none;">Sign Out</a>
      </div>
      <!-- Dashboard -->
      <div class="Container1">
        <div class="container3">
          <div class="container2">
            <h1 class="headings"  style="margin-bottom: 10%;">Cordinators</h1>
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
            <p>As a formal functionary body of CUI administration,
                Transport Office is running with multi-tasks operations and
                functions formulated in two following main areas;</p>
            <ol type="i" style="margin-left: -20px; ">
                <li style="font-family: poppins;
                color: purple; font-weight: bold;">Administrative Unit</li>
            </ol>
            <p>An administrative unit Transport Office is functioning under
                supervision of In-Charge Transport followed by
                03 x clerical/office staff members and officials;
            </p>
            <div class="container-teams" style="margin-left: -45px; margin-bottom: 5%;">
                <div class="col-sm-3" style="text-align: center;">
                    <img src="./assests/Ellipse 1.png">
                    <div>
                        <span><b>MR. SAJJAD SARWAR</b></span>
                        <span>In-Charge Transport</span>
                        <span>Direct: 051-9049-5938</span>
                        <span>Extension: 5933</span>
                        <span><a href="#">sajjad_sarwar@comsats.edu.pk</a></span>
                    </div>
                </div>
                <div class="col-sm-3" style="text-align: center;">
                    <img src="./assests/Ellipse 2.png">
                    <div>
                        <span><b>MR. BILAL BASHIR</b></span>
                        <span>Senior Administrative Assistant</span>
                        <span>Direct: 051-9049-5932</span>
                        <span>Extension: 5932</span>
                        <span><a href="#">bilal.bashir@comsats.edu.pk</a></span>
                    </div>
                </div>
                <div class="col-sm-3" style="text-align: center;">
                    <img src="./assests/Ellipse 3.png">
                    <div>
                        <span>MR. MUHAMMAD AFTAB</span>
                        <span>Estate Assistant</span>
                        <span>Direct: 051-9049-5933</span>
                        <span>Extension: 5933</span>
                        <span><a href="#">muhammadaftab@comsats.edu.pk</a></span>
                    </div>
                </div>
                <div class="col-sm-3" style="text-align: center;">
                    <img src="./assests/Ellipse 4.png">
                    <div>
                        <span><b>MR. MUHAMMAD ARIF</b></span>
                        <span>LDC</span>
                        <span>Direct: 051-9049-5933</span>
                        <span>Extension: 5933</span>
                        <span><a href="#">muhammadarif@comsats.edu.pk</a></span>
                    </div>
                </div>
            </div>
            <ol type="i" start="2" style="margin-left: -20px; ">
                <li style="font-family: poppins;
                color: purple; font-weight: bold;">Operational Unit/Transport Yard</li>
            </ol>
            <p>A operational unit of Transport Office is 
                functioning under supervision of In-Charge Transport followed by following 02 x staff persons;
            </p>
            <div class="container-teams" style="margin-left: -45px;">
                <div class="col-sm-6" style="text-align: center;">
                    <img src="./assests/Ellipse 1 (1).png">
                    <div>
                        <span><b>MR. SAEED AHMED</b></span>
                        <span>HTV Driver (Yard Supervisor/
                            Student Coordinator)</span>
                        <span>Direct: 051-9049-6128</span>
                        <span>Extension: 6128</span>
                        <span><a href="#">saeed_ahmed@comsats.edu.pk</a></span>
                    </div>
                </div>
                <div class="col-sm-6" style="text-align: center;">
                    <img src="./assests/Ellipse 2 (1).png">
                    <div>
                        <span><b>MR. MUHAMMAD IMRAN</b></span>
                        <span>Bus Helper (Yard Supervisor/
                            Student Coordinator)</span>
                        <span>Direct: 051-9049-5932</span>
                        <span>Extension: 6128</span>
                        <span><a href="#">m_imran@comsats.edu.pk</a></span>
                    </div>
                </div>
            </div>
            <div class="container4b" style="padding-top: 5%; padding-bottom: 5%;" >
                <p >For more assistance/information and any query of
                    regarding transport office/service/routes etc. you 
                  may contact on following contact numbers during 
                  office/business hours;
                </p>
                <p ><b>Routes/Buses/Transport Service Information;</b></p>
                <p ><span>051-9049-5932 Ext: 5932</span>
                  <span>051-9049-6128 Ext: 6128</span>
                </p>
                
                <p><b>General Information/Complaints;</b></p>
                <p><span>051-9049-5932 Ext: 5932</span>
                  <span>051-9049-5933 Ext: 5933</span>
                </p>
              </div>
        </div>
      </div>
    </div>
  </body>
</html>
