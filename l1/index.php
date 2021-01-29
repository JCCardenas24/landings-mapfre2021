<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once('template/head.php')?>
</head>
<body class="bg-general">
    <section class="row col-12 mx-auto bg-general-mobile">
        <div class="col-12 col-md-6 d-mobile">
            <nav class="col-12 mx-auto">
                <img class="mt-4" src="assets/images/logo_mapfre.svg" alt="logo">
            </nav>
            <div class="w-100 pos-text">
                <h1 class="d-mobile c-white txt-title f-bold">¡Cotiza tu auto <br> y contrata hoy!</h1>
                <div class="row mx-auto mt-5 pb-4">
                    <div><span class="c-white txt-20"><i class="fa fa-circle txt-10 mr-2"></i>Paga tu póliza con 6 ó 12 MSI</span></div>
                    <div><span class="c-white txt-20 ml-3"><i class="fa fa-circle txt-10 mr-2"></i>Recibe tu póliza de forma segura</span></div>
                    <div><span class="c-white txt-20 ml-3"><i class="fa fa-circle txt-10 mr-2"></i>Fácil y seguro</span></div>
                </div>
            </div>
        </div>
        <div class="col-12 d-desktop">
            <nav class="mb-4">
                <img class="mt-4" src="assets/images/logo_mapfre.svg" alt="logo">
            </nav>
            <div class="w-100 text-center mt-200">
                <h1 class="c-white txt-40 f-bold">¡Cotiza tu auto <br> y contrata hoy!</h1>
                <div class="row mx-auto col-11 mt-4 pb-4 text-center">
                    <div class="col-12"><p class="c-white txt-15 m-0 c-gray">Paga tu póliza con 6 ó 12 MSI</p></div>
                    <div class="col-12"><p class="c-white txt-15 m-0 c-gray">Recibe tu póliza de forma segura</p></div>
                    <div class="col-12"><p class="c-white txt-15 m-0 c-gray">Fácil y seguro</p></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-6 h-100 d-flex align-items-center mt-20">
            <div class="text-center col-12 col-md-8 mx-auto bg-red pt-4 pb-4 brd-rounded">
                <h3 class="c-white f-bold">Ingresa tus datos</h3>
                <form id="form-cotizacion" action="" class="mt-3 col-12 mx-auto">
                    <div class="form-group text-center">
                        <input id="nombre" class="col-11 col-md-8 form-control mx-auto form-control-sm validate" type="text" placeholder="Nombre completo*" required>
                        <i class="validNom fa fa-check c-green pos-validate d-none"></i>
                        <i class="validNom fa fa-times c-red pos-validate d-none"></i>
                    </div>
                    <div class="form-group text-center">
                        <input id="codigo" class="col-11 col-md-8 form-control mx-auto form-control-sm validate" type="text" placeholder="Código Postal*" maxlength="6" required>
                        <i class="validCodigo fa fa-check c-green pos-validate d-none"></i>
                        <i class="validCodigo fa fa-times c-red pos-validate d-none"></i>
                    </div>
                    <div class="form-group text-center">
                        <select class="form-control col-11 col-md-8 mx-auto form-control-sm" id="sexoSelect">
                            <option selected>Sexo*</option>
                            <option value="0">Femenino</option>
                            <option value="0">Masculino</option>
                        </select>
                        <i class="fa fa-check c-green pos-validate d-none"></i>
                        <i class="fa fa-times c-red pos-validate d-none"></i>
                    </div>
                    <div class="form-group text-center">
                        <input type="text" class="col-11 col-md-8 form-control mx-auto form-control-sm" name="birthday" value="10/24/1984" />
                    </div>
                    <div class="form-group text-center">
                        <input id="mail" class="col-11 col-md-8 form-control mx-auto form-control-sm validate" type="mail" placeholder="Correo electrónico*" required>
                        <i class="validMail fa fa-check c-green pos-validate d-none"></i>
                        <i class="validMail fa fa-times c-red pos-validate d-none"></i>
                    </div>
                    <div class="form-group text-center">
                        <input id="telefono" class="col-11 col-md-8 form-control mx-auto form-control-sm validate" type="text" placeholder="Teléfono*" maxlength="10" required>
                        <i class="validPhone fa fa-check c-green pos-validate d-none"></i>
                        <i class="validPhone fa fa-times c-red pos-validate d-none"></i>
                    </div>
                    <div class="form-group text-center">
                        <input id="marca" class="col-11 col-md-8 form-control mx-auto form-control-sm validate" type="text" placeholder="Marca*" required>
                        <i class="validMarca fa fa-check c-green pos-validate d-none"></i>
                        <i class="validMarca fa fa-times c-red pos-validate d-none"></i>
                    </div>
                    <div class="form-group text-center">
                        <input id="anio" class="col-11 col-md-8 form-control mx-auto form-control-sm validate" type="text" placeholder="Año*" maxlength="4" required>
                        <i class="validAnio fa fa-check c-green pos-validate d-none"></i>
                        <i class="validAnio fa fa-times c-red pos-validate d-none"></i>
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
                    <div class="mt-4">
                        <button id="sendData" type="button" class="btn btn-dark-gray col-11 col-md-8 f-bold" disabled>¡Quiero cotizar!</button>
                    </div>
                    <div class="mt-2">
                        <span class="c-white txt-10">* Datos obligatorios</span>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script>
        $(function() {
            $('input[name="birthday"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                maxYear: parseInt(moment().format('YYYY'),10)
            }, function(start, end, label) {
            });
        });
    </script>
    <script src="assets/js/function.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
</body>
</html>