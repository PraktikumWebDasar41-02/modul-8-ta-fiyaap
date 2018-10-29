<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Home</title>
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
                <a class="nav-link" href="profile.php">Profil </a>
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

    <div>
      <form>
      <div>
           <?php
            echo "<a href='edit.php?nim=$sid'>Edit</a>";
            echo "<a href='delete.php?nim=$sid'>Delete</a>";
         ?>
      </div>
   <?php
      
      $mysql="SELECT * FROM data where sid='$sid'";
      $hasil=mysql_query($connect,$mysql);
      $row=mysql_fetch_assoc($hasil);

      echo "<tr>";
        echo "<td>"."<br><br>"."INPUTAN DATA"."</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td colspan=4>"."Nama Depan : ".$row['fn']."<br><br>";
        echo "Nama Belakang : ".$row['ln']."<br><br>";
        echo "Nim : ".$row['sid']."<br><br>";
        echo "Kelas : ".$row['c']."<br><br>";
        echo "Hobi : ".$row['h']."<br><br>";
        echo "Genre : ".$row['genre']."<br><br>";
        echo "Tempat Wisata : ".$row['tw']."<br><br>";
        echo "Tanggal Lahir : ".$row['tl']."</td>";
      echo "Klik: ".$row['klik']."</td>";
      echo "</tr>";

      mysqli_close($connect);
      ?>
      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>