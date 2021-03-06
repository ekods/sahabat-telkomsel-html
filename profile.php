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

          <div id="biodata" class="col-right">

            <div class="col-12">
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
                <div class="col-bio-2 mb-3">
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

                <div class="col-bio-3 mb-3">
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
              </div>
            </div>
            <!-- Highlight Profile  -->
            <div class="py-5">
              <div class="row">

                <div class="col-sm-12 col-md-4">
                  <div class="biodata">
                    <div class="bg-icon-profile">
                      <img src="img/st/hastag-icon.svg" alt="">
                    </div>
                    <div class="highlight-content">
                        <p class="neutral">Hastag</p>
                        <h5 class="font-telkomselbatiksans">#STI_CAMPUS1030</h5>
                    </div>
                  </div>
                </div>

                <div class="col-sm-12 col-md-4">
                  <div class="biodata">
                    <div class="bg-icon-profile">
                      <img src="img/st/share-chat-icon.svg" alt="">
                    </div>
                    <div class="highlight-content">
                        <p class="neutral">Kode Referral</p>
                        <h5 class="font-telkomselbatiksans">STICAMPUS1030</h5>
                    </div>
                  </div>
                </div>

                <!-- GOLD USER -->
                <!-- Empty -->

                <!-- Platinum USER -->
                <!-- Empty -->

                <!-- Silver USER -->

                <div class="col-sm-12 col-md-4">
                  <div class="biodata w-highlight-btn">
                    <div class="bg-icon-profile">
                      <img src="img/st/diamond-icon.svg" alt="">
                    </div>
                    <div class="highlight-content">
                        <p class="neutral">Total Diamond</p>
                        <h5 class="font-telkomselbatiksans">1,326</h5>
                    </div>
                    <div class="highlight-btn">
                      <a href="#" class="btn">Redeem</a>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- Tabs  -->
            <div class="bg-content tabs-page position-relative">
              <!-- Nav Tab -->
              <div class="nav-wrapper">
                  <ul class="nav nav-pills">
                    <li class="active">
                      <a href="#1a" data-toggle="tab" aria-expanded="true">Biodata</a>
                    </li>
                    <li class="">
                      <a href="#2a" data-toggle="tab" aria-expanded="false">Social Media</a>
                    </li>
                    <!-- Add Rate Card Nav For Gold & Platinum -->
                    <li class="">
                      <a href="#3a" data-toggle="tab" aria-expanded="false">Rate Card</a>
                    </li>
                  </ul>
              </div>


              <!-- Tab Content -->
              <div class="tab-content clearfix">
                <div class="tab-pane active" id="1a">
                  <div class="bg-content mt-5">
                    <div class="row justify-content-between">
                      <div class="col">
                        <div class="icon-wrapper d-inline-block"><img src="img/st/profile-icon.svg" alt=""></div>
                        <div class="text-left d-inline-block"><h4 class="bold">Informasi Personal</h4></div>
                      </div>
                      <div class="col-3 text-right">
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#informasiPersonal">
                          <div class="icon-wrapper d-inline-block"><img src="img/st/edit-icon.svg" alt=""></div>
                          <div class="text-right d-inline-block"><h6 class="fred">Edit Data</h6></div>
                        </a>
                      </div>
                    </div>
                    <hr>

                    <div class="row profile-information">
                      <div class="col-3">
                        <div class="avatar-input">
                          <div class="avatar-upload">
                              <div class="avatar-edit">
                                  <input type="file" id="imageUpload" accept=".png, .jpg, .jpeg">
                              </div>
                              <div class="avatar-preview">
                                  <div id="imagePreview"></div>
                              </div>
                          </div>
                          <div class="avatar-label">
                            <label for="imageUpload" class="btn m-top-10">Upload Foto</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-9">
                        <div class="row">
                          <div class="col-12 py-2">
                            <p class="neutral-40">Nama Lengkap</p>
                            <h4 class="bold">Maudy Ayunda Putri</h4>
                          </div>

                          <div class="col-12 py-2">
                            <p class="neutral-40">Email</p>
                            <h4 class="bold">maudy@mail.com</h4>
                          </div>


                          <div class="col-6 py-2">
                            <p class="neutral-40">Nomor Handphone</p>
                            <h4 class="bold">081234567890</h4>
                          </div>


                          <div class="col-6 py-2">
                            <p class="neutral-40">Nomor Link  Aja</p>
                            <h4 class="bold">081234567890</h4>
                          </div>

                          <div class="col-12 py-2">
                            <p class="neutral-40">Status</p>
                            <h4 class="bold">Mahasiswa</h4>
                          </div>

                          <div class="col-12 py-2">
                            <p class="neutral-40">Jenis Kelamin</p>
                            <h4 class="bold">Perempuan</h4>
                          </div>

                          <div class="col-12 py-2">
                            <p class="neutral-40">Hobi</p>
                            <div>
                              <a class="btn btn-default semi-bold tag d-inline-table bold">#Automotive</a>
                              <a class="btn btn-default semi-bold tag d-inline-table bold">#Photography</a>
                              <a class="btn btn-default semi-bold tag d-inline-table bold">#Travelling</a>
                              <a class="btn btn-default semi-bold tag d-inline-table bold">#Games</a>
                            </div>
                          </div>

                          <div class="col-6 py-2">
                            <p class="neutral-40">Tempat Lahir</p>
                            <h4 class="bold">Jakarta Selatan</h4>
                          </div>


                          <div class="col-6 py-2">
                            <p class="neutral-40">Tanggal Lahir</p>
                            <h4 class="bold">18 Januari 1995</h4>
                          </div>

                          <div class="col-6 py-2">
                            <p class="neutral-40">Provinsi Domisili</p>
                            <h4 class="bold">DKI Jakarta</h4>
                          </div>


                          <div class="col-6 py-2">
                            <p class="neutral-40">Kota Domisili</p>
                            <h4 class="bold">Jakarta Selatan</h4>
                          </div>

                          <div class="col-12 py-2">
                            <p class="neutral-40">Alamat Domisili</p>
                            <h4 class="bold">Jl. Panglima Polim no 17, Cipete Utara, Kebayoran Baru, 12050</h4>
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>

                  <div class="bg-content mt-5">
                    <div class="row justify-content-between">
                      <div class="col">
                        <div class="icon-wrapper d-inline-block"><img src="img/st/docs-icon.svg" alt=""></div>
                        <div class="text-left d-inline-block"><h4 class="bold">Dokumen Pribadi</h4></div>
                      </div>
                      <div class="col-3 text-right">
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#dokumenPribadi">
                          <div class="icon-wrapper d-inline-block"><img src="img/st/edit-icon.svg" alt=""></div>
                          <div class="text-right d-inline-block"><h6 class="fred">Edit Data</h6></div>
                        </a>
                      </div>
                    </div>
                    <hr>

                    <div class="row upload-pdf">

                      <div class="col-12 my-2">
                        <div class="row">
                          <div class="col-md-5 overflow-hidden">
                            <div class="bggrey rounded">
                              <a href="img/testimonial-bg.jpg" target="_blank">
                                <div class="row">
                                  <div class="col-md-4">
                                    <div class="p-2">
                                      <img src="img/st/file-cloud-outline.png" alt="">
                                    </div>
                                  </div>
                                  <div class="col-md-8 no-padding">
                                    <div class="p-top-10 p-2">
                                      <p class="neutral-40">Foto KTP</p>
                                      <h6 class="bold">my-ktp-photo.pdf</h6>
                                    </div>
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="p-top-10 p-2">
                                    <p class="neutral-40">Nomor KTP</p>
                                    <h6 class="bold">30123456789</h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-12 my-2">
                        <div class="row">
                          <div class="col-md-5 overflow-hidden">
                            <div class="bggrey rounded">
                              <a href="img/testimonial-bg.jpg" target="_blank">
                                <div class="row">
                                  <div class="col-md-4">
                                    <div class="p-2">
                                      <img src="img/st/file-cloud-outline.png" alt="">
                                    </div>
                                  </div>
                                  <div class="col-md-8 no-padding">
                                    <div class="p-top-10 p-2">
                                      <p class="neutral-40">Foto KTP</p>
                                      <h6 class="bold">my-ktp-photo.pdf</h6>
                                    </div>
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="p-top-10 p-2">
                                    <p class="neutral-40">Nomor KTP</p>
                                    <h6 class="bold">30123456789</h6>
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

                <div class="tab-pane" id="2a">
                  <div class="bg-content mt-5">
                    <div class="row justify-content-between">
                      <div class="col">
                        <div class="icon-wrapper d-inline-block"><img src="img/st/social-media-icon.svg" alt=""></div>
                        <div class="text-left d-inline-block"><h4 class="bold">Akun Social Media</h4></div>
                      </div>
                      <div class="col-3 text-right">
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#socialMedia">
                          <div class="icon-wrapper d-inline-block"><img src="img/st/edit-icon.svg" alt=""></div>
                          <div class="text-right d-inline-block"><h6 class="fred">Edit Data</h6></div>
                        </a>
                      </div>
                    </div>
                    <hr>

                    <div class="row social-tabs">
                      <div class="col-12 py-2">
                        <div class="row">
                          <div class="col-auto d-flex">
                            <div class="icon-social-wrapper">
                              <img src="img/st/social-ig.svg" alt="">
                            </div>
                          </div>
                          <div class="col-auto d-flex">
                            <div>
                              <p class="neutral-40">Username Instagram</p>
                              <h5>maudy_ayunda</h5>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="col-12 py-2">
                        <div class="row">
                          <div class="col-auto d-flex">
                            <div class="icon-social-wrapper">
                              <img src="img/st/social-twitter.svg" alt="">
                            </div>
                          </div>
                          <div class="col-auto d-flex">
                            <div>
                              <p class="neutral-40">Username Instagram</p>
                              <h5>maudy_ayunda</h5>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="col-12 py-2">
                        <div class="row">
                          <div class="col-auto d-flex">
                            <div class="icon-social-wrapper">
                              <img src="img/st/social-yt.svg" alt="">
                            </div>
                          </div>
                          <div class="col-auto d-flex">
                            <div>
                              <p class="neutral-40">Username Instagram</p>
                              <h5>maudy_ayunda</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 py-2">
                        <p class="neutral-40 pb-2">Tipe Influencer</p>
                        <div>
                          <a class="btn btn-default semi-bold tag d-inline-table">Beauty Influencer</a>
                          <a class="btn btn-default semi-bold tag d-inline-table">Food Influencer</a>
                          <a class="btn btn-default semi-bold tag d-inline-table">Travel Influencer</a>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <!-- Add Rate Card for GOLD & PLATUNUM -->
                <div class="tab-pane" id="3a">
                  <div class="bg-content mt-5">
                    <div class="row justify-content-between">
                      <div class="col">
                        <div class="icon-wrapper d-inline-block"><img src="img/st/ig-icon.png" alt=""></div>
                        <div class="text-left d-inline-block"><h4 class="bold">Instagram</h4></div>
                      </div>
                      <div class="col-3 text-right">
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#rateCard">
                          <div class="icon-wrapper d-inline-block"><img src="img/st/edit-icon.svg" alt=""></div>
                          <div class="text-right d-inline-block"><h6 class="fred">Edit Data</h6></div>
                        </a>
                      </div>
                    </div>
                    <hr>

                    <div class="row">
                      <div class="col-12 my-2">
                          <div class="row">
                            <div class="col-md-3">
                              <div class="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="p-top-10 p-2">
                                      <p class="neutral-40">Story Foto</p>
                                      <h6 class="bold">Rp 400.000</h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="p-top-10 p-2">
                                      <p class="neutral-40">Story Video</p>
                                      <h6 class="bold">Rp 650.000</h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="p-top-10 p-2">
                                      <p class="neutral-40">Feed Foto</p>
                                      <h6 class="bold">Rp 510.000</h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="p-top-10 p-2">
                                      <p class="neutral-40">Feed Video</p>
                                      <h6 class="bold">Rp 790.000</h6>
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
            </div>
          </div>
      </div>
    </div>
  </section>


  <!-- The Modal Informasi Personal-->
  <div class="modal fade" id="informasiPersonal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title bold">Edit Informasi Personal</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form class="form" name="ajax-form" action="onboarding-silver-1.php" method="post">
            <div class="col-sm-12 contact-form-item">
                <label for="">Nama Lengkap<span>*</span></label>
                <input name="name" id="name" type="text" placeholder="Isi nama lengkap">
            </div>
            <div class="col-sm-12 contact-form-item">
                <label for="">Email<span>*</span></label>
                <input name="name" id="name" type="text" placeholder="user@mail.com">
            </div>
            <div class="col-sm-12 contact-form-item">
                <label for="">Nomor Handphone<span>*</span></label>
                <input name="name" id="name" type="text" placeholder="cth. 08123xxx">
            </div>
            <div class="col-sm-12 contact-form-item">
                <label for="">Nomor LinkAja<span>*</span></label>
                <input name="name" id="name" type="text" placeholder="cth. 08123xxx">
            </div>

            <div class="col-sm-12 contact-form-item">
                <label for="">Status<span>*</span></label>
                <div class="select">
                  <select onchange="showresult(this.value)">
                    <option value="">Pilih status</option>
                    <option value="pelajar">Pelajar</option>
                    <option value="mahasiswa">Mahasiswa</option>
                    <option value="umum">Umum</option>
                    <option value="kol-influencer">KOL / Influencer</option>
                    <option value="internal-telkomsel">Internal Telkomsel</option>
                  </select>
                </div>
            </div>

            <div class="col-sm-12 contact-form-item">
                <label for="">Jenis Kelamin<span>*</span></label>
                <div class="select">
                  <select>
                    <option value="">Pilih jenis kelamin</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
                </div>
            </div>

            <div class="col-sm-12 contact-form-item">
                <label for="">Passion Point<span>*</span></label>
                <div class="dropdown">
                  <label class="dropdown-label">Pilih Passion</label>

                  <div class="dropdown-list">
                    <div class="checkbox">
                      <input type="checkbox" name="dropdown-group" class="check checkbox-custom" id="checkbox-custom_01"/>
                      <label for="checkbox-custom_01" class="checkbox-custom-label">Game / Video Game</label>
                    </div>

                    <div class="checkbox">
                      <input type="checkbox" name="dropdown-group" class="check checkbox-custom" id="checkbox-custom_02"/>
                      <label for="checkbox-custom_02" class="checkbox-custom-label">Movie</label>
                    </div>

                    <div class="checkbox">
                      <input type="checkbox" name="dropdown-group" class="check checkbox-custom" id="checkbox-custom_03"/>
                      <label for="checkbox-custom_03" class="checkbox-custom-label">Sport</label>
                    </div>

                    <div class="checkbox">
                      <input type="checkbox" name="dropdown-group" class="check checkbox-custom" id="checkbox-custom_04"/>
                      <label for="checkbox-custom_04" class="checkbox-custom-label">Food</label>
                    </div>

                    <div class="checkbox">
                      <input type="checkbox" name="dropdown-group" class="check checkbox-custom" id="checkbox-custom_05"/>
                      <label for="checkbox-custom_05" class="checkbox-custom-label">Fashion</label>
                    </div>

                    <div class="checkbox">
                      <input type="checkbox" name="dropdown-group" class="check checkbox-custom" id="checkbox-custom_06"/>
                      <label for="checkbox-custom_06" class="checkbox-custom-label">Beauty / Makeup</label>
                    </div>

                    <div class="checkbox">
                      <input type="checkbox" name="dropdown-group" class="check checkbox-custom" id="checkbox-custom_07"/>
                      <label for="checkbox-custom_07" class="checkbox-custom-label">Travel</label>
                    </div>

                    <div class="checkbox">
                      <input type="checkbox" name="dropdown-group" class="check checkbox-custom" id="checkbox-custom_08"/>
                      <label for="checkbox-custom_08" class="checkbox-custom-label">Art / Photography</label>
                    </div>

                    <div class="checkbox">
                      <input type="checkbox" name="dropdown-group" class="check checkbox-custom" id="checkbox-custom_09"/>
                      <label for="checkbox-custom_09" class="checkbox-custom-label">Education</label>
                    </div>

                    <div class="checkbox">
                      <input type="checkbox" name="dropdown-group" class="check checkbox-custom" id="checkbox-custom_10"/>
                      <label for="checkbox-custom_10" class="checkbox-custom-label">Book / Reading</label>
                    </div>

                    <div class="checkbox">
                      <input type="checkbox" name="dropdown-group" class="check checkbox-custom" id="checkbox-custom_11"/>
                      <label for="checkbox-custom_11" class="checkbox-custom-label">Cooking / Baking</label>
                    </div>

                    <div class="checkbox">
                      <input type="checkbox" name="dropdown-group" class="check checkbox-custom" id="checkbox-custom_12"/>
                      <label for="checkbox-custom_12" class="checkbox-custom-label">Technology</label>
                    </div>

                    <div class="checkbox">
                      <input type="checkbox" name="dropdown-group" class="check checkbox-custom" id="checkbox-custom_13"/>
                      <label for="checkbox-custom_13" class="checkbox-custom-label">Family</label>
                    </div>

                    <div class="checkbox">
                      <input type="checkbox" name="dropdown-group" class="check checkbox-custom" id="checkbox-custom_14"/>
                      <label for="checkbox-custom_14" class="checkbox-custom-label">Fitness</label>
                    </div>
                  </div>
                </div>
            </div>

            <div class="col-sm-12 contact-form-item">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <label for="">Tempat Lahir<span>*</span></label>
                  <input name="" id="" type="text" placeholder="Isi kota lahir">
                </div>
                <div class="col-md-6 col-sm-6">
                  <label for="">Tanggal Lahir<span>*</span></label>
                  <div class="date-picker">
                    <input type="text" id="datepicker" placeholder="Pilih Tanggal">
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-12 contact-form-item">
              <div class="row">
                <div class="col-sm-6 contact-form-item">
                  <label for="">Provinsi Tinggal / Domisili<span>*</span></label>
                  <div class="select">
                    <select onchange="showresult(this.value)">
                      <option value="">Pilih Provinsi</option>
                      <option value="dki-jakarta">DKI Jakarta</option>
                      <option value="jawa-barat">Jawa Barat</option>
                      <option value="jawa-timur">Jawa Timur</option>
                      <option value="jawa-tengah">Jawa Tengah</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6 contact-form-item">
                  <label for="">Kota Tempat Tinggal / Domisili<span>*</span></label>
                  <div class="select">
                    <select onchange="showresult(this.value)">
                      <option value="">Pilih Kota</option>
                      <option value="jakarta-pusat">Jakarta Pusat</option>
                      <option value="jakarta-barat">Jakarta Barat</option>
                      <option value="jakarta-selatan">Jakarta Selatan</option>
                      <option value="jakarta-timur">Jakarta Timur</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-12 contact-form-item">
                <label for="">Alamat Tempat Tinggal<span>*</span></label>
                <textarea name="name" rows="8" cols="80" placeholder="Isi alamat lengkap"></textarea>
            </div>


            <div class="col-sm-12 contact-form-item m-top-40">
                <button type="submit" class="send_message btn btn-main btn-theme w-100">Selanjutnya</button>
            </div>
            <div class="clear"></div>
          </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>



  <!-- The Modal Dokumen Pribadi-->
  <div class="modal fade" id="dokumenPribadi">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title bold">Edit Dokumen Pribadi</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form class="form" name="ajax-form" action="onboarding-silver-1.php" method="post">

            <div class="col-sm-12 contact-form-item">
              <div class="drop-zone">
                <div class="w-100">
                  <div class="drop-zone__prompt">
                    <h5 class="bold">Foto KTP</h5>
                    <small>File format PDF, JPG, atau PNG (max 5 mb)</small>
                  </div>
                </div>
                <label for="myFile" class="btn">Upload</label>
                <input type="file" name="myFile" class="drop-zone__input">
              </div>
            </div>

            <div class="col-sm-12 contact-form-item">
                <label for="">Nomor KTP<span>*</span></label>
                <input name="name" id="name" type="text" placeholder="Isi nomor ktp">
            </div>

            <div class="col-sm-12 contact-form-item">
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

            <div class="col-sm-12 contact-form-item">
                <label for="">Nomor NPWP<span>*</span></label>
                <input name="name" id="name" type="text" placeholder="Isi nomor NPWP">
            </div>

            <div class="col-sm-12 contact-form-item m-top-40">
                <button type="submit" class="send_message btn btn-main btn-theme w-100">Selanjutnya</button>
            </div>
            <div class="clear"></div>

          </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

  <!-- The Modal Social Media-->
  <div class="modal fade" id="socialMedia">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title bold">Edit Social Media</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form class="form" name="ajax-form" action="onboarding-silver-1.php" method="post">

            <div class="col-sm-12 contact-form-item">
                <label for="">Link Akun Instagram<span>*</span></label>
                <input name="instagram" id="instagram" type="text" placeholder="link profil instagram (cth. www.instagram.com/username)">
            </div>

            <div class="col-sm-12 contact-form-item">
              <label for="">Link Akun Twitter<span>*</span></label>
              <input name="instagram" id="twitter" type="text" placeholder="link profil twitter (cth. www.twitter.com/username)">
            </div>

            <div class="col-sm-12 contact-form-item">
              <label for="">Link Akun Youtube<span>*</span></label>
              <input name="instagram" id="youtube" type="text" placeholder="link profil channel youtube (cth. www.youtube.com/username)">
            </div>

            <div class="col-sm-12 contact-form-item m-top-40">
                <button type="submit" class="send_message btn btn-main btn-theme w-100">Selanjutnya</button>
            </div>
            <div class="clear"></div>

          </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

  <!-- The Modal Rate Card-->
  <div class="modal fade" id="rateCard">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title bold">Edit Rate Card</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form class="form" name="ajax-form" action="onboarding-silver-1.php" method="post">

            <div class="col-sm-12 contact-form-item">
                <label for="">Story Foto<span>*</span></label>
                <input name="name" id="name" type="text" placeholder="Isi Story Foto">
            </div>

            <div class="col-sm-12 contact-form-item">
                <label for="">Story Video<span>*</span></label>
                <input name="name" id="name" type="text" placeholder="Isi Story Video">
            </div>

            <div class="col-sm-12 contact-form-item">
                <label for="">Feed Foto<span>*</span></label>
                <input name="name" id="name" type="text" placeholder="Isi Feed Foto">
            </div>

            <div class="col-sm-12 contact-form-item">
                <label for="">Feed Foto<span>*</span></label>
                <input name="name" id="name" type="text" placeholder="Isi Feed Video">
            </div>

            <div class="col-sm-12 contact-form-item m-top-40">
                <button type="submit" class="send_message btn btn-main btn-theme w-100">Selanjutnya</button>
            </div>
            <div class="clear"></div>

          </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

<?php include('footer-1.php'); ?>
