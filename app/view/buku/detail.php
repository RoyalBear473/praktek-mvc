
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?= $data['buku']['judul']?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['buku']['kode_buku']?></h6>
            <p class="card-text"><?= $data['buku']['pengarang']?></p>
            <p class="card-text"><?= $data['buku']['penerbit']?></p>
            <p class="card-text"><?= $data['buku']['tahun_terbit']?></p>
            <p class="card-text"> buku ini berjudul <?= $data['buku']['judul']?> , dikarang oleh <?= $data['buku']['pengarang']?> 
                dan diterbitkan oleh <?= $data['buku']['penerbit']?> pada tahun <?= $data['buku']['tahun_terbit']?>, sekian informasi 
                tentang buku tersebut, untuk sinopsis masih tidak tersedia :)</p>
            <form action="<?= URLUTAMA;?>/buku" method="post">
                <button class="btn btn-danger" type="button">Back</button>
            </form>
        </div>
    </div>
</div>