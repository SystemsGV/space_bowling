<div class="wrap-footer zerogrid">
    <footer class="footer-distributed">
        <div class="container">
            <div class="row" style="display: block !important;">
                <center>
                    <!-- Left Section: Company Logo -->
                    <div class="col-md-4">
                        <a href="<?= base_url() ?>">
                            <img src="<?= base_url() ?>new/images/logo.png" alt="Company Logo">
                        </a>
                    </div>

                    <!-- Center Section: Contact Information -->
                    <div class="col-md-4">
                        <p><i class="fa fa-map-marker"></i><span> Calle Mantaro 300 San Miguel.</span> Lima, Peru</p>
                        <p><i class="fa fa-envelope"></i><a href="mailto:samy@cosmicbowling.com.pe"> samy@cosmicbowling.com.pe</a></p>
                    </div>

                    <!-- Right Section: Book of Claims and Social Media Icons -->
                    <div class="col-md-4">
                        <a href="<?= base_url() ?>Libro-de-Reclamaciones" target="_blank">
                            <img src="<?= base_url() ?>new/images/libroreclamaciones2.png" alt="Libro de Reclamaciones">
                        </a>
                        <div class="footer-icons">
                            <a href="https://www.facebook.com/cosmicbowling1/" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a target="_parent" href="https://www.instagram.com/cosmic_bowling/" title="Instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </center>
            </div>
            <br>
            <!-- Navigation Links -->
            <div class="row text-center">
                <div class="col-md-12">
                    <a href="<?= base_url() ?>">Inicio</a> |
                    <a href="<?= base_url() ?>Quienes-Somos">Quienes Somos</a> |
                    <a href="<?= base_url() ?>Instalaciones">Instalaciones</a> |
                    <a href="<?= base_url() ?>Servicios">Servicios</a> |
                    <a href="<?= base_url() ?>Promociones">Promociones</a> |
                    <a href="<?= base_url() ?>Protocolos" target="_blank">Protocolos</a> |
                    <a href="http://200.37.146.94/webconsulta/wbfrmConsulta.aspx">Comprobantes Electronicos</a> |
                    <a href="https://www.cosmicbowling.com.pe/cuponera/">Cupones Empresas</a> | <br>
                    <a href="<?= base_url() ?>Guia-de-Seguridad" target="_blank">Guias de Seguridad</a>
                </div>
            </div>
            <br>
            <!-- Company Name and Copyright -->
            <div class="row text-center">
                <div class="col-md-12">
                    <p class="footer-company-name">Cosmic Bowling &copy; 2018</p>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Your customer chat code -->
<div class="fb-customerchat" attribution=setup_tool page_id="116599888374178" logged_in_greeting="Hola! En que podemos ayudarte?" logged_out_greeting="Hola! En que podemos ayudarte?">
</div>

</div>
<!-- *************** *****   ***   ESTRUCTURA DE CAPACITACIONES   ***   ***** ************* -->
<script src="<?= base_url() ?>new/js/validacion.js"></script>
<script src="<?= base_url() ?>new/js/jquery.min.js"></script>
<script src="<?= base_url() ?>new/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>new/js/jquery.js"></script>
<script src="<?= base_url() ?>new/js/responsiveslides.js"></script>
<script>
    $(function() {
        let page = $("#current-title").val();
        let lis = document.querySelector('.list_header').getElementsByTagName('li');

        [].forEach.call(lis, element => {
            element.addEventListener('mouseover', () => {
                if (page == element.innerText) {
                    element.classList.add('current');
                }
                console.log(element.innerText)
            });
        });
        $(window).load(function() {
            $(".loader").fadeOut("slow");
        });

        $("#slider").responsiveSlides({
            auto: true,
            pager: false,
            nav: true,
            speed: 500,
            /*maxwidth: 100,*/
            namespace: "centered-btns"
        });

    });

    const items = document.querySelectorAll(".accordion button");

    function toggleAccordion() {
        const itemToggle = this.getAttribute('aria-expanded');

        for (i = 0; i < items.length; i++) {
            items[i].setAttribute('aria-expanded', 'false');
        }

        if (itemToggle == 'false') {
            this.setAttribute('aria-expanded', 'true');
        }
    }

    items.forEach(item => item.addEventListener('click', toggleAccordion));
</script>

<style type="text/css">
    .list-inline {
        padding-left: 0;
        margin-left: -5px;
        list-style: none;
    }
</style>
</body>

</html>