<?php
      session_start();
      require 'connection.php';
      require 'loginCode.php';
      include('includes/header.php');

?>
<title>Login</title>
<link rel="stylesheet" href="loginStyles.css">
  <div class="overlayImg">
    <div class="formDiv">
      <a class = "homeAnchor" href = "index.php"><h2 class = "loginTitle">VitaMind</h2></a>
      <h2 class="SignInText">Sign In</h2>
      <div class="button-box">
        <div id="btn">

        </div>
        <button type="button" name="button" class = "toggle-btn" onclick="student()">Student</button>
        <button type="button" name="button" class = "toggle-btn" onclick="admin()">Admin</button>
      </div>
      <form id = "studentSignup" class="loginForm" method="post">
        <input type="number" minlength = "8" id="id" name="id" placeholder="User ID">
        <input type="password" id="password" name="password" placeholder="Password">
        <!-- <input type="checkbox" id="rememberMe" name="rem" value="rememberMe">
        <label for="rem"> Remember me</label>
        <button class="forgotPassword" type="button" name="button">Forgot Password?</button><br /><br><br /> -->
        <div id = "errorMsg" class="error"><?php echo $msg ?></div>
        <input type="submit" name="loginBtn" value="Login" id="loginBtn">
        <h3 style="color: var(--whitish); margin-top: 10px">Don't have an account? <a href = "signUp.php" style="text-decoration: none; color: var(--light-blue)"><span>Sign Up</span></a></h3>
      </form>

        <form id = "adminSignup" class="loginForm" method="post">
          <input type="number" minlength = "8" id="id" name="id_admin" placeholder="Admin ID">
          <input type="password" id="password" name="password_admin" placeholder="Password">
          <!-- <input type="checkbox" id="rememberMe" name="rem" value="rememberMe">
          <label for="rem"> Remember me</label>
          <button class="forgotPassword" type="button" name="button">Forgot Password?</button><br /><br><br /> -->
          <div id = "errorMsg" class="error"><?php echo $msg ?></div>
          <input type="submit" name="loginBtn_admin" value="Login" id="loginBtn">
          <h3 style="color: var(--whitish); margin-top: 10px">Don't have an account? <a href = "signUp.php" style="text-decoration: none; color: var(--light-blue)"><span>Sign Up</span></a></h3>
          </form>
    </div>
  </div>
  </div>

  <script type="text/javascript">
  var studentBtn = document.getElementById('studentSignup');
  var adminBtn = document.getElementById('adminSignup');
  var bgOverlay = document.getElementById('btn');
  var errorMsg = document.getElementById('errorMsg');

  function admin(){
    bgOverlay.style.left = "145px";
    studentBtn.style.visibility = "collapse";
    adminBtn.style.visibility = "visible";
    if(errorMsg.offsetHeight > 0){
      adminBtn.style.top = "-233px";
    }
  }

  var studentBtn = document.getElementById('studentSignup');
  var adminBtn = document.getElementById('adminSignup');
  var bgOverlay = document.getElementById('btn');

  function student(){
    bgOverlay.style.top = "0";
    bgOverlay.style.left = "0";
    studentBtn.style.visibility = "visible";
    adminBtn.style.visibility = "collapse";
  }

  </script>

  <?php include('includes/footer.php') ?>
