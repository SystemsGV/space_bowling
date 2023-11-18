<style>
    a {
        color: #B607BE;
        text-decoration: underline;
    }

    .accordion .accordion-item {
        border-bottom: 1px solid #e5e5e5;
    }

    .accordion .accordion-item button[aria-expanded='true'] {
        border-bottom: 1px solid #B607BE;
    }

    .accordion button {
        position: relative;
        display: block;
        text-align: left;
        width: 100%;
        padding: 1em 0;
        color: #CDD5DE;
        font-size: 2rem;
        font-weight: 600;
        border: none;
        background: none;
        outline: none;
    }

    .accordion button:hover,
    .accordion button:focus {
        cursor: pointer;
        color: #B607BE;
    }

    .accordion button:hover::after,
    .accordion button:focus::after {
        cursor: pointer;
        color: #B607BE;
        border: 1px solid #B607BE;
    }

    .accordion button .accordion-title {
        padding: 1em 1.5em 1em 0;
    }

    .accordion button .icon {
        display: inline-block;
        position: absolute;
        top: 18px;
        right: 0;
        width: 22px;
        height: 22px;
        border: 1px solid;
        border-radius: 22px;
    }

    .accordion button .icon::before {
        display: block;
        position: absolute;
        content: '';
        top: 9px;
        left: 5px;
        width: 10px;
        height: 2px;
        background: currentColor;
    }

    .accordion button .icon::after {
        display: block;
        position: absolute;
        content: '';
        top: 5px;
        left: 9px;
        width: 2px;
        height: 10px;
        background: currentColor;
    }

    .accordion button[aria-expanded='true'] {
        color: #B607BE;
    }

    .accordion button[aria-expanded='true'] .icon::after {
        width: 0;
    }

    .accordion button[aria-expanded='true']+.accordion-content {
        opacity: 1;
        max-height: 20em;
        transition: all 200ms linear;
        will-change: opacity, max-height;
    }

    .accordion .accordion-content {
        opacity: 0;
        max-height: 0;
        overflow: hidden;
        transition: opacity 200ms linear, max-height 200ms linear;
        will-change: opacity, max-height;
    }

    .accordion .accordion-content p {
        font-size: 2rem;
        font-weight: 300;
        margin: 2em 0;
    }
</style>

<!--Content-->
<section id="content">
    <div class="wrap-content zerogrid">
        <div class="row block02" style="display: block !important;">
            <!--<div class="col-2-3">-->
            <div class="wrap-col">
                <!--<div class="heading"><img src="new/iconos/bienvenidos.png" width="1138"/></div> -->
                <article class="row">
                    <div class="col-lg-12" style="background:rgba(130,128,128,0.17); ">
                        <div class="nav nav-tabs text-center">
                            <h1>PREGUNTAS FRECUENTES</h1>
                        </div>

                        <div class="tab-content" style="padding: 10px;">
                            <div id="pistas" class="tab-pane fade in active">
                                <div class="accordion">
                                    <div class="accordion-item">
                                        <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">¿Cuáles son las tarifas?</span><span class="icon" aria-hidden="true"></span></button>
                                        <div class="accordion-content">
                                            <p>Las tarifas podrás encontrarlas <a href="<?= base_url() ?>Tarifa" target="_blank">aquí</a></p>
                                        </div>
                                    </div>
                                    <div class=" accordion-item">
                                        <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">¿Dónde están ubicados?</span><span class="icon" aria-hidden="true"></span></button>
                                        <div class="accordion-content">
                                            <p>Estamos en Calle Mantaro 300 - San Miguel. En el centro comercial Plaza San Miguel. Referencia: al costado de Cineplanet, alfrente de Bembos.</p>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">¿Tienen estacionamiento?</span><span class="icon" aria-hidden="true"></span></button>
                                        <div class="accordion-content">
                                            <p>Si, puedes estacionar en Plaza San Miguel, por la entrada de Rivaguero 😊. </p>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">¿Se hace reservas para asistir a sus instalaciones? </span><span class="icon" aria-hidden="true"></span></button>
                                        <div class="accordion-content">
                                            <p>Nuestra atención es por orden de llegada. Solo reservamos en cumpleaños o eventos corporativos (pre-venta).</p>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">¿Es obligatorio alquiler los zapatos?</span><span class="icon" aria-hidden="true"></span></button>
                                        <div class="accordion-content">
                                            <p>Los zapatos de bowling están diseñados para permitir un mejor lanzamiento por su efecto antideslizante, lo que te brinda la posición ideal. Ademas, por seguridad, es necesario utilizarlos para que no te resbales 😊.</p>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">¿Por qué es importante el uso de medias largas de algodón?</span><span class="icon" aria-hidden="true"></span></button>
                                        <div class="accordion-content">
                                            <p>Porque absorben el sudor mientras juegas. Esto garantiza una mayor protección, higiene y seguridad. </p>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">¿Desde qué edad se puede ingresar?</span><span class="icon" aria-hidden="true"></span></button>
                                        <div class="accordion-content">
                                            <p>No trabajamos por edades sino por la talla de calzado. La talla mínima es la 27. Si al niñ@ no le queda el calzado, por seguridad, no podrá ingresar a la zona de jugadores, ya que dentro del área podría lastimarse al resbalarse por el piso aceitado o golpearse con alguno de los bolos. Los zapatos antideslizantes son indispensables para ingresar al área. </p>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">¿Puedo llevar alimentos o bebidas?</span><span class="icon" aria-hidden="true"></span></button>
                                        <div class="accordion-content">
                                            <p>Por seguridad, no está permitido el ingreso de alimentos ni bebidas. El Bowling se responsabiliza de los productos alimenticios que elaboramos y ofrecemos en nuestras instalaciones, mas no de los alimentos que vienen de afuera, donde no conocemos su preparación ni preservación.</p>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">¿El costo es por persona?</span><span class="icon" aria-hidden="true"></span></button>
                                        <div class="accordion-content">
                                            <p>El costo no es personal, es el alquiler de la pista, donde pueden ingresar hasta 5 personas.</p>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">¿Cuál es la talla mínima y máxima de calzado?</span><span class="icon" aria-hidden="true"></span></button>
                                        <div class="accordion-content">
                                            <p> La talla mínima es la 27 y la talla máxima es 48</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
</section>