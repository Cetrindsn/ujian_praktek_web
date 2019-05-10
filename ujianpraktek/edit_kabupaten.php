<?php
include "koneksi.php";
$id=$_GET["id"];
$sql="select * from kabupaten where kode_kab='$id'";
$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
 <head>
  <title>Edit Kabupaten</title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
  <form method="post" action="update_kabupaten.php">
	<table>
	<tr>
		<td>Kode Provinsi</td>
		<td>:</td>
		<td><input type="text" name="kode_provinsi" value="<?php echo $data[0]; ?>"></td>
	</tr>
	<tr>
		<td>Kode Kabupaten</td>
		<td>:</td>
		<td><input type="text" name="kode_kab" value="<?php echo $data[1]; ?>"></td>
	</tr>

	<tr>
		<td>Nama Kabupaten</td>
		<td>:</td>
		<td><input type="text" name="nama_kab" value="<?php echo $data[2]; ?>"></td>
	</tr>
	<tr>
		<td><input type="reset" value="Batal" id="button"></td>
		<td></td>
		<td><input type="submit" value="Update" id="button"></td>
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
	echo"<td><a href=./edit_kabupaten.php?id=$data[0]>Edit</a>|<a href=./delete_kabupaten.php?id=$data[0]>Hapus</a></td>";
  echo"</tr>";
  }
  ?>
  </table>
  </body>
  </html>