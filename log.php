<?php 
  session_start();
  
  // Start Database
  
$servername = "localhost";
$username = "root";
$password = "Qwerty1";
$dbname = "bankdatabase";

$_SESSION['start']=time();
$_SESSION['expire']=$_SESSION['start']+(5*60);

// create connection 
$conn = new mysqli($servername, $username ,$password, $dbname);
// check connection 

if($conn -> connect_error){
   die("connection failed : " . $conn -> connect_error);
  }

$loggedIn = false;
$username =$_POST["username"] or "";
$password =$_POST["password"] or "";


if($username && $password)
 {
   // user entered fields
    $query ="SELECT UName FROM logintable WHERE UName = '$username' AND password = '$password'";
  
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);

    if(!$row){
       header("Location:fail3.php");
	   }
	   else
	      $loggedIn=true;
}
if ($loggedIn)
{	
	if ($username === "Admin" ||$username === "admin" ){
		header("Location:Admin.php");
	}
	else{
		header("Location:afterlogin.php");
	}
	$_SESSION["name"]=$username;
	}
	  
$conn->close();

?>