<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?= base_url() ?>new/invoice/invoice.css">
</head>

<body>
  <div class="background"></div>
  <header>
    <div class="container">
      <ul>
        <li>
          <a href="#" class="logo">
            <div class="images">
              <img src="<?= base_url() ?>new/images/logo.png" class="log-forDark" title="Cosmic Bowling">
              <img src="<?= base_url() ?>new/images/logo.png" class="logo-forLight" title="Cosmic Bowling">
            </div>
            <h2>Cosmic Bowling <span>.</span></h2>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link"></a>
        </li>
        <li>
          <a href="#" class="nav-link"></a>
        </li>
        <li>
          <span class="nav-link theme-toggle">
            <i class="fa-solid fa-sun"></i>
            <i class="fa-solid fa-moon"></i>
          </span>
        </li>
      </ul>
    </div>
  </header>

  <main>
    <section class="contact">
      <div class="container">
        <div class="left">
          <div class="form-wrapper">
            <div class="contact-heading">
              <h1>Solicita Aquí tu Comprobante <span>.</span></h1>
              <p class="text"> O comuníquese a través de : <a href="mailto:">invoice@cosmicbowling.com.pe</a></p>
            </div>

            <form action="index.html" class="contact-form" autocomplete="off">

              <div class="input-wrap">
                <input class="contact-input" autocomplete="off" name="First Name" type="text" required>
                <label for="">Nombres</label>
                <i class="icon fa-solid fa-address-card"></i>
              </div>

              <div class="input-wrap">
                <input class="contact-input" autocomplete="off" name="Last Name" type="text" required>
                <label for="">Apellidos</label>
                <i class="icon fa-solid fa-address-card"></i>
              </div>

              <div class="input-wrap w-100">
                <input class="contact-input" autocomplete="off" name="Email" type="email" required>
                <label for="">Email</label>
                <i class="icon fa-solid fa-envelope"></i>
              </div>

              <div class="input-wrap textarea w-100">
                <textarea class="contact-input" auto-complete="off" name="Message" required></textarea>
                <label for="">Message</label>
                <i class="icon fa-solid fa-inbox"></i>
              </div>

              <div class="contact-buttons">
                <input type="submit" value="Solicitar Comprobante" class="btn">
              </div>
            </form>
          </div>
        </div>
        <div class="right">
          <div class="image-wrapper">
            <img src="<?= base_url() ?>new/images/img4.jpg" class="img" alt="">
            <div class="wave-wrap">
              <svg class="wave" viewBox="0 0 783 1536" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="wave" d="M236.705 1356.18C200.542 1483.72 64.5004 1528.54 1 1535V1H770.538C793.858 63.1213 797.23 196.197 624.165 231.531C407.833 275.698 274.374 331.715 450.884 568.709C627.393 805.704 510.079 815.399 347.561 939.282C185.043 1063.17 281.908 1196.74 236.705 1356.18Z" />
              </svg>
            </div>
            <svg class="dashed-wave" width="345" height="877" viewBox="0 0 345 877" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path id="dashed-wave" d="M0.5 876C25.6667 836.167 73.2 739.8 62 673C48 589.5 35.5 499.5 125.5 462C215.5 424.5 150 365 87 333.5C24 302 44 237.5 125.5 213.5C207 189.5 307 138.5 246 87C185 35.5 297 1 344.5 1" />
            </svg>
          </div>
        </div>
      </div>
    </section>
  </main>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"></script>
  <script src="<?= base_url() ?>new/invoice/invoice.js"></script>

</body>

</html>