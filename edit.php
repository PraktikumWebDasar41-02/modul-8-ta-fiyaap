<?php
  session_start();
    require_once("connect.php");
      
      $sid=$_SESSION['sid']; 

      $data =mysqli_query($connect, "SELECT * from data where sid='$sid'");
      $row=mysqli_fetch_array($data);
      $genre=explode(",",$row["genre"]);
      $tw[]=explode(",",$row["tw"]);
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Buat Akun</title>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Fiyaaps</a>
          
          <div class="container" style="width: 100px;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile </a>
              </li>
              
              <li class="nav-item active">
                <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
              </li>
          
              <li class="nav-item">
                <a class="nav-link" href="edit.php">Edit</a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link" href="register.php">Logout</a>
              </li>
            </ul>
        </div>
      </nav>
    </div>

    <div class="container" style="margin: 0px;">
    	<h1>Edit</h1>

    	<div class="row">
    		<div class="col-md-5">
    			   <form method="POST" action="home.php">
  						
              <div class="form-group">
    					 <label for="fn">First Name</label>
    					 <input type="text" class="form-control" id="fn" aria-describedby="fn" placeholder="nama depan anda" name="fn" value="<?php echo $row['fn']; ?>" name="fn">
    					</div>
    					
              <div class="form-group">
    					 <label for="ln">Last Name</label>
    					 <input type="text" class="form-control" id="ln" aria-describedby="ln" placeholder="nama belakang anda" name="ln" value="<?php echo $row['ln']; ?>" name="ln">
  						</div>
  						
              <div class="form-group">
    					 <label for="sid">Student ID</label>
    					 <input type="text" class="form-control" id="sid" aria-describedby="sid" placeholder="NIM" name="sid" value="<?php echo $row['sid']; ?>" name="sid">
  						</div>
  						
              <div class="form-group">
    					 <label for="c">Class</label>
    					 <input type="text" class="form-control" id="c" aria-describedby="c" placeholder="kelas anda" name="c" value="<?php echo $row['c']; ?>" name="c">
  						</div>
  						
              <div class="form-group">
    					 <label for="h">Hobby</label>
    					 <input type="text" class="form-control" id="h" aria-describedby="h" placeholder="hobby anda" name="h" value="<?php echo $row['h']; ?>" name="h">
  						</div>

  						<div class="form-group">
    					 <label for="tl">Birthday</label>
    					 <input type="date" class="form-control" id="tl" aria-describedby="emailHelp" placeholder="tanggal kelahiran anda" name="tl" value="<?php echo $row['tl']; ?>" name="tl">
  						</div>
  						
              <tr>
  						  <td>Tempat Wisata</td><br>
  						  <td>
                			<input type="checkbox" name="tw[]" value="Pulau Seribu"<?php if(in_array('Pulau Seribu',$tw)):echo'checked';endif?> >Pulau Seribu<br>
                			<input type="checkbox" name="tw[]" value="Lombok"<?php if(in_array('Lombok',$tw)):echo'checked';endif?> >Lombok
                			<br>
                			<input type="checkbox" name="tw[]" value="Bali"<?php if(in_array('Bali',$tw)):echo'checked';endif?> >Bali<br>
                			<input type="checkbox" name="tw[]" value="Maluku" <?php if(in_array('Maluku',$tw)):echo'checked';endif?> >Maluku
                </td><br>
        			</tr>

        			<tr>
        				<td>Genre Film</td><br>
        				<td>
                		<input type="checkbox" name="genre[]" value="Action" <?php if(in_array('Action',$genre)):echo'checked'; endif ?> >Action<br>
                		<input type="checkbox" name="genre[]" value="Romance" <?php if(in_array('Romance',$genre)):echo'checked'; endif ?> >Romance<br>
                		<input type="checkbox" name="genre[]" value="Fiksi" <?php if(in_array('Action',$genre)):echo'checked'; endif ?> >Fiksi<br>
                    <input type="checkbox" name="genre[]" value="Fantasi" <?php if(in_array('Fantasi',$genre)):echo'checked'; endif ?> >Fantasi
                		<input type="checkbox" name="genre[]" value="Comedy" <?php if(in_array('Drama',$genre)):echo'checked'; endif ?> >Comedy
            		</td>
        			</tr>

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

  $fn=$_POST['fn'];
  $ln= $_POST['ln'];
  $sid= $_POST['sid'];
  $c= $_POST['c'];
  $h= $_POST['h'];
  $genre= $_POST['genre'];
  $tw= $_POST['tw'];
  
  $mysql= " UPDATE data SET fn='$fn', ln='$ln' ,sid='$sid',c='$c', h='$h', genre='$genre', tw='$tw',tl='$tl' where sid='$sid'";

  if(mysqli_query($connect, $mysql)){
	 header("Location:home.php");
  }else{
	 echo "Error :".$mysql."<br>". mysql_error($connect);
  }
?>