<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="div container">
    <div class="div row">
        <div class="div col">
            <h1>About Me</h1>
            <?php
            d($test);
            ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>