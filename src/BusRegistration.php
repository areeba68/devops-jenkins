<?php
include('controllers/buses.php');
getBuses();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="./css files/BusRegistration.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <!-- navbar -->
  <div class="Container">
  <div class="nav">
        <img src="./assests/busLogo.png" alt="img not found" class="logo" />
        <a class="btnInactive" href="AdminDashboard.php" style="text-decoration: none">
          <img
            src="./assests/Home icon.png"
            alt="icon not found"
            class="iconInactive"
          />
          <p class="btntxtInactive">Home</p>
        </a>
        <a class="btnInactive" style="margin-top: 5%;text-decoration: none"  href="StudentsRegistered.php">
          <img src="./assests/Students.png" alt="icon not found" class="iconInactive" />
          <p class="btntxtInactive">Students</p>
        </a>
        <a class="btnInactive" href="RoutesAdmin.php"
          style="text-decoration: none">
          <img src="./assests/routes.png" alt="icon not found" class="iconInactive" />
          <p class="btntxtInactive">Routes</p>
        </a>
        <a class="btnInactive"  href="AdminFeeChallan.php"
          style="text-decoration: none">
          <img
            src="./assests/Fee chalan.png"
            alt="icon not found"
            class="iconInactive"
          />
          <p class="btntxtInactive">Challan</p>
        </a>
        <a class="btnInactive" href="AdminQueries.php"
          style="text-decoration: none">
          <img src="./assests/help.png" alt="icon not found" class="iconInactive" />
          <p class="btntxtInactive">Queries</p>
        </a>
        <a class="btn" href="BusRegistration.php"
          style="text-decoration: none;margin-top:5%">
          <img src="./assests/bus.png" alt="icon not found" class="icon" />
          <p class="btntxt">Registraion</p>
        </a>
        
        <a class="signoutBtn" href="signinadmin.php" style="text-decoration: none">Sign Out</a>
      </div>
    <!-- Dashboard -->
    <div class="Container1">
      <div class="container3">
        <div class="container2">
          <h1>Bus Registration</h1>
        </div>
        <div class="Container4">
          <img src="./assests/Notification1.png" alt="icon not found" class="notification" />
        </div>
      </div>
      <div class="container3">
        <h3>Total Buses Registered: <b><?php echo count($buses) ?></b></h3>

      </div>
      <form method="post">
          <input style="margin-top:1%; width: 45%; height: 30px;  " type="text" name="drivername" class="drivername" placeholder="Driver Name" required>
          <input style="width: 45%; height: 30px; " type="text" name="plateno" class="plateno" placeholder="Plate No. of Bus" required>
          <input class="add" name="add-bus" type="submit" value="Add Bus"></input>
        </form>
      <div class="header">
        <div class="th1">Bus No.</div>
        <div class="th2">Plate No.</div>
        <div class="th3">Driver Name</div>
      </div>
      <?php
      foreach ($buses as $value) {
        echo "
          <form method='post'>
            <div class='table'>
              <div class='busNo'>$value[id]</div>
              <div class='plateNo'>$value[plateno]</div>
              <div class='name'>$value[drivername]</div>
              <input type='hidden' value=$value[id] name='bus-id' />
              <input type='submit' class='remove' value='Remove' name='remove-bus' />
            </div>
        </form>
        ";
      }

      ?>

    </div>
</body>

</html>