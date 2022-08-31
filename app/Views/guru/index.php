<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Guru</h1>
        </div>

        <div class="content">
            <div class="card">
                <div class="card-body">
                    <?php if (!empty(session()->getFlashdata('message'))) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashdata('message'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?>
                    <a href="<?= base_url('/guru/create'); ?>" class="btn btn-primary mb-3">Tambah</a>
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Mata Pelajaran</th>
                            <th>Jenis Kelamin</th>
                            <th>No Telp</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                        <?php
                $no = 1;
                foreach ($guru as $row) {
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row->nama; ?></td>
                            <td><?= $row->mata_pelajaran; ?></td>
                            <td><?= $row->jenis_kelamin; ?></td>
                            <td><?= $row->no_telp; ?></td>
                            <td><?= $row->email; ?></td>
                            <td><?= $row->alamat; ?></td>
                            <td>
                                <a title="Edit" href="<?= base_url("guru/edit/$row->id_guru"); ?>"
                                    class="btn btn-info mt-2">Edit</a>
                                <a title="Delete" href="<?= base_url("guru/delete/$row->id_guru") ?>"
                                    class="btn btn-danger mb-2 mt-2"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                            </td>
                        </tr>
                        <?php
                }
                ?>
                    </table>
                </div>
            </div>
        </div>
        <?= $this->endSection('content'); ?>