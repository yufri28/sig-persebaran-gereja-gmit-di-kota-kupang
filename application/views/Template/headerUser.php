<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
    <title>Persebaran Gereja GMIT di Kota Kupang</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?=base_url('assets');?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url('assets');?>/dist/css/adminlte.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?=base_url('assets');?>/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?=base_url('assets');?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?=base_url('assets');?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?=base_url('assets');?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=base_url('assets');?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css">

    <style type="text/css">
    .active {
        font-weight: bold;
    }

    .container {
        max-width: 90vw;
    }

    .datashow,
    .plusdata {
        display: none;
    }

    .showpage {
        display: block;
    }

    .container-img {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    .mapcontainer {
        opacity: 0;
    }

    #map {
        width: 100%;
        height: 75vh;
    }

    * {
        margin: 0;
        padding: 0;
    }

    .navigasi {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 10000;
    }

    .container {
        max-width: 100vw;
    }

    body {
        zoom: 0.85;
    }

    @media only screen and (max-width: 1000px) {
        body {
            zoom: 1;
        }

        #map {
            width: 100vw;
            height: 30vh;
        }

        .ketform {
            margin-top: 20px;
        }
    }
    </style>
</head>

<body style="margin: 0; padding: 0;">
    <div class="navigasi py-4 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a href="<?=base_url('index.php');?>" class="navbar-brand" style="color: black;">
                        <span class="brand-text"><b>Persebaran Gereja GMIT di Kota Kupang</b></span>
                    </a>
                </div>
                <div class="col-6 text-right">
                    <a href="<?=base_url('index.php/Auth');?>" class="navbar-brand"
                        style="color: black; text-align: right;">
                        <span class="brand-text"><b>Login</b></span>
                    </a>
                </div>
            </div>
        </div>
    </div>