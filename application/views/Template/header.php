<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesebaran Gereja GMIT di Kota Kupang | <?=$title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?=base_url('assets'); ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url('assets'); ?>/dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?=base_url('assets'); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?=base_url('assets'); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=base_url('assets'); ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

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

    .img-sapi {
        max-width: 225px;
        border-radius: 10px;
    }

    .mapcontainer {
        opacity: 0;
    }

    #map {
        margin-top: 10px;
        width: 100%;
        height: 485px;
    }

    .navigasi {
        position: fixed;
        width: 100%;
        z-index: 1000;
        top: 0;
    }

    body {
        zoom: 0.85;
    }

    .modal-backdrop {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: unset;
        height: unset;
    }

    .modal-dialog {
        z-index: 2000;
        top: 25%;
    }

    @media screen and (max-width: 801px) {
        body {
            zoom: 1;
        }

        .container {
            /*all:unset;*/
            padding: 0 15px;
            margin: unset;
            max-width: 100vw;
        }

        #map {
            height: unset;
            height: 35vh;
        }

        .content {
            margin: -6px;
        }

        .ketcol {
            margin-top: 20px;
        }

        .navigasi {
            z-index: 1000;
        }

        .modal {
            position: fixed;
            top: 20px;
            left: 20px;
            right: 20px;
            width: auto;
            margin: 0;
        }

        .modal-dialog {
            z-index: 2000;
            top: 25%;
        }
    }
    </style>
</head>

<body class="hold-transition layout-top-nav">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand" href="<?=site_url('admin/index'); ?>">Kelompok I</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item <?= $sidebar == 'Dashboard' ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?=site_url('admin/index'); ?>">Beranda <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item  <?= $sidebar == 'Gereja' ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?=site_url('admin/gereja'); ?>">Gereja <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item  <?= $sidebar == 'Kecamatan' ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?=site_url('kecamatan'); ?>">Kecamatan <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item  <?= $sidebar == 'Klasis' ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?=site_url('klasis'); ?>">Klasis <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item  <?= $sidebar == 'Rayon' ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?=site_url('rayon'); ?>">Rayon <span
                                class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="ml-auto mt-3" style="list-style: none;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn-sm btn-info text-white" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-expanded="false">
                            <?=$this->session->userdata('nama_admin'); ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <button type="button" class="dropdown-item" data-toggle="modal"
                                data-target="#modalEditAdmin<?= $this->session->userdata('id_admin'); ?>">Edit
                                Admin</button>
                            <a class="dropdown-item" href="<?=site_url('auth/logout'); ?>">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Main content -->
    <div class="content mt-2 pt
-2">

        <div class="container">
