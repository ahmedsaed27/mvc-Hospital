
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign up form</title>
	<link rel="stylesheet" type="text/css" href="../layout/css/style1.css">
    <!--bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="../layout/css/style.css">
</head>
<body>

<div class="Sign-up-form" style="width: 500px; ;">
    
	<h1>Sign Up Now</h1>
    
    <form action ="<?= url('login/store') ?>" method="post">
    <input type="username" class="input-box "placeholder= "Enter your First name" name = "username">
    <input type="username" class="input-box"placeholder="Enter your Last name" name = "lastName">	
    <input type="email" class="input-box"placeholder="Enter your Email" name="email">	
    <input type="password" class="input-box"placeholder="Enter your Password "name= "password">	
    <input type="password" class="input-box"placeholder="Confirm your Password "name = "pass_confirm">
    <br> <br>	 
    <p><span ><input type="checkbox" style="font: size 100px ;"></span>I agree to the Terms of services</p>
    <br> <br> <br>
    <button type="submit" class="Signup-btn">Sign up</button>
    <hr>
    </form>

</div>








</body>
</html>