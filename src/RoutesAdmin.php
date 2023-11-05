<?php
include('controllers/routes.php');
getRoutes();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css files/RoutesAdmin.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
      $( "document" ).ready(function() {

          $("#toggle-add-bus").click(function(){
              $("#show_form").toggle("slow");
          });
      
      });
      </script>
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
        <a class="btn" href="RoutesAdmin.php"
          style="text-decoration: none ;margin-top:5%">
          <img src="./assests/routes.png" alt="icon not found" class="icon" />
          <p class="btntxt">Routes</p>
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
        <form id="show_form" method="post">
          <div>
            <div style="display:flex; flex-direction:row;  justify-content: space-between; ">
              <input style="margin-top:40px; width: 49%; height: 30px;" 
               type="text" name="drivername" class="drivername" placeholder="Driver Name" required>
               <input style="margin-top:40px; width: 49%; height: 30px;" 
               type="text" name="stops" class="stops" placeholder="Stop Names" required>

            </div>

            <div style="display:flex; flex-direction:row;  justify-content: space-between; ">
            <input style="margin-top:10px; width: 49%; height: 30px;" 
             type="text" name="busno" class="busno" placeholder="Bus no" required>
            <input style="margin-top:10px; width: 49%; height: 30px; " 
             type="text" name="plateno" class="plateno" placeholder="Plate No. of Bus" required>
              
            </div>

             <div style="display: flex;flex-direction: row;justify-content: center;">
               <input style=" margin-top: 1%; width: 200px; height:40px"  class="add" name="add-route" type="submit" value="Add Route"></input>
             </div>
          </div>
        </form>

        <!-- Tables -->

        <div class="Collection" style="margin-top:10px">
          <div class="route-table">
            <?php
      foreach ($routes as $value) {
        echo "
        <form method='post'>
            <table style='width: 100%'>
              <tr>
                <th colspan='2'>Route $value[id]</th>
                <input type='hidden' value=$value[id] name='route-id' />
                <input type='submit' class='remove' value='Remove' name='remove-route' />
              </tr>
              <tr>
                <td 'colspan=2' class='column1'>Driver Name</td>
                <td class='column2'>$value[drivername]</td>
              </tr>
              <tr>
                <td class='column1'>Bus No.</td>
                <td class='column2'>$value[busno]</td>
              </tr>
              <tr>
                <td class='column1'>Plate No.</td>
                <td class='column2'>$value[plateno]</td>
              </tr>
              <tr>
                <td class='column1'>Students</td>
                <td class='column2'>45/60</td>
                
              </tr>
            </table>
            </form>
       
        ";
      }

      ?>

          </div>
        </div>
  
      </div>
    </div>
  </body>
</html>
