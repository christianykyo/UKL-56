<?php

include '../koneksi.php';
include 'fungsi-transaksi.php';

$buku = ambilBuku($kon);
$anggota = ambilAnggota($kon);

include '../asset/Header.php';

?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
        <div class="card" style="background-color: #ffc08f;">
                <div class="card-header text-white">
                    <h3>Form Tambah Peminjaman</h3>
                </div>
                <div class="card-body">
                <form method="post" action="proses-pinjam.php">

                    <div class="form-group text-white">
                        <label for="anggota">Nama Anggota</label>
                        <select name="id_anggota" class="form-control">
                            <?php
                            foreach ($anggota as $a ) { ?>
                                <option value="<?= $a['id_anggota'] ?>"><?= $a['nama'] ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>

                    <div class="form-group text-white">
                        <label for="buku">Judul Buku</label>
                        <select name="id_buku" class="form-control">
                            <?php
                            foreach ($buku as $b ) { ?>
                                <option value="<?= $b['id_buku'] ?>"><?= $b['judul'] ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>

                    <div class="form-group text-white">
                        <label for="datepicker">Tanggal Pinjam</label>
                        <input type="date" name="tgl_pinjam" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" name="btnPinjam" class="btn btn-secondary mr-auto">Simpan</button>
                    </div>
                </form>     
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include '../asset/Footer.php';

?>