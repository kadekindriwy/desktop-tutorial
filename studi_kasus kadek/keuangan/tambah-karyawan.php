<?php
//include('dbconnected.php');
include('koneksi.php');

$nama = $_GET['id_karyawan'];
$posisi = $_GET['no'];
$alamat = $_GET['nama akun'];


//query update
$query = mysqli_query($koneksi,"INSERT INTO `karyawan` (`id_karyawan`, `no`, `nama akun`) VALUES (null, '$no', '$namaakun')");

if ($query) {
 # credirect ke page index
 header("location:karyawan.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>