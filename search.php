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
		<li><a href="Admin.php">Admin Page</a></li>
		<li><a href="Delete.php">Delete User</a></li>
		<li><a href="search.php">Search</a></li>
		
	</ul>
</nav>

<div class="login-card">
      <h1>Search</h1><br>
      <form name = "input" action="searching.php" method="post">
	   <label><input type="text" required name="username" id="username"  placeholder="Username"></label>
     <input type="submit" name="submit" class="login login-submit" value="Search">
      </form>
    </div>	 
	 
	 
</body>
</html>	