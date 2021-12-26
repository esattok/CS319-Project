<?php
      session_start();
      require 'connection.php';
      require 'loginCode.php';
      include('includes/header.php');
      if (time() - $_SESSION['user_start'] > $timeoutVal) {
        session_destroy();
        $loggedOut = true;
      }else{
        $loggedOut = false;
      }
?>
<title>VitaMind</title>
<link rel="stylesheet" href="styles.css">


  <!-- -----------------NavBar+Banner---------------------- -->
  <div class="profileView">
    <a href="dashboard.php"><button type="button" name="button" id = "mainDashBtn">Go to Dashboard</button></a>
    <input value = "Logout" type="submit" name="log" id = "logoutAnchor" class="logoutAnchor"/>
    <!-- <button id = "logoutAnchor" class="logoutAnchor" onclick="fun()"><h3 class = "logOut">Log Out <i class="fas fa-sign-out-alt"></i></h3></button> -->
  </div>
  <div class="headerDiv">
    <?php include('includes/navbar.php') ?>
    <div class="bannerDiv">
      <!-- <h1 id="mainTitle">VitaMind</h1> -->
      <img class = "homeLogo" src="Images/WebsiteIcons/Logo2New.png" alt="">
      <p id="mainSlogan">An ounce of prevention is worth a pound of cure</p>
      <div class="buttonDiv">
        <!-- <button type="button" name="button" id="bannerBtn1">Button 1</button> -->
        <a href = "regularLogin.php"><button type="button" name="button" id="bannerBtn2">Sign In</button></a>
        <a href = "signUp.php"><button class="pushable signUpBtn">
          <span class="shadow"></span>
          <span class="edge"></span>
          <span class="front">
            Sign Up
          </span>
        </button></a>

        <a href = "dashboard.php"><button class="pushable dashboardBtn">
          <span class="shadow"></span>
          <span class="edge"></span>
          <span class="front">
            View Profile
          </span>
        </button></a>
      </div>
      <div class='scrolldown'>
        <div class="chevrons">
          <div class='chevrondown'></div>
          <div class='chevrondown'></div>
        </div>
      </div>
      <img class = "healthCase" src="Images/HealthCase.png" alt="">
      <img class = "heartDoctor" src="Images/RedHeart.png" alt="">
    </div>
  </div>
  <div class="blueSection">
  </div>
  <!-- -----------------NavBar+Banner---------------------- -->

  <!-- -----------------About Section---------------------- -->
  <div class="mainAboutDiv">
    <img src="Images/VaccineImage.jpg" alt="" class="aboutVaccineImage">
    <img src="Images/RedHeart.png" alt="" class="aboutHeartImage">
    <h2>About Us</h2>
    <br>
    <div class="topnav">
      <a class="active" href="#home" id="#missionNav">Mission</a>
      <a href="#news" id="#aboutNav">About</a>
      <a href="#contact" id="#teamNav">Team</a>
    </div>
    <div id="missionDiv">
      <h3 id="missionTitle" class="belowBannerTitle">Our goal is to create a website that will help people cope with the struggles related to COVID-19</h3>
      <p id="missionPara" class="belowBannerPara">This website will have various helpful faeatures which will make it easier for people to monitor the status of any COVID-19 related information</p>
      <br>
      <img src="Images/COVIDImg.jpg" alt="" class="scenery1" id="aboutImage">
      <!-- <button type="button" name="button" id="missionButton" class="belowBannerBtn">Learn More</button> -->
    </div>

    <div id="aboutDiv">
      <h3 id="aboutTitle" class="belowBannerTitle">This website was created for everyday use so simplicity is the key to this site</h3>
      <p id="aboutPara" class="belowBannerPara">This website was built using HTML, CSS, JavaScript for the front-end side. As for the backend, PHP was used to connect the front-end content to the database, which is PostgreSQL</p>
      <br>
      <img src="Images/html.jpg" alt="" class="scenery2" id="aboutImage">
      <!-- <button type="button" name="button" id="aboutButton" class="belowBannerBtn">Learn More</button> -->
    </div>

    <div id="teamDiv">
      <h3 id="teamTitle" class="belowBannerTitle">Bilkent University - CS 319</h3>
      <p id="teamPara" class="belowBannerPara">As a group, we are students at Bilkent University. The name of the team we created in our CS319 course is 1H. We had a lot of fun doing this project. If you want to reach us, please contact us. Names of group members: Lamia Başak Amaç, Elifnur Alsaç, Esad İsmail Tök, Mohamed Wasim Mohamed Akram, Nima Ghaffarzadeh</p>
      <br>
      <img src="Images/teamwork2.png" alt="" class="scenery3" id="aboutImage">
      <!-- <button type="button" name="button" id="teamButton" class="belowBannerBtn">Learn More</button> -->
    </div>

  </div>
  <!-- -----------------About Section---------------------- -->

  <!-- -----------------Services Section---------------------- -->

  <div class="serviceDiv">
    <div class="concave">
    </div>
    <h2 class="serviceTitle">Features</h2>
    <br>
    <div class="serviceColumns">
      <div class="service1" id="allServices">
        <img src="Images/med.png" alt="" class = "service1Img">
        <h3 class = "text1">Our website offers medical support to all registered users</h3>
      </div>
      <div class="service2" id="allServices">
        <img src="Images/appointment1.png" alt="" class = "service2Img">
        <h3 class = "text1">Make appointments with ease using our appointment management system</h3>
      </div>
      <div class="service3" id="allServices">
        <img src="Images/seating.png" alt="" class = "service3Img">
        <h3 class = "text3">Manage your course seating plans according to the safety regulations </h3>
      </div>
    </div>
  </div>
  <!-- -----------------Services Section---------------------- -->

<?php
if($loggedOut == false){
echo '<style type="text/css">
        #bannerBtn2 {
          display: none;
        }
        .signUpBtn{
          display: none;
        }
        .login{
          display: none;
        }
        .profileView{
          display:block;
        }
        </style>';
      }else{
        echo '<style type="text/css">
                #bannerBtn2 {
                  display: inline-block;
                }
                .signUpBtn{
                  display: inline-block;
                }
                .login{
                  display: inline-block;
                }
                .dashboardBtn{
                  display: none;
                }
                .profileView{
                  display:none;
                }
                </style>';
      }
 ?>

  <?php include('includes/footer.php') ?>
