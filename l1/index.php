<!DOCTYPE html>
<html lang="es">

<head>
    <?php include_once('template/head.php')?>
</head>

<body class="bg-general">
    <div class="padding_center_main_content">
        <div class="d-flex-unity">
            <div class="text_info_wrapper">
                <img class="" src="assets/images/logo_mapfre.svg" alt="logo">
                <div class="text_par">
                    <h1 class="d-mobile c-white txt-title f-bold">¡Cotiza tu auto y <br> contrata hoy!</h1>
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
                <form id="form-cotizacion" action="">
                    <h3 class="c-white f-bold m-0">Ingresa tus datos</h3>
                    <span class="c-white txt-10 span_data">* Datos obligatorios</span>
                    <div class="form-group text-center">
                        <input id="nombre" class="form-control validate" type="text" placeholder="Nombre completo*"
                            required>
                        <i class="validNom fa fa-check c-green pos-validate d-none"></i>
                        <i class="validNom fa fa-times c-red pos-validate d-none"></i>
                    </div>
                    <div class="form-group text-center">
                        <input id="codigo" class="form-control validate" type="text" placeholder="Código Postal*"
                            maxlength="6" required>
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
                        <input id="mail" class="form-control validate" type="mail" placeholder="Correo electrónico*"
                            required>
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
                        <input id="marca" class="form-control validate" type="text" placeholder="Marca*" required>
                        <i class="validMarca fa fa-check c-green pos-validate d-none"></i>
                        <i class="validMarca fa fa-times c-red pos-validate d-none"></i>
                    </div>
                    <div class="form-group text-center">
                        <input id="modelo" class="form-control validate" type="text" placeholder="Modelo*" required>
                        <i class="validMarca fa fa-check c-green pos-validate d-none"></i>
                        <i class="validMarca fa fa-times c-red pos-validate d-none"></i>
                    </div>
                    <div class="form-group text-center">
                        <input id="anio" class="form-control validate" type="text" placeholder="Año*" maxlength="4"
                            required>
                        <i class="validAnio fa fa-check c-green pos-validate d-none"></i>
                        <i class="validAnio fa fa-times c-red pos-validate d-none"></i>
                    </div>
                  
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked>
                        <label class="form-check-label c-white txt-10" for="inlineCheckbox1">He leído y acepto el  <a class="c-white"
                                        href="https://www.mapfre.com.mx/seguros-mx/particulares/paginas/aviso-de-privacidad.jsp"><u>aviso
                                            de privacidad</u></a></label>
                    </div>
                    <button id="sendData" type="button" class="btn btn-dark-gray f-bold" disabled>¡Quiero cotizar!</button>




                </form>
            </div>
        </div>
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