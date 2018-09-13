<section id="header-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 text-center text-md-left">
                <p><i class="fas fa-clock"></i>Opening Hours - 10 Am to 6 PM</p>
                <ul class="header-social d-inline-block">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 text-center text-md-right header-top-right">
                <ul>
                    <li><a href="#"><i class="fas fa-envelope"></i>email@companyname.com</a></li>
                    <li><a href="#"><i class="fas fa-phone"></i>+12 345 678 910</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="navbar-wrapper">
    <div class="navbar-area sticky-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-6">
                    <div class="logo main">
                        <a href="<?= base_url() ?>"><img class="responsive" src="<?= base_url() ?>/assets/img/logo.png" alt="Startkit"></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 d-none d-lg-block text-right">
                    <nav class="main-menu">
                        <ul>
                            <li class="<?php if ($this->uri->segment(1) == "home" || $this->uri->segment(1) == "") { echo "active" ; } ?>">
                                <a href="<?= base_url() ?>">Home</a>
                            </li>
                            <li class="<?php if ($this->uri->segment(1) == "services") { echo "active" ; } ?>">
                                <a href="<?= base_url('services') ?>">Services</a>
                            </li>
                            <li class="<?php if ($this->uri->segment(1) == "about_us") { echo "active" ; } ?>">
                                <a href="<?= base_url('about_us') ?>">About Us</a>
                            </li>
                            <li class="<?php if ($this->uri->segment(1) == "gallery") { echo "active" ; } ?>">
                                <a href="<?= base_url('gallery') ?>">Gallery</a>
                            </li>
                            <li class="<?php if ($this->uri->segment(1) == "contact") { echo "active" ; } ?>">
                                <a href="<?= base_url('contact') ?>">contact</a>
                            </li>
                            
                            <li class="search-button">
                                <div id="sb-search" class="sb-search " >
                                    <form>
                                        <input class="sb-search-input " onkeyup="buttonUp();" placeholder="Search"  type="search" value="" name="search" id="search">
                                        <input class="sb-search-submit" type="submit"  value="">
                                        <span class="sb-icon-search"><i class="ei ei-search"></i></span>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Start Mobile Menu -->
        <div class="mobile-menu-area d-lg-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav class="mobile-menu-active">
                                <ul>
                                    <li class="<?php if ($this->uri->segment(1) == "home" || $this->uri->segment(1) == "") { echo "active" ; } ?>">
                                        <a href="<?= base_url() ?>">Home</a>
                                    </li>
                                    <li class="<?php if ($this->uri->segment(1) == "services") { echo "active" ; } ?>">
                                        <a href="<?= base_url('services') ?>">Services</a>
                                    </li>
                                    <li class="<?php if ($this->uri->segment(1) == "about_us") { echo "active" ; } ?>">
                                        <a href="<?= base_url('about_us') ?>">About Us</a>
                                    </li>
                                    <li class="<?php if ($this->uri->segment(1) == "gallery") { echo "active" ; } ?>">
                                        <a href="<?= base_url('gallery') ?>">Gallery</a>
                                    </li>
                                    <li class="<?php if ($this->uri->segment(1) == "contact") { echo "active" ; } ?>">
                                        <a href="<?= base_url('contact') ?>">contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mobile Menu -->
    </div>
</section>