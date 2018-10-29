<!DOCTYPE html>
<html>
<head>
	<title>New</title>
</head>
<body>
	<table>
		<form method="POST">
			<tr>
				<td>First Name</td>
				<td><input type="text" name="fn"></td>
			</tr>

			<tr>
				<td>Last Name</td>
				<td><input type="text" name="ln"></td>
			</tr>

			<tr>
				<td>Student ID</td>
				<td><input type="text" name="sid"></td>
			</tr>

			<tr>
				<td>Class</td>
				<td><input type="text" name="c"></td>
			</tr>

			<tr>
				<td>Hobby</td>
				<td><select name="h">
						<option>Tidur</option>
						<option>Makan</option>
						<option>Mandi</option>
						<option>Begadang</option>	
					</select></td>
			</tr>

			<tr>
				<td>Genre Film</td>
				<td>
					<input type="checkbox" name="genre" value="Horror">Horror
					<input type="checkbox" name="genre" value="Anime">Anime
					<input type="checkbox" name="genre" value="Action">Action
					<input type="checkbox" name="genre" value="Drama">Drama
				</td>
			</tr>

			<tr>
				<td>Tempat Wisata</td>
				<td>
					<input type="checkbox" name="tw" value="Bali">Bali
					<input type="checkbox" name="tw" value="Tanjung Selor">Tanjung Selor
					<input type="checkbox" name="tw" value="Jakarta">Jakarta
					<input type="checkbox" name="tw" value="Lombok">Lombok
				</td>
			</tr>

			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tl"></td>
			</tr>

			<tr>
				<td><button><a href="profile.php">Cek profil anda</a></button></td>
			</tr>


		</form>
	</table>

</body>
</html>

<?php
	session_start();
		
		if(isset($_POST['submit'])){
			$fn=$_POST['fn'];
			$ln= $_POST['ln'];
			$sid= $_POST['sid'];
			$c= $_POST['c'];
			$h= $_POST['h'];
			$genre= $_POST['genre'];
			$tw= $_POST['tw'];
			$tl= $_POST['tl'];

			$cek = "INSERT INTO data VALUES('$fn','$ln', $sid, '$c', '$h','$genre', '$tw', '$tl')";
			$mysql = mysqli_query($connect,$cek);
			if($mysql){
				//header("location:view.php");
				echo "Data berhasil";
			}else{
				echo "Data gagal input";
			}
		}
?>