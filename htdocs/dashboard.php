<?php
      session_start();
      require 'connection.php';
      require 'dashboardCode.php';
      require 'loginCode.php';
      include('includes/header.php');
      // $loggedOut = true;
      // if (time() - $_SESSION['user_start'] > $timeoutVal) {
      //   session_destroy();
      //   $loggedOut = true;
      // }else{
      //   echo $_SESSION['uname'];
      //   $loggedOut = false;
      // }
      // if($loggedOut){
      //   header("Location: index.php");
      // }
?>
    <title>Dashboard - VitaMind</title>
    <link rel="stylesheet" href="dashboard.css">
    <div class="profileHeading">
      <a href = "index.php"><img class = "smallLogo" src="Images/WebsiteIcons/SmallLogoFinal.png" alt=""></a>
      <!-- <br> -->
      <h3 class = "myProfile">My Profile</h3>
      <a class="settingsPage" href="studentSettings.php"><i class="fas fa-cog"></i></a>
      <a class="logoutAnchor" href="index.php"><h3 class = "logOut">Log Out <i class="fas fa-sign-out-alt"></i></h3></a>
      <hr class = "separator">
    </div>

    <div class="profileDetails">
      <!-- <div class="child profileImgDiv"><img class = "profileDiv" src="Images/HealthCase.png" alt=""></div> -->
      <div class="child userDetails">
        <h3 class = "child">Full Name:  <?php echo $uname ?></h3>
        <h3 class = "child">Email:  <?php echo $email ?></h3>
        <h3 class = "child">Current Address: <?php echo $address ?></h3>
        <h3 class = "child">Phone: <?php echo $phone ?></h3>
        <h3 class = "child">COVID-19 Status: <?php echo $covid19 ?></h3>
        <h3 class = "child">HES Code: <?php echo $hes ?></h3>
      </div>
      <div class="medicalDetails">
        <h3 class = "child innerMedDetails">Age: <?php echo $age ?></h3>
        <h3 class = "child innerMedDetails">Height: <?php echo $height ?></h3>
        <h3 class = "child innerMedDetails">Weight: <?php echo $weight ?></h3>
        <h3 class = "child innerMedDetails">Blood Type: <?php echo $blood ?></h3>
        <h3 class = "child innerMedDetails">Chronic Disease History: <?php echo $chronic ?></h3>
      </div>
      <div class="padder"></div>
      <div class="vaccinationDetails">
        <h2 class = "child vaccinationDetailsText">Vaccination Details</h2>
        <h3 class = "child vaccinationStatus">Vaccination Status: </h3>
        <h3 class = "child vaccinationDoses">Vaccine Doses: </h3>
        <h3 class = "child vaccinationType">Vaccine Type: </h3>
        <button class = "makeAndGet makeAppointment" type="button" name="button">Make Appointment</button>
      </div>
      <div class="relationDetails">
        <h2 class = "child relationDetailsText">Relation Details</h2>
        <h3 class = "child relation1Status">Relation 1 Status: </h3>
        <h3 class = "child relation2Status">Relation 2 Status: </h3>
        <h3 class = "child relation3Status">Relation 3 Status: </h3>
        <button class = "makeAndGet getInformation" type="button" name="button">Get Information</button>
      </div>
    </div>

  <?php include('includes/footer.php') ?>
