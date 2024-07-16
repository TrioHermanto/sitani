<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/'); ?>fontawesome/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <title>Ubah Password</title>
</head>

<body>
    <section class="container-login">
        <div class="kotak-login">
            <div class="login-satu">
                <div class="img-login"></div>
                <div class="text-forgot">Ubah Password</div>
                <label><?php echo $this->session->userdata('reset_email') ?></label>
                <?php echo $this->session->flashdata('message'); ?>
            </div>
            <div class="login-dua">
                <form class="user" method="post" action="<?php echo base_url('auth/ubahpassword'); ?>">
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" name="password1" id="password1" placeholder="Masukan password baru...">
                        <div style="text-align: center;"><?php echo form_error('password1', '<small class="text-danger">', '</small>'); ?></div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" name="password2" id="password2" placeholder="Repeat password...">
                        <div style="text-align: center;"><?php echo form_error('password2', '<small class="text-danger">', '</small>'); ?></div>
                    </div>
                    <div class="form-group">
                        <div class="btn-login">
                            <button type="submit" class="btn btn-success btn-user btn-block" style="font-weight: bold;">
                                Ubah Password
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>