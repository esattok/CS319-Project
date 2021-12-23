<?php
      require 'connection.php';
      require 'code.php';
      include('includes/header.php');
?>
<title>Sign Up</title>
<link rel="stylesheet" href="signUpStyles.css">
  <div class="overlayImg">
    <div class="formDiv">
      <a class = "homeAnchor" href = "index.php"><h2 class = "loginTitle">VitaMind</h2></a>
      <h2 class="SignInText">Sign Up</h2>
      <div class="button-box">
        <div id="btn">

        </div>
        <button type="button" name="button" class = "toggle-btn" onclick="student()">Student</button>
        <button type="button" name="button" class = "toggle-btn" onclick="admin()">Admin</button>
      </div>
      <form id = "studentLogin" class="loginForm" method="post" autocomplete="off">
        <input type="text" minlength = "3" id="name" name="name" placeholder="Enter Full Name">
        <input type="number" minlength = "8" id="id" name="id" placeholder="Student ID">
        <input type="password" minlength = "8" id="password" name="password" placeholder="Password">
        <input type="password" minlength = "8" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
        <div class="error"><?php echo $msg ?></div>
        <input type="submit" name="register_btn" value="Sign Up" id="signUpBtn">
        <h3 style="color: var(--whitish); margin-top: 20px">Already have an account? <a href = "regularLogin.php" style="text-decoration: none; color: var(--light-blue)"><span>Sign In</span></a></h3>
        </form>

        <form id = "adminLogin" class="loginForm" method="post" autocomplete="off">
          <input type="text" minlength = "3" id="name" name="name_admin" placeholder="Enter Full Name">
          <input type="number" minlength = "8" id="id" name="id_admin" placeholder="Admin ID">
          <input type="password" minlength = "8" id="password" name="password_admin" placeholder="Password">
          <input type="password" minlength = "8" id="confirmPassword" name="confirmPassword_admin" placeholder="Confirm Password">
          <div class="error" id = "errorMsg"><?php echo $msg ?></div>
          <input type="submit" name="register_btn_admin" value="Sign Up" id="signUpBtn">
          <h3 style="color: var(--whitish); margin-top: 20px">Already have an account? <a href = "regularLogin.php" style="text-decoration: none; color: var(--light-blue)"><span>Sign In</span></a></h3>
          </form>
    </div>
  </div>
  </div>
  <script type="text/javascript">
  var studentBtn = document.getElementById('studentLogin');
  var adminBtn = document.getElementById('adminLogin');
  var bgOverlay = document.getElementById('btn');
  var errorMsg = document.getElementById('errorMsg');

  function admin(){
    bgOverlay.style.left = "145px";
    studentBtn.style.visibility = "collapse";
    adminBtn.style.visibility = "visible";
    if(errorMsg.offsetHeight > 0){
      adminBtn.style.top = "-353px";
    }
  }

  var studentBtn = document.getElementById('studentLogin');
  var adminBtn = document.getElementById('adminLogin');
  var bgOverlay = document.getElementById('btn');

  function student(){
    bgOverlay.style.top = "0";
    bgOverlay.style.left = "0";
    studentBtn.style.visibility = "visible";
    adminBtn.style.visibility = "collapse";
  }


  </script>
  <?php include('includes/footer.php') ?>
