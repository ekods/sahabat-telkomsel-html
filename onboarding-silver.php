<?php include('header-1.php'); ?>


  <section class="page-fit">
    <div class="page-fit-inner">
      <div class="container">

        <div class="side-banner-1">
          <img src="img/st/Frame 3926.jpg" alt="">
        </div>

        <div class="row justify-content-end" style="z-index: 2; position: relative;">
          <div class="col-md-7 pull-right">

            <div class="box-inner-50">
              <div class="w-100">
                <a href="index.php">
                  <img class="logo-box" src="img/logo.svg" alt="logo" data-rjs="2">
                </a>
              </div>

              <div class="section-title m-top-60  m-bottom-60">
                  <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">Benefit yang Kamu Dapatkan</h2>
                  <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">Kamu dapat menggunakan sistem benefit dengan metode diamond</p>
              </div>


              <div class="onboarding-wrap">

                <div class="onboarding-box">
                  <div class="onboarding-img">
                    <img src="img/st/diamond-icon.svg" alt="">
                  </div>
                  <div class="onboarding-content">
                    <h4 class="bold font-telkomselbatiksans">Diamond</h4>
                    <h6>Kumpulkan diamond tanpa batas dan tukarkan dengan berbagai macam reward</h6>

                    <a href="#" data-toggle="modal" data-target="#mekanismeModal" class="notes fred">
                      <i class="fa fa-info-circle"></i>
                      <p>Mekanisme Pengumpulan Diamond</p>
                    </a>
                  </div>
                </div>


                <div class="w-100 form form-white m-top-40">
                  <form action="">
                    <div class="row">
                      <div class="col-sm-5">
                        <label for="">Jenis e-wallet<span>*</span></label>
                        <div class="select" id="ewallet-type">
                          <select>
                            <option value="">Pilih e-wallet</option>
                            <option value="linkaja">LinkAja</option>
                            <option value="ovo">Ovo</option>
                            <option value="gopay">GoPay</option>
                            <option value="dana">Dana</option>
                            <option value="sakuku">Sakuku</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-7">
                        <label for="">Nomor e-wallet<span>*</span></label>
                        <input name="name" id="ewallet-num" type="text" placeholder="08xxx">
                      </div>
                    </div>


                    <div class="w-100 m-top-60 text-right">
                      <input id="go" type="submit" href="#" data-toggle="modal" data-target="#snkModal" class="btn btn-main btn-theme next" value="Selanjutnya">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#errorModal">
                        demo error 
                      </button>
                    </div>
                  </form>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Modal -->
  <div class="modal fade" id="mekanismeModal" tabindex="-1" role="dialog" aria-labelledby="mekanismeModal" aria-hidden="true">
    <div class="modal-dialog modal-medium" role="document">
      <div class="modal-content">
        <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
          <div class="modal-head text-center">
            <h2 class="font-telkomselbatiksans">Mekanisme Pengumpulan Diamond</h2>
            <h5>Sahabat Telkomsel akan mendapatkan benefit di setiap like & view dari posting challenge yang diposting</h5>
          </div>

          <div class="w-100 m-top-30">
            <img src="img/st/dummy/mekanisme-table.svg" alt="" style="width:100%;max-width:600px;margin:0 auto;display: inherit;">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="snkModal" tabindex="-1" role="dialog" aria-labelledby="snkModal" aria-hidden="true">
    <div class="modal-dialog modal-medium" role="document">
      <div class="modal-content">
        <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
          <div class="modal-head text-center">
            <h2 class="font-telkomselbatiksans">Syarat & Ketentuan</h2>
          </div>

          <div class="w-100 m-top-30">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <div class="w-100 m-top-60 text-center">
            <div class="form-check m-bottom-30 text-left">
              <label class="form-check-label" for="snk-agree">
                <input class="form-check-input" type="checkbox" id="snk-agree">
                Dengan ini saya menyetujui syarat dan ketentuan yang berlaku
              </label>
            </div>

            <button id="submit-snk" class="btn btn-main btn-theme" onclick="window.location.href='onboarding-silver-1.php'" disabled>Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content error-modal">
          <div class="modal-header">
     
              <div class="icon-wrapper">
                <img src="img/st/error-icon.svg" alt="">
              </div>
              <div class="err-msg">    
                <h5>Lengkapi Isian Wajib!</h5>
                <p>Ada isian wajib yang belum kamu isi, mohon cek kembali.</p>
              </div>
              <div class="close-button-wrapper">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span class="text-white" aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <script type="text/javascript">

    $(document).ready(function () {
      $('#snk-agree').click(function () {

        $('#submit-snk').prop("disabled", !$("#snk-agree").prop("checked"));
      })
    });

  </script>

<?php include('footer-1.php'); ?>
