<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-6"><a href="<?= base_url('Barang/Tambah') ?>" class="btn btn-info mb-2">Tambah Barang</a></div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Barang</td>
                            <td>Jenis Barang</td>
                            <td>Harga</td>
                            <td>Stok</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($barang as $us) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $us['nama_barang']; ?></td>
                            <td><?= $us['jenis_barang']; ?></td>
                            <td><?= $us['harga']; ?></td>
                            <td><?= $us['stok']; ?></td>
                            <td>
                                <a href="<?= base_url('Barang/hapus/') . $us['id_barang']; ?>" class="btn btn-danger">Hapus</a>
                                <a href="<?= base_url('Barang/edit/') . $us['id_barang']; ?>" class="btn btn-warning">Edit</a>
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