<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="div container">
    <div class="div row">
        <div class="div col">
            <p>Ini halaman home</p>
            <?php
            d($test);
            ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>