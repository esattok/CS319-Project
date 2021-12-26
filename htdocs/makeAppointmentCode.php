<?php
require 'dashboardCode.php';
if(!$con){
  echo "Error : Unable to open database\n";
}else{
  if(isset($_POST['save_vaccine'])){
      $dateNew = $_POST['date'];
      $typeNew = $_POST['type'];
      $id = $_SESSION['finalid'];
      echo $id;
      $query = "UPDATE public.student SET dates = '$dateNew', typev = '$typeNew' WHERE id = $id";
      $result = pg_query($con, $query);
      header("Location: dashboard.php");
  }
  else if(isset($_POST['save_vaccineDetails'])){
      $statusNew = $_POST['vaccineStatus'];
      $dosesNew = $_POST['doses'];
      $id = $_SESSION['finalid'];
      echo $statusNew;
      echo $dosesNew;
      $query = "UPDATE public.student SET statusv = '$statusNew', doses = '$dosesNew' WHERE id = $id";
      $result = pg_query($con, $query);
      header("Location: dashboard.php");
  }
  else if(isset($_POST['save_seating'])){
    $seatStatus = $_POST['seats'];
    $globalSeat;
    foreach ($seatStatus as $item) {
      $globalSeat = $item;
    }
    // echo $globalSeat;
    $query = "UPDATE public.student SET seatno = '$globalSeat' WHERE id = $id";
    $result = pg_query($con, $query);
    // header("Location: dashboard.php");
  }
  else if(isset($_POST['save_medical'])){
    $counter = 0;
    $yes1 = $_POST['yes_no'];
    $yes2 = $_POST['yes_no2'];
    $yes3 = $_POST['yes_no3'];
    $yes4 = $_POST['yes_no4'];
    $yes5 = $_POST['yes_no5'];
    $yes6 = $_POST['yes_no6'];
    $yes7 = $_POST['yes_no7'];
    $yes8 = $_POST['yes_no8'];

    if($yes1 == "Yes"){
      $counter++;
    }
    if($yes2 == "Yes"){
      $counter++;
    }
    if($yes3 == "Yes"){
      $counter++;
    }
    if($yes4 == "Yes"){
      $counter++;
    }
    if($yes5 == "Yes"){
      $counter++;
    }
    if($yes6 == "Yes"){
      $counter++;
    }
    if($yes7 == "Yes"){
      $counter++;
    }
    if($yes8 == "Yes"){
      $counter++;
    }

    if($counter == 4){
      $covid19 = "Unsure";
    }else if($counter > 4){
      $covid19 = "Positive";
    }else if($counter < 4){
      $covid19 = "Negative";
    }
    $id = $_SESSION['finalid'];
    $query = "UPDATE public.student SET covid19 = '$covid19' WHERE id = $id";
    $result = pg_query($con, $query);
    header("Location: dashboard.php");
  }
  pg_close($con);
  }
?>
