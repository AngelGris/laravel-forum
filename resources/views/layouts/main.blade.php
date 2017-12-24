<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>{{ config('app.name', 'VanHack Forum') }}</title>
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
        @yield('styles')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.3/css/froala_style.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/stylesheet.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet" media="all and (max-width: 700px), all and (max-device-width: 700px)">
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">
        <!--[if lte IE 9]>
            <link href="{{ asset('/css/tweaks.css') }}" rel="stylesheet">
        <![endif]-->
    </head>
    <body>
        <div id="wrap">
            <div id="page-header">
                <div class="headerbar" role="banner">
                    <div class="inner">
                        <div id="site-description">
                            <a class="logo" href="{{ route('index') }}" title="Board index"><img src="{{ asset('/img/vanhack-logo.svg') }}" title="VanHack Forum" style="width:50px"></a>
                            <h1>VanHack Forum</h1>
                        </div>
                        <div id="search-box" class="search-box search-header" role="search">
                            <form action="{{ route('search') }}" method="get">
                                <fieldset>
                                    <input name="q" type="search" maxlength="128" title="Search for keywords" class="inputbox search tiny" size="20" value="" placeholder="Search…" />
                                    <button class="button icon-button search-icon" type="submit" title="Search">Search</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="navbar" role="navigation">
                    <div class="inner">
                        <ul id="nav-main" class="linklist bulletin" role="menubar">
                            <li class="small-icon icon-home" data-skip-responsive="true"><a href="{{ route('index') }}" title="Board indes" role="menuitem">Board index</a></li>
                            <li class="small-icon icon-faq" data-skip-responsive="true"><a href="{{ route('faq') }}" rel="help" title="Frequently Asked Questions" role="menuitem">FAQ</a></li>
                            @if (Auth::check())
                            <li class="small-icon icon-logout rightside"  data-skip-responsive="true"><a href="{{ route('logout') }}" title="Login" role="menuitem" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                            <li class="small-icon rightside" data-skip-responsive="true"><a href="{{ route('profile') }}" role="menuitem"><img src="{{ $_user->profile_small_picture_url }}" /> {{ $_user->user_name }}</a></li>
                            @else
                            <li class="small-icon icon-logout rightside"  data-skip-responsive="true"><a href="{{ route('login') }}" title="Login" role="menuitem">Login</a></li>
                            <li class="small-icon icon-register rightside" data-skip-responsive="true"><a href="{{ route('register') }}" role="menuitem">Register</a></li>
                            @endif
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div id="page-body" role="main">
                <p class="responsive-center time">{{ \Carbon\Carbon::now()->format('d M Y | H:i') }}</p>
                <div class="clear"></div>
                @if (Session::has('status'))
                <div class="alert alert-success alert-dismissable" style="margin-top:18px;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                    {{ Session::get('status') }}
                </div>
                @endif
                @if (Session::has('message'))
                <div class="alert alert-success alert-dismissable" style="margin-top:18px;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                    {!! Session::get('message') !!}
                </div>
                @endif
                @yield('content')
            </div>
            <div id="page-footer" role="contentinfo">
                <div class="navbar" role="navigation">
                    <div class="inner">
                        <ul id="nav-footer" class="linklist bulletin" role="menubar">
                            <li class="small-icon icon-home breadcrumbs">
                                <span class="crumb"><a href="{{ route('index') }}" data-navbar-reference="index">Board index</a></span>
                            </li>
                            <li class="rightside">All times are <abbr title="UTC">UTC</abbr></li>
                        </ul>
                    </div>
                </div>
                <div class="copyright">
                    Developed by <a href="http://github.com/AngelGris">Luciano García Bes</a> using Laravel 5
                </div>
            </div>
        </div>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        @yield('scripts')
    </body>
</html>
