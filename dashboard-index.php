<?php include('header-2.php'); ?>

  <section class="page-content">
    <div class="container">
      <div class="alert alert-primary mt-3 mb-3 bgblueOld" role="alert">
        <h3 class="mb-0"><b>Akunmu Sedang Dalam Verifikasi</b></h3>
        <p>Tim admin kami sedang melakukan verifikasi akunmu. Mohon menunggu sampai akunmu aktif dan bisa digunakan</p>
      </div>
    </div>


    <div class="container">

      <div class="col-wrap">
        <div class="col-left">
          <?php include('dashboard-nav.php'); ?>
        </div>

        <div class="col-right">
          <div class="bg-content">
            <!-- Nav Tab -->
            <div class="nav-wrapper">
                <ul class="nav nav-pills">
                  <li class="active">
                    <a href="#1a" data-toggle="tab" aria-expanded="true">Dashboard</a>
                  </li>
                </ul>
            </div>

            <?php
              $diamond = 300;
             ?>
            <div class="diamond-total mt-4">
              <div class="row">
                <div class="col-md-4">
                  <div class="bg-icon-profile w-100">
                    <img src="img/st/diamond-icon.svg" alt="">
                  </div>
                </div>
                <div class="col no-padding">
                  <div class="highlight-content w-100">
                      <p class="neutral">Total Diamond</p>
                      <h5 class="font-telkomselbatiksans"><?php echo $diamond; ?></h5>
                  </div>
                </div>
                <div class="col no-padding redeem-wrapper align-items-center d-flex">
                  <button class="btn">Redeem</button>
                </div>
              </div>
            </div>

            <div class="p-top-50">
              <h4 class="bold">Level Sahabat Telkomsel</h4>

              <section id="milestone" class="section">
                <!-- <div class="rangeContainer">
                  <input id="diamondRange" class="slider" type="range" min="1" max="100" value="30">
                  <span class="nub"></span>

                  <div class="milestone-wrapper">
                    <span id="first" class="dottt active" data-range="1"></span>

                    <span id="second"  class="dottt" data-range="25">
                      <div class="milestone-locked-wrapper position-relative">
                        <img src="img/st/milestone-locked.svg" alt="">
                        <div class="detail text-center">
                          Bestie
                        </div>
                      </div>
                    </span>
                    <span id="third"  class="dottt" data-range="50">
                      <div class="milestone-locked-wrapper position-relative">
                        <img src="img/st/milestone-locked.svg" alt="">
                        <div class="detail text-center">
                          Close Friend
                        </div>
                      </div>
                    </span>
                    <span id="fourth" class="dottt" data-range="">
                      <div class="milestone-locked-wrapper position-relative">
                        <img src="img/st/milestone-locked.svg" alt="">
                        <div class="detail text-center">
                          Soulmate
                        </div>
                      </div>
                    </span>
                  </div>
                </div> -->

                <div class="rangeContainer">
                  <div class="range-slider">

                      <div class="wrap <?php if ($diamond >= 500) { echo 'complete-diamond'; } ?>
                        <?php if ($diamond >= 10 && $diamond <= 500) { echo 'currrent-diamond'; } ?>">
                        <?php if ($diamond >= 10 && $diamond <= 500): ?>
                          <div class="tooltip-range"><?php echo 500 - $diamond; ?> lagi</div>
                        <?php endif; ?>
                        <input id="range1" class="range" type="range" value="<?php echo ($diamond >= 10) ? $diamond : '0'; ?>" min="10" max="500" disabled>
                        <label class="range-label">Casual</label>
                      </div>

                      <div class="wrap <?php if ($diamond >= 501) { echo 'complete-diamond'; } ?>
                        <?php if ($diamond >= 501 && $diamond <= 1000) { echo 'currrent-diamond'; } ?>">
                        <?php if ($diamond >= 501 && $diamond <= 1000): ?>
                          <div class="tooltip-range"><?php echo 1000 - $diamond; ?> lagi</div>
                        <?php endif; ?>
                        <input id="range2" class="range" type="range" value="<?php echo ($diamond >= 501) ? $diamond : '0'; ?>" min="501" max="1000" disabled>
                        <label class="range-label">Bestie</label>
                      </div>

                      <div class="wrap <?php if ($diamond >= 1001) { echo 'complete-diamond'; } ?>
                        <?php if ($diamond >= 1001 && $diamond <= 5000) { echo 'currrent-diamond'; } ?>">
                        <?php if ($diamond >= 1001 && $diamond <= 5000): ?>
                          <div class="tooltip-range"><?php echo 5000 - $diamond; ?> lagi</div>
                        <?php endif; ?>
                        <input id="range3" class="range" type="range" value="<?php echo ($diamond >= 1001) ? $diamond : '0'; ?>" min="1001" max="5000" disabled>
                        <label class="range-label">Close Friend</label>
                      </div>

                      <div class="wrap <?php if ($diamond >= 5001) { echo 'complete-diamond currrent-diamond'; } ?>">
                        <input id="range4" class="range" type="range" value="<?php echo ($diamond >= 5001) ? $diamond : '0'; ?>" disabled>
                        <label class="range-label">Soulmate</label>
                      </div>

                  </div>
                </div>

              </section>
            </div>
            <!-- Highlight  -->
            <div class="p-top-50">
              <h4 class="bold">Ringkasan Aktivitas</h4>
              <div class="row">

                <div class="col-md-4">
                  <div class="highlight">
                    <div class="bg-aktivitas">
                      <img src="img/st/aktifitas-icon.svg" alt="">
                    </div>
                    <div class="highlight-content">
                      <h3 class="font-telkomselbatiksans fred">12</h3>
                      <p class="neutral">Menunggu Persetujuan</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="highlight">
                    <div class="bg-aktivitas">
                      <img src="img/st/aktifitas-icon-1.svg" alt="">
                    </div>
                    <div class="highlight-content">
                      <h3 class="font-telkomselbatiksans fred">30</h3>
                      <p class="neutral">Postingan Berjalan</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="highlight">
                    <div class="bg-aktivitas">
                      <img src="img/st/aktifitas-icon-2.svg" alt="">
                    </div>
                    <div class="highlight-content">
                      <h3 class="font-telkomselbatiksans fred">206</h3>
                      <p class="neutral">Postingan yang Diikuti</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- Slider Waiting List  -->
            <div class="p-top-50">
              <h4 class="bold">Menunggu Persetujuan (12)</h4>
              <p class="neutral">Daftar Posting Challenge yang menunggu approval dari Telkomsel</p>
              <div class="pl-3 row owl-carousel mission-slider owl-theme" id="fetchSliderApproval"></div>
              <a class="float-right read-all position-relative pr-3" href="">
                  <div class="text-right d-inline-block"><h6 class="fred bold">Lihat Semua</h6></div>
              </a>
            </div>

            <!-- Slider Postingan Berjalan  -->
            <div class="p-top-50">
              <h4 class="bold">Postingan Berjalan (30)</h4>
              <p class="neutral">Daftar Postingan Challenge yang sedang berjalan</p>
              <div class="pl-3 row owl-carousel mission-slider owl-theme" id="fetchSliderPost"></div>
              <a class="float-right read-all position-relative pr-3" href="">
                  <div class="text-right d-inline-block"><h6 class="fred bold">Lihat Semua</h6></div>
              </a>
            </div>

            <!-- Slider Challenge  -->
            <div class="p-top-50">
              <h4 class="bold">Postingan Challenge yang Tersedia (16)</h4>
              <p class="neutral">Daftar Postingngan Challenge yang bisa kamu ikuti</p>
              <div class="pl-3 row owl-carousel mission-slider owl-theme" id="fetchSliderChallenge"></div>
              <a class="float-right read-all position-relative pr-3" href="">
                  <div class="text-right d-inline-block"><h6 class="fred bold">Lihat Semua</h6></div>
              </a>
            </div>

          </div>
        </div>
      </div>

    </div>
  </section>

  <script>

    $(document).ready(function(){
      const sliderApproval = {
        id: "fetchSliderApproval",
        slider: [{ img: "img/st/dummy/slide-dummy.jpg",
                  title: "Nomor Anti Hangus",
                  status: '<div class="note"><p>Menunggu</p></div>'},
                { img: "img/st/dummy/slide-dummy.jpg",
                  title: "CHIMERA (2021-11-11)",
                  status: '<div class="note"><p>Menunggu</p></div>'},
                { img: "img/st/dummy/slide-dummy.jpg",
                  title: "Land of Dawn Mobile Legends Bang Bang",
                  status: '<div class="note"><p>Menunggu</p></div>'}]
      }

      const sliderPost = {
        id: "fetchSliderPost",
        slider: [{  img: "img/st/dummy/slide-dummy.jpg",
                    title: "Nomor Anti Hangus",
                    status: '<div class="note"><p>Sedang Berjalan</p></div>'},
                  { img: "img/st/dummy/slide-dummy.jpg",
                    title: "CHIMERA (2021-11-11)",
                    status: '<div class="note"><p>Sedang Berjalan</p></div>'},
                  { img: "img/st/dummy/slide-dummy.jpg",
                    title: "Land of Dawn Mobile Legends Bang Bang",
                    status: '<div class="note"><p>Sedang Berjalan</p></div>'}]
      }

      const sliderChallenge = {
        id: "fetchSliderChallenge",
        slider: [ { img: "img/st/dummy/slide-dummy.jpg",
                    title: "Nomor Anti Hangus",
                    status: " "},
                  { img: "img/st/dummy/slide-dummy.jpg",
                    title: "CHIMERA (2021-11-11)",
                    status: " "},
                  { img: "img/st/dummy/slide-dummy.jpg",
                    title: "Land of Dawn Mobile Legends Bang Bang",
                    status: " "},]
      }

      fetchSlider(sliderApproval.id, sliderApproval.slider);

      fetchSlider(sliderPost.id, sliderPost.slider);

      fetchSlider(sliderChallenge.id, sliderChallenge.slider);

      // milestone();

      callOwlSlider();
    });

    function fetchSlider(id, slider){

      slider.forEach(e => {
           $(`#${id}`).append(`
                <div class="blog mission">
                  <div class="blog-inner shadow">
                    <div class="position-relative">
                      ${e.status}
                      <img src="${e.img}" alt="">
                    </div>
                    <div class="blog-post-body">
                        <h4 class="bold m-bottom-10">${e.title}</h4>
                        <div class="p-bottom-10">
                          <div class="neutral-40 no-margin">
                                <div class="box-12 d-inline-table "><img src="img/st/lock-icon.svg" alt=""> </div>
                                <p class="d-inline-table no-margin">Open Public by <span class="bold">Telkomsel</span></p>
                          </div>
                          <div class="neutral-40 no-margin custom-pl-2">
                                <div class="box-9 d-inline-table "><img src="img/st/time-icon.svg" alt=""> </div>
                                <p class="d-inline-table no-margin">20-24 November 2021</p>
                          </div>
                        </div>
                        <p class="p-bottom-20">
                          Sebuah rahasia yang terkubur muncul kembali saat insiden yang mirip dengan Kasus Chimera yang...
                        </p>
                        <div>
                          <a class="btn btn-default semi-bold tag d-inline-table">#Tsel4U2497</a>
                          <a class="btn btn-default semi-bold tag d-inline-table">#TselVIU</a>
                          <a class="btn btn-default semi-bold tag d-inline-table">#TselVIU</a>
                        </div>
                    </div>
                  </div>
                </div>
           `)
       });
    }

    function callOwlSlider(){
      const arrow = {
        prev: "prev",
        next: "next"
      }

      $(".owl-carousel").owlCarousel({
        nav: true,
        dots: false,
        items: 2,
        margin: 10,
        navText: [
          `<a><img src="img/st/${arrow.prev}-icon.svg" alt=""></a>` ,
          `<a><img src="img/st/${arrow.next}-icon.svg" alt=""></a>`
          ]
      });

    }
  </script>

<?php include('footer-1.php'); ?>
