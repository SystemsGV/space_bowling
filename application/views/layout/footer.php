<!-- Footer -->
<div class="wrap-footer zerogrid">
    <footer class="footer-distributed">

        <div class="footer-left">
            <!--LOGO DE EMPRESA-->
            <div class="col-4-4">
                <div class="wrap-col">
                    <div class="box">
                        <div class="content">
                            <div id="logo"><a href="<?= base_url() ?>"><img src="<?= base_url() ?>new/images/logo.png"></a></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="footer-links" align="center">
                <a href="<?= base_url() ?>">Inicio</a>
                .
                <a href="<?= base_url() ?>Quienes-Somos">Quienes Somos</a>
                .
                <a href="<?= base_url() ?>Instalaciones">Instalaciones</a>
                .
                <a href="<?= base_url() ?>Servicios">Servicios</a>
                .
                <a href="<?= base_url() ?>Promociones">Promociones</a>
                .
                <a href="<?= base_url() ?>Protocolos" target="_blank">Protocolos</a>
                .
                <a href="http://200.37.146.94/webconsulta/wbfrmConsulta.aspx">Comprobantes Electronicos</a>
                .
                <a href="https://www.cosmicbowling.com.pe/cuponera/">Cupones Empresas</a>
                .
                <a href="<?= base_url() ?>Guia-de-Seguridad" target="_blank">Guias de Seguridad</a>
            </div>

            <p class="footer-company-name" align="center">Cosmic Bowling &copy; 2018</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Calle Mantaro 300 San Miguel.</span>Lima, Peru</p>

            </div>

            <!--<div>
					<i class="fa fa-phone"></i>
					<p>+1 555 123456</p>
				</div>-->

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:samy@cosmicbowling.com.pe">samy@cosmicbowling.com.pe</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
            <div id="logo" align="center"><a href="<?= base_url() ?>Libro-de-Reclamaciones" target="_blank"><img src="<?= base_url() ?>new/images/libroreclamaciones2.png"></a></div>
            </p>

            <div class="footer-icons" align="center">

                <a href="https://www.facebook.com/cosmicbowling1/" title="Facebook"><i class="fa fa-facebook"></i></a>
                <!--<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-youtube"></i></a>-->
                <a target="_parent" href="https://www.instagram.com/cosmic_bowling/" title="Intagram"><i class="fa fa-instagram"></i></a>

            </div>

        </div>

    </footer>
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
              if(page == element.innerText){
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