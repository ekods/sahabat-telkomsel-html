<?php include('header-2.php'); ?>

    <section>
        <div class="head-banner position-relative">
            <div class="container ml-0 pl-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="pengaturan.php">Pengaturan</a></li>
                        <li class="breadcrumb-item">Akun Saya</li>
                        <li class="breadcrumb-item active" aria-current="page">Keuangan</li>
                    </ol>
                </nav>
            </div>

            <div class="row mx-0 px-0">
                <div class="col-lg-6 pl-0">
                    <div class="pl-5">
                        <h2 class="bold"> Apa yang bisa kami bantu? </h2>
                        <div class="navigation-search">
                            <input type="search" placeholder="Ketik kata kunci yang ingin dicari" class="navigation-search__input" style="background-color: rgba(250, 250, 250, 1)"/>
                            <svg class="navigation-search__icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.5 3C11.2239 3 12.8772 3.68482 14.0962 4.90381C15.3152 6.12279 16 7.77609 16 9.5C16 11.11 15.41 12.59 14.44 13.73L14.71 14H15.5L20.5 19L19 20.5L14 15.5V14.71L13.73 14.44C12.59 15.41 11.11 16 9.5 16C7.77609 16 6.12279 15.3152 4.90381 14.0962C3.68482 12.8772 3 11.2239 3 9.5C3 7.77609 3.68482 6.12279 4.90381 4.90381C6.12279 3.68482 7.77609 3 9.5 3ZM9.5 5C7 5 5 7 5 9.5C5 12 7 14 9.5 14C12 14 14 12 14 9.5C14 7 12 5 9.5 5Z" fill="#FF0025"/>
                            </svg>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="banner-item">
                        <img src="img/st/banner-item-faq.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container title-fly">
            <h1 class="bold text-center">Yang Sering Ditanyakan</h1>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="accordion" id="accordionExample">
                        <div class="mb-3">
                            <div class="faq-wrapper" id="faq-1">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#faq-ans-1" aria-expanded="true" aria-controls="faq-ans-1">
                                    <div class="faq-icon-wrapper d-inline-block">
                                        <img src="img/st/plus-icon.svg" alt="">
                                    </div>
                                    <h4 class="bold d-inline-block pl-4">Apa itu program Sahabat Telkomsel?</h4>
                                </button>
                            </div>

                            <div id="faq-ans-1" class="faq-ans collapse show" aria-labelledby="faq-1" data-parent="#accordionExample">
                                <div class="card-body">
                                    Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="faq-wrapper" id="faq-2">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#faq-ans-2" aria-expanded="true" aria-controls="faq-ans-2">
                                    <div class="faq-icon-wrapper d-inline-block">
                                        <img src="img/st/plus-icon.svg" alt="">
                                    </div>
                                    <h4 class="bold d-inline-block pl-4">Apa syarat audisi/pendaftaran Sahabat Telkomsel?</h4>
                                </button>
                            </div>

                            <div id="faq-ans-2" class="faq-ans collapse show" aria-labelledby="faq-2" data-parent="#accordionExample">
                                <div class="card-body">
                                    Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="faq-wrapper" id="faq-3">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#faq-ans-3" aria-expanded="true" aria-controls="faq-ans-3">
                                    <div class="faq-icon-wrapper d-inline-block">
                                        <img src="img/st/plus-icon.svg" alt="">
                                    </div>
                                    <h4 class="bold d-inline-block pl-4">Bagaimana cara pendaftaran Sahabat Telkomsel?</h4>
                                </button>
                            </div>

                            <div id="faq-ans-3" class="faq-ans collapse show" aria-labelledby="faq-3" data-parent="#accordionExample">
                                <div class="card-body">
                                    Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- <div class="col-12 mb-4">
                    <div class="faq-wrapper">
                        <div class="faq-question" data-toggle="collapse" data-target="#faq-2">
                            <div class="faq-icon-wrapper d-inline-block">
                                <img src="img/st/plus-icon.svg" alt="">
                            </div>
                            <h4 class="bold d-inline-block pl-4">Apa itu program Sahabat Telkomsel?</h4>
                            <div class="faq-answer collapse multi-collapse" id="faq-2">
                                Some placeholder content for the collapse component. 
                                This panel is hidden by default but 
                                revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div> -->


            </div>
        </div>
    </section>


<?php include('footer-1.php'); ?>
