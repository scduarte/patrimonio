
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
                    <h2>CADASTRO</h2>
                </div>

                <p class="c-black f-500 m-b-5"></p><br/>
                
                <form action="conexao.php" method="POST" name="dadosUser">
                
                    <div class="card">
                    <div class="card-body card-padding">
    <!--linha 1--->     <div class="row">
                            
                            <div class="col-sm-4"> <!-- coluna--->
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                    <div class="fg-line">
                                        <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-4">  <!-- coluna--->
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-local-phone"></i></span>
                                    <div class="fg-line">
                                        <input type="text" class="form-control" name="telefone" placeholder="Telefone">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-4">  <!-- coluna--->
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                                    <div class="fg-line">
                                        <input type="text" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                        </div>  <!--linha 1---> 
                        
                        <br>
                           
                            <div class="row">  <!--linha 2---> 
                            
                            <div class="col-sm-8"> <!-- coluna--->
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
                                    <div class="fg-line">
                                        <input type="text" class="form-control" name="endereco"placeholder="Endereço">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-4"> <!-- coluna--->
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
                                    <div class="fg-line">
                                        <input type="text" class="form-control" name="endereco"placeholder="Endereço">
                                    </div>
                                </div>
                            </div>
                            </div>   <!--linha 2--->
                        
                            <br>
                            
                            <div class="row">
                            
                                <div class="col-sm-8">
                                <div class="input-group">
                                   
                                </div>
                                <div class="col-sm-8">
                                <div class="input-group">
                                    <input type="hidden" name="acao" value="inserir">
                                    <input type="submit" class="btn-danger" value="Enviar" name="Enviar">  
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
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
    <script src="js/app.min.js"></script>
</body>
</html>
