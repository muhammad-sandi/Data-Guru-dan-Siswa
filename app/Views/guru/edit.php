<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Update Data Guru</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('guru/update/' . $guru->id_guru) ?>">
                <?= csrf_field(); ?>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $guru->nama; ?>">
                </div>

                <div class="form-group">
                    <label for="mata_pelajaran">Mata Pelajaran</label>
                    <select name="mata_pelajaran" class="form-control" id="mata_pelajaran">
                        <option value="b_inggris" <?= ($guru->mata_pelajaran == "b_inggris" ? "selected" : ""); ?>>B. Inggris</option>
                        <option value="b_indonesia" <?= ($guru->mata_pelajaran == "b_indonesia" ? "selected" : ""); ?>>B. Indonesia</option>
                        <option value="matematika" <?= ($guru->mata_pelajaran == "matematika" ? "selected" : ""); ?>>Matematika</option>
                        <option value="mapel_kejuruan" <?= ($guru->mata_pelajaran == "mapel_kejuruan" ? "selected" : ""); ?>>Mapel_kejuruan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                        <option value="pria" <?= ($guru->jenis_kelamin == "pria" ? "selected" : ""); ?>>Pria</option>
                        <option value="wanita" <?= ($guru->jenis_kelamin == "wanita" ? "selected" : ""); ?>>Wanita</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="no_telp">No Telp</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $guru->no_telp; ?>" />
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $guru->email; ?>" />
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat"><?= $guru->alamat; ?></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-info" />
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>