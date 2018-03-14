<?php include('server.php'); 
if(isset($_POST['sub'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];
	

		//Ensure that all fields are filled properly
		if(empty($username)){
			array_push($errors,"Username is required");
		}
		if(empty($email)){
			array_push($errors,"Email is required");
		}
		if(empty($password1)){
			array_push($errors,"password is required");
		}
		if($password1 != $password2){
			array_push($errors,"Two passwords not matched,Try again");
		}
	
		if(count($errors) == 0){
			$password = $password1; // encrypting password before storing it into database (security)
			$sql = "INSERT INTO user (username, email, password) VALUES ('$username','$email','$password')";
			mysqli_query($db, $sql);
			
			header('location:login.php'); // redirect to home page
		}
		
	}
?>
<style>
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.c{
    width: auto;
   background-color: #f44336;
}

</style>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="signin.css">  
    <div class="b">
<h1> The Movies</h1></div>  </head>
  <body>
    
  
<h2>Signin Form</h2>

<form method="post" action="">
  
  <div class="b">
  <label ><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" requried >

  <label ><b>E-mail</b><lable>
  <input type="text" placeholder="Example@gmail.com" name="email" requried>
    
    <label ><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password1"  requried>
      
    <label ><b>conform Password</b></label>
    <input type="password" placeholder="Enter Password" name="password2" requried>
        
	<a href="tickets.html"> <button type="submit" name="sub">Register</button></a>
	  <p>
	  	Already a member <a href="login.php">Login</a>
	  </p>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="b" style="background-color:#f1f1f1">
    <button type="button" class="c">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>

 </body>
</html>
