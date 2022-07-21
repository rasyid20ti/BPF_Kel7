           <main class="content">
               <div class="container-fluid p-0">

                   <h1 class="h3 mb-4 text-gray-800"><?php echo $judul3; ?></h1>
                   <div class="row">
                       <div class="col-md-6"><a href="<?= base_url('Transaksi/Tambah') ?>"
                               class="btn btn-info mb-2">Tambah Transaksi</a></div>
                       <div class="col-md-12">
                           <table class="table">
                               <thead>
                                   <tr>
                                       <td>No</td>
                                       <td>Nama Barang</td>
                                       <td>Nama Supplier</td>
                                       <td>Barang Masuk</td>
                                       <td>Barang Keluar</td>
                                       <td>Total Harga</td>
                                       <td>Nama Karyawan</td>
                                       <td>Aksi</td>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php $i = 1; ?>
                                   <?php foreach ($transaksi as $us) : ?>
                                   <tr>
                                       <td><?= $i; ?></td>
                                       <td><?= $us['barang']; ?></td>
                                       <td><?= $us['supplier']; ?></td>
                                       <td><?= $us['barang_masuk']; ?></td>
                                       <td><?= $us['barang_keluar']; ?></td>
                                       <td><?= $us['total_harga']; ?></td>
                                       <td><?= $us['pegawai']; ?></td>
                                       <td>
                                           <a href="<?= base_url('Transaksi/hapus/') . $us['id_transaksi']; ?>"
                                               class="btn btn-danger">Hapus</a>
                                           <a href="<?= base_url('Transaksi/edit/') . $us['id_transaksi']; ?>"
                                               class="btn btn-warning">Edit</a>
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