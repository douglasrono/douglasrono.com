@extends('layouts.app')
@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up" class="text-warning">DOUGLAS RONO</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400" class="text-success">I’m a software engineer specializing in
                        building (and occasionally designing) exceptional digital experiences.</h2>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="#about" class="btn-get-started scrollto">READ MORE</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="assets/img/prof.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section>

    <main id="main">
        <section id="hero" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up" class="text-warning">DOUGLAS RONO</h1>
                        <h2 data-aos="fade-up" data-aos-delay="400" class="text-success">I’m a software engineer
                            specializing in
                            building (and occasionally designing) exceptional digital experiences.</h2>
                        <div data-aos="fade-up" data-aos-delay="800">
                            <a href="#about" class="btn-get-started scrollto">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                        <img src="assets/img/prof.png" class="img-fluid animated" alt="Douglas Rono, Software Engineer">
                    </div>
                </div>
            </div>
        </section>

        <main id="main">
            <!-- ======= Clients Section ======= -->
            <section id="clients" class="clients clients">
                <div class="container">
                    <div class="row">
                        <marquee width="40%" direction="left" height="30%">
                            <h1 class="text-danger">SOFTWARE ENGINEER</h1>
                        </marquee>
                    </div>
                </div>
            </section><!-- End Clients Section -->

            <!-- ======= About Us Section ======= -->
            <section id="about" class="about">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>ABOUT ME</h2>
                    </div>
                    <div class="row content">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                            <p>Hi,I'm Douglas Rono, a software developer with a passion for building high-quality web
                                applications using Laravel, Node, Express, and Vue.</p>
                            <p>I have 5 years of experience in the industry and have worked on a variety of projects,
                                ranging
                                from small startups to large enterprise applications. I specialize in developing custom web
                                applications that meet the specific needs of my clients. My expertise lies in Laravel and
                                Vue,
                                two of the most popular frameworks in the web development industry. I use these tools to
                                build
                                scalable, maintainable, and secure applications that are easy to maintain and update over
                                time.</p>
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                            <p>In addition to my technical skills, I am also a strong communicator and collaborator. I
                                believe
                                in working closely with my clients to understand their needs and deliver solutions that
                                exceed
                                their expectations. I am committed to delivering high-quality work on time and on budget,
                                and I
                                am always looking for new and innovative ways to improve my skills and knowledge.</p>
                            <p>If you're interested in working with me or learning more about my experience, please feel
                                free
                                to get in touch! I would love to hear from you.</p>
                            <a href="#contact" class="btn-learn-more">Reach Out</a>
                        </div>
                    </div>
                </div>
            </section><!-- End About Us Section -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>Services</h2>
                        <p>I offer the following services:</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                <h4 class="title"><a href="">E-commerce Development</a></h4>
                                <p class="description">I can help you build an e-commerce platform that is optimized for
                                    conversions and provides a great user experience for your customers.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h4 class="title"><a href="">Front-end development</a></h4>
                                <p class="description">I have extensive experience with front-end development using
                                    JavaScript and Vue. I can create responsive, user-friendly interfaces that provide a
                                    seamless user experience.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon"><i class="bx bx-tachometer"></i></div>
                                <h4 class="title"><a href="">Database design and development</a></h4>
                                <p class="description">I have expertise in SQL and can design and develop databases that
                                    are optimized for performance and scalability.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon"><i class="bx bx-world"></i></div>
                                <h4 class="title"><a href="">API development</a></h4>
                                <p class="description">I can develop RESTful APIs using Laravel that enable communication
                                    between different applications and services.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Services Section -->

            <!-- ======= More Services Section ======= -->
            <section id="more-services" class="more-services">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="card" style='background-image: url("assets/img/pic7.png");' data-aos="fade-up"
                                data-aos-delay="100">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="">Maintenance and support</a></h5>
                                    <p class="card-text">I offer ongoing maintenance and support for the applications that
                                        I develop. This includes bug fixes, updates, and security patches to ensure that the
                                        application remains secure and up-to-date.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                            <div class="card" style='background-image:  url("assets/img/hero-img.png");'
                                data-aos="fade-up" data-aos-delay="200">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="">CMS Development</a></h5>
                                    <p class="card-text">I can help you build a custom CMS that makes it easy to manage
                                        your website's content, while also providing advanced features and functionality.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch mt-4">
                            <div class="card" style='background-image: url("assets/img/hero-img.png");'
                                data-aos="fade-up" data-aos-delay="100">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="">Testing and Debugging</a></h5>
                                    <p class="card-text">I provide testing and debugging services to ensure that your web
                                        application is running smoothly and error-free.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch mt-4">
                            <div class="card" style='background-image: url("assets/img/hero.jpg");' data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="">Consulting and training</a></h5>
                                    <p class="card-text">I can provide consulting services to help you make informed
                                        decisions about your technology stack and development process. I also offer training
                                        sessions to help your team learn new technologies and techniques.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End More Services Section -->

            <!-- ======= Features Section ======= -->
            <section id="features" class="features">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>TECHNOLOGIES</h2>
                        <p>Here is a list of my latest technology stack</p>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-delay="300">
                        <div class="col-lg-3 col-md-4">
                            <div class="icon-box">
                                <i class="ri-store-line" style="color: #ffbb2c;"></i>
                                <h3><a href="">PHP</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                            <div class="icon-box">
                                <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                                <h3><a href="">LARAVEL</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                            <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                                <h3><a href="">MySQL</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                            <div class="icon-box">
                                <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                                <h3><a href="">JavaScript</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                            <div class="icon-box">
                                <i class="ri-database-2-line" style="color: #47aeff;"></i>
                                <h3><a href="">Vue</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                            <div class="icon-box">
                                <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                                <h3><a href="">Node</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                            <div class="icon-box">
                                <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                                <h3><a href="">Express</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                            <div class="icon-box">
                                <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
                                <h3><a href="">MongoDB</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                            <div class="icon-box">
                                <i class="ri-anchor-line" style="color: #b2904f;"></i>
                                <h3><a href="">Linux Tooling</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                            <div class="icon-box">
                                <i class="ri-git-branch-fill" style="color: #b20969;"></i>
                                <h3><a href="">Git</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                            <div class="icon-box">
                                <i class="ri-github-fill" style="color: #ff5828;"></i>
                                <h3><a href="">GitHub</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                            <div class="icon-box">
                                <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
                                <h3><a href="">Linode</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Features Section -->

            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>Portfolio</h2>
                        <p>List of my recently accomplished projects.</p>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-app">Frontend</li>
                                <li data-filter=".filter-card">Backend</li>
                                <li data-filter=".filter-web">API</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/front1.png" class="img-fluid" alt="Frontend Project 1">
                                <div class="portfolio-info">
                                    <p>Frontend</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/front1.png" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="Frontend 1"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio.php" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/api1.jpeg" class="img-fluid" alt="API Project 1">
                                <div class="portfolio-info">
                                    <p>API</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/api1.jpeg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="API 1"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio.php" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/front2.png" class="img-fluid" alt="Frontend Project 2">
                                <div class="portfolio-info">
                                    <p>Frontend</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/front2.png" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="Frontend 2"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio.php" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/backend1.png" class="img-fluid" alt="Backend Project 1">
                                <div class="portfolio-info">
                                    <p>Backend</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/backend1.png" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="Backend 1"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio.php" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/api2.jpg" class="img-fluid" alt="API Project 2">
                                <div class="portfolio-info">
                                    <p>API</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/api2.jpg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="API 2"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio.php" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/fornt3.jpg" class="img-fluid" alt="Frontend Project 3">
                                <div class="portfolio-info">
                                    <p>Frontend</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/fornt3.jpg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="Frontend 3"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio.php" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/backend2.jpg" class="img-fluid" alt="Backend Project 2">
                                <div class="portfolio-info">
                                    <p>Backend</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/backend2.jpg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="Backend 2"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio.php" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/backend3.avif" class="img-fluid" alt="Backend Project 3">
                                <div class="portfolio-info">
                                    <p>Backend</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/backend3.avif" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="Backend 3"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio.php" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/api3.jpeg" class="img-fluid" alt="API Project 3">
                                <div class="portfolio-info">
                                    <p>API</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/api3.jpeg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="API 3"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio.php" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Portfolio Section -->

            <!-- ======= F.A.Q Section ======= -->
            <section id="faq" class="faq">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                    <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-5">
                            <i class="ri-question-line"></i>
                            <h4>What kind of projects have you worked on?</h4>
                        </div>
                        <div class="col-lg-7">
                            <p>I have worked on a wide range of projects, including custom CMS development, e-commerce
                                platform
                                development, database design and optimization, front-end development, and more. I specialize
                                in
                                building custom web applications that meet the specific needs of my clients.</p>
                        </div>
                    </div><!-- End F.A.Q Item-->
                    <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-5">
                            <i class="ri-question-line"></i>
                            <h4>How do you approach a new project?</h4>
                        </div>
                        <div class="col-lg-7">
                            <p>I believe in working closely with my clients to understand their business needs and goals. I
                                start
                                by gathering requirements and conducting a thorough analysis of the project's technical and
                                business
                                requirements. I then develop a project plan that outlines the scope, timeline, and budget
                                for the
                                project. Throughout the project, I provide regular updates and communicate closely with my
                                clients to
                                ensure that the project is delivered on time and on budget.</p>
                        </div>
                    </div><!-- End F.A.Q Item-->
                    <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="col-lg-5">
                            <i class="ri-question-line"></i>
                            <h4>What is your process for testing and quality assurance?</h4>
                        </div>
                        <div class="col-lg-7">
                            <p>I believe that quality assurance is a critical part of the software development process. I
                                follow a
                                rigorous testing process that includes unit testing, integration testing, and user
                                acceptance testing.
                                I also use tools and techniques such as code reviews and automated testing to ensure that
                                the code is
                                of the highest quality and free of errors.</p>
                        </div>
                    </div><!-- End F.A.Q Item-->
                    <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="col-lg-5">
                            <i class="ri-question-line"></i>
                            <h4>What technologies do you specialize in?</h4>
                        </div>
                        <div class="col-lg-7">
                            <p>I specialize in Laravel, JavaScript, SQL, and Vue. These technologies are widely used in
                                the web development industry and allow me to create high-quality, scalable, and secure web
                                applications.</p>
                        </div>
                    </div><!-- End F.A.Q Item-->
                    <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
                        <div class="col-lg-5">
                            <i class="ri-question-line"></i>
                            <h4>Do you offer ongoing support and maintenance?</h4>
                        </div>
                        <div class="col-lg-7">
                            <p>Yes, I offer ongoing support and maintenance for all the projects I work on. This includes
                                bug
                                fixes, updates, and upgrades to ensure the continued success of your application.</p>
                        </div>
                    </div><!-- End F.A.Q Item-->
                    <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
                        <div class="col-lg-5">
                            <i class="ri-question-line"></i>
                            <h4>What is your availability for new projects?</h4>
                        </div>
                        <div class="col-lg-7">
                            <p>My availability for new projects varies depending on my current workload. Please get in touch
                                to
                                discuss your project and availability.</p>
                        </div>
                    </div><!-- End F.A.Q Item-->
                    <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
                        <div class="col-lg-5">
                            <i class="ri-question-line"></i>
                            <h4>What is your process for starting a new project?</h4>
                        </div>
                        <div class="col-lg-7">
                            <p>I start by conducting a thorough discovery phase to understand your business needs and goals.
                                From there, I create a detailed project plan that outlines the scope, timeline, and budget
                                for the
                                project. Once we have a plan in place, I begin the development process.</p>
                        </div>
                    </div><!-- End F.A.Q Item-->
                </div>
            </section><!-- End F.A.Q Section -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="contact-about">
                                <h3>Douglas Rono</h3>
                                <p>Do you have any projects that you'd wish to discuss? Don't hesitate to reach out to me.
                                    I’ll try
                                    my best to get back to you!</p>
                                <div class="social-links">
                                    <a href="https://twitter.com/itsdaglas" class="twitter"><i
                                            class="bi bi-twitter"></i></a>
                                    <a href="https://www.facebook.com/daglas.ronnie" class="facebook"><i
                                            class="bi bi-facebook"></i></a>
                                    <a href="https://github.com/douglasrono" class="instagram"><i
                                            class="bi bi-github"></i></a>
                                    <a href="https://www.linkedin.com/in/douglas-kiprono-ke/" class="linkedin"><i
                                            class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                            <div class="info">
                                <div>
                                    <i class="ri-map-pin-line"></i>
                                    <p>Nairobi, Kenya</p>
                                </div>
                                <div>
                                    <i class="ri-mail-send-line"></i>
                                    <p>dev@douglasrono.com</p>
                                </div>
                                <div>
                                    <i class="ri-phone-line"></i>
                                    <p>+254 110 666140</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </section><!-- End Contact Section -->
        </main>
        <footer-component />

        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Person",
          "name": "Douglas Rono",
          "jobTitle": "Senior Software Developer",
          "description": "Experienced software developer skilled in PHP, JavaScript, Vue, and Laravel.",
          "url": "https://www.douglasrono.com",
          "sameAs": [
            "https://www.linkedin.com/in/douglasrono",
            "https://github.com/douglasrono"
          ]
        }
        </script>

    </main>
@endsection
