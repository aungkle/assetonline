<?php include './_header.php'; ?>

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
    height: 250px;
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
      <?php include './login_form.php'; ?>
    </div>
  </div>
<?php include("./_footer.php"); ?>