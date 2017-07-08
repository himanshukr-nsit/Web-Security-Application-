<?php 
session_start();
$username=$_SESSION["name"];
$message= 'Welcome ' .$username ;
$_SESSION["name"]=$username;
$usename=$username;

$servername = "localhost";
$username2 = "root";
$password2 = "Qwerty1";
$dbname = "bankdatabase";
$dbname1 = "userdetails";


$UsName = $_POST['userid'];
$Email = $_POST['Email'];
$Amount = $_POST['Amount'];
$password = $_POST['password'];
$loggedIn=FALSE;
$exist=FALSE;

// create connection 
$conn = new mysqli($servername, $username2 ,$password2, $dbname);
// check connection 

if($conn -> connect_error){
   die("connection failed : " . $conn -> connect_error);
  }
 $query ="SELECT UName FROM logintable WHERE UName = '$usename' AND password = '$password'";
  
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
$conn = new mysqli($servername, $username2 ,$password2, $dbname);
// check connection 

if($conn -> connect_error){
   die("connection failed : " . $conn -> connect_error);
  }
 $query ="SELECT UName FROM registertable WHERE UName = '$UsName' ";
  
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);

    if(!$row){
        header("Location:Fail2.php");
	   }
	   else
	      $exist=true;

if($conn->query($query) === FALSE){
  echo"wrong pass";
  }
$conn->close();


// create connection 
$conn = new mysqli($servername, $username2 ,$password2, $dbname);
// check connection 

if($conn -> connect_error){
   die("connection failed : " . $conn -> connect_error);
  }
 if($loggedIn && $exist ){
 $sql = "UPDATE transactionTable 
SET balance = balance+$Amount
WHERE UName='$UsName'";
 
 
if($conn->query($sql) === FALSE){

  }
 }
$conn->close();

// create connection 
$conn = new mysqli($servername, $username2 ,$password2, $dbname);
// check connection 

if($conn -> connect_error){
   die("connection failed : " . $conn -> connect_error);
  }
 if($loggedIn  && $exist){
 $sql = "UPDATE transactionTable 
SET balance = balance-$Amount
WHERE UName='$usename'";
 
 
if($conn->query($sql) === TRUE){
  header("Location:TransSuc.php");
  }
  else {
    echo"";
 }}
$conn->close();

?>
