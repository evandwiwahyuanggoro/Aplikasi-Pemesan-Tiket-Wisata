<?php
//menyisipkan file tes.php di sini
include('koneksi.php');

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Wisata Purwokerto - Detail Pesanan</title>
    <link rel="shortcut icon" type="image/x-icon" href="favico.ico"/>
    <link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="Assets/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="Assets/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        body {
            margin-top: 70px;
        }

        .modalDialog {
            position: fixed;
            font-family: Arial, Helvetica, sans-serif;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.8);
            z-index: 99999;
            opacity: 0;
            transition: opacity 200ms ease-in;
            pointer-events: none;
        }

        .modalDialog:target {
            opacity: 1;
            pointer-events: auto;
        }

        .modalDialog > div {
            width: 400px;
            position: relative;
            margin: 10% auto;
            padding: 5px 20px 13px 20px;
            border-radius: 10px;
            background: #fff;
            background: linear-gradient(#fff, #aaa);
        }

        .close:hover {
            background: #00d9ff;
        }

        .close {
            background: #606061;
            color: #FFFFFF;
            line-height: 25px;
            position: absolute;
            text-align: center;
            top: -10px;
            right: -12px;
            width: 24px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 12px;
            box-shadow: 1px 1px 3px #000;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

    </style>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="index.php">Wisata Purwokerto</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="pesan.php">Tambah Pesanan</a></li>
                <li><a href="daftar.php">Lihat Pesanan</a></li>
                <li><a href="grafik.php">Grafik Penjualan</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-xs-12">

            <div class="panel-body">
                <!--Menampilkan data detail arsip-->
                <?php
                $sql = "SELECT * FROM pemesanan WHERE id = '{$_GET['id']}'";
                //proses query ke database
                $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                //Merubaha data hasil query kedalam bentuk array
                $data = mysqli_fetch_array($query);
                if ($data['nama_wisata'] == 1) {
                    $nama_wisata = "Small World";
                } else if ($data['nama_wisata'] == 2) {
                    $nama_wisata = "Kebun Raya Baturraden";
                } else if ($data['nama_wisata'] == 3) {
                    $nama_wisata = "Curug Gomblang";
                }

                ?>

                <!--dalam tabel--->
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <td>Nama</td>
                        <td><?= $data['Nama'] ?></td>
                    </tr>
                    <tr>
                        <td>Nomer Identitas</td>
                        <td><?= $data['no_identitas'] ?></td>
                    </tr>
                    <tr>
                        <td>Nomer HP</td>
                        <td><?= $data['no_hp'] ?></td>
                    </tr>
                    <tr>
                        <td>Tempat Wisata</td>
                        <td><?= $nama_wisata ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Kunjungan</td>
                        <td><?= $data['tanggal_kunjungan'] ?></td>
                    </tr>
                    <tr>
                        <td>Pengunjung Dewasa</td>
                        <td><?= $data['pengunjung_dewasa'] ?></td>
                    </tr>
                    <tr>
                        <td>Pengunjung Anak</td>
                        <td><?= $data['pengunjung_anak'] ?></td>
                    </tr>
                    <tr>
                        <td>Harga Tiket</td>
                        <td>Rp. <?= $data['tiket'] ?></td>
                    </tr>
                    <tr>
                        <td>Total Bayar</td>
                        <td>Rp. <?= $data['total_harga'] ?></td>
                    </tr>
                </table>
            </div> <!--end panel-body-->
        </div>
    </div>
</div>


<script src="Assets/js/jquery.js" type="text/javascript"></script>
<script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="Assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
