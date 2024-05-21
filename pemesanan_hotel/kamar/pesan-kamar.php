<h5>Halaman Pesan Kamar</h5>
<a href="kamar.php">Kembali</a>

<hr>
    <form action="proses-pesan-kamar.php" method="post">

        <div>
            <label>Nama Kamar</label>
            <input type="text" name="nama_kamar" required>
        </div>

        <div>
            <label>nomor kamar</label>
            <input type="number" name="nomor_kamar" required>
        </div>

        <div>
            <label>fasilitas</label>
            <input value="<?= $data['fasilitas'] ?>" type="text" name="fasilitas" required>
        </div>

        <div>
            <button type="submit">Simpan</button>
            <button type="reset">reset</button>
        </div>
    </form>