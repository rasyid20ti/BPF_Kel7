<main class="content">
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Edit Data Transaksi</h1>
        </div>
        <div class="card ">
            <div class="row">
                <div class="card-body ">
                    <form method="POST" action="<?= base_url('Transaksi/update'); ?>">
                        <input type="hidden" name="id_transaksi" value="<?= $transaksi['id_transaksi']; ?>">
                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <select name="barang" id="barang" class="form-control">
                                <?php foreach ($barang as $b) : ?>
                                <option value="<?= $b['id_barang']; ?>" <?php if ($transaksi['barang'] == $b['id_barang']) {
                                echo "selected";
                            } ?>><?= $b['nama_barang']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Supplier</label>
                            <select name="supplier" id="supplier" class="form-control">
                                <?php foreach ($supplier as $s) : ?>
                                <option value="<?= $s['id_supplier']; ?>" <?php if ($transaksi['supplier'] == $s['id_supplier']) {
                                echo "selected";
                            } ?>><?= $s['nama_supplier']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Barang Masuk</label>
                            <input type="text" name="barang_masuk" class="form-control" placeholder="Barang Masuk">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Barang Keluar</label>
                            <input type="text" name="barang_keluar" class="form-control" placeholder="Barang Keluar">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Total Harga</label>
                            <input type="text" name="total_harga" class="form-control" placeholder="Total Harga">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Karyawan</label>
                            <select name="pegawai" id="pegawai" class="form-control">
                                <?php foreach ($pegawai as $p) : ?>
                                <option value="<?= $p['id_pegawai']; ?>" <?php if ($transaksi['pegawai'] == $p['id_pegawai']) {
                                echo "selected";
                            } ?>><?= $p['nama_pegawai']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="reset" class="btn btn-primary">Clear</button>
                        <button href="<?= base_url('Transaksi') ?>" type="submit" class="btn btn-danger">Cancel</button>
                        <button type="submit" name="ubah" class="btn btn-success float-right">Edit</button>
                    </form>

                </div>
            </div>
        </div>
</main>