<!-- Project Register Page-->

<!DOCTYPE html>

<html lang ="en">

<head>

<meta charset = "utf-8">
<title>Web App Testing-Register</title>
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
    <link href="project-css.css" rel="stylesheet" type="text/css">
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="header"  class="sections bg-fx" >
	  <img src = "bank_logo.jpg">
    </div>
	<p align="center">The user you are trying to delete does not exist. Please check the Username and try again</p>
	<p align="center"><a href='Admin.php'><font size="5">Back</font></a></p>
	
</body>
</html>	