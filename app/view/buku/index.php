<div class="container mt-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($data['buku'] as $buku): ?>
                <div class="col">
                    <div class="card">
                        <img src='' class="card-img-top" alt="<?= $buku['judul'] ?>">
                        <div class="card-body">
                            <h3 class="card-title"><?= $buku['judul'] ?></h3>
                            <h5 class="card-text"><?= $buku['pengarang'] ?></h5>
                            <p class="card-text"><?= $buku['kode_buku'] ?></p>
                            <p class="card-text"><?= $buku['penerbit'] ?></p>
                            <p class="card-text"><?= $buku['tahun_terbit'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>