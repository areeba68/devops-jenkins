<?php include("controllers/user.php");
$regno=$_SESSION["regno"];
$name=$_SESSION["name"];
getStudents();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css files/StudentsRegistered.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Comfortaa"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
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
        <a class="btn" style="margin-top: 5%;text-decoration: none"  href="StudentsRegistered.php">
          <img src="./assests/Students.png" alt="icon not found" class="icon" />
          <p class="btntxt">Students</p>
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
        <a class="btnInactive" href="BusRegistration.php"
          style="text-decoration: none">
          <img src="./assests/bus.png" alt="icon not found" class="iconInactive" />
          <p class="btntxtInactive">Registraion</p>
        </a>
        
        <a class="signoutBtn" href="signinadmin.php" style="text-decoration: none">Sign Out</a>
      </div>
      <!-- Dashboard -->
      <div class="Container1">
        <div class="container3">
          <div class="container2">
            <h1>Students Registered</h1>
          </div>
          <div class="Container4">
            <img
              src="./assests/Notification1.png"
              alt="icon not found"
              class="notification"
            />
          </div>
        </div>
        <h3>Total Students Registered: <b><?php echo count($students) ?></b></h3>

        <!-- TABLE -->
        <div class="header">
          <div class="th">Name</div>
          <div class="th1">Registration No.</div>
        </div>
        <?php 
        foreach($students as $value){
          echo "
          <form method='post'>
          <div class='table'>
          <img src='./assests/newpic.png' alt='img not found' class='pic' />
          <div class='name'>$value[name]</div>
          <div class='regNo'>$value[regno].</div>
          <input type='hidden' value=$value[regno] name='std-id' />
          <input type='submit' class='remove' value='Remove' name='remove-std' />
        </div>
        </form>

          
        ";

        }
        
        ?>
       
      </div>
    </div>
  </body>
</html>
