
<div class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['buku']['judul']?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['buku']['kode']?></h6>
            <p class="card-text"><?= $data['buku']['pengarang']?></p>
            <p class="card-text"><?= $data['buku']['penerbit']?></p>
            <p class="card-text"><?= $data['buku']['tahun']?></p>
            <a href="<?= BASEURL; ?>/buku" class="card-link">Back</a>
        </div>
    </div>
</div>