<?php
      session_start();
      require 'connection.php';
      require 'studentSettingsCode.php';
      require 'makeAppointmentCode.php';
      require 'dashboardCode.php';
      require 'loginCode.php';
      require 'retrieveSeats.php';
      include('includes/header.php');
      if (time() - $_SESSION['user_start'] > $timeoutVal) {
        session_destroy();
        $loggedOut = true;
      }else{
        $loggedOut = false;
      }
?>
<title>Seating Plan</title>
<link rel="stylesheet" href="seatingPlan.css">
<div class="profileHeading">
  <a href = "index.php"><img class = "smallLogo" src="Images/WebsiteIcons/SmallLogoFinal.png" alt=""></a>
  <!-- <br> -->
  <h3 class = "settings">Seating Plan</h3>
  <!-- <i class="fas fa-cog"></i> -->
  <!-- <h3 class = "dashboardTitle">Back to Dashboard</h3> -->
  <a href="dashboard.php" class = "dashboardTitle">Back to Dashboard</a>
  <a class="logoutAnchor" href="#"><h3 class = "logOut">Log Out <i class="fas fa-sign-out-alt"></i></h3></a>
  <hr class = "separator">
</div>
<!-- <div class="seatingDiv">
    <label for="vehicle1"> I have a bike</label><br>
    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><br>
    <label for="vehicle2"> I have a car</label><br>
    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car"><br>
    <label for="vehicle3"> I have a boat</label><br>
    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat"><br>
</div> -->

<div id = "grid-container" class="grid-container">
  <h3 class = "warningText">Please select only one seat</h3>
  <form class="seatingForm" method="post">
    <div class="grid-item"><label for="A1"> A1</label><br>
    <input type="checkbox" id="A1" name="seats[]" value="A1"><br></div>
    <div class="grid-item"><label for="A2"> A2</label><br>
    <input type="checkbox" id="A2" name="seats[]" value="A2"><br></div>
    <div class="grid-item"><label for="A3"> A3</label><br>
    <input type="checkbox" id="A3" name="seats[]" value="A3"><br></div>
    <div class="grid-item"><label for="A4"> A4</label><br>
    <input type="checkbox" id="A4" name="seats[]" value="A4"><br></div>
    <div class="grid-item"><label for="A5"> A5</label><br>
    <input type="checkbox" id="A5" name="seats[]" value="A5"><br></div>
    <div class="grid-item"><label for="A6"> A6</label><br>
    <input type="checkbox" id="A6" name="seats[]" value="A6"><br></div>
    <div class="grid-item"><label for="A7"> A7</label><br>
    <input type="checkbox" id="A7" name="seats[]" value="A7"><br></div>
    <div class="grid-item"><label for="A8"> A8</label><br>
    <input type="checkbox" id="A8" name="seats[]" value="A8"><br></div>
    <div class="grid-item"><label for="A9"> A9</label><br>
    <input type="checkbox" id="A9" name="seats[]" value="A9"><br></div>
    <div class="grid-item"><label for="A10"> A10</label><br>
    <input type="checkbox" id="A10" name="seats[]" value="A10"><br></div>
    <div class="grid-item"><label for="A11"> A11</label><br>
    <input type="checkbox" id="A11" name="seats[]" value="A11"><br></div>
    <div class="grid-item"><label for="A12"> A12</label><br>
    <input type="checkbox" id="A12" name="seats[]" value="A12"><br></div>
    <div class="grid-item"><label for="A13"> A13</label><br>
    <input type="checkbox" id="A13" name="seats[]" value="A13"><br></div>
    <div class="grid-item"><label for="A14"> A14</label><br>
    <input type="checkbox" id="A14" name="seats[]" value="A14"><br></div>
    <div class="grid-item"><label for="A15"> A15</label><br>
    <input type="checkbox" id="A15" name="seats[]" value="A15"><br></div>
    <div class="grid-item"><label for="A16"> A16</label><br>
    <input type="checkbox" id="A16" name="seats[]" value="A16"><br></div>
    </div>
    <input type="submit" name="save_seating" value="Save Seating Plan" id="save_seating">
  </form>

  <script type="text/javascript">
  window.onload = function() {
    let rowNo = "<?php echo $rows1 ?>"
    var seatArray = <?php echo json_encode($val); ?>;
    var idArray = <?php echo json_encode($idArr); ?>;
    for(let x = 0; x < seatArray.length; x++){
      if(seatArray[x] != null){
        document.getElementById(seatArray[x]).checked = "true"
        document.getElementById(seatArray[x]).disabled = "true";
        var element = document.createElement("div");
        element.appendChild(document.createTextNode(seatArray[x] + ": " + idArray[x]));
        document.getElementById('grid-container').appendChild(element);
      }
    }
  }
  </script>
<?php include('includes/footer.php') ?>
