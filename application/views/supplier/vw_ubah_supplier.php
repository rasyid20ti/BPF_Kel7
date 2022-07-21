<main class="content">
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Edit Data Supplier</h1>
        </div>
        <div class="card">
            <div class="row">
                <div class="card-body">
                    <form method="POST" action="<?= base_url('Supplier/update'); ?>">
                    <input type="hidden" name="id_supplier" value="<?= $supplier['id_supplier']; ?>">
                        <div class="mb-3">
                            <label class="form-label" >Nama Supplier</label>
                            <input type="text" name="nama_supplier" value="<?= $supplier['nama_supplier']; ?>" class="form-control" placeholder="Nama Supplier">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat Supplier</label>
                            <input type="text" name="alamat_supplier" value="<?= $supplier['alamat_supplier']; ?>" class="form-control" placeholder="Jenis Supplier">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kota Supplier</label>
                            <input type="text" name="kota_supplier" value="<?= $supplier['kota_supplier']; ?>" class="form-control" placeholder="Kota Supplier">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">No Hp</label>
                            <input type="text" name="no_hp" value="<?= $supplier['no_hp']; ?>" class="form-control" placeholder="No Hp">
                        </div>

                        <button type="reset" class="btn btn-primary">Clear</button>
                        <button href="<?= base_url('Supplier') ?>" type="submit" class="btn btn-danger">Cancel</button>
                        <button type="submit" name="ubah" class="btn btn-success float-right">Edit</button>

                    </form>

                </div>
            </div>
        </div>
</main>