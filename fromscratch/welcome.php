<?php
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $user=$_POST["username"];
    $password=$_POST["password"];

    $conn=new mysqli('localhost','root','','chernobyl');
    if($conn->connect_error){
      die('connection failed :'.$conn->connect_error);
    }else{
      $stmt=$conn->prepare("  INSERT INTO customer(first_name,last_name,email,user_name,password) VALUES(?,?,?,?,?)");
      $stmt->bind_param("sssss",$fname,$lname,$email,$user,$password);
      $stmt->execute();
      // header("Location:welcome.php");exit;
      // echo("registration success!");
      $stmt->close();
      $conn->close();

    }

?>

<html>
    <head>
        <?php require_once "top.php"?>
        <link rel="stylesheet" type="text/css" href="welcome.css">
    </head>
    <body id=body>
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar-header">
  <a class="navbar-brand" id="brand" href="index.html" target="_self">
    <img src="../home2.png" alt="company logo" id="logo-img">
    SheCart
  </a>
  <button id="navBartoggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav mr-auto" id="nav-list">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="catogaries.html" target="_blank">Catogaries </a>
      </li>
    </ul>
      <ul class="nav navbar-nav navbar-right" id="nav-list2">
      <li class="nav nav-item" id="cart-logo">
        <a class="nav-link" href="#" target="_blank">
          <i class="fa fa-shopping-cart fa-2x" id="glyph"></i></a>
      </li>
      <!-- <div class="v1"></div> -->
      <!-- <li class="nav-item" id="signin-logo">
        <a class="nav-link" href="login.php" target="_blank">
          <i class="fa fa-user fa-2x" id="glyph"></i> </a>
      </li> -->
      </ul>
      </div>
      </nav>
      <div class="jumbotron" id="jumbotron">
      <div class="container">
        <h1 class="display-4" id="welcome">Welcome To SheCart <?=htmlentities(strtoupper("$fname")) ?>!</h1>
        <button id="shopping">Keep Shopping&#10141;</button>
      </div>
    </div>


<?php require_once "script.php"?>
<footer id="footer">
    <div class="panel-container">
        <p id="copyright">Copyright &copy; 2020 SheCart.inc</p>    
    </div>
</footer>    

</body>    
</html>