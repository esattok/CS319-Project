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
  pg_close($con);
  }
?>
