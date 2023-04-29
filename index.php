<?php 
  include 'connector.php';

  $query = mysqli_query($con, "SELECT * FROM tbl_komentar");

?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ana &#9829; Putra</title>
    <link rel="icon" type="image/png" href="image/favicon-32x32.png" />
   
    <!-- Bulma Version 0.8.x-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bulma-tooltip@0.1.5/dist/bulma-tooltip.min.css" />
    <link rel="stylesheet" type="text/css" href="css/menikah.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.countdown.css" />
   
    <script
      src="https://kit.fontawesome.com/2828f7885a.js"
      integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG"
      crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.coundown.js"></script>

    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23064379-20"></script>
    <!-- Begin Script for Countdown -->
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23064379-20');
    </script>
    <!-- Begin Script for Countdown -->

    <!-- Github Button -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </head>

  <body>
 
</script>
    <!-- Begin Preloader -->

    <div class="preloader-wrapper">
    
  <!--    <iframe src="audio.mp3" allow="autoplay" style="display:no" id="iframeAudio">
      </iframe> 
      
        <script> var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
      if (!isChrome){
          $('#iframeAudio').remove()
      }
      else {
          $('#playAudio').remove() // just to make sure that it will not have 2x audio in the background 
      }
      </script> -->
      <div class="preloader">
        <img src="image/favicon.png" alt="Flower" />
       
      </div>
    </div>
    <!-- End Preloader-->
    <!-- Begin Header -->

    <div class="header-wrapper" id="home">
      <!-- Begin Hero -->
      <section class="hero is-large ">
      
      

        <!-- Begin Mobile Nav -->
        <nav class="navbar is-transparent is-hidden-desktop">
          <!-- Begin Burger Menu -->
          <div class="navbar-brand is-fixed-top">
            <div class="navbar-burger burger" data-target="mobile-nav">
              <span class="span"></span>
              <span class="span"></span>
              <span class="span"></span>
            </div>
          </div>
          <!-- End Burger Menu -->
          <div id="mobile-nav" class="navbar-menu">
            <div class="navbar-end">
            <div class="navbar-item">
                <a class="navbar-item" href="#home">
                  Home
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#Waktu">
                  Waktu
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#lokasi">
                  Lokasi
                </a>
              </div>
              
              <div class="navbar-item">
                <a class="navbar-item" href="#tentang-ana-putra">
                  Tentang Ana dan Putra
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#rsvp">
                  RSVP
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#gift">
                  Kirim Kado
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#doa">
                  Kirim Do'a
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#sponsor">
                  Sponsor
                </a>
              </div>
            </div>
          </div>
        </nav>
        <!-- End Mobile Nav -->
         
        <!-- Begin Hero Content-->
        <div class="hero-body">
        
                      
          <div class="container has-text-centered" data-aos="zoom-out-down" data-aos-duration="5000">
          <h5 class="kepada">Kepada  : <br>
                      <?php
                      $ke = $_GET['ke'];
                      echo   ($ke);                     
                      ?>
                      </h5>
            <h2 class="subtitle">Di undangan untuk menghadiri acara pernikahan</h2>
            
            <h1 class="title">Ana <span>&#38;</span> Putra</h1>
            <h5 class="subtitle tempatwaktu">
              
                Minggu, 20 Maret 2022 
                </br>
                Kp. Sawah Dalam, Panunggangan Utara
                </br>
                Tangerang Kota
              
            </h5>
          </div>
          <!-- Start Countdown -->       
          <div>
            <ul id="hitungmundur" >
              <li><span class="days">00</span><p class="days_text">Hari</p></li>
              <li class="separator">:</li>
              <li><span class="hours">00</span><p class="hours_text">Jam</p></li>
              <li class="separator">:</li>
              <li><span class="minutes">00</span><p class="minutes_text">Menit</p></li>
              <li class="separator">:</li>
              <li><span class="seconds">00</span><p class="seconds_text">Detik</p></li>
            </ul>
            <div class="spasi">
            </div>
            <script type="text/javascript">
              var now = new Date();
              var day = now.getDate();
              var month = now.getMonth() + 1;
              var year = now.getFullYear() + 1;
          
              var nextyear = month + '/' + day + '/' + year + ' 07:07:07';
              var harih = '03/20/2022 18:00:00';

              $('#hitungmundur').countdown({
                date: harih, // TODO Date format: 07/27/2017 17:00:00
                offset: +7, // TODO Your Timezone Offset
                day: 'Hari',
                days: 'Hari'
              }, function () {
                alert('Acara Sudah Terlaksana!, Jika ingin melihat Beberapa Foto acara salin atau Klik https://bit.ly/3Kt8UBd ');
              });
            </script>  
            
            <audio controls loop   >
            
      <source src="audio.mp3" type="audio/mpeg" />
      </audio>
      <h1 class="sound">Alternatif Backsound  </h1>
          </div>
          <!-- End Countdown -->
        </div>
        <!-- End Hero Content-->
        <!-- Begin Hero Menu -->
        <div class=" hero-foot ">
          <div class="hero-foot--wrapper">
            <div class="columns">
              <div class=" column is-12 hero-menu-desktop has-text-centered ">
                <ul>
                  <li >
                    <a href="#home">Home</a>
                  </li>
                  <li>
                    <a href="#Waktu">Waktu</a>
                  </li>
                  <li>
                    <a href="#lokasi">Lokasi </a>
                  </li>
                  <li>
                    <a href="#tentang-ana-putra">Tentang Ana & Putra</a>
                  </li>
                  <li>
                    <a href="#rsvp">RSVP</a>
                  </li>
                  <li>
                    <a href="#gift">Kirim Kado</a>
                  </li>
                  <li>
                    <a href="#doa">Kirim Do'a</a>
                  </li>
                  <li>
                    <a href="#sponsor">Sponsor</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- End Hero Menu -->
      </section>
      <!-- End Hero -->
    </div>
    <!-- End Header -->

    <!-- Begin Main Content -->
    <div class="main-content">
    <!-- Begin regular-section-->
     <section class="section-light no-padding-top regular-section has-text-centered has-vertically-aligned-content" id="regular-section">
        
        <div data-aos="fade-up" data-aos-easing="linear">
          <img src="image/bismillah.png" class="bismillah has-text-centered" alt="Bismillahirrahmaanirrahiim">
        </div>

        <p class="bodytext" data-aos="fade-up" data-aos-easing="linear">
          Assalamu'alaikum Warahmatullahi Wabarakatuh.
          <br />
          Dengan memohon rahmat dan ridha Allah swt, 
          <br />
          kami bermaksud mengundang Bapak/Ibu/Saudara/Saudari pada acara pernikahan kami
        </p>

        <span class="space40px"></span>
        <span class="space40px"></span>

        
          <div class="nama-lengkap"data-aos="fade-down" >
            Rizkiana Nurhidayah, S.Kom.
          </div>
          <div class="ampersand">&</div>
          <div class="nama-lengkap"data-aos="fade-up">
          Putra Kamulyan, S.Kom.
          </div>
           
        
        <span class="space40px"></span>
        <div data-aos="fade-up" data-aos-easing="linear">
          <img src="image/divider-leaves.png" class="divider has-text-centered" alt="~~~">
        </div>
        <span class="space40px"></span>
        <span class="space40px"></span>
      </section>
      <!-- End regular-section-->    
      
      <!-- Begin Waktu Section -->
      <section class="section-dark" id="Waktu">
        <div class="container">

          <div class="column is-12 regular-section" data-aos="fade-up" data-aos-easing="linear">
            <h1 class="title has-text-centered section-title">Waktu</h1>
          </div>
          <div class="columns is-multiline" data-aos="fade-up" data-aos-easing="linear">
            <div
              class="column is-4 has-vertically-aligned-content">
            
              <p class="is-larger has-text-centered">
                  <div class="waktu tanggal-hari has-text-centered"data-aos="fade-up">Minggu</div> 
                  <div class="waktu tanggal-angka has-text-centered"data-aos="fade-down">20</div>
                  <div class="waktu tanggal-bulan has-text-centered"data-aos="fade-down">Maret 2022</div>
              </p>
            
            </div>
            <div class=" column is-4 has-vertically-aligned-content">
            
              <p class=" waktu is-larger has-text-centered" data-aos="zoom-in-down">
                Akad Nikah:
                <br>
                <strong>08.00 WIB</strong>
              </p>
            
            </div>

            <div class="column is-4 has-vertically-aligned-content">
              
              <h1 class="waktu is-larger has-text-centered" data-aos="zoom-in-down">
                Resepsi:
                <br>
                <strong>11.00  - 18.00 WIB</strong>
              </h1>
              
              
            </div>

          </div>
        </div>
        <div class="space40px"></div>
        <div class="main-content has-text-centered" data-aos="fade-up" data-aos-easing="linear">
          <a href="https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=NGgzdW00NG84dXFwMzcwNXYxbGliNGxzaWggZGFlbmdkb2FuZ0Bt&amp;tmsrc=daengdoang%40gmail.com" target="_blank" class="button has-tooltip btn-cta" data-tooltip="Add to Calendar" target="_blank" data-aos="zoom-in">
            <i class="far fa-calendar-plus"></i>
            &nbsp;&nbsp;Google Calendar
          </a>
        </div>
      </section>
      <!-- End Waktu Content -->

      <!-- Begin Lokasi Section -->
      <section class="section-darker" id="lokasi" >
        <div class="container">
          <div class="column is-12 regular-section" data-aos="fade-up" data-aos-easing="linear">
            <h1 class="title has-text-centered section-title">Lokasi</h1>
            <p class="tempat is-larger has-text-centered" data-aos="zoom-in-down">
              <strong>Tempat Mempelai Wanita</strong>
              <br>
              Kp. Sawah Dalam RT007/RW004 , Panunggangan Utara 
              <br>
              Kec. Pinang, Tangerang Kota, Jawa Barat
              <br>
            </p>
          </div>
          <div class="section-map" data-aos="fade-up" data-aos-easing="linear">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3354154593576!2d106.64119921476913!3d-6.219424795497823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f959a225f579%3A0x72f718755385bbd5!2sMasjid%20An%20Nafiun%20(LDII)!5e0!3m2!1sid!2sid!4v1644998278711!5m2!1sid!2sid"  width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
          <div class="space40px"></div>
          <div class="has-text-centered" data-aos="fade-up" data-aos-easing="linear">
            <a href=https://goo.gl/maps/QmCmHnbpYpLsvKC69 class="button btn-cta" target="_blank" data-aos="zoom-in">
              <i class="far fa-directions"></i>
              &nbsp;&nbsp;Google Maps
            </a>
          </div>
        </div>
      </section>
      <!-- End Lokasi Content -->

      <!-- Begin tentang putra dan ana -->
      <section class="section-light regular-section is-fullheight" id="tentang-ana-putra">
        <div class="container">
          <div class="columns is-multiline">  
          <div class="column has-text-centered is-12 prolog">
            <h1 class="title has-text-centered section-title" data-aos="fade-up" data-aos-easing="linear">Tentang Ana dan Putra</h1>
            

          
          <!-- IMAGES -->  
                              

                    <!-- The Modal -->
                    <div id="myModal" class="modal">

                      <!-- The Close Button -->
                      <span class="close">&times;</span>

                      <!-- Modal Content (The Image) -->
                      <img class="modal-content" id="img01">
                      
                      <!-- Modal Caption (Image Text) -->

                      
                      <div id="caption"></div>
                    </div>
              <div class=" tile">
              <div class="tile is-ancestor">
              <div class="tile is-parent">
              <article class="tile is-child foto1 notification foto1" data-aos="flip-up" data-aos-easing="linear">
              <div class="content">
                
                <p class="title-foto" >1 Desember 2019</p>
                <p class="subtitle-foto" >
                  <img class="myImages" id="myImg" src="image/sawangan.png" alt=" " style="width:100%;max-width:300px">
                  <br class="kepada">Pertemuan pertama di sawangan permata buana depok, dalam suatu acara dimana kita sama - sama berpartisipasi dalam acara tersebut.
                </p>
                
                
              </div>
              </article>
              </div>  
              <div class="tile is-parent">
              <article class="tile is-child notification foto2" data-aos="zoom-in-up" data-aos-easing="linear">
              <div class="content">
                <p class="title-foto">
                  18 September 2021                
                 </p>
                <p class="subtitle-foto">
                  <img class="myImages" id="myImg" src="image/mas.kiki.png" alt=" " style="width:100%;max-width:300px">
                  <br>Pertemuan kedua di rumah sang perempuan lewat perantara Mb Tika, Mb Sifa dan Mas Kiki dimana pertama kalinya Putra memutuskan untuk ke rumah Ana untuk memperkenalkan diri dengan keluarganya. 
                  </p>   
                  
              </div>            
            </article>
          </div>
          <div class="tile is-parent">
            <article class="tile is-child notification foto3" data-aos="zoom-out-up" data-aos-easing="linear">
              <div class="content">  
                <p class="title-foto">
                 21 November 2021
                </p>
                <p class="subtitle-foto">
                  <img class="myImages" id="myImg" src="image/taaruf.jpg" alt=" " style="width:100%;max-width:300px">
              
                  <br>Proses Taaruf berlanjut saat menghadiri pernikahan sahabat Ana , saling berkenalan dengan sahabat di acara tsb. 
                </p>
                </div>
            </article>
          </div>
          </div>
          </div>
          <div class="space24px"></div>
          <div class="tile is-ancestor">
          <div class="tile is-parent">
          <article class="tile is-child notification foto4" data-aos="flip-right" data-aos-easing="linear">
            <div class="content">
              <p class="title-foto">11 Januari 2022</p>
              <img class="myImages" id="myImg" src="image/lamaran.jpg" alt=" " style="width:100%;max-width:300px">
            
              <p class="subtitle-foto">Proses Lamaran dimana Putra memutuskan untuk melamar Ana sebagai calon istri sekaligus calon suami bagi Ana
              </p>
              </div>
          </article>
          </div>
          <div class="tile is-parent">
          <article class="tile is-child notification foto5" data-aos="flip-left" data-aos-easing="linear">
            <div class="content">
              <p class="title-foto">30 Januari 2022</p>
              <img class="myImages"id="myImg" src="image/pertemuan keluarga.jpeg" alt=" " style="width:100%;max-width:300px">
          
              <p class="subtitle-foto">Pertemuan Keluarga , saling membicarakan tanggal pernikahan dan kelangsungan acara hingga akhirnya diputuskan akan menikah insyaallah pada Maret 2022 </p>
            </div>
            </article>
          </div>
          <div class="tile is-parent">              
          <article class="tile is-child notification foto6" data-aos="flip-down" data-aos-easing="linear">
            <div class="content">
              <p class="title-foto">20 Maret 2022</p>
              <img class="myImages"id="myImg" src="image/we.png" alt="" style="width:100%;max-width:300px">
          
              <p class="subtitle-foto">Tidak pernah menyangka 20 Maret 2022 adalah tanggal yang insyaallah akan disegerakan pernikahan kami, Mohon untuk Doa restunya</p>
            </div>
                  </article>
              </div>
            </div>   
          <!-- IMAGES -->
          <div class="space40px"></div>
            <div data-aos="fade-up" data-aos-easing="linear">
              <img src="image/divider-leaves.png" class="divider has-vertically-align" alt="~~~">
            </div> 
            
            <div class="space40px"></div>
            <div class="space40px"></div>

          </div>
          </div>
        </section>
      <!-- End Tentang Ana dan Putra -->

      <!-- Begin RSVP Content -->
      <section class="section-dark contact" id="rsvp">
        <div class="container">
          <div class="columns is-multiline">          
            <div class="column is-12 prolog">
              <h1 class="title has-text-centered section-title" data-aos="fade-up" data-aos-easing="linear">Konfirmasi Kehadiran</h1>
            </div>
            <div class="column is-12 prolog has-text-centered" data-aos="fade-up" data-aos-easing="linear">
              <p class="h2 subtitle">
                Merupakan suatu kehormatan dan kebahagiaan bagi kami
                <br>
                apabila Bapak/Ibu/Saudara/Saudari berkenan hadir
                memberikan doa restu.
                <br>
                <br>
                Jika bisa hadir kami tunggu konfirmasinya, 
                <br>
                Informasi: Di meja penerima tamu akan kami sediakan hand sanitizer dan pemeriksaan suhu tubuh.
                <br>
                <br>
                Jika tidak memungkinkan untuk hadir di pernikahan kami, tidak mengapa,
                <br> 
                semoga bisa berjumpa di lain kesempatan
                <br>
                <br>
                Stay safe & jaga kesehatan ya :)
                </p>
     
              <a href="https://api.whatsapp.com/send?phone=6282210951053&text=Halo%20Mba Ana,%20saya%20akan%20datang%20di%20acara%20pernikahan&source=&data=" class="button btn-whatsapp" target="_blank" data-aos="zoom-in">
                <i class="fab fa-whatsapp"></i>
                &nbsp;&nbsp;Kabari Ana
              </a>
              
              <a href="https://api.whatsapp.com/send?phone=6283818393029&text=Halo%20Mas Putra,%20saya%20akan%20datang%20di%20acara%20pernikahan&source=&data=" class="button btn-whatsapp" target="_blank" data-aos="zoom-in">
                <i class="fab fa-whatsapp"></i>
                &nbsp;&nbsp; Kabari Putra 
              </a >
              <div class="space40px"></div>

              <div class="space40px"></div>
              <div data-aos="fade-up" data-aos-easing="linear">
                <img src="image/divider-leaves.png" class="divider has-text-centered" alt="~~~">
              </div>
              <div class="space40px"></div>
              <p class="h2 subtitle" data-aos="fade-up" data-aos-easing="linear">
                Kami yang berbahagia,
                <br>
                <a class="instagram" href="https://instagram.com/rizkiananh" target="_blank" alt="Instagram Sherly">
                  <i class="fab fa-instagram"></i> rizkiananh
                </a>
                &nbsp
                <a class="instagram" href="https://instagram.com/putrakamulyan" target="_blank" alt="Instagram Daeng">
                  <i class="fab fa-instagram"></i> putrakamulyan
                </a>
              </p>

            </div>
 
         </div>
        </div>
      </section>
      <section class="section-light regular-section is-fullheight " id="gift">
      
      <h1 class="title has-text-centered section-title aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear">Kirim Kado untuk Ana <span style="color: #e25555;">&#9829;</span> Putra</h1>
        <div class="norek-container" data-aos="fade-up" data-aos-easing="linear">
          <div class="has-text-centered text-norek"><img src="image/bca.png" width="100" height="100"alt="BCA" style="margin-left:10px;">
            <p class="has-text-centered text-norek">Rizkiana Nurhidayah</p>
            <button class="button is-primary is-outlined" data-aos="fade-up-left" onclick="copyRekening();" style="margin-left:10px;">Salin</button>
          <h2 class="title has-text-centered text-norek">1620016248</h2>
          
        </div>
      </section>
      <section class="section-dark contact " id="doa">
 
        <div class="comment-container">
          <h1 class="title has-text-centered section-title aos-init aos-animate ">Kirimkan Do'a dan Ucapan Selamat</h1>
          <div class="form-comment">
            <form action="postkomentar.php?ke=<?php echo $ke ?>" method="post">
              <div class="field">
                <label class="label">Nama Anda</label>
                <input class="input" type="text" name="nama" id="nama" placeholder="Ketik nama anda disini" required>
              </div>
              <div class="field">
                <label class="label">Ucapan</label>
                <textarea name="isi" id="isi" cols="30" rows="10" placeholder="Ketik ucapan dan doa anda disini" class="textarea" required></textarea>
              </div>
              <button class="button btn is-primary is-outlined" style="align-self:flex-start">Kirim</button>
            </form>
          </div>
          <?php while($row = mysqli_fetch_array($query)) { ?>
            <div class="card">
            <div class="card-content">
              <div class="content">
                <h5 style="color: brown"><?php echo $row['nama']; ?></h5>
                <?php echo strip_tags($row['isi']); ?>
              </div>
            </div>
          </div>
          <?php } ?>
          </div>
        </div>
        
      </section>

      <!-- End RSVP Content -->
      
      <section class="section-light regular-section is-fullheight " id="sponsor">
                    <div class="comment-container section-light">
                    <h1 class=" section-light title has-text-centered section-title aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear">Mampir ke Sponsor kami ya &#129392;</h1>
                    <div class="img column is-12" >
                    
                      <a href="https://www.instagram.com/arakisolusi.id/" target="_blank" rel="noopener noreferrer" class="has-vertically-align">  
                      <img src="image/akari2.png" width="100" height="100"alt="araki" data-aos="fade-up-right" data-aos-easing="linear" data-aos-offset="0">
                      <a href="https://www.instagram.com/acoexapparel.id/" target="_blank" rel="noopener noreferrer" class="has-vertically-align">  
                      <img src="image/acoex.png" width="100" height="100"  alt="lukman" data-aos="fade-up-left" data-aos-easing="linear" data-aos-offset="0"> 
                      <a href="https://www.instagram.com/angkringandjamus354/" target="_blank" rel="noopener noreferrer" class="has-vertically-align">  
                      <img src="image/jamus.png" width="100" height="100"alt="jamus" data-aos="fade-up-right" data-aos-easing="linear"data-aos-easing="ease-out-cubic"
                data-aos-duration="2000"data-aos-offset="0">
                      <a href="https://www.instagram.com/flowworldwide/" target="_blank" rel="noopener noreferrer" class="has-vertically-align">  
                      <img src="image/fww.png" width="100" height="100"alt="fww" data-aos="fade-up-left" data-aos-easing="linear" data-aos-easing="ease-out-cubic"
                data-aos-duration="2000"data-aos-offset="0">
                      <a href="https://www.instagram.com/goldenmom.id//" target="_blank" rel="noopener noreferrer" class="has-vertically-align">  
                      <img src="image/ana.jpeg" width="100" height="100"alt="ana"data-aos="fade-up-right" data-aos-easing="linear"data-aos-easing="ease-out-cubic"
                data-aos-duration="4000" data-aos-offset="0">
                      <a href="https://instagram.com/noermsport.id/" target="_blank" rel="noopener noreferrer" class="has-vertically-align">  
                      
                      <img src="image/aqin.jpg" width="100" height="100"alt="aqin" data-aos="fade-up-left" data-aos-easing="linear"data-aos-easing="ease-out-cubic"
                data-aos-duration="4000"data-aos-offset="0">
                      <a href="http://shopee.co.id/madirestore/" target="_blank" rel="noopener noreferrer" class="has-vertically-align">  
                      <img src="image/andi.jpg" width="100" height="100" padding="50" alt="andi" data-aos="fade-up-right" data-aos-easing="linear"data-aos-easing="ease-out-cubic"
                data-aos-duration="6000"data-aos-offset="0">
                      <a href="https://www.instagram.com/mafiasoes/" target="_blank" rel="noopener noreferrer" class="has-vertically-align">  
                      <img src="image/bu.anwar.jpeg" width="100" height="100"alt="bu.anwar" data-aos="fade-up-left" data-aos-easing="linear"data-aos-easing="ease-out-cubic"
                data-aos-duration="6000"data-aos-offset="0">
                      <a href="https://www.instagram.com/seserahan_madjog_id/" target="_blank" rel="noopener noreferrer" class="has-vertically-align">  
                      <img src="image/tika.jpeg" width="100" height="100"alt="tika" data-aos="fade-up-right" data-aos-easing="linear"data-aos-easing="ease-out-cubic"
                data-aos-duration="8000"data-aos-offset="0">
                      <a href="https://api.whatsapp.com/send?phone=6285591867476&text=Mas Reza , saya mau pesen, bisa sampaikan menunya? &source=&data=" target="_blank" rel="noopener noreferrer" class="has-vertically-align">  
                      <img src="image/sipa.jpeg" width="100" height="100"alt="sipa" data-aos="fade-up-left" data-aos-easing="linear"data-aos-easing="ease-out-cubic"
                data-aos-duration="8000"data-aos-offset="0">
                      <a href="https://gofood.co.id/jakarta/restaurant/mie-ayam-bakso-pandawa-313-bintaro-17ba5b0a-9859-4a4a-9730-13b8327356da" target="_blank" rel="noopener noreferrer" class="has-vertically-align">  
                      <img src="image/akrom.jpeg" width="100" height="100"alt="akrom" data-aos="fade-up-right" data-aos-easing="linear"data-aos-easing="ease-out-cubic"
                data-aos-duration="10000"data-aos-offset="0">
                      <a href="https://api.whatsapp.com/send?phone=6281511517354&text=Mba Aida, saya mau pesan, Bisa sampaikan list barang yang ready?" target="_blank" rel="noopener noreferrer" class="has-vertically-align">  
                      <img src="image/aida.jpeg" width="100" height="100"alt="aida" data-aos="fade-up-left" data-aos-easing="linear"data-aos-easing="ease-out-cubic"
                data-aos-duration="10000"data-aos-offset="0">
                      

                      
                      </div>
                      </div>
        </section>
    
        <!-- End Main Content -->
   
    <!-- Begin Footer -->
    <div class="footer"  data-aos="zoom-out-down">
      <a href="#a">
      <p class="has-vertically-align-center">Thank's To : <br>  </p>
      </a>
      <div class="container">
        <a href="#a">
        <p class="has-vertically-align">Allah SWT.  </p>
        </a>   
        
        <a href="https://bulma.io" class="has-vertically-align" target="_blank" rel="noopener noreferrer">
          <img src="https://bulma.io/images/made-with-bulma.png"  alt="Made with Bulma">
        </a>
        <a href="https://github.com/" target="_blank"> 
          <img src="image/github.png" target="_blank" alt="github"/>
        </a>
        <a href="#a">
        <p class="has-vertically-align">461 PBB and PANUT  </p>
        </a> 
        <a href="https://www.senkom.or.id/" target="_blank" rel="noopener noreferrer" class="has-vertically-align">
          <img src="image/senkom.png" alt="Senkom Mitra Porli"/>
        </a>
        <a href="https://www.instagram.com/gen.panunggangan/" target="_blank" rel="noopener noreferrer" class="has-vertically-align">  
          <img src="image/panut.png" width="100" height="600"alt="ana" >
          <a href="https://api.whatsapp.com/send?phone=6282321158479" target="_blank" rel="noopener noreferrer" class="has-vertically-align">
          <p class="has-vertically-align"> &#64;Bre Arfan  </p>
        </a>
        <a href="https://www.instagram.com/generuspbb/" target="_blank" rel="noopener noreferrer" class="has-vertically-align">  
          <img src="image/generuspbb.png" width="100" height="600"alt="pbb" >
         
        <a href="https://www.instagram.com/keputrian_desa_panunggangan/" target="_blank" rel="noopener noreferrer" class="has-vertically-align">  
          <img src="image/KDP.jpeg" width="100" height="600"alt="KDP" >
        
      </div>
      
      <div> 
        <a href="https://api.whatsapp.com/send?phone=6283818393029" target="_blank" rel="noopener noreferrer" class="has-vertically-align">
          <p class="has-vertically-align"> &#169; MubaleghJoss  </p>
        </a>
       
      </div>
    </div>
    <!-- End Footer -->

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/menikah.js"></script>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
      function copyRekening() {
        navigator.clipboard.writeText('1620016248');  
      }
        
      AOS.init({
        easing: "ease-out",
        duration: 800,
      });
    </script>

<!-- script hujan love -->
<script type='text/javascript'>//<![CDATA[
  /******************************************
  * Snow Effect Script- By Altan d.o.o. (http://www.altan.hr/snow/index.html)
  * Visit Dynamic Drive DHTML code library (http://www.dynamicdrive.com/) for full source code
  * Last updated Nov 9th, 05 by DD. This notice must stay intact for use
  ******************************************/
  //Configure below to change URL path to the snow image
  var snowsrc="image/favicon-16x16.png";
  // Configure below to change number of snow to render
  var no = 50;
  // Configure whether snow should disappear after x seconds (0=never):
  var hidesnowtime = "0";
  // Configure how much snow should drop down before fading ("windowheight" or "pageheight")
  var snowdistance = "pageheight";
  ///////////Stop Config//////////////////////////////////
     
       var ie4up = (document.all) ? 1 : 0;
       var ns6up = (document.getElementById&&!document.all) ? 1 : 0;
     
      function iecompattest(){
      return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
      }
     
       var dx, xp, yp;    // coordinate and position variables
       var am, stx, sty;  // amplitude and step variables
       var i, doc_width = 800, doc_height = 400; 
       
       if (ns6up) {
      doc_width = self.innerWidth;
      doc_height = self.innerHeight;
       } else if (ie4up) {
      doc_width = iecompattest().clientWidth;
      doc_height = iecompattest().clientHeight;
       }
     
       dx = new Array();
       xp = new Array();
       yp = new Array();
       am = new Array();
       stx = new Array();
       sty = new Array();
       snowsrc=(snowsrc.indexOf("dynamicdrive.com")!=-1)? "snow.gif" : snowsrc
       for (i = 0; i < no; ++ i) {  
      dx[i] = 0;                        // set coordinate variables
      xp[i] = Math.random()*(doc_width-50);  // set position variables
      yp[i] = Math.random()*doc_height;
      am[i] = Math.random()*20;         // set amplitude variables
      stx[i] = 0.02 + Math.random()/10; // set step variables
      sty[i] = 0.7 + Math.random();     // set step variables
       if (ie4up||ns6up) {
        if (i == 0) {
       document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><a href=\"http://www.ahmadrifai.net\"><img src="+snowsrc+" border=\"0\"><\/a><\/div>");
        } else {
       document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><img src="+snowsrc+" border=\"0\"><\/div>");
        }
      }
       }
     
       function snowIE_NS6() {  // IE and NS6 main animation function
      doc_width = ns6up?window.innerWidth-10 : iecompattest().clientWidth-10;
       doc_height=(window.innerHeight && snowdistance=="windowheight")? window.innerHeight : (ie4up && snowdistance=="windowheight")?  iecompattest().clientHeight : (ie4up && !window.opera && snowdistance=="pageheight")? iecompattest().scrollHeight : iecompattest().offsetHeight;
      for (i = 0; i < no; ++ i) {  // iterate for every dot
        yp[i] += sty[i];
        if (yp[i] > doc_height-50) {
       xp[i] = Math.random()*(doc_width-am[i]-30);
       yp[i] = 0;
       stx[i] = 0.02 + Math.random()/10;
       sty[i] = 0.7 + Math.random();
        }
        dx[i] += stx[i];
        document.getElementById("dot"+i).style.top=yp[i]+"px";
        document.getElementById("dot"+i).style.left=xp[i] + am[i]*Math.sin(dx[i])+"px";  
      }
      snowtimer=setTimeout("snowIE_NS6()", 10);
       }
     
      function hidesnow(){
       if (window.snowtimer) clearTimeout(snowtimer)
       for (i=0; i<no; i++) document.getElementById("dot"+i).style.visibility="hidden"
      }
       
     
     if (ie4up||ns6up){
      snowIE_NS6();
       if (hidesnowtime>0)
       setTimeout("hidesnow()", hidesnowtime*10)
       }
  //]]></script> 

 <!-- scrip buat foto modal -->
 <script>
    // Get the modal
  var modal = document.getElementById("myModal");
  
  // create references to the modal...
var modal = document.getElementById('myModal');
// to all images -- note I'm using a class!
var images = document.getElementsByClassName('myImages');
// the image in the modal
var modalImg = document.getElementById("img01");
// and the caption in the modal
var captionText = document.getElementById("caption");

// Go through all of the images with our custom class
for (var i = 0; i < images.length; i++) {
  var img = images[i];
  // and attach our click listener for this image.
  img.onclick = function(evt) {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }
}

var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
  modal.style.display = "none";
}
  </script>

  <!-- klik kanan non aktif -->
  <script>
      var pesen="Mohon doa restu dan Jangan lupa mampir ke sponsor kami ";
      ///////////////////////////////////
      function clickIE4(){if (event.button==2){alert(pesen);return false;}}
      function clickNS4(e){if (document.layers||document.getElementById&&!document.all){if (e.which==2||e.which==3){alert(pesen);return false;}}}
      if (document.layers){document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS4;}
      else if (document.all&&!document.getElementById){document.onmousedown=clickIE4;}
      document.oncontextmenu=new Function("alert(pesen);return false")
      </script> 
</body>
</html>
