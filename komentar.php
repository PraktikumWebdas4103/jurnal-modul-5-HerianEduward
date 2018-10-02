<form action=" " method="post">
 Input Kalimat : <input type="text" name="kalimat" placeholder="masukan kalimat">
 <input type="submit" name="submit">
</form>
<?php 
 if (isset($_POST['submit'])) {
  $kalimat = $_POST['kalimat'];
  $pecah = explode(' ', $kalimat);
  $hitung = count($pecah);
  echo "<b>".$kalimat.".</b><br>";
  if ($hitung >= 5) {
   echo "ada ".$hitung." kata.";
   }else{
   echo "ERROR!!! Kata kurang dari 5";
  }
  
 }
?>
