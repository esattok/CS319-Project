
 function loggedIn () {
     let signInBtn = document.getElementById('bannerBtn2');
     let signUpBtn = document.getElementsByClassName('signUpBtn')[0];
     let loginNav = document.getElementsByClassName('login')[0];
     let profileBtn = document.getElementsByClassName('dashboardBtn')[0];
     loginNav.style.display = "none";
     signInBtn.style.display = "none";
     signUpBtn.style.display = "none";
     profileBtn.style.display = "";
  }

  function loggedOut () {
      var signInBtn = document.getElementById('bannerBtn2');
      let signUpBtn = document.getElementsByClassName('signUpBtn')[0];
      let loginNav = document.getElementsByClassName('login')[0];
      let profileBtn = document.getElementsByClassName('dashboardBtn')[0];
      loginNav.style.display = "";
      signInBtn.style.display = "";
      signUpBtn.style.display = "";
      profileBtn.style.display = "none";
      alert("Hello");
   }
