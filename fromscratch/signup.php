

<html>
    <head>
        <?php
            require_once "top.php"
        ?>
        <link rel="stylesheet" type="text/css" href="../css/signup.css">
        <title>
        Sign up to SheCart
        </title>
    </head>

<body id="body">
    <?php require_once "nav.php"?>
    <div class="container">
      <div class="wrap">
        <h1>Sign up to She Cart</h1>
        <form method="post" action="welcome.php" target="_self">
            <input type="text" placeholder="First Name" name="fname" required>
            <input type="text" placeholder="Last Name" name="lname" >
            <input type="text" placeholder="E-mail" name="email" >
            <input type="text" placeholder="User Name" name="username" >
            <input type="password" placeholder="password" name="password" >
            <input type="submit" placeholder="Sign Up" value="Sign up">            
            
        </form>
        <p>If you already have an account?
          <a href="login.php"> <button id="login">Login</button></a>
        </p>
    </div>
  </div>
<?php require_once "footer.php"?>
<?php require_once "script.php"?>
</body>
</html>