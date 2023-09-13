<div class="container" style="background-color: #333; margin-top: 10px; margin-bottom: 10px">
    <div class="row">
        <div class="col-md-12">
            <h1>CONTÁCTENOS</h1>
            <p>Sus opiniones, comentarios y sugerencias son bienvenidos, utilice el formulario para enviarnos un mensaje. Procuraremos responderle a la brevedad.</p>
        </div>
    </div>

    <div class="row" style="margin-top: 10px">
        <div class="col-md-8">
            <div class="well well-sm">
                <form method="post" action="<?= base_url() ?>correo-contactanos">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nombres y Apellidos</label>
                                <input type="text" class="form-control" name="name" placeholder="Ingrese Nombre y Apellidos" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email">Dirección Correo</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                    <input type="email" class="form-control" name="email" placeholder="Ingrese correo electronico" required="required" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="number" class="form-control" name="telefono" placeholder="N° Telefono" required="required" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Mensaje</label>
                                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required placeholder="Mensaje"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="g-recaptcha" style="transform: scale(0.84);
                        transform-origin: 0 0;" data-sitekey="6LceGcAUAAAAALcSVRZlYbpXQrtLRB9pTgfHtTRq"></div>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right" name="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
                <legend>Cosmic Bowling</legend>
                <address>
                    <strong></strong><br>
                    Calle Mantaro 300 San Miguel<br>
                    <br>
                    <!-- <abbr title="Telefono">
                Teléfono:</abbr> 7110140-->
                </address>
                <address>
                    <strong>CORREO</strong><br>
                    <a href="mailto:#" style="color: rgba(178, 150, 216, 0.69)">samy@cosmicbowling.com.pe</a>
                </address>
                <address>
                    <strong>TELEFONOS</strong><br>
                    <a href="tel:#" style="color: rgba(178, 150, 216, 0.69)">995 953 955</a>
                </address>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1950.7636470679172!2d-77.08479464195203!3d-12.07601099786197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c96d928dc3f3%3A0x86aeaba7516e1285!2sCalle+Mantaro+300%2C+San+Miguel+15088!5e0!3m2!1ses!2spe!4v1533250999693" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>&nbsp;</p>
        </div>
    </div>
</div>