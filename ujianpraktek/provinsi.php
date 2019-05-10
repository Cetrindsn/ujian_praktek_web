<!doctype html>
<html lang="en">
 <head>
  <title>Data Provinsi</title>
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
  <form method="post" action="simpan_provinsi.php">
	<table>
	<tr>
		<td>Kode Provinsi</td>
		<td>:</td>
		<td><input type="text" name="kode_provinsi" onkeypress="return notice(event)"></td>
	</tr>
	<tr>
		<td>Nama Provinsi</td>
		<td>:</td>
		<td><input type="text" name="nama_provinsi"></td>
	</tr>
	<tr>
		<td><input type="reset" value="Batal" id="button"></td>
		<td></td>
		<td><input type="submit" value="Simpan" id="button"></td>
	</tr>
	</table>
  </form>
  <br><br><br>
 <center><strong>Data Provinsi</strong></center>
 <br><br>
  <table border="0" class="hasil">
  <tr>
	<th>Kode Provinsi</th>
	<th>Nama Provinsi</th>
	<th>Aksi</th>
  </tr>
  <?php
  include "koneksi.php";
  $sql="select * from Provinsi";
  $query=mysqli_query($conn,$sql);
  while($data=mysqli_fetch_array($query)){
  echo"<tr>";
	echo"<td>$data[0]</td>";
	echo"<td>$data[1]</td>";
	echo"<td><a href=./edit_provinsi.php?id=$data[0]>Edit</a>|<a href=./delete_provinsi.php?id=$data[0]>Hapus</a></td>";
  echo"</tr>";
  }
  ?>
  </table>
 </body>
</html>
