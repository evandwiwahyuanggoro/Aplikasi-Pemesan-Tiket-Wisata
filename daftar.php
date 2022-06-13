<?php
//menyisipkan file tes.php di sini
include('koneksi.php');

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Wisata Purwokerto - Lihat Pesanan</title>
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
<!-- isi -->
<div class="container">
    <div class="row">
        <div class="col-xs-12">


            <div class="panel-body">
                <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Nomor Identitas</th>
                        <th>Nomer Hp</th>
                        <th>Nama Wisata</th>
                        <th>Tanggal Kunjungan</th>
                        <th>Pengunjung Dewasa</th>
                        <th>Pengunjung Anak</th>
                        <th>Total Tiket</th>
                        <th>Total Harga</th>
                        <th>ACTIONS</th>
                    </tr>
                    </thead>
                    <tbody>
                        <!--ambil data dari database, dan tampilkan kedalam tabel-->
                        <?php
                        //buat sql untuk tampilan data, gunakan kata kunci select
                        $sql = "SELECT * FROM pemesanan";
                        $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                        //Baca hasil query dari databse, gunakan perulangan untuk
                        //Menampilkan data lebh dari satu. disini akan digunakan
                        //while dan fungdi mysqli_fecth_array
                        //Membuat variabel untuk menampilkan nomor urut
                        $nomor = 0;
                        //Melakukan perulangan u/menampilkan data
                        while ($data = mysqli_fetch_array($query)) {
                            $nomor++; //Penambahan satu untuk nilai var nomor

                            if ($data['nama_wisata'] == 1) {
                                $nama_wisata = "Small World";
                            } else if ($data['nama_wisata'] == 2) {
                                $nama_wisata = "Kebun Raya Baturraden";
                            } else if ($data['nama_wisata'] == 3) {
                                $nama_wisata = "Curug Gomblang";
                            }

                            ?>
                            <tr>
                                <td><?= $data['Nama'] ?></td>
                                <td><?= $data['no_identitas'] ?></td>
                                <td><?= $data['no_hp'] ?></td>
                                <td><?= $nama_wisata ?></td>
                                <td><?= $data['tanggal_kunjungan'] ?></td>
                                <td><?= $data['pengunjung_dewasa'] ?></td>
                                <td><?= $data['pengunjung_anak'] ?></td>
                                <td><?= $data['tiket'] ?></td>
                                <td>Rp. <?= $data['total_harga'] ?></td>
                                <td>
                                    <a href="detail.php?id=<?php echo $data['id'] ?>" class="btn btn-info btn-xs">Detail</a>
                                    <a href="edit.php?id=<?php echo $data['id'] ?>" class="btn btn-warning btn-xs">Edit</a>
                                    <a href="hapus.php?id=<?php echo $data['id'] ?>" class="btn btn-danger btn-xs">Hapus</a>
                                </td>
                            </tr>
                            <!--Tutup Perulangan data-->
                        <?php } ?>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- isi -->

<script src="Assets/js/jquery.js" type="text/javascript"></script>
<script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="Assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>


</script>

</body>

</html>
