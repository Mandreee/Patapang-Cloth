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

    <!-- Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Form Review</h4>
        </div>
        <div class="card-body">
          <form class="form" method="post" action="<?= base_url('review/store') ?>">
              <?= csrf_field(); ?>
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="first-name-column">Nama Pengirim</label>
                  <input
                    type="text" required
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
                    type="email" required
                    id="last-name-column"
                    class="form-control"
                    placeholder="tatang@gmail.com"
                    name="email"
                  />
                </div>
              </div>

              <div class="col-md-12 col-12">
              <label>Rating</label>
              <div class="form-group">
                <select class="select2 form-control" name="rating" id="default-select">
                    <option value="" disabled selected>Tolong pilih opsi yang ada</option>
                    <option value="50">Sangat Baik</option>
                    <option value="25">Baik</option>
                    <option value="0">Biasa</option>
                    <option value="-25">Buruk</option>
                    <option value="-50">Sangat Buruk</option>
                </select>
              </div>
              </div>
                <div class="col-md-12 col-12">
                    <div class="form-group">
                        <label for="first-name-column">Judul</label>
                        <input
                                type="text" required
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
                  name="message"></textarea>
                </div>
              </div>
              <div class="col-12">
                  <a href="<?= base_url('review') ?>" class="btn btn-relief-dark">Cancel</a>
                  <button type="submit" class="btn btn-relief-primary mr-1">Submit</button>
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
