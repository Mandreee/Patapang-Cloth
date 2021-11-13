<?= $this->extend('layouts/master') ?>



<?= $this->section('content') ?>

<div class="content-body">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-primary" role="alert">
                <div class="alert-body">
                    <strong>Info:</strong> Masukkan data kedalam form yang tersedia.
                </div>
            </div>
        </div>
    </div>


    <section class="modern-horizontal-wizard">
        <div class="bs-stepper wizard-modern modern-wizard-example">
            <div class="bs-stepper-header">
                <div class="step" data-target="#account-details-modern">
                    <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="file-text" class="font-medium-3"></i>
                                    </span>
                        <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Detail Barang</span>
                                        <span class="bs-stepper-subtitle">Informasi Detail Barang</span>
                                    </span>
                    </button>
                </div>
                <div class="line">
                    <i data-feather="chevron-right" class="font-medium-2"></i>
                </div>
                <div class="step" data-target="#personal-info-modern">
                    <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="user" class="font-medium-3"></i>
                                    </span>
                        <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Persediaan Barang</span>
                                        <span class="bs-stepper-subtitle">Jumlah Persediaan Barang</span>
                                    </span>
                    </button>
                </div>

            </div>

            <div class="bs-stepper-content">
                <form class="form" method="post" accept-charset="utf-8" enctype="multipart/form-data"  action="<?= base_url('inventory/store') ?>">
                <?= csrf_field(); ?>
                <div id="account-details-modern" class="content">
                    <div class="content-header">
                        <h5 class="mb-0">Account Details</h5>
                        <small class="text-muted">Enter Your Account Details.</small>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="modern-username">Nama Barang</label>
                            <input type="text" name="nama_barang" required id="modern-username" class="form-control" placeholder="Supreme Beast T-Shirt" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="modern-email">Warna</label>
                            <input type="text" name="warna" required id="modern-email" class="form-control" placeholder="Red Strawberry" aria-label="john.doe" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group form-password-toggle col-md-6">
                            <label class="form-label" for="modern-password">Harga Modal</label>
                            <input type="number" name="modal" required id="modern-password" class="form-control" placeholder="35000" />
                        </div>
                        <div class="form-group form-password-toggle col-md-6">
                            <label class="form-label" for="modern-confirm-password">Harga Jual</label>
                            <input type="number" name="harga" required id="modern-confirm-password" class="form-control" placeholder="58000" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-outline-secondary btn-prev" disabled>
                            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-primary btn-next">
                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                            <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                        </button>
                    </div>
                </div>
                <div id="personal-info-modern" class="content">
                    <div class="content-header">
                        <h5 class="mb-0">Personal Info</h5>
                        <small>Enter Your Personal Info.</small>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="modern-first-name">Stock Ukuran S</label>
                            <input type="number" name="s" required id="modern-first-name" class="form-control" placeholder="13" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="modern-last-name">Stock Ukuran M</label>
                            <input type="number" name="m" required id="modern-last-name" class="form-control" placeholder="8" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="modern-first-name">Stock Ukuran L</label>
                            <input type="number" name="l" required id="modern-first-name" class="form-control" placeholder="18" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="modern-last-name">Stock Ukuran XL</label>
                            <input type="number" name="xl" required id="modern-last-name" class="form-control" placeholder="26" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="form-label" for="modern-first-name">Image</label>
                            <input type="file" name="gambar" required id="modern-first-name" class="form-control"  />
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button class="btn btn-primary btn-prev">
                            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
                </form>
            </div>

        </div>
    </section>
    <!-- /Modern Horizontal Wizard -->


</div>

<!-- END: Content-->
<?= $this->endSection() ?>
