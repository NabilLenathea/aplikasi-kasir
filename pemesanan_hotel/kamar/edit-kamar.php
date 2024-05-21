<?php
    $id_kamar = $_GET['id_kamar'];
    include '../koneksi.php';
    $sql = "SELECT*FROM kamar WHERE id_kamar = '$id_kamar'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);
?>

<h5>Halaman Edit Data kamar.</h5>
<a href="kamar.php""> Kembali</a>

<hr>
    <form action="proses-edit-kamar.php?id_kamar=<?= $id_kamar; ?>" method="post">

        <div class="form-group mb-2">
            <label>Nama Kamar</label>
            <input value="<?= $data['nama_kamar'] ?>" type="text" name="nama_kamar" placeholder="Masukkan nama kamar" required>
        </div>

        <div class="form-group mb-2">
            <label>Nomor Kamar</label>
            <input value="<?= $data['nomor_kamar'] ?>" type="number" name="nomor_kamar" placeholder="Masukkan nomor kamar" required>
        </div>

        <div class="form-group mb-2">
            <label>fasilitas</label>
            <input value="<?= $data['fasilitas'] ?>" type="text" name="fasilitas" placeholder="Masukkan fasilitas" required>
        </div>

        <div class="form-group">
            <button type="submit"> Simpan </button>
            <button type="reset"> Reset </button>
        </div>
    </form>