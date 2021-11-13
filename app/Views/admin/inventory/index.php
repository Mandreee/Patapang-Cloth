<?= $this->extend('layouts/master') ?>



<?= $this->section('content') ?>

<div class="content-body">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-primary" role="alert">
                <div class="alert-body">
                    <strong>Info:</strong> Halaman ini berfungsi untuk mengelola semua data barang yang berada di Inventory atau Gudang Penyimpanan.
                </div>
            </div>
        </div>
    </div>

    <?php if (!empty(session()->getFlashdata('message'))) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo session()->getFlashdata('message'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <section id="basic-datatable">
        <div class="card">
            <div class="card-header border-bottom">
                <div class="head-label">
                    <h4 class="card-title">Daftar Inventory</h4>
                </div>
                <div class="dt-action-buttons text-right">
                <div class="btn-group">
                    <a  href="<?= base_url("inventory/create"); ?>" class="btn btn-relief-success">
                        <i data-feather="plus" class="mr-25"></i>
                        <span>Tambah Data Baru</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table id="example" class="ui celled table" style="width:100%">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Warna</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    foreach ($inventory as $data) {
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data->nama_barang; ?></td>
                            <td><?= $data->warna; ?></td>
                            <td><?= $data->harga; ?></td>
                            <td><?= $data->status; ?></td>
                            <td><?= $data->created_at; ?></td>

                            <td>
                                <a href="<?= base_url("inventory/detail/$data->id"); ?>" class="btn btn-relief-primary">Detail</a>

                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Warna</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th></th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
    <!--/ Row grouping -->


</div>

<!-- END: Content-->
<?= $this->endSection() ?>
