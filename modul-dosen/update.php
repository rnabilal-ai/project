<?php
include("../koneksi.php");

$id = $_POST['id'];
$kd = $_POST['kode'];
$jrs = $_POST['jurusan'];

$sunting = "UPDATE jurusans SET kode='$kd',jurusan='$jrs' WHERE id='$id' ";

$proses = mysqli_query($koneksi,$sunting);

// header("location.index.php");
?>
<script>
    document.location="index.php";
</script>