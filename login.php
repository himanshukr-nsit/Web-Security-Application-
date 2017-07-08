<!-- Project login page-->

<!DOCTYPE html>

<html lang = "en">

<head>
   <meta charset = "utf-8">
   <title>Web App Testing-Login</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Style sheet -->
    <link href="project-css.css" rel="stylesheet" type="text/css">
	<link href="style.css" rel="stylesheet" type="text/css">
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
	<style type="text/css">
	body{
      background-attachment :fixed;
	  background-image:url("tor.jpg");
	  background-size: 100% 100%;
	   }
	</style> 
	<!-- Virtual Keyboard-->
	<script type="text/javascript" src="vkboardc.js"></script>
    <script>

        // Minimal callback function:
        function keyb_callback(char)
        {
            // Let's bind vkeyboard to the <TEXTAREA>

            // with id="textfield":
            var text =
                document.getElementById("username"), val = text.value;

            switch(ch)
            {
                case "BackSpace":
                var min=(val.charCodeAt(val.length - 1) == 10) ? 2 : 1;
                text.value = val.substr(0, val.length - min);
                break;

               case "Enter":
                   text.value += "\n";
                   break;

               default:
                   text.value += ch;
            }
        }

        </script>
</head>

<body onload="new VKeyboard("keyboard" , keyb_callback);">
    <div id="header" class="sections bg-fx">
	  <img src = "bank_logo.jpg">
    </div>
	
	<div class="login-card">
    <h1>Log-in</h1><br>
  <form name = "input" action="log.php" method="post">
    <label><input type="text" required  name="username"   id="username"  placeholder="Username"></label>
    <label><input type="password" required name="password" placeholder="Password" ></label>
    <input type="submit" name="login" class="login login-submit" value="Login">
  </form>

  <div class="login-help">
    <a href="register.php">Register</a> | <a href="Forgot.php">Forgot Password</a>
  </div>
</div>
<div id = "keyboard"></div>
</body>

</html>	
	
	
	 
   