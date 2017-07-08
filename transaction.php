<!-- transaction Page-->

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
$tablen = $username;
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

		$result = mysqli_query($conn,"SELECT balance from transactiontable WHERE UName='$tablen'");
		 
		while($row=  mysqli_fetch_array($result))
			
		
		$bala=$row['balance'];
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

	
<p> <?=$message?></p>	
<p><span style="background-color:#E0FFFF; color:#000; padding:20px;">Account Balance :<?php echo"$bala";?></span></p>	
	
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

		$result = mysqli_query($conn,"SELECT date, particulars , Wamount , Damount , balance2 from `".$tablen."`");
		 
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