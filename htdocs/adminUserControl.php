<?php
      session_start();
      require 'connection.php';
      require 'studentSettingsCode.php';
      require 'makeAppointmentCode.php';
      require 'dashboardCode.php';
      require 'loginCode.php';
      require 'retrieveSeats.php';
      require 'allUsers.php';
      include('includes/header.php');
      if (time() - $_SESSION['user_start'] > $timeoutVal) {
        session_destroy();
        $loggedOut = true;
      }else{
        $loggedOut = false;
      }
?>
<title>View Users</title>
<link rel="stylesheet" href="adminUserControl.css">
<div class="profileHeading">
  <a href = "index.php"><img class = "smallLogo" src="Images/WebsiteIcons/SmallLogoFinal.png" alt=""></a>
  <!-- <br> -->
  <h3 class = "settings">View Users</h3>
  <!-- <i class="fas fa-cog"></i> -->
  <!-- <h3 class = "dashboardTitle">Back to Dashboard</h3> -->
  <a href="dashboard.php" class = "dashboardTitle">Back to Dashboard</a>
  <a class="logoutAnchor" href="#"><h3 class = "logOut">Log Out <i class="fas fa-sign-out-alt"></i></h3></a>
  <hr class = "separator">
</div>

<div id = "grid-container" class="grid-container">

</div>

<script type="text/javascript">
window.onload = function() {
  let rowNo = "<?php echo $totalRows ?>"
  var nameArray = <?php echo json_encode($nameArray); ?>;
  var idArray = <?php echo json_encode($idArray); ?>;
  var statusArray = <?php echo json_encode($statusArr); ?>;
  var emailArray = <?php echo json_encode($emailArr); ?>;
  for(let x = 0; x < rowNo; x++){
      var element = document.createElement("div");
      element.appendChild(document.createTextNode(nameArray[x] + ": " + idArray[x] + ": " + emailArray[x] + ": " + statusArray[x]));
      document.getElementById('grid-container').appendChild(element);
  }
}
</script>
