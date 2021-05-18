<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/091fa07559.js" crossorigin="anonymous"></script>
  <link rel="icon" href="./css/images/favicon.png" type="image/png" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/091fa07559.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/all.min.css">
  <link rel="stylesheet" href="/css/style.css">

  <title>HI - PEX</title>
</head>

<body>
  <div class="contact-container">
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
          <a href="index.php">
            <img src="./css/images/hipex logo.png" alt="">
          </a>
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
    <!-- header image -->
    <div class="contact-img">
      <h1>kontakt</h1>
    </div>
    <div class="contact-body">
      <!-- company contact details -->

      <div class="company-informations">
        <div class="contact-logo ">
          <a href="./index.php">
            <img src="./css/images/hipex logo.png " alt="logo ">
          </a>
        </div>
        <div class="company-details">
          <p class="text-center">Adresa: Kopači centar 1 bb, 73 110<br> Novo Goražde</p>
          <p class="text-center ">Broj telefona: <a href="tel:+38758430474">+387 58 430 474</a> ;
            <a href="tel:+38758430010">+387 58 430 010</a>
          </p>
          <p class="text-center ">Fax: <a href="fax:+38758430198">+387 58 430 198</a></p>
          <p class="text-center">Mail: <a id="mail" href="mailto:hip-ex@teol.net">hip-ex@teol.net</a></p>
        </div>
      </div>
      <div class="customers-form-wrap">
        <div class="message-sent">Podaci poslati</div>

        <form class="contact-form" id="contactForm">
          <!-- ime -->
          <div class="input-form">
            <i class="fas fa-user fa-2x"></i>
            <input type="text" name="name" id="name" placeholder="Ime i prezime" required oninvalid="this.setCustomValidity('Molimo Vas unesite vaše ime')">

          </div>
          <!-- mail -->
          <div class="input-form">
            <i class="fas fa-envelope fa-2x"></i>
            <input type="email" name="email" id="email" placeholder="E-mail">
          </div>
          <!-- phone -->
          <div class="input-form">
            <i class="fas fa-phone-alt fa-2x"></i>
            <input type="number" name="phone" id="phone" placeholder="Telefon" required oninvalid="this.setCustomValidity('Molimo Vas unesite vaš broj telefona')">
          </div>
          <!-- message -->
          <div class="text-form">
            <i class="fas fa-pen fa-lg"></i>
            <textarea id="message" name="message" rows="6" cols="48" autocapitalize="sentences" placeholder="Poruka" required oninvalid="this.setCustomValidity('Molimo Vas unesite sadržaj poruke')"></textarea>
          </div>

          <div class="col-md-12 mailResponse" style="display:none;">
            <div class="alert alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
              <p class="mailResponseText"></p>
            </div>
          </div>
          <!-- submit -->
          <div class="submit-wrap">
            <input type="submit" value="Pošalji">
          </div>
        </form>
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
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="module" src="JavaScript/contact.js"></script>
  <script type="module" src="JavaScript/sendEmail.js"></script>
</body>

</html>
