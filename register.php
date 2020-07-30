<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  
}
form {
		margin-left: 200px;
		border: 3px solid #f1f1f1;}
		

.container {
  padding: 16px;
  background-color: white;
}
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  
  opacity: 0.9;
}

button:hover {
  opacity: 1;
}

a {
  color: dodgerblue;
}

.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
      <body>
           <div  class="container" >
              <form method="post" action="register.php"  class="col-md-8 ">
				 <?php include('error.php'); ?>
				 <h1>Register</h1>
				 <p>Please fill in this form to create an account.</p>
				 <hr>
					<div class="input-container">
						<i class="fa fa-user icon"></i>
						<input class="input-field" type="text" name="username" class="form-control col-md-4" placeholder="Enter  User Name">
					</div>
					<div class="input-container">
					   <i class="fa fa-envelope icon"></i>
						<input class="input-field"type="email" name="email" class="form-control col-md-4" placeholder="Enter Email">
					</div>
					<div class="input-container">
					    <i class="fa fa-key icon"></i>
						<input  class="input-field" type="password" name="password1" class="form-control col-md-4" placeholder="Enter Password">
					</div>
					<div class="input-container">
					    <i class="fa fa-key icon"></i>
						<input class="input-field" type="password" name="password2" class="form-control col-md-4" placeholder="Enter Confirm Password">
					</div>
					<hr>
                    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
					<div class="form-group">
					    <button class="btn btn-outline-info col-md-3" type="submit" name="register">Register</button>
					</div>
	                <p>Already have Account?<a href="login.php" class="text-success" style="text-decoration: none;">Sign In...</a></p>
             </form>
        </div>
	  
	</body>

</html>