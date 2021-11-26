<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Trabalho Bimestral - Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ URL::asset('cssSite/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('cssSite//bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('cssSite/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('cssSite/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('cssSite/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <h1><a href="#">HenriTech</a></h1>
                
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ route('login') }}">Login</a></li>
                    <li><a class="nav-link scrollto" href="#about">Sobre o Trabalho</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('register') }}">Registro</a></li>
                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End #header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <h1>Trabalho Bimestral</h1>
            <h2>Trabalho de Desenvolvimento para Servidores II</h2>
            <a href="#about" class="btn-get-started scrollto">Ação entre Amigos</a>
        </div>
    </section><!-- #hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Sobre o Trabalho</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="assets/img/about-img.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->
        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Desenvolvido por Henrique B. P. Santos</span></strong>. Todos os Direitos reservados.
                </div>
                <div class="credits">
                </div>
            </div>
        </footer>
</body>

</html>
