 
<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>
<?php include('layouts/topbar.php'); ?>
 
 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Kelola Aset</h1>
                    
                    <!-- Tombol Tambah Data -->
                    <a href="kelola-aset/tambah" class="btn btn-primary mb-2">+ Tambah</a>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Kelola Aset</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Kode Aset</th>
                                        <th>Nama Aset</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php if(!empty($aset) && is_array($aset)): ?>
                                        <?php $no = 1; ?>
                                        <?php foreach($aset as $item): ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo esc($item['kode_aset']); ?></td>
                                                <td><?php echo esc($item['nama_aset']); ?></td>
                                                <td>
                                                <a href="kelola-aset/detail/<?= $item['id_kelola']; ?>"><i class="fas fa-eye"></i></a>
                                                 &nbsp;<!-- Menambahkan spasi -->
                                                <a href="kelola-aset/edit/<?= $item['id_kelola']; ?>"><i class="fas fa-edit"></i></a>
                                                    &nbsp;<!-- Menambahkan spasi -->
                                                    &nbsp;<!-- Menambahkan spasi -->
                                                    <a href="kelola-aset/delete/<?= $item['id_kelola']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="3">Tidak ada data data pengolahan aset.</td>
                                        </tr>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

 <?php include('layouts/footer.php'); ?>