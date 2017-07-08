<?php 
session_start();
$username=$_SESSION["name"];
$_SESSION["name"]=$username;

$servername = "localhost";
$username2 = "root";
$password = "Qwerty1";
$dbname = "bankdatabase";
$dbname1 = "userdetails";

$Amount = $_POST["Amount"] or "";
$password2 = $_POST["password"] or "";
$loggedIn=FALSE;
$usename=$username;
// create connection 
$conn = new mysqli($servername, $username2 ,$password, $dbname);
// check connection 

if($conn -> connect_error){
   die("connection failed : " . $conn -> connect_error);
  }
 $query ="SELECT UName FROM logintable WHERE UName = '$usename' AND password = '$password2'";
  
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);

    if(!$row){
        header("Location:Fail.php");
	   }
	   else
	      $loggedIn=true;

if($conn->query($query) === FALSE){
  echo"wrong pass";
  }
$conn->close();



// create connection 
$conn = new mysqli($servername, $username2 ,$password, $dbname);
// check connection 

if($conn -> connect_error){
   die("connection failed : " . $conn -> connect_error);
  }
 if($loggedIn){
 $sql = "UPDATE transactionTable 
SET balance = balance-$Amount
WHERE UName='$usename'";
 
 
if($conn->query($sql) === TRUE){
  header("Location:WithSuc.php");
  }
  else {
     echo"";
 }}
$conn->close();


?>