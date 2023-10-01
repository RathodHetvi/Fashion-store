<?php
if(isset($_POST['username'])){$username= $_POST['username'];}

if(isset($_POST['password'])){$password= $_POST['password'];}
if(isset($_POST['email'])){$email= $_POST['email'];}

if (!empty($username) || !empty($password) || !empty($email)){
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
        $SELECT = "SELECT email from register where email =? Limit 1";
        $INSERT = "INSERT Into register (username, password, email) values(?,?,?)";

        $stmt =$conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum =$stmt->num_rows;

        if($rnum==0){
            $stmt->close();

            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("sss",$username,$password,$email);
            $stmt->execute();
            echo "new record inserted";
        }
        else{
            echo "someone already register using this email";
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
