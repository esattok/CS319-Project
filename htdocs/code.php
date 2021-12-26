<?php
if(!$con){
  echo "Error : Unable to open database\n";
}else{
  // echo "Connected";
  if(isset($_POST['register_btn'])){
    if(!empty($_POST['name']) && !empty($_POST['id']) && !empty($_POST['password']) && !empty($_POST['confirmPassword'])){
      $name = $_POST['name'];
      $id = $_POST['id'];
      $password = $_POST['password'];
      $confirmPassword = $_POST['confirmPassword'];
      $hash = password_hash($password, PASSWORD_BCRYPT);
      $msg = "Successfully Registered!";
      $query = "SELECT * from public.student WHERE id = $id";
      $result = pg_query($con, $query);
      $typedID = pg_fetch_result($result, 0, 0);
      if($typedID == $id){
        $msg = "ID already exists";
      }
      else if($password !== $confirmPassword){
         $msg = "Passwords don't match!";
       }else{
         $query = "INSERT INTO public.student (id,password,name) VALUES ('$id', '$hash','$name')";
         header("Location: regularLogin.php");
       }
    }else{
      $msg = "All fields required!";
    }
  }
  else if (isset($_POST['register_btn_admin'])){
    if(!empty($_POST['name_admin']) && !empty($_POST['id_admin']) && !empty($_POST['password_admin']) && !empty($_POST['confirmPassword_admin'])){
      $name = $_POST['name_admin'];
      $id = $_POST['id_admin'];
      $password = $_POST['password_admin'];
      $confirmPassword = $_POST['confirmPassword_admin'];
      $hash = password_hash($password, PASSWORD_BCRYPT);
      $msg = "Successfully Registered!";
      if($password !== $confirmPassword){
         $msg = "Passwords don't match!";
       }else{
         $query = "INSERT INTO public.admin (id,password,name) VALUES ('$id', '$hash','$name')";
         header("Location: regularLogin.php");
       }
    }else{
      $msg = "All fields required!";
    }

  }

  $result = pg_query($con, $query);
  // header("Location: signUp.php");
  pg_close($con);
}
?>
