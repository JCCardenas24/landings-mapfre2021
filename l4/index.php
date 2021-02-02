<!DOCTYPE html>
<html lang="es">

<head>
    <?php include_once('template/head.php')?>
</head>

<body class="">
    <div class="container-fluid noPadd">
        <section class="fst_block">
            <img class="w-100 elm_desktop" src="assets/images/bg_1_desktop@2x.png" alt="">
            <img class="elm_mobile w-100" src="assets/images/fst_img_mobile.png" alt="">
            <div class="form_text_wrapper">
                <div class="logo_text">
                    <img class="logo_img" src="assets/images/Logo.svg" alt="">

                    <div class="texts_wrapper">
                        <p class="big_txt">Siéntete bien por <br> ahorrar en tu seguro <br> de auto</p>
                        <!-- <ul>
                            <li>Paga tu póliza con 6 ó 12 MSI</li>
                            <li>Recibe tu póliza de forma segura</li>
                            <li>Fácil y seguro</li>
                        </ul> -->
                        <div class="row mx-auto mt-4">
                            <div><span class="c-white txt-20"><i class="fa fa-circle txt-10 mr-2"></i>Paga tu póliza con
                                    6 ó 12 MSI</span></div>
                            <div><span class="c-white txt-20 ml-3"><i class="fa fa-circle txt-10 mr-2"></i>Recibe tu
                                    póliza de forma segura</span></div>
                                    <div><span class="c-white txt-20 ml-3"><i class="fa fa-circle txt-10 mr-2"></i>Fácil y seguro</span></div>
                        </div>
                    </div>
                </div>
                <div class="form_wrapper">
                    <div class="triangle_wrapper">
                        <form id="form-cotizacion" action="">
                            <h3 class="c-white f-bold m-0">Ingresa tus datos</h3>
                            <span class="c-white txt-10 span_data">* Datos obligatorios</span>
                            <div class="form-group text-center">
                                <input id="nombre" class="form-control validate" type="text"
                                    placeholder="Nombre completo*" required>
                                <i class="validNom fa fa-check c-green pos-validate d-none"></i>
                                <i class="validNom fa fa-times c-red pos-validate d-none"></i>
                            </div>
                            <div class="form-group text-center">
                                <input id="codigo" class="form-control validate" type="text"
                                    placeholder="Código Postal*" maxlength="6" required>
                                <i class="validCodigo fa fa-check c-green pos-validate d-none"></i>
                                <i class="validCodigo fa fa-times c-red pos-validate d-none"></i>
                            </div>
                            <div class="form-group text-center">
                                <select class="form-control validate" id="sexoSelect" required>
                                    <option disabled selected value="">Sexo*</option>
                                    <option value="0">Femenino</option>
                                    <option value="0">Masculino </option>
                                </select>
                                <i class="fa fa-check c-green pos-validate d-none"></i>
                                <i class="fa fa-times c-red pos-validate d-none"></i>
                            </div>
                            <div class="form-group text-center">
                                <input type="text" class="form-control validate" name="birthday"
                                    placeholder="Fecha de nacimiento*" />
                            </div>
                            <div class="form-group text-center">
                                <input id="mail" class="form-control validate" type="mail"
                                    placeholder="Correo electrónico*" required>
                                <i class="validMail fa fa-check c-green pos-validate d-none"></i>
                                <i class="validMail fa fa-times c-red pos-validate d-none"></i>
                            </div>
                            <div class="form-group text-center">
                                <input id="telefono" class="form-control validate" type="text" placeholder="Teléfono*"
                                    maxlength="10" required>
                                <i class="validPhone fa fa-check c-green pos-validate d-none"></i>
                                <i class="validPhone fa fa-times c-red pos-validate d-none"></i>
                            </div>
                            <div class="form-group text-center">
                                <input id="marca" class="form-control validate" type="text" placeholder="Marca*"
                                    required>
                                <i class="validMarca fa fa-check c-green pos-validate d-none"></i>
                                <i class="validMarca fa fa-times c-red pos-validate d-none"></i>
                            </div>
                            <div class="form-group text-center">
                                <input id="modelo" class="form-control validate" type="text" placeholder="Modelo*"
                                    required>
                                <i class="validMarca fa fa-check c-green pos-validate d-none"></i>
                                <i class="validMarca fa fa-times c-red pos-validate d-none"></i>
                            </div>
                            <div class="form-group text-center">
                                <input id="anio" class="form-control validate" type="text" placeholder="Año*"
                                    maxlength="4" required>
                                <i class="validAnio fa fa-check c-green pos-validate d-none"></i>
                                <i class="validAnio fa fa-times c-red pos-validate d-none"></i>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"
                                    checked>
                                <label class="form-check-label c-white txt-10" for="inlineCheckbox1">He leído y acepto
                                    el <a class="c-white"
                                        href="https://www.mapfre.com.mx/seguros-mx/particulares/paginas/aviso-de-privacidad.jsp"><u>aviso
                                            de privacidad</u></a></label>
                            </div>
                            <button id="sendData" type="button" class="btn btn-dark-gray f-bold form_btn"
                                disabled>¡Quiero
                                cotizar!</button>
                        </form>
                        <div class="triangle"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="snd_block w-80">
            <div class="row magin_lr0">
                <div class="col-sm-12 col-md-6">
                    <img class="w-100" src="assets/images/row_img1.png" alt="">
                </div>
                <div class="col-sm-12 col-md-6 d-flex-jcac">
                    <div class="txt_wrapper">
                        <h4>Protege tu auto, y siéntete tranquilo con seguros de auto MAPFRE</h4>
                        <p>Uno de nuestros principales objetivos, además del de ofrecer productos de calidad, es el de
                            proporcionar Servicios de calidad. Nuestro esfuerzo se centra en dar una solución rápida,
                            sencilla y cómoda a cualquier tipo de duda o consulta que requiera una atención por nuestra
                            parte.</p>
                        <p>En <span>MAPFRE</span> te ofrecemos una variedad de Seguros de Autos entre los que puedes
                            elegir dependiendo tus necesidades particulares. Con los paquetes Responsabilidad Civil,
                            Limitado, Tú Eliges, Amplio MAPFRE y Amplio Premium, podrás contratar desde una cobertura
                            básica hasta paquetes más extensos.</p>
                    </div>
                </div>
            </div>
            <div class="row magin_lr0">
                <div class="col-sm-12 col-md-6 d-flex-jcac">
                    <div class="txt_wrapper">
                        <h4>¡Cotiza y contrata de forma rápida y segura!</h4>
                        <p>
                            <span>MAPFRE</span> seguros de auto te ofrece diferentes planes diseñados para aquellos que
                            quieren estar cubiertos en caso de causar daños a otras personas, les preocupa que les roben
                            su auto y contar con seguro diseñado para que
                            puedas construir un paquete acorde a tus necesidades.

                        </p>
                        <p>Puedes cotizar tu seguro de auto de forma muy sencilla en tan solo 10 segundos.</p>
                    </div>

                </div>
                <div class="col-sm-12 col-md-6 d-flex-jcac">
                    <img class="w-100" src="assets/images/row_img2.png" alt="">
                </div>
            </div>
        </section>
        <section class="trt_block w-100">
            <div>
                <p>Puedes cotizar tu seguro de auto de forma muy sencilla en tan solo 10 segundos.</p>
                <a id="" type="" class="btn btn-dark-gray f-bold go_form">
                    ¡Quiero cotizar!
                </a>
            </div>
        </section>
        <?php include_once('template/footer.php')?>
    </div>
    <script>
        $(function () {
            $('input[name="birthday"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                maxYear: parseInt(moment().format('YYYY'), 10)
            }, function (start, end, label) {});
        });
    </script>
    <script src="assets/js/function.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
</body>

</html>