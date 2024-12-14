<?php
include("../koneksi.php");

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$email = $_POST['email'];
$jur = $_POST['jur'];
$dos = $_POST['dos'];

$simpan = "INSERT INTO mahasiswas (nim,nama,tmp_lahir,tgl_lahir,alamat,jk,email,jurusans_id,dosens_id) VALUES ('$nim','$nama','$tempat','$tanggal','$alamat','$jk','$email','$jur','$dos')";

$proses = mysqli_query($koneksi,$simpan);

// header("location.index.php");
?>
<script>
    document.location="index.php";
</script>