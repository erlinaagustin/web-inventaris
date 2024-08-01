<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>
<?php include('layouts/topbar.php'); ?>

<div class="container-fluid">
    <?= form_open('merek/simpan', ['method' => 'post']); ?>
        <div class="form-group">
            <label for="nama_merek">Nama Merek</label>
            <input type="text" class="form-control" id="nama_merek" name="nama_merek" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    <?= form_close(); ?>
</div>


<?php include('layouts/footer.php'); ?>