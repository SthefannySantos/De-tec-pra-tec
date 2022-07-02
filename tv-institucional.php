<?php

    require_once('php/conexao.php');

    $sql = 'SELECT * FROM postagem ORDER by id DESC limit 5';

    $resultado = mysqli_query($conn, $sql);

?>


<!doctype html>
<html lang="pt-br">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="img/book-stack.png" type="image/png">
<title>De Tec pra Tec | TV</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/themify-icons.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="vendors/animate-css/animate.css">
<!-- main css -->
<!-- <link rel="stylesheet" href="css/style.css"> -->
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/tv-int.css">
</head>

<body>
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

                <div class="carousel-item font-tv">
                    <img src="img/banner-tv/1.jpg" class="d-block w-100 " alt="...">
                    <div class="carousel-caption d-none d-md-block font-tv">
                        <h5 class=""> Conheça a biblioteca</h5>
                        <p>Venha descobrir a diversidade conhecimentos que nossa instuição pode oferecer</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/banner-tv/2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block"></div>
                </div>

                <?php 
                    while ($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

                        echo "<div class=\"carousel-item\" >"; ?>
                            <img src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($row['imagem']); ?>"/>
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