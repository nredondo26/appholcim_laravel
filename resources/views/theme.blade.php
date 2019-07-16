<!doctype html>
<html class="fixed" lang="{{ app()->getLocale() }}">
    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

        <!-- Basic -->
        

        <title>Certificados HSEQ</title>

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <link href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light') }} " rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        {!! Html::style('assets/vendor/bootstrap/css/bootstrap.css') !!}
        {!! Html::style('assets/font-awesome/css/font-awesome.css') !!}
        {!! Html::style('assets/vendor/magnific-popup/magnific-popup.css') !!}
        {!! Html::style('assets/vendor/bootstrap-datepicker/css/datepicker3.css') !!}
        {{ Html::favicon('favicon.ico') }}

        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/select2/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css') }}" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('assets/stylesheets/theme.css') }}" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="{{ asset('assets/stylesheets/skins/default.css') }}" />

        <!-- Head Libs -->
        {{ Html::script('assets/vendor/modernizr/modernizr.js') }}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
       

    </head>
    <body>
        <section class="body">

            <!-- start: header -->
            <header class="header">
                <div class="logo-container">
                    <a href="#" class="logo">
                        <img src="{{ asset('assets/images/logonlogin.png') }}" height="35" alt="Porto Admin" />

                    </a>
                    <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
            
                <!-- start: search & user box -->
                <div class="header-right">
                  
                            
                    <span class="separator"></span>
            
                    <div id="userbox" class="userbox">
                        <a href="#" data-toggle="dropdown">
                            <figure class="profile-picture">
                                <img src="{{ asset('assets/images/logohseq.png')}}" alt="Joseph Doe" class="img-circle" data-lock-picture="{{ asset('assets/images/!logged-user.jpg')}}" />
                            </figure>
                            <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                                @if(Auth::guard('usuarios')->check())
                                   {{  Auth::guard('usuarios')->user()->nombre }}
                                @endif
                                <!--<span class="role">administrator</span>-->
                            </div>
            
                            <i class="fa custom-caret"></i>
                        </a>
            
                        <div class="dropdown-menu">
                            <ul class="list-unstyled">
                                <li class="divider"></li>
                                    <li>
                                    <a role="menuitem" tabindex="-1" href="{{URL::to('perfil')}}"><i class="fa fa-user"></i> My Perfil</a>
                                    </li>
                                <li>
                                   
                                   <form method="POST" action="{{ route('logout') }}">
                                   {{ csrf_field() }}
                                   <input type="hidden" id="custId" name="guard" value="usuarios">
                                     <button type="submit" class="btn btn-default submit"><i class="fa fa-power-off"></i> Logout</button>
                                  </form>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end: search & user box -->
            </header>
            <!-- end: header -->

            <div class="inner-wrapper">
                <!-- start: sidebar -->
                <aside id="sidebar-left" class="sidebar-left">
                
                    <div class="sidebar-header">
                        <div class="sidebar-title" >  
                          Navegación
                        </div>
                        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                        </div>
                    </div>
                
                    <div class="nano">
                        <div class="nano-content">
                            <nav id="menu" class="nav-main" role="navigation">
                                <ul class="nav nav-main">
                                    <li>
                                        <a href="{{URL::to('welcome' )}}">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>MENU DE OPCIONES</span>
                                        </a>
                                    </li>

                                    <li ><a href="{{URL::to('certificados' )}}"><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp;Certificados</a></li>
                                    <li><a href="{{URL::to('cursos' )}}"><i class="fa fa-folder-open-o" aria-hidden="true"></i>&nbsp;Cursos</a></li>
                                    <li><a href="{{URL::to('alumnos' )}}"><i class="fa fa-users" aria-hidden="true"></i>&nbsp; Alumnos </a></li>
                                    
                                </ul>
                            </nav>
                            
                        </div>
                
                    </div>
                
                </aside>
                <!-- end: sidebar -->

                  @yield('contet')
                  
            
            </div>

        </section>

        <!-- Vendor -->
        {{ Html::script('assets/vendor/jquery/jquery.js') }}
        {{ Html::script('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}
        {{ Html::script('assets/vendor/bootstrap/js/bootstrap.js') }}
        {{ Html::script('assets/vendor/nanoscroller/nanoscroller.js') }}
        {{ Html::script('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}
        {{ Html::script('assets/vendor/magnific-popup/magnific-popup.js') }}
        {{ Html::script('assets/vendor/jquery-placeholder/jquery.placeholder.js') }}

        
        <!-- Specific Page Vendor -->
        {{ Html::script('assets/vendor/select2/select2.js') }}
        {{ Html::script('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js') }}
        {{ Html::script('assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js') }}
        {{Html::script('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js') }}
        
        <!-- Theme Base, Components and Settings -->
        {{ Html::script('assets/javascripts/theme.js') }}
                
        <!-- Theme Initialization Files -->
        {{ Html::script('assets/javascripts/theme.init.js') }}


        <!-- Examples -->
        {{ Html::script('assets/javascripts/tables/examples.datatables.default.js') }}
        {{ Html::script('assets/javascripts/tables/examples.datatables.row.with.details.js') }}
        {{ Html::script('assets/javascripts/tables/examples.datatables.tabletools.js') }}

        {{ Html::script('assets/javascripts/maps/examples.gmap.js') }}
        {{ Html::script('http://maps.google.com/maps/api/js?sensor=false') }}
        {{ Html::script('assets/vendor/gmaps/gmaps.js') }}

    </body>
</html>
