<?php 
  session_start();
  
$username3="Admin";
$servername = "localhost";
$username2 = "root";
$password2 = "Qwerty1";
$dbname = "bankdatabase";
$dbname1 = "userdetails";
$DELETED = false;



$loggedIn = false;
$username = $_POST["username"] or "";
$password = $_POST["password"] or "";
$usename=$username;

// create connection 
$conn = new mysqli($servername, $username2 ,$password2, $dbname);
// check connection 

if($conn -> connect_error){
   die("connection failed : " . $conn -> connect_error);
  }

if($username && $password)
 {
   // user entered fields
    $query ="SELECT UName,password FROM logintable WHERE UName = '$usename'";
  
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);

    if(!$row){
       header("Location:fail4.php");
	   	   }
	   else{
	      $exist=true;
}}
	$_SESSION["name"]=$username;
	
	  
$conn->close();


// create connection 
$conn = new mysqli($servername, $username2 ,$password2, $dbname);
// check connection 

if($conn -> connect_error){
   die("connection failed : " . $conn -> connect_error);
  }

if($usename && $password && $exist)
 {
   // user entered fields
    $query ="DELETE FROM logintable WHERE UName = '$usename'";
  
    $result = mysqli_query($conn,$query);
    
}
$conn->close();

// create connection 
$conn = new mysqli($servername, $username2 ,$password2, $dbname);
// check connection 

if($conn -> connect_error){
   die("connection failed : " . $conn -> connect_error);
  }


if($username && $password && $exist)
 {
   // user entered fields
    $query ="DELETE FROM registertable WHERE UName = '$usename'";
  
    $result = mysqli_query($conn,$query);
    
}
$conn->close();

// create connection 
$conn = new mysqli($servername, $username2 ,$password2, $dbname);
// check connection 

if($conn -> connect_error){
   die("connection failed : " . $conn -> connect_error);
  }

if($username && $password && $exist)
 {
   // user entered fields
    $query ="DELETE FROM transactiontable WHERE UName = '$usename'";
  
    $result = mysqli_query($conn,$query);
	}
 
$conn->close();

// create connection 
$conn = new mysqli($servername, $username2 ,$password2, $dbname1);
// check connection 

if($conn -> connect_error){
   die("connection failed : " . $conn -> connect_error);
  }


if($username && $password && $exist)
 {
   // user entered fields
    $query ="DROP TABLE `".$username."`";
  
    $result = mysqli_query($conn,$query);
   
		header("Location:deleted.php");
	}
	$_SESSION["name"]=$username3;
	
	  
$conn->close();

?>