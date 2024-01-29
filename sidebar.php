<?php
 
include('link.php');
?>
<style>
  
</style>
 <link href="assets/css/style.css" rel="stylesheet">
<style>
  .sidebar-wrapper .sidebar-header {
  padding: 20px;
  overflow: hidden;
  background-color: #f6fafb;
}
.icns{
  margin: 0 10px 0 7px;
    /* font-size: 12px; */
    width: 15px;
    height: 15px;
    line-height: 30px;
    text-align: center;
    border-radius: 4px
}
h5{
  font-family: 'Inter';
  font-style: normal;
  font-weight: 600;
  font-size: 24px;
  line-height: 29px;
  color: #494949;
}


</style>

<div id="side" class="page-wrapper chiller-theme toggled">

  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
 
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="dashboard.php">
              <img src="img/lgo.png" alt=""class="icns">
              <span>ESKAY TRANSPORT </span>
            </a>
        <div id="close-sidebar">
        <i class='bx bx-menu'></i>
        </div>
      </div>
     
      <div class="sidebar-menu"><br>
        <ul>
          <li>
            <a href="dashboard.php">
              <img src="img/Vector (6).png" alt=""class="icns">
              <span>DASHBOARD</span>
            </a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
            <img src="img/Vector (7).png" alt=""class="icns">
              <span>VEHICLE</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                <a href="add_vehicle.php"  id="valid">
                <img src="img/sub1.png" alt=""class="icns">
                <span>ADD VEHICLE</span></a>
                </li>
                 <li>
                 <a href="view_vehicle.php"  id="valid">
                 <img src="img/sub2.png" alt=""class="icns">
                 <span>VIEW VEHICLE</span></a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="maintenance.php">
              <img src="img/Vector (7).png" alt=""class="icns">
              <span>MAINTENANCE</span>
            </a>
          </li>
           <li class="sidebar-dropdown">
            <a href="#">
            <img src="img/clarityEmployeeGroupLine0.png" alt=""class="icns">
              <span>ADD EMPLOYEE</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                <a href="add_driver.php"  id="valid">
                <img src="img/sub3.png" alt=""class="icns">
                <span>ADD DRIVER</span></a>
                </li>
                 <li>
                 <a href="view_driver.php"  id="valid">
                 <img src="img/sub3.png" alt=""class="icns">
                 <span>VIEW DRIVER </span></a>
                </li>
                <li>
                 <a href="add_cleaner.php"  id="valid">
                 <img src="img/sub4.png" alt=""class="icns">
                 <span>ADD CLEANER </span></a>
                </li>
                <li>
                 <a href="view_cleaner.php"  id="valid">
                 <img src="img/sub4.png" alt=""class="icns">
                 <span>VIEW CLEANER </span></a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="assign_truck.php">
            <img src="img/Vector (8).png" alt=""class="icns">
              <span>ASSIGN TRUCK</span>
            </a>
          </li>
          <li>
            <a href="tripsheet.php">
            <img src="img/Group 62.png" alt=""class="icns">
              <span>TRIP SHEET</span>
            </a>
          </li>
          <li>
            <a href="index.php">
            <img src="img/Group 62.png" alt=""class="icns">
              <span>Log-Out</span>
            </a>
          </li>
        </ul>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->

  </nav>

  <script>
      if (screen.width < 600) {
       $('#side').removeClass("toggled");
          // download complicated script
          // swap in full-source images for low-source ones
        }
    </script>