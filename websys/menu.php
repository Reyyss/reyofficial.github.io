<?php
session_start();
if(!isset($_SESSION["username"]))
{
  header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="menu.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
  
    </head>

<body>

  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Menu</span><? php echo  $_SESSION["username"] ?>
    </div>
    <ul class="nav-links">
      <li>
      <a class="navbuttons" href="profile.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Profile</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Profile</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Forms</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Forms</a></li>
          <li><a class="navbuttons" href="cedula.php">Cedula</a></li>
          <li><a class="navbuttons" href="issuance.php">Issuance</a></li>
          <li><a class="navbuttons" href="certificate.php">Certificate</a></li>
        </ul>
      </li>

 
      <li>
        <a class="navbuttons" href="files.php">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Files</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="files.php">Files</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
      </div>
      <div class="name-job">
        <div class="profile_name">Admin</div>
        <div class="job"><a href="login.php">Log Out</a></div>
      </div>
      <i class='bx bx-log-out'></i>
    </div>
  </li>
</ul>
  </div>

  <section class="home-section">
    <div class="header">
      <i class='bx bx-menu'></i>
      <h1 style="font-size:30px">Barangay Management System</h1>
    </div>

    <div class="container">
            <p>ABOUT DEVELOPERS</p>
            <img src="dev.png" width="200" alt="" />
            <img src="dev2.png" width="200" alt="" />
            <img src="dev3.png" width="200" alt="" />
            <img src="dev4.png" width="200" alt="" />
            <img src="dev5.png" width="200" alt="" />
            <img src="dev6.png" width="200" alt="" />
    </div>
    <div class="container" id="container2">
            <p>BARANGAY INFORMATION</p>
            <img src="dev.png" width="200" alt="" />
            <img src="brgy2.png" width="100%" alt="" />
            <img src="dev2.png" width="200" alt="" />
            <img src="dev3.png" width="200" alt="" />
            <img src="dev4.png" width="200" alt="" />
            <img src="dev5.png" width="200" alt="" />
            <img src="dev6.png" width="200" alt="" />
    </div>
    <div class="container" id="container2">
            <p>BARANGAY INFORMATION</p>
            <img src="dev.png" width="200" alt="" />
            <img src="brgy2.png" width="100%" alt="" />
            <img src="dev2.png" width="200" alt="" />
            <img src="dev3.png" width="200" alt="" />
            <img src="dev4.png" width="200" alt="" />
            <img src="dev5.png" width="200" alt="" />
            <img src="dev6.png" width="200" alt="" />
    </div>
     <div class="container" id="container2">
            <p>BARANGAY INFORMATION</p>
            <img src="dev.png" width="200" alt="" />
            <img src="brgy2.png" width="100%" alt="" />
            <img src="dev2.png" width="200" alt="" />
            <img src="dev3.png" width="200" alt="" />
            <img src="dev4.png" width="200" alt="" />
            <img src="dev5.png" width="200" alt="" />
            <img src="dev6.png" width="200" alt="" />
    </div>
      
  </section>
  
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
</body>
</html>





