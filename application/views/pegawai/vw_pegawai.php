<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-6"><a href="<?= base_url('Pegawai/Tambah') ?>" class="btn btn-info mb-2">Tambah Pegawai</a></div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Pegawai</td>
                            <td>Jenis Kelamin</td>
                            <td>Alamat</td>
                            <td>No HP</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pegawai as $us) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $us['nama_pegawai']; ?></td>
                            <td><?= $us['jenis_kelamin']; ?></td>
                            <td><?= $us['alamat_pegawai']; ?></td>
                            <td><?= $us['no_hp']; ?></td>
                            <td>
                                <a href="<?= base_url('Pegawai/hapus/') . $us['id_pegawai']; ?>" class="btn btn-danger">Hapus</a>
                                <a href="<?= base_url('Pegawai/edit/') . $us['id_pegawai']; ?>" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>