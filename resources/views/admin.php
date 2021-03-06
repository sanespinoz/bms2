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
<!--iconos graficos css para bootstrap 3-->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



</head>

<body  ng-controller='AppCtrl'>

    <div id="wrapper">

        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href='/bms2/public/'>Inicio</a>
            </div>
           

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a ng-click="logout()" href='/bms2/public/'>
                        Logout
                    </a>
                   
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation"  ng-controller='pisoCtrl'>
                <div class="sidebar-nav navbar-collapse">
                     <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Piso<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                           
                                <li>

                                    <a href="#create"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                
                                </li>
                                <li>
                                    <a href="#list"><i class='fa fa-list-ol fa-fw'></i> Pisos</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-calculator"></i> Sector<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="sector/create"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="sector"><i class="fa fa-ellipsis-v"></i> Sectores</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-folder-o"></i> Grupo<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="grupo/create"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="grupo"><i class='fa fa-list-ol fa-fw'></i> Grupos</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-briefcase"></i> Luminaria<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/luminaria/create"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="luminaria"><i class='fa fa-list-ol fa-fw'></i> Luminarias</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-folder-o"></i> Lámpara<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="lampara/create"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="lampara"><i class='fa fa-list-ol fa-fw'></i> Lámparas</a>
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
