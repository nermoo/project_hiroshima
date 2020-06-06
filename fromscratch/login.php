


<?php
require_once "top.php";
require_once "nav.php";
?>
<link rel="stylesheet" type="text/css" href="../fromzero/css/login.css" >
<body>

 <div class="container">
        
        <div class="loginbox">
            
                <h1>Login into SheCart</h1>
                <form method='post' action="welcome.php">
                    <p>User Name</p>
                    <input type="text" name="username" placeholder="Enter User Name">
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Enter Password">
                    <input type="submit" name="" value="Login">
                    <a href="#">Lost your password?</a><br>
                    <a href="signup.html">Don't have an account?</a>
                </form>
                </div>
                
          </div>
<?php
// require_once "footer.php";
require_once "script.php";
?>
</body>
</html>