<?php include('header.php'); ?>

  <!-- Start Contact -->
  <section id="hubungi-kami-page" class="p-top-80 p-bottom-50">
    <div class="maps-ov">
      <div class="responsive-map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.80142653823!2d106.82262779580078!3d-6.237301886217271!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x89cf090e52d3cf8!2sTelkomsel%20Smart%20Office%20(TSO)!5e0!3m2!1sen!2sid!4v1639517633348!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <!-- === Contact Form === -->
        <div class="col-md-6 col-sm-6 p-bottom-30">
          <div class="section-title m-bottom-40">
              <h2 class="wow fadeInDown fred" data-wow-duration="1s" data-wow-delay="0.6s">Hubungi Kami</h2>
          </div>

          <div class="contact-form row">

            <form class="form" name="ajax-form" id="ajax-form" action="contact.php" method="post">
              <div class="col-sm-12 contact-form-item wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
                  <label for="">Email<span>*</span></label>

                  <input name="name" id="name" type="text" placeholder="user@mail.com">
                  <span class="error" id="err-email">please enter e-mail</span>
                  <span class="error" id="err-emailvld">e-mail is not a valid format</span>
              </div>
              <div class="col-sm-12 contact-form-item wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
                  <label for="">Nomor HP<span>*</span></label>

                  <input name="email" id="tel" type="text" placeholder="08123xxx">
              </div>
              <div class="col-sm-12 contact-form-item wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
                <label for="">Apa yang bisa kami bantu?<span>*</span></label>
                  <textarea name="message" id="message" placeholder="Deskripsikan hal yang ingin kamu tanyakan"></textarea>
              </div>
              <div class="col-sm-12 contact-form-item">
                  <button class="send_message btn btn-main btn-theme wow fadeInUp animated" id="send" data-lang="en" style="visibility: visible; animation-name: fadeInUp;">Submit</button>
              </div>
              <div class="clear"></div>
              <div class="error text-align-center" id="err-form">There was a problem validating the form please check!</div>
              <div class="error text-align-center" id="err-timedout">The connection to the server timed out!</div>
              <div class="error" id="err-state"></div>
            </form>

            <div class="clearfix"></div>
              <div id="ajaxsuccess">Successfully sent!!</div>
            <div class="clear"></div>

          </div>
        </div> <!-- /.col -->

      </div> <!-- /.row -->
    </div>

  </section>
  <!-- End Contact -->


<?php include('footer.php'); ?>
