<?php include('includes/header.php') ?>
<title>Login</title>
<link rel="stylesheet" href="loginStyles.css">
  <div class="overlayImg">
    <img class="backgroundImg" src="Images/HeartBeat2.jpg" alt="">
    <div class="formDiv">
      <a class = "homeAnchor" href = "index.php"><h2 class = "loginTitle">VitaMind</h2></a>
      <h2 class="SignInText">Sign In</h2>
      <p class="smallSlogan">Sign in and start managing your life!</p>
      <form class="loginForm" action="index.html" method="post">
        <input type="number" id="id" name="id" placeholder="User ID"><br>
        <input type="password" id="password" name="password" placeholder="Password"><br><br>
        <input type="checkbox" id="rememberMe" name="rem" value="rememberMe">
        <label for="rem"> Remember me</label>
        <button class="forgotPassword" type="button" name="button">Forgot Password?</button><br /><br><br />
        <a href = "dashboard.php"><input type="button" name="loginBtn" value="Login" id="loginBtn"></a>
        <h3 style="color: var(--whitish); margin-top: 10px">Don't have an account? <a href = "signUp.php" style="text-decoration: none; color: var(--light-blue)"><span>Sign Up</span></a></h3>
    </div>
    </form>
  </div>
  </div>

  <?php include('includes/footer.php') ?>
