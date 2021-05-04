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
        <div class="about-us-container">
            <!-- header -->
            <div class="header-wrap">
                <div class="header">
                    <div class="logo">
                        <a href="./index.php">
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
                <div class="mobile-nav-bar-container">
                    <!-- open nav-bar  -->
                    <div class="menu-bar-open">
                        <i class="fas fa-bars fa-2x"></i>
                    </div>
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
            <!-- intro part  -->
            <div class="header-intro">
                <div class="about-us-headline">
                    <h1>o nama</h1>
                </div>
            </div>
            <div class="intro-about-us">
                <p>Preduzeće Hip-ex je osnovano 2007. godine kada počinje sa radom preuzimanjem Hladnjače u Novom Goraždu. Naša osnovna djelatnost je proizvodnja, otkup i prerada jagodičastog voća.</p>
                </p>
                <div class="line"></div>
            </div>
            <!-- vocnjak -->
            <div class="malinjak-container">
                <div class="malinjak">
                    <img src="./css/images/HIP EX- malinjak.png" alt="">
                </div>
                <div class="malinjak-text">
                    <h3>nastanak hipex-a</h3>
                    <p>Smješteni smo u gornjem slivu rijeke Drine, na 90 kilometara jugo-istočno od Sarajeva. Radi se o brdsko planinskom područiju sa plodnim zemljištem u pojasu pored rijeke Drine, kao i mnoštvom obradivog zemljišta u višim predjelima, gdje
                        su smješteni mnogi voćnjaci. Ova sredina odlikuje se izuzetno zdravom, nezagađenom i očuvanom prirodom.
                    </p>
                    <p>Od osnivanja se intenzivno radi na modernizaciji pogona, uvodjenju medjunarodnih standarda i organizovanju proizvodnje jagodičastih plodova u saradnji sa poljoprivrednim proizvodjačima i udruženjima.
                    </p>
                </div>
            </div>
            <!-- map -->
            <div class="map-container">
                <div class="map" id="map">
                    <img src="./css/images/ba-0515.png" alt="">
                </div>
                <div class="map-text">
                    <h3>hipex danas</h3>
                    <p>Hip-ex danas predstavlja moderno preduzeće koje upravlja najvećom hladnjačom na području Podrinja i koje ostvaruje saradnju sa preko 500 kooperanata sa područija opština Vlasenica, Rogatica, Višegrad, Rudo, Novo Goražde, Goražde, Čajniče
                        i Foča, kao i drugim opštinama istočne i centralne Bosne. </p>
                    <p> Sve rashladne komore moderno su opremljene ramovima I drive in regalima koji garantuju adekvatno čuvanje robe i dobru preglednost. Pored skladištenja voća i povrća Hip-ex je registovan i kao skladište za čuvanje proizvoda animalnog porijekla.
                    </p>
                </div>
            </div>
            <!-- storage -->
            <div class="storage">
                <div class="storage-img">
                    <img src="./css/images/ladnja.png" alt="">
                </div>
                <div class="storage-text">
                    <h3>kapaciteti</h3>
                    <p> Hladnjača je ukupnog kapaciteta 2.000t smrznutog voća i povrća i ostvaruje saradnju sa preko 500 kooperanata. Posedujemo i savremenu opremu za brzo zamrzavanje, kapaciteta 2,5t/h, kao i pogone za prebiranje, sortiranje i pakovanje. Naši
                        kooperanti su praćeni i kontrolisani od strane naše stručne službe, sprovode i pridržavaju se HIP-EX-ovog pravilnika o načinu prihrane, zaštite i proizvodnje maline.
                    </p>
                </div>
            </div>
            <!-- company in number -->
            <div class="counters">
                <!-- capacity -->
                <div class="counter-wrap">
                    <div class="counter-container">
                        <div class="counter" data-target="2000">0</div><span>t</span>
                    </div>
                    <h4>kapacitet hladnjače</h4>
                </div>
                <!-- freezing tunnel -->
                <div class="counter-wrap">
                    <div class="counter-container">
                        <div class="counter" data-target="2500">0</div><span>kg/h</span>
                    </div>
                    <h4>tunel za brzo <br> zamarzavanje</h4>
                </div>
                <!-- our associates -->
                <div class="counter-wrap">
                    <div class="counter-container">
                        <div class="counter" data-target="500">0</div><span>+</span>
                    </div>
                    <h4>naših <br>kooperanata</h4>
                </div>
            </div>

            <!-- footer -->
            <div class="about-us-footer">
                <div class="footer">
                    <div class="logo ">
                        <a href="index.php">
                            <img src="./css/images/hipex logo.png " alt="logo ">
                        </a>
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
        </div>

        <script type="module" src="./JavaScript/aboutUs.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</php>