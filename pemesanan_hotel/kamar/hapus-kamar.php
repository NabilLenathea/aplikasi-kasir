<?php 

$id_kamar = $_GET['id_kamar'];

include'../koneksi.php';
$sql = "DELETE FROM kamar WHERE id_kamar = '$id_kamar'";
$query = mysqli_query($koneksi,$sql);
if ($query){
    header("Location:kamar.php");
} else {
    echo "<script>
    alert('Maaf Data Tidak Terhapus');
    window.location.assign('kamar.php');
    </script>";
}
?>  