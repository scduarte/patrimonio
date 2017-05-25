<?php include ("conexao.php");
?>
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
            <li class="hi-logo hidden-xs">
                <a>Sistema de Controle Patrimonial</a>
            </li>
        </ul>
    </header>

    <section id="main">
        <aside id="sidebar" class="sidebar c-overflow">
            <div class="s-profile">
                    <a href="" data-ma-action="profile-menu-toggle">
                        <div class="sp-pic">
                            <img src="img/profile-pics/1.jpg" alt="">
                        </div>
                        <div class="sp-info">Usuário
                            <i class="zmdi zmdi-caret-down"></i>
                        </div>
                    </a>

                    <ul class="main-menu">
                        <li>
                            <a href="profile-about.html"><i class="zmdi zmdi-account"></i> Ver Usuário</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-settings"></i> Configurações</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-time-restore"></i> Sair</a>
                        </li>
                    </ul>
                </div>
            
            <ul class="main-menu">
                <li class="active">
                    <a href="index.php"><i class="zmdi zmdi-home"></i> Inicio</a>
                </li>
                <li>
                    <a href="form-components.php"><i class="zmdi zmdi-collection-text"></i> Cadastro de Usuarios</a>
                </li>
            </ul>
        </aside>
        
    <section id="content">
        <div class="container">
            <div class="block-header">
                <h2>Dashboard</h2>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2>Selection Example</h2>
                </div>

                <div id="data-table-command-header" class="bootgrid-header container-fluid">
                    <div class="row">
                        <div class="col-sm-12 actionBar">
                            <div class="search form-group">
                                <div class="input-group">
                                    <span class="zmdi icon input-group-addon glyphicon-search"></span> 
                                    <input type="text" class="search-field form-control" placeholder="Procurar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
               
            <form name="dadosUser" action="conexao.php" method="POST"> 
                <table id="data-table-command" class="table table-striped table-vmiddle bootgrid-table" aria-busy="false">
                    
                    <thead>
                            <tr>
                                <th data-column-id="id" class="text-left" style="">
                                    <a href="javascript:void(0);" class="column-header-anchor sortable"><span class="text">Nome</span>
                                        <span class="zmdi icon "></span></a>
                                </th>
                                <th data-column-id="sender" class="text-left" style="">
                                    <a href="javascript:void(0);" class="column-header-anchor sortable"><span class="text">Telefone</span>
                                        <span class="zmdi icon "></span></a></th>
                                <th data-column-id="received" class="text-left" style="">
                                    <a href="javascript:void(0);" class="column-header-anchor sortable"><span class="text">Email</span>
                                        <span class="zmdi icon zmdi-sort-amount-desc"></span></a>
                                </th>
                                <th data-column-id="commands" class="text-left" style="">
                                    <a href="javascript:void(0);" class="column-header-anchor "><span class="text">Alterar/Excluir
                                </span><span class="zmdi icon "></span></a>
                                </th>
                            </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td><input type="text" name="nome"/></td>
                            <td><input type="text" name="nome" value=""/></td>
                            <td><input type="text" name="nome" value=""/></td>
                            <td>
                                <button type="button" class="btn btn-icon command-edit waves-effect waves-circle">
                                    <span class="zmdi zmdi-edit"></span>
                                </button> 
                                <button type="button" class="btn btn-icon command-delete waves-effect waves-circle">
                                    <span class="zmdi zmdi-delete"></span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left" style=""><input type="text" name="nome" value=""></td>
                            <td class="text-left" style=""><input type="text" name="nome" value=""/></td>
                            <td class="text-left" style=""><input type="text" name="nome" value=""/></td>
                            <td class="text-left" style="">
                                <button type="button" class="btn btn-icon command-edit waves-effect waves-circle">
                                    <span class="zmdi zmdi-edit"></span>
                                </button> 
                                <button type="button" class="btn btn-icon command-delete waves-effect waves-circle">
                                    <span class="zmdi zmdi-delete"></span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left" style=""><input type="text" name="nome" value=""/></td>
                            <td class="text-left" style=""><input type="text" name="nome" value=""/></td>
                            <td class="text-left" style=""><input type="text" name="nome" value=""/></td>
                            <td class="text-left" style="">
                                <button type="button" class="btn btn-icon command-edit waves-effect waves-circle">
                                    <span class="zmdi zmdi-edit"></span>
                                </button> 
                                <button type="button" class="btn btn-icon command-delete waves-effect waves-circle">
                                    <span class="zmdi zmdi-delete"></span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left" style=""><input type="text" name="nome" value=""/></td>
                            <td class="text-left" style=""><input type="text" name="nome" value=""/></td>
                            <td class="text-left" style=""><input type="text" name="nome" value=""/></td>
                            <td class="text-left" style="">
                                <button type="button" class="btn btn-icon command-edit waves-effect waves-circle">
                                    <span class="zmdi zmdi-edit"></span>
                                </button> 
                                <button type="button" class="btn btn-icon command-delete waves-effect waves-circle">
                                    <span class="zmdi zmdi-delete"></span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form> 
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
