<nav class="navbar navbar-default">
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
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fa fa-exchange" aria-hidden="true"></i> {{ config('app.name', 'Koridbiki.com') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li> <a href="{{ route('ads.index') }}"> <i class="fa fa-eye fa-fw"></i> All Ads </a> </li>
                <li> <a href="{{ route('post.index')}}"> <i class="fa fa-paper-plane-o fa-fw"></i> Post Your Ad </a> </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <li> <a> <div id="google_translate_element"> </div> </a> </li>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}"> <i class="fa fa-sign-in fa-fw"> </i> Login </a> </li>
                    <li><a href="{{ route('register') }}"> <i class="fa fa-user-plus fa-fw"> </i> Register </a> </li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
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
