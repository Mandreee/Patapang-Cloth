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
                <form class="form" method="post" accept-charset="utf-8" enctype="multipart/form-data" action="<?= base_url('inventory/update/' . $inventory->id) ?>">
                <?= csrf_field(); ?>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Detail Inventory</h4>
                    </div>
                    <div class="card-body">


                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Nama Barang</label>
                                        <input
                                            type="text" required value="<?= $inventory->nama_barang; ?>"
                                            id="first-name-column"
                                            class="form-control"
                                            name="nama_barang"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Warna</label>
                                        <input
                                            type="text" required value="<?= $inventory->warna; ?>"
                                            id="last-name-column"
                                            class="form-control"
                                            name="warna"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Harga Modal</label>
                                        <div class="input-group input-group-merge mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon5">Rp.</span>
                                            </div>
                                            <input
                                                type="text" value="<?= $inventory->modal; ?>"
                                                class="form-control"
                                                placeholder="Username"
                                                aria-label="Username"
                                                aria-describedby="basic-addon5"
                                                name="modal"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Harga Jual</label>
                                        <div class="input-group input-group-merge mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon5">Rp.</span>
                                            </div>
                                            <input
                                                type="text" value="<?= $inventory->harga; ?>"
                                                class="form-control"
                                                placeholder="Username"
                                                aria-label="Username"
                                                aria-describedby="basic-addon5"
                                                name="harga"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                    <div class="card">
                        <div class="card-body row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Stock Ukuran S</label>
                                    <input
                                            type="number" required value="<?= $inventory->s; ?>"
                                            id="first-name-column"
                                            class="form-control"
                                            name="s"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Stock Ukuran M</label>
                                    <input
                                            type="number" required value="<?= $inventory->m; ?>"
                                            id="first-name-column"
                                            class="form-control"
                                            name="m"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Stock Ukuran L</label>
                                    <input
                                            type="number" required value="<?= $inventory->l; ?>"
                                            id="first-name-column"
                                            class="form-control"
                                            name="l"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Stock Ukuran XL</label>
                                    <input
                                            type="number" required value="<?= $inventory->xl; ?>"
                                            id="first-name-column"
                                            class="form-control"
                                            name="xl"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Status</label>
                                    <input
                                            type="text" required value="<?= $inventory->status; ?>"
                                            id="first-name-column"
                                            class="form-control"
                                            name="status"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Status</label>
                                    <input
                                            type="text" required value="<?= $inventory->status; ?>"
                                            id="first-name-column"
                                            class="form-control"
                                            name="status"
                                    />
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-12">
                                <label class="form-label" for="modern-first-name">Image</label>
                                <input type="file" name="gambar" id="modern-first-name" class="form-control"  />

                                <img class="img-fluid" width="200px" alt="gambar" src="<?= base_url('uploads/'.$inventory->gambar) ?>" />
                            </div>


                        </div>
                    </div>
                <div class="card">
                    <div class="card-body">
                        <div class="col-12">
                            <a href="<?= base_url('inventory') ?>" class="btn btn-relief-dark">Cancel</a>
                            <a href="<?= base_url("inventory/delete/$inventory->id"); ?>" class="btn btn-relief-danger">Delete</a>
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
