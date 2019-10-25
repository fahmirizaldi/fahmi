<!DOCTYPE html>
<html class="wide wow-animation smoothscroll" lang="en">
 <?php
 include '_partial/header.php';
 ?>
  <body>
    <div class="preloader">
      <div class="page-loader-image"><img src="images/biodata/fahmi.png">
      </div>
      <div class="page-loader-body">
        <div class="cssload-preloader cssload-loading"><span class="cssload-slice"></span><span class="cssload-slice"></span><span class="cssload-slice"></span><span class="cssload-slice"></span><span class="cssload-slice"></span><span class="cssload-slice"></span></div>
      </div>
    </div>
    <!-- Page-->
    <div class="page">
      <!-- Banner 1--><a class="section section-banner d-none d-xl-block" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" style="background-image: url(images/banner/background-02-1920x60.jpg); background-image: -webkit-image-set( url(images/banner/background-02-1920x60.jpg) 1x, url(images/banner/background-02-3840x120.jpg) 2x )"><img src="images/banner/foreground-02-1600x60.png" srcset="images/banner/foreground-02-1600x60.png 1x, images/banner/foreground-02-3200x120.png 2x" alt="" width="1600" height="310"></a>
      <!-- Page Header-->
      <header class="page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-transparent context-dark" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-fullwidth" data-stick-up-clone="true" data-md-stick-up="true" data-lg-stick-up="true" data-md-stick-up-offset="70px" data-lg-stick-up-offset="70px" data-body-class="rd-navbar-absolute">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand-name"><img src="images/biodata/fahmi.png"></a></div>
              </div>
              <!-- RD Navbar Nav-->
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class="active"><a href="home">Home</a>
                    <!-- Dropdown menu handler-->
                  </li>
				  <li><a href="admin">Admin</a>
                    <!-- Dropdown menu handler-->
                  </li>
                </ul>
              </div>
              <!-- RD Navbar Aside-->
              
            </div>
          </nav>
        </div>
      </header>

      <!-- Swiper & parallax-->
      <section class="swiper-bg-wrap swiper-style-1 bg-gray-dark">
        <div>
          <div class="swiper-container swiper-slider swiper-bg" data-autoplay="3500" data-slide-effect="fade">
            <div class="swiper-wrapper">
              <div class="swiper-slide" data-slide-bg="images/545909.jpg"></div>
              <div class="swiper-slide" data-slide-bg="images/157845.jpg"></div>
              <div class="swiper-slide" data-slide-bg="images/73237.jpg"></div>
            </div>
            <!-- Swiper pagination-->
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-bg-content custom-parallax-wrap">
            <div class="jumbotron-custom jumbotron-custom-1 custom-parallax" data-speed="10" data-fade="true">
              <div class="jumbotron-custom__inner">
                <div class="container">
                  <div class="row justify-content-md-center">
                    <div class="col-lg-10 col-xl-8">
                      <div class="hgroup">
                        <h1 class="wow fadeInDown">WELCOME</h1>
                        <h3 class="wow fadeInUpSmall" data-wow-delay=".1s"><?= $biodata['Nama'] ?></h3>
                      </div>
                      <p class="big wow fadeInUpSmall" data-wow-delay=".3s"><?= $biodata['Keterangan']?> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- About Our Church-->
      <section class="section-md bg-default text-center text-lg-left">
        <div class="container">
          <div class="row justify-content-md-center align-items-lg-center flex-lg-row-reverse row-50">
            <div class="col-md-9 col-lg-6">
              <div class="box-inset-1">
                <div class="hgroup">
                  <h2>Hallo!!! Saya Fahmi Rizaldi</h2>
                  <h6><?= $biodata['Keterangan']?></h6>
                </div>
                <!-- Quote classic-->
                <article class="quote-classic">
                  <div class="quote-classic__mark">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="70.935px" height="74px" viewbox="0 0 70.935 74" xml:space="preserve">
                      <path d="M41.609,73.336c6.719-0.297,12.719-2.977,17.344-7.75            c12.27-12.649,12.035-36.488,11.969-39.125l-0.004-24.86C70.918,0.719,70.203,0,69.32,0H44.766c-0.883,0-1.598,0.719-1.598,1.601            v24.551c0,0.883,0.715,1.602,1.598,1.602h12.546c0,2.051-0.25,20.246-8.148,28.363c-2.137,2.195-4.668,3.371-7.738,3.586            c-0.836,0.063-1.488,0.758-1.488,1.598v10.433c0,0.438,0.179,0.856,0.496,1.157C40.746,73.195,41.168,73.363,41.609,73.336            L41.609,73.336z M41.609,73.336"></path>
                      <path d="M0.492,72.894c0.317,0.301,0.727,0.469,1.18,0.442c6.719-0.297,12.715-2.977,17.344-7.75            C31.285,52.937,31.047,29.098,30.98,26.461V1.601C30.98,0.719,30.262,0,29.379,0H4.828C3.945,0,3.227,0.719,3.227,1.601v24.551            c0,0.883,0.718,1.602,1.601,1.602h12.547C17.371,29.805,17.125,48,9.227,56.117c-2.137,2.195-4.668,3.371-7.739,3.586            C0.648,59.766,0,60.461,0,61.301v10.433C0,72.172,0.176,72.59,0.492,72.894L0.492,72.894z M0.492,72.894"></path>
                    </svg>
                  </div>
                  <div class="quote-classic__body">
                    <table border=0>
					<tr>
						<td>Nama</td><td>:<td><td><?= $biodata['Nama']?></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td><td>:<td><td><?= $biodata['Jenis_Kelamin']?></td>
					</tr>
					<tr>
						<td>TTL</td><td>:<td><td><?= $biodata['TTL']?></td>
					</tr>
					<tr>
						<td>Alamat</td><td>:<td><td><?= $biodata['Alamat']?></td>
					</tr>
					<tr>
						<td>Agama</td><td>:<td><td><?= $biodata['Agama']?></td>
					</tr>
					<tr>
						<td>Status</td><td>:<td><td><?= $biodata['Status']?></td>
					</tr>
					</table>
					<p><?= $biodata['Resume']?></p>
				</div>
              </div>
            </div>
            <div class="col-md-8 col-lg-6">
              <figure class="figure-bordered"><img src="<?="images/biodata/".$biodata ['foto']?>">
              </figure>
            </div>
          </div>
        </div>
      </section>

      <!-- Main services-->
      <section class="parallax-container text-center bg-image" data-parallax-img="images/bg-image-3.jpg">
        <div class="parallax-content">
          <div class="section-md">
            <div class="container">
              <div class="list-indexed-wrap">
                <ul class="list-indexed">
				<?php foreach ($pendidikan as $data):?>
				 <li>
                    <img class="img-responsive" src="<?= "images/biodata/".$data->foto ?>">
                    <p><h4><?= $data->Nama_Sekolah?></h4></p>
					<p><?= $data->Tahun_Ajar?></p>
					<p><?= $data->Keterangan?></p>
                  </li>
				  <?php endforeach;?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

 <!-- Upcoming Events-->
    <div id="fh5co-skills" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>My Skill</h2>
				</div>
			</div>
			<div class="row row-pb-md">
				<?php foreach ($skill as $data):?>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="95"><span><strong><?= $data->keahlian?></strong><?= $data->persentase?>%</span></div>
				</div>
				<?php endforeach;?>
			</div>
				<!-- Base typography-->
				<section class="section-md bg-default">
			<div class="container">
			<div class="row">
            <div class="col-lg-8">
			<img src="<?="images/biodata/".$pengalaman ['Foto']?>">
            <p><h4><?=$pengalaman['nama_perusahaan']?></h4></p>
			<p>Alamat	:	<?=$pengalaman['alamat_perusahaan']?></p>
			<p>Waktu	:	<?=$pengalaman['jam_buka']?></p>			
            </div>
			</div>
			</div>
			</section>
			<!-- Pengalaman -->
      <section class="section-md bg-default">
        <divS class="container">
          <div class="row">
            <div class="col-lg-8">
              <h4>Pengetahuan!!!</h4>
              <div class="quote-primary">
                <div class="quote-primary__body">
                  <svg class="quote-primary__mark" version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="21px" height="15px" viewbox="0 0 21 15" overflow="scroll" xml:space="preserve" preserveAspectRatio="none">
                    <path d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                         c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                         C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                         c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                         C20.106,7.145,20.987,8.493,20.987,10.412z"></path>
                  </svg>
                  <div class="quote-primary__text">
                    <p class="q"><?= $pengalaman['Pengetahuan']?></p>
                  </div>
                </div>
                <div class="quote-primary__footer"><span class="cite"><?= $pengalaman['nama_perusahaan']?></span></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- HTML Text Elements-->
      <section class="section-md bg-default">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <h4>PENGALAMAN!!!</h4>
              <p><?= $pengalaman['pengalaman']?></p>
            </div>
          </div>
        </div>
      </section>
      <!--PORTFOLIOS-->
      <section class="section-md bg-default text-center">
        <div class="container gallery-wrap">
          <div class="row justify-content-lg-center gallery-wrap-top">
            <div class="col-md-4">
              <h2>PORTFOLIOS!!!</h2>
            </div>
          </div>
          <div class="row row-30 align-items-md-end gallery-wrap-bottom" data-lightgallery="group">
            <div class="col-md-4">
              <!-- Thumb bubba-->
			   <?php foreach ($portofolio as $data):?>
                <div class="thumb-bubba">
					<span><?= $data->judul?></span>
                  <figure> <img class="img-responsive" src="<?= "images/biodata/".$data->foto ?>"></figure>
                  <div class="thumb-bubba__overlay"></div>
                </div>
				<?php endforeach;?>
        </div>
      </section>
	  <!-- Contact Us-->

      <footer class="page-footer-default bg-gray-dark text-center">
        <div class="container">
          <div class="row row-30 align-items-sm-center flex-md-row-reverse row-15">
            <div class="col-md-6 column-center text-md-right">
              <div class="unit justify-content-center justify-content-md-end align-items-center">
                <div class="unit-left">
					
                </div>
              </div>
            </div>
		
            <div class="col-md-6 column-center text-md-left">
              <p class="rights">FahmiRizaldi &copy;&nbsp;<span class="copyright-year"></span>.&nbsp;</p>
			  
            </div>
			<div class="sosmed">
			<a href="https://www.facebook.com/"><i class="fa-facebook-square"></i></a>
			<a href="https://web.whatsapp.com/"><i class="fa-whatsapp"></i></a>
			<a href="https://www.instagram.com/"><i class="fa-instagram"></i></a>
			</div>
			</div>
        </div>
      </footer>

 
    <?php
	include '_partial/script.php';
	?>
  </body>
</html>