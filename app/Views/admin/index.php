<?= $this->extend('layouts/master') ?>



<?= $this->section('content') ?>

<div class="content-body">
    <div class="row">
        <div class="col-12">


            <section id="dashboard-ecommerce">
                <!-- Stats Horizontal Card -->
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h2 class="font-weight-bolder mb-0">359</h2>
                                    <p class="card-text">Jumlah Persediaan</p>
                                </div>
                                <div class="avatar bg-light-warning p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="box" class="font-medium-5"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h2 class="font-weight-bolder mb-0">180</h2>
                                    <p class="card-text">Total Produk</p>
                                </div>
                                <div class="avatar bg-light-info p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="shopping-bag" class="font-medium-5"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h2 class="font-weight-bolder mb-0">Rp. 8000K</h2>
                                    <p class="card-text">Modal</p>
                                </div>
                                <div class="avatar bg-light-primary p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="slack" class="font-medium-5"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h2 class="font-weight-bolder mb-0">Rp. 13000K</h2>
                                    <p class="card-text">Keuntungan</p>
                                </div>
                                <div class="avatar bg-light-success p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="dollar-sign" class="font-medium-5"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Stats Horizontal Card -->
            </section>
            <!-- Dashboard Ecommerce ends -->
            <section id="basic-datatable">
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="head-label">
                            <h4 class="card-title">Daftar Review</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example" class="ui celled table" style="width:100%">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pengirim</th>
                                <th>Pesan</th>
                                <th>Rating</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            foreach ($review as $data) {
                                ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $data->nama_pengirim; ?></td>
                                    <td><?= $data->message; ?></td>
                                    <td><?= $data->rating; ?></td>
                                    <td><?= $data->status; ?></td>
                                    <td><?= $data->created_at; ?></td>

                                    <td>
                                        <a href="<?= base_url("review/detail/$data->id"); ?>" class="btn btn-relief-primary">Detail</a>

                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Pengirim</th>
                                <th>Pesan</th>
                                <th>Rating</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <th></th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
