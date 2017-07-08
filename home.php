<!-- Project home page-->

<!DOCTYPE html>

<html lang = "en">

<head>
   <meta charset = "utf-8">
   <title>Web App Testing-HOME</title>
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
	 <div id="header"  class="sections bg-fx" >
	  <img src = "bank_logo.jpg">
     </div>
	 <div id="transbox">
     <p>Welcome to Yorkshire Bank. Please Login or Register from right side links.</p>
     </div>
    
	<div id ="transbox2">
     <div class = "header"><h2>ONLINE BANKING</h2></div>
	 <div class = "login">
	 <form action ="login.php">
	 <ul>
	 <li>
	  <input type="submit" value ="LOGIN" class ="btn">
	 </li>
	 </ul>
	 </form>
	 <form action ="register.php">
	 <ul><li>
	 <input class="btn" type="submit" value ="REGISTER" >
	 </li></ul>
	 </form>
	 
	</div>
   
	</div>
</body>
</html>	
	
	
	 
   