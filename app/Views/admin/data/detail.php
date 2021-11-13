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

    <?php if (!empty(session()->getFlashdata('error'))) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h4>Periksa Data Kembali</h4>
            </hr />
            <?php echo session()->getFlashdata('error'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <!-- Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <form class="form" method="post" action="<?= base_url('admin/update/' . $admin->id) ?>">
                    <?= csrf_field(); ?>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Detail Biodata Admin</h4>
                        </div>
                        <div class="card-body">


                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Nama Lengkap</label>
                                        <input
                                            type="text" required value="<?= $admin->fullname; ?>"
                                            id="first-name-column"
                                            class="form-control"
                                            name="fullname"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Nomor Telepon</label>
                                        <input
                                                type="text" required value="<?= $admin->contact; ?>"
                                                id="last-name-column"
                                                class="form-control"
                                                name="contact"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Tanggal Lahir</label>
                                        <input
                                                type="date" required value="<?= $admin->dob; ?>"
                                                id="last-name-column"
                                                class="form-control"
                                                name="dob"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Alamat</label>
                                        <textarea
                                                class="form-control"
                                                id="exampleFormControlTextarea1"
                                                rows="3" required
                                                placeholder="Masukkan Pesan"
                                                name="address"><?= $admin->address; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Email</label>
                                    <input
                                            type="text" required value="<?= $admin->email; ?>"
                                            id="first-name-column"
                                            class="form-control"
                                            name="email"
                                    />
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Status</label>
                                    <input
                                            type="text" required value="<?= $admin->status; ?>"
                                            id="first-name-column"
                                            class="form-control"
                                            name="status"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <a href="<?= base_url('admin') ?>" class="btn btn-relief-dark">Cancel</a>
                                <a href="<?= base_url("admin/delete/$admin->id"); ?>" class="btn btn-relief-danger">Delete</a>
                                <button type="submit" class="btn btn-relief-success mr-1">Update</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
    <!-- Basic Floating Label Form section end -->




</div>

<!-- END: Content-->
<?= $this->endSection() ?>
