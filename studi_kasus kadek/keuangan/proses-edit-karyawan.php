<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_karyawan'];
$nama = $_GET['no'];
$posisi = $_GET['nama akun']

//query update
$query = mysqli_query($koneksi,"UPDATE karyawan SET no='$no' , nama akun='$namaakun'");

if ($query) {
 # credirect ke page index
 header("location:karyawan.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysql_error();
}

//mysql_close($host);
?>