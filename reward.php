<?php include('header-2.php'); ?>

  <section class="page-content">

    <div class="container">

        <div class="col-wrap">


            <div class="container mt-5">

                <a href="#" class="toggle-close bold fblack"><i class="fa fa-chevron-left"></i> Kembali ke Dashboard</a>
                <div class="mt-5">
                    <!-- GOLD USER -->
                    <div class="row user-gold profile-card-bg">

                    <!-- Platinum USER -->
                    <!-- <div class="row user-platinum profile-card-bg"> -->

                    <!-- Silver USER -->
                    <!-- <div class="row user-silver profile-card-bg"> -->

                        <div class="col-bio-1 mb-3">
                        <div class="user-box-images">
                            <img src="img/st/dummy/254a838cf18e359b6692764d3eae4ec1.png" alt="">
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="white-color">
                            <div class="user-box-content pr-0 pt-2">
                            <h2 class="font-telkomselbatiksans">Maudy Ayunda Putri</h2>

                            <div class="user-box-s m-top-10">
                                <!-- GOLD USER -->
                                <!-- SAHABAT AKRAB -->

                                <!-- Platinum USER -->
                                SAHABAT GAUL

                                <!-- Silver USER -->
                                <!-- SAHABAT KEREN -->
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-bio-3 mb-3 mr-0 ml-auto">
                            <section id="milestone" class="section card-c">
                                <div class="title-gradient"><p class="bold">Level Sahabat Telkomsel</p></div>

                            <?php
                                $diamond = 300;
                            ?>
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

                        <div class="col-3 mr-0 mb-3">
                            <section id="diamond" class="section card-c">
                                <div class="title-gradient"><p class="bold">Jumlah Diamond</p></div>
                                <div class="row pt-4 mt-2">
                                    <div class="col-6">
                                        <div class="">
                                            <img src="img/st/diamond-icon.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6 pt-2">
                                        <div class="highlight-content">
                                            <h3 class="font-telkomselbatiksans fred">1,326</h3>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    </div>
                <div class="rewards-slider">
                    <!-- Slider Rewards  -->
                    <div class="p-top-50">
                        <h4 class="bold">Reward Tersedia</h4>
                        <p class="neutral">Daftar reward yang bisa kamu klaim menggunakan diamond yang kamu punya</p>
                        <div class="pl-3 row owl-carousel mission-slider owl-theme" id="fetchSliderApproval"></div>
                        <a class="float-right read-all position-relative pr-3" href="">
                            <div class="text-right d-inline-block"><h6 class="fred bold">Lihat Semua</h6></div>
                        </a>
                    </div>

                    <div class="p-top-50 custom-table ">
                        <h4 class="bold">Riwayat Redeem</h4>

                        <table id="example" class="table table-borderless" cellspacing="0" width="100%">
                            <thead class="border-head">
                                <tr>
                                    <th class="align-middle">Created Date</th>
                                    <th class="align-middle">Status</th>
                                    <th class="align-middle">Coupon ID</th>
                                    <th class="align-middle">Coupon Name</th>
                                    <th class="align-middle">Cost</th>
                                    <th class="align-middle">Reward</th>
                                    <th class="align-middle">LinkAja</th>
                                    <th class="align-middle">Last Updated</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>      
                                    <td>16  November 2021 08:20:24</td>
                                    <td>Redeemed</td>
                                    <td>GBYRLA450</td>
                                    <td>Gebyar LinkAja 450rb</td>
                                    <td data-order="1000">-1,230 Diamond</td>
                                    <td>Saldo LinkAja Rp 750.000</td>
                                    <td>080123456789</td>
                                    <td>16  November 2021 08:20:24</td>
                                </tr>
                                <tr>      
                                    <td>13  November 2021 08:20:24</td>
                                    <td>Rejected</td>
                                    <td>GBYRLA451</td>
                                    <td>Gebyar LinkAja 450rb</td>
                                    <td data-order="1000">-1,230 Diamond</td>
                                    <td>Saldo LinkAja Rp 750.000</td>
                                    <td>080123456789</td>
                                    <td>16  November 2021 08:20:24</td>
                                </tr>
                                <tr>      
                                    <td>12  November 2021 08:20:24</td>
                                    <td>Redeemed</td>
                                    <td>GBYRLA455</td>
                                    <td>Gebyar LinkAja 450rb</td>
                                    <td data-order="1000">-1,230 Diamond</td>
                                    <td>Saldo LinkAja Rp 750.000</td>
                                    <td>080123456789</td>
                                    <td>16  November 2021 08:20:24</td>
                                </tr>
                                <tr>      
                                    <td>21  November 2021 08:20:24</td>
                                    <td>Redeemed</td>
                                    <td>GBYRLA4509</td>
                                    <td>Gebyar LinkAja 450rb</td>
                                    <td data-order="1000">-1,230 Diamond</td>
                                    <td>Saldo LinkAja Rp 750.000</td>
                                    <td>080123456789</td>
                                    <td>16  November 2021 08:20:24</td>
                                </tr>
                        
                            </tbody>
                        </table>
                    
 
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
        slider: [{ img: "img/st/dummy/rewards-slider.png",
                  title: "Gebyar LinkAja 750rb",
                  status: '<div class="note"><p>Menunggu</p></div>'},
                { img: "img/st/dummy/rewards-slider.png",
                  title: "Gebyar LinkAja 750rb",
                  status: '<div class="note"><p>Menunggu</p></div>'},
                { img: "img/st/dummy/rewards-slider.png",
                title: "Gebyar LinkAja 750rb",
                status: '<div class="note"><p>Menunggu</p></div>'},
                { img: "img/st/dummy/rewards-slider.png",
                  title: "Gebyar LinkAja 750rb",
                  status: '<div class="note"><p>Menunggu</p></div>'}]
      }

      fetchSlider(sliderApproval.id, sliderApproval.slider);

      // milestone();

      callOwlSlider();

      document.title='Simple DataTable';
        // DataTable initialisation
        $('#example').DataTable(
            {
                "dom": '<"dt-buttons"Bf><"clear">lirtp',
                "paging": true,
                "autoWidth": true,
                "buttons": [
                    'colvis',
                    'copyHtml5',
            'csvHtml5',
                    'excelHtml5',
            'pdfHtml5',
                    'print'
                ]
            }
        );


    });

    function fetchSlider(id, slider){

      slider.forEach(e => {
           $(`#${id}`).append(`
                <div class="blog rewards-cards">
                  <div class="blog-inner shadow">
                    <div class="position-relative">
                      <img src="${e.img}" alt="">
                    </div>
                    <div class="blog-post-body">
                        <h4 class="bold text-center pb-1">${e.title}</h4>
                        <p class="p-bottom-20">
                            Dapatkan saldo LinkAja sebesar Rp 750.000. Pastikan kamu sudah mengisi nomor LinkAja pada profilmu.
                        </p>
                        
                        <a class="btn btn-default semi-bold tag d-inline-table w-100">
                            <div class="row pl-3">
                                <div class="col-6 d-flex align-items-center">
                                    <div class="diamonds">
                                        <img src="img/st/diamond-sketch-icon.svg">
                                    </div>
                                    <h6 class="neutral bold pl-3"> - 1,230</h6>
                                </div>
                                <div class="col-6">
                                    <h6 class="fred bold">Klaim Reward</h6>
                                </div>
                            </div>
                        </a>
                        
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
        items: 3,
        margin: 10,
        navText: [
          `<a><img src="img/st/${arrow.prev}-icon.svg" alt=""></a>` ,
          `<a><img src="img/st/${arrow.next}-icon.svg" alt=""></a>`
          ]
      });

    }

    function isOlderEdgeOrIE() {
      return (
        window.navigator.userAgent.indexOf("MSIE ") > -1 ||
        !!navigator.userAgent.match(/Trident.*rv\:11\./) ||
        window.navigator.userAgent.indexOf("Edge") > -1
      );
    }

    function valueTotalRatio(value, min, max) {
      return ((value - min) / (max - min)).toFixed(2);
    }

    function getLinearGradientCSS(ratio, leftColor, rightColor) {
      return [
        '-webkit-gradient(',
        'linear, ',
        'left top, ',
        'right top, ',
        'color-stop(' + ratio + ', ' + leftColor + '), ',
        'color-stop(' + ratio + ', ' + rightColor + ')',
        ')'
      ].join('');
    }

    function updateRangeEl(rangeEl) {
      var ratio = valueTotalRatio(rangeEl.value, rangeEl.min, rangeEl.max);
      rangeEl.style.backgroundImage = getLinearGradientCSS(ratio, '#FDA22B', '#DBDBDB');
    }

    function initRangeEl1() {
      var rangeEl1 = document.querySelector('#range1');

       updateRangeEl(rangeEl1);
       rangeEl1.addEventListener("input", function(e) {
         updateRangeEl1(e.target);
         textEl.value = e.target.value;
       });
    }

    function initRangeEl2() {
      var rangeEl2 = document.querySelector('#range2');

       updateRangeEl(rangeEl2);
       rangeEl2.addEventListener("input", function(e) {
         updateRangeEl2(e.target);
         textEl.value = e.target.value;
       });
    }

    function initRangeEl3() {
      var rangeEl3 = document.querySelector('#range3');

       updateRangeEl(rangeEl3);
       rangeEl3.addEventListener("input", function(e) {
         updateRangeEl3(e.target);
         textEl.value = e.target.value;
       });
    }

    function initRangeEl4() {
      var rangeEl3 = document.querySelector('#range4');

       updateRangeEl(rangeEl4);
       rangeEl4.addEventListener("input", function(e) {
         updateRangeEl4(e.target);
         textEl.value = e.target.value;
       });
    }

    initRangeEl1();
    initRangeEl2();
    initRangeEl3();
    initRangeEl4();


  </script>

<?php include('footer-1.php'); ?>
