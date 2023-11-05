<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css files/RoutesSTDlist.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet" />
  </head>
  <body>
    <!-- navbar -->
    <div class="Container">
      <div class="nav">
        <img src="./assests/busLogo.png" alt="img not found" class="logo" />
        <button class="btnInactive">
          <img
            src="./assests/Home icon.png"
            alt="icon not found"
            class="iconInactive"
          />
          <p class="btntxtInactive">Home</p>
        </button>
        <button class="btnInactive">
          <img src="./assests/Students.png" alt="icon not found" class="iconInactive" />
          <p class="btntxtInactive">Students</p>
        </button>
        <button class="btn" style="margin-top: 5%;">
          <img src="./assests/routes.png" alt="icon not found" class="icon" />
          <p class="btntxt">Routes</p>
        </button>
        <button class="btnInactive">
          <img
            src="./assests/Fee chalan.png"
            alt="icon not found"
            class="iconInactive"
          />
          <p class="btntxtInactive">Challan</p>
        </button>
        <button class="btnInactive">
          <img src="./assests/bus.png" alt="icon not found" class="iconInactive" />
          <p class="btntxtInactive">Registraion</p>
        </button>
        <button class="btnInactive">
          <img src="./assests/help.png" alt="icon not found" class="iconInactive" />
          <p class="btntxtInactive">Queries</p>
        </button>
        <button class="signoutBtn">Sign Out</button>
      </div>
      <!-- Dashboard -->
      <div class="Container1">
        <img src="./assests/back icon.png" alt="img not found" />
        <div class="container3">
          <div class="container2">
            <h1>Routes</h1>
          </div>
          <div class="Container4">
            <img
              src="./assests/Notification1.png"
              alt="icon not found"
              class="notification"
            />
          </div>
        </div>
        <div class="container3">
          <div class="container2">
            <h3>Route 1</h3>
          </div>
          <div class="Container4">
            <button class="add">Change Bus</button>
          </div>
        </div>

        <!-- Bus Details -->

        <div class="busdtl">
          <div style="display: flex; flex-direction: column">
            <div class="cell">
              <div class="title">Driver Name</div>
              <div class="data">Tanveer Ahmad</div>
            </div>
            <div style="display: flex; margin-top: 10px">
              <div class="title">Bus No.</div>
              <div class="data">1</div>
            </div>
          </div>
          <!-- 2 -->
          <div
            style="display: flex; flex-direction: column; margin-left: 10rem"
          >
            <div style="display: flex; margin-top: 10px">
              <div class="title">Plate No.</div>
              <div class="data">Awx-333</div>
            </div>
            <div style="display: flex; margin-top: 10px">
              <div class="title">Students</div>
              <div class="data">34/60</div>
            </div>
          </div>
        </div>

        <!-- table -->
        <div class="header">
          <div class="th">Name</div>
          <div class="th1">Registration No.</div>
        </div>
        <div class="table">
          <img src="./assests/newpic.png" alt="img not found" class="pic" />
          <div class="name">Muhammad Haseeb</div>
          <div class="regNo">FA20-BCS-053.</div>
          <button class="remove">Remove</button>
        </div>
        <div class="table">
          <img src="./assests/newpic.png" alt="img not found" class="pic" />
          <div class="name">Muhammad Haseeb</div>
          <div class="regNo">FA20-BCS-053.</div>
          <button class="remove">Remove</button>
        </div>
        <div class="table">
          <img src="./assests/newpic.png" alt="img not found" class="pic" />
          <div class="name">Muhammad Haseeb</div>
          <div class="regNo">FA20-BCS-053.</div>
          <button class="remove">Remove</button>
        </div>
      </div>
    </div>
  </body>
</html>
