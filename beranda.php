<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 Information Center</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="slider.css">
    <link rel="stylesheet" href="komentar.css">
    <link rel="stylesheet" href="card.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="bar">
            <div class="logo"><img src="images/logoreal.png" style="width: 1.5cm; height: 1.5cm;" /></div>
            <div class="logo-words">COVID-19 Information Center</div>
            <div class="menu">
                <ul>
                    <li class="current"><a href="beranda.php">BERANDA</a></li>
                    <li><a href="tentang.html">TENTANG</a></li>
                    <li><a href="data.html">DATA</a></li>
                    <li><a href="gejala.html">GEJALA</a></li>
                    <li><a href="pencegahan.html">PENCEGAHAN</a></li>
                    <li><a href="vaksinasi.html">VAKSINASI</a></li>
                </ul>
            </div>
            <div class="navbar">
                <a class="toggler-navbar">
                    <div class="hamburger-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
            <div class="sidebar">
                <ul>
                    <li class="active"><a href="beranda.php">BERANDA</a></li>
                    <li><a href="tentang.html">TENTANG</a></li>
                    <li><a href="data.html">DATA</a></li>
                    <li><a href="gejala.html">GEJALA</a></li>
                    <li><a href="pencegahan.html">PENCEGAHAN</a></li>
                    <li><a href="vaksinasi.html">VAKSINASI</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- slide photo -->
    <div class="slider">
        <div class="slides">
            <!-- radio buttons -->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <!-- images -->
            <div class="slide first">
                <img src="images/slide-photo1.jpg" alt="">
            </div>
            <div class="slide">
                <img src="images/slide-photo2.jpg" alt="">
            </div>
            <div class="slide">
                <img src="images/slide-photo3.jpg" alt="">
            </div>
            <!-- automatic slides -->
            <div class="auto-slides">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
            </div>
            <!-- manual slides -->
            <div class="manual-slides">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
            </div>
        </div>
    </div>
    <!-- slide photo end -->

    <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if(counter > 3){
                counter = 1
            }
        }, 5000);
    </script>

    <!-- CARD -->
    <div class="wrap-cards">
        <div class="cards">
            <div class="card">
                <a href="https://covid19.go.id/artikel/2023/06/14/presiden-segera-umumkan-transisi-pandemi-ke-endemi-pada-akhir-juni-2023">
                    <img src="images/card-img1.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">Presiden Segera Umumkan Transisi Pandemi ke Endemi pada Akhir Juni 2023</h4>
                    <p class="card-text">...</p>
                </div>
            </div>
            <div class="card">
                <a href="https://covid19.go.id/artikel/2023/06/09/satgas-covid-19-melakukan-relaksasi-kebijakan-perjalanan-kegiatan-berskala-besar-dan-protokol-kesehatan-masyarakat">
                    <img src="images/card-img2.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">Satgas COVID-19 Melakukan Relaksasi Kebijakan Perjalanan, Kegiatan Berskala Besar dan Protokol Kesehatan Masyarakat</h4>
                    <p class="card-text">...</p>
                </div>
            </div>
            <div class="card">
                <a href="https://inet.detik.com/cyberlife/d-6782038/pandemi-covid-19-selesai-meta-matikan-aturan-misinformasi">
                    <img src="images/card-img3.jpeg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">Pandemi COVID-19 Selesai, Meta Matikan Aturan Misinformasi</h4>
                    <p class="card-text">...</p>
                </div>
            </div>
            <div class="card">
                <a href="https://health.detik.com/berita-detikhealth/d-6775462/3-hal-yang-akan-berubah-setelah-status-darurat-covid-19-ri-dicabut">
                    <img src="images/card-img4.jpeg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">3 Hal yang Akan Berubah setelah Status Darurat COVID-19 RI Dicabut</h4>
                    <p class="card-text">...</p>
                </div>
            </div>
        </div>
    </div>

    <div class="wa">
        <a href="https://api.whatsapp.com/send?phone=6281110500567&text=Halo%20Admin!%20Saya%20ingin%20tanya%20seputar%20covid-19">Hubungi Kami</a>
    </div>

    <div class="inti">
        <!-- preview TENTANG -->
        <section class="pvtentang">
            <img
                src="https://img.freepik.com/free-vector/prevent-epidemic-rebound-concept-illustration_114360-3008.jpg" />
            <div class="kolom">
                    <h1>Coronavirus disease (COVID-19)</h1>
                    <p>Sebelum pandemi covid-19 saat ini, telah ada dua epidemi global dari wabah besar koronavirus sejak pergantian 
                        abad: severe acute respiratory syndrome coronavirus (SARS-CoV) and Middle East respiratory syndrome coronavirus 
                        (MERS-CoV). Jenis coronavirus baru ini yang ditemukan pertama kali di Wuhan, Cina, pada Desember 2019, disebut 
                        sebagai Severe Acute Respiratory Syndrome Coronavirus 2 (SARS-CoV2), penyebab dari Coronavirus Disease-2019 atau 
                        yang biasa kita ketahui sebagai Covid-19.
                    </p>
                    <p><a href="tentang.html" class="tbl1">Selengkapnya</a></p>
            </div>
        </section>

        <!-- preview GEJALA -->
        <section class="pvgejala">
            <div class="kolom">
                <h1>GEJALA</h1>
                    <p>Sesak napas, batuk kering, dan demam 38°C adalah gejala umum dari covid-19. Untuk membuat
                        diagnosis, pemeriksaan laboratorium tambahan akan dilakukan pada individu yang dalam 14 hari 
                        sebelum munculnya gejala telah melakukan perjalanan ke negara terjangkit atau pernah merawat 
                        atau berhubungan dekat dengan penderita COVID-19.</p>
                    <p><a href="gejala.html" class="tbl2">Selengkapnya</a></p>    
            </div>
            <img src="https://img.freepik.com/free-vector/sneezing-concept-illustration_114360-6865.jpg"
                class="gmbr2" />
        </section>

        <!-- preview PENCEGAHAN -->
        <section class="pvcegah">
            <img src="https://img.freepik.com/free-vector/protection-from-coronavirus-tips_74855-5921.jpg"
                class="gmbr3" />
            <div class="kolom">
                <h1>PENULARAN DAN PENCEGAHAN</h1>
                <p>Penderita COVID-19 dapat menyebarkan virus kepada orang lain. Penyakit ini dapat menyebar
                    melalui tetesan kecil dari mulut atau hidung saat batuk atau bersin. Selain itu, seseorang 
                    mungkin terinfeksi COVID-19 ketika mereka tanpa sengaja menghirup droplet yang berasal dari 
                    penderita. Untuk alasan ini, sangat penting bagi kita untuk menjaga jarak minimal satu meter 
                    dari orang yang sakit.</p>
                <p><a href="pencegahan.html" class="tbl3">Selengkapnya</a></p>
            </div>
        </section>

        <!-- preview VAKSINASI -->
        <section class="pvvaksin">
            <div class="kolom">
                <h1>VAKSINASI</h1>
                <p>Vaksin diberikan untuk meningkatkan atau menimbulkan kekebalan seseorang terhadap suatu penyakit
                    sehingga mereka tidak akan sakit atau hanya mengalami sakit ringan dan tidak menjadi sumber penularan. 
                    Pelayanan vaksinasi COVID-19 diberikan di fasilitas pelayanan kesehatan milik pemerintah pusat, 
                    pemerintah daerah provinsi, pemerintah daerah kabupaten/kota, masyarakat/swasta, serta pemerintah daerah 
                    lainnya yang memenuhi persyaratan.
                </p>
                <p><a href="vaksinasi.html" class="tbl4">Selengkapnya</a></p>
            </div>
            <img src="https://img.freepik.com/free-vector/vaccine-concept-illustration_114360-5361.jpg" class="gmbr4" />
        </section>
    </div>

    <!-- KOMENTAR -->
    <div class="container">
        <div class="komentar">
            <div class="kolom">
                <h3>Leave a comment here</h3>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <pre>
                <br>Email        : <input type="text" name="email" class="email"/>
                <br>Comment      : <textarea name="komentar" rows="5" cols="40" class="comment"></textarea><br>
                <input type="submit" value="show" class="show"/> <input type="reset" value="delete" class="delete"/></td><tr>
                </pre>
                </form>
                <div class="output">
                    <?php
                    error_reporting(0);
                    $email=$_POST['email'];
                    $komentar=$_POST['komentar'];
                    if(!empty($email)){echo "From : $email <br>";}
                    if(!empty($komentar)){echo ">> $komentar <br>";}
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- KONTAK -->
    <div class="footer">
        <div class="kontak">
            <div class="footer-kontak">
                <div class="pack-icon">
                    <a href="https://www.facebook.com/KementerianKesehatanRI"><img src="images/fblogo.png"
                            style="width: 0.9cm; height: 0.9cm;"></a>
                    <a href="https://www.twitter.com/KemenkesRI"><img src="images/logotwt-removebg-preview.png"
                            style="width: 0.9cm; height: 0.9cm;"></a>
                    <a href="https://www.instagram.com/kemenkes_ri/"><img src="images/logoig-removebg-preview.png"
                            style="width: 0.9cm; height: 0.9cm;"></a>
                        <div class="hotline">
                            <p><a href="tel:119">119</a></p>
                            <h2>COVID-19 Hotline</h2>
                        </div>
                    <p class="cr">Copyright &copy; 2023 COVID-19 Information Center</p>
                </div>
            </div>
        </div>
    </div>
    <script src="burger.js"></script>
</body>

</html>