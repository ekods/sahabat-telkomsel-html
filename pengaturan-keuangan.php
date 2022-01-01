<?php include('header-2.php'); ?>

  <section class="page-content">
    <div class="container">
      <div class="alert alert-primary mt-3 mb-3 bgblueOld" role="alert">
        <h3 class="mb-0"><b>Akunmu Sedang Dalam Verifikasi</b></h3>
        <p>Tim admin kami sedang melakukan verifikasi akunmu. Mohon menunggu sampai akunmu aktif dan bisa digunakan</p>
      </div>
    </div>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="pengaturan.php">Pengaturan</a></li>
                <li class="breadcrumb-item"><a href="pengaturan.php">Akun Saya</a></li>
                <li class="breadcrumb-item active" aria-current="page">Keuangan</li>
            </ol>
        </nav>
    </div>

    <div class="container">
      <h1 class="bold">Keuangan</h1>

      <div class="row justify-content-between mb-5 pl-2">

        <div class="col-md-10">
          <div class="row">
            <div class="col-auto d-flex align-items-center">
                <div class="p-top-10 p-2">
                    <h3 class="bold">Akun Bank Saya</h3>
                    <p class="neutral-40">Diperbarui 10 hari yang lalu</p>
                </div>
            </div>

            <div class="col-auto d-flex align-items-center  ml-auto">
                <a href="javascript:void(0);" class="bold fred offpage-nav-login">Tambah Akun</a>
            </div>
          </div>
        </div>

          <div class="col-md-12">

              <div class="row">


                  <div class="col-10 my-2">
                      <div class="dark-shadow">
                          <a href="security.php">
                              <div class="row p-4">
                                  <div class="col-auto d-flex align-items-center">
                                      <div class="">
                                          <img src="img/st/debit-icon.svg" alt="">
                                      </div>
                                  </div>
                                  <div class="col-md-8 d-flex align-items-center">
                                      <div class="p-top-10">
                                          <h4 class="bold mt-0 d-inline-block">50035281934926</h4>
                                          <div class="btn btn-default bold tag d-inline-block neutral-40">PRIMARY</div>
                                          <div>
                                              <p class="neutral-40 mb-0 d-inline-block">PT Bank Central Asia</p>
                                              <p class="d-inline-block">•</p>
                                              <p class="neutral-40 mb-0 d-inline-block">Maudy Ayunda Putri</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-2 d-flex align-items-center">
                                      <div class="row">
                                          <div class="col-6"><img src="img/st/trash-icon.svg" alt=""></div>
                                          <div class="col-6"><img src="img/st/black-edit-icon.svg" alt=""></div>
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </div>
                  </div>

                  <div class="col-10 my-2">
                      <div class="dark-shadow">
                          <a href="security.php">
                              <div class="row p-4">
                                  <div class="col-auto d-flex align-items-center">
                                      <div class="">
                                          <img src="img/st/debit-icon.svg" alt="">
                                      </div>
                                  </div>
                                  <div class="col-md-8 d-flex align-items-center">
                                      <div class="p-top-10">
                                          <h4 class="bold mt-0">50035281934926</h4>
                                          <p class="neutral-40 mb-0 d-inline-block">PT Bank Central Asia</p>
                                          <p class="d-inline-block">•</p>
                                          <p class="neutral-40 mb-0 d-inline-block">Maudy Ayunda Putri</p>
                                      </div>
                                  </div>
                                  <div class="col-md-2 d-flex align-items-center">
                                      <div class="row">
                                          <div class="col-6"><img src="img/st/trash-icon.svg" alt=""></div>
                                          <div class="col-6"><img src="img/st/black-edit-icon.svg" alt=""></div>
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </div>
                  </div>

              </div>

          </div>
        </div>
    </div>

    <div class="container">

      <h1 class="bold">Transaksi</h1>

      <div class="row">
        <div class="col-12">
          <table id="datatransaksi" class="table table-bordered-1 table-hover dt-responsive" style="width:100%">
            <thead>
              <tr>
                <th class="text-left">Tgl Dibuat</th>
                <th class="text-left">Tgl Diperbarui</th>
                <th class="text-left">Challenge</th>
                <th class="text-left">Keterangan</th>
                <th class="text-left">Nominal</th>
                <th class="text-left">Akun Bank </th>
                <th class="text-left">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td>16  November 2021 08:20:24</td>
                  <td>16  November 2021 08:20:24</td>
                  <td>Mola EPL Leicester City VS Chelsea (2021-11-20)</td>
                  <td>Mola EPL Leicester City VS Chelsea (2021-11-20)</td>
                  <td>Rp 3.500.000</td>
                  <td>50035281934926</td>
                  <td class="text-left">
                      <div class="badge badge-success">Diterima</div>
                  </td>
              </tr>

              <tr>
                  <td>16  November 2021 08:20:24</td>
                  <td>16  November 2021 08:20:24</td>
                  <td>Mola EPL Leicester City VS Chelsea (2021-11-20)</td>
                  <td>Mola EPL Leicester City VS Chelsea (2021-11-20)</td>
                  <td>Rp 3.500.000</td>
                  <td>50035281934926</td>
                  <td class="text-left">
                      <div class="badge badge-warning">Menunggu</div>
                  </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>

  </section>


  <script type="text/javascript">
  $(document).ready(function() {
    // DataTable initialisation
    $('#datatransaksi').DataTable(
      {
        "scrollX": true,
        "paging": true
      }
    );
  });
  </script>

<?php include('footer-1.php'); ?>
