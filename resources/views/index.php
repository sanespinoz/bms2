<!DOCTYPE html>
<html lang="en" ng-app="dreamsApp">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SAI</title>

        <!-- Bootstrap Core CSS -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/grayscale.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" ng-controller="AppCtrl">

        <!-- Navigation -->
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">
                        <i class="fa fa-play-circle"></i>  Inicio
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#dreams">Luminarias</a>
                        </li>
                        <li ng-show="isLogged">
                            <a class="page-scroll" href="admin">Gestión</a>
                        </li>                        
                        <li ng-hide="isLogged">
                            <a class="page-scroll" href="#auth">Login</a>
                        </li>                        
                        <li ng-show="isLogged">
                            <a ng-click="logout()" href>Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Intro Header -->
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading">Automatización de Iluminación</h1>
                            <p class="intro-text">Gestión de datos, visualización de información de dispositivos en tiempo real y de datos estadísticos relevantes</p>
                            <a href="#dreams" class="btn btn-circle page-scroll">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Dreams Section -->
        <section id="dreams" class="container content-section text-center">
            <div class="row">
              
            </div>
        </section>


        <!-- Auth Section -->
        <section id="auth" class="content-section">
            <div class="download-section">
                <div class="container">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div ng-hide="isLogged" >
                            <h2 class="text-center">Login</h2>
                            <form ng-controller="LoginCtrl" ng-submit="submit()" accept-charset="UTF-8" role="form">
                                <div ng-show="isAlert" class="alert alert-danger" role="alert">
                                    Estas credenciales no están registradas.
                                </div>                              
                                <div class="row">

                                    <div class="form-group col-lg-6" ng-class="{'has-error': errorEmail}">
                                        <input ng-model="formData.email" class="form-control" placeholder="correo electrónico" name="email" type="email" id="email" required>
                                        <small class="help-block">{{ errorEmail}}</small>
                                    </div>

                                    <div class="form-group col-lg-6" ng-class="{'has-error': errorPassword}">
                                        <input ng-model="formData.password" class="form-control" placeholder="contraseña" name="password" type="password" value="" id="password" required>
                                        <small class="help-block">{{ errorPassword}}</small>
                                    </div>

                                    <div class="checkbox col-lg-12">
                                        <label>
                                            <input ng-model="formData.memory" name="memory" type="checkbox" value="1">Recuerdame
                                        </label>
                                    </div>

                                    <div class="form-group col-lg-12 text-center">
                                        <input class="btn btn-default" type="submit" value="Enviar">
                                    </div>    

                                    <div class="col-lg-12 text-center">                 
                                        <a href="password/email">Olvide mi contraseña !</a>
                                    </div>
                                </div>
                            </form>                        
                            <div class="text-center">
                                <br>
                                <a href="auth/register" class="btn btn-default">Deseo suscribirme !</a>
                            </div>
                        </div>

           
                    </div>                   
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <div class="container text-center">
                <p>Copyright &copy; Proyecto Final de Grado</p>
            </div>
        </footer>

<script src="../bower_components/jquery/dist/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="../bower_components/velocity/velocity.js"></script>
<script src="../bower_components/moment/min/moment-with-locales.js"></script>
<script src="../bower_components/angular/angular.js"></script>
<script src="../bower_components/lumx/dist/lumx.js"></script>

  
 
    <script src="assets/js/metisMenu.min.js"></script>
  <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

        <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
   
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
<!--Internacionalizacion -->
  <script src="http://code.angularjs.org/1.2.9/i18n/angular-locale_es-cr.js"></script>
  </body>

</html>


