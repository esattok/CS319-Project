<?php
require 'connection.php';
if (isset($_SESSION['finalid'])) {
  $id = $_SESSION['finalid'];
  $query = "SELECT * from public.student WHERE id = $id";
  $date = pg_fetch_result($result, 0, 13);
  $type = pg_fetch_result($result, 0, 14);
  $status = pg_fetch_result($result, 0, 15);
  $doses = pg_fetch_result($result, 0, 16);
  $result = pg_query($con, $query);
}else {
  header("Location: index.php");
}
 ?>
