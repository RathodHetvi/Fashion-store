<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
    <script defer src="script2.js">    
        
    </script>  
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <div id="error" style="color:red"></div>
    <form class="form" action="" method="post" id="RegForm"style="border-style:outset" >
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" id="username" placeholder="Username" />
        <input type="text" class="login-input" name="email" id="email"placeholder="Email Adress" >
        <input type="password" class="login-input" name="password" id="password"placeholder="Password">
        <input type="submit" name="submit" value="Register"  class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
    <style>
      body{
          background: white;
      }
  </style>

    
       
    
<?php
    }
?> 

</body>
</html>
