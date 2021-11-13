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
            <h4>Periksa Entrian Form</h4>
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
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Detail Review</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" method="post" action="<?= base_url('review/update/' . $review->id) ?>">
                            <?= csrf_field(); ?>

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Nama Pengirim</label>
                                    <input
                                            type="text" required value="<?= $review->nama_pengirim; ?>"
                                            id="first-name-column"
                                            class="form-control"
                                            placeholder="Tatang Sutarman"
                                            name="nama_pengirim"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="last-name-column">email</label>
                                    <input
                                            type="email" required value="<?= $review->email; ?>"
                                            id="last-name-column"
                                            class="form-control"
                                            placeholder="tatang@gmail.com"
                                            name="email"
                                    />
                                </div>
                            </div>

                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Judul</label>
                                    <input
                                            type="text" required value="<?= $review->title; ?>"
                                            id="first-name-column"
                                            class="form-control"
                                            placeholder="Masukkan Judul"
                                            name="title"
                                    />
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="company-column">Pesan</label>
                                    <textarea
                                            class="form-control"
                                            id="exampleFormControlTextarea1"
                                            rows="3" required
                                            placeholder="Masukkan Pesan"
                                            name="message"><?= $review->message; ?></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <a href="<?= base_url('review') ?>" class="btn btn-relief-dark">Cancel</a>
                                <a href="<?= base_url("review/delete/$review->id"); ?>" class="btn btn-relief-danger">Delete</a>
                                <button type="submit" class="btn btn-relief-success mr-1">Update</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Floating Label Form section end -->




</div>

<!-- END: Content-->
<?= $this->endSection() ?>
