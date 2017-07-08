<?php 

$servername = "localhost";
$username = "root";
$password = "Qwerty1";
$dbname = "bankdatabase";
$dbname1 = "userdetails";


$UsName = $_POST[UName];
$pwd1 = mysql_real_escape_string($_POST["password"]);
$pwd2 = mysql_real_escape_string($_POST["CPwd"]);
if($pwd1!==$pwd2){
	header("Location:fail7.php");
}
// create connection 
$conn = new mysqli($servername, $username ,$password, $dbname);
// check connection 

if($conn -> connect_error){
   die("connection failed : " . $conn -> connect_error);
  }

$sql = "INSERT INTO registertable(FName , LName , DateOB , UName, EID , password , CPwd , Mob)
 VALUES('$_POST[FName]' , '$_POST[LName]' , '$_POST[DateOB]' , '$_POST[UName]' , '$_POST[EID]' , '$_POST[password]' , '$_POST[CPwd]' ,      '$_POST[Mob]')";
 
if($conn->query($sql) === FALSE){
  
  
  }
$conn->close();



// create connection 
$conn = new mysqli($servername, $username ,$password, $dbname);
// check connection 

if($conn -> connect_error){
   die("connection failed : " . $conn -> connect_error);
  }
 
 $sql = "INSERT INTO logintable(UName, password)
 VALUES('$_POST[UName]' , '$_POST[password]')";

 
if($conn->query($sql) === FALSE){
 
  }
$conn->close();



// create connection 
$conn = new mysqli($servername, $username ,$password, $dbname);
// check connection 

if($conn -> connect_error){
   die("connection failed : " . $conn -> connect_error);
  }

 $sql = "INSERT INTO transactionTable(UName)
 VALUES('$_POST[UName]')";
 
if($conn->query($sql) === FALSE){
  }
$conn->close();


// create connection 
$conn = new mysqli($servername, $username ,$password, $dbname1);
// check connection 

if($conn -> connect_error){
   die("connection failed : " . $conn -> connect_error);
  }

 $sql = "create table `".$UsName."`( 
			date timestamp,
			particulars varchar(100),
			Wamount float(20),
			Damount float(20),
			balance2 float(20))";
 
if($conn->query($sql) === TRUE){
  header("Location:regsuc.php");
  }
  else {
    echo"Error : Duplicate username<br> Go back and register with a new username" ;
  }
$conn->close();

?>