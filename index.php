<html>
<head>
    <meta charset="UTF-8">
    <title>Wisata Purwokerto</title>
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


<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top"
                         data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                         alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                         src="Gambar/Small World.jpg" data-holder-rendered="true">
                    <div class="card-body">
                        <h4>Small World</h4>
                        <h8>Rp. 20.000</h8>
                        <p class="card-text">Kamu belum kesampaian mengelilingi dunia dan melihat langsung tempat wisata
                            di dunia? Daripada berkhayal terus, mending kunjungi dulu deh tempat yang satu ini. Di taman
                            Miniatur Dunia kamu akan menemukan banyak miniatur taman sekaligus gedung-gedung yang unik
                            di seluruh dunia. Keren kan? Kamu bisa melihat miniatur dari kincir angin yang ada di
                            Belanda, atau Menara Eifel dari Paris dan miniatur-miniatur keren lainnya yang pasti
                            ukurannya lebih kecil.. </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="https://youtu.be/6fNyNEjYU3M" onclick="handleClick()">View On Youtube</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top"
                         data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                         alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                         src="Gambar/Kebun Raya Baturraden.jpg" data-holder-rendered="true">
                    <div class="card-body">
                        <h4>Kebun Raya Baturaden</h4>
                        <h8>Rp. 40.000</h8>
                        <p class="card-text">Kebun Raya Baturraden merupakan tempat wisata di Purwokerto yang mengoleksi
                            aneka tanaman, terutama tanaman bunga anggrek. Pembangunan tempat ini adalah ide dari
                            Presiden kelima Indonesia, Megawati Soekarnoputri, pada acara Penutupan Jambore Nasional
                            2021</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="https://youtu.be/riAjjTTe9-A" onclick="handleClick()">View On Youtube</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top"
                         data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                         alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                         src="Gambar/Curug Gomblang.jpg" data-holder-rendered="true">
                    <div class="card-body">
                        <h4>Curug Gomblang</h4>
                        <h8>Rp. 30.000</h8>
                        <p class="card-text">Kalau ngomong tempat wisata terbaik di Purwokerto maka tidak bisa lepas
                            dari yang namanya curug atau air terjun. Kali ini kita akan berbicara tentang air terjun
                            atau yang dikenal dengan sebutan Curug Gomblang. Berada di daerah yang tidak jauh dari
                            Purwokerto yaitu sekita 42 menit saja untuk menempuh perjalanan menuju tempat wisata ini.
                            Kamu juga bisa memilih untuk menggunakan motor atau mobil untuk mencapai spot yang keren
                            ini.Air terjun ini tidak terlalu tinggi, namun karena didukung oleh pemandangan sekitarnya
                            yang menampilkan bentangan hijau yang asri lagi menenangkan, membuat view yang ditampilkan
                            sangatlah menakjubkan. Belum lagi posisi yang pas untuk kamu para pemburu spot foto-foto ala
                            instagramable. Cocok banget deh.. </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="https://youtu.be/zBJTtaesbOA" onclick="handleClick()">View On Youtube</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<script src="Assets/js/jquery.js" type="text/javascript"></script>
<script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="Assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script> function handleClick() {
        alert('Anda akan menuju ke link Video Youtube')
    } </script>
</script>

</body>

</html>
