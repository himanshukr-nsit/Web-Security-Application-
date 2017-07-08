<!-- transaction Page-->

<?php 
session_start();
$username=$_SESSION["name"];
$message= 'Welcome  Admin' ;
$_SESSION["name"]=$username;
$servername = "localhost";
$username = "root";
$password = "Qwerty1";
$dbname = "bankdatabase";
$dbname1 = "userdetails";
$username2=$_POST['username'];
$pagename='Admin';
// create connection 
$conn = new mysqli($servername, $username ,$password, $dbname);
// check connection 

if($conn -> connect_error){
   die("connection failed : " . $conn -> connect_error);
  }

if($username)
 {
   // user entered fields
    $query ="SELECT UName FROM logintable WHERE UName = '$username2'";
  
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);

    if(!$row){
       header("Location:fail6.php");
	   	   }
	   else{
	      $exist=true;
}}
	$_SESSION["name"]=$pagename;
	
	  
$conn->close();
?>

<html lang = "en">

<head>
   <meta charset = "utf-8">
   <title>Web App Testing-After Login</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Style sheet -->
    <!--link href="project-css.css" rel="stylesheet" type="text/css"-->
	<link href="table.css" rel="stylesheet">
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
		<li><a href="Admin.php">Admin Page</a></li>
		<li><a href="Delete.php">Delete User</a></li>
		<li><a href="search.php">Search</a></li>
				
			
			<!--div>
				<ul>
					<li><a href="#">Add/Edit Email</a></li>
					<li><a href="#">Link Bank Account</a></li>
					<li><a href="#">Add Postal Address</a></li>
				</ul>
			</div-->
		</li>
	</ul>
</nav>

	
<p> <?=$message?></p>	
	
	
	 <div id="page-wrap">	
	 <table>
		<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Date of Birth</th>
			<th>UserName</th>
			<th>EMail ID</th>
			<th>Mobile No.</th>		
		</tr>
		</thead>
		
		<tbody>
		<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "Qwerty1";
		$dbname = "bankdatabase";
		$dbname1 = "userdetails";
		$username2=$_POST['username'];


		// create connection 
		$conn = new mysqli($servername, $username ,$password, $dbname);
		// check connection 

		if($conn -> connect_error){
		die("connection failed : " . $conn -> connect_error);
			}

		
		
		$result = mysqli_query($conn,"SELECT FName , LName,DateOB,UName,EID,Mob from registertable WHERE UName = '$username2'");
		 
		while($row=  mysqli_fetch_array($result))
			
		{
		echo"<tr>";
			echo"<td>{$row['FName']}</td>";
			echo"<td>{$row['LName']}</td>";
			echo"<td>{$row['DateOB']}</td>";
			echo"<td>{$row['UName']}</td>";
			echo"<td> {$row['EID']}</td>";
			echo"<td>{$row['Mob']}</td>";
		echo"</tr>";
		}
	
			$conn->close();

		
		?>
		</tbody>
		
	</table>
	
	</div>
	
	<div id="page-wrap">	
	 <table>
		<thead>
		<tr>
			<th>Date</th>
			<th>Particulars</th>
			<th>Withdrawl Amount</th>
			<th>Deposited Amount</th>
			<th>Balance</th>		
		</tr>
		</thead>
		
		<tbody>
		<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "Qwerty1";
		$dbname = "bankdatabase";
		$dbname1 = "userdetails";



		// create connection 
		$conn = new mysqli($servername, $username ,$password, $dbname1);
		// check connection 

		if($conn -> connect_error){
		die("connection failed : " . $conn -> connect_error);
			}

		$result = mysqli_query($conn,"SELECT date, particulars , Wamount , Damount , balance2 from `".$username2."`");
		 
		while($row=  mysqli_fetch_array($result))
			
		{
		echo"<tr>";
			echo"<td>{$row['date']}</td>";
			echo"<td>{$row['particulars']}</td>";
			echo"<td>{$row['Wamount']}</td>";
			echo"<td> {$row['Damount']}</td>";
			echo"<td>{$row['balance2']}</td>";
		echo"</tr>";
		}
	
			$conn->close();

		
		?>
		</tbody>
		
	</table>
	
	</div>
	 
	 
</body>
</html>	