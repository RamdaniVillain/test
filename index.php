<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/logo_ponpes.ico" type="image/x-icon">        
    <title>Pondok Pesantren Nurul Hikmah Al Mubarokah</title>

    <link rel="stylesheet" type="text/css" href="style/index.css">
    <link rel="stylesheet" type="text/css" href="style/style1.css" media="all">
    <link rel="stylesheet" type="text/css" href="style/style2.css" media="all">
    <link rel="stylesheet" type="text/css" href="style/style3.css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.6.2" type="text/css" media="all">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <script type="text/javascript" id="www-widgetapi-script" src="https://www.youtube.com/s/player/fb725ac8/www-widgetapi.vflset/www-widgetapi.js" async=""></script>
    <script src="https://www.youtube.com/iframe_api"></script>


    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');
        // isi dengan id facebook ads
        fbq('init', '5512236592675833');
        fbq('track', 'PageView', {
        "source": "landingpress",
        "version": "3.4.2"
        });
    </script>
    <style>
        #admin-login {
            display: none; /* Tersembunyi secara default */
            position: fixed;
            top: 10px; /* Posisi kanan atas */
            right: 10px;
            width: 50px;
            height: 50px;
            z-index: 1000;
            cursor: pointer;
        }
        #admin-login img {
            width: 100%;
            height: 100%;
            border-radius: 50%; /* Membuat gambar bulat */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan */
        }
    </style>
</head>

<body class="home page-template-default page page-id-624 page-sidebar-inactive header-inactive footer-inactive elementor-default elementor-kit-6 elementor-page elementor-page-624 e--ua-blink e--ua-chrome e--ua-webkit" data-elementor-device-mode="tablet">
<div class="site-canvas">
<div id="page" class="site-container">

<div class="site-inner">
<div id="content" class="site-content">
<div class="container">
<div id="primary" class="content-area">
<main id="main" class="site-main">
<article id="post-624" class="entry-page post-624 page type-page status-publish entry">
<header class="entry-header"></header>
<div class="entry-content">
<div data-elementor-type="page" data-elementor-id="624" class="elementor elementor-624">

<!-- Tombol Login Admin -->
<div id="admin-login" onclick="goToAdmin()" style="display: none;">
    <img src="images/logo_ponpes.png" alt="Admin Login">
</div>

<script>
    // Deteksi apakah user adalah admin
    document.addEventListener("DOMContentLoaded", async () => {
        try {
            const response = await fetch('backend/validate-admin.php', { method: 'GET', credentials: 'include' });
            const result = await response.json();

            // Jika user adalah admin, tampilkan tombol login admin
            if (result.isAdmin) {
                const adminButton = document.getElementById("admin-login");
                adminButton.style.display = "block";
            }
        } catch (error) {
            console.error("Error:", error);
        }
    });

    // Fungsi redirect ke halaman admin
    function goToAdmin() {
        window.location.href = "backend/admin-panel.php";
    }
</script>

<section class="elementor-section elementor-top-section elementor-element elementor-element-12d4c6d1 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" 
        data-id="12d4c6d1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-background-overlay"></div>
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4209c2cc" 
                data-id="4209c2cc" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-2e05bbb elementor-widget elementor-widget-html" 
                        data-id="2e05bbb" data-element_type="widget" data-widget_type="html.default">
                    <div class="elementor-widget-container">
                        <!-- OrderOnline Tracker Code -->
                        <!-- End OrderOnline Tracker Code -->
                    </div>
                </div>
                <div class="elementor-element elementor-element-e42c60b elementor-widget elementor-widget-spacer" 
                        data-id="e42c60b" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-c2f5632 elementor-widget elementor-widget-heading" 
                        data-id="c2f5632" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">PENERIMAAN SANTRI BARU</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-075393f elementor-widget elementor-widget-heading space" 
                        data-id="075393f" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default" style="color: #BE0505;">PROGRAM BEASISWA 100% BERMANFAAT <br>&amp; BAROKAH</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-8924542 elementor-widget elementor-widget-heading" 
                        data-id="8924542" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default space">PONDOK PESANTREN TAHFIDZ QURAN</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-6fa9033 elementor-widget elementor-widget-heading" 
                        data-id="6fa9033" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default space">Nurul Hikmah Al Mubarokah</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-5ed6e53 elementor-widget elementor-widget-spacer" 
                        data-id="5ed6e53" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-39a422a3 elementor-widget elementor-widget-heading" 
                        data-id="39a422a3" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Sudah terdaftar di <b> Kementerian Agama RI (NSP: 123456789) 
                        	</b> Serta sudah <b>mencetak banyak Hafidz Qur'an </b> hingga saat ini.
                            <b></b></h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-4437076c elementor-widget elementor-widget-spacer" 
                        data-id="4437076c" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<header class="elementor-section elementor-top-section elementor-element elementor-element-a8b94e3 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" 
        data-id="a8b94e3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-background-overlay"></div>
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-87d66df" 
                data-id="87d66df" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-widget-wrap elementor-element-populated e-swiper-container">
                <div class="elementor-element elementor-element-ed711dd elementor-widget elementor-widget-spacer" 
                        data-id="ed711dd" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-3765a8 elementor-widget elementor-widget-heading" 
                        data-id="3765a8" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">MAU HAFAL 30 JUZ AL-QUR'AN KURANG DARI 1 TAHUN?</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-fc1083d elementor-widget elementor-widget-heading" 
                        data-id="fc1083d" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Dalam waktu <b>kurang dari setahun, 90% santri</b> berhasil menuntaskan hafalan <b>30 Juz.</b></h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-8a7e979 elementor-widget elementor-widget-heading" 
                        data-id="8a7e979" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Bahkan ada yang selesai dalam Waktu 90 Hari!</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-e694781 elementor-arrows-position-inside elementor-widget elementor-widget-image-carousel e-widget-swiper" 
                        data-id="e694781" data-element_type="widget" 
                        data-settings="{&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:25,&quot;sizes&quot;:[]},&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;arrows&quot;,&quot;autoplay_speed&quot;:2000,&quot;slides_to_show_mobile&quot;:&quot;1&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500,&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" 
                        data-widget_type="image-carousel.default" aria-roledescription="carousel" aria-label="Carousel | Horizontal scrolling: Arrow Left &amp; Right">
					
					<?php

                    include "koneksi.php";

                    // Query untuk mengambil data gambar
                    $sql = "SELECT * FROM images_slide ORDER BY `id` ASC";
                    $result = $conn->query($sql);

                    // Pastikan query berjalan dengan benar
                    if ($result === false) {
                      echo "Error pada query: " . $conn->error;
                    } else {
                      // Mulai membangun HTML carousel
                      ?>
                      <div class="elementor-widget-container
                        <?php  
                            if ($result->num_rows < 2) {
                                echo "content-min";
                            }
                        ?>
                      ">
                        <div class="elementor-image-carousel-wrapper swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden" dir="ltr">
                          <div class="elementor-image-carousel swiper-wrapper" aria-live="off" id="swiper-wrapper-5752172510e12b56d">
                            <?php
                            // Loop melalui hasil query jika ada data
                            if ($result->num_rows > 0) {
                              while ($row = $result->fetch_assoc()) {
                                ?>
                                <div class="swiper-slide" role="group" aria-roledescription="slide" data-swiper-slide-index="<?= $row['id'] ?>">
                                  <img decoding="async" class="swiper-slide-image" src="<?= $row['image_url'] ?>" alt="<?= $row['caption'] ?>">
                                  <div class="swiper-slide-caption" style="background-color:#aaa; border-radius: 10px;">
                                    <?= $row['caption'] ?>
                                  </div>
                                </div>
                                <?php
                              }
                            } else {
                            }
                            ?>
                          </div> <!-- Tutup swiper-wrapper -->
                          
                          <div class="elementor-swiper-button elementor-swiper-button-prev" role="button" tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-5752172510e12b56d">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-circle-left" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                              <path d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zM142.1 273l135.5 135.5c9.4 9.4 24.6 9.4 33.9 0l17-17c9.4-9.4 9.4-24.6 0-33.9L226.9 256l101.6-101.6c9.4-9.4 9.4-24.6 0-33.9l-17-17c-9.4-9.4-24.6-9.4-33.9 0L142.1 239c-9.4 9.4-9.4 24.6 0 34z"></path>
                            </svg>
                          </div>
                          <div class="elementor-swiper-button elementor-swiper-button-next" role="button" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-5752172510e12b56d">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-circle-right" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                              <path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"></path>
                            </svg>
                          </div>
                          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div> <!-- Tutup swiper -->
                      </div> <!-- Tutup elementor-widget-container -->

                      <?php
                    }

                    // Tutup koneksi
                    $conn->close();
                    ?>

                </div>
                <div class="elementor-element elementor-element-86040e7 elementor-widget elementor-widget-spacer" 
                        data-id="86040e7" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Program Yayasan -->

<section class="elementor-section elementor-top-section elementor-element elementor-element-f7285ef elementor-section-content-middle elementor-reverse-mobile elementor-section-boxed elementor-section-height-default" 
  data-id="f7285ef" 
  data-element_type="section" 
  data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
  <div class="elementor-container elementor-column-gap-wide">
    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-50147f7" 
      data-id="50147f7" 
      data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
        <div class="elementor-element elementor-element-7dd7051 elementor-widget elementor-widget-spacer" 
          data-id="7dd7051" 
          data-element_type="widget" 
          data-widget_type="spacer.default" style="height: 1px">
          <div class="elementor-widget-container">
            <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
            </div>
          </div>
        </div>

		<div class="elementor-element elementor-element-8f276d2 elementor-widget elementor-widget-heading" data-id="8f276d2" data-element_type="widget" data-widget_type="heading.default">
	        <div class="elementor-widget-container">
	            <h3 class="elementor-heading-title elementor-size-default">Keunggulan Pesantren</h3>
	        </div>
        </div>

        		<div class="elementor-element elementor-element-3e9194c elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" 
		  data-id="3e9194c" 
		  data-element_type="widget" 
		  data-widget_type="icon-list.default">
		  <div class="elementor-widget-container">
		    <ul class="elementor-icon-list-items">
		<?php 
		$program = [
		  "Hafalan Cepat",
		  "Lingkungan yang Mendukung",
		  "Pembinaan Karakter Islami",
		];


		foreach ($program as $item) {
		  ?>
		  <li class="elementor-icon-list-item">
		    <span class="elementor-icon-list-icon">
		      <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
		        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
		      </svg>
		    </span>
		    <span class="elementor-icon-list-text"><?php echo $item; ?></span>
		  </li>
		  <?php
		}
		?>
		    </ul>
		  </div>
		</div>

		<div class="elementor-element elementor-element-31ccb88 elementor-widget elementor-widget-spacer" 
          data-id="31ccb88" 
          data-element_type="widget" 
          data-widget_type="spacer.default">
          <div class="elementor-widget-container">
            <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
            </div>
          </div>
        </div>

		<div class="elementor-element elementor-element-094d40d elementor-widget elementor-widget-heading" 
		  data-id="094d40d" 
		  data-element_type="widget" 
		  data-widget_type="heading.default">
		  <div class="elementor-widget-container">
		    <h3 class="elementor-heading-title elementor-size-default">Program Utama Pesantren</h3>
		  </div>
		</div>
		
		<div class="elementor-element elementor-element-3e9194c elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" 
		  data-id="3e9194c" 
		  data-element_type="widget" 
		  data-widget_type="icon-list.default">
		  <div class="elementor-widget-container">
		    <ul class="elementor-icon-list-items">
		<?php 
		$program = [
		  "Program Tahfidz Intensif",
		  "Pendidikan Formal Berbasis Keislaman",
		  "Pembinaan Dakwah dan Kepemimpinan",
		  "Ekstrakurikuler Islami",
		];


		foreach ($program as $item) {
		  ?>
		  <li class="elementor-icon-list-item">
		    <span class="elementor-icon-list-icon">
		      <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
		        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
		      </svg>
		    </span>
		    <span class="elementor-icon-list-text"><?php echo $item; ?></span>
		  </li>
		  <?php
		}
		?>
		    </ul>
		  </div>
		</div>

		<div class="elementor-element elementor-element-31ccb88 elementor-widget elementor-widget-spacer" 
          data-id="31ccb88" 
          data-element_type="widget" 
          data-widget_type="spacer.default">
          <div class="elementor-widget-container">
            <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
            </div>
          </div>
        </div>

		<div class="elementor-element elementor-element-094d40d elementor-widget elementor-widget-heading" 
		  data-id="094d40d" 
		  data-element_type="widget" 
		  data-widget_type="heading.default">
		  <div class="elementor-widget-container">
		    <h3 class="elementor-heading-title elementor-size-default">Program Sosial Pesantren</h3>
		  </div>
		</div>
		
		<div class="elementor-element elementor-element-3e9194c elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" 
		  data-id="3e9194c" 
		  data-element_type="widget" 
		  data-widget_type="icon-list.default">
		  <div class="elementor-widget-container">
		    <ul class="elementor-icon-list-items">
		<?php 
		$program = [
		  "Santunan Yatim dan Dhuafa",
		  "Bakti Sosial",
		  "Distribusi Mushaf Al-Qur'an",
		];


		foreach ($program as $item) {
		  ?>
		  <li class="elementor-icon-list-item">
		    <span class="elementor-icon-list-icon">
		      <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
		        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
		      </svg>
		    </span>
		    <span class="elementor-icon-list-text"><?php echo $item; ?></span>
		  </li>
		  <?php
		}
		?>
		    </ul>
		  </div>
		</div>

        <div class="elementor-element elementor-element-31ccb88 elementor-widget elementor-widget-spacer" 
          data-id="31ccb88" 
          data-element_type="widget" 
          data-widget_type="spacer.default">
          <div class="elementor-widget-container">
            <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
            </div>
          </div>
        </div>

		<div class="elementor-element elementor-element-8f276d2 elementor-widget elementor-widget-heading" 
		  data-id="8f276d2" 
		  data-element_type="widget" 
		  data-widget_type="heading.default">
		  <div class="elementor-widget-container">
		    <h3 class="elementor-heading-title elementor-size-default">Fasilitas Pesantren</h3>
		  </div>
		</div>
		<?php 
		?>
		<div class="elementor-element elementor-element-3e9194c elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" 
		  data-id="3e9194c" 
		  data-element_type="widget" 
		  data-widget_type="icon-list.default">
		  <div class="elementor-widget-container">
		    <ul class="elementor-icon-list-items">
		<?php 
		$Sosial = [
		  "Asrama Nyaman",
		  "Masjid Besar",
		];


		foreach ($Sosial as $item) {
		  ?>
		  <li class="elementor-icon-list-item">
		    <span class="elementor-icon-list-icon">
		      <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
		        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
		      </svg>
		    </span>
		    <span class="elementor-icon-list-text"><?php echo $item; ?></span>
		  </li>
		  <?php
		}

		?>
		    </ul>
		  </div>
		</div>

      <div class="elementor-element elementor-element-31ccb88 elementor-widget elementor-widget-spacer" 
          data-id="31ccb88" 
          data-element_type="widget" 
          data-widget_type="spacer.default">
          <div class="elementor-widget-container">
            <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
            </div>
          </div>
        </div>

        <div class="elementor-element elementor-element-76c5549 elementor-widget elementor-widget-heading" 
          data-id="76c5549" 
          data-element_type="widget" 
          data-widget_type="heading.default">
          <div class="elementor-widget-container">
            <h3 class="elementor-heading-title elementor-size-default">Lingkungan Pesantren</h3>
          </div>
        </div>
		<div class="elementor-element elementor-element-9f292ce elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" 
		  data-id="9f292ce" 
		  data-element_type="widget" 
		  data-widget_type="icon-list.default">
		  <div class="elementor-widget-container">
		    <ul class="elementor-icon-list-items">
		<?php 
		$lainnya = [
		  "Lokasi Strategis di Pedesaan",
		  "Pemandangan Indah dan Udara Sejuk",
		  "Suasana yang Tenang dan Kondusif",
		  "Halaman Pesantren Luas",
		];


		foreach ($lainnya as $item) {
		  ?>
		  <li class="elementor-icon-list-item">
		    <span class="elementor-icon-list-icon">
		      <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
		        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
		      </svg>
		    </span>
		    <span class="elementor-icon-list-text"><?php echo $item; ?></span>
		  </li>
		  <?php
		}
		?>
		    </ul>
		  </div>
		</div>

		<div class="elementor-element elementor-element-31ccb88 elementor-widget elementor-widget-spacer" 
          data-id="31ccb88" 
          data-element_type="widget" 
          data-widget_type="spacer.default">
          <div class="elementor-widget-container">
            <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
            </div>
          </div>
        </div>

		<div class="elementor-element elementor-element-76c5549 elementor-widget elementor-widget-heading" 
          data-id="76c5549" 
          data-element_type="widget" 
          data-widget_type="heading.default">
          <div class="elementor-widget-container">
            <h3 class="elementor-heading-title elementor-size-default">Program Pengembangan Pesantren</h3>
          </div>
        </div>
		<div class="elementor-element elementor-element-9f292ce elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" 
		  data-id="9f292ce" 
		  data-element_type="widget" 
		  data-widget_type="icon-list.default">
		  <div class="elementor-widget-container">
		    <ul class="elementor-icon-list-items">
		<?php 
		$lainnya = [
		  "Wakaf Pendidikan",
		  "Pengiriman Dai",
		  "Pelatihan Mandiri",
		];


		foreach ($lainnya as $item) {
		  ?>
		  <li class="elementor-icon-list-item">
		    <span class="elementor-icon-list-icon">
		      <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
		        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
		      </svg>
		    </span>
		    <span class="elementor-icon-list-text"><?php echo $item; ?></span>
		  </li>
		  <?php
		}
		?>
		    </ul>
		  </div>
		</div>


        <div class="elementor-element elementor-element-22c5714 elementor-widget elementor-widget-spacer" 
          data-id="22c5714" 
          data-element_type="widget" 
          data-widget_type="spacer.default">
          <div class="elementor-widget-container">
            <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bagian Kegiatan Dan Informasi -->
<section class="elementor-section elementor-top-section elementor-element elementor-element-15c93cd elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="15c93cd" data-element_type="section" data-settings='{"background_background":"classic"}'>
    <div class="elementor-background-overlay" style="background-color: orange;"></div>
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-739e1ec" data-id="739e1ec" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated e-swiper-container">

                <!-- Heading Wisuda Tahfidz -->
                <div class="elementor-element elementor-element-1bd824e elementor-widget elementor-widget-heading" data-id="1bd824e" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Pesantren Nurul Hikmah Al Mubarokah</h3>
                    </div>
                </div>

                <!-- Video Embed -->
                <div class="elementor-element elementor-element-1f8f16e elementor-widget elementor-widget-video" data-id="1f8f16e" data-element_type="widget" data-settings='{"youtube_url":"https://www.youtube.com/watch?v=nBPiJ3YEoNI","video_type":"youtube","controls":"yes"}' data-widget_type="video.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-wrapper elementor-open-inline">
                            <iframe class="elementor-video" frameborder="0" allowfullscreen allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" width="640" height="360" src="https://www.youtube.com/embed/nBPiJ3YEoNI?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0&enablejsapi=1&origin=https://www.Yayasandaaruttaghyir.org&widgetid=1" id="widget2"></iframe>
                        </div>
                    </div>
                </div>

                <!-- Spacer -->
                <div class="elementor-element elementor-element-e054e28 elementor-widget elementor-widget-spacer" data-id="e054e28" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>

                <!-- Heading Dokumentasi Kegiatan -->

				<div class="elementor-element elementor-element-8a7e979 elementor-widget elementor-widget-heading" data-id="8a7e979" data-element_type="widget" data-widget_type="heading.default">
			        <div class="elementor-widget-container">
			            <h3 class="elementor-heading-title elementor-size-default" style="color: #FFF;">Dokumentasi Kegiatan Pesantren Nurul Hikmah Al Mubarokah</h3>
			        </div>
		        </div>

                <?php

				include "koneksi.php";

				// Query untuk mengambil data gambar
				$sql = "SELECT * FROM images_kegiatan ORDER BY `id` ASC";
				$result = $conn->query($sql);

				// Pastikan query berjalan dengan benar
				if ($result === false) {
				  echo "Error pada query: " . $conn->error;
				} else {
				  // Mulai membangun HTML carousel
				  $images = array();
				  $captions = array();
				  if ($result->num_rows > 0) {
				    while ($row = $result->fetch_assoc()) {
				      $images[] = $row;
				      $caption = ucwords(strtolower($row['caption'])); // Mengubah caption menjadi huruf kecil dan huruf pertama setiap kata menjadi huruf besar
				      $captions[$caption][] = $row; // Mengelompokkan gambar berdasarkan caption (case insensitive)
				    }
				  }
				?>

				<?php
				  // Loop melalui hasil query jika ada data
				  if (count($images) > 0) {
				    foreach ($captions as $caption => $imageGroup) {
				?>

				      <!-- Heading Dokumentasi Kegiatan -->
				      <div class="elementor-element elementor-element-b5915a3 elementor-widget elementor-widget-heading" data-id="b5915a3" data-element_type="widget" data-widget_type="heading.default">
				        <div class="elementor-widget-container">
				          <h3 class="elementor-heading-title elementor-size-default"><?php echo ucfirst($caption); ?></h3> </div>
				      </div>

				      <!-- Image Carousel -->
				      <div class="elementor-element elementor-element-1713600 elementor-widget elementor-widget-image-carousel e-widget-swiper" data-id="1713600" data-element_type="widget" data-settings='{"image_spacing_custom":{"unit":"px","size":25,"sizes":[]},"slides_to_scroll":"1","navigation":"none","autoplay_speed":2000,"slides_to_show_mobile":"1","autoplay":"yes","pause_on_hover":"yes","pause_on_interaction":"yes","infinite":"yes","speed":500,"image_spacing_custom_tablet":{"unit":"px","size":"","sizes":[]}}' data-widget_type="image-carousel.default" aria-roledescription="carousel" aria-label="Carousel | Horizontal scrolling: Arrow Left & Right">
				        <div class="elementor-widget-container">
				          <div class="elementor-image-carousel-wrapper swiper swiper-initialized swiper-horizontal swiper-pointer-events" dir="ltr">
				            <div class="elementor-image-carousel swiper-wrapper">

				              <?php
				              // Loop melalui gambar-gambar dengan caption yang sama
				              foreach ($imageGroup as $index => $image) {
				              ?>
				                <div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="<?php echo ($index + 1) . ' / ' . count($imageGroup); ?>" style="width: 279.5px; margin-right: 25px;">
				                  <figure class="swiper-slide-inner">
				                    <img decoding="async" class="swiper-slide-image" src="<?php echo $image['image_url']; ?>" alt="<?php echo $image['caption']; ?>">
				                  </figure>
				                </div>
				              <?php
				              }
				              ?>
				            </div> <!-- Tutup swiper-wrapper -->
				            
				            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
				          </div> <!-- Tutup swiper -->
				        </div> <!-- Tutup elementor-widget-container -->
				      </div>

				<?php
				    }
				  } else {
			
				  }
				?>

				<?php
				}

				// Tutup koneksi
				$conn->close();
				?>

                <!-- Spacer -->
                <div class="elementor-element elementor-element-738224e elementor-widget elementor-widget-spacer" data-id="738224e" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="elementor-section elementor-top-section elementor-element elementor-element-78078f2 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="78078f2" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-background-overlay"></div>
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-50c61f1" data-id="50c61f1" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">

                <div class="elementor-element elementor-element-9d25b56 elementor-widget elementor-widget-spacer" data-id="9d25b56" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>

                <div class="elementor-element elementor-element-9e9f8e4 elementor-widget elementor-widget-heading" data-id="9e9f8e4" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Kontribusi Anda Sangat Berarti</h3>
                    </div>
                </div>

				 <?php
				$program = array(
				    "Donasi Anda Membantu Membangun Generasi Qurani",
				    "Bersama Kita Wujudkan Pendidikan Berkualitas untuk Semua",
				    "Investasi untuk Akhirat melalui Pendidikan dan Dakwah"
				);
				?>

				<div class="elementor-element elementor-element-2bc2fbc8 elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="2bc2fbc8" data-element_type="widget" data-widget_type="icon-list.default">
				    <div class="elementor-widget-container">
				        <ul class="elementor-icon-list-items">
				            <?php foreach ($program as $item): ?>
				                <li class="elementor-icon-list-item">
				                    <span class="elementor-icon-list-icon">
				                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
				                            <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
				                        </svg>
				                    </span>
				                    <span class="elementor-icon-list-text"><?php echo $item; ?></span>
				                </li>
				            <?php endforeach; ?>
				        </ul>
				    </div>
				</div>

                <div class="elementor-element elementor-element-b69ca4c elementor-widget elementor-widget-spacer" data-id="b69ca4c" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>

                <div class="elementor-element elementor-element-57af384 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="57af384" data-element_type="widget" data-widget_type="divider.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-divider">
                            <span class="elementor-divider-separator"></span>
                        </div>
                    </div>
                </div>

                <div class="elementor-element elementor-element-494301d elementor-widget elementor-widget-spacer" data-id="494301d" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>

				<div class="elementor-element elementor-element-383a725 elementor-widget elementor-widget-heading" data-id="383a725" data-element_type="widget" data-widget_type="heading.default">
				    <div class="elementor-widget-container">
				        <h3 class="elementor-heading-title elementor-size-default"><strong>Berikan Peluang Mereka Untuk Menimba Ilmu dengan Bantuan Anda</strong></h3>
				    </div>
				</div>
				<div class="elementor-element elementor-element-b181790 elementor-widget elementor-widget-heading" data-id="b181790" data-element_type="widget" data-widget_type="heading.default">
				    <div class="elementor-widget-container">
				        <h3 class="elementor-heading-title elementor-size-default"><strong>Donasi Anda Berarti Segalanya</strong></h3>
				    </div>
				</div>
				<div class="elementor-element elementor-element-dd594dc elementor-widget elementor-widget-heading" data-id="dd594dc" data-element_type="widget" data-widget_type="heading.default">
				    <div class="elementor-widget-container">
				        <h3 class="elementor-heading-title elementor-size-default"><strong>Ayo Berdonasi, Saling Membantu untuk Sesama</strong></h3>
				    </div>
				</div>

				<div class="elementor-element elementor-element-c272789 elementor-align-center elementor-widget elementor-widget-button" data-id="c272789" data-element_type="widget" data-widget_type="button.default">
				    <div class="elementor-widget-container">
				        <div class="elementor-button-wrapper">
				            <a class="elementor-button elementor-button-link elementor-size-sm" href="donasi">
				                <span class="elementor-button-content-wrapper">
				                    <span class="elementor-button-icon">
				                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-circle-right" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
				                            <path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z"></path>
				                        </svg>
				                    </span>
				                    <span class="elementor-button-text">Donasi Sekarang Juga</span>
				                </span>
				            </a>
				        </div>
				    </div>
				</div>

                <div class="elementor-element elementor-element-06e80ae elementor-widget elementor-widget-spacer" data-id="06e80ae" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Spacer -->
<div class="elementor-element elementor-element-738224e elementor-widget elementor-widget-spacer spc" data-id="738224e" data-element_type="widget" data-widget_type="spacer.default"  style="height: 50px;">
    <div class="elementor-widget-container">
        <div class="elementor-spacer">
            <div class="elementor-spacer-inner"></div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="elementor-section elementor-top-section elementor-element elementor-element-d4b59eb elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d4b59eb" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-wide">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b0d0ffd" data-id="b0d0ffd" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-41207ed elementor-widget elementor-widget-spacer" data-id="41207ed" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-d7b69fe elementor-widget elementor-widget-image" data-id="d7b69fe" data-element_type="widget" data-widget_type="image.default">
                    <div class="elementor-widget-container img">
                        <img decoding="async" width="100" height="100" src="images/logo_ponpes.png" alt="Logo Yayasan Daarut Taghyir"> &nbsp;
                    </div>
                </div>
                <div class="elementor-element elementor-element-a5ef944 elementor-widget elementor-widget-spacer" data-id="a5ef944" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-4e31730 elementor-widget elementor-widget-text-editor" data-id="4e31730" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p><strong>Pondok Pesantren Tahfidz Quran Nurul Hikmah Al-Mubarokah</strong> 
                        	<br>Dikelola oleh <strong>Yayasan Daarut Taghyir
                        	</strong>
                        	<br>Akta Notaris : Deni. S. <strong>S.H., M.Kn. No.348/ 27 September 2016</strong>
                        	<br><strong>SK. MENKUM & HAM RI No.C-493.HT.03.01.Tahun 2006/ 29 Desember 2006</strong>
                        	<br>Kp.Hegarmanah, RT.002/RW.027, Gununghalu, Kec. Gununghalu, Kabupaten Bandung <br>Barat, Jawa Barat 40565</p>
                    </div>
                </div>
               

<div class="elementor-element elementor-element-6be34f0 elementor-align-center elementor-widget elementor-widget-button" data-id="6be34f0" data-element_type="widget" data-widget_type="button.default">
    <br>
    <!-- Bagian ikon media sosial -->
    <div class="social-media-icons">
        <a href="https://wa.me/6287877922763" class="social-icon" target="_blank" aria-label="WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://www.instagram.com/pesantren.nurulhikmah/" class="social-icon" target="_blank" aria-label="Instagram">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="#" class="social-icon" target="_blank" aria-label="YouTube">
            <i class="fab fa-youtube"></i>
        </a>
        <a href="https://web.facebook.com/ponpes.n.almubarokah" class="social-icon" target="_blank" aria-label="Facebook">
            <i class="fab fa-facebook-f"></i>
        </a>
    </div>
    <br>
    <!-- Bagian tombol donasi -->
    <div class="elementor-widget-container">
        <div class="elementor-button-sticky-yes elementor-button-wrapper">
            <a class="elementor-button elementor-button-link elementor-size-sm" href="donasi">
                <span class="elementor-button-content-wrapper">
                    <span class="elementor-button-icon">
                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-circle-right" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z"></path>
                        </svg>
                    </span>
                    <span class="elementor-button-text">Daftar Sekarang Juga</span>
                </span>
            </a>
        </div>
    </div>
</div>
                
            </div>
        </div>
    </div>
</footer>

</div>
</div>
</article>
</main>
</div>
</div>
</div>
</div>
</div>
</div>

    <div id="back-to-top" style="display: none;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
            <path d="M177 159.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9 0L160 255.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 329.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1z"></path>
        </svg>
    </div>

    <script type="text/javascript">
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll( `.e-con.e-parent:not(.e-lazyloaded)` );
            const lazyloadBackgroundObserver = new IntersectionObserver( ( entries ) => {
                entries.forEach( ( entry ) => {
                    if ( entry.isIntersecting ) {
                        let lazyloadBackground = entry.target;
                        if( lazyloadBackground ) {
                            lazyloadBackground.classList.add( 'e-lazyloaded' );
                        }
                        lazyloadBackgroundObserver.unobserve( entry.target );
                    }
                });
            }, { rootMargin: '200px 0px 200px 0px' } );
            lazyloadBackgrounds.forEach( ( lazyloadBackground ) => {
                lazyloadBackgroundObserver.observe( lazyloadBackground );
            } );
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach( ( event ) => {
            document.addEventListener( event, lazyloadRunObserver );
        } );
    </script>

    <script type="text/javascript" src="jsc/webpack.runtime.min.js?ver=3.24.7" id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript" src="jsc/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <script type="text/javascript" src="jsc/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="jsc/frontend-modules.min.js?ver=3.24.7" id="elementor-frontend-modules-js"></script>
    <script type="text/javascript" src="jsc/core.min.js?ver=1.13.3" id="jquery-ui-core-js"></script>
    <script type="text/javascript" id="elementor-frontend-js-before">
        /* <![CDATA[ */
        var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}},"hasCustomBreakpoints":false},"version":"3.24.7","is_static":false,"experimentalFeatures":{"e_font_icon_svg":true,"additional_custom_breakpoints":true,"container":true,"container_grid":true,"e_swiper_latest":true,"e_nested_atomic_repeaters":true,"e_onboarding":true,"home_screen":true,"ai-layout":true,"landing-pages":true,"link-in-bio":true,"floating-buttons":true},"urls":{"assets":"https:\/\/www.kendagainsanmulia.org\/wp-content\/plugins\/elementor\/assets\/","ajaxurl":"https:\/\/www.kendagainsanmulia.org/wp-admin\/admin-ajax.php","uploadUrl":"https:\/\/www.kendagainsanmulia.org/wp-content\/uploads"},"nonces":{"floatingButtonsClickTracking":"ac9e22db17"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":624,"title":"Yayasan%20Daarut%20Taghyir","excerpt":"","featuredImage":false}};
        /* ]]> */
    </script>
    <script type="text/javascript" src="jsc/frontend.min.js?ver=3.24.7" id="elementor-frontend-js"></script>
    <span id="elementor-device-mode" class="elementor-screen-only"></span>
    <script type="text/javascript" src="jsc/script.min.js?ver=3.4.2" id="landingpress-js"></script>
    <!-- Facebook Pixel Code -->
    <noscript><img height="1" width="1" alt="fbpx" style="display:none" src="https://www.facebook.com/tr?id=572970717950407&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <script src="jsc/swiper.min.js?ver=8.4.5">
    </script>

    <script type="text/javascript">
    const swiper = new Swiper('.swiper-container', {
      // ... other Swiper options
      autoplay: {
        delay: 2000, // Delay in milliseconds (2 detik)
        disableOnInteraction: false, // Continue autoplay even after interaction
      }
    }); 
    </script>

    <script>
    // Panggil counter.php di latar belakang tanpa menampilkan hasil
    fetch('counter.php')
        .catch(error => {
            console.error('Error updating visitor count:', error);
        });
    </script>

</body>
</html>