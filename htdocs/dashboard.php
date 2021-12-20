<?php
      session_start();
      require 'connection.php';
      require 'loginCode.php';
      include('includes/header.php');
      if (time() - $_SESSION['user_start'] > 30) {
        echo "Time Up";
      }else{
        echo $_SESSION['uname'];
      }
?>
    <title>Dashboard - VitaMind</title>
    <link rel="stylesheet" href="dashboard.css">
    <div class="profileHeading">
      <a href = "index.php"><img class = "smallLogo" src="Images/WebsiteIcons/SmallLogoFinal.png" alt=""></a>
      <!-- <br> -->
      <h3 class = "myProfile">My Profile</h3>
      <a class="settingsPage" href="studentSettings.php"><i class="fas fa-cog"></i></a>
      <h3 class = "logOut">Log Out <i class="fas fa-sign-out-alt"></i></h3>
      <hr class = "separator">
    </div>

    <div class="profileDetails">
      <!-- <div class="child profileImgDiv"><img class = "profileDiv" src="Images/HealthCase.png" alt=""></div> -->
      <div class="child userDetails">
        <h3 class = "child">Full Name: </h3>
        <h3 class = "child">Email: </h3>
        <h3 class = "child">Current Address: </h3>
        <h3 class = "child">Phone: </h3>
        <h3 class = "child">COVID-19 Status: </h3>
        <h3 class = "child">HES Code: </h3>
      </div>
      <div class="medicalDetails">
        <h3 class = "child innerMedDetails">Age: </h3>
        <h3 class = "child innerMedDetails">Height: </h3>
        <h3 class = "child innerMedDetails">Weight: </h3>
        <h3 class = "child innerMedDetails">Blood Type: </h3>
        <h3 class = "child innerMedDetails">Chronic Disease History: </h3>
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
