
<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Admin</title>

    <!-- Vendor CSS -->
    <link href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendors/bower_components/sweetalert/dist/sweetalert.css" rel="stylesheet">
    <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/app_1.min.css" rel="stylesheet">
    <link href="css/app_2.min.css" rel="stylesheet">

</head>
<body>
    <header id="header" class="clearfix" data-ma-theme="blue">
        <ul class="h-inner">
            <li class="hi-trigger ma-trigger" data-ma-action="sidebar-open" data-ma-target="#sidebar">
                <div class="line-wrap">
                    <div class="line top"></div>
                    <div class="line center"></div>
                    <div class="line bottom"></div>
                </div>
            </li>

            <li class="hi-logo hidden-xs">
                <a href="index.html">Sistema de Controle Patrimonial</a>
            </li>

            <li class="pull-right">
                <ul class="hi-menu">

                    <li data-ma-action="search-open">
                        <a href=""><i class="him-icon zmdi zmdi-search"></i></a>
                    </li>
                    <li class="dropdown hidden-xs">         
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Top Search Content -->
        <div class="h-search-wrap">
            <div class="hsw-inner">
                <i class="hsw-close zmdi zmdi-arrow-left" data-ma-action="search-close"></i>
                <input type="text">
            </div>
        </div>
    </header>

    <section id="main">
        <aside id="sidebar" class="sidebar c-overflow">
            <div class="s-profile">
                <a href="" data-ma-action="profile-menu-toggle">
                    <div class="sp-pic">
                        <img src="img/profile-pics/1.jpg" alt="">
                    </div>

                    <div class="sp-info">
                        Profile System

                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                </a>

                <ul class="main-menu">
                    <li>
                        <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
                    </li>
                    <li>
                        <a href=""><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
                    </li>
                    <li>
                        <a href=""><i class="zmdi zmdi-settings"></i> Settings</a>
                    </li>
                    <li>
                        <a href=""><i class="zmdi zmdi-time-restore"></i> Logout</a>
                    </li>
                </ul>
            </div>

            <ul class="main-menu">
                <li class="active">
                    <a href="index.html"><i class="zmdi zmdi-home"></i> Inicio</a>
                </li>
                <li class="sub-menu">
                    <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-compact"></i> Headers</a>

                    <ul>
                        <li><a href="textual-menu.html">Textual menu</a></li>
                        <li><a href="image-logo.html">Image logo</a></li>
                        <li><a href="top-mainmenu.html">Mainmenu on top</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-collection-text"></i> Cadastro de Usuarios</a>

                    <ul>

                        <li><a href="form-components.html">Form Components</a></li>
                        <li><a href="form-examples.html">Form Examples</a></li>
                        <li><a href="form-validations.html">Form Validation</a></li>
                    </ul>
                </li>
            </ul>
        </aside>

        <aside id="chat" class="sidebar">

            <div class="chat-search">
                <div class="fg-line">
                    <input type="text" class="form-control" placeholder="Search People">
                    <i class="zmdi zmdi-search"></i>
                </div>
            </div>

            <div class="lg-body c-overflow">
                <div class="list-group">
                    <a class="list-group-item media" href="">
                        <div class="pull-left p-relative">
                            <img class="lgi-img" src="img/profile-pics/2.jpg" alt="">
                            <i class="chat-status-busy"></i>
                        </div>
                        <div class="media-body">
                            <div class="lgi-heading">Jonathan Morris</div>
                            <small class="lgi-text">Available</small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="">
                        <div class="pull-left">
                            <img class="lgi-img" src="img/profile-pics/1.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <div class="lgi-heading">David Belle</div>
                            <small class="lgi-text">Last seen 3 hours ago</small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="">
                        <div class="pull-left p-relative">
                            <img class="lgi-img" src="img/profile-pics/3.jpg" alt="">
                            <i class="chat-status-online"></i>
                        </div>
                        <div class="media-body">
                            <div class="lgi-heading">Fredric Mitchell Jr.</div>
                            <small class="lgi-text">Availble</small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="">
                        <div class="pull-left p-relative">
                            <img class="lgi-img" src="img/profile-pics/4.jpg" alt="">
                            <i class="chat-status-online"></i>
                        </div>
                        <div class="media-body">
                            <div class="lgi-heading">Glenn Jecobs</div>
                            <small class="lgi-text">Availble</small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="">
                        <div class="pull-left">
                            <img class="lgi-img" src="img/profile-pics/5.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <div class="lgi-heading">Bill Phillips</div>
                            <small class="lgi-text">Last seen 3 days ago</small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="">
                        <div class="pull-left">
                            <img class="lgi-img" src="img/profile-pics/6.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <div class="lgi-heading">Wendy Mitchell</div>
                            <small class="lgi-text">Last seen 2 minutes ago</small>
                        </div>
                    </a>
                </div>
            </div>
        </aside>

        <section id="content">
            <div class="container">
                <div class="block-header">
                    <h2>Dashboard</h2>
                </div>

               

                        <div class="card">
                            <div class="card-header">
                                <h2>Selection Example
                                    <small>Ensure that the data attribute [data-identifier="true"] is set on one column
                                        header.
                                    </small>
                                </h2>
                            </div>

                            <div id="data-table-command-header" class="bootgrid-header container-fluid">
                                <div class="row">
                                    <div class="col-sm-12 actionBar">
                                        <div class="search form-group">
                                            <div class="input-group">
                                                <span class="zmdi icon input-group-addon glyphicon-search"></span> 
                                                <input type="text" class="search-field form-control" placeholder="Search">
                                            </div>
                                        </div>
                                        <div class="actions btn-group">
                                            <div class="dropdown btn-group">
                                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                                    <span class="dropdown-text">10</span> 
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu pull-right" role="menu">
                                                    <li class="active" aria-selected="true">
                                                        <a data-action="10" class="dropdown-item dropdown-item-button">10</a>
                                                    </li>
                                                    <li aria-selected="false">
                                                        <a data-action="25" class="dropdown-item dropdown-item-button">25</a>
                                                    </li>
                                                    <li aria-selected="false">
                                                        <a data-action="50" class="dropdown-item dropdown-item-button">50</a>
                                                    </li>
                                                    <li aria-selected="false">
                                                        <a data-action="-1" class="dropdown-item dropdown-item-button">All</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown btn-group">
                                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                                    <span class="dropdown-text">
                                                        <span class="zmdi icon zmdi-view-module"> </span>
                                                    </span> 
                                                    <span class="caret"></span></button><ul class="dropdown-menu pull-right" role="menu">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><input name="id" type="checkbox" value="1" class="dropdown-item-checkbox" checked="checked"> ID
                                                                <i class="input-helper"></i>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input name="sender" type="checkbox" value="1" class="dropdown-item-checkbox" checked="checked"> Sender
                                                                <i class="input-helper"></i>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input name="received" type="checkbox" value="1" class="dropdown-item-checkbox" checked="checked"> Received
                                                                <i class="input-helper"></i>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input name="commands" type="checkbox" value="1" class="dropdown-item-checkbox" checked="checked"> Commands
                                                                <i class="input-helper"></i>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table id="data-table-command" class="table table-striped table-vmiddle bootgrid-table" aria-busy="false">
                                <thead>
                                    <tr>
                                        <th data-column-id="id" class="text-left" style="">
                                            <a href="javascript:void(0);" class="column-header-anchor sortable">
                                                <span class="text">ID</span>
                                                <span class="zmdi icon "></span>
                                            </a>
                                        </th>
                                        <th data-column-id="sender" class="text-left" style="">
                                            <a href="javascript:void(0);" class="column-header-anchor sortable">
                                                <span class="text">Sender</span>
                                                <span class="zmdi icon "></span>
                                            </a>
                                        </th>
                                        <th data-column-id="received" class="text-left" style="">
                                            <a href="javascript:void(0);" class="column-header-anchor sortable">
                                                <span class="text">Received</span>
                                                <span class="zmdi icon zmdi-sort-amount-desc"></span>
                                            </a>
                                        </th>
                                        <th data-column-id="commands" class="text-left" style="">
                                            <a href="javascript:void(0);" class="column-header-anchor ">
                                                <span class="text">Commands</span>
                                                <span class="zmdi icon "></span>
                                            </a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-row-id="0">
                                        <td class="text-left" style="">10253</td>
                                        <td class="text-left" style="">eduardo@pingpong.com</td>
                                        <td class="text-left" style="">29.10.2013</td>
                                        <td class="text-left" style="">
                                            <button type="button" class="btn btn-icon command-edit waves-effect waves-circle" data-row-id="10253">
                                                <span class="zmdi zmdi-edit"></span>
                                            </button> 
                                            <button type="button" class="btn btn-icon command-delete waves-effect waves-circle" data-row-id="10253">
                                                <span class="zmdi zmdi-delete"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-row-id="1">
                                        <td class="text-left" style="">10252</td>
                                        <td class="text-left" style="">robert@bingo.com</td>
                                        <td class="text-left" style="">28.10.2013</td>
                                        <td class="text-left" style="">
                                            <button type="button" class="btn btn-icon command-edit waves-effect waves-circle" data-row-id="10252">
                                                <span class="zmdi zmdi-edit"></span>
                                            </button> 
                                            <button type="button" class="btn btn-icon command-delete waves-effect waves-circle" data-row-id="10252">
                                                <span class="zmdi zmdi-delete"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-row-id="2">
                                        <td class="text-left" style="">10251</td>
                                        <td class="text-left" style="">simon@yahoo.com</td>
                                        <td class="text-left" style="">27.10.2013</td>
                                        <td class="text-left" style="">
                                            <button type="button" class="btn btn-icon command-edit waves-effect waves-circle" data-row-id="10251">
                                                <span class="zmdi zmdi-edit"></span>
                                            </button> 
                                            <button type="button" class="btn btn-icon command-delete waves-effect waves-circle" data-row-id="10251">
                                                <span class="zmdi zmdi-delete"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-row-id="3">
                                        <td class="text-left" style="">10250</td>
                                        <td class="text-left" style="">tim@microsoft.com</td>
                                        <td class="text-left" style="">26.10.2013</td>
                                        <td class="text-left" style="">
                                            <button type="button" class="btn btn-icon command-edit waves-effect waves-circle" data-row-id="10250">
                                                <span class="zmdi zmdi-edit"></span>
                                            </button> 
                                            <button type="button" class="btn btn-icon command-delete waves-effect waves-circle" data-row-id="10250">
                                                <span class="zmdi zmdi-delete"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-row-id="4">
                                        <td class="text-left" style="">10249</td>
                                        <td class="text-left" style="">lila@google.com</td>
                                        <td class="text-left" style="">25.10.2013</td>
                                        <td class="text-left" style="">
                                            <button type="button" class="btn btn-icon command-edit waves-effect waves-circle" data-row-id="10249">
                                                <span class="zmdi zmdi-edit"></span>
                                            </button> 
                                            <button type="button" class="btn btn-icon command-delete waves-effect waves-circle" data-row-id="10249">
                                                <span class="zmdi zmdi-delete"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-row-id="5">
                                        <td class="text-left" style="">10248</td>
                                        <td class="text-left" style="">eduardo@pingpong.com</td>
                                        <td class="text-left" style="">24.10.2013</td>
                                        <td class="text-left" style="">
                                            <button type="button" class="btn btn-icon command-edit waves-effect waves-circle" data-row-id="10248">
                                                <span class="zmdi zmdi-edit"></span>
                                            </button> 
                                            <button type="button" class="btn btn-icon command-delete waves-effect waves-circle" data-row-id="10248">
                                                <span class="zmdi zmdi-delete"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-row-id="6">
                                        <td class="text-left" style="">10247</td>
                                        <td class="text-left" style="">robert@bingo.com</td>
                                        <td class="text-left" style="">23.10.2013</td>
                                        <td class="text-left" style="">
                                            <button type="button" class="btn btn-icon command-edit waves-effect waves-circle" data-row-id="10247">
                                                <span class="zmdi zmdi-edit"></span>
                                            </button> 
                                            <button type="button" class="btn btn-icon command-delete waves-effect waves-circle" data-row-id="10247">
                                                <span class="zmdi zmdi-delete"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-row-id="7">
                                        <td class="text-left" style="">10246</td>
                                        <td class="text-left" style="">simon@yahoo.com</td>
                                        <td class="text-left" style="">22.10.2013</td>
                                        <td class="text-left" style="">
                                            <button type="button" class="btn btn-icon command-edit waves-effect waves-circle" data-row-id="10246">
                                                <span class="zmdi zmdi-edit"></span>
                                            </button> 
                                            <button type="button" class="btn btn-icon command-delete waves-effect waves-circle" data-row-id="10246">
                                                <span class="zmdi zmdi-delete"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-row-id="8">
                                        <td class="text-left" style="">10245</td>
                                        <td class="text-left" style="">tim@microsoft.com</td>
                                        <td class="text-left" style="">21.10.2013</td>
                                        <td class="text-left" style="">
                                            <button type="button" class="btn btn-icon command-edit waves-effect waves-circle" data-row-id="10245">
                                                <span class="zmdi zmdi-edit"></span>
                                            </button> 
                                            <button type="button" class="btn btn-icon command-delete waves-effect waves-circle" data-row-id="10245">
                                                <span class="zmdi zmdi-delete"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-row-id="9">
                                        <td class="text-left" style="">10244</td>
                                        <td class="text-left" style="">lila@google.com</td>
                                        <td class="text-left" style="">20.10.2013</td>
                                        <td class="text-left" style="">
                                            <button type="button" class="btn btn-icon command-edit waves-effect waves-circle" data-row-id="10244">
                                                <span class="zmdi zmdi-edit"></span>
                                            </button> 
                                            <button type="button" class="btn btn-icon command-delete waves-effect waves-circle" data-row-id="10244">
                                                <span class="zmdi zmdi-delete"></span>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div id="data-table-command-footer" class="bootgrid-footer container-fluid">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="pagination">
                                            <li class="first disabled" aria-disabled="true">
                                                <a data-page="first" class="button">
                                                    <i class="zmdi zmdi-more-horiz"></i>
                                                </a>
                                            </li>
                                            <li class="prev disabled" aria-disabled="true">
                                                <a data-page="prev" class="button">
                                                    <i class="zmdi zmdi-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-1 active" aria-disabled="false" aria-selected="true">
                                                <a data-page="1" class="button">1</a>
                                            </li>
                                            <li class="page-2" aria-disabled="false" aria-selected="false">
                                                <a data-page="2" class="button">2</a>
                                            </li>
                                            <li class="next" aria-disabled="false">
                                                <a data-page="next" class="button">
                                                    <i class="zmdi zmdi-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="last" aria-disabled="false">
                                                <a data-page="last" class="button">
                                                    <i class="zmdi zmdi-more-horiz"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 infoBar">
                                        <div class="infos">Showing 1 to 10 of 20 entries</div>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h2>Itens Recentes <small>Relação de itens adicionados</small></h2>
                                <ul class="actions">
                                    <li class="dropdown">
                                        <a href="" data-toggle="dropdown">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="">Refresh</a>
                                            </li>
                                            <li>
                                                <a href="">Settings</a>
                                            </li>
                                            <li>
                                                <a href="">Other Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body m-t-0">
                                <table class="table table-inner table-vmiddle">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th style="width: 60px">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="f-500 c-cyan">2569</td>
                                            <td>Samsung Galaxy Mega</td>
                                            <td class="f-500 c-cyan">$521</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">9658</td>
                                            <td>Huawei Ascend P6</td>
                                            <td class="f-500 c-cyan">$440</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">1101</td>
                                            <td>HTC One M8</td>
                                            <td class="f-500 c-cyan">$680</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">6598</td>
                                            <td>Samsung Galaxy Alpha</td>
                                            <td class="f-500 c-cyan">$870</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">4562</td>
                                            <td>LG G3</td>
                                            <td class="f-500 c-cyan">$690</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="recent-items-chart" class="flot-chart"></div>
                        </div>
            </div>
        </section>
    </section>

    <footer id="footer">
        Copyright &copy; 2015 Material Admin

        <ul class="f-menu">
            <li><a href="">Home</a></li>
            <li><a href="">Dashboard</a></li>
            <li><a href="">Reports</a></li>
            <li><a href="">Support</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </footer>

    <!-- Page Loader 
    <div class="page-loader">
        <div class="preloader pls-blue">
            <svg class="pl-circular" viewBox="25 25 50 50">
                <circle class="plc-path" cx="50" cy="50" r="20" />
            </svg>

            <p>Please wait...</p>
        </div>
    </div>-->

    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
        <div class="ie-warning">
            <h1 class="c-white">Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="img/browsers/chrome.png" alt="">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="img/browsers/firefox.png" alt="">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="img/browsers/safari.png" alt="">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                            <div>IE (New)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->

    <!-- Javascript Libraries 
    <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
    -->


    <script src="http://byrushan.com/projects/ma/1-6-1/jquery/light/vendors/bower_components/jquery/dist/jquery.min.js"></script>


    <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="vendors/bower_components/flot/jquery.flot.js"></script>
    <script src="vendors/bower_components/flot/jquery.flot.resize.js"></script>
    <script src="vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
    <script src="vendors/sparklines/jquery.sparkline.min.js"></script>
    <script src="vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

    <script src="vendors/bower_components/moment/min/moment.min.js"></script>
    <script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js "></script>
    <script src="vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
    <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
    <script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
    <script src="vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>
    <script src="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Placeholder for IE9 -->
    <!--[if IE 9 ]>
        <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
    <![endif]-->

    <script src="js/app.min.js"></script>
</body>
</html>
