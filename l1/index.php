<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once('template/head.php')?>
</head>
<body class="bg-general">
    <section class="row col-12 mx-auto bg-general-mobile">
        <div class="col-12 col-md-5 d-mobile">
            <nav class="col-8 mx-auto">
                <img class="mt-4" src="assets/images/logo_mapfre.svg" alt="logo">
            </nav>
            <img class="pos-text d-mobile" src="assets/images/textox2.png" alt="text" width="450">
        </div>
        <div class="col-12 col-md-12 col-lg-7 h-100 d-flex align-items-center mt-20">
            <nav class="col-8 mx-auto text-center mb-4 d-desktop">
                <img class="mt-4" src="assets/images/logo_mapfre.svg" alt="logo">
            </nav>
            <div class="text-center col-12 col-md-8 mx-auto bg-red pt-4 pb-4 brd-rounded">
                <h3 class="c-white f-bold">Ingresa tus datos</h3>
                <form id="form-cotizacion" action="" class="mt-3">
                    <div class="form-group text-center">
                        <input id="nombre" class="col-11 col-md-8 form-control mx-auto form-control-sm validate" type="text" placeholder="Nombre completo*" required>
                        <i class="validNom fa fa-check c-green d-none"></i>
                        <i class="validNom fa fa-times c-red d-none"></i>
                    </div>
                    <div class="form-group text-center">
                        <input id="mail" class="col-11 col-md-8 form-control mx-auto form-control-sm validate" type="mail" placeholder="Correo electrónico*" required>
                        <i class="validMail fa fa-check c-green d-none"></i>
                        <i class="validMail fa fa-times c-red d-none"></i>
                    </div>
                    <div class="form-group text-center">
                        <input id="telefono" class="col-11 col-md-8 form-control mx-auto form-control-sm validate" type="text" placeholder="Teléfono*" maxlength="10" required>
                        <i class="validPhone fa fa-check c-green d-none"></i>
                        <i class="validPhone fa fa-times c-red d-none"></i>
                    </div>
                    <div class="form-group text-center">
                        <input id="marca" class="col-11 col-md-8 form-control mx-auto form-control-sm validate" type="text" placeholder="Marca*" required>
                        <i class="validMarca fa fa-check c-green d-none"></i>
                        <i class="validMarca fa fa-times c-red d-none"></i>
                    </div>
                    <div class="form-group text-center">
                        <input id="anio" class="col-11 col-md-8 form-control mx-auto form-control-sm validate" type="text" placeholder="Año*" maxlength="4" required>
                        <i class="validAnio fa fa-check c-green d-none"></i>
                        <i class="validAnio fa fa-times c-red d-none"></i>
                    </div>
                    <div class="form-group text-center">
                        <div class="custom-control custom-checkbox col-10 col-md-8 mx-auto">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                            <label class="custom-control-label c-white txt-10" for="customCheck1"></label>
                            <div class="" style="position:absolute; top: 0%">
                                <span class="c-white txt-10">He leído y acepto el <a class="c-white" href="https://www.mapfre.com.mx/seguros-mx/particulares/paginas/aviso-de-privacidad.jsp"><u>aviso de privacidad</u></a></span>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="mt-4">
                    <button id="sendData" class="btn btn-dark-gray col-11 col-md-8 f-bold" disabled>Enviar datos</button>
                </div>
                <div class="mt-3">
                    <button id="cotizar" class="btn btn-dark-gray col-11 col-md-8 f-bold" disabled><img src="assets/images/ic_whats.svg" alt="phone" width="15"> Cotizar ahora</button>
                </div>
                <div class="mt-2">
                    <span class="c-white txt-10">* Datos obligatorios</span>
                </div>
            </div>
            <div class="d-desktop ptext text-center">
                <img class="mx-100" src="assets/images/texto.png" alt="texto">
            </div>
        </div>
    </section>
    <script src="assets/js/function.js"></script>
</body>
</html>