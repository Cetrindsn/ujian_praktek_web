<!doctype html>
<html lang="en">
 <head>
  <title>Data Kecamatan</title>
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
  <form method="post" action="simpan_kecamatan.php">
	<table>
	<tr>
		<td>Kode Kabupaten</td>
		<td>:</td>
		<td><select name="kode_provinsi">
		<?php
			include "koneksi.php";
			$sql="select * from kabupaten";
			$query=mysqli_query($conn,$sql);
			while($data=mysqli_fetch_array($query)){
			echo "<option value='$data[1]'>$data[2]</option>";
			}
			?>
		</select></td>
	</tr>
	<tr>
		<td>Kode Kecamatan</td>
		<td>:</td>
		<td><input type="text" name="kode_kec" onkeypress="return notice(event)"></td>
	</tr>
	<tr>
		<td>Nama Kecamatan</td>
		<td>:</td>
		<td><input type="text" name="nama_kec"></td>
	</tr>
	
	<tr>
		<td><input type="reset" value="Batal" id="button"></td>
		<td></td>
		<td><input type="submit" value="Simpan" id="button"></td>
	</tr>
	</table>
  </form>
  <br><br><br>
  <center><strong>Data Kecamatan</strong></center>
  <br><br>
  <table border="0" class="hasil">
  <tr>
	<th>Kode Kabupaten</th>
	<th>Kode Kecamatan</th>
	<th>Nama Kecamatan</th>
	<th>Aksi</th>
  </tr>
  <?php
  include "koneksi.php";
  $sql="select * from kecamatan";
  $query=mysqli_query($conn,$sql);
  while($data=mysqli_fetch_array($query)){
  echo"<tr>";
	echo"<td>$data[0]</td>";
	echo"<td>$data[1]</td>";
	echo"<td>$data[2]</td>";
	echo"<td><a href=./edit_kecamatan.php?id=$data[1]>Edit</a>|<a href=./delete_kecamatan.php?id=$data[1]>Hapus</a></td>";
  echo"</tr>";
  }
  ?>
  </table>
 </body>
</html>
