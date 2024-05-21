<h5>Aplikasi Pemesanan Hotel</h5>

<a href="pesan-kamar.php">Pesan Kamar</a>

<hr>

    <table>

        <tr>
            <td>No | </td>
            <td>Nama kamar | </td>
            <td>No kamar | </td>
            <td>fasilitas</td>
        </tr>

        <?php

            include"../koneksi.php";
            $no = 1;
            $sql = "SELECT * FROM kamar ORDER BY id_kamar DESC";
            $query = mysqli_query($koneksi, $sql);
            foreach($query as $data) { ?>

            <tr>

                <td><?= $no++; ?></td>
                <td><?= $data['nama_kamar'] ?></td>
                <td><?= $data['nomor_kamar'] ?></td>
                <td><?= $data['fasilitas'] ?></td>

                <td>
                    <a href="edit-kamar.php?id_kamar=<?= $data['id_kamar'] ?>">Edit Pemesanan |</a>
                </td>
                
                <td>
                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')" href="hapus-kamar.php?id_kamar=<?= $data['id_kamar'] ?>">hapus</a>
                </td>
            </tr>

        <?php } ?>
    
    </table>
