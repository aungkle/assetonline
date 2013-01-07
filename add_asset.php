<?php
session_start();
//if ($_SESSION['login'] != NULL) {
//} else {
//  echo "<script>parent.location.href = \"index.php\" ;</script>";
//}
include './_header.php';
?>
<style type="text/css">
  body {
    padding-top: 60px;
    padding-bottom: 40px;
  }
  .sidebar-nav {
    padding: 9px 0;
  }
</style>

</head>
<body>

  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="#">OCN Asset Online</a>
        <div class="nav-collapse collapse">
          <p class="navbar-text pull-right">
            Logged in as &nbsp; <?php echo $_SESSION['name'] ?>
            &nbsp; Position &nbsp; <?php echo $_SESSION['position'] ?>
            &nbsp; <a href="./index.php?logout=logout">Sign out</a>
          </p>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span3">
        <div class="well sidebar-nav">
          <ul class="nav nav-list">
            <li class="nav-header">MENU</li>
            <li class="active"><a href="./add_asset.php">เพิ่มครุภัณฑ์ใหม่</a></li>
            <li><a href="./add_place.php">จัดการสถานที่ใช้</a></li>
            <li><a href="./add_catalog.php">จัดการประเภทครุภัณฑ์</a></li>
            <li><a href="./add_user.php">จัดการผู้ใช้</a></li>
          </ul>
        </div><!--/.well -->
      </div><!--/span-->
      <div class="span9">
        <div class="tabbable tabs-left">
          
          <ul id="myTab" class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
            <li><a href="#profile" data-toggle="tab">Profile</a></li>
            <li><a href="#messages" data-toggle="tab">Messages</a></li>
            <li><a href="#settings" data-toggle="tab">Settings</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade in active" id="home">HOME ...  Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. </div>
            <div class="tab-pane fade in " id="profile">PROFILE ... Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</div>
            <div class="tab-pane fade in " id="messages">MESSAGES ... Aliquip placeat salvia cillum iphone. </div> 
            <div class="tab-pane fade in " id="settings">SETTING ... Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</div>
          </div>
        </div>

      </div>
      
  <?php include("./_footer.php"); ?>
