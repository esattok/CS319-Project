<?php
if(!$con){
  echo "Error : Unable to open database\n";
}else{
  // echo "Connected";
  if(isset($_POST['save_settings'])){
      $emailNew = $_POST['email'];
      $addressNew = $_POST['address'];
      $phoneNew = $_POST['phone'];
      $covid19New = $_POST['covid19'];
      $hesCodeNew = $_POST['hesCode'];
      $ageNew = $_POST['age'];
      $heightNew = $_POST['height'];
      $weightNew = $_POST['weight'];
      $bloodNew = $_POST['blood'];
      $chronicHistoryNew = $_POST['chronicHistory'];
      $id = $_SESSION['finalid'];
      echo $covid19;
      echo $blood;
      $id = $_SESSION['finalid'];
      echo $id;
      $query = "UPDATE public.student SET email = '$emailNew', address = '$addressNew', phone = '$phoneNew', hes = '$hesCodeNew', age = '$ageNew', height = '$heightNew', weight = '$weightNew', chronic = '$chronicHistoryNew', blood = '$bloodNew', covid19 = '$covid19New' WHERE id = $id";
      $result = pg_query($con, $query);
      header("Location: dashboard.php");
  }
  pg_close($con);
  }
?>
