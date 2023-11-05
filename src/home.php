<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="./css files/style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet" />
    <style>
      .bodyA {
        font-family: "Poppins";
        font-size: 22px;
      }

      .headings {
        font-family: "Comfortaa";
        font-size: 45px;
        margin-top: 5%;
      }

      .submitbtn {
        font-family: "Poppins";
        font-size: 15px;
      }

      .studentbtn {
        font-family: "Poppins";
        font-size: 15px;
      }

      .adminbtn {
        font-family: "Poppins";
        font-size: 15px;
      }

      span {
        display: block;
      }
    </style>
  </head>
  <body>
    <div
      class="body1H Container-fluid"
      style="background-image: url(./assests/Home\ 3.png)"
    >
      <div class="NavH">
        <div class="leftH">
          <img
            src="./assests/COMSATS_new_logo 1.png"
            alt="img not found"
            class="logoH"
          />
        </div>

        <div class="rightH">
          <ul class="navbarH">
            <li><a href="#">Home</a></li>
            <li><a href="#TOT">Our Team</a></li>
            <li><a href="#StudentSupport">Student Support</a></li>
            <li><a href="#Routes">Routes</a></li>
            <li><a href="#AboutUS">About us</a></li>
          </ul>

          <a href="./signIn.php" target="_blank">
            <button class="btnH">Login</button>
          </a>
        </div>
      </div>

      <hr class="lineH" />
      <div class="ContainerH">
        <h1 class="h1H">COMSATS</h1>
        <h1 class="h1H">Bus Service</h1>
        <div class="paraH">
          <p class="pH">
            We maintain a steadfast and secured transport fleet of vehicles to
            provide safe, sustainable, integrated and efficient transportation
            facility to all CUI stakeholders especially to our students on 21 x
            different routes of Rawalpindi/Islamabad from their residents to
            campus and back. Aligned with demand and supply of university
            transport requirements, transport office service is committed to
            providing environment friendly transport service.
          </p>
        </div>
        <a href="./signup.php" target="_blank">
          <button class="regH">Register Now</button></a
        >
      </div>
    </div>

    <!-- AboutUS -->
    <section id="AboutUS">
      <div
        class="bodyA"
        style="display: flex; flex-direction: row; margin-top: 80px"
      >
        <div class="container4b" style="margin-left: 10%">
          <p class="headings">About Us</p>
          <p
            class="simpletext1"
            style="width: 65%; font-size: 20px; margin: 40px 0px 40px 0px"
          >
            We maintain a steadfast and secured transport fleet of the vehicles
            to provide safe, sustainable, integrated and efficient
            transportation facility to all CUI stakeholders especially to our
            students on 21 x different routes of Rawalpindi/Islamabad from their
            residents to campus and back. Aligned with demand and supply of
            university transport requirements, transport office service is
            committed to providing environment friendly transport service
          </p>

          <a href="./assests/Students-Transport-Form.docx" download>
            <button
              class="btn-primary"
              type="submit"
              style="
                margin-bottom: 2%;
                height: 50px;
                width: 300px;
                font-size: 16px;
              "
            >
              Student Transport Form
            </button>
          </a>
        </div>
        <div>
          <img
            src="./assests/Group 270.png"
            class="abtimg"
            style="height: 550px; width: 550px; margin-right: 15%"
          />
        </div>
      </div>
    </section>
    <!-- Routes -->
    <section id="Routes">
      <div class="bodyA">
        <div class="container4b container4b2">
          <p class="headings">Routes</p>
          <div class="route-table">
            <table style="width: 100%">
              <tr>
                <th style="text-align: center">Routes</th>
                <th>Details of Stops</th>
              </tr>
              <tr>
                <td class="column1">Route 1</td>
                <td class="column2">
                  F-11 Markaz Hamza Chowk, F-11 Khokha Stop, F-11 Golra More,
                  E-11 Signal (Main Margalla Road), Jugnu Stop, E-11 Service
                  Road, F-10 Roud about, F-9 DCI, E-9 P.A.F Complex Gate, E-9
                  Shaheen Chowk, E-8/F-8 Madina Market, Zafar Chowk, E-7/F-7
                  Faisal Chowk, F-7 Rana Market, F-7 Parbat Road Signal, F-6
                  Flower Market, F-6 Press Club
                </td>
              </tr>
              <tr>
                <td class="column1">Route 2</td>
                <td class="column2">
                  G-11/2 Apple School/Markaz, G-11/3, Allahdin Apartment,
                  G-10/G-11 Round About, G-10 Umer Market, G-10 Buland Market.
                </td>
              </tr>
              <tr>
                <td class="column1">Route 3</td>
                <td class="column2">
                  G-10/3-4 Signal, G-9/1, Street No.44, G-9 Markaz/GPO, G-9
                  Alfalah Bank, G-9 Qazafi Chowk, G-9 Bohar Masjid, G-8/1
                  Flats/Markaz, G-8 Jehlum Road, G-8 Noori Gate, G-8/4 Round
                  About.
                </td>
              </tr>
              <tr>
                <td class="column1">Route 4</td>
                <td class="column2">
                  Serena Hotel, Chak Shahzad, G-6 Abpara Market, G-6/1 Street
                  No. 34, G-6/1-2 Stop, G-7 Iqbal Hall, G-7 Markaz Sitara
                  Market, G-7 Bank Colony, G-7 Zero Point.
                </td>
              </tr>
            </table>
          </div>
          <center>
            <a href="./routes.php" target="_blank">
              <button class="btn-primary" type="submit">View More</button>
            </a>
          </center>
        </div>
      </div>
    </section>
    <!-- Transport office Team -->
    <section id="TOT">
      <div
        class="bodyA"
        style="
          background-color: #210450;
          margin-top: 100px;
          padding: 50px 0px 80px 0px;
        "
      >
        <div style="margin: 0px 8% 0px 8%; color: white">
          <p class="headings" style="color: white; margin-bottom: 20px">
            Transport Office Team
          </p>
          <p>
            As a formal functionary body of CUI administration, Transport Office
            is running with multi-tasks operations and functions formulated in
            two following main areas;
          </p>
          <ol type="i" style="margin: 30px 0px 30px 0px">
            <li><b>Administrative Unit</b></li>
          </ol>
          <p style="margin-bottom: 50px">
            An administrative unit Transport Office is functioning under
            supervision of In-Charge Transport followed by 03 x clerical/office
            staff members and officials;
          </p>
          <div class="container-teams">
            <div class="col-sm-3" style="text-align: center">
              <img src="./assests/Ellipse 1.png" />
              <div>
                <span><b>MR. SAJJAD SARWAR</b></span>
                <span class="title">In-Charge Transport</span>
                <span class="number">Direct: 051-9049-5938</span>
                <span class="number">Extension: 5933</span>
                <span class="email"
                  ><a href="#">sajjad_sarwar@comsats.edu.pk</a></span
                >
              </div>
            </div>
            <div class="col-sm-3" style="text-align: center">
              <img src="./assests/Ellipse 2.png" />
              <div>
                <span><b>MR. BILAL BASHIR</b></span>
                <span class="title">Senior Administrative Assistant</span>
                <span class="number">Direct: 051-9049-5932</span>
                <span class="number">Extension: 5932</span>
                <span class="email"
                  ><a href="#">bilal.bashir@comsats.edu.pk</a></span
                >
              </div>
            </div>
            <div class="col-sm-3" style="text-align: center">
              <img src="./assests/Ellipse 3.png" />
              <div>
                <span><b>MR. MUHAMMAD AFTAB</b></span>
                <span class="title">Estate Assistant</span>
                <span class="number">Direct: 051-9049-5933</span>
                <span class="number">Extension: 5933</span>
                <span class="email"
                  ><a href="#">muhammadaftab@comsats.edu.pk</a></span
                >
              </div>
            </div>
            <div class="col-sm-3" style="text-align: center">
              <img src="./assests/Ellipse 4.png" />
              <div>
                <span><b>MR. MUHAMMAD ARIF</b></span>
                <span class="title">LDC</span>
                <span class="number">Direct: 051-9049-5933</span>
                <span class="number">Extension: 5933</span>
                <span class="email"
                  ><a href="#">muhammadarif@comsats.edu.pk</a></span
                >
              </div>
            </div>
          </div>
          <center>
            <a href="./teams.php" target="_blank">
              <button class="btn-primary" type="submit">View More</button>
            </a>
          </center>
        </div>
      </div>
    </section>

    <!-- student Support -->
    <section id="StudentSupport">
      <div class="bodyA">
        <div class="containerss">
          <div>
            <p class="headings">Student Support</p>
            <p class="simpletext1">
              For more assistance/information and any query of regarding
              transport office/service/routes etc. you may contact on following
              contact numbers during office/business hours;
            </p>
            <p class="simpletext2">
              <br />
              <b>Routes/Buses/Transport Service Information;</b>
            </p>
            <p class="simpletext1">
              <span>051-9049-5932 Ext: 5932</span>
              <span>051-9049-6128 Ext: 6128</span>
            </p>

            <p class="simpletext2"><b>General Information/Complaints;</b></p>
            <p class="simpletext1">
              <span>051-9049-5932 Ext: 5932</span>
              <span>051-9049-5933 Ext: 5933</span>
            </p>
          </div>
          <img src="./assests/Asset 4 1.png" class="stdimg" />
        </div>
      </div>
    </section>

    <!-- footer -->
    <section>
      <div class="footer">
        <div class="container py-5">
          <div class="row">
            <div
              class="left-section col-12 col-md-4 d-flex flex-column my-5 my-md-0 text-center text-md-start"
            >
              <div class="footer-img">
                <img
                  src="./assests/emojione-monotone_oncoming-bus.png"
                  class="footer-main-img"
                />
              </div>
              <div class="my-4">
                <div class="text-white h4">Lets Connect</div>
                <hr class="footer-heading-under" />
              </div>

              <div
                class="d-flex left-sec-links justify-content-center justify-content-md-start"
              >
                <a href="#"><img src="./assests/Group 133.png" /></a>
                <a href="#"><img src="./assests/Group 146.png" /></a>
                <a href="#"><img src="./assests/Group 132.png" /></a>
                <a href="#"><img src="./assests/Group 131.png" /></a>
                <a href="#"><img src="./assests/Group 130.png" /></a>
              </div>
            </div>
            <div
              class="center-section col-12 col-md-4 d-flex flex-column justify-content-between"
            >
              <div
                class="d-flex flex-column h-60 mb-5 mb-md-0 text-center text-md-start"
              >
                <div class="h4 text-white">My Account</div>
                <hr class="footer-heading-under" />
                <div class="simpletext4 my-3">
                  <a
                    href="./signIn.php"
                    target="_blank"
                    class="text-white text-decoration-none"
                    >Login</a
                  >
                </div>
                <a
                  href="./signup.php"
                  target="_blank"
                  class="text-white text-decoration-none"
                  >Register</a
                >
              </div>
              <div
                class="d-flex flex-column h-50 mb-5 mb-md-0 text-center text-md-start"
              >
                <div class="h4 text-white">Information</div>
                <hr class="footer-heading-under" />
                <div class="d-flex flex-column algin-items-center">
                  <div
                    class="d-flex mt-3 justify-content-center justify-content-md-start"
                  >
                    <div class="phone-img">
                      <img src="./assests/Frame (1).png" class="w-75" />
                    </div>
                    <div>
                      <div class="text-white">Phone</div>
                      <div class="text-white">UAN: +92-51-111-001-007</div>
                    </div>
                  </div>
                  <div
                    class="d-flex my-2 justify-content-center justify-content-md-start"
                  >
                    <div class="phone-img">
                      <img src="./assests/Frame (2).png" class="w-75" />
                    </div>
                    <div>
                      <div class="text-white">Email</div>
                      <div class="text-white">
                        <u>admissions@comsats.com</u>
                      </div>
                    </div>
                  </div>
                  <div
                    class="d-flex justify-content-center justify-content-md-start"
                  >
                    <div class="phone-img">
                      <img src="./assests/Frame (3).png" class="w-75" />
                    </div>
                    <div>
                      <div class="text-white">Address</div>
                      <div class="text-white w-75">
                        Park Road, Tarlai Kalan, Islamabad, Pakistan
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="right-section col-12 col-md-4 d-flex flex-column justify-content-between text-center text-md-start"
            >
              <div class="right-section1 h-50 mb-5 mb-md-0">
                <div class="text-white h4">Important Links</div>
                <hr class="footer-heading-under" />
                <div
                  class="d-flex flex-wrap justify-content-center w-75 m-auto m-md-0"
                >
                  <a
                    href="#AboutUS"
                    class="text-white text-decoration-none w-50 my-3 text-nowrap"
                    >About Us</a
                  >
                  <a
                    href="#Routes"
                    class="text-white text-decoration-none w-50 my-3 text-nowrap"
                    >Routes</a
                  >

                  <a
                    href="#TOT"
                    class="text-white text-decoration-none w-50 mb-3 text-nowrap"
                    >Our Teams</a
                  >
                  <a
                    href="#StudentSupport"
                    class="text-white text-decoration-none w-50 mb-3 text-nowrap"
                    >Student Support</a
                  >
                </div>
              </div>
              <div class="right-section2 h-50">
                <div class="text-white h4">About Us</div>
                <hr class="footer-heading-under" />
                <div>
                  <p class="text-white w-75 m-auto m-md-0">
                    We maintain a steadfast and secured transport fleet of
                    vehicles to provide safe, sustainable, integrated and
                    efficient transportation facility
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
