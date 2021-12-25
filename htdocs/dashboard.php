<?php
      session_start();
      require 'connection.php';
      require 'dashboardCode.php';
      require 'loginCode.php';
      require 'makeAppointmentCode.php';
      require 'saveVaccineInfo.php';
      include('includes/header.php');
      if (time() - $_SESSION['user_start'] > $timeoutVal) {
        session_destroy();
        $loggedOut = true;
      }else{
        $loggedOut = false;
      }
?>
    <title>Dashboard - VitaMind</title>
    <link rel="stylesheet" href="dashboard.css">
    <div class="profileHeading">
      <a href = "index.php"><img class = "smallLogo" src="Images/WebsiteIcons/SmallLogoFinal.png" alt=""></a>
      <!-- <br> -->
      <h3 class = "myProfile">My Profile</h3>
      <a class="seatingAnchor" href="seatingPlan.php"><h3 class="seatingBtn">Manage Seating Plan</h3></a>
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
        <h3 class = "child vaccinationStatus">Vaccination Status: <?php echo $status ?></h3>
        <h3 class = "child vaccinationDoses">Vaccine Doses: <?php echo $doses ?></h3>
        <!-- <h3 class = "child vaccinationType">Vaccine Type: </h3> -->
        <a href = "vaccinationDetails.php"><button class = "makeAndGet makeAppointment" type="button" name="button">Enter Vaccination Details</button></a>
      </div>
      <div class="appointmentDetails">
        <h2 class = "child relationDetailsText">Appointment Details </h2>
        <h3 class = "child relation1Status">Date: <?php echo $date ?></h3>
        <h3 class = "child relation2Status">Vaccine Type: <?php echo $type ?></h3>
        <a href = "makeAppointment.php"><button class = "makeAndGet makeAppointment" type="button" name="button">Make Appointment</button></a>
        <!-- <h3 class = "child relation3Status">Relation 3 Status: </h3> -->
        <!-- <button class = "makeAndGet getInformation" type="button" name="button">Get Information</button> -->
      </div>
    </div>
    <div class="healthBarDiv">
      <div class="healthBar">
      </div>
      <h3 id = "healthPercentage" class="healthPercentage">50%</h3>
    </div>

    <script type="text/javascript">
    let healthBar = document.getElementsByClassName("healthPercentage")[0];
    let healthBarDiv = document.getElementsByClassName("healthBar")[0];
      if("<?php echo $covid19 ?>" == "Positive"){
        healthBar.textContent = "100%";
        healthBarDiv.style.backgroundSize = "100% 100%"
      }
      else if("<?php echo $covid19 ?>" == "Negative"){
        healthBar.textContent = "0%";
        healthBarDiv.style.backgroundSize = "0% 100%"
      }
      else if("<?php echo $covid19 ?>" == "Unsure"){
        healthBar.textContent = "50%";
        healthBarDiv.style.backgroundSize = "50% 100%"
      }
    </script>

  <?php include('includes/footer.php') ?>
