<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="div container">
    <div class="div row">
        <div class="div col">
            <h1>Contact Us</h1>
            <?php foreach ($alamat as $data) : ?>
                <ul>
                    <li><?= $data['tipe']; ?></li>
                    <li><?= $data['alamat']; ?></li>
                    <li><?= $data['kota']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>