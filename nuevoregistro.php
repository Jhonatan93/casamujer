<?php
    session_start();
    require('conexion/conexion.php');
    if(isset($_SESSION['Administrador']))
        $conn = new ConexionBD;
    ?>

<!--<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="CAREFU - MUNICIPALIDAD PROVINCIAL DEL SANTA" name="description" />
    <meta content="JHONATAN CARRILLO AGURTO" name="author" />

    <link rel="icon" type="image/png" href="assets/img/logo_casamujer.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/logo_casamujer.png" sizes="32x32">

    <title> .: CASA REFUGIO DE LA MUJER :. </title>

    <!-- additional styles for plugins -->

      <!-- kendo UI -->
    <link rel="stylesheet" href="bower_components/kendo-ui-core/styles/kendo.common-material.min.css"/>
    <link rel="stylesheet" href="bower_components/kendo-ui-core/styles/kendo.material.min.css"/>
       
        <!-- weather icons -->
        <link rel="stylesheet" href="bower_components/weather-icons/css/weather-icons.min.css" media="all">
        <!-- metrics graphics (charts) -->
        <link rel="stylesheet" href="bower_components/metrics-graphics/dist/metricsgraphics.css">
        <!-- c3.js (charts) -->
        <link rel="stylesheet" href="bower_components/c3js-chart/c3.min.css">
    
    <!-- uikit -->
    <link rel="stylesheet" href="bower_components/uikit/css/uikit.almost-flat.min.css" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="assets/icons/flags/flags.min.css" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="assets/css/main.min.css" media="all">

</head>
<body class="sidebar_main_open">
    <!-- main header -->
    <header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">
                <!-- main sidebar switch -->
                <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                    <span class="sSwitchIcon"></span>
                </a>
                <!-- secondary sidebar switch -->
                <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                    <span class="sSwitchIcon"></span>
                </a>
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav user_actions">
                        <li><a href="#" id="main_search_btn" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE8B6;</i></a></li>
                        
                        
                        <li data-uk-dropdown="{mode:'click'}">
                            <a href="#" class="user_action_image"><img class="md-user-image" src="assets/img/close1.png" alt=""/></a>
                            <div class="uk-dropdown uk-dropdown-small uk-dropdown-flip">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a href="perfil.php">Mi Perfil</a></li>
                                    <!--<li><a href="page_settings.html">Settings</a></li>-->
                                    <li><a href="login.php?logout">Salir</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header_main_search_form">
            <i class="md-icon header_main_search_close material-icons">&#xE5CD;</i>
            <form class="uk-form">
                <input type="text" class="header_main_search_input" />
                <button class="header_main_search_btn uk-button-link"><i class="md-icon material-icons">&#xE8B6;</i></button>
            </form>
        </div>
    </header><!-- main header end -->

<!-- main sidebar -->
    <aside id="sidebar_main">
        <a href="#" class="uk-close sidebar_main_close_button"></a>
        <div class="sidebar_main_header">
            <div class="sidebar_logo"><a href="index.php"><img src="assets/img/caremu.png" alt="" height="200" width="200"/></a></div>
        </div>
        <div class="menu_section">
            <ul>
                <li class="act_section">
                    <a href="index.php">
                        <span class="menu_icon uk-icon-th-large"></span>
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu_icon uk-icon-list-alt"></span>
                        Registro -18
                    </a>
                    <ul>
                        <li><a href="nuevoregistro.php"> Nuevo Registro </a></li>
                        <li><a href="estadia.php"> Estadia </a></li>
                        <li><a href="forms_advanced.html"> Visitas </a></li>
                        <li><a href="forms_file_upload.html"> Psicologia </a></li>
                    </ul>
                </li>
                 <li>
                    <a href="#">
                        <span class="menu_icon uk-icon-list-alt"></span>
                        Registro +18
                    </a>
                    <ul>
                        <li><a href="forms_regular.html"> Nuevo Registro </a></li>
                        <li><a href="forms_regular.html"> Estadia </a></li>
                        <li><a href="forms_advanced.html"> Visitas </a></li>
                        <li><a href="forms_file_upload.html"> Psicologia </a></li>
                        <li><a href="forms_validation.html"> Aseoria Legal </a></li>
                        <li><a href="forms_validation.html"> Terapia </a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="menu_icon uk-icon-newspaper-o"></span>
                        Reportes
                    </a>
                    <ul>
                        <li><a href="components_accordion.html"> Reporte Semanal </a></li>
                        <li><a href="components_buttons.html"> Reporte mensual </a></li>
                    </ul>
                </li>
                 <li>
                    <a href="perfil.php">
                        <span class="menu_icon uk-icon-user"></span>
                        Mi perfil
                    </a>
                </li>
            </ul>
        </div>
    </aside><!-- main sidebar end -->


    <div id="page_content">
        <div id="page_content_inner">
        <br>
        <h4 class="heading_a uk-margin-bottom">Registro de Entrada y Salida </h4>
        <br>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-2">
                            <form id="form_validation" class="uk-form-stacked">
                                <div class="uk_form-row">
                                    <label for="dni"> DNI <span class="req">*</span></label>
                                    <input type="number" minlength="8" maxlength="8" name="dni"  required class="md-input"/> 
                                </div>
                                <br>
                                <div class="uk-form-row">
                                    <label for="fullname"> Nombre Completo <span class="req">*</span></label>
                                    <input type="text" name="fullname" required class="md-input" />
                                </div>
                                <br>
                                <div>
                                <label for="f_nac" class="uk-form-label"> Fecha de Nacimiento </label>
                                <input id="kUI_datepicker_a" value="" />
                                </div>
                                <br>
                                <div class="uk-form-row">
                                    <label for="fullname"> Direccion <span class="req">*</span></label>
                                    <input type="text" name="fullname" required class="md-input" />
                                </div>
                                <br>
                                 <div class="uk_form-row">
                                    <label for="dni"> Telefono <span class="req">*</span></label>
                                    <input type="number" name="telefono"  required class="md-input"/> 
                                </div>
                                <br>
                                <div class="uk-form-row">
                                    <label for="val_select" class="uk-form-label"> Caso </label>
                                    <select id="val_select" required data-md-selectize>
                                        <option value="null"> Elije Caso </option>
                                        <option value="vfisica"> Violencia Fisica </option>
                                        <option value="vpsico"> Violencia Psicologica </option>
                                        <option value="vsex"> Violencia Sexual </option>
                                    </select>
                                </div>
                                <div class="uk-form-row">
                                    <label for="message">Descripcion (20 caracteres min, 100 max)</label>
                                    <textarea class="md-input" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-validation-threshold="10" data-parsley-minlength-message = "Come on! You need to enter at least a 20 caracters long comment.."></textarea>
                                </div>
                                <div class="uk-form-row">
                                    <button type="submit" class="md-btn md-btn-primary"> Guardar </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- google web fonts -->
    <script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- momentJS date library -->
    <script src="bower_components/moment/min/moment.min.js"></script>

    <!-- common functions -->
    <script src="assets/js/common.min.js"></script>
    <!-- uikit functions -->
    <script src="assets/js/uikit_custom.min.js"></script>
    <!-- altair common functions/helpers -->
    <script src="assets/js/altair_admin_common.min.js"></script>

    <!-- page specific plugins -->
    <!-- parsley (validation) -->
    <script>
    // load parsley config (altair_admin_common.js)
    altair_forms.parsley_validation_config();
    </script>
    <script src="bower_components/parsleyjs/dist/parsley.min.js"></script>

    <!--  forms_validation functions -->
    <script src="assets/js/pages/forms_validation.min.js"></script>

       <!-- page specific plugins -->
    <!-- kendo UI -->
    <script src="assets/js/kendoui.custom.min.js"></script>

    <!--  kendoui functions -->
    <script src="assets/js/pages/kendoui.min.js"></script>
    
    
    <!-- enable hires images -->
    <script>
        $(function() {
            altair_helpers.retina_images();
        });
    </script>

</body>
</html>