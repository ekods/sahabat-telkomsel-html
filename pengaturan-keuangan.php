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
                <a href="javascript:void(0);" data-toggle="modal" data-target="#addNewAccount" class="bold fred offpage-nav-login">Tambah Akun</a>
            </div>
          </div>
        </div>

          <div class="col-md-12">

              <div class="row">


                  <div class="col-10 my-2">
                      <div class="dark-shadow">
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
                                    <div class="col-6"><a href="javascript:void(0);" data-toggle="modal" data-target="#removeAccount"><img src="img/st/trash-icon.svg" alt=""></a></div>
                                    <div class="col-6"><a href="javascript:void(0);" data-toggle="modal" data-target="#editAccount"><img src="img/st/black-edit-icon.svg" alt=""></a></div>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>

                  <div class="col-10 my-2">
                      <div class="dark-shadow">
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
                                    <div class="col-6"><a href="javascript:void(0);" data-toggle="modal" data-target="#removeAccount"><img src="img/st/trash-icon.svg" alt=""></a></div>
                                    <div class="col-6"><a href="javascript:void(0);" data-toggle="modal" data-target="#editAccount"><img src="img/st/black-edit-icon.svg" alt=""></a></div>
                                </div>
                            </div>
                        </div>
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
          <table id="data_transaksi" class="table table-bordered-1 table-hover dt-responsive" style="width:100%">
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


  <!-- The Modal Add New Account-->
  <div class="modal fade" id="addNewAccount">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title bold">Tambah Akun</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form class="form" name="ajax-form" action="onboarding-silver-1.php" method="post">

            <div class="col-sm-12 contact-form-item">
                <label for="">Nomor Rekening<span>*</span></label>
                <input name="name" id="name" type="text" placeholder="Isi Nomor Rekening">
            </div>

            <div class="col-sm-12 contact-form-item">
                <label for="">Bank<span>*</span></label>
                <input name="name" id="name" type="text" placeholder="Isi Bank">
            </div>

            <div class="col-sm-12 contact-form-item">
                <label for="">Atas Nama<span>*</span></label>
                <input name="name" id="name" type="text" placeholder="Isi Atas Nama">
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

  <!-- The Modal Edit New Account-->
  <div class="modal fade" id="editAccount">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title bold">Edit Akun #1</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form class="form" name="ajax-form" action="onboarding-silver-1.php" method="put">

            <div class="col-sm-12 contact-form-item">
                <label for="">Nomor Rekening<span>*</span></label>
                <input name="name" id="name" type="text" placeholder="Isi Nomor Rekening">
            </div>

            <div class="col-sm-12 contact-form-item">
                <label for="">Bank<span>*</span></label>
                <input name="name" id="name" type="text" placeholder="Isi Bank">
            </div>

            <div class="col-sm-12 contact-form-item">
                <label for="">Atas Nama<span>*</span></label>
                <input name="name" id="name" type="text" placeholder="Isi Atas Nama">
            </div>

            <div class="col-sm-12 contact-form-item">
                <label for="">Primary </label>
                <input class="ml-2" name="name" id="name" type="checkbox" placeholder="Isi Atas Nama">
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

  <!-- The Modal Remove Account-->
  <div class="modal fade" id="removeAccount">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title bold">Remove #1 Akun</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form class="form" name="ajax-form" action="onboarding-silver-1.php" method="put">

            <label for="">Are you sure to remove this account ?</label>

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


  <script type="text/javascript">
  $(document).ready(function() {
    // DataTable initialisation
    $('#data_transaksi').DataTable(
      {
        "scrollX": true,
        "paging": true
      }
    );
  });
  </script>

<?php include('footer-1.php'); ?>
