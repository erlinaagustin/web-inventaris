<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>
<?php include('layouts/topbar.php'); ?>

<div class="container-fluid">
    <?= form_open('ruangan/simpan', ['method' => 'post']); ?>
        <div class="form-group">
            <label for="nama_ruangan">Nama Ruangan</label>
            <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    <?= form_close(); ?>
</div>


<?php include('layouts/footer.php'); ?>