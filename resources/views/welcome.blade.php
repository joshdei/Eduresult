<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>{{ config('app.name') }}</title>
        <meta name="description" content="{{ config('app.name') }}" />
        <meta name="keywords" content="{{ config('app.name') }}" />

        <!-- Favicons -->
        <link href="{{asset('assets/img/favicon.png')}}" rel="icon" />
        <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect" />
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
        />

        <!-- Vendor CSS Files -->
        <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />

        <!-- Main CSS File -->
        <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" />

    </head>

    <body class="index-page">
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
                <a href="" class="logo d-flex align-items-center me-auto me-xl-0">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <h1 class="sitename">{{ config('app.name') }}</h1>
                    <span>.</span>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                       <!-- <li><a href="#pricing">Pricing</a></li>-->
                        <li><a href="#team">Team</a></li>
                     
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
                @auth
                <a class="btn-getstarted" href="{{route('dashboard')}}">Dashboard</a>
                @endauth
                @guest
                <a class="btn-getstarted" href="{{route('login')}}">Get Started</a>
                @endguest
            </div>
        </header>

        <main class="main">
            <!-- Hero Section -->
            <section id="hero" class="hero section dark-background">
                <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in" />

                <div class="container">
                    <div class="row">
                        <div class="col-lg-10">
                            <h2 data-aos="fade-up" data-aos-delay="100">Welcome to Our Exam Question Typing Platform</h2>
                            <p data-aos="fade-up" data-aos-delay="200">Easily create, format, and prepare your test and exam questions with speed and accuracy, anytime, anywhere.</p>
                        </div>

                        <div class="col-lg-5" data-aos="fade-up" data-aos-delay="300">
                            <form action="forms/newsletter.php" method="post" class="php-email-form">
                                <div class="sign-up-form"><input type="email" name="email" /><input type="submit" value="Subscribe" /></div>
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your result has been retrieved successfully!</div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Hero Section -->

            <!-- Clients Section
    <section id="clients" class="clients section">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div> 

        </div>

      </div>

    </section> -->

            <!-- About Section -->
            <section id="about" class="about section light-background">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row align-items-xl-center gy-5">
                        <div class="col-xl-5 content">
                            <h3>About Us</h3>
                            <h2>Streamlining Exam Preparation for Teachers</h2>
                            <p>
                                Our platform provides teachers with an efficient and user-friendly way to create and format test and exam questions with ease. Say goodbye to long hours of manual typing and formatting—our solution helps you
                                focus on what matters most: educating students.
                            </p>
                            <a href="#" class="read-more"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                        </div>

                        <div class="col-xl-7">
                            <div class="row gy-4 icon-boxes">
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                    <div class="icon-box">
                                        <i class="bi bi-pencil-square"></i>
                                        <h3>Easy Question Typing</h3>
                                        <p>Quickly type and format your test and exam questions with our intuitive interface, saving you valuable time.</p>
                                    </div>
                                </div>
                                <!-- End Icon Box -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                    <div class="icon-box">
                                        <i class="bi bi-file-earmark-text"></i>
                                        <h3>Professional Formatting</h3>
                                        <p>Automatically format your questions to meet school standards, ensuring clarity and professionalism.</p>
                                    </div>
                                </div>
                                <!-- End Icon Box -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                    <div class="icon-box">
                                        <i class="bi bi-cloud-upload"></i>
                                        <h3>Save and Retrieve</h3>
                                        <p>Save your question papers securely in the cloud and retrieve them whenever you need them.</p>
                                    </div>
                                </div>
                                <!-- End Icon Box -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                    <div class="icon-box">
                                        <i class="bi bi-printer"></i>
                                        <h3>Seamless Printing</h3>
                                        <p>Send your questions directly to printing stores, avoiding delays and ensuring timely exam preparation.</p>
                                    </div>
                                </div>
                                <!-- End Icon Box -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /About Section -->

            <!-- Stats Section -->
            <section id="stats" class="stats section dark-background">
                <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in" />

                <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4">
                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Clients</p>
                            </div>
                        </div>
                        <!-- End Stats Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Projects</p>
                            </div>
                        </div>
                        <!-- End Stats Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Hours Of Support</p>
                            </div>
                        </div>
                        <!-- End Stats Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Workers</p>
                            </div>
                        </div>
                        <!-- End Stats Item -->
                    </div>
                </div>
            </section>
            <!-- /Stats Section -->

            <!-- Services Section -->
            <section id="services" class="services section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Our Services</h2>
                    <p>We provide efficient tools to help teachers easily create, format, and print their exam questions without hassle.</p>
                </div>
                <!-- End Section Title -->

                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-pencil-square"></i></div>
                                <div>
                                    <h4 class="title"><a href="#" class="stretched-link">Easy Question Typing</a></h4>
                                    <p class="description">Quickly type exam and test questions with an intuitive and user-friendly interface.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-file-earmark-text"></i></div>
                                <div>
                                    <h4 class="title"><a href="#" class="stretched-link">Automated Formatting</a></h4>
                                    <p class="description">Ensure your questions are professionally formatted to meet academic standards.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-cloud-upload"></i></div>
                                <div>
                                    <h4 class="title"><a href="#" class="stretched-link">Cloud Storage</a></h4>
                                    <p class="description">Save your question papers securely in the cloud and access them anytime.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-printer"></i></div>
                                <div>
                                    <h4 class="title"><a href="#" class="stretched-link">Instant Printing</a></h4>
                                    <p class="description">Send your questions directly to nearby printing stores, reducing delays and stress.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-person-check"></i></div>
                                <div>
                                    <h4 class="title"><a href="#" class="stretched-link">Collaboration Tools</a></h4>
                                    <p class="description">Work with other teachers to review and improve exam papers effortlessly.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-shield-lock"></i></div>
                                <div>
                                    <h4 class="title"><a href="#" class="stretched-link">Data Security</a></h4>
                                    <p class="description">Your documents are encrypted and protected, ensuring confidentiality.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->
                    </div>
                </div>
            </section>
            <!-- /Services Section -->

            <!-- Features Section -->
            <section id="features" class="features section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Platform Features</h2>
                    <p>Discover the key features designed to make exam question preparation seamless and efficient for teachers.</p>
                </div>
                <!-- End Section Title -->

                <div class="container">
                    <div class="row gy-4 align-items-center features-item">
                        <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                            <h3>Effortless Question Paper Creation</h3>
                            <p>
                                Our platform provides an easy-to-use interface that helps teachers create well-structured exam and test papers quickly and efficiently, reducing the hassle of manual formatting.
                            </p>
                            <a href="#" class="btn btn-get-started">Get Started</a>
                        </div>
                        <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                            <div class="image-stack">
                                <img src="assets/img/exam-typing-1.jpg" alt="" class="stack-front" />
                                <img src="assets/img/exam-typing-2.jpg" alt="" class="stack-back" />
                            </div>
                        </div>
                    </div>
                    <!-- Features Item -->

                    <div class="row gy-4 align-items-stretch justify-content-between features-item">
                        <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                            <img src="assets/img/exam-typing-3.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                            <h3>Key Features for Teachers</h3>
                            <p>Our platform offers essential tools to simplify the exam preparation process, ensuring accuracy and efficiency.</p>
                            <ul>
                                <li><i class="bi bi-check"></i> <span>Automatic formatting for clear and professional papers.</span></li>
                                <li><i class="bi bi-check"></i><span> Secure cloud storage to save and access documents anytime.</span></li>
                                <li><i class="bi bi-check"></i> <span>Collaboration features to work with other educators easily.</span></li>
                            </ul>
                            <a href="#" class="btn btn-get-started align-self-start">Get Started</a>
                        </div>
                    </div>
                    <!-- Features Item -->
                </div>
            </section>
            <!-- /Features Section -->

            <!-- Pricing Section
            <section id="pricing" class="pricing section">
           
                <div class="container section-title" data-aos="fade-up">
                    <h2>Pricing</h2>
                    <p>Choose the best plan that suits your needs and start creating exam papers effortlessly.</p>
                </div>
            

                <div class="container" data-aos="zoom-in" data-aos-delay="100">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="pricing-item">
                                <h3>Free Plan</h3>
                                <div class="icon">
                                    <i class="bi bi-box"></i>
                                </div>
                                <h4><sup>₦</sup>0<span> / month</span></h4>
                                <ul>
                                    <li><i class="bi bi-check"></i> <span>Basic question formatting tools</span></li>
                                    <li><i class="bi bi-check"></i> <span>Access to standard templates</span></li>
                                    <li><i class="bi bi-check"></i> <span>Limited cloud storage</span></li>
                                    <li class="na"><i class="bi bi-x"></i> <span>Advanced paper customization</span></li>
                                    <li class="na"><i class="bi bi-x"></i> <span>Priority support</span></li>
                                </ul>
                                <div class="text-center"><a href="#" class="buy-btn">Get Started</a></div>
                            </div>
                        </div>
                      

                        <div class="col-lg-4">
                            <div class="pricing-item featured">
                                <h3>Business Plan</h3>
                                <div class="icon">
                                    <i class="bi bi-rocket"></i>
                                </div>

                                <h4><sup>₦</sup>25,000<span> / month</span></h4>
                                <ul>
                                    <li><i class="bi bi-check"></i> <span>Advanced formatting tools</span></li>
                                    <li><i class="bi bi-check"></i> <span>Customizable templates</span></li>
                                    <li><i class="bi bi-check"></i> <span>Increased cloud storage</span></li>
                                    <li><i class="bi bi-check"></i> <span>Team collaboration features</span></li>
                                    <li><i class="bi bi-check"></i> <span>Standard support</span></li>
                                </ul>
                                <div class="text-center"><a href="#" class="buy-btn">Get Started</a></div>
                            </div>
                        </div>
                   

                        <div class="col-lg-4">
                            <div class="pricing-item">
                                <h3>Developer Plan</h3>
                                <div class="icon">
                                    <i class="bi bi-send"></i>
                                </div>
                                <h4><sup>₦</sup>42,000<span> / month</span></h4>
                                <ul>
                                    <li><i class="bi bi-check"></i> <span>All Business Plan features</span></li>
                                    <li><i class="bi bi-check"></i> <span>Unlimited cloud storage</span></li>
                                    <li><i class="bi bi-check"></i> <span>API access for automation</span></li>
                                    <li><i class="bi bi-check"></i> <span>Advanced security features</span></li>
                                    <li><i class="bi bi-check"></i> <span>Priority support</span></li>
                                </ul>
                                <div class="text-center"><a href="#" class="buy-btn">Get Started</a></div>
                            </div>
                        </div>
                  
                    </div>
                </div>
            </section>
            -->
            <!-- Faq Section -->
            <section id="faq" class="faq section">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="content px-xl-5">
                                <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
                                <p>
                                    Have questions about how our educational platform works? Here are some of the most common inquiries we receive from students and educators.
                                </p>
                            </div>
                        </div>
            
                        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                            <div class="faq-container">
                                <div class="faq-item faq-active">
                                    <h3><span class="num">1.</span> <span>What is {{ config('app.name') }}, and how does it work?</span></h3>
                                    <div class="faq-content">
                                        <p>{{ config('app.name') }} is an online educational platform that connects teachers with students for sharing resources, exam preparation, and assignment assistance. Teachers can post educational content, and students can access resources for learning.</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div>
                                <!-- End Faq item-->
            
                                <div class="faq-item">
                                    <h3><span class="num">2.</span> <span>How do I add my educational materials on the platform?</span></h3>
                                    <div class="faq-content">
                                        <p>Sign up as a teacher, then navigate to your dashboard. Click 'Add New Material,' provide a title, description, and upload your resources. Your material will be available for students to access shortly.</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div>
                                <!-- End Faq item-->
            
                                <div class="faq-item">
                                    <h3><span class="num">3.</span> <span>Is it free to use {{ config('app.name') }}?</span></h3>
                                    <div class="faq-content">
                                        <p>Yes, we offer a free plan that allows you to upload and access basic educational resources. For premium features, such as access to advanced resources and analytics, you can subscribe to our Teacher or Student Premium plans.</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div>
                                <!-- End Faq item-->
            
                                <div class="faq-item">
                                    <h3><span class="num">4.</span> <span>How do I make payments for premium plans?</span></h3>
                                    <div class="faq-content">
                                        <p>We support secure online payments via credit/debit cards and bank transfers. Once a payment is completed, you'll receive access to the premium content or services you subscribed to.</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div>
                                <!-- End Faq item-->
            
                                <div class="faq-item">
                                    <h3><span class="num">5.</span> <span>How can I contact customer support?</span></h3>
                                    <div class="faq-content">
                                        <p>You can reach our support team through the 'Contact Us' page, via email, or through our 24/7 live chat support available on the website.</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div>
                                <!-- End Faq item-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- /Faq Section -->
            <!-- Call To Action Section -->
            <section id="call-to-action" class="call-to-action section dark-background">
                <img src="assets/img/cta-bg.jpg" alt="" />

                <div class="container">
                    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                        <div class="col-xl-10">
                            <div class="text-center">
                                <h3>Join Our Education Revolution</h3>
                                <p>Make a difference in the world of education by ensuring exam questions are accurately typed and delivered on time. Help us provide the best solutions for educators and students. Get involved now!</p>
                                <a class="cta-btn" href="#">Get Involved</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Call To Action Section -->

            <!-- Team Section -->

            <!-- Team Section -->
            <section id="team" class="team section light-background">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Meet Our Team</h2>
                    <p>The passionate individuals working tirelessly to deliver a seamless experience in creating and managing exam questions for educational institutions.</p>
                </div>
                <!-- End Section Title -->
            
                <div class="container">
                    <div class="row gy-5">
                        <!-- Team Member 1
                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="assets/img/team/josh.jpg" class="img-fluid" alt="Joshua Deinne" />
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Joshua Deinne</h4>
                                <span>Chief Executive Officer</span>
                                <p>Founder and CEO, dedicated to making exam question creation and management a seamless experience for educators.</p>
                            </div>
                        </div>
                     -->
            
                        <!-- 
                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="Sarah Jhonson" />
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <p>Leads the development of product features to ensure they meet the needs of educators and enhance the platform's user experience.</p>
                            </div>
                        </div>
                     
            
                       
                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="William Anderson" />
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <p>Oversees the technical development and ensures the platform's infrastructure is secure, scalable, and high-performing.</p>
                            </div>
                        </div>
                      
                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-img">
                                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="Amanda Jepson" />
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <p>Handles all financial operations, including budgeting, reporting, and ensuring the platform's fiscal health.</p>
                            </div>
                        </div>
                 
                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
                            <div class="member-img">
                                <img src="assets/img/team/team-5.jpg" class="img-fluid" alt="Brian Doe" />
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Brian Doe</h4>
                                <span>Marketing</span>
                                <p>Responsible for crafting and executing marketing strategies to boost the platform’s visibility and user engagement.</p>
                            </div>
                        </div>
                 
                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
                            <div class="member-img">
                                <img src="assets/img/team/team-6.jpg" class="img-fluid" alt="Josepha Palas" />
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Josepha Palas</h4>
                                <span>Operations</span>
                                <p>Ensures smooth operations across all departments, handling logistics and optimizing workflow efficiency.</p>
                            </div>
                        </div>
                  -->
                    </div>
                </div>
            </section>
            
            <!-- /Team Section -->

            <!-- 
            <section id="testimonials" class="testimonials section light-background">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
                            <h3>Testimonials</h3>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                            </p>
                        </div>

                        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                            <div class="swiper init-swiper">
                                <script type="application/json" class="swiper-config">
                                    {
                                        "loop": true,
                                        "speed": 600,
                                        "autoplay": {
                                            "delay": 5000
                                        },
                                        "slidesPerView": "auto",
                                        "pagination": {
                                            "el": ".swiper-pagination",
                                            "type": "bullets",
                                            "clickable": true
                                        }
                                    }
                                </script>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="d-flex">
                                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="" />
                                                <div>
                                                    <h3>Saul Goodman</h3>
                                                    <h4>Ceo &amp; Founder</h4>
                                                    <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                                </div>
                                            </div>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                <span>
                                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                                </span>
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                        

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="d-flex">
                                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="" />
                                                <div>
                                                    <h3>Sara Wilsson</h3>
                                                    <h4>Designer</h4>
                                                    <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                                </div>
                                            </div>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                <span>
                                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                                </span>
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                            

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="d-flex">
                                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="" />
                                                <div>
                                                    <h3>Jena Karlis</h3>
                                                    <h4>Store Owner</h4>
                                                    <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                                </div>
                                            </div>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                            

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="d-flex">
                                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="" />
                                                <div>
                                                    <h3>Matt Brandon</h3>
                                                    <h4>Freelancer</h4>
                                                    <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                                </div>
                                            </div>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                <span>
                                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                                                    veniam.
                                                </span>
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                    

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="d-flex">
                                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="" />
                                                <div>
                                                    <h3>John Larson</h3>
                                                    <h4>Entrepreneur</h4>
                                                    <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                                </div>
                                            </div>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                <span>
                                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi
                                                    cillum quid.
                                                </span>
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                             
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
       -->

       <!-- Contact Section -->
<section id="contact" class="contact section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact Us</h2>
        <p>We are here to support educators and help streamline the process of typing and delivering exam questions on time.</p>
    </div>
    <!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-6">
                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <p>Plot Ugbesia New Layout warri</p>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>For call: <a href="tel:+2348135836125">+2348135836125</a></p>
                            <p>For WhatsApp: <a href="https://wa.me/2348135836125" target="_blank">+2348135836125</a></p>
                        </div>
                    </div>
                    
                    <!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>joshuadeinne@gmail.com</p>
                            <p>joshuadeinne@gmail.com</p>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="500">
                            <i class="bi bi-clock"></i>
                            <h3>Open Hours</h3>
                            <p>Monday - Friday</p>
                            <p>9:00AM - 05:00PM</p>
                        </div>
                    </div>
                    <!-- End Info Item -->
                </div>
            </div>

            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required="" />
                        </div>

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="" />
                        </div>

                        <div class="col-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="" />
                        </div>

                        <div class="col-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                        </div>

                        <div class="col-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Contact Form -->
        </div>
    </div>
</section>
<!-- /Contact Section -->

        </main>

        <footer id="footer" class="footer position-relative light-background">
            <div class="container footer-top">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-about">
                        <a href="" class="logo d-flex align-items-center">
                            <span class="sitename">{{ config('app.name') }}</span>
                        </a>
                        <p>Your trusted platform for efficiently typing and managing exam questions for educators, ensuring smooth academic operations.</p>
                        <div class="social-links d-flex mt-4">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
        
                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
        
                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="#">Exam Question Typing</a></li>
                            <li><a href="#">Exam Management</a></li>
                            <li><a href="#">Content Uploads</a></li>
                            <li><a href="#">Document Formatting</a></li>
                            <li><a href="#">Custom Solutions</a></li>
                        </ul>
                    </div>
        
                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>Nigeria</p>
                        <p class="mt-4"><strong>Phone:</strong> <a href="https://wa.me/2348135836125" target="_blank">+2348135836125</a></p>
                    </div>
                </div>
            </div>
        
            <div class="container copyright text-center mt-4">
                <p>© <span>Copyright</span> <strong class="sitename">{{ config('app.name') }}</strong> <span>All Rights Reserved</span></p>
                <div class="credits">
               
                    Designed by <a href="#">Joshua Deinne</a>
                </div>
            </div>
        </footer>
        

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
        <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
        <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
        <script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

        <!-- Main JS File -->
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>
