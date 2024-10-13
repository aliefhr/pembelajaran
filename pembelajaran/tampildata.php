<?php
 $npm=$_POST['txtnpm'];
 $nama=$_POST['txtnama'];
 $jeniskelamin=$_POST['txtjeniskelamin'];
 //$hobi1=$_POST['txthobi1'];
 $hobi = isset($_POST['txthobi']) ? $_POST['txthobi'] : [];
 echo "<h1>Indentitas Mahasiswa</h1>";
 echo "---------------------------";
 echo "<br>";
 echo "NPM : ".$npm;
 echo "<br>";
 echo "NAMA : ".$nama;
 echo "<br>";
 echo "JENIS KELAMIN : ".$jeniskelamin;
 echo "<br>";
 //echo "hobi : ".$hobi. ','.$hobi2; //(contoh 2 data yang di tampilan secara 1 baris dan hanya 1 yang akan muncul 1 pilihan saja tidak bisa keduanya)
 //contoh 2 data yang di tampilan dalam 1 variabel
 if (!empty($hobi)) {
    echo "Hobi : " . implode(", ", array_map('htmlspecialchars', $hobi)) . "<br>";
} else {
    echo "Hobi : Tidak ada hobi yang dipilih<br>";
}   
?>