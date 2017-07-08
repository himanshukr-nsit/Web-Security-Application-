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
	<link href="form.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="header"  class="sections bg-fx" >
	  <img src = "bank_logo.jpg">
    </div>
    
	<div class="login-card">
      <h1>Register</h1><br>
      <form name = "input" action="reg.php" method="post">
	   <label><input type="text"  name="FName"  placeholder="FirstName">*</label>
		<label><input type="text" required name="LName"  placeholder="LastName">*</label>
		<label><input type="date" required name="DateOB" max="2014-12-31" placeholder="Birth Date">*</label>
        <label><input type="text" required  name="UName"  placeholder="UserName">*</label>
		<label><input type="email" required  name="EID" title="Please enter in format email@abc.com" placeholder="Email">*</label>
        <label><input type="password" required  name="password" placeholder="Password">*</label>
		<label><input type="password" required  name="CPwd" placeholder="Confirm Password">*</label>
		<label><input type="tel" required name="Mob" placeholder="Mobile Number">*</label>
        <input type="submit" name="submit" class="login login-submit" value="Register">
      </form>
    </div>
	
</body>
</html>	
		 




