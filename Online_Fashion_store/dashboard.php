<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form" style="width:100%; padding:10px" >
    <div class="logo">                      
        <a href="dashboard.php"><img src="img/4jade.png" ></a>
                        
    </div>           
    <h1 style="text-align:center;">Hey, <?php echo $_SESSION['username']; ?>!</h1>
    <h2 style="text-align:center; ">Welcome in 4Jade</h2>
        <div class="row"style="text-align:center;">
            <div class="col-2 "style="text-align:center;">
                <img src="img\louis\first.png"style="width:90%; margin:10px 10px;" >
            </div>
            <a href="website.html" class="btn" style="text-decoration:none;"><p style="text-align:center;">Discover the Collection&#8594;</p></a>
            <p style="text-align:center"><a href="logout.php" class="btn"style="text-decoration:none;">Logout</a></p>
            
        </div>
    </div>
    <style>
      body{
          background: white;
      }
      .form{
          margin:auto;
      }
      .btn{
        display: inline-block;
        background-color:#f5d7bd;
        color: #252429;
        padding: 8px 30px;  
        border-radius: 30px;
        transition: background 0.5ms; 
    }

    .btn:hover{
        background-color:whitesmoke;
    }
    .logo{
         height: 60px;
         text-align:center;
    }
    .logo img{
        border: 1px solid white;
        border-radius: 50%;
        width: 60px;
        text-align:center;
     
    }
  </style>
</body>
</html>
