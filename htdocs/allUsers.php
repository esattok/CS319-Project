<?php
require 'connection.php';
$id = $_SESSION['finalid'];
$query = "SELECT * from public.student";
$result = pg_query($con, $query);
$totalRows = pg_num_rows($result);
// echo $rows1;
$nameArray = array();
$idArray = array();
$emailArr = array();
$statusArr = array();
for ($x = 0; $x < $totalRows; $x++) {
    $nameArray[$x] = pg_fetch_result($result, $x, 2);
}

for ($x = 0; $x < $totalRows; $x++) {
    $idArray[$x] = pg_fetch_result($result, $x, 0);
}

for ($x = 0; $x < $totalRows; $x++) {
    $emailArr[$x] = pg_fetch_result($result, $x, 3);
}

for ($x = 0; $x < $totalRows; $x++) {
    $statusArr[$x] = pg_fetch_result($result, $x, 12);
}
// $uname = pg_fetch_result($result, 0, 2);
// $email = pg_fetch_result($result, 0, 3);
// $address = pg_fetch_result($result, 0, 4);
// $phone = pg_fetch_result($result, 0, 5);
// $hes = pg_fetch_result($result, 0, 6);
// $hes = strtoupper($hes);
// $age = pg_fetch_result($result, 0, 7);
// $height = pg_fetch_result($result, 0, 8);
// $weight = pg_fetch_result($result, 0, 9);
// $chronic = pg_fetch_result($result, 0, 10);
// $blood = pg_fetch_result($result, 0, 11);
// $covid19 = pg_fetch_result($result, 0, 12);
// }
 ?>
