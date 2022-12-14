<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Guru</h1>
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
                    <form method="post" action="<?= base_url('guru/store') ?>">
                        <?= csrf_field(); ?>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama'); ?>">
                        </div>

                        <div class="form-group">
                            <label for="mata_pelajaran">Mata Pelajaran</label>
                            <select name="mata_pelajaran" class="form-control" id="mata_pelajaran">
                                <option value="b_inggris">B. Inggris</option>
                                <option value="b_indonesia">B. Indonesia</option>
                                <option value="matematika">Matematika</option>
                                <option value="mapel_kejuruan">Mapel Kejuruan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="no_telp">No Telp</label>
                            <input type="text" class="form-control" id="no_telp" name="no_telp"
                                value="<?= old('no_telp') ?>" />
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                value="<?= old('email') ?>" />
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat"><?= old('alamat') ?></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Simpan" class="btn btn-info" />
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <?= $this->endSection('content'); ?>