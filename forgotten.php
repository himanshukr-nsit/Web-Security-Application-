<?php 
  session_start();
  
  // Start Database
  
$servername = "localhost";
$username2 = "root";
$password2 = "Qwerty1";
$dbname = "bankdatabase";
// create connection 
$conn = new mysqli($servername, $username2 ,$password2 , $dbname);
// check connection 

if($conn -> connect_error){
   die("connection failed : " . $conn -> connect_error);
  }

$loggedIn = false;
$username = $_POST["username"] or "";


if($username)
 {
   // user entered fields
    $query ="SELECT UName,EID FROM registertable WHERE UName = '$username'";
  
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    
    if(!$row){
       header("Location:fail5.php");
	   }
	   else {
	   header("Location:for.php");
	   
	   }
	    $_SESSION["name"]=$username;
	}
	  
$conn->close();

?>