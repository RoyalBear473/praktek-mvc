<div class="container mt-4">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#formModal">
    tambah buku
    </button>
    <!--modal body untuk form-->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content bg-light-subtle">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="judulModalTambah" name="judulModalTambah">Tambah Data Buku</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                <form action="<?= URLUTAMA; ?>/buku/tambah" method="post">
                    <label for="judul" class="form-label">Judul Buku</label>
                    <input type="text" id="judul" class="form-control" name="judul">

                    <label for="kode" class="form-label">Kode Buku</label>
                    <input type="text" id="kode" class="form-control" name="kode">

                    <label for="pengarang" class="form-label">Pengarang</label>
                    <input type="text" id="pengarang" class="form-control" name="pengarang">

                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" id="penerbit" class="form-control" name="penerbit">

                    <label for="tahun" class="form-label">Tahun Terbit</label>
                    <input type="text" id="tahun" class="form-control" name="tahun">

                    <input type="hidden" name="id" id="id">
                    
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" >Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- menampilkan data -->
    <div class="row row-cols-1 row-cols-md-4 g-1">
        <?php foreach ($data['buku'] as $buku): ?>
            <div class="col">
                <div class="card w-100">
                    <img src='' class="card-img-top" alt="<?= $buku['judul'] ?>">
                    <div class="card-body">
                        <h3 class="card-title"><?= $buku['judul'] ?></h3>
                        <h5 class="card-text"><?= $buku['pengarang'] ?></h5>
                        <p class="card-text"><?= $buku['kode_buku'] ?></p>
                        <p class="card-text"><?= $buku['penerbit'] ?></p>
                        <p class="card-text"><?= $buku['tahun_terbit'] ?></p>
                        <div class="container d-flex flex-row justify-content-between">
                            <form action="<?= URLUTAMA; ?>/buku/delete/<?= $buku['id'];?>" method="post">
                                <button class="btn btn-danger" onclick="return confirm('ingin menghapus buku ini?')">Delete</button>
                            </form>
                            <form action="<?= URLUTAMA; ?>/buku/detail/<?= $buku['id'];?>" method="post">
                                <button class="btn btn-primary" id="updateBuku"  data-bs-toggle="modal" data-bs-target="#formModal">Detail</button>
                            </form>
                            <form action="<?= URLUTAMA; ?>/buku/update/<?= $buku['id'];?>" method="post">
                                <button class="btn btn-secondary" id="updateBuku"  data-bs-toggle="modal" data-bs-target="#formModal">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>