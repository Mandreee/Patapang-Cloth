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


    <section>
        <div class="card">
            <h2 class="card-header"><?=lang('Auth.register')?></h2>
            <div class="card-body">

                <?= view('Myth\Auth\Views\_message_block') ?>

                <form action="<?= route_to('register') ?>" method="post">
                    <?= csrf_field() ?>

                    <div class="form-group">
                        <label for="email"><?=lang('Auth.email')?></label>
                        <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                               name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                    </div>

                    <div class="form-group">
                        <label for="username"><?=lang('Auth.username')?></label>
                        <input type="text" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                    </div>

                    <div class="form-group">
                        <label for="password"><?=lang('Auth.password')?></label>
                        <input type="password" name="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="pass_confirm"><?=lang('Auth.repeatPassword')?></label>
                        <input type="password" name="pass_confirm" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                    </div>

                    <br>

                    <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.register')?></button>
                </form>


                <hr>

            </div>
        </div>
    </section>

</div>

<!-- END: Content-->
<?= $this->endSection() ?>
