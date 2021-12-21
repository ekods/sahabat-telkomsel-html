<?php include('header-1.php'); ?>


    <section class="offpage-login">
        <div class="site-content">
            <div class="container">
                <div class="row justify-content-between m-top-20">
                    <div class="col-md-6">
                        <!-- Logo -->
                        <img class="logo-box" src="img/logo.svg" alt="logo" data-rjs="2" data-rjs-processed="true">
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="#" data-toggle="modal" data-target="#snkModal" class="btn btn-main btn-theme text-right">Login</a>
                    </div>
                </div>
                <div class="row" style="z-index: 2; position: relative;">

                    <div class="col-md-6 pr-5">
                        <div class="site-inner">
                            <div class="w-100 m-top-20">
                                <div class="section-title m-bottom-40">
                                    <h2 class="wow fadeInDown fred" data-wow-duration="1s" data-wow-delay="0.6s">Reset Password</h2>
                                    <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">Kesulitan untuk masuk dengan akunmu? Ikuti langkah berikut untuk mengatur ulang passwordmu.</p>
                                </div>
                                <div class="contact-form row">
                                    <form class="form" name="ajax-form" id="ajax-form" action="" method="post">
                                        <div class="col-sm-12 contact-form-item">
                                            <label for="">Email yang terdaftar<span>*</span></label>

                                            <input name="name" id="name" type="text" placeholder="user@mail.com">
                                        </div>

                                        <div class="col-sm-12 contact-form-item">
                                            <a class="btn btn-main btn-theme wow fadeInUp animated w-100" data-toggle="modal" data-target="#snkModal" data-lang="en" style="visibility: visible; animation-name: fadeInUp;">Kirim Kode Verifikasi</a>
                                        </div>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-lg-none">
                       <div class="site-inner">
                            <div class="w-100 m-top-20">
                                <div class="row justify-content-between">
                                    <div class="col-md-2">
                                        <div class="page-break"></div>
                                    </div>
                                    <div class="col-md-10 text-right">
                                        <img class="box-355" src="img/st/lock.svg" alt="logo" data-rjs="2" data-rjs-processed="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- Modal -->
  <div class="modal fade" id="snkModal" tabindex="-1" role="dialog" aria-labelledby="snkModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
          <div class="modal-head text-center">
            <img class="box-150" src="img/st/email-info.svg" alt="logo" data-rjs="2" data-rjs-processed="true">
            <h3 class="font-telkomselbatiksans">Link Reset Password Berhasil Dikirim!</h3>
          </div>

          <div class="m-top-30 text-center">
            <h5>Kami telah mengirimkan link ke email kamu untuk melanjutkan</h5>
          </div>

          <div class="m-top-60 text-center">
            <button id="submit-snk" class="btn btn-main btn-theme" onclick="window.location.href='onboarding-silver-1.php'" disabled>oke</button>
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
