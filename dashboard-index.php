<?php include('header-2.php'); ?>

  <section class="ptb-40">
    <div class="container">

      <div class="col-wrap">
        <div class="col-left">
          <?php include('dashboard-nav.php'); ?>
        </div>

        <div class="col-right">
          <div class="bg-content">
            <!-- Title  -->
            <div class="title-gradient"><h3 class="bold">Dashboard</h3></div>
            <!-- MileStone  -->
            <div class="p-top-50">
              <h4 class="bold">Level Sahabat Telkomsel</h4>
              
              <section id="milestone" class="section">
                <div class="rangeContainer">
                  <input id="diamondRange" class="slider" type="range" min="1" max="4" value="1">
                  <span class="nub"></span>
                  <div class="milestone-wrapper">
                    <span id="first" class="dottt active" data-range="1"></span>
                    <span class="dottt" data-range="2">2</span>
                    <span class="dottt" data-range="3">
                      <div class="milestone-locked-wrapper">
                        <img src="img/st/milestone-locked.svg" alt="">
                        <div class="">
                          Close Friend
                        </div>
                      </div>
                    </span>
                    <span class="dottt" data-range="4">
                      <div class="milestone-locked-wrapper">
                        <img src="img/st/milestone-locked.svg" alt="">
                        <div class="">
                          Soulmate
                        </div>
                      </div>
                    </span>
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
                    <div class="row">
                      <div class="col-md-4">
                        <div class="bg-aktivitas">
                          <img src="img/st/aktifitas-icon.svg" alt="">
                        </div>
                      </div>
                      <div class="col-md-8 no-padding">
                        <div class="highlight-content p-top-10">
                          <h3 class="font-telkomselbatiksans fred">12</h3>
                          <p class="neutral">Menunggu Persetujuan</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="highlight">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="bg-aktivitas">
                          <img src="img/st/aktifitas-icon-1.svg" alt="">
                        </div>
                      </div>
                      <div class="col-md-8 no-padding">
                        <div class="highlight-content p-top-10">
                          <h3 class="font-telkomselbatiksans fred">30</h3>
                          <p class="neutral">Postingan Berjalan</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="highlight">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="bg-aktivitas">
                          <img src="img/st/aktifitas-icon-2.svg" alt="">
                        </div>
                      </div>
                      <div class="col-md-8 no-padding">
                        <div class="highlight-content p-top-10">
                          <h3 class="font-telkomselbatiksans fred">206</h3>
                          <p class="neutral">Postingan yang Diikuti</p>
                        </div>
                      </div>
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
            </div>

            <!-- Slider Postingan Berjalan  -->
            <div class="p-top-50">
              <h4 class="bold">Postingan Berjalan (30)</h4>
              <p class="neutral">Daftar Postingan Challenge yang sedang berjalan</p>
              <div class="pl-3 row owl-carousel mission-slider owl-theme" id="fetchSliderPost"></div>
            </div>

            <!-- Slider Challenge  -->
            <div class="p-top-50">
              <h4 class="bold">Postingan Challenge yang Tersedia (16)</h4>
              <p class="neutral">Daftar Postingngan Challenge yang bisa kamu ikuti</p>
              <div class="pl-3 row owl-carousel mission-slider owl-theme" id="fetchSliderChallenge"></div>
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

      milestone();

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

    function milestone(){
          const slider = document.getElementById("diamondRange"),
          milestoneWrapper = document.querySelector(".milestone-wrapper"),
          milestoneDetail = Array.prototype.slice.call(document.querySelectorAll(".dottt"));

        function setActive() {
          milestoneDetail.map(function (dottt) {
            let milestoneIndex = parseInt(dottt.getAttribute("data-range"));
            dottt.classList.remove("active");
            dottt.classList.remove("passed");
            if (milestoneIndex <= Math.floor(slider.value)) {
              dottt.classList.add("passed");
              if (milestoneIndex === Math.round(slider.value)) {
                dottt.classList.add("active");
              }
            }
          });
        }

        function updateMilestone() {
          const firstMilestone = document.querySelector(".dottt:nth-child(1)#first"),
                secondMilestone = document.querySelector(".dottt:nth-child(2)"),
                thrirdMilestone = document.querySelector(".dottt:nth-child(3)"),
                lastMilestone = document.querySelector(".dottt:nth-child(4)"),
                min = this.getAttribute("min"),
                perc = (this.value - min) * 33,
                currentMilestone = Math.floor(this.value);
          console.log(perc);
          console.log(currentMilestone, `current`);
          if (currentMilestone >= 1) {
            this.style.backgroundImage =
              "linear-gradient(to right, #FDA22B, #FF0025 " + perc + "%, #DBDBDB " + perc + "%, #DBDBDB " + perc + "%)";
              // firstMilestone.removeChild(firstMilestone);
              if( !document.querySelector(".dottt:nth-child(1)#first .crown-wrapper") ) {
                $(`.dottt#first`).append(`
                  <div class="crown-wrapper"><img src="img/st/crown.svg"></div>
                `)
                  // firstMilestone.appendChild(document.createElement('img')).src='img/st/crown.svg';
              }
          } 

          if (currentMilestone >= 4) {
            lastMilestone.textContent = "✓";
          } 
          setActive();
        }

        slider.addEventListener("change", updateMilestone);

    }

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

  </script>

<?php include('footer-1.php'); ?>


