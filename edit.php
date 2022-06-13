<?php
//menyisipkan file tes.php di sini
include('koneksi.php');
?>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Wisata Purwokerto - Tambah Pesanan</title>
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
<?php
$id = $_GET['id'];
$ambil = mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE id ='$id'") or die ("SQL Edit error");
$data = mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel-body">
                <!--membuat form untuk tambah data-->
                <form class="form-horizontal" action="" method="post">
                    <div class="form-group">
                        <label for="nama" class="col-sm-3 control-label">Nama Pemesan</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" value="<?= $data['Nama'] ?>" class="form-control"
                                   id="inputEmail3" placeholder="Inputkan Nama Anda" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="no_identitas" class="col-sm-3 control-label">Nomer Identitas</label>
                        <div class="col-sm-9">
                            <input type="text" name="no_identitas" value="<?= $data['no_identitas'] ?>"
                                   class="form-control" id="inputEmail3" placeholder="Inputkan no_identitas Anda"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="no_hp" class="col-sm-3 control-label">Nomor HP</label>
                        <div class="col-sm-9">
                            <input type="text" name="no_hp" value="<?= $data['no_hp'] ?>" class="form-control"
                                   id="inputEmail3" placeholder="Inputkan Nomer HP anda" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Tempat Wisata</label>
                        <div class="col-sm-2 col-xs-9">
                            <select name="nama_wisata" class="form-control">
                                <option value="1">Small World - IDR 20.000</option>
                                <option value="2">Kebun Raya Baturraden - IDR 40.000</option>
                                <option value="3">Curug Gomblang - IDR 30.000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kunjungan" class="col-sm-3 control-label">Tanggal Kunjungan</label>
                        <div class="col-sm-9">
                            <input type="date" name="tanggal_kunjungan" class="form-control" id="tanggal_kunjungan"
                                   placeholder="Inputkan Tanggal Pengunjung" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pengunjung_dewasa" class="col-sm-3 control-label">Pengunjung Dewasa</label>
                        <div class="col-sm-9">
                            <input type="number" name="pengunjung_dewasa" id="pengunjung_dewasa" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pengunjung_anak" class="col-sm-3 control-label">Pengunjung Anak</label>
                        <small>Anak-anak merupakan usia yang dibawah 12 tahun</small>
                        <div class="col-sm-9">
                            <input type="number" name="pengunjung_anak" id="pengunjung_anak" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success">
                                <span class="fa fa-save"></span> Simpan Pesanan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if ($_POST) {
    //Ambil data dari form
    $nama = $_POST['nama'];
    $no_identitas = $_POST['no_identitas'];
    $no_hp = $_POST['no_hp'];
    $nama_wisata = $_POST['nama_wisata'];
    $tanggal_kunjungan = $_POST['tanggal_kunjungan'];
    $pengunjung_dewasa = $_POST['pengunjung_dewasa'];
    $pengunjung_anak = $_POST['pengunjung_anak'];

    if ($nama_wisata == 1) {
        $harga = 20000;
    } else if ($nama_wisata == 2) {
        $harga = 40000;
    } else if ($nama_wisata == 3) {
        $harga = 30000;
    }

    $tiket = $harga;
    $total = $harga * ($pengunjung_dewasa + $pengunjung_anak);
    $potongan = ($harga * 0.5) * $pengunjung_anak;
    $total_harga = $total - $potongan;

    //buat sql
    $sql = "UPDATE pemesanan SET Nama='$nama',no_identitas='$no_identitas',no_hp='$no_hp',nama_wisata='$nama_wisata',tanggal_kunjungan='$tanggal_kunjungan',pengunjung_dewasa='$pengunjung_dewasa',pengunjung_anak='$pengunjung_anak',tiket='$tiket',total_harga='$total_harga' WHERE id = '$id'";
    $query = mysqli_query($koneksi, $sql) or die ("SQL Simpan Pemesanan Error");
    if ($query) {
        echo "<script>window.location.assign('daftar.php');</script>";
    } else {
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
}

?>

<script src="Assets/js/jquery.js" type="text/javascript"></script>
<script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="Assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
