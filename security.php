<?php include('header-2.php'); ?>

  <section>
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
                <section>
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="pengaturan.php">Pengaturan</a></li>
                                <li class="breadcrumb-item">Akun Saya</li>
                                <li class="breadcrumb-item active" aria-current="page">Login & Keamanan</li>
                            </ol>
                        </nav>
                    </div>

                    <section>
                        <div class="container">
                            <h1 class="bold">Login</h1>
                        </div>
            
                        <div class="row justify-content-between mb-5 pl-2"> 
                            <div class="col-md-12">
                    
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <div class="p-top-10 p-2">
                                            <h3 class="bold">Password</h3>
                                            <p class="neutral-40">Diperbarui 10 hari yang lalu</p>
                                        </div>
                                    </div>
                                    <div class="col-auto d-flex align-items-center">
                                        <a href="javascript:void(0);" class="bold fred offpage-nav-login">Ganti Password</a>
                                    </div>

                                    <div class="col-12">
                                        <div class="contact-form row px-2">
                                            <form class="form" action="" method="post">
                                                <div class="col-sm-12 contact-form-item">
                                                    <label for="">Password <span>*</span></label>
                                                    <input name="password" id="password" type="password" placeholder="">
                                                </div>
                                                <a href="http://localhost:8888/sahabat-telkomsel-html/account-recovery.php" class="bold fred offpage-nav-login ml-3 pt-2">Lupa Password</a>

                                                <div class="row pl-3 mt-5">
                                                    <div class="col-md-12 col-lg-6">
                                                        <label for="">Password Baru <span>*</span></label>
                                                        <input name="password-baru" id="password-baru" type="password" placeholder="">
                                                    </div>
                                                    <div class="col-md-12 col-lg-6">
                                                        <label for="">Konfirmasi Password Baru <span>*</span></label>
                                                        <input name="konfirmasi-password-baru" id="konfirmasi-password-baru" type="password" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="clear"></div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="col-md-10">
                                        <hr class="mt-5">
                                    </div>

                                </div>                            
                        
                            </div>
                        </div>
                    </section>

                    <section>
                        <div class="container">
                            <h1 class="bold">Akun</h1>
                        </div>
            
                        <div class="row justify-content-between mb-5"> 
                            <div class="col-md-12">
                    
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <div class="p-top-10 p-2">
                                            <h3 class="bold">Nonaktifkan Akun</h3>
                                        </div>
                                    </div>
                                    <div class="col-auto d-flex align-items-center">
                                        <a href="javascript:void(0);" class="bold fred offpage-nav-login">Nonaktifkan</a>
                                    </div>

                                </div>                            
                        
                            </div>
                        </div>
                    </section>
                </section>


                

            </div>
      </div>
    </div>
  </section>


<?php include('footer-1.php'); ?>
