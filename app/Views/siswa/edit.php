<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Siswa</h1>
        </div>

<div class="content">
    <div class="card">
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
            <form method="post" action="<?= base_url('siswa/update/' . $siswa->id_siswa) ?>">
                <?= csrf_field(); ?>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa->nama; ?>">
                </div>

                <div class="form-group">
                    <label for="no_absen">No Absen</label>
                    <input type="text" class="form-control" id="no_absen" name="no_absen" value="<?= $siswa->no_absen; ?>">
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                        <option value="pria" <?= ($siswa->jenis_kelamin == "pria" ? "selected" : ""); ?>>Pria</option>
                        <option value="wanita" <?= ($siswa->jenis_kelamin == "wanita" ? "selected" : ""); ?>>Wanita</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="no_telp">No Telp</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $siswa->no_telp; ?>" />
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $siswa->email; ?>" />
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat"><?= $siswa->alamat; ?></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-info" />
                </div>

            </form>
        </div>
    </div>
</div>
            </div>
<?= $this->endSection('content'); ?>