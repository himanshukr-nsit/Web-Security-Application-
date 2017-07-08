<!-- transaction Page-->
<html lang = "en">

<head>
   <meta charset = "utf-8">
   <title>Web App Testing-After Login</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>

<body>
	 <div id="header"  class="sections bg-fx">
	  <img src = "bank_logo.jpg">
	 </div>
	 
	
<div class="login-card">
      <h1>Forgot Password</h1><br>
      <form name = "input" action="forgotten.php" method="post">
	   	<label><input type="text" required  name="username"  id="username"  placeholder="Username"></label>
    	<input type="submit" name="submit" class="login login-submit" value="Forgot Password">
      </form>
    </div>	 
	 
	 
</body>
</html>	