<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <title>SiTani - Login</title>
</head>

<body>
    <section class="container-login">
        <div class="kotak-login">
            <div class="login-satu">
                <div class="img-login"></div>
                <div class="text-login">Login</div>
                <?php echo $this->session->flashdata('message'); ?>
            </div>
            <div class="login-dua">
                <form class="user" method="post" action="<?php echo base_url('auth'); ?>">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="email" id="email" placeholder="Enter Email Address..." value="<?php echo set_value('email'); ?>">
                        <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                        <?php echo form_error('password', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <div class="btn-login">
                            <button class="btn btn-warning btn-user btn-block btn-kembali">
                                <a href="#" style="text-decoration: none; color:white">Kembali</a>
                            </button>
                            <button type="submit" class="btn btn-success btn-user btn-block">
                                Login
                            </button>
                        </div>
                        <div class="login-footer">
                            <div class="lupa-password">
                                <a href="<?php echo base_url('auth/lupapassword') ?>" style="text-decoration: none; color:black; text-align:center">Lupa Password?</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>