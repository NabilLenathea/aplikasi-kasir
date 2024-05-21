<?php 

$nama_kamar = $_POST['nama_kamar'];
$nomor_kamar = $_POST['nomor_kamar'];
$fasilitas = $_POST['fasilitas'];

include '../koneksi.php';
$sql = "INSERT INTO kamar(nama_kamar,nomor_kamar,fasilitas) VALUES('$nama_kamar' , '$nomor_kamar' , '$fasilitas')";
$query = mysqli_query($koneksi, $sql);

if ($query) {

    header("Location:kamar.php");

} else {
    echo "<script> alert('Maaf Data Tidak Tersimpan'); window.locatin.assign('kamar.php'); </script>";
}

?>