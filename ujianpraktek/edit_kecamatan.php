<?php
include "koneksi.php";
$id=$_GET["id"];
$sql="select * from kecamatan where kode_kec='$id'";
$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
 <head>
  <title>Edit Kecamatan</title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
  <form method="post" action="update_kecamatan.php">
	<table>
	<tr>
		<td>Kode Kabupaten</td>
		<td>:</td>
		<td><input type="text" name="kode_kab" value="<?php echo $data[0]; ?>"></td>
	</tr>
	<tr>
		<td>Kode Kecamatan</td>
		<td>:</td>
		<td><input type="text" name="kode_kec" value="<?php echo $data[1]; ?>"></td>
	</tr>

	<tr>
		<td>Nama Kecamatan</td>
		<td>:</td>
		<td><input type="text" name="nama_kec" value="<?php echo $data[2]; ?>"></td>
	</tr>
	<tr>
		<td><input type="reset" value="Batal" id="button"></td>
		<td></td>
		<td><input type="submit" value="Update" id="button"></td>
	</tr>
	</table>
  </form>
  <br><br><br>
  <strong>Data Kecamatan</strong>
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
	echo"<td><a href=./edit_kecamatan.php?id=$data[0]>Edit</a>|<a href=./delete_kecamatan.php?id=$data[0]>Hapus</a></td>";
  echo"</tr>";
  }
  ?>
  </table>
  </body>
  </html>