<?php include('server.php'); ?>
<!DOCTYPE html>
  <html>
    <head>
      <title>Registration system PHP and MySQL</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	   <style>
		   body {font-family: Arial, Helvetica, sans-serif;}
           form {
			   margin-left: 300px;
			   border: 3px solid #f1f1f1;}
			  form:h3{
				   margin-left: 300px;
			   }
		  
				 button:hover {
  					opacity: 0.8;
							}
				.cancelbtn {
					width: auto;
					padding: 10px 20px;
					background-color: #f44336;
                          }
				.imgcontainer {
					text-align: center;
					margin: 24px 0 12px 0;
					}

                img.avatar {
					width: 30%;
					border-radius: 50%;
					}
				span.psw {
					float: right;
					padding-top: 16px;
					}
					.container 
					{
 					 padding: 5px;
                   }



					  
	   </style>
	</head>
      <body>
	    
          <div class="text-justify">
              <form method="post" action="login.php" class="col-md-6 ">
			  <h3 class="text-info">Login here....</h3>
  	            <?php include('error.php'); ?>
				  <div class="imgcontainer">
                     <img src="login.png" alt="Avatar" class="avatar">
                 </div>
  	              <div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control col-md-5" placeholder="Enter Email">
				  </div>
  	              <div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control col-md-5" placeholder="Enter Password" >
				  </div>
				  <div class="form-group">
					<button class="btn btn-outline-secondary col-md-3" type="submit" name="login">Login</button>
					<label>
     					 <input type="checkbox" checked="checked" name="remember"> Remember me
   				    </label>
				  </div>
  	              <div class="container" style="background-color:#f1f1f1">
					<button type="button" class="cancelbtn">Cancel</button>
					<span class="psw">Forgot <a href="#">password?</a></span>
					<p style="font-size:25px;margin-right:100px" >
		            Don't have an account?<a href="register.php" class="text-success" style="text-decoration:none;">Sign up..</a>
		        </p>
                 </div>
              </form>
          <div>
      </body>
</html