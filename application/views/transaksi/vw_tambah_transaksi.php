<main class="content">
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Tambah Data Transaksi</h1>
        </div>
        <div class="card">
            <div class="row">
                <div class="card-body">
                    <form method="POST" action="<?= base_url('Transaksi/upload'); ?>">
                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <select name="barang" id="barang" class="form-control">
                                <option value="">Pilih Barang</option>
                                <?php foreach ($barang as $b) : ?>
                                <option value="<?= $b['id_barang']; ?>"><?= $b['nama_barang']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Supplier</label>
                            <select name="supplier" id="supplier" class="form-control">
                                <option value="">Pilih Supplier</option>
                                <?php foreach ($supplier as $s) : ?>
                                <option value="<?= $s['id_supplier']; ?>"><?= $s['nama_supplier']; ?></option>
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
                                <option value="">Pilih Pegawai</option>
                                <?php foreach ($pegawai as $p) : ?>
                                <option value="<?= $p['id_pegawai']; ?>"><?= $p['nama_pegawai']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="reset" class="btn btn-primary">Clear</button>
                        <button href="<?= base_url('Transaksi') ?>" type="submit" class="btn btn-danger">Cancel</button>
                        <button type="submit" name="tambah" class="btn btn-success float-right">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
</main>