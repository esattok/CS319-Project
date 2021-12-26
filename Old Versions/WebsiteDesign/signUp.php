<?php include('includes/header.php') ?>
<title>Sign Up</title>
<link rel="stylesheet" href="signUpStyles.css">
  <div class="overlayImg">
    <img class="backgroundImg" src="Images/HeartBeat2.jpg" alt="">
    <div class="formDiv">
      <a class = "homeAnchor" href = "index.php"><h2 class = "loginTitle">VitaMind</h2></a>
      <h2 class="SignInText">Sign Up</h2>
      <p class="smallSlogan">Sign up and start managing your life!</p>
      <form class="loginForm" action="code.php" method="POST">
        <input type="text" id="name" name="name" placeholder="Enter Full Name">
        <input type="number" id="id" name="id" placeholder="User ID"><br>
        <input type="password" id="password" name="password" placeholder="Password">
        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
        <br><br>

        <a href = "dashboard.html"><input type="submit" name="register_btn" value="Sign Up" id="signUpBtn"></a>
        <h3 style="color: var(--whitish); margin-top: 20px">Already have an account? <a href = "regularLogin.php" style="text-decoration: none; color: var(--light-blue)"><span>Sign In</span></a></h3>
    </div>
    </form>
  </div>
  </div>

  <?php include('includes/footer.php') ?>
