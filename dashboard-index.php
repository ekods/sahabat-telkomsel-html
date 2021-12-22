<?php include('header-2.php'); ?>

  <section class="ptb-40">
    <div class="container">

      <div class="col-wrap">
        <div class="col-left">
          <?php include('dashboard-nav.php'); ?>
        </div>

        <div class="col-right">
          <div class="bg-content">

            <div class="title-gradient"><h3 class="bold">Dashboard</h3></div>

            <div class="p-top-50">
              <h4 class="bold">Level Sahabat Telkomsel</h4>
              <!-- <input id="qty" name="qty" type="range" min="0" max="100" step="1">  -->
              <div>
                <input class="milestone" type="range" min="0" max="6000" step="1" value="0">
                <output class="output"></output>
              </div>
            </div>

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

          </div>
        </div>
      </div>

    </div>
  </section>

  <script>

    $(function() {
        const $document   = $(document),
            $inputRange = $('input[type="range"]');
        
        function valueOutput(element) {
            let value = element.value,
                output = element.parentNode.getElementsByTagName('output')[0];
            output.innerHTML = value;
            console.log(value);
        }

        for (let i = $inputRange.length - 1; i >= 0; i--) {
            valueOutput($inputRange[i]);
        };

        $document.on('input', 'input[type="range"]', function(e) {
            valueOutput(e.target);
        });
        // end
      
        $inputRange.rangeslider({
          polyfill: false 
        });
    });

  </script>

<?php include('footer-1.php'); ?>


