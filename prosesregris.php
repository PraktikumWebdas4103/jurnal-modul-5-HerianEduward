<?php
 $hostname   = "localhost";
 $username = "root";
 $pass     = "";
 $db       = "pendaftaranmahasiswa";
 $con     = new mysqli($hostname, $username, $pass, $db);
 if($con==false){
  die("koneksi gagal". $con->connect_error);
 }
  if (isset($_POST['submit'])) {
   $NIM=$_POST['nim'];
   $Nama=$_POST['nama'];
   $Email=$_POST['email'];
 
 $sql="INSERT INTO pendaftaranmahasiswa(nim,nama,email) VALUES ('$NIM','$Nama','$Email')";
   if(mysqli_query($con,$sql)){
    echo "Database sudah masuk";
   }else{
    echo "error";;
   }
}
 ?>
