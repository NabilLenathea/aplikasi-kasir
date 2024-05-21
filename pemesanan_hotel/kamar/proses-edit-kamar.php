<?php 

$id_kamar = $_GET['id_kamar'];
$nama_kamar = $_POST['nama_kamar'];
$nomor_kamar = $_POST['nomor_kamar'];
$fasilitas = $_POST['fasilitas'];

include '../koneksi.php';
$sql = "UPDATE kamar SET nama_kamar='$nama_kamar', nomor_kamar='$nomor_kamar', fasilitas= '$fasilitas' WHERE id_kamar = '$id_kamar'";

$query = mysqli_query($koneksi ,$sql);
    
if ($query) {

    header("Location:kamar.php");

} else {
    echo "<script> alert('Maaf Data Tidak Tersimpan'); window.location.assign('kamar.php'); </script>";
}