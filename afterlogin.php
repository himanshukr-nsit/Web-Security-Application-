<!-- Project after login page-->

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
   <!-- Style sheet -->
    <link href="project-css.css" rel="stylesheet" type="text/css">
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
	<style type ="text/css">
	body{
	  background-attachment :fixed;
	  background-image:url("Euro.jpg");
	  background-size: 100% 100%;
	  }
	</style>   
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
	 
	 <div id="transbox">
     <p>Please do not go back.</p>
     </div>
    
	<div class = "form">
   	 <form action ="transaction.php">
	 <ul><li>
	  <input type="submit" value ="Go to Transaction" class ="btn">
	 </li></ul>
     </form>	 
	</div>
</body>
</html>	
