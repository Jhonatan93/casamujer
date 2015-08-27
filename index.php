<?php
    session_start();
    require('conexion/conexion.php');
    if(isset($_SESSION['Administrador'])){
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
                            <a href="#" class="user_action_image"><img class="md-user-image" style=" width="35px" height="35px" " src="assets/img/salir.png" alt=""/></a>
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
                <li class="act_section">
                    <a href="reportes.php">
                        <span class="menu_icon uk-icon-th-large"></span>
                        Reportes
                    </a>
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
            <h4 class="heading_a uk-margin-bottom">Registros Realizados</h4>
            <br>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <table id="dt_colVis" class="uk-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>DNI</th>
                            <th>NOMBRE</th>
                            <th>ASUNTO</th>
                            <th>EDAD</th>
                            <th>INGRESO</th>
                            <th>SALIDA</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                            <td>$372,000</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>2012/08/06</td>
                            <td>$137,500</td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                            <td>2010/10/14</td>
                            <td>$327,900</td>
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>
                            <td>2009/09/15</td>
                            <td>$205,500</td>
                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>23</td>
                            <td>2008/12/13</td>
                            <td>$103,600</td>
                        </tr>
                         </tbody>
                    </table>
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
    <!-- datatables -->
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <!-- datatables colVis-->
    <script src="bower_components/datatables-colvis/js/dataTables.colVis.js"></script>
    <!-- datatables tableTools-->
    <script src="bower_components/datatables-tabletools/js/dataTables.tableTools.js"></script>
    <!-- datatables custom integration -->
    <script src="assets/js/custom/datatables_uikit.min.js"></script>

    <!--  datatables functions -->
    <script src="assets/js/pages/plugins_datatables.min.js"></script>
    
    <!-- enable hires images -->
    <script>
        $(function() {
            altair_helpers.retina_images();
        });
    </script>

</body>
</html>
<?php
}
    else{
        header('Location: login.php');
    }
?>