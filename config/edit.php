<?php

include ('../config/koneksi.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$no_hp = $_POST['no_hp'];
$tgl_lahir = $_POST['tgl_lahir'];

$insert = mysqli_query($koneksi, "UPDATE anggota SET id='$id',nama='$nama', nip='$nip', no_hp ='$no_hp', tgl_lahir='$tgl_lahir' WHERE id='$id' ");

if($insert) {
  header('location:../index.php');
}

?>