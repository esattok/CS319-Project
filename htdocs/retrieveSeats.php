<?php
require 'connection.php';
if(!$con){
  echo "Error : Unable to open database\n";
}else{
  $query = "SELECT seatno,id from public.student";
  $result = pg_query($con, $query);
  $rows1 = pg_num_rows($result);
  // echo $rows1;
  $val = array();
  $idArr = array();
  for ($x = 0; $x < $rows1; $x++) {
      $val[$x] = pg_fetch_result($result, $x, 0);
  }

  for ($x = 0; $x < $rows1; $x++) {
      $idArr[$x] = pg_fetch_result($result, $x, 1);
  }
  // header("Location: signUp.php");
  // pg_close($con);
}
?>
