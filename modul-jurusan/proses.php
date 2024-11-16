<?php
include("../koneksi.php");

$kd = $_POST['kode'];
$jrs = $_POST['jurusan'];

$simpan = "INSERT INTO jurusans (kode,jurusan) VALUES ('$kd','$jrs')";

$proses = mysqli_query($koneksi,$simpan);

// header("location.index.php");
?>
<script>
    document.location="index.php";
</script>