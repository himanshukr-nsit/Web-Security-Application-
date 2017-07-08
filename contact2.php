<?php 
session_start();
$username=$_SESSION["name"];
$message= 'Welcome ' .$username ;
$_SESSION["name"]=$username;
$now=time();
if($now>$_SESSION['expire'])
{session_destroy();
header("Location:Expired.php");
}
?>

<html lang = "en">

<head>
   <meta charset = "utf-8">
   <title>Web App Testing-After Login</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script type ="text/javascript">
	  function noBack()
	    {
		 window.history.forward()
		}
       noBack();
       window.onload = noBack;
       window.onpageshow = function(evt) { if(evt.persisted) noBack() }
       window.onunload =function() { void(0) }
    </script>
   <!-- Style sheet -->
    <!--link href="project-css.css" rel="stylesheet" type="text/css"-->
	<link href="table.css" rel="stylesheet">
	<link href="style.css" rel ="stylesheet">
	<!--link href=""
	<!--style type ="text/css">
	body{
	  background-attachment :fixed;
	  background-image:url("Euro.jpg");
	  background-size: 100% 100%;
	  }
	</style--> 
    	
</head>

<body>
	 <div id="header"  class="sections bg-fx">
	  <img src = "bank_logo.jpg">
	 <div id ="transbox1">
	 <marquee attribute_name="attribute_value"....more attributes>
        <?=$message?>
	 </marquee>
	 <a href='logout.php'><font size="5">Logout !</font></a>
	 </div>
	 </div>
	 
	<nav>
	<ul>
		<li><a href="transaction.php">My Account</a></li>
		<li><a href="sendmoney.php">Send Money</a></li>
		<li><a href="withdraw.php">Withdraw</a></li>
		<li><a href="deposit.php">Deposit</a></li>
		<li>
			<a href="contactform.php">Leave a Comment<!--span class="caret"></span--></a>
			
		</li>
	</ul>
</nav>

<?php 
$name = $_POST['name']; 
$email_address = $_POST['email'];
$phone = $_POST['phone']; 
$message2 = $_POST['message']; 
$servername = "localhost";
$username = "root";
$password = "Qwerty1";
$dbname = "bankdatabase";
$dbname1 = "userdetails";

// create connection 
$conn = new mysqli($servername, $username ,$password, $dbname);
// check connection 

if($conn -> connect_error){
   die("connection failed : " . $conn -> connect_error);
  }

$sql = "INSERT INTO comments(name,email,phone,message)
 VALUES('$_POST[name]' , '$_POST[email]' , '$_POST[phone]' , '$_POST[message]')";
 
if($conn->query($sql) === FALSE){
  
  }
  


$conn->close();


?>

<p align="center">The following comments have been submitted to our Admins.</p>
	<p align="center"><?=$message2?></p>
	 
</body>
</html>	