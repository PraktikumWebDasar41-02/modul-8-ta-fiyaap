<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Register</title>
  </head>

<body>
    <div class="container" style="margin: 0px;">
    	<h1>Register</h1>
    	<div class="row">
    		<div class="col-md-5">
    			   <form method="POST">
  						<div class="form-group">
    						<label for="exampleInputEmail1">Username</label>
    						<input type="text" class="form-control" id="email1e aria-describedby="email" placeholder="Username" name="user">
    						<small id="emailHelp" class="form-text text-muted">Username</small>
  						</div>
  						<div class="form-group">
    						<label for="password1">Password</label>
    						<input type="password" class="form-control" id="password1" placeholder="Password" name="pass">
    						<small id="emailHelp" class="form-text text-muted"><b>NOT NULL</b></small>
  						</div>
  						<div class="form-group">
    						<label for="exampleInputPassword1">Re-Password</label>
    						<input type="password" class="form-control" id="Password1" placeholder="re-Password" name="repass">
    						<small id="emailHelp" class="form-text text-muted"><b>NOT NULL</b></small>
  						</div>
  						<div class="form-group">
  							<label for="Email">Email</label>
    						<input type="text" class="form-control" id="Email" aria-describedb,y="email" placeholder="Email" name="email">
    						<small id="emailHelp" class="form-text text-muted"><b>NOT NULL</b></small>
    					</div>
  						<div class="form-group form-check">
    						<input type="checkbox" class="form-check-input" id="exampleCheck1">
    						<label class="form-check-label" for="exampleCheck1">Remember me</label>
  						</div>
  						<button type="submit" class="btn btn-primary" name="submit">Submit</button>
					</form>
    		</div>
    	</div>
    </div>
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

<?php
require_once("connect.php");
 
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];
	
	$mysql="INSERT INTO user (user,pass,email) values ('$user','$pass','$email')";
	
	if (isset($_POST['submit'])) {
		if(mysqli_query($connect,$mysql)){
 			header("location: xml_get_current_byte_index(parser).php");
		}else{
  		echo"Error:".$mysql."<br>".mysqli_error($connect);
		}

	mysqli_close($connect);
	}
?>