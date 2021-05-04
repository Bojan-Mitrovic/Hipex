<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/091fa07559.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">

        <title>HI - PEX</title>
    </head>

    <body>
        <div class="main">
            <!-- header -->
            <div class="header-wrap">
                <div class="header">
                    <div class="logo">
                        <a href="index.php">
                            <img src="./css/images/hipex logo.png" alt="">
                        </a>
                    </div>
                    <div class="nav-bar-container">
                        <div class="nav-bar">
                            <ul>
                                <li><a href="index.php">POČETNA</a></li>
                                <li><a href="aboutUs.php">O NAMA</a></li>
                                <li><a href="proizvodi.php">PROIZVODI I USLUGE</a></li>
                                <li><a href="kontakt.php">KONTAKT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile header  -->
            <div class="mobile-header">
                <div class="mobile-logo">
                    <a href="index.php">
                        <img src="./css/images/hipex logo.png" alt="">
                    </a>
                </div>
                <!-- open nav-bar  -->
                <div class="menu-bar-open">
                    <i class="fas fa-bars fa-2x"></i>
                </div>
                <div class="mobile-nav-bar-container">

                    <!-- close nav-bar  -->
                    <div class="menu-bar-close">
                        <i class="fas fa-times fa-2x"></i>
                    </div>

                    <div class="mobile-nav-bar">
                        <ul>
                            <li><a href="index.php">POČETNA</a></li>
                            <li><a href="aboutUs.php">O NAMA</a></li>
                            <li><a href="proizvodi.php">PROIZVODI I USLUGE</a></li>
                            <li><a href="kontakt.php">KONTAKT</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- slideshow-->
            <div class="slideshow-container">
                <!-- 1st slide -->
                <div class="slides fade">
                    <!-- slide in text -->
                    <div class="slide-in-top">
                        <h1 class="slide-in-text">otkup i prodaja malina</h1>
                        <a class="slides-btn" href="./proizvodi.php#service">saznaj više</a>
                    </div>
                    <img src="./css/images/slide1.png" style="width:100%" alt="1st slide">
                    <div class="text "></div>
                </div>
                <!-- 2nd slide -->
                <div class="slides fade">
                    <!-- slide in text -->
                    <div class="slide-in-right">
                        <h1 class="slide-in-text">uslužno</h1>
                        <h1 class="slide-in-text">zamrzavanje</h1>
                        <a class="slides-btn" href="./proizvodi.php#service">saznaj više</a>
                    </div>
                    <img src="./css/images/slide2.png" style="width:100%" alt="2nd slide">
                    <div class="text "></div>
                </div>
                <!-- 3rd slide -->
                <div class="slides fade">
                    <div class="scale-in-ver-top">
                        <h1 class="slide-in-text">skladištenje i čuvanje</h1>
                        <a class="slides-btn" href="./proizvodi.php#service">saznaj više</a>
                    </div>
                    <img src="./css/images/slide3.png " style="width:100% " alt="3rd slide ">
                    <div class="text "></div>
                </div>
            </div>
            <!-- slideshow dots -->
            <div class="dot-container" style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>

            <!-- home about us -->
            <div class="about-us-home">
                <h2>O nama</h2>
                <p>Preduzeće Hip-ex je osnovano 2007.godine, kada počinje sa radom preuzimanjem Hladnjače u Novom Goraždu. Naša osnovna djelatnost je proizvodnja, otkup i prerada jagodičastog voća...</p>
                <a class="slides-btn" href="aboutUs.php">saznaj više</a>
            </div>

            <!-- 4th sector -->
            <div class="citat">
                <h2>„Neka vaša hrana bude lek, a vaš lek hrana“ </h2>
                <span>Hipokrat</span>
            </div>

            <!-- 5th part  -->
            <div class="icons-wrap">
                <div class="icons-container">
                    <!-- single item -->
                    <div class="icon-wrap raspeberry">
                        <div class="icon">
                            <a href="./proizvodi.php#service">
                                <img src="./css/images/malina1.png" alt="malina">
                            </a>
                        </div>
                        <p class="icon-text">Otkup svježih jagodičastih<br> plodova</p>
                    </div>
                    <!-- single item -->
                    <div class="icon-wrap palett">
                        <div class="icon">
                            <a href="./proizvodi.php#service">
                                <img src="./css/images/paleta2s.png" alt="paleta">
                            </a>
                        </div>
                        <p class="icon-text">Uslužno lagerovanje robe</p>
                    </div>
                    <!-- single item -->
                    <div class="icon-wrap truck">
                        <div class="icon">
                            <a href="./proizvodi.php#service">
                                <img src="./css/images/kamion11.png" alt="kamion">
                            </a>
                        </div>
                        <p class="icon-text">Trgovina zamrznutim<br> voćem i povrćem</p>
                    </div>
                    <!-- single item -->
                    <div class="icon-wrap flake">
                        <div class="icon">
                            <a href="./proizvodi.php#service">
                                <img src="./css/images/flake1.png" alt="pahulja">
                            </a>
                        </div>
                        <p class="icon-text">Uslužno zamrzavanje robe</p>
                    </div>
                    <!-- single item -->
                    <div class="icon-wrap spray">
                        <div class="icon">
                            <a href="./proizvodi.php#service">
                                <img src="./css/images/spray1.png" alt="sprej">
                            </a>
                        </div>
                        <p class="icon-text">Prodaja djubriva, hemije...</p>
                    </div>
                    <!-- single item -->
                    <div class="icon-wrap hands">
                        <div class="icon">
                            <a href="./proizvodi.php#service" alt="">
                                <img src="./css/images/ruke.png" alt="ruke slika">
                            </a>
                        </div>
                        <p class="icon-text">Organizovanje proizvodnje</p>
                    </div>
                </div>
            </div>

            <!-- 6th part - location -->
            <div class="nature ">
                <div class="ba1">
                    <a href="./aboutUs.php#map">
                        <img src="./css/images/ba-0515.png" alt="">
                    </a>
                </div>
            </div>


            <!-- footer -->
            <div class="home-footer footer">
                <div class="footer ">
                    <div class="logo ">
                        <a href="index.php">
                            <img src="./css/images/hipex logo.png " alt="logo ">
                        </a>
                    </div>
                </div>


                <div class="company-adress ">
                    <p class="text-center ">Adresa: Kopači centar 1 bb, 73 110 Novo Goražde</p>
                    <p class="text-center ">Broj telefona: <a href="tel:+38758430474">+387 58 430 474</a> ;
                        <a href="tel:+38758430010">+387 58 430 010</a>
                    </p>
                    <p class="text-center ">Fax: <a href="fax:+38758430198">+387 58 430 198</a></p>
                    <p class="text-center">Mail: <a id="mail" href="mailto:hip-ex@teol.net">hip-ex@teol.net</a></p>
                </div>
            </div>
        </div>

        <script src="./JavaScript/slideshow.js"></script>
        <script type="module" src="./JavaScript/index.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
        <script type="module" src="./JavaScript/sendEmail.js"></script>
    </body>

</php>