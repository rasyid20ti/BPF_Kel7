<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul2; ?></h1>
        <div class="row">
            <div class="col-md-6"><a href="<?= base_url('Supplier/Tambah') ?>" class="btn btn-info mb-2">Tambah Supplier</a></div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Supplier</td>
                            <td>Alamat</td>
                            <td>Kota</td>
                            <td>No HP</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($supplier as $us) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $us['nama_supplier']; ?></td>
                            <td><?= $us['alamat_supplier']; ?></td>
                            <td><?= $us['kota_supplier']; ?></td>
                            <td><?= $us['no_hp']; ?></td>
                            <td>
                                <a href="<?= base_url('Supplier/hapus/') . $us['id_supplier']; ?>" class="btn btn-danger">Hapus</a>
                                <a href="<?= base_url('Supplier/edit/') . $us['id_supplier']; ?>" class="btn btn-warning">Edit</a>
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