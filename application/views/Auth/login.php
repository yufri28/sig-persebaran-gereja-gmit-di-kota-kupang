<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GIS Rawan DBD K-Means | Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url('assets'); ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url('assets'); ?>/dist/css/adminlte.min.css">
    <style>
    .lockscreen-wrapper {
        max-width: 60vw;
        margin: 5% auto;
        background: transparent;
    }

    .lockscreen-item {
        width: 50vw;
        background: transparent;
    }

    .card-body {
        background-color: transparent;
    }

    .form-control {
        background-color: transparent;
        border: none;
        border-radius: unset;
        border-bottom: 1px solid grey;
        font-weight: bold;
    }

    .form-control:focus {
        background-color: transparent;
        border: none;
        border-bottom: 1px solid grey;
    }

    .lockscreen {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: white;
    }

    @media screen and (max-width: 801px) {
        .lockscreen-logo {
            font-size: 15px;
        }

        .lockscreen-item,
        #Username,
        #Password {
            font-size: 11px;
        }
    }
    </style>
</head>

<body class="hold-transition lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo d-flex justify-content-center">
            <img src="<?=base_url('assets//foto/gereja.png'); ?>" width="250">
        </div>
        <p class="text-center mt-n4"><small><i>Gambar: GMIT Yegar Sahaduta Osmo</i></small></p>
        <div class="lockscreen-logo">
            <a href="#"><b>Persebaran Gereja GMIT</b></a>
            <p>di Kota Kupang</p>
        </div>
        <!-- /.lockscreen-item -->
        <div class="help-block text-center">
            <?php if ($this->session->flashdata('message')) {?>
            <?=$this->session->flashdata('message'); ?>
            <br>
            <?php } ?>
        </div>

        <!-- START LOCK SCREEN ITEM -->
        <div class="lockscreen-item">
            <!-- /.lockscreen-image -->

            <form action="<?=base_url('index.php/Auth'); ?>" method="post">
                <div class="card-body text-center">
                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" name="username" class="form-control text-center" id="Username" required>
                    </div>
                    <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" name="password" class="form-control text-center" id="Password" required>
                    </div>
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>


        </div>
        <div class="lockscreen-footer text-center">
            <b>Ilmu Komputer Undana</b>
            <br>
            <br>
            Copyright &copy; <?= date('Y'); ?>
        </div>
    </div>
    <!-- /.center -->

    <!-- jQuery -->
    <script src="<?=base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?=base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>