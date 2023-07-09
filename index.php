<?php
    // include config file
    include_once './app/config/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AceUsaLlc</title>
        <link rel="shortcut icon" href="assets/img/favicon.png" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/css/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <!-- <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"> -->
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php include VIEWS."header.php"; ?>
         <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center justify-content-center" data-aos="fade-down">
            <div class="container position-relative">
                <h1 class="d-flex align-items-center justify-content-center"><img src="assets/img/logo.png" alt="Ace Usa LLC" class="img-fluid mx-5">USA LLC</h1>
                <h2 class="mt-4">We are your best option in human talent.</h2>
                <a href="https://wa.me/17869726488" target="_blank" class="btn-get-started scrollto fs-3">Contact us</a>
            </div>
        </section><!-- End Hero -->
        <main id="main">
            <section id="about" class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column h-100 justify-content-center" data-aos="fade-up" data-aos-delay="300">
                                <img src="assets/img/logo.png" class="img-fluid animated" alt="Ace USA LLC">
                            </div>
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <h3>WHAT IS ACE?</h3>
                            <p class="fs-5 mt-2">For 5 years we have been dedicated to highlight customer brands in the states United, promotion, advertising branding, holding events, training clients and affiliate platforms that generate recognition and growth.</p>
                            <p class="fs-5">
                            It is a Human Resources Management Company. We have professionals in our offices which are located in 5 countries:
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="100">
                                        <div class="icon"><img src="assets/img/panama.png" alt="Panamá" class="img-fluid"></div>
                                        <h4 class="mx-5">Panamá</h4>
                                     </div>
                                    <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="100">
                                        <div class="icon"><img src="assets/img/ecuador.png" alt="Ecuador" class="img-fluid"></div>
                                        <h4 class="mx-5">Ecuador</h4>
                                     </div>
                                    <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="100">
                                        <div class="icon"><img src="assets/img/tailandia.png" alt="Tailandía" class="img-fluid"></div>
                                        <h4 class="mx-5">Tailandía</h4>
                                     </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="100">
                                        <div class="icon"><img src="assets/img/estados unidos.png" alt="Estados Unidos" class="img-fluid"></div>
                                        <h4 class="mx-5">Estados Unidos</h4>
                                    </div>
                                    <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="100">
                                        <div class="icon"><img src="assets/img/colombia.png" alt="Colombia" class="img-fluid"></div>
                                        <h4 class="mx-5">Colombia</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End About Section -->
            <!-- ======= Services Section ======= -->
            <section id="services" class="services bg-light" data-aos="fade-down">
                <div class="container">
                    <div class="section-title">
                        <h2>Services</h2>
                        <p class="fs-5 text-start mb-3">Our is designed for each worker who wants to apply for the job we offer.</p>
                        <p class="fs-5 text-start mb-3">We are a company that selects candidates to work for other companies, we are connected to our service in seeking professional and international or national.</p>
                        <p class="fs-5 text-start">For more information, contact our human resources department and we will gladly help you in undertaking this new work development.</p>
                    </div>
                    <div class="row g-3">
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="card shadow-sm">
                                <img src="assets/img/modelo.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h4 class="card-text text-center">Hostesses and models</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="card shadow-sm">
                                <img src="assets/img/cleaning.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h4 class="card-text text-center">Cleaning operation</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="card shadow-sm">
                                <img src="assets/img/eventos.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h4 class="card-text text-center">Events</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="card shadow-sm">
                                <img src="assets/img/publicidad.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h4 class="card-text text-center">Promotional t-shirts and hats</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="card shadow-sm">
                                <img src="assets/img/equipo.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h4 class="card-text text-center">Find your work team</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="card shadow-sm">
                                <img src="assets/img/trabajo.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h4 class="card-text text-center">Find a job</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Services Section -->
            <!-- ======= Counts Section ======= -->
            <section id="counts" class="counts">
                <div class="container">
                    <div class="row counters">
                        <div class="col-lg-4 col-6 text-center">
                            <span data-purecounter-start="0" data-purecounter-end="3480" data-purecounter-duration="1" class="purecounter"></span>
                            <p class="fs-5 fw-bold">Happy Customers</p>
                        </div>

                        <div class="col-lg-4 col-6 text-center">
                            <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
                            <p class="fs-5 fw-bold">Years in Business</p>
                        </div>

                        <div class="col-lg-4 col-6 text-center">
                            <span data-purecounter-start="0" data-purecounter-end="486" data-purecounter-duration="1" class="purecounter"></span>
                            <p class="fs-5 fw-bold">Locations</p>
                        </div>
                    </div>
                </div>
            </section><!-- End Counts Section -->
            <section id="faq" class="faq" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="container">
                            <h2 class="fw-bold text-primary">You Can Choose How You Want To Work</h2>
                            <hr>
                            <div class="row">
                                <div class="col-md-9">
                                    <h4>Payroll outsourcing</h4>
                                    <p class="fs-5">Find the best applicants to work for your company, we have a highly qualified staff, we are the best option.</p>
                                </div>
                                <div class="col-md-3">
                                <img src="./assets/img/how1.png" alt="">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-9">
                                    <h4>Cleaning Service</h4>
                                    <p class="fs-5">Our philosophy and policies are focused on delivering solutions in cleaning services for offices and associated companies.</p>
                                </div>
                                <div class="col-md-3">
                                <img src="./assets/img/how2.png" alt="">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-9">
                                    <h4>Boosting Hostesses</h4>
                                    <p class="fs-5">It is the main human link between companies and consumers, we have a highly qualified staff for the company.</p>
                                </div>
                                <div class="col-md-3">
                                    <img src="./assets/img/how3.png" alt="">
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </section><!-- End Frequently Asked Questions Section -->
            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials section-bg" data-aos="fade-up" data-aos-delay="100">
                <div class="container">
                    <div class="section-title">
                        <h2>Happy Customers</h2>
                    </div>
                    <div class="testimonials-slider swiper" >
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p class="fs-6">
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        It is a company that helped me start and get work remotely from my home, I congratulate them.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="assets/img/man.png" class="testimonial-img" alt="">
                                    <h3>Joel Pereira</h3>
                                </div>
                            </div><!-- End testimonial item -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p class="fs-6">
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Without a doubt when it comes to looking for work, ACE USA helped me find a job in Miami without speaking much English
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="assets/img/woman.png" class="testimonial-img" alt="">
                                    <h3>Michelle Gabriela</h3>
                                </div>
                            </div><!-- End testimonial item -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p class="fs-6">
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="assets/img/woman.png" class="testimonial-img" alt="">
                                    <h3>Jena Karlis</h3>
                                </div>
                            </div><!-- End testimonial item -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p class="fs-6">
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="assets/img/man.png" class="testimonial-img" alt="">
                                    <h3>John Larson</h3>
                                </div>
                            </div><!-- End testimonial item -->
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section><!-- End Testimonials Section -->
            <!-- ======= Clients Section ======= -->
            <section id="clients" class="clients">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/logo_08.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/logo_01.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/logo_02.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/logo_03.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </section><!-- End Clients Section -->
            <!-- ======= Team Section ======= -->
            <section id="team" class="team section-bg"  data-aos="fade-down" data-aos-delay="100">
                <div class="container">
                    <div class="section-title">
                        <h2>Team</h2>
                        <p class="fs-5">We have a trained team ready to meet your requirements, satisfying all your needs</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">
                                    <img src="assets/img/man.png" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>William Mosquera</h4>
                                    <span>CEO</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">
                                    <img src="assets/img/woman.png" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Product Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">
                                    <img src="assets/img/man.png" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>William Anderson</h4>
                                    <span>CTO</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">
                                    <img src="assets/img/woman.png" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>Amanda Jepson</h4>
                                        <span>Accountant</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Team Section -->
        </main>
        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="footer-top d-flex align-items-center justify-content-center">
                <div class="container position-relative">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <h3 class="d-flex align-items-center justify-content-center fw-bold"><img src="assets/img/logo.png" alt="Ace Usa LLC" class="img-fluid mx-3">USA LLC</h3>
                            <p class="fs-5 mt-3 fw-bold text-center">We are your best option in the provision of temporary services, with the best human talent.</p>
                            <p class="fs-5 fw-bold text-center">Main objective is to become the strategic partner of our clients in order to support their processes, improving productivity and reducing operating costs.</p>
                            <p class="fs-5 text-center">
                            9100 South Dadeland Blvd., Suite 1500<br>
                            Miami, FL., 33156<br>
                                United States <br>
                                <br>
                                <a href="mailto:administration@aceusallc.com">administration@aceusallc.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-pie py-4">
                <div class="container d-md-flex ">
                    <div class="me-md-auto text-center text-md-start">
                        <div class="copyright">
                            &copy; Copyright 2023<strong><span>ACE USA LLC</span></strong>. All Rights Reserved
                        </div>
                    </div>
                    <div class="social-links text-center text-md-right pt-3 pt-md-0">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/aos/js/aos.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>