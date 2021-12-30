<?php include('header-2.php'); ?>

  <section>
    <div class="container">
      <div class="alert alert-primary mt-3 mb-3 bgblueOld" role="alert">
        <h3 class="mb-0"><b>Akunmu Sedang Dalam Verifikasi</b></h3>
        <p>Tim admin kami sedang melakukan verifikasi akunmu. Mohon menunggu sampai akunmu aktif dan bisa digunakan</p>
      </div>
    </div>

    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard-challenge-list.php">Challenge</a></li>
          <li class="breadcrumb-item active" aria-current="page">Semua Challenge</li>
        </ol>
      </nav>
    </div>

    <div class="container-fluid p-0">

      <div class="pt-3">
        <div class="container">
          <h1 class="bold">Semua Challenge</h1>
          <div class="navigation-search post">
              <input type="search" placeholder="Ketik kata kunci yang ingin dicari" class="navigation-search__input" />
              <svg class="navigation-search__icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.5 3C11.2239 3 12.8772 3.68482 14.0962 4.90381C15.3152 6.12279 16 7.77609 16 9.5C16 11.11 15.41 12.59 14.44 13.73L14.71 14H15.5L20.5 19L19 20.5L14 15.5V14.71L13.73 14.44C12.59 15.41 11.11 16 9.5 16C7.77609 16 6.12279 15.3152 4.90381 14.0962C3.68482 12.8772 3 11.2239 3 9.5C3 7.77609 3.68482 6.12279 4.90381 4.90381C6.12279 3.68482 7.77609 3 9.5 3ZM9.5 5C7 5 5 7 5 9.5C5 12 7 14 9.5 14C12 14 14 12 14 9.5C14 7 12 5 9.5 5Z" fill="#FF0025"/>
              </svg>

          </div>
        </div>

        <div class="w-100">
          <div id="exTab1" class="tabs-page">

            <div class="container">
              <ul class="nav nav-pills">
                <li class="active">
                  <a  href="#1a" data-toggle="tab">Buat Konten</a>
                </li>
                <li>
                  <a href="#2a" data-toggle="tab">Posting Konten</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <section class="page-content bggrey">
    <div class="w-100 py-3">
      <div class="container">
        <div class="tab-content clearfix">
          <div class="tab-pane active" id="1a">

            <div class="tabs-grid-title py-3">
              <div class="tabs-grid-title-1">
                <h4>Menampilkan 3,200 Postingan Challenge buat kamu.</h4>
              </div>

              <div class="mb-3 mt-3 nav-grid">
                <h4>Tampilan Grid</h4>
                <ul class="nav nav-pills">
                  <li class="active">
                    <a href="#grid-view" data-toggle="tab" aria-expanded="true">grid</a>
                  </li>
                  <li class="">
                    <a href="#list-view" data-toggle="tab" aria-expanded="false">list</a>
                  </li>
                </ul>
                <div>
                  <input type="checkbox" id="pure-toggle-3" hidden="" checked="checked">
                  <label class="pure-toggle wide" for="pure-toggle-3">
                    <span class="fontawesome-ok"></span>
                    <span class="fontawesome-remove"></span>
                  </label>
                </div>
              </div>
            </div>

            <div class="mb-5">
              <input id="startDate" name="startDate" type="text" class="form-control" placeholder="Tgl Mulai" />
              <input id="endDate" name="endDate" type="text" class="form-control" placeholder="Tgl Selesai" />

              <select class="form-control" name="">
                <option value="">Pilih Media</option>
                <option value="a">Media A</option>
                <option value="b">Media B</option>
              </select>
            </div>


            <div class="tab-pane active" id="grid-view">
              <div class="w-100 grid-container">
                <div class="row">
                  <div class="col-12 col-md-6 col-lg-4">
                    <div class="blog mission">
                      <div class="blog-inner shadow">
                        <div class="position-relative">
                          <a href="detail-challenge.php">
                            <div class="note"><p>Sedang Berjalan</p></div>
                            <img src="img/st/dummy/slide-dummy.jpg" alt="">
                          </a>
                        </div>
                        <div class="blog-post-body">
                          <a href="detail-challenge.php">
                            <h4 class="bold m-bottom-10">Nomor Anti Hangus</h4>
                          </a>
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
                  </div>
                  <div class="col-12 col-md-6 col-lg-4">
                    <div class="blog mission">
                      <div class="blog-inner shadow">
                        <div class="position-relative">
                          <a href="detail-challenge.php">
                            <div class="note"><p>Sedang Berjalan</p></div>
                            <img src="img/st/dummy/image 2.jpg" alt="">
                          </a>
                        </div>
                        <div class="blog-post-body">
                          <a href="detail-challenge.php">
                            <h4 class="bold m-bottom-10">Nomor Anti Hangus</h4>
                          </a>
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
                  </div>
                  <div class="col-12 col-md-6 col-lg-4">
                    <div class="blog mission">
                      <div class="blog-inner shadow">
                        <div class="position-relative">
                          <a href="detail-challenge.php">
                            <div class="note"><p>Sedang Berjalan</p></div>
                            <img src="img/st/dummy/image 3.jpg" alt="">
                          </a>
                        </div>
                        <div class="blog-post-body">
                          <a href="detail-challenge.php">
                            <h4 class="bold m-bottom-10">Nomor Anti Hangus</h4>
                          </a>
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
                  </div>
                  <div class="col-12 col-md-6 col-lg-4">
                    <div class="blog mission">
                      <div class="blog-inner shadow">
                        <div class="position-relative">
                          <a href="detail-challenge.php">
                            <div class="note"><p>Sedang Berjalan</p></div>
                            <img src="img/st/dummy/slide-dummy.jpg" alt="">
                          </a>
                        </div>
                        <div class="blog-post-body">
                          <a href="detail-challenge.php">
                            <h4 class="bold m-bottom-10">Nomor Anti Hangus</h4>
                          </a>
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
                  </div>
                  <div class="col-12 col-md-6 col-lg-4">
                    <div class="blog mission">
                      <div class="blog-inner shadow">
                        <div class="position-relative">
                          <a href="detail-challenge.php">
                            <div class="note"><p>Sedang Berjalan</p></div>
                            <img src="img/st/dummy/image 2.jpg" alt="">
                          </a>
                        </div>
                        <div class="blog-post-body">
                          <a href="detail-challenge.php">
                            <h4 class="bold m-bottom-10">Nomor Anti Hangus</h4>
                          </a>
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
                  </div>
                  <div class="col-12 col-md-6 col-lg-4">
                    <div class="blog mission">
                      <div class="blog-inner shadow">
                        <div class="position-relative">
                          <a href="detail-challenge.php">
                            <div class="note"><p>Sedang Berjalan</p></div>
                            <img src="img/st/dummy/slide-dummy.jpg" alt="">
                          </a>
                        </div>
                        <div class="blog-post-body">
                          <a href="detail-challenge.php">
                            <h4 class="bold m-bottom-10">Nomor Anti Hangus</h4>
                          </a>
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
                  </div>
                </div>

              </div>
            </div>

            <div class="tab-pane" id="list-view">

            <div class="ml-3 view-list-table">
                <table class="table table-borderless">
                    <thead class="border-head">
                        <tr>
                            <th class="text-left">No</th>
                            <th class="text-left">Postingan Challenge</th>
                            <th class="text-left"><a href="" class="short-arrow position-relative pr-3">Tgl Mulai</a></th>
                            <th class="text-left"><a href="" class="short-arrow position-relative pr-3">Tgl Selesai</a></th>
                            <th class="text-left"><a href="" class="short-arrow position-relative pr-3">Media</a></th>
                            <th class="text-left">Akun Hastag </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                              <div class="row">
                                  <div class="col-4 d-flex align-items-center">
                                      <div class="view-list-image-wrapper">
                                        <img src="img/st/dummy/slide-dummy.jpg" alt="">
                                      </div>
                                  </div>
                                  <div class="col-8 px-0">Mola EPL Leicester City VS Chelsea (2021-11-20)</div>
                              </div>
                            </td>
                            <td>02 Feb 2021</td>
                            <td>02 Mar 2021</td>
                            <td>
                              <div class="row">
                                  <div class="col-6 p-2 d-flex align-items-center">
                                      <div class="view-list-icon d-flex align-items-center">
                                        <img src="img/st/video-icon.svg" alt="">
                                      </div>
                                  </div>
                            </td>
                            <td>
                              <div class="text-left">
                                <a class="btn btn-default semi-bold tag d-block">#Tsel4U2497</a>
                                <a class="btn btn-default semi-bold tag d-block">#TselVIU</a>
                                <a class="btn btn-default semi-bold tag d-block">#TselVIU</a>
                              </div>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>
                              <div class="row">
                                  <div class="col-4 d-flex align-items-center">
                                      <div class="view-list-image-wrapper">
                                        <img src="img/st/dummy/slide-dummy.jpg" alt="">
                                      </div>
                                  </div>
                                  <div class="col-8 px-0">Mola EPL Leicester City VS Chelsea (2021-11-20)</div>
                              </div>
                            </td>
                            <td>02 Feb 2021</td>
                            <td>02 Mar 2021</td>
                            <td>
                              <div class="row">
                                  <div class="col-6 p-2 d-flex align-items-center">
                                      <div class="view-list-icon d-flex align-items-center">
                                        <img src="img/st/video-icon.svg" alt="">
                                      </div>
                                  </div>
                                  <div class="col-6 p-2 d-flex align-items-center">
                                      <div class="view-list-icon d-flex align-items-center">
                                        <img src="img/st/image-icon.svg" alt="">
                                      </div>
                                  </div>
                              </div>
                            </td>
                            <td>
                              <div class="text-left">
                                <a class="btn btn-default semi-bold tag d-block">#Tsel4U2497</a>
                                <a class="btn btn-default semi-bold tag d-block">#TselVIU</a>
                                <a class="btn btn-default semi-bold tag d-block">#TselVIU</a>
                              </div>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>
                              <div class="row">
                                  <div class="col-4 d-flex align-items-center">
                                      <div class="view-list-image-wrapper">
                                        <img src="img/st/dummy/slide-dummy.jpg" alt="">
                                      </div>
                                  </div>
                                  <div class="col-8 px-0">Mola EPL Leicester City VS Chelsea (2021-11-20)</div>
                              </div>
                            </td>
                            <td>02 Feb 2021</td>
                            <td>02 Mar 2021</td>
                            <td>
                              <div class="row">
                                  <div class="col-6 p-2 d-flex align-items-center">
                                      <div class="view-list-icon d-flex align-items-center">
                                        <img src="img/st/image-icon.svg" alt="">
                                      </div>
                                  </div>
                              </div>
                            </td>
                            <td>
                              <div class="text-left">
                                <a class="btn btn-default semi-bold tag d-block">#Tsel4U2497</a>
                              </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>


            </div>

          </div>
          <div class="tab-pane" id="2a">

            <div class="tabs-grid-title py-3">
              <div class="tabs-grid-title-1">
                <h4>Menampilkan 3,200 Postingan Challenge buat kamu.</h4>
              </div>

              <!-- <div class="mb-3 mt-3 nav-grid">
                <h4>Tampilan Grid</h4>
                <div class="nav nav-pills">
                  <button class="btn btn-primary btn-grid">Grid View</button>
                  <button class="btn btn-danger btn-list">List View</button>
                </div>
              </div> -->
            </div>


            <div class="w-100 grid-container">
              <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="blog mission">
                    <div class="blog-inner shadow">
                      <div class="position-relative">
                        <a href="detail-challenge.php">
                          <div class="note"><p>Sedang Berjalan</p></div>
                          <img src="img/st/dummy/image 2.jpg" alt="">
                        </a>
                      </div>
                      <div class="blog-post-body">
                        <a href="detail-challenge.php">
                          <h4 class="bold m-bottom-10">Nomor Anti Hangus</h4>
                        </a>
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
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="blog mission">
                    <div class="blog-inner shadow">
                      <div class="position-relative">
                        <a href="detail-challenge.php">
                          <div class="note"><p>Sedang Berjalan</p></div>
                          <img src="img/st/dummy/image 3.jpg" alt="">
                        </a>
                      </div>
                      <div class="blog-post-body">
                        <a href="detail-challenge.php">
                          <h4 class="bold m-bottom-10">Nomor Anti Hangus</h4>
                        </a>
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
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="blog mission">
                    <div class="blog-inner shadow">
                      <div class="position-relative">
                        <a href="detail-challenge.php">
                          <div class="note"><p>Sedang Berjalan</p></div>
                          <img src="img/st/dummy/image 2.jpg" alt="">
                        </a>
                      </div>
                      <div class="blog-post-body">
                        <a href="detail-challenge.php">
                          <h4 class="bold m-bottom-10">Nomor Anti Hangus</h4>
                        </a>
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
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="blog mission">
                    <div class="blog-inner shadow">
                      <div class="position-relative">
                        <a href="detail-challenge.php">
                          <div class="note"><p>Sedang Berjalan</p></div>
                          <img src="img/st/dummy/slide-dummy.jpg" alt="">
                        </a>
                      </div>
                      <div class="blog-post-body">
                        <a href="detail-challenge.php">
                          <h4 class="bold m-bottom-10">Nomor Anti Hangus</h4>
                        </a>
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
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="blog mission">
                    <div class="blog-inner shadow">
                      <div class="position-relative">
                        <a href="detail-challenge.php">
                          <div class="note"><p>Sedang Berjalan</p></div>
                          <img src="img/st/dummy/slide-dummy.jpg" alt="">
                        </a>
                      </div>
                      <div class="blog-post-body">
                        <a href="detail-challenge.php">
                          <h4 class="bold m-bottom-10">Nomor Anti Hangus</h4>
                        </a>
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
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="blog mission">
                    <div class="blog-inner shadow">
                      <div class="position-relative">
                        <a href="detail-challenge.php">
                          <div class="note"><p>Sedang Berjalan</p></div>
                          <img src="img/st/dummy/slide-dummy.jpg" alt="">
                        </a>
                      </div>
                      <div class="blog-post-body">
                          <a href="detail-challenge.php">
                            <h4 class="bold m-bottom-10">Nomor Anti Hangus</h4>
                          </a>
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
    $(".short-arrow").click(function(){
        event.preventDefault();
        $(this).toggleClass("active");
    });

    $(function () {
        var sd = new Date(), ed = new Date();

        $('#startDate').datetimepicker({
          pickTime: false,
          format: "YYYY/MM/DD",
          maxDate: ed
        });

        $('#endDate').datetimepicker({
          pickTime: false,
          format: "YYYY/MM/DD",
          minDate: sd
        });
    });

  </script>

<?php include('footer-1.php'); ?>
