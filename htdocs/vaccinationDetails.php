<?php
      session_start();
      require 'connection.php';
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
    <title>Make Appointment - VitaMind</title>
    <link rel="stylesheet" href="vaccinationDetails.css">
    <div class="profileHeading">
      <a href = "index.php"><img class = "smallLogo" src="Images/WebsiteIcons/SmallLogoFinal.png" alt=""></a>
      <!-- <br> -->
      <h3 class = "myProfile">Vaccination Details</h3>
      <a href="dashboard.php" class = "dashboardTitle">Back to Dashboard</a>
      <a class="settingsPage" href="studentSettings.php"><i class="fas fa-cog"></i></a>
      <a class="logoutAnchor" href="index.php"><h3 class = "logOut">Log Out <i class="fas fa-sign-out-alt"></i></h3></a>
      <hr class = "separator">
    </div>
      <form id = "form1" class="mainDetailsClass" method="post" autocomplete="off">
          <label for="vaccineStatus">Vaccination Status:</label><br>
          <input class = "settingsInput" type="text" name="vaccineStatus" placeholder="Vacinnation Status" value = "<?php echo $status ?>">
          <label for="doses">Vaccine Doses:</label><br>
          <input class = "settingsInput" type="number" name="doses" placeholder="Vaccine Doses" value = "<?php echo $doses ?>">
          <input type="submit" name="save_vaccineDetails" value="Save Settings" id="save_settings">
      </form>

  <?php include('includes/footer.php') ?>
