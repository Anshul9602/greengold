<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Green Gold</title>
   <meta name="robots" content="noindex, follow">
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(''); ?>/images/favicon.png">
   <!-- CSS (Font, Plugins & Style CSS files) -->
   <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Marck+Script&display=swap" rel="stylesheet">
   <!-- Vendor CSS (Bootstrap & Icon Font) -->
   <link rel="stylesheet" href="<?php echo base_url('css/vendor/bootstrap.min.css'); ?>">
   <!-- Plugins CSS (All Plugins Files) -->
   <link rel="stylesheet" href="<?php echo base_url('css/plugins/font-awesome.min.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('css/plugins/swiper-bundle.min.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('css/plugins/animate.min.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('css/plugins/odometer-theme-default.min.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('css/plugins/fancybox.min.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('css/plugins/magnific-pupup.css'); ?>">
   <!-- Style CSS -->
   <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
   <!-- Bootstrap JS and dependencies -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <style>
      .sticky-header {
         position: absolute;
         width: 100%;
         z-index: 99999;
      }

      .main-menu>ul>li>a {
         color: #fff;
      }

      .sticky .main-menu>ul>li>a {
         color: #ffffff;
      }
   </style>
</head>


   <header style="border:none" class="header-wrapper-two sticky-header">
      <div class="custom-container">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12">
                  <div class="flex-center justify-content-between">
                     <!-- Header Logo Start -->
                     <div class="logo">
                        <a href="<?php echo base_url(''); ?>">
                           <img class="logo-2" src="<?php echo base_url(''); ?>/images/logo-white.png" alt="logoImage" style="width:165px;"></a>
                        </a>
                     </div>
                     <!-- Header Logo End -->
                     <div class="flex-center header-right">
                        <!-- Header Menu Start -->
                        <div class="d-none d-lg-flex header-right_menu">
                           <nav class="main-menu">
                              <ul>
                                 <li>
                                    <a href="<?php echo base_url(''); ?>"style="border-bottom: 2px solid;">Home</a>
                                 </li>
                                 <li class="has-children">
                                    <a href="ourstory">About</a>
                                    <ul class="sub-menu">
                                       <li class="has-submenu"><a href="ourstory">Company</a>
                                       </li>
                                       <li class="has-submenu"><a href="career">Career</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="has-children">
                                    <a href="services">What We Do</a>
                                 </li>
                                 <li>
                                    <a href="csr">Social Responsibility</a>
                                 </li>
                                 <li>
                                    <a href="contact">Contact</a>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                        <!-- Header Menu End -->
                        <!-- Header Actions Start -->
                        <div class="header-right_actions flex-center">
                           <div class="input-group rounded">
                              <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                           </div>
                           <div class="hamburger d-block d-lg-none">
                              <!-- Mobile Menu Hambarger Action Button Start -->
                              <a class="header-action-btn header-action-btn-menu hamburger_button d-flex" href="#/" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-header">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                              </a>
                              <!-- Mobile Menu Hambarger Action Button End -->
                           </div>
                        </div>
                        <!-- Header Social Actions End -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>

   <div class="offcanvas offcanvas-end" id="offcanvas-header">
      <div class="offcanvas-header">
         <!-- Header Logo Start -->
         <div class="logo">
            <a href="\">
               <img src="<?php echo base_url(''); ?>/images/Jaguarsteel.png" alt="">
            </a>
         </div>
         <!-- Header Logo End -->
         <button type="button" class="btn-close text-reset mobilemenu-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fas fa-times"></i></button>
      </div>
      <div class="offcanvas-body">
         <!-- mobile menu navigation start -->
         <ul class="mobile-menu">
            <li>
               <a href="<?php echo base_url(''); ?>" style="border-bottom: 1px solid;">HOME</a>
            </li>
            <li class="menu-item-has-children">
               <a href="ourstory">ABOUT</a>
            </li>
            <li class="menu-item-has-children">
               <a href="product">WHAT WE DO</a>
            </li>
            <li>
               <a href="career menu-item-has-children">CARRER</a>
               <ul class="dropdown">
                  <li>
                     <a href="ferrous">About Company</a>
                  </li>
                  <li>
                     <a href="ferrous">Leadership</a>
                  </li>
                  <li>
                     <a href="ferrous">Career</a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="csr">SOCIAL RESPONSIBILITY</a>
            </li>
            <li>
               <a href="contact">CONTACT</a>
            </li>
         </ul>
         </nav>
         <!-- mobile menu navigation end -->
      </div>
   </div>
   <!------------------Header ends--------------------->
   <body>
   <!-- Slider Section start -->
   <div class="slider-one">
      <div class="sliderbg-1" data-bg-image="<?php echo base_url(''); ?>/images/banner-y.jpg">
      </div>
      <div class="custom-container">
         <div class="swiper sliderone animation-style-01">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <!-- Single Slider Start -->
                  <div class="sliderone-slingle">
                     <div class="slider-content-wrapper">
                        <div class="sliderone-content">
                           <!-- Slider Content Start -->
                           <div class="slider-content" style="width:fit-content;">
                              <!-- <span class="subtitle">We Are Avers</span>  -->
                              <h2 class="title">Leaders in Steel Trading.</h2>
                              <p class="slider-text">With years of experience and a commitment to excellence, we are your trusted partner for driving industrial progress globally.</p>
                              <br>
                              <a href="services" class="btn-style-four" style="">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Single Slider End -->
               </div>
               <div class="swiper-slide">
                  <!-- Single Slider Start -->
                  <div class="sliderone-slingle">
                     <div class="slider-content-wrapper">
                        <div class="sliderone-content">
                           <!-- Slider Content Start -->
                           <div class="slider-content" style="width:fit-content;">
                              <!-- <span class="subtitle">We Are Avers</span>  -->
                              <h2 class="title">Thriving Together.</h2>
                              <p class="slider-text">Fostering sustainable progress and collective success for stronger, more resilient communities.</p>
                              <br>
                              <a href="csr" class="btn-style-four" style="">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Single Slider End -->
               </div>
               <div class="swiper-slide">
                  <!-- Single Slider Start -->
                  <div class="sliderone-slingle">
                     <div class="slider-content-wrapper">
                        <div class="sliderone-content">
                           <!-- Slider Content Start -->
                           <div class="slider-content" style="width:fit-content;">
                              <!-- <span class="subtitle">We Are Avers</span>  -->
                              <h2 class="title">Power & Integrity.</h2>
                              <p class="slider-text">Crafting a legacy of distinction with durable steel and steadfast principles.</p>
                              <br>
                              <a href="ourstory" class="btn-style-four" style="">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Single Slider End -->
               </div>

            </div>
            <!-- Swiper Pagination -->
            <div class="swiper-pagination sliderone-pagination"></div>
            <!-- Swiper Navigation -->
         </div>
      </div>
   </div>
   <!-- Slider Section End -->
   <!-- About Section Start -->
   <div class="section-padding about-two">

      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-6 wow fadeIn" fadeIndata-wow-duration=".1s" data-wow-delay=".1s">
               <div class="about-creative-images">
                  <div class="image-one">
                     <img src="<?php echo base_url(''); ?>/images/about/creative-one.jpg" alt="AboutImage">
                  </div>
                  <div class="image-two">
                     <img src="<?php echo base_url(''); ?>/images/about/about.png" alt="AboutImage">
                  </div>
               </div>
            </div>
            <div class="col-lg-6 wow fadeIn" fadeIndata-wow-duration=".01s" data-wow-delay=".1s">
               <div class="about-creative-details">
                  <div class="heading-one">
                     <span class="heading-one-subtitle">Our Work Ethos</span>

                     <h2 class="heading-one-title">Commitment to Quality and Progress at Every Stage</h2>
                     <p> At Green Gold, we are dedicated to providing unmatched reliability, whether you're a large-scale manufacturer or a small foundry. Specializing in both steel and coal, we serve as a leading international brokerage and trading house. With a focus on ferrous and non-ferrous scrap, semi-finished, and finished steel products, we connect supply chains globally, driving success and progress in every market. </p>
                  </div>
                  <br />
                  <!-- Heading End -->
                  <div class="accordion about-accordion" id="faqone">
                     <div class="accordion-item faq-accordion-item">
                        <h2 class="accordion-header faq-accordion-header" id="headingOne">
                           <button class="accordion-button faq-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Diversified sourcing model
                           </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show faq-accordion-collapse" aria-labelledby="headingOne" data-bs-parent="#faqone">
                           <p class="accordion-body">
                              We source scrap from 50 countries and deliver it across 10 countries ensuring continued supply & presence across our supplier and customer base
                           </p>
                        </div>
                     </div>
                     <div class="accordion-item faq-accordion-item">
                        <h2 class="accordion-header faq-accordion-header" id="headingTwo">
                           <button class="accordion-button collapsed faq-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Work Ethics & Compliance
                           </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse faq-accordion-collapse" aria-labelledby="headingTwo" data-bs-parent="#faqone">
                           <p class="accordion-body">
                              Our market making practices ensure adequate supply along with trade finance to our customers – leading to a direct, deep & strengthened relationship with marquee clients including leading steel producers in India, Bangladesh Pakistan, Taiwan et al
                        </div>
                     </div>
                     <div class="accordion-item faq-accordion-item">
                        <h2 class="accordion-header faq-accordion-header" id="headingThree">
                           <button class="accordion-button collapsed faq-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Global logistics network
                           </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse faq-accordion-collapse" aria-labelledby="headingThree" data-bs-parent="#faqone">
                           <p class="accordion-body">
                              Our logistics network includes 100 load ports, 30 delivery ports along with independent (no forwarding agent) containerized logistics
                           </p>
                        </div>
                     </div>
                     <div class="accordion-item faq-accordion-item">
                        <h2 class="accordion-header faq-accordion-header" id="headingFour">
                           <button class="accordion-button collapsed faq-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                              Meticulous risk management
                           </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse faq-accordion-collapse" aria-labelledby="headingFour" data-bs-parent="#faqone">
                           <p class="accordion-body">
                              Our transactions are conducted on a self- liquidating basis, with over 70% LC & credit insurance backed transactions. Our bad debts provisions have been under 0.2% since our inception
                           </p>
                        </div>
                     </div>
                     <!-- <a href="ourstory" class="btn-style-one"><span>Learn More</span></a> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row mt-4">
         <div class="or">
            <a href="ourstory" class="btn-style-one">Learn more</span>
            </a>
         </div>
      </div>
   </div>
   <!-- About Section Start -->
   <!-- Service Section Start -->
   <div class="service section-padding position-relative">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
               <!-- Heading Start -->
               <div class="heading-one text-center">
                  <span class="heading-one-subtitle">Our Products</span>
                  <h2 class="heading-one-title">What we offer</h2>
                  <br><br><br>
                  <!-- <p>Kimod tempoer incididunt onomes sundo ritoma amar Lorem ipsum dolor sit amet, consectetur adipisicing</p> -->
               </div>
               <!-- Heading End -->
            </div>
         </div>
         <div class="row row-cols-md-2 row-cols-1 mb-n30">
            <div class="col mb-30 wow fadeIn" data-wow-duration="0.4s" style="visibility: visible; animation-duration: 0.4s; animation-name: fadeIn;">
               <!-- Single service Start -->
               <div class="service-two-single">
                  <img class="img-white" style="max-width:250px; border: thick solid #081d55" src="<?php echo base_url('images/service/steel.jpg'); ?>" alt="">
                  <div class="service-two-content">
                     <br />
                     <h4 class="title">Steel</h4>
                     <p>HMS 1, HMS 2, Shredded steel, Tin can bundle, Bales, Turnings, Clippings</p>
                  </div>
               </div>
               <!-- Single service Start -->
            </div>
            <div class="col mb-30 wow fadeIn" data-wow-duration="0.6s" style="visibility: visible; animation-duration: 0.6s; animation-name: fadeIn;">
               <!-- Single service Start -->
               <div class="service-two-single">

                  <img class="img-white" style="max-width:250px; border: thick solid #081d55" src="<?php echo base_url('images/service/alum.jpg'); ?>" alt="">
                  <div class="service-two-content">
                     <br />
                     <h4 class="title">Aluminium</h4>
                     <p> Zorba, Taint Tabor, Mix Aluminium,
                        Motor Scrap <br><br>
                     </p>
                  </div>
               </div>
               <!-- Single service Start -->
            </div>
            <div class="col mb-30 wow fadeIn" data-wow-duration="0.7s" style="visibility: visible; animation-duration: 0.7s; animation-name: fadeIn;">
               <!-- Single service Start -->
               <div class="service-two-single">
                  <img class="img-white" style="max-width:250px; border: thick solid #081d55" src="<?php echo base_url('images/service/ruber.jpg'); ?>" alt="">

                  <div class="service-two-content">
                     <br />
                     <h4 class="title">Rubber</h4>
                     <p>Personal Car Radials, Shredded Rubber Scrap, Truck Bus Radials<br><br>
                     </p>
                  </div>
               </div>
               <!-- Single service Start -->
            </div>
            <div class="col mb-30 wow fadeIn" data-wow-duration="0.1s" style="visibility: visible; animation-duration: 0.1s; animation-name: fadeIn;">
               <!-- Single service Start -->
               <div class="service-two-single">
                  <img class="img-white" style="max-width:250px; border: thick solid #081d55" src="<?php echo base_url('images/service/paper.jpg'); ?>" alt="">

                  <div class="service-two-content">
                     <br />
                     <h4 class="title">Paper</h4>
                     <p> Old corrugated containers <br><br></p>
                  </div>
               </div>
               <!-- Single service Start -->
            </div>


         </div>
      </div>



      <div class="shape shape-6">
         <img src="<?php echo base_url(); ?>/images/shape/shape-10.png" alt="Shape">
      </div>
   </div>
   <div class="container mb-5">
      <div class="row">
         <div class="or">
            <a href="services" class="btn-style-one"><span>Learn More</span></a>
         </div>
      </div>
   </div>
   <!-- Service Section End -->
   <br /><br /><br />
   <br /><br /><br />
   <!-- Support Section Start -->
   <div class="support mousemove">
      <div class="container">
         <div class="support-bg">

            <div class="row">
               <div class="col-md-6">
                  <!-- Heading Start -->
                  <div class="heading-one wow fadeIn" data-wow-duration="0.1s">
                     <span class="heading-one-subtitle" style="color:#fff">Corporate Social Responsibility</span>
                     <h3 class="heading-one-title">Going beyond environmental sustainability</h3>
                     <p class="heading-one-text">Our CSR efforts extend beyond environmental sustainability. We are dedicated to making a positive impact on the communities where we operate.
                     </p>
                     <br />
                     <a href="csr" class="btn-style-one">
                        Learn More
                     </a>
                  </div>
                  <!-- Heading End -->
               </div>
               <div class="col-md-6">
                  <div class="support-man wow fadeIn" data-wow-duration="0.7s">
                     <img src="<?php echo base_url(''); ?>/images/support/support.jpg" alt="SupportMan">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Support Section End -->
   <div class="testimonial-one mt-5">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="testimonial-one-inner">
                  <div class="testimonial-one-image">
                     <img src="<?php echo base_url(''); ?>/images/testimonial/testimonial-large.png" alt="TestimonialImage">
                  </div>
                  <div class="testimonial-one-content wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                     <!-- Heading Start -->
                     <div class="heading-one">
                        <span class="heading-one-subtitle"> Testimonials</span>
                        <h2 class="heading-one-title">What People Say</h2>
                     </div>
                     <!-- Heading End -->
                     <div class="testimonialone">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <!--== Start Testimonial Item ==-->
                              <div class="testimonialone-single">
                                 <p class="testimonialone-text">Green Gold has been one of our largest and longest standing partners for our steel sourcing needs.</p>
                                 <div class="testimonialone-content">

                                    <div class="testimonialone-info">
                                       <span class="name">JSW</span>

                                    </div>
                                 </div>
                              </div>
                              <!--== End Testimonial Item ==-->
                           </div>
                           <div class="swiper-slide">
                              <!--== Start Testimonial Item ==-->
                              <div class="testimonialone-single">
                                 <p class="testimonialone-text">We trust Green Gold to handle our scrap sourcing needs in the most professional & timely manner.</p>
                                 <div class="testimonialone-content">

                                    <div class="testimonialone-info">
                                       <span class="name">Kirloskar</span>

                                    </div>
                                 </div>
                              </div>
                              <!--== End Testimonial Item ==-->
                           </div>
                           <div class="swiper-slide">
                              <!--== Start Testimonial Item ==-->
                              <div class="testimonialone-single">
                                 <p class="testimonialone-text">Our partnership with Green Gold has been consistently reinforced with transparent, timely & professional handling of their commitments.</p>
                                 <div class="testimonialone-content">

                                    <div class="testimonialone-info">
                                       <span class="name">ISMT</span>

                                    </div>
                                 </div>
                              </div>
                              <!--== End Testimonial Item ==-->
                           </div>

                        </div>
                        <div class="pagination-style-one">
                           <div class="swiper-pagination testimonialone-pagination"></div>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>

   </div>

   <!-- Testimonial Section End -->
   <!-- Brand Section Start -->
   <div class="brand-four" >
      <div class="container">
         <div class="row">
            <div class="col-12 wow fadeIn" fadeIndata-wow-duration=".1s" data-wow-delay=".1s">
               <div class="brand-slider brand-style swiper">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <!-- Single Brand Start -->
                        <a class="brand-before" href="#"><img src="<?php echo base_url(''); ?>/images/brand//1.png" alt="Brand-Image"></a>
                        <!-- Single Brand End -->
                     </div>
                     <div class="swiper-slide">
                        <!-- Single Brand Start -->
                        <a class="brand-before" href="#"><img src="<?php echo base_url(''); ?>/images/brand/2.png" alt="Brand-Image"></a>
                        <!-- Single Brand End -->
                     </div>
                     <div class="swiper-slide">
                        <!-- Single Brand Start -->
                        <a class="brand-before" href="#"><img src="<?php echo base_url(''); ?>/images/brand/3.png" alt="Brand-Image"></a>
                        <!-- Single Brand End -->
                     </div>
                     <div class="swiper-slide">
                        <!-- Single Brand Start -->
                        <a class="brand-before" href="#"><img src="<?php echo base_url(''); ?>/images/brand/4.png" alt="Brand-Image"></a>
                        <!-- Single Brand End -->
                     </div>
                     <div class="swiper-slide">
                        <!-- Single Brand Start -->
                        <a class="brand-before" href="#"><img src="<?php echo base_url(''); ?>/images/brand/5.png" alt="Brand-Image"></a>
                        <!-- Single Brand End -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Brand Section End -->
   <!-- Home Contact Form Start -->
   <div class="home-contact">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="home-contact_wrapper">
                  <!-- Home Contact Content Start -->
                  <div class="home-contact_content wow fadeIn" fadeIndata-wow-duration=".1s" data-wow-delay=".1s">
                     <h4 class="subtitle">Contact Us</h4>
                     <h2 class="title">Stay Connected with Us</h2>
                     <p>Have questions or need assistance? We're here to help! Reach out to us, and we'll get back to you as soon as possible.</p>
                     <ul class="home-contact_info">
                        <li>
                           <div class="icon">
                              <i class="fas fa-phone-alt"></i>
                           </div>
                           <div class="details">
                              <h5 class="details-title">Call Us</h5>
                              <a href="tel:123-456-789" class="details-text">+65-66534102 / +65-66534103</a>
                           </div>
                        </li>
                        <li>
                           <div class="icon">
                              <i class="fas fa-envelope"></i>
                           </div>
                           <div class="details">
                              <h5 class="details-title">Email Us</h5>
                              <a href="mailto:sales@jaguarsteelandcoal.com" class="details-text">sales@jaguarsteelandcoal.com</a>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <!-- Home Contact Content End -->
                  <!-- Home Content Form Start -->
                  <form class="home-contact_form wow fadeIn" fadeIndata-wow-duration=".01s" data-wow-delay=".1s">
                     <div class="form-single">
                        <input type="text" placeholder="Your name">
                     </div>
                     <div class="form-single">
                        <input type="email" placeholder="Your email" name="email">
                     </div>
                     <div class="form-single">
                        <input placeholder="Your phone" name="phone">
                     </div>
                     <div class="form-single">
                        <textarea name="message" placeholder="Write message here"></textarea>
                     </div>
                     <button type="submit" class="btn-style-four">Submit now</button>
                  </form>
                  <!-- Home Content Form End -->
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Home Contact Form End -->
   <br /><br />
   </body>


</html>