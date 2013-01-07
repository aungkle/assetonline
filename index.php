<?php
session_start();
include './databaseconnect.php';
if($_GET['logout']!=NULL && $_GET['logout']=='logout'){
  session_destroy();
  $nodata = FALSE;
  echo "<script> window.parent.location = 'index.php';</script>";
}
if ($_POST['email'] != NULL) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $strSQL = "SELECT firstname,lastname,password,position FROM user WHERE email = '$email'";
  $sql_result = mysql_query($strSQL,$con);
  if(!$sql_result){
    die('Query Error'); 
  }else{
    $arr_result = mysql_fetch_array($sql_result);
    if(!$arr_result){
      $nodata = TRUE;
    }else{
      if($arr_result['password']==$password){
        $_SESSION['name'] = $arr_result['firstname']." ".$arr_result['lastname'];
        $_SESSION['position'] = $arr_result['position'];
        $_SESSION['login'] = TRUE;
        header('Location: main.php');
      }else{
        $nodata = TRUE;
      }
    }
  }
  mysql_close($con);
}
include './_header.php';
?>
<style type="text/css">
  body {
    overflow-y: hidden ! important;
    overflow-x: auto ! important;
  }
  #background {
    left: 0px;
    top: 0px;
    position: absolute;
  }
  #content {
    padding-top: 300px;
    padding-left: 100px;
    position: absolute;
  }
  #background img { 
    max-width: 54%; /* or any other value */
    height: auto;
  }
  .well {
    height: 300px;
    width: 500px;
  }
</style>
</head>
<body>
  <div id="background">
    <img src="./images/loginbg.jpg" />
  </div>

  <div id="content">
    <div class="well">
      <div id="alert" class="alert alert-error" style="display: none"> 
        <a class="close" onclick="$('.alert').hide()">×</a>  
      <strong>Can't Sign in!</strong> Your email or password is wrong.  
      </div>
      <?php 
        if($nodata){
          echo "<script> $('.alert').show() </script>";
        }
      ?>
      <h2 class="form-signin-heading">Please sign in</h2>
      <br />
      <form class="form-horizontal" id="login_form" method="POST" action="index.php">
        <div class="control-group">
          <label class="control-label" for="inputEmail">Email</label>
          <div class="controls">
            <input type="email" id="inputEmail" name="email" placeholder="test@example.com" required>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputPassword">Password</label>
          <div class="controls">
            <input type="password" id="inputPassword" name="password" placeholder="Password" required>
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <button class="btn btn-large btn-primary" type="submit">Sign in</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <?php include('./_footer.php'); ?>