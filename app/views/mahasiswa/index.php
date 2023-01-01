<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                Tambah Data Mahasiswa
            </button>
            <br>
            <h3>Daftar Mahasiswa</h3>

            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item ">
                        <?= $mhs['nama'] ?>
                        <a href="<?= BASEURL ?>mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">hapus</a>
                        <a href="<?= BASEURL ?>mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge badge-success float-right ml-1 tampilModelUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
                        <a href="<?= BASEURL ?>mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-primary float-right ml-1">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>



        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close tombolTambahData" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="number" class="form-control" id="nim" name="nim">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Pangan">Teknik Pangan</option>
                            <option value="Teknik Planologi">Teknik Planologi</option>
                            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                            <option value="Teknik Perkapalan">Teknik Perkapalan</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Teknik Geofisika">Teknik Geofisika</option>
                            <option value="Teknik Geologi">Teknik Geologi</option>
                            <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                            <option value="Teknik Perminyakan">Teknik Perminyakan</option>
                            <option value="Teknik Kimia">Teknik Kimia</option>
                            <option value="Teknik Material">Teknik Material</option>
                            <option value="Teknik Fisika">Teknik Fisika</option>
                            <option value="Teknik Biomedis">Teknik Biomedis</option>
                            <option value="Teknik Nuklir">Teknik Nuklir</option>
                            <option value="Teknik Industri Pertanian">Teknik Industri Pertanian</option>
                            <option value="Teknik Pertambangan">Teknik Pertambangan</option>
                            <option value="Teknik Perikanan">Teknik Perikanan</option>
                            <option value="Teknik Kelautan">Teknik Kelautan</option>
                            <option value="Teknik Penerbangan">Teknik Penerbangan</option>
                            <option value="Teknik Aeronotika">Teknik Aeronotika</option>
                            <option value="Teknik Otomotif">Teknik Otomotif</option>
                            <option value="Teknik Mekatronika">Teknik Mekatronika</option>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>