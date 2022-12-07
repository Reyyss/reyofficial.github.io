<?php
    //including the database connection file
    include_once("mysqlconfig_connection.php");
    //including the fetch file
    include_once("fetch.php");
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
    <title>Files</title>
  
    </head>

<body>

  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Menu</span>
    </div>
    <ul class="nav-links">
      <li>
      <a href="profile.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Profile</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="profile.php">Profile</a></li>
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
    <div class="article">
    <h1>DETAILS</h1>
        <a href="addform.php">Add Data</button><br/><br/>
        <a href="cedula.php">Add Cedula</button><br/><br/>
        <a href="certificateform.php">Add Barangay Certificate</button><br/><br/>
   
        
        <table width='100%' border= 1>
            <tr bgcolor='#CCCCCC'>
                <td>ID</td>
                <td>Name</td>
                <td>Date</td>
                <td>Purok</td>
                <td>Form Type</td>
                <td>Action</td>
            </tr>

            <?php
   
   
  ?>

            <?php
                while($res=mysqli_fetch_array($result)) {
                    
                    echo "<tr>";
                    echo "<td>".$res['id']."</td>";
                    echo "<td>".$res['name']."</td>";
                    echo "<td>".$res['date']."</td>";
                    echo "<td>".$res['purok']."</td>";
                    echo "<td>".$res['formtype']."</td>";
                    echo "<td><a href=\"editform.php?id=$res[id]\">Edit</a> |
                            <a href=\"delete.php?id=$res[id]\"
                            onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        
                }
            ?>
        </table>
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





