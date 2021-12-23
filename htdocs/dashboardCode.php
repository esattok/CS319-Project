<?php
require 'connection.php';
if (isset($_SESSION['finalid'])) {
$id = $_SESSION['finalid'];
$query = "SELECT * from public.student WHERE id = $id";
$result = pg_query($con, $query);
$uname = pg_fetch_result($result, 0, 2);
$email = pg_fetch_result($result, 0, 3);
$address = pg_fetch_result($result, 0, 4);
$phone = pg_fetch_result($result, 0, 5);
$hes = pg_fetch_result($result, 0, 6);
$hes = strtoupper($hes);
$age = pg_fetch_result($result, 0, 7);
$height = pg_fetch_result($result, 0, 8);
$weight = pg_fetch_result($result, 0, 9);
$chronic = pg_fetch_result($result, 0, 10);
$blood = pg_fetch_result($result, 0, 11);
$covid19 = pg_fetch_result($result, 0, 12);
}else {
  header("Location: index.php");
}
 ?>
