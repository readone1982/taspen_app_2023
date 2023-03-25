<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TASPEN APP') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- css copas --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/fonts/meteocons/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/charts/chartist.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/charts/chartist-plugin-tooltip.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/toggle/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/toggle/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/extensions/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/pickers/daterange/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/selects/select2.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/app.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/timeline.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/validation/form-validation.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/switch.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/wizard.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/pickers/daterange/daterange.css">
    <!-- END Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/invoice.css">
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    {{-- css copas --}}
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'TASPEN APP') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{url ('tiket')}}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Hello {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="app-content center-layout mt-1">
            <div class="content-wrapper">
                <div class="content-header row"></div>
                <div class="content-body">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        <footer class="footer footer-transparent footer-info navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2 center-layout">
          <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2023 <span class="text-bold-800 grey darken-2">Rumah Dika</span></span>
          <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Taspen 2023 - Tiket Mudik Gratis</span>
        </p>
        </footer>
        <!-- BEGIN VENDOR JS-->
        <script src="{{ asset('app-assets') }}/vendors/js/vendors.min.js" type="text/javascript"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <script src="{{ asset('app-assets') }}/vendors/js/ui/jquery.sticky.js" type="text/javascript"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/charts/chartist-plugin-tooltip.min.js" type="text/javascript"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/charts/morris.min.js" type="text/javascript"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/timeline/horizontal-timeline.js" type="text/javascript"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/charts/echarts/echarts.js" type="text/javascript"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/forms/toggle/bootstrap-switch.min.js" type="text/javascript"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/extensions/sweetalert.min.js" type="text/javascript"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/pickers/dateTime/moment-with-locales.min.js" type="text/javascript"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/pickers/daterange/daterangepicker.js" type="text/javascript"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jquery.validate.min.js" type="text/javascript"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN MODERN JS-->
        <script src="{{ asset('app-assets') }}/js/core/app-menu.js" type="text/javascript"></script>
        <script src="{{ asset('app-assets') }}/js/core/app.js" type="text/javascript"></script>
        <script src="{{ asset('app-assets') }}/js/scripts/customizer.js" type="text/javascript"></script>
        {{-- dika js --}}
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
        {{-- dika js --}}
        <!-- END MODERN JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="{{ asset('app-assets') }}/js/scripts/pages/dashboard-ecommerce.js" type="text/javascript"></script>
    </div>
</body>
</html>
