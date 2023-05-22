<?php

include '../config/koneksi.php';

$id = $_GET['id'];

$delete = mysqli_query($koneksi, "DELETE FROM anggota WHERE id='$id' ");

if($delete) {
    header('location:../index.php');
  }

?>