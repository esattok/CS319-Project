<?php
if(!$con){
  echo "Error : Unable to open database\n";
}else{
  // echo "Connected";
  if(isset($_POST['loginBtn'])){
    if(!empty($_POST['id']) && !empty($_POST['password'])){
      $id = $_POST['id'];
      $password = $_POST['password'];
      $query = "SELECT * from public.student WHERE id = $id";
      $result = pg_query($con, $query);
      $val = pg_fetch_result($result, 0, 1);
      $uname = pg_fetch_result($result, 0, 2);
      $finalid = pg_fetch_result($result, 0, 0);
      if(password_verify($password,$val)){
        $msg = "Login Successful";
        $_SESSION['uname'] = $uname;
        $_SESSION['finalid'] = $finalid;
        $_SESSION['user_start'] = time();
        header("Location: dashboard.php");
      }else{
        $msg = "Login Details Incorrect";
      }
    }else{
      $msg = "All fields required!";
    }
  }else if(isset($_POST['loginBtn_admin'])){
    if(!empty($_POST['id_admin']) && !empty($_POST['password_admin'])){
      $id = $_POST['id_admin'];
      $password = $_POST['password_admin'];
      $query = "SELECT * from public.admin WHERE id = $id";
      $result = pg_query($con, $query);
      $val = pg_fetch_result($result, 0, 1);
      if(password_verify($password,$val)){
        header("Location: dashboard.php");
      }else{
        $msg = "Login Details Incorrect";
      }
    }else{
      $msg = "All fields required!";
    }
  }
  // header("Location: signUp.php");
  // pg_close($con);
}
?>
