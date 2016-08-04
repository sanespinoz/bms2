<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@section('title') BMS @show</title>
    {!! Html::style('assets/css/bootstrap.css') !!}
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

   

    {!!Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css')!!}
    {!!Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css')!!}
    
    {!!Html::style('https://raw.githubusercontent.com/Eonasdan/bootstrap-datetimepicker/master/build/css/bootstrap-datetimepicker.min.css')!!}
    
    {!!Html::style('assets/css/metisMenu.min.css')!!}
    {!!Html::style('assets/css/sb-admin-2.css')!!}
    {!!Html::style('assets/css/font-awesome.min.css')!!}




</head>
<body>
 <div id="wrapper">
 <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			    <span class="sr-only">Toggle Navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">BMS</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		        <ul class="nav navbar-nav">
			    	<li><a href="/">Inicio</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				    @if (Auth::guest())
				        <li><a href="{{route('login')}}">Iniciar Sesión</a></li>
						<li><a href="{{route('register')}}">Registrarse</a></li>
				    @else
		                <li>
		                    <a href="#">{{ Auth::user()->name }}</a>
		                </li>
		                <li><a href="{{route('logout')}}">Cerrar Sesión</a></li>
		                
			        @endif
				</ul>
			</div>

		</div>
	</nav>

    <div class="container">
               @if (Session::has('errors'))
		    <div class="alert alert-warning text-center" role="alert">
		    Las credenciales que ingresaste no coinciden con nuestros registros.
			
		    </div>
		@endif
    </div>
    
  
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Piso<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>

                                    <a href="{!!URL::to('/pisos/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                
                                </li>
                                <li>
                                    <a href="{!!URL::to('/pisos')!!}"><i class='fa fa-list-ol fa-fw'></i> Pisos</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-calculator"></i> Sector<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/sector/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/sector')!!}"><i class="fa fa-ellipsis-v"></i> Sectores</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-folder-o"></i> Grupo<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/grupo/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/grupo')!!}"><i class='fa fa-list-ol fa-fw'></i> Grupos</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-briefcase"></i> Luminaria<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/luminaria/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/luminaria')!!}"><i class='fa fa-list-ol fa-fw'></i> Luminarias</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-folder-o"></i> Lámpara<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/lampara/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/lampara')!!}"><i class='fa fa-list-ol fa-fw'></i> Lámparas</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>

</nav>
        <div id="page-wrapper">
            @yield('content')
        </div>

   </div>
    <!-- Scripts -->


    {!! Html::script('assets/js/bootstrap.min.js') !!}

      {!!Html::script('assets/js/jquery.min.js')!!}
    {!!Html::script('assets/js/script.js')!!}
      {!!Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js')!!}
    {!!Html::script('assets/js/metisMenu.min.js')!!}
    {!!Html::script('assets/js/sb-admin-2.js')!!}
   
    {!!Html::script('https://raw.githubusercontent.com/moment/moment/develop/moment.js')!!}
    {!!Html::script('https://raw.githubusercontent.com/moment/moment/master/locale/es.js')!!}
    
    {!!Html::script('https://raw.githubusercontent.com/Eonasdan/bootstrap-datetimepicker/master/build/js/bootstrap-datetimepicker.min.js')!!}
</body>

<script type="text/javascript">
   
          $(function() {
        $('#fecha_instalacion').datetimepicker({
          format: 'YYYY/MM/DD', 
        });
        });
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
         function resta(){
                var v = document.getElementById("vida");
                var hsact = document.getElementById("horas_activas");
                var trestante = v.value - hsact.value;
                 document.getElementById("tiempo_restante").value = trestante;
//limpiar las variables funcion clear a null
            }
       
   
</script>

</html>