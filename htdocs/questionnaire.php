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
    <title>Medical Support - VitaMind</title>
<link rel="stylesheet" href="questionnaire.css">
  <div class="profileHeading">
    <a href = "index.php"><img class = "smallLogo" src="Images/WebsiteIcons/SmallLogoFinal.png" alt=""></a>
    <!-- <br> -->
    <h3 class = "myProfile">My Profile</h3>
    <a class="seatingAnchor" href="dashboard.php"><h3 class="seatingBtn">Back to Dashboard</h3></a>
    <a class="settingsPage" href="studentSettings.php"><i class="fas fa-cog"></i></a>
    <a class="logoutAnchor" href="index.php"><h3 class = "logOut">Log Out <i class="fas fa-sign-out-alt"></i></h3></a>
    <hr class = "separator">
  </div>
  <div class="grid-container">
    <form id = "supportForm" class="supportForm" method="post">
      <div class="grid-item">
        <label for="yes_no">Do you feel tired constantly?</label>
        <p><input type="radio" name="yes_no" id = "yes" value = "Yes" checked>Yes</input></p>
        <p><input type="radio" name="yes_no" id = "no" value = "No">No</input></p>
      </div>
      <div class="grid-item">
        <label for="yes_no2">Do you have fever?</label>
        <p><input type="radio" name="yes_no2" id = "yes2" value = "Yes" checked>Yes</input></p>
        <p><input type="radio" name="yes_no2" id = "no2" value = "No">No</input></p>
      </div>
      <div class="grid-item">
        <label for="yes_no3">Do you cough?</label>
        <p><input type="radio" name="yes_no3" id = "yes3" value = "Yes" checked>Yes</input></p>
        <p><input type="radio" name="yes_no3" id = "no3" value = "No">No</input></p>
      </div>
      <div class="grid-item">
        <label for="yes_no4">Do you have diarrhea?</label>
        <p><input type="radio" name="yes_no4" id = "yes4" value = "Yes" checked>Yes</input></p>
        <p><input type="radio" name="yes_no4" id = "no4" value = "No">No</input></p>
      </div>
      <div class="grid-item">
        <label for="yes_no5">Do you have headache?</label>
        <p><input type="radio" name="yes_no5" id = "yes5" value = "Yes" checked>Yes</input></p>
        <p><input type="radio" name="yes_no5" id = "no5" value = "No">No</input></p>
      </div>
      <div class="grid-item">
        <label for="yes_no6">Do you experience loss of smell or taste?</label>
        <p><input type="radio" name="yes_no6" id = "yes6" value = "Yes" checked>Yes</input></p>
        <p><input type="radio" name="yes_no6" id = "no6" value = "No">No</input></p>
      </div>
      <div class="grid-item">
        <label for="yes_no7">Do you experience shortness of breath?</label>
        <p><input type="radio" name="yes_no7" id = "yes7" value = "Yes" checked>Yes</input></p>
        <p><input type="radio" name="yes_no7" id = "no7" value = "No">No</input></p>
      </div>
      <div class="grid-item">
        <label for="yes_no8">Do you have pain in your chest?</label>
        <p><input type="radio" name="yes_no8" id = "yes8" value = "Yes" checked>Yes</input></p>
        <p><input type="radio" name="yes_no8" id = "no8" value = "No">No</input></p>
      </div>
    </div>
    <input type="submit" name="save_medical" value="Submit Medical Form" id="save_medical">
  </form>
  <?php include('includes/footer.php') ?>
