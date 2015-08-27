<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">

    <title>Altair Admin v1.0.0</title>

    <!-- additional styles for plugins -->
    <!-- kendo UI -->
    <link rel="stylesheet" href="bower_components/kendo-ui-core/styles/kendo.common-material.min.css"/>
    <link rel="stylesheet" href="bower_components/kendo-ui-core/styles/kendo.material.min.css"/>
    
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
                        <li data-uk-dropdown="{mode:'click'}" class="uk-hidden-small">
                            <a href="#" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE0BE;</i><span class="uk-badge">12</span></a>
                            <div class="uk-dropdown uk-dropdown-xlarge uk-dropdown-flip uk-dropdown-scrollable">
                                <ul class="md-list md-list-addon">
                                    <li>
                                        <div class="md-list-addon-element">
                                            <span class="md-user-letters md-bg-cyan">ej</span>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html">Ut est facilis.</a></span>
                                            <span class="uk-text-small uk-text-muted">Non id earum ut aspernatur magni itaque et.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_07_tn.png" alt=""/>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html">Nobis facere.</a></span>
                                            <span class="uk-text-small uk-text-muted">Esse officiis fuga maiores iusto dolor in et rerum sed est.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <span class="md-user-letters md-bg-light-green">cu</span>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html">At modi amet.</a></span>
                                            <span class="uk-text-small uk-text-muted">Necessitatibus rerum nisi fuga inventore et voluptatum reiciendis dolor.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html">Occaecati ipsum.</a></span>
                                            <span class="uk-text-small uk-text-muted">Atque tempora minus eum quae reprehenderit earum.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_09_tn.png" alt=""/>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html">Quia voluptatem consequatur.</a></span>
                                            <span class="uk-text-small uk-text-muted">Nemo et in explicabo et libero consequuntur consectetur fugit voluptatum.</span>
                                        </div>
                                    </li>
                                </ul>
                                <a href="page_mailbox.html" class="md-btn md-btn-flat md-btn-flat-primary md-btn-block js-uk-prevent uk-margin-small-top">Show All</a>
                            </div>
                        </li>
                        <li data-uk-dropdown="{mode:'click'}">
                            <a href="#" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE7F4;</i><span class="uk-badge">4</span></a>
                            <div class="uk-dropdown uk-dropdown-xlarge uk-dropdown-flip uk-dropdown-scrollable">
                                <ul class="md-list md-list-addon">
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons uk-text-warning">&#xE8B2;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">Natus odit maxime.</span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate">Ea voluptas ullam sint sed molestias quos.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons uk-text-success">&#xE88F;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">Atque libero neque.</span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate">Expedita aut odio molestias autem.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons uk-text-danger">&#xE001;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">Totam nisi.</span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate">Voluptatem sunt aut porro eius.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons uk-text-primary">&#xE8FD;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">Eos tenetur.</span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate">Ipsa deleniti porro veritatis quos.</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li data-uk-dropdown="{mode:'click'}">
                            <a href="#" class="user_action_image"><img class="md-user-image" src="assets/img/avatars/avatar_11_tn.png" alt=""/></a>
                            <div class="uk-dropdown uk-dropdown-small uk-dropdown-flip">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a href="page_user_profile.html">My profile</a></li>
                                    <li><a href="page_settings.html">Settings</a></li>
                                    <li><a href="login.html">Logout</a></li>
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
            <div class="sidebar_logo"><a href="index.html"><img src="assets/img/logo_main.png" alt="" height="15" width="71"/></a></div>
            <div class="sidebar_actions">
                <select id="lang_switcher" name="lang_switcher">
                    <option value="gb" selected>English</option>
                </select>
            </div>
        </div>
        <div class="menu_section">
            <ul>
                <li>
                    <a href="index.html">
                        <span class="menu_icon uk-icon-th-large"></span>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="page_mailbox.html">
                        <span class="menu_icon uk-icon-envelope-o"></span>
                        Mailbox
                    </a>
                </li>
                <li>
                    <a href="page_invoices.html">
                        <span class="menu_icon uk-icon-usd"></span>
                        Invoices
                    </a>
                </li>
                <li>
                    <a href="page_snippets.html">
                        <span class="menu_icon uk-icon-code"></span>
                        Snippets
                    </a>
                </li>
                <li>
                    <a href="page_user_profile.html">
                        <span class="menu_icon uk-icon-user"></span>
                        User Profile
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu_icon uk-icon-list-alt"></span>
                        Forms
                    </a>
                    <ul>
                        <li><a href="forms_regular.html">Regular Elements</a></li>
                        <li><a href="forms_advanced.html">Advanced Elements</a></li>
                        <li><a href="forms_file_upload.html">File Upload</a></li>
                        <li><a href="forms_validation.html">Validation</a></li>
                    </ul>
                </li>
                                <li>
                    <a href="#">
                        <span class="menu_icon uk-icon-flask"></span>
                        Kendo UI Widgets
                    </a>
                    <ul>
                        <li><a href="kendoui_autocomplete.html">Autocomplete</a></li>
                        <li><a href="kendoui_calendar.html">Calendar</a></li>
                        <li><a href="kendoui_colorpicker.html">ColorPicker</a></li>
                        <li><a href="kendoui_combobox.html">ComboBox</a></li>
                        <li class="act_item"><a href="kendoui_datepicker.html">DatePicker</a></li>
                        <li><a href="kendoui_datetimepicker.html">DateTimePicker</a></li>
                        <li><a href="kendoui_dropdown_list.html">DropDownList</a></li>
                        <li><a href="kendoui_masked_input.html">Masked Input</a></li>
                        <li><a href="kendoui_menu.html">Menu</a></li>
                        <li><a href="kendoui_multiselect.html">MultiSelect</a></li>
                        <li><a href="kendoui_numeric_textbox.html">Numeric TextBox</a></li>
                        <li><a href="kendoui_panelbar.html">PanelBar</a></li>
                        <li><a href="kendoui_timepicker.html">TimePicker</a></li>
                        <li><a href="kendoui_toolbar.html">Toolbar</a></li>
                        <li><a href="kendoui_window.html">Window</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="menu_icon uk-icon-newspaper-o"></span>
                        Components
                    </a>
                    <ul>
                        <li><a href="components_accordion.html">Accordions</a></li>
                        <li><a href="components_buttons.html">Buttons</a></li>
                        <li><a href="components_cards.html">Cards</a></li>
                        <li><a href="components_common.html">Common</a></li>
                        <li><a href="components_dropdowns.html">Dropdowns</a></li>
                        <li><a href="components_dynamic_grid.html">Dynamic Grid</a></li>
                        <li><a href="components_grid.html">Grid</a></li>
                        <li><a href="components_icons.html">Icons</a></li>
                        <li><a href="components_modal.html">Lightbox/Modal</a></li>
                        <li><a href="components_lists.html">Lists</a></li>
                        <li><a href="components_nestable.html">Nestable</a></li>
                        <li><a href="components_notifications.html">Notifications</a></li>
                        <li><a href="components_preloaders.html">Preloaders</a></li>
                        <li><a href="components_sortable.html">Sortable</a></li>
                        <li><a href="components_tables.html">Tables</a></li>
                        <li><a href="components_tooltips.html">Tooltips</a></li>
                        <li><a href="components_tabs.html">Tabs</a></li>
                    </ul>
                </li>
                <li >
                    <a href="#">
                        <span class="menu_icon uk-icon-shopping-cart"></span>
                        E-commerce
                    </a>
                    <ul>
                        <li><a href="ecommerce_product_details.html">Product Details</a></li>
                        <li><a href="ecommerce_product_edit.html">Product Edit</a></li>
                        <li><a href="ecommerce_products_grid.html">Products Grid</a></li>
                        <li><a href="ecommerce_products_list.html">Products List</a></li>
                    </ul>
                </li>
                <li >
                    <a href="#">
                        <span class="menu_icon uk-icon-plug"></span>
                        Plugins
                    </a>
                    <ul>
                        <li><a href="plugins_calendar.html">Calendar</a></li>
                        <li><a href="plugins_charts.html">Charts</a></li>
                        <li><a href="plugins_datatables.html">Datatables</a></li>
                        <li><a href="plugins_gantt_chart.html">Gantt Chart</a></li>
                        <li><a href="plugins_google_maps.html">Google Maps</a></li>
                        <li><a href="plugins_vector_maps.html">Vector Maps</a></li>
                    </ul>
                </li>
                <li >
                    <a href="#">
                        <span class="menu_icon uk-icon-folder-o"></span>
                        Pages
                    </a>
                    <ul>
                        <li><a href="page_blank.html">Blank</a></li>
                        <li><a href="page_contact_list.html">Contact List</a></li>
                        <li><a href="error_404.html">Error 404</a></li>
                        <li><a href="error_500.html">Error 500</a></li>
                        <li><a href="page_help.html">Help/Faq</a></li>
                        <li><a href="login.html">Login Page</a></li>
                        <li><a href="page_notes.html"> Notes </a> </li>
                        <li><a href="page_settings.html">Settings</a></li>
                        <li><a href="page_user_edit.html">User edit</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside><!-- main sidebar end -->

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <form class="uk-form-stacked">
                                <label for="kUI_datepicker_a" class="uk-form-label">Datepicker</label>
                                <input id="kUI_datepicker_a" value="10-06-2015" />
                            </form>
                        </div>
                        <div class="uk-width-large-1-2">
<pre class="line-numbers"><code class="language-javascript">$(input).kendoDatePicker({
  format: "d-MM-yyyy"
});</code></pre>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <form class="uk-form-stacked">
                                <label for="kUI_datepicker_b" class="uk-form-label">Datepicker (months)</label>
                                <input id="kUI_datepicker_b" value="November 2015" />
                            </form>
                        </div>
                        <div class="uk-width-large-1-2">
<pre class="line-numbers"><code class="language-javascript">$(input).kendoDatePicker({
  start: "year",
  depth: "year",
  format: "MMMM yyyy"
});</code></pre>
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