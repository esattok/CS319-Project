<?php
      session_start();
      require 'connection.php';
      require 'code.php';
      include('includes/header.php');
      echo $_SESSION['uname'];
?>
<title>Settings</title>
<link rel="stylesheet" href="studentSettingsStyles.css">
<div class="profileHeading">
  <a href = "index.php"><img class = "smallLogo" src="Images/WebsiteIcons/SmallLogoFinal.png" alt=""></a>
  <!-- <br> -->
  <h3 class = "settings">Settings</h3>
  <!-- <i class="fas fa-cog"></i> -->
  <h3 class = "logOut">Log Out <i class="fas fa-sign-out-alt"></i></h3>
  <hr class = "separator">
</div>

<div class="grid-container">
  <div class="grid-item item1">
    <form class="mainDetailsClass" method="post" autocomplete="off">
      <label for="email">Email:</label><br>
      <input class = "settingsInput" type="email" name="email" placeholder="Email">
      <label for="address">Current Address:</label><br>
      <input class = "settingsInput" type="text" name="address" placeholder="Current Address">
      <label for="phone">Phone:</label><br>
      <input class = "settingsInput" minlength = "10" type="number" name="phone" placeholder="Phone">
      <label for="covid19">COVID-19 Status:</label><br>
      <select name="covid19" id="covid19">
        <option value="" selected disabled hidden>COVID-19 Status</option>
        <option value="negative">Negative</option>
        <option value="positive">Positive</option>
        <option value="unsure">Unsure</option>
      </select><br>
      <label for="hesCode">HES Code:</label><br>
      <input id = "hesCode" style="text-transform:uppercase" maxlength="12" minlength="12" class = "settingsInput" type="text" name="hesCode" placeholder="HES Code" onkeyup="addHyphen(this)">
    </form>
  </div>

  <div class="grid-item item2">
    <form class="medicalDetailsClass" method="post" autocomplete="off">
      <label for="age">Age:</label><br>
      <input class = "settingsInput" type="number" name="age" placeholder="Age">
      <label for="height">Height:</label><br>
      <input class = "settingsInput" type="text" name="height" placeholder="Height">
      <label for="weight">Weight:</label><br>
      <input class = "settingsInput" type="text" name="weight" placeholder="Weight">
      <label for="blood">Blood Type:</label><br>
      <select name="blood" id="bloodType">
        <option value="" selected disabled hidden>Blood Type</option>
        <option value="opos">O+</option>
        <option value="oneg">O-</option>
        <option value="apos">A+</option>
        <option value="aneg">A-</option>
        <option value="bpos">B+</option>
        <option value="bneg">B-</option>
        <option value="abpos">AB+</option>
        <option value="abneg">AB-</option>
      </select><br>
      <label for="chronicHistory">Chronic Disease History:</label><br>
      <input class = "settingsInput" type="text" name="chronicHistory" placeholder="Chronic Disease History">
    </form>
  </div>
</div>
<input type="submit" name="save_settings" value="Save Settings" id="save_settings">

<script>
	function addHyphen (element) {
    	let ele = document.getElementById(element.id);
        ele = ele.value.split('-').join('');    // Remove dash (-) if mistakenly entered.

        let finalVal = ele.match(/.{1,4}/g).join('-');
        document.getElementById(element.id).value = finalVal;
    }
</script>
<?php include('includes/footer.php') ?>
