<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="keywords" content="Hantus, Responsive, SPA Template, Bootstrap 4,">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
        <title>Hantus - Spa and Beauty HTML template</title>
        <?php $this->load->view('site/common/css') ?>
    </head>
    <body>
        <?php $this->load->view('site/common/header') ?>
        <section id="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>Contact</h2>
                        <ul class="breadcrumb-nav list-inline">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End: Breadcrumb Area
            ============================= -->
        <!-- Start: Contact
            ============================= -->
        <section id="contact" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 contact-form">
                        <h2>Contact Form</h2>
                        <form action="#">
                            <span class="input input--hantus">
                                <input class="input__field input__field--hantus" type="text" id="input-01" />
                                <label class="input__label input__label--hantus" for="input-01">
                                    <svg class="graphic graphic--hantus" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--hantus">Name</span>
                                </label>
                            </span>
                            <span class="input input--hantus">
                                <input class="input__field input__field--hantus" type="text" id="input-02" />
                                <label class="input__label input__label--hantus" for="input-02">
                                    <svg class="graphic graphic--hantus" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--hantus">Email</span>
                                </label>
                            </span>
                            <span class="input input--hantus">
                                <input class="input__field input__field--hantus" type="text" id="input-03" />
                                <label class="input__label input__label--hantus" for="input-03">
                                    <svg class="graphic graphic--hantus" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--hantus">Subject</span>
                                </label>
                            </span>
                            <span class="input input--hantus textarea">
                                <textarea class="input__field input__field--hantus" rows="6" id="input-04"></textarea>
                                <label class="input__label input__label--hantus" for="input-04">
                                    <svg class="graphic graphic--hantus" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--hantus">Message</span>
                                </label>
                            </span>
                            <button class="boxed-btn">Send Message</button>
                        </form>
                    </div>
                    <div class="col-lg-6 contact-info mt-5 mt-lg-0">
                        <h2>Contact Information</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <div class="info-box mt-4">
                            <i class="fas fa-map-marker"></i>
                            <h4>Store Address two:</h4>
                            <p>481-7473 Cum Rd. Yorba Linda South Carolina <br> 2-345-678-90112 <br> email2@companyname.com </p>
                        </div>
                        <div class="info-box">
                            <i class="fas fa-map-marker"></i>
                            <h4>Store Address two:</h4>
                            <p>481-7473 Cum Rd. Yorba Linda South Carolina <br> 2-345-678-90112 <br> email2@companyname.com </p>
                        </div>
                        <div class="info-box">
                            <i class="fas fa-clock"></i>
                            <h4>Opening Hours:</h4>
                            <p>Monday-Friday: 10 Am to 6 Pm <br> Saturday: 10 Am to 6 Pm <br> Sunday: Close </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End: Contact
            ============================= -->
        <!-- Start: Subscribe
            ============================= -->
        <section id="subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 text-lg-left text-center mb-lg-0 mb-3">
                        <i class="ei ei-icon_mail"></i>
                        <h3>SIGN UP FOR NEWS AND OFFRERS</h3>
                        <p>Subcribe to lastest smartphones news & great deals we offer</p>
                    </div>
                    <div class="col-lg-5 col-md-12 text-center">
                        <form id="subscribe-form" action="#" method="POST">
                            <input type="email" name="email" id="subscribe-mail" placeholder="Email" required>
                            <button>Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php $this->load->view('site/common/footer') ?>
        <?php $this->load->view('site/common/js') ?>
    </body>
</html>