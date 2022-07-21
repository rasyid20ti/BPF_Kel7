<main class="content">
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Tambah Data Pegawai</h1>
        </div>
        <div class="card">
            <div class="row">
                <div class="card-body">
                <form method="POST" action="<?= base_url('Pegawai/upload'); ?>">
                        <div class="mb-3">
                            <label class="form-label">Nama Pegawai</label>
                            <input type="text" name="nama_pegawai" class="form-control" placeholder="Nama Pegawai">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                        </div>
                        <div class="mb-3">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki">
                            <span class="form-check-label">Laki-laki &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</span>
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                            <span class="form-check-label">Perempuan</span>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text"name="alamat_pegawai" class="form-control" placeholder="Alamat Pegawai">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">No HP</label>
                            <input type="text" name="no_hp" class="form-control" placeholder="No Hp">
                        </div>

                        <button type="reset" class="btn btn-primary">Clear</button>
                        <button href="<?= base_url('Pegawai') ?>" type="submit" class="btn btn-danger">Cancel</button>
                        <button type="submit" name="tambah" class="btn btn-success float-right">Tambah</button>

                    </form>

                </div>
            </div>
        </div>
</main>