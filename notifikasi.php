<?php include('header-2.php'); ?>

  <section>
    <div class="container">

      <div class="col-wrap"> 
        <div class="col-left">
          <?php include('notif-nav.php'); ?>
        </div>

            <div class="col-right">
                <section>
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="pengaturan.php">Pengaturan</a></li>
                                <li class="breadcrumb-item">Akun Saya</li>
                                <li class="breadcrumb-item active" aria-current="page">Keuangan</li>
                            </ol>
                        </nav>
                    </div>

                    <section id="all-notif">
                        <div class="row justify-content-between mb-5 pl-2"> 
                            <div class="col-md-12">
                    
                                <div class="row w-100 justify-content-between">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <div class="container">
                                            <h1 class="bold">Notifikasi (10)</h1>
                                        </div>
                                    </div>
                                    <div class="col-auto text-right d-flex align-items-center">
                                        <a id="read-all" href="">
                                            <div class="icon-wrapper d-inline-block"><img src="img/st/mark-read-icon.svg" alt=""></div>
                                            <div class="text-right d-inline-block"><h6 class="fred bold">Tandai Dibaca Semua</h6></div>
                                        </a>
                                    </div>

                                    <div class="col-12 my-2">
                                        <div class="dark-shadow notif">
                                            <div class="row justify-content-between p-3 px-4">
                                                <div class="col-auto d-flex align-items-center">
                                                    <div class="notif-img-wrapper">
                                                        <img src="img/st/dummy/notif-dummy-1.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-10 d-flex align-items-center">
                                                    <div class="p-top-10">
                                                        <h6>Kamu menerima <span class="bold">permintaan challenge</span> baru. Konfirmasi segera sebelum masa berlaku habis</h6>
                                                        <div>
                                                            <p class="neutral-40 mb-0 d-inline-block">Admin</p>
                                                            <p class="d-inline-block">•</p>
                                                            <p class="neutral-40 mb-0 d-inline-block">10 menit yang lalu</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto d-flex align-items-center ">
                                                    <div class="text-right">
                                                        <div class="dottts"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 my-2">
                                        <div class="dark-shadow notif">
                                            <div class="row justify-content-between p-3 px-4">
                                                <div class="col-auto d-flex align-items-center">
                                                    <div class="notif-img-wrapper">
                                                        <img src="img/st/dummy/notif-dummy-1.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-10 d-flex align-items-center">
                                                    <div class="p-top-10">
                                                        <h6>Kamu menerima <span class="bold">permintaan challenge</span> baru. Konfirmasi segera sebelum masa berlaku habis</h6>
                                                        <div>
                                                            <p class="neutral-40 mb-0 d-inline-block">Admin</p>
                                                            <p class="d-inline-block">•</p>
                                                            <p class="neutral-40 mb-0 d-inline-block">10 menit yang lalu</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto d-flex align-items-center ">
                                                    <div class="text-right">
                                                        <div class="dottts"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

  <script>
    $(".notif").click(function(){
        $(this).removeClass("notif");
    });

    $('#read-all').click(function () {
        event.preventDefault();
        $("#all-notif .notif").removeClass("notif");
    });
  </script>


<?php include('footer-1.php'); ?>
