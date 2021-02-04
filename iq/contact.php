<?php 
    include "includes/header.php";
    include "includes/navbar.php";
?>

    <!-- Start Breadcrumb Area -->
        <div class="page-area bread-pd">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-title text-center">
                            <h2>Contact us</h2>
                            <div class="bread-come">
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb purple lighten-4 justify-content-center">
                                        <li class="breadcrumb-items"><a class="black-text" href="index.html">Home</a><i class="ti-angle-right"
                                            aria-hidden="true"></i></li>
                                        <li class="breadcrumb-items"><a class="black-text" href="contact.html">Contact us</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area -->
        <!-- Start contact Area -->
        <div class="contact-area bg-color-xs pt-5 pb-5">
            <div class="container">
                
                <div class="row mb-5">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-member">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="team-content">
                                <p>
                                    +20 109 927 1550
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-member">
                            <div class="icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="team-content">
                                <p>
                                    admin2@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-member">
                            <div class="icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="team-content">
                                <p>
                                    Cairo, Egypt
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-member">
                            <div class="icon">
                                <i class="fa fa-whatsapp"></i>
                            </div>
                            <div class="team-content">
                                <p>
                                    +20 109 927 1550
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End contact icon -->
                
                <!-- End row -->
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-5">
                       <div class="contact-image">
                           <img src="img/about/view.png" alt="">
                       </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-7">
                        <form id="contactForm" method="POST" action="contact.php" class="contact-form">
                            <div class="row"> 
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <button type="submit" id="submit" class="contact-btn">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                    <div class="clearfix"></div>
                                </div>   
                            </div>   
                        </form> 
                    </div>
                    <!-- End contact Form -->
                </div>
            </div>
        </div>
        <!-- End Contact Area -->



<?php
    include "includes/footer.php";
?>