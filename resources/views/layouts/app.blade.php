<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    
    
        <style>
          
            .panel-heading {
                
                padding-top: 20px;
                padding-right: 20px;
                padding-bottom: 20px;
                padding-left: 20px;

            }
             .pagination {
                 border: 0px; 
                padding-left: 0 !important;
                border-radius: 4px;
                float: right;
                 margin: 0px;
            }
        
        .btn {
            display: inline-block;
            margin-bottom: 0;
            font-weight: 400;
            text-align: center;
            vertical-align: middle;
           
            cursor: pointer;
            border: 1px solid transparent;
            white-space: nowrap;
            padding: 2px 12px;
            font-size: 14px;
            line-height: 1.6;
            border-radius: 4px;
            user-select: none;
        }
            
    </style>

    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/admin/useri') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav ">
<!--                         &nbsp;-->
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/useri">Read Ideas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/useri/create">Publish Ideas</a>
                        </li>
                        
                        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Staff
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/admin/home">Admin Portal</a>
          
          <div class="dropdown-divider">
              <a class="dropdown-item" href="/admin/qam">QAM Portal</a>
          </div>
          <a class="dropdown-item" href="/admin/qac">QAC Portal</a>
                   <div class="dropdown-divider">
              <a class="dropdown-item" href="/admin/useri">User Portal</a>
          </div>

        </div>
      </li>
                        


                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} 
                                    <span class="caret"></span>
                                    
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    

    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
