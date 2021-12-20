<?php include('header-1.php'); ?>


  <section class="page-fit">
    <div class="page-fit-inner">
      <div class="container">

        <div class="side-banner-1">
          <img src="img/st/Frame 3926.jpg" alt="">
        </div>

        <div class="row" style="z-index: 2; position: relative;">
          <div class="col-md-7 pull-right">

            <div class="box-inner-50">
              <div class="w-100">
                <a href="index.php">
                  <img class="logo-box" src="img/logo.svg" alt="logo" data-rjs="2">
                </a>
              </div>

              <div class="section-title m-top-60  m-bottom-60">
                  <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">Dokumen Lainnya</h2>
                  <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">Lengkapi informasi serta dokumen lannya dibawah ini</p>
              </div>


              <div class="onboarding-wrap">

             
                    <form class="form" action="">
                      <div class="contact-form-item">
                        <div class="drop-zone">
                          <div class="w-100">
                            <div class="drop-zone__prompt">
                              <h5 class="bold">Foto NPWP</h5>
                              <small>File format PDF, JPG, atau PNG (max 5 mb)</small>
                            </div>
                          </div>
                          <label for="myFile" class="btn">Upload</label>
                          <input type="file" name="myFile" class="drop-zone__input">
                        </div>
                      </div>



                      <div class="w-100 form form-white m-top-40">
                        <div class="row">
                          <div class="col-sm-5">
                            <label for="">Jenis e-wallet<span>*</span></label>
                            <div class="select">
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
                            <input name="name" id="" type="text" placeholder="08xxx">
                          </div>
                        </div>

                        <div class="w-100 m-top-60">
                          <div class="row justify-content-between">
                            <div class="col-md-6">
                              <a href="#" class="btn btn-main btn-theme text-left">Kembali</a>
                            </div>
                            <div class="col-md-6 text-right">
                              <a href="#" data-toggle="modal" data-target="#snkModal" class="btn btn-main btn-theme text-right">Selanjutnya</a>
                            </div>
                          </div>
  
                              
                          </div>
                      </div>
                    </form>
 

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


  <script type="text/javascript">

    $(document).ready(function () {
      $('#snk-agree').click(function () {
        $('#submit-snk').prop("disabled", !$("#snk-agree").prop("checked"));
      })

    });

  </script>

<?php include('footer-1.php'); ?>
