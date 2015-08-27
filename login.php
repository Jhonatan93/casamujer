<?php
    session_start();
    if(isset($_GET['logout'])){
        session_destroy();
    }
    if(isset($_SESSION['Administrador'])){
        header("Location: index.php" );
        }
?>

<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" type="image/png" href="assets/img/logo_casamujer.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/logo_casamujer.png" sizes="32x32">

    <title> .: CASA REFUGIO DE LA MUJER :. </title>

    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>

    <!-- uikit -->
    <link rel="stylesheet" href="bower_components/uikit/css/uikit.almost-flat.min.css"/>

    <!-- altair admin login page -->
    <link rel="stylesheet" href="assets/css/login_page.min.css" />

</head>
<body class="login_page">

    <div class="login_page_wrapper">
        <div class="md-card" id="login_card">
            <div class="md-card-content large-padding" id="login_form">
                <div class="login_heading">
                    <div class="login"><img src="assets/img/casamujer.png">&nbsp;</div>
                </div>
                <form role="form" class="form-horizontal" action="validacion/validacion.php" method="post">
                    <input type="hidden" name="Administrador" value="S">
                    <?php
                        if(isset($_GET['errn']) && !isset($_GET['errb']) && !isset($_GET['erri'])){
                    ?>
                    <div class="alert alert-danger" id="e1">
                        <i class="icon-remove-sign"></i> Usuario no existe.
                    </div>
                    <?php
                        }else if(!isset($_GET['errn']) && !isset($_GET['errb']) && isset($_GET['erri'])){
                    ?>
                    <div class="alert alert-danger" id="e2">
                        <i class="icon-remove-sign"></i> Usuario y/o password erroneo.
                    </div>
                    <?php
                        }
                    ?>
                    <div class="uk-form-row">
                <p align="center">
                    Ingrese correctamente su nombre de usuario y contraseña. 
                </p>
                        <label for="login_username">Usuario</label>
                        <input class="md-input" type="text" id="login_username" name="usuario" />
                    </div>
                    <div class="uk-form-row">
                        <label for="login_username">Contraseña</label>
                        <input class="md-input" type="password" id="login_username" name="contrasenia" />
                    </div>
                    <div class="uk-margin-medium-top">
                    <a href="index.php">
                        <button name="Entrar" type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large">Ingresar</button>
                    </div>
                    <div class="uk-margin-top">
                        <span class="icheck-inline">
                            <input type="checkbox" name="login_page_stay_signed" id="login_page_stay_signed" data-md-icheck />
                            <label for="login_page_stay_signed" class="inline-label">Recordar Ingreso</label>
                        </span>
                    </div>
                </form>
            </div>
            <div class="md-card-content large-padding uk-position-relative" id="login_help" style="display: none">
                <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top" id="login_help_close"></button>
                <h2 class="heading_b uk-text-success">No puedes Ingresar?</h2>
                <p>Asegurese que el Usuario y Contraseña estén correctamente escritos.</p>
                <p>Si su contraseña sigue fallando, es hora de <a href="#" id="login_password_reset_show">Reestablecer su Contraseña</a>.</p>
            </div>
            <div class="md-card-content large-padding" id="login_password_reset" style="display: none">
                <h2 class="heading_a uk-margin-large-bottom">Reestablecer Contraseña</h2>
                <form action="">
                    <div class="uk-form-row">
                        <label for="login_email_reset">Ingrese Correo Electronico</label>
                        <input class="md-input" type="text" id="login_email_reset" name="login_email_reset" />
                    </div>
                    <div class="uk-margin-medium-top">
                        <button class="md-btn md-btn-primary md-btn-block">Listo para reestablecer</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="uk-margin-top">
            <a href="#" id="login_help_show"> Necesita Ayuda? </a>
        </div>
    </div>

    <!-- common functions -->
    <script src="assets/js/common.min.js"></script>
    <!-- altair core functions -->
    <script src="assets/js/altair_admin_common.min.js"></script>

    <!-- altair login page functions -->
    <script src="assets/js/pages/login_page.min.js"></script>

</body>
</html>