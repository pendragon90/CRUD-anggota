<?php

$query = mysqli_query($koneksi, "SELECT * FROM anggota");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>