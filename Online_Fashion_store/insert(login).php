<?php
if(isset($_POST['username'])){$username= $_POST['username'];}

if(isset($_POST['password'])){$password= $_POST['password'];}


if (!empty($username) || !empty($password) ){
$host="localhost";
$dbUsername= "root";
$dbPassword="";
$dbname="demo";

$conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);

    if (mysqli_connect_error())
    {
        die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{
        $SELECT = "SELECT username from login where username =? Limit 1";
        $INSERT = "INSERT Into login (username, password) values(?,?,?)";

        $stmt =$conn->prepare($SELECT);
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $stmt->bind_result($username);
        $stmt->store_result();
        $rnum =$stmt->num_rows;

        if($rnum==0){
            $stmt->close();

            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ss",$username,$password);
            $stmt->execute();
            echo "successfullu log in";
        }
        else{
            echo "can't recgnonize username";
        }
        $stmt->close();
        $conn->close();

    }
}
else{
    echo "All field are required";
    die();
}
?>
