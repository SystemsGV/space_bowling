<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">


    <!-- Basic Page Needs
  ================================================== -->

    <title><?= $title ?> | Cosmic Bowling</title>
    <meta name="description" content="Cosmic Bowling fue inaugurado el 24 de noviembre de 1998, en el Centro Turístico de Entretenimiento San Miguel | Lima Perú ">
    <meta name="author" content="<?= base_url() ?>">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="<?= base_url() ?>new/css/zerogrid.css">
    <link rel="stylesheet" href="<?= base_url() ?>new/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>new/css/responsive.css">
    <link rel="stylesheet" href="<?= base_url() ?>new/css/responsiveslides.css">
    <link rel="stylesheet" href="<?= base_url() ?>new/css/font-awesome.css">

    <link rel="stylesheet" href="<?= base_url() ?>new/css/bootstrap.min.css">

    <link href='<?= base_url() ?>new/images/favicon.ico' rel='icon' type='image/x-icon' />
    <style>
        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('new/images/logo.png') 50% 50% no-repeat;
            background-image: radial-gradient(circle at -14.09% 79.88%, #ff70fc 0, #ff6bfb 12.5%, #ff66f5 25%, #ea5eea 37.5%, #be55d8 50%, #934bc4 62.5%, #6c42b1 75%, #473ba0 87.5%, #1c3490 100%);
        }

        .img-center {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <input type="hidden" value="<?= $title ?>" id="current-title">
    <div class="loader">
        <img class="img-center" src="new/images/logo.png" alt="">
    </div>

    <!-- Header -->
    <header>

        <div class="wrap-header zerogrid">


            <div class="upper-nav">
                <div class="container">
                    <div class="row" style="justify-content: center;align-items: center;">
                        <div class="col-lg-12">

                            <div id="logo">
                                <center><a href="index.php"><img src="<?= base_url() ?>new/images/logo.png"></a>
                                    <?php if ($img) { ?>
                                        <img src="<?= base_url() ?>img/a1.png" width="100px" height="100px" style="margin-top: 42px;">
                                    <?php } ?>
                                </center>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- <div id="search">
			<div class="button-search"></div>
			<input type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
		</div>-->
        </div>
    </header>

    <nav>
        <div class="wrap-nav zerogrid">
            <div class="menu">
                <ul class="list_header">
                    <li class=""><a href="<?= base_url() ?>">Inicio</a></li>
                    <li class=""><a href="<?= base_url() ?>Quienes-Somos">Quienes Somos</a></li>
                    <li class=""><a href="<?= base_url() ?>Instalaciones">Instalaciones</a></li>
                    <li class=""><a href="<?= base_url() ?>Tarifa">Tarifa</a></li>
                    <li class=""><a href="<?= base_url() ?>Servicios">Servicios</a></li>
                    <li class=""><a href="<?= base_url() ?>Contactenos">Contacto</a></li>
                    <li class=""><a href="<?= base_url() ?>Preguntas-Frecuentes">Preguntas Frecuentes</a></li>
                    <!--	<li><a href="https://sites.google.com/view/protocolobw/inicio">Protocolo De Bioseguridad</a></li>-->
                </ul>
            </div>

            <div class="minimenu">
                <div>Menu</div>
                <select onchange="location=this.value">
                    <option></option>
                    <option value="<?= base_url() ?>">Inicio</option>
                    <option value="<?= base_url() ?>Quienes-Somos">Quienes Somos</option>
                    <option value="<?= base_url() ?>Instalaciones">Instalaciones</option>
                    <option value="<?= base_url() ?>Tarifa">Tarifa</option>
                    <option value="<?= base_url() ?>Servicios">Servicios</option>
                    <option value="<?= base_url() ?>Contactenos">Contacto</option>
                    <option value="<?= base_url(); ?>Preguntas-Frecuentes">Preguntas Frecuentes</option>
                </select>
            </div>
        </div>
    </nav>