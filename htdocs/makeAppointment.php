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
    <link rel="stylesheet" href="makeAppointment.css">
    <div class="profileHeading">
      <a href = "index.php"><img class = "smallLogo" src="Images/WebsiteIcons/SmallLogoFinal.png" alt=""></a>
      <!-- <br> -->
      <h3 class = "myProfile">Make Appointment</h3>
      <a href="dashboard.php" class = "dashboardTitle">Back to Dashboard</a>
      <a class="settingsPage" href="studentSettings.php"><i class="fas fa-cog"></i></a>
      <a class="logoutAnchor" href="index.php"><h3 class = "logOut">Log Out <i class="fas fa-sign-out-alt"></i></h3></a>
      <hr class = "separator">
    </div>
      <form id = "form1" class="mainDetailsClass" method="post" autocomplete="off">
          <label for="date">Email:</label><br>
          <input class = "settingsInput" type="datetime-local" name="date" placeholder="Select Date" value = "<?php echo $date ?>">
          <label for="type">Vaccine Type:</label><br>
          <input class = "settingsInput" type="text" name="type" placeholder="Vaccine Type" value = "<?php echo $type ?>">
          <input type="submit" name="save_vaccine" value="Save Settings" id="save_settings">
      </form>

  <?php include('includes/footer.php') ?>
