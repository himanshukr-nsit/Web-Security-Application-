<!-- Project Register Page-->

<!DOCTYPE html>

<html lang ="en">

<head>

<meta charset = "utf-8">
<title>Web App Testing-Register</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">'
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
	<p align="center">You have been successfully Logout from account.</p>
	<p align="center">Close this browser for security purposes</p>
	
</body>
</html>	