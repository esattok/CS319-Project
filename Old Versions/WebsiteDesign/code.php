<?php
$host = "localhost";
$user = "postgres";
$pass = "pgpass123";
$db = "UserInfo";
$conn = pg_connect("host=$host port=5432 dbname=$db user=$user password=$pass");

if(!$conn){
  echo "Error : Unable to open database\n";
}
// }else{
//   $name = $_POST['name'];
//   $id = $_POST['id'];
//   $password = $_POST['password'];
//   $confirmPassword = $_POST['confirmPassword'];
//
//   $query = "INSERT INTO register (name, id, password, confirmPassword) VALUES ('$name', '$id', '$password', '$confirmPassword')";
//   $result = pg_query($con, $query);
//   header("Location: signUp.php");
// }
// pg_close($con);
?>
