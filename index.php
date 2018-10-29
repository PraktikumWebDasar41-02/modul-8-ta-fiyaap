<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Login</title>
  </head>
  <body>
    <div class="container" style="margin: 50px;">
    	<h1>Login.</h1><br>
    	<div class="row">
    		<div class="col-md-4">
    			   <form method="POST" action="home.php"> 
  						<div class="form-group">
    					<label for="username">Username</label>

    					<input type="text" class="form-control" id="user" aria-describedby="user" placeholder="Username" name="user">

    					<small id="username" class="form-text text-muted">Username</small>
  						</div>

  						<div class="form-group">
    					<label for="email">Email</label>

    					<input type="text" class="form-control" id="email" aria-describedby="email" placeholder="Email" name="email">

    					<small id="email" class="form-text text-muted">NOT NULL</small>
  						</div>


  						<div class="form-group">
    					<label for="Password">Password</label>
    					<input type="password" class="form-control" id="Pass" placeholder="Pass" name="pass">
    					<small id="password" class="form-text text-muted">NOT NULL </small>
  						</div>


  						<div class="form-group form-check">
    					<input type="checkbox" class="form-check-input" id="exampleCheck1">
    					<label class="form-check-label" for="exampleCheck1">Reminder</label>
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

  $mysql="SELECT * FROM user WHERE user='$user' && pass='$pass' && email='$email'";
  $hasil=mysqli_query($connet,$mysql);

    if(mysqli_num_rows($hasil)==0){
     echo "Akun Tidak Terdaftar";
     header("location:index.php");
    }else{
	   $row=mysqli_fetch_assoc($hasil);

	  if($row['user']== $user && $row['pass']== $pass){
		  header("location:home.php");
	  }else{
		  echo "Data Kurang Tepat, Ulangi!!!";
	}
}
?>