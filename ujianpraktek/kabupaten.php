<!doctype html>
<html lang="en">
 <head>
  <title>Data Kabupaten</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script>
		function notice(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		   		alert("Maaf! Data harus berupa angka!")
		   		return false;
		   } else {
		   		return true;
		   }
		}
	</script>
 </head>
 <body>
  <form method="post" action="simpan_kabupaten.php">
	<table class="input">
	<tr>
		<td>Kode Provinsi</td>
		<td>:</td>
		<td><select name="kode_provinsi">
			<?php
			include "koneksi.php";
			$sql="select * from provinsi";
			$query=mysqli_query($conn,$sql);
			while($data=mysqli_fetch_array($query)){
			echo "<option value='$data[0]'>$data[1]</option>";
			}
			?>
		</select> 
		
		</td>
	</tr>
	<tr>
		<td>Kode Kabupaten</td>
		<td>:</td>
		<td><input type="text" name="kode_kab" onkeypress="return notice(event)"></td>
	</tr>
	<tr>
		<td>Nama Kabupaten</td>
		<td>:</td>
		<td><input type="text" name="nama_kab"></td>
	</tr>
	
	<tr>
		<td><input type="reset" value="Batal" id="button"></td>
		<td></td>
		<td><input type="submit" value="Simpan" id="button"></td>
	</tr>
	</table>
  </form>

  <br><br><br>
  <center><strong>Data Kabupaten</strong></center>
  <br><br>
  <table border="0" class="hasil">
  <tr>
	<th>Kode Provinsi</th>
	<th>Kode Kabupaten</th>
	<th>Nama Kabupaten</th>
	<th>Aksi</th>
  </tr>
  <?php
  include "koneksi.php";
  $sql="select * from kabupaten";
  $query=mysqli_query($conn,$sql);
  while($data=mysqli_fetch_array($query)){
  echo"<tr>";
	echo"<td>$data[0]</td>";
	echo"<td>$data[1]</td>";
	echo"<td>$data[2]</td>";
	echo"<td><a href=./edit_kabupaten.php?id=$data[1]>Edit</a>|<a href=./delete_kabupaten.php?id=$data[1]>Hapus</a></td>";
  echo"</tr>";
  }
  ?>
  </table>
 </body>
</html>
