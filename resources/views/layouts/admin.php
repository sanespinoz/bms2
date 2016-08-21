<!DOCTYPE html>
<html lang="es" ng-app="dreamsApp">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SAI</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css">

        <!-- Custom CSS -->
    <link href="assets/css/sb-admin-2.css" rel="stylesheet" type="text/css">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



</head>

<body  id="page-top" ng-controller='AppCtrl'>

    <div id="wrapper">

        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <li><a class="navbar-brand" href='/bms2/public/'>Inicio</a></li>
                <li>
                    <a ng-click="logout()" href='/bms2/public/'>
                        Cerrar Sesión
                    </a></li>
                </ul>
           

        </div>
         </div>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation"  ng-controller='pisoCtrl'>
                <div class="sidebar-nav navbar-collapse">
                     <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="#"><i class='fa fa-building fa-fw'></i> Piso<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                           
                                <li>

                                    <a href="#create"><i class='fa fa-pencil fa-fw'></i> Agregar</a>
                                
                                </li>
                                <li>
                                    <a href="#list"><i class='fa fa-list fa-fw'></i> Pisos</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-trello fa-fw"></i> Sector<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <li>

                                    <a href="#create"><i class='fa fa-pencil fa-fw'></i> Agregar</a>
                                
                                </li>
                                <li>
                                    <a href="#list"><i class='fa fa-list fa-fw'></i> Sectores</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-th-large fa-fw"></i> Grupo<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="grupo/create"><i class='fa fa-pencil fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="grupo"><i class='fa fa-list fa-fw'></i> Grupos</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-chain-broken fa-fw"></i> Luminaria<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/luminaria/create"><i class='fa fa-pencil fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="luminaria"><i class='fa fa-list fa-fw'></i> Luminarias</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-lightbulb-o fa-fw"></i> Lámpara<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="lampara/create"><i class='fa fa-pencil fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="lampara"><i class='fa fa-list fa-fw'></i> Lámparas</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>

     </nav>

        <div id="page-wrapper">
          
          <div ng-view></div>
        </div>
    </div>
   
    
    <script src="../bower_components/jquery/dist/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="../bower_components/velocity/velocity.js"></script>
    <script src="../bower_components/moment/min/moment-with-locales.js"></script>
    <script src="../bower_components/angular/angular.js"></script>


      
     
    <script src="assets/js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/js/sb-admin-2.js"></script>

       
    <script src="https://raw.githubusercontent.com/Eonasdan/bootstrap-datetimepicker/master/build/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Angular JavaScript -->

       

    <!--<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>-->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular-route.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular-resource.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular-cookies.min.js"></script>
    <!-- Custom Angular JavaScript -->
    <script src="js/app.js"></script>         
    <script src="js/controllers.js"></script> 
    <script src="js/services.js"></script>
   
  
</body>



</html>