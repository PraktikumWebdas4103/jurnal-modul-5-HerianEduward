<form action="koneksi.php " method="post">
<center><h1>Pendaftaran Mahasiswa</h1>
	<table>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim" placeholder="NIM" maxlength="10"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" placeholder="Nama" maxlength="25"></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td><input type="E-mail" name="email" value="@gmail.com"></td>
		</tr>
		<tr>
		</tr>
			<td><input type="submit" name="submit" value="Login"></td>
	</table>
</center>

<?php
if (isset($_POST['submit'])) {
   $nim=$_POST['nim'];
   $nama=$_POST['nama'];
   $email=$_POST['email'];
   $Error = array();
   if (strlen($_POST['nim'])<=10) {
    $error['nim']=="nim harus 10";
   }if(strlen($_POST['nama'])<=25){
    $error['nama']=="nama harus 25";
   }if (empty($email)) {
    $error['email']=="email tidak boleh kosong";
  
   }
   include 'koneksi.php';
}
?>
