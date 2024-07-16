<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/'); ?>fontawesome/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <title>Lupa Password</title>
</head>

<body>
    <section class="container-login">
        <div class="kotak-login">
            <div class="login-satu">
                <div class="img-login"></div>
                <div class="text-forgot">Lupa Password</div>
                <?php echo $this->session->flashdata('message'); ?>
            </div>
            <div class="login-dua">
                <form class="user" method="post" action="<?php echo base_url('auth/lupapassword'); ?>">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="email" id="email" placeholder="Enter Email Address..." value="<?php echo set_value('email'); ?>">
                        <div style="text-align: center;"><?php echo form_error('email', '<small class="text-danger">', '</small>'); ?></div>
                    </div>
                    <div class="form-group">
                        <div class="btn-login">
                            <button type="submit" class="btn btn-success btn-user btn-block" style="font-weight: bold;">
                                Reset Password
                            </button>
                        </div>
                        <div class="login-footer">
                            <div class="lupa-password">
                                <a href="<?php echo base_url('auth'); ?>" style="text-decoration: none; color:black; text-align:center"><i class="fa fa-arrow-left mt-3" style="margin-right: 5px;"></i>Kembali ke Login</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>