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

                    <div class="p-top-50">
                        <h4 class="bold">Riwayat Redeem</h4>

                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Order</th>
                                    <th>Description</th>
                                    <th>Deadline</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Alphabet puzzle</td>
                                    <td>2016/01/15</td>
                                    <td>Done</td>
                                    <td data-order="1000">€1.000,00</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Layout for poster</td>
                                    <td>2016/01/31</td>
                                    <td>Planned</td>
                                    <td data-order="1834">€1.834,00</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Image creation</td>
                                    <td>2016/01/23</td>
                                    <td>To Do</td>
                                    <td data-order="1500">€1.500,00</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Create font</td>
                                    <td>2016/02/26</td>
                                    <td>Done</td>
                                    <td data-order="1200">€1.200,00</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Sticker production</td>
                                    <td>2016/02/18</td>
                                    <td>Planned</td>
                                    <td data-order="2100">€2.100,00</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Glossy poster</td>
                                    <td>2016/03/17</td>
                                    <td>To Do</td>
                                    <td data-order="899">€899,00</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Beer label</td>
                                    <td>2016/05/28</td>
                                    <td>Confirmed</td>
                                    <td data-order="2499">€2.499,00</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Shop sign</td>
                                    <td>2016/04/19</td>
                                    <td>Offer</td>
                                    <td data-order="1099">€1.099,00</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>X-Mas decoration</td>
                                    <td>2016/10/31</td>
                                    <td>Confirmed</td>
                                    <td data-order="1750">€1.750,00</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Halloween invite</td>
                                    <td>2016/09/12</td>
                                    <td>Planned</td>
                                    <td data-order="400">€400,00</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Wedding announcement</td>
                                    <td>2016/07/09</td>
                                    <td>To Do</td>
                                    <td data-order="299">€299,00</td>
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

    // function milestone(){
    //       const slider = document.getElementById("diamondRange"),
    //       milestoneWrapper = document.querySelector(".milestone-wrapper"),
    //       milestoneDetail = Array.prototype.slice.call(document.querySelectorAll(".dottt"));
    //
    //     function setActive() {
    //       milestoneDetail.map(function (dottt) {
    //         let milestoneIndex = parseInt(dottt.getAttribute("data-range"));
    //         dottt.classList.remove("active");
    //         dottt.classList.remove("passed");
    //         if (milestoneIndex <= Math.floor(slider.value)) {
    //           dottt.classList.add("passed");
    //           if (milestoneIndex === Math.round(slider.value)) {
    //             dottt.classList.add("active");
    //           }
    //         }
    //       });
    //     }
    //
    //     function updateMilestone() {
    //       const firstMilestone = document.querySelector(".dottt:nth-child(1)#first"),
    //             secondMilestone = document.querySelector(".dottt:nth-child(2)#second"),
    //             thrirdMilestone = document.querySelector(".dottt:nth-child(3)#third"),
    //             lastMilestone = document.querySelector(".dottt:nth-child(4)#fourth"),
    //             min = this.getAttribute("min"),
    //             perc = (this.value - min) * 33,
    //             currentMilestone = Math.floor(this.value);
    //       console.log(perc);
    //       console.log(currentMilestone, `current`);
    //       if (currentMilestone > 1 && currentMilestone < 3) {
    //         this.style.backgroundImage =
    //           "linear-gradient(to right, #FDA22B, #FF0025 " + perc + "%, #DBDBDB " + perc + "%, #DBDBDB " + perc + "%)";
    //           if( !document.querySelector(".dottt:nth-child(1)#first .crown-wrapper") ) {
    //             $(`.dottt#first`).append(`
    //               <div class="crown-wrapper"><img src="img/st/crown.svg"><div class="detail text-center">Casual</div></div>
    //             `)
    //           }
    //       } else if (currentMilestone > 2 && currentMilestone < 4) {
    //         this.style.backgroundImage =
    //           "linear-gradient(to right, #FDA22B, #FF0025 " + perc + "%, #DBDBDB " + perc + "%, #DBDBDB " + perc + "%)";
    //
    //           if( !document.querySelector(".dottt:nth-child(1)#first .crown-wrapper") ) {
    //               $(`.dottt#first`).append(`
    //                 <div class="crown-wrapper"><img src="img/st/crown.svg"><div class="detail text-center">Casual</div></div>
    //               `)
    //             }
    //
    //           if( !document.querySelector(".dottt:nth-child(2)#second .crown-wrapper") ) {
    //             $(`.dottt#second`).append(`
    //               <div class="crown-wrapper"><img src="img/st/crown.svg"><div class="detail text-center">Bestie</div></div>
    //             `)
    //           }
    //       } else if (currentMilestone >= 3) {
    //         this.style.backgroundImage =
    //           "linear-gradient(to right, #FDA22B, #FF0025 " + perc + "%, #DBDBDB " + perc + "%, #DBDBDB " + perc + "%)";
    //
    //           if( !document.querySelector(".dottt:nth-child(1)#first .crown-wrapper") ) {
    //               $(`.dottt#first`).append(`
    //                 <div class="crown-wrapper"><img src="img/st/crown.svg"><div class="detail text-center">Casual</div></div>
    //               `)
    //             }
    //
    //           if( !document.querySelector(".dottt:nth-child(2)#second .crown-wrapper") ) {
    //             $(`.dottt#second`).append(`
    //               <div class="crown-wrapper"><img src="img/st/crown.svg"><div class="detail text-center">Bestie</div></div>
    //             `)
    //           }
    //
    //           if( !document.querySelector(".dottt:nth-child(3)#third .crown-wrapper") ) {
    //             $(`.dottt#third`).append(`
    //               <div class="crown-wrapper"><img src="img/st/crown.svg"><div class="detail text-center">Close Firend</div></div>
    //             `)
    //           }
    //       }
    //
    //       // if (currentMilestone >= 4) {
    //       //   lastMilestone.textContent = "✓";
    //       // }
    //       setActive();
    //     }
    //
    //     slider.addEventListener("change", updateMilestone);
    //
    // }

    // $(function() {
    //     const $document   = $(document),
    //         $inputRange = $('input[type="range"]');

    //     function valueOutput(element) {
    //         let value = element.value,
    //             output = element.parentNode.getElementsByTagName('output')[0];
    //         output.innerHTML = value;
    //         console.log(value);
    //     }

    //     for (let i = $inputRange.length - 1; i >= 0; i--) {
    //         valueOutput($inputRange[i]);
    //     };

    //     $document.on('input', 'input[type="range"]', function(e) {
    //         valueOutput(e.target);
    //     });
    //     // end

    //     $inputRange.rangeslider({
    //       polyfill: false
    //     });
    // });

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
