<?php
      session_start();
      require 'connection.php';
      require 'studentSettingsCode.php';
      require 'dashboardCode.php';
      require 'loginCode.php';
      include('includes/header.php');
      // $loggedOut = true;
      // if (time() - $_SESSION['user_start'] > $timeoutVal) {
      //   session_destroy();
      //   $loggedOut = true;
      // }else{
      //   $loggedOut = false;
      // }
      // if($loggedOut){
      //   header("Location: index.php");
      // }
?>
<title>Settings</title>
<link rel="stylesheet" href="studentSettingsStyles.css">
<div class="profileHeading">
  <a href = "index.php"><img class = "smallLogo" src="Images/WebsiteIcons/SmallLogoFinal.png" alt=""></a>
  <!-- <br> -->
  <h3 class = "settings">Settings</h3>
  <!-- <i class="fas fa-cog"></i> -->
  <!-- <h3 class = "dashboardTitle">Back to Dashboard</h3> -->
  <a href="dashboard.php" class = "dashboardTitle">Back to Dashboard</a>
  <a class="logoutAnchor" href="#"><h3 class = "logOut">Log Out <i class="fas fa-sign-out-alt"></i></h3></a>
  <hr class = "separator">
</div>

<div class="grid-container">
  <form id = "form1" class="mainDetailsClass" method="post" autocomplete="off">
  <div class="grid-item item1">
      <label for="email">Email:</label><br>
      <input class = "settingsInput" type="email" name="email" placeholder="Email" value="<?php echo $email ?>">
      <label for="address">Current Address:</label><br>
      <input class = "settingsInput" type="text" name="address" placeholder="Current Address" value="<?php echo $address ?>">
      <label for="phone">Phone:</label><br>
      <input class = "settingsInput" minlength = "10" type="number" name="phone" placeholder="Phone" value="<?php echo $phone ?>">
      <label for="covid19">COVID-19 Status:</label><br>
      <select name="covid19" id="covid19">
        <option value="" selected disabled hidden><?php echo $covid19 ?></option>
        <option value="Negative">Negative</option>
        <option value="Positive">Positive</option>
        <option value="Unsure">Unsure</option>
      </select><br>
      <label for="hesCode">HES Code:</label><br>
      <input id = "hesCode" value="<?php echo $hes ?>" style="text-transform:uppercase" maxlength="12" minlength="12" class = "settingsInput" type="text" name="hesCode" placeholder="HES Code" onkeyup="addHyphen(this)">
  </div>

  <div class="grid-item item2">
      <label for="age">Age:</label><br>
      <input class = "settingsInput" type="number" name="age" placeholder="Age" value="<?php echo $age ?>">
      <label for="height">Height:</label><br>
      <input class = "settingsInput" type="text" name="height" placeholder="Height" value="<?php echo $height ?>">
      <label for="weight">Weight:</label><br>
      <input class = "settingsInput" type="text" name="weight" placeholder="Weight" value="<?php echo $weight ?>">
      <label for="blood">Blood Type:</label><br>
      <select name="blood" id="bloodType">
        <option value="" selected disabled hidden><?php echo $blood ?></option>
        <option value="O+">O+</option>
        <option value="O">O-</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
      </select><br>
      <label for="chronicHistory">Chronic Disease History:</label><br>
      <input class = "settingsInput" type="text" name="chronicHistory" placeholder="Chronic Disease History" value="<?php echo $chronic ?>">
  </div>
  <input type="submit" name="save_settings" value="Save Settings" id="save_settings">
</form>
</div>


<script>
	function addHyphen (element) {
    	let ele = document.getElementById(element.id);
        ele = ele.value.split('-').join('');    // Remove dash (-) if mistakenly entered.

        let finalVal = ele.match(/.{1,4}/g).join('-');
        document.getElementById(element.id).value = finalVal;
    }

    submitForms = function(){
      document.getElementById("form1").submit();
      document.getElementById("form2").submit();
  }

</script>
<?php include('includes/footer.php') ?>
