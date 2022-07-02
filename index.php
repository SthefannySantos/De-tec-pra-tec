<?php

    require_once('php/conexao.php');

    $sql = 'SELECT * FROM postagem ORDER by id DESC limit 5;';

    $resultado = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/book-stack.png" type="image/png">
    <title>De Tec pra Tec</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/tv-int.css">
</head>
<body>

    <!--================ Start header Top Area =================-->
    <section class="header-top">
        <div class="container post-content img">
            <div class="row align-items-center justify-content-between">
                <div class="col-6 col-lg-4 col-md-6 col-sm-6 logo-wrapper mx-auto">
                    <a href="index.php" class="logo">
                        <img src="img/logo2.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </section>
    <!--================ End header top Area =================-->

    <!-- Start header Menu Area -->
    <header id="header" class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>     
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contato</a></li> 
                            <li class="nav-item"><a class="nav-link" href="tv-institucional.php">TV</a></li>      
                            <li class="nav-item"><a class="nav-link" href="login.html">Administração</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End header MEnu Area -->

    <!--================Fullwidth block Area =================-->

    <section class="fullwidth-block area-padding-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="my-auto mx-auto h-100 container">


                <div class="carrousel-central">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1" ></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3" ></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="4" ></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="5" ></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="6" ></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="7" ></li>
            </ol> 

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/banner-tv/0.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block"></div>
                </div>

                <div class="carousel-item">
                    <img src="img/banner-tv/1.jpg" class="d-block w-100 " alt="...">
                    <div class="carousel-caption d-none d-md-block font-tv">
                        <h5 class=""> Conheça a biblioteca</h5>
                        <p>Venha descobrir a diversidade conhecimentos que nossa instuição pode oferecer</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/banner-tv/2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>

                <?php 
                    while ($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

                        echo "<div class=\"carousel-item font-tv\" >"; ?>
                            <img src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($row['imagem']); ?> " class="img-db"/>
                        <?php 
                        echo "<div class=\"carousel-caption d-none d-md-block font-tv\">
                                <h5>$row[titulo]</h5>
                                <p>$row[subtitulo]</p>
                                </div>
                            </div> "; 
                    }
                ?>
            </div>
        </div>
    </div>



                </div>
            </div>
        </div>
    </section>

    <!--================Fullwidth block Area end =================--> 

    <!--================ Editors Picks section start =================-->  
    
    <section class="editors_pick area-padding">
        <div class="container">
            <div class="row">
                <div class="area-heading">
                    <h3>Conheça nossos cursos: </h3>
                    <p>Os cursos que a nossa ETEC oferece são:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-xl-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/infonet.png" alt="">
                        </div>
                        <div class="short_details pad_25 ">
                            <div class="meta-top d-flex">
                                <a href="#">Cursos Técnicos</a>
                            </div>
                            <a class="d-block" >
                                <h4>Desenvolvimento de sistemas </h4>
                            </a>
                        </div>
                    </div>    
                </div>
                <div class="col-lg-7 col-xl-6">
                    <div class="single-blog row no-gutters style-four m_b_30">
                        <div class="col-12 col-sm-7">
                            <div class="short_details padd_left_0">
                                <div class="meta-top d-flex">
                                    <a href="#">Cursos Técnicos</a>
                                </div>
                                <a class="d-block">
                                    <h4 class="font-20">Informática pra internet </h4>
                                </a>
                                <p></p>
                            </div>  
                        </div>  
                        <div class="col-12 col-sm-5">
                            <div class="thumb">
                                <img class="img-fluid" src="img/ds.png" alt="">
                            </div>
                        </div>
                    </div> 

                    <div class="single-blog row no-gutters style-four">
                        <div class="col-12 col-sm-5">
                            <div class="thumb">
                                <img class="img-fluid" src="img/adm.png" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-7">
                            <div class="short_details padd_right_0">
                                <div class="meta-top d-flex">
                                    <a href="#">Cursos Técnicos</a>
                                </div>
                                <a class="d-block">
                                    <h4 class="font-20">Administração </h4>
                                </a>
                                <p></p>
                            </div>  
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--================ Editors Picks section end =================-->     


    <!-- ================ start footer Area ================= -->
    <footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                <h4>Sobre Nós</h4>
                <p class="texto-sobre">Nós somos um site institucional que busca interagir mais com os alunos, para criar um ambiente agradável entre os alunos, de todos os cursos.</p>
                <div class="footer-logo">
                    <img src="img/logo2.png" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                <h4>Contact Info</h4>
                <div class="footer-address">
                    <p class="texto-sobre">Emef Francisco Cardona: Rua Humberto Rossetti, 711.
                        Jardim Ouro Branco, Artur Nogueira - SP, CEP 13160-000, São Paulo</p>
                    <span style="color: #ffffff;">Telefone : (19) 3877-3864</span>
                    <span style="color: #ffffff;">Email : trajano@trajano.com.br</span>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                <h4>Links Importantes</h4>
                <ul>
                    <li><a href="http://trajanocamargo.com.br/site/index.php/en/" target="_blank">Site do Trajano</a></li>
                    <li><a href="#">Instagram da Escola</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                <h4>Desenvolvedores</h4>
                <ul>
                    <li><a href="https://br.linkedin.com/in/lucas-daniel-mota-medeiros-b77418202?trk=people-guest_people_search-card">Daniel Mota</a></li>
                    <li><a href="https://br.linkedin.com/in/gabriel-krebski-450995240">Gabriel Krebski</a></li>
                    <li><a href="https://www.linkedin.com/in/nath%C3%A1lia-izidio-90501b240/">Nathália Izidio</a></li>
                    <li><a href="https://br.linkedin.com/in/sthefanny-jaiane-silveira-santos-6b3a34190">Sthefanny Jaiane</a></li>
                </ul>
                </div>
        </div>
    </div>
    </div>
</footer>
<!-- ================ End footer Area ================= -->






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/popup/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/theme.js"></script>
</body>
</html>