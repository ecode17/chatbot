<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>IDMETAFORA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg shadow">
        <div class="container">
            <a class="navbar-brand" href="../chabot">
                <img src="../assets/img/logo.png" alt="Logo" height="50" class="d-inline-block" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../chatbot">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            ERP System
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Web Development
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Internet Of Things</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Tech News</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Our Company
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../about">About Us</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex justify-content-center" role="button">
                    <a class="btn btn-outline me-3" href="">Masuk</a>
                    <a class="btn btn-outline" href="../contact">Kontak</a>
                </div>
            </div>
        </div>
    </nav>
    <div>
        <section class="bg-banner">
            <div class="container">
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center flex-column yt-idmetafora">
                        <iframe class="yt-idmetafora" src="https://www.youtube.com/embed/UOrQV7r_fX8" width="500px"
                            height="300px"
                            title="IDMETAFORA - Cerita dibalik 5 Tahun Perjalanan PT Metafora Indonesia Teknologi - Part 1"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="col d-flex justify-content-center flex-column text-idmetafora">
                        <h1>SOFTWARE ERP IDMETAFORA</h1>
                        <h4>Taking Your request to the Next Level, Move On with IDMETAFORA! The Best Choice for ERP
                            Software in Indonesia</h4>
                    </div>
                </div>
                <h2 class="text-center mt-4">Our Clients</h2>
                <div class="row justify-content-center">
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="client-logo">
                            <img src="../assets/img/client/pertamina.png" alt="Client 1" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="client-logo">
                            <img src="../assets/img/client/wonderful-indonesia.png" alt="Client 2" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="client-logo">
                            <img src="../assets/img/client/mubadala-petroleum.png" alt="Client 3" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="client-logo">
                            <img src="../assets/img/client/molindo.png" alt="Client 4" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="client-logo">
                            <img src="../assets/img/client/dinsos-jateng.png" alt="Client 5" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="client-logo">
                            <img src="../assets/img/client/chandra-asri.png" alt="Client 1" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="why-us">
            <div class="container">
                <div>
                    <h2>Why Choose Us as Your ERP Consultants?</h2>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <img src="../assets/img/consultan/trusted-4.png" alt="">
                        <h5 class="text-decoration-underline">TRUSTED</h5>
                        <p>We are committed to making IDMETAFORA the best ERP Software in Indonesia.</p>
                    </div>
                    <div class="col">
                        <img src="../assets/img/consultan/maintenance-2.png" alt="">
                        <h5 class="text-decoration-underline">MAINTENANCE GUARANTY</h5>
                        <p>Our team is committed to supporting every single client to customize our ERP with your
                            request flow until it works.</p>
                    </div>
                    <div class="col">
                        <img src="../assets/img/consultan/secure.png" alt="">
                        <h5 class="text-decoration-underline">SECURE</h5>
                        <p>With a high standard framework our ERP is designed with high concern for security.</p>
                    </div>
                    <div class="col">
                        <img src="../assets/img/consultan/team-2.png" alt="">
                        <h5 class="text-decoration-underline">STRONG TEAM SUPPORT</h5>
                        <p>With a highly experienced team, our development team is committed to supporting your needs.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="achievement">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="achievement-item">
                            <img src="../assets/img/achievement/building.png" alt="enterprise requestes">
                            <div class="achievement-text">
                                <h5>Enterprise Success</h5>
                                <p>More than 200 enterprise requestes are using our ERP software solution.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="achievement-item-right">
                            <div class="achievement-text">
                                <h5>Global Implementation</h5>
                                <p>For over a decade, we've implemented ERP software across Indonesia's main islands and
                                    globally.</p>
                            </div>
                            <img src="../assets/img/achievement/Time management-cuate.png" alt="enterprise requestes">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="achievement-item">
                            <img src="../assets/img/achievement/Connected world-pana.png" alt="enterprise requestes">
                            <div class="achievement-text">
                                <h5>Expansive Reach</h5>
                                <p>We have assisted more than 1,000,000 users in our ecosystem with our technology.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="what-we-do">
            <div class="container">
                <div>
                    <h2>Our Software ERP Ecosystem</h2>
                    <img src="../assets/img/ecosystem-erp-idmetafora.png" alt="">
                </div>
            </div>
        </section>
        <section class="step-business">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <h5>Lorem ipsum</h5>
                        <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to
                            demonstrate the visual form of a document or a type face without relying on meaningful
                            content</p>
                    </div>
                    <div class="col-7">
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="../assets/img/step-business/jasa-pembuatan-system-erp-purchasing-indonesia.png"
                                                class="d-block" alt="...">
                                        </div>
                                        <div class="col-10">
                                            <h5>PURCHASING SYSTEM</h5>
                                            <p>Tools that help you make a recommendation regarding quantity and price
                                                and the best supplier.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="../assets/img/step-business/jasa-pembuatan-system-erp-warehouse-di-indonesia.png"
                                                class="d-block" alt="...">
                                        </div>
                                        <div class="col-10">
                                            <h5>WAREHOUSE MANAGEMENT</h5>
                                            <p>Tools that help you make a recommendation regarding quantity and price
                                                and the best supplier.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="../assets/img/step-business/jasa-pembuatan-sistem-toko-di-indonesia-erp-store.png"
                                                class="d-block" alt="...">
                                        </div>
                                        <div class="col-10">
                                            <h5>POINT OF SALES</h5>
                                            <p>Tools that help you make a recommendation regarding quantity and price
                                                and the best supplier.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="what-can-you-request">
            <div class="container">
                <div>
                    <h2>What Can You Request?</h2>
                </div>
                <div class="row">
                    <div class="col-5">
                        <div class="row request">
                            <div class="col-2">
                                <img src="../assets/img/request/top-the-best-developer-erp-indonesia.png" alt=""
                                    class="req">
                            </div>
                            <div class="col-10">
                                <p>Customize request Flow</p>
                            </div>
                        </div>
                        <div class="row request">
                            <div class="col-2">
                                <img src="../assets/img/request/customize-data-format-developer-indonesia-services.png"
                                    alt="" class="req">
                            </div>
                            <div class="col-10">
                                <p>Enhance System Integration</p>
                            </div>
                        </div>
                        <div class="row request">
                            <div class="col-2">
                                <img src="../assets/img/request/data-integration-jasa-integrasi-data-erp.png" alt=""
                                    class="req">
                            </div>
                            <div class="col-10">
                                <p>Improve Operational Efficiency</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <img src="../assets/img/request/business.png" alt="request-img" class="business-img">
                    </div>
                </div>
            </div>
        </section>
        <section class="how-journey">
            <div class="container">
                <h2 class="text-journey">How Journey To Work With Us?</h2>
                <div class="row">
                    <div class="col journey-step">
                        <img src="../assets/img/journey/consultant-web-developer-yogyakarta.png" alt="">
                        <h5>CONSULTATION</h5>
                        <p>Planning and do a briefing with our team to make a custom web like you want with the best
                            quality and worth the price.</p>
                    </div>
                    <div class="col journey-step">
                        <img src="../assets/img/journey/partnership-sign-mou-web-development-yogyakarta-2.png" alt="">
                        <h5>CONTRACT PROJECT</h5>
                        <p>Making MoU with you and then our team will develop custom project-special like your request
                        </p>
                    </div>
                    <div class="col journey-step">
                        <img src="../assets/img/journey/maintenance-website-services-yogyakarta-2.png" alt="">
                        <h5>MAINTENANCE SERVICES</h5>
                        <p>After the project completed we will maintain your web to keep it work and minimalize error.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h5>
                        Alamat ID METAFORA
                    </h5>
                    <p>
                        Wonorejo, Sariharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581
                    </p>
                </div>
                <div class="col">
                    <h5>
                        About Us
                    </h5>
                    <p>
                        IDMETAFORA is IT Solution Company, our main request is ERP Development
                    </p>
                </div>
                <div class="col">
                    <p>
                        Website Developement<br>
                        Enterprise Resources Planning<br>
                        Jasa Konsultan Bisnis
                    </p>
                </div>
                <div class="col social-media">
                    <h5>Our Social Media</h5>
                    <i class="bi bi-linkedin"> linkedin</i><br>
                    <i class="bi bi-facebook"> facebook</i><br>
                    <i class="bi bi-instagram"> instagram</i>
                </div>
            </div>
            <div class="text-center pt-4 pb-1">
                <p>© 2014-2024 PT Metafora Indonesia Teknologi (IDMETAFORA © ). Page rendered in 1.0705 seconds.</p>
            </div>
        </div>
    </footer>
    <div class="chatbot">
        <button class="open-button" onclick="openForm()">
            <img src="../assets/img/chatbot/chatbot.png" alt="">
        </button>
        <div class="chat-popup" id="chat-box">
            <div class="chat-window">
                <div class="chat-header">
                    <h5>Chatbot</h5>
                    <button type="button" class="close-btn" onclick="closeForm()">✕</button>
                </div>
                <div id="chat-box-content" class="message-container">
                    @if(isset($messages) && is_array($messages))
                        @foreach($messages as $message)
                            <div class="message {{ $message['role'] === 'user' ? 'user' : 'bot' }}">
                                <div class="message-bubble">
                                    {{ $message['content'] }}
                                    <span class="{{ $message['role'] === 'user' ? 'time-right' : 'time-left' }}">
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <form action="/chatbot" class="form-chatbot" method="POST">
                    @csrf
                    <input type="text" id="user_input" class="user_input" name="user_input" placeholder="Type your message..." required>
                    <button type="submit" class="btn-send">
                        <i class="bi bi-send"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>    
    <script src="../assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>