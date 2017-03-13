<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to NERF!</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/home.css" rel="stylesheet">
    @yield('css')

    @yield('javabefore')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div class="menubar" >
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="/Images/Logo.png" height="40px" width="85px" style="position: absolute; top:0px;">
    </a>
    <!-- Right Side Of Navbar -->
    <ul id="barzanavigaciqta">
        <!-- Authentication Links -->
        @if (Auth::guest())
            <form style="display: none" action="{{ url('/login') }}" method="POST" role="form" id="peturcho">
                {{ csrf_field() }}
                <li class="navButtoni" style="position: relative; top: -5px;">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif

                    </div>
                </li>
                <li class="navButtoni" style="position: relative; top: -5px;">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <input id="password" type="password" placeholder="Pass" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif

                    </div>
                </li>
                <li class="navButtoni" ><input  type="submit" name="submitLogin" id="login_log" style="font-weight: bold;" value="Log In"></li>
                <li class="navButtoni" ><input  type="reset" name="cancelLogin" id="cancel_log" style="font-weight: bold;" value="Cancel" onclick="hideForm('peturcho')"></li>
                <li class="form-group navButtoni" style="font-weight: bold;">
                    <a  href="{{ url('/password/reset') }}">
                        Forgot Your Password?
                    </a>
                </li>
            </form>
            <li class="navButtoni"><a class="navButtoniLinks" id="logIn_main" style="font-weight: bold;" onclick="showForm('peturcho');">Login</a></li>
            <li class="navButtoni"><a class="navButtoniLinks" href="{{ url('/register') }}">Register</a></li>
            <li class="navButtoni"><a class="navButtoniLinks" href="{{ url('/mainstage') }}">Main Stage</a></li>
            <li class="navButtoni"><a class="navButtoniLinks" href="{{ url('/tournaments') }}">Tournaments</a></li>
            <li class="navButtoni"><a class="navButtoniLinks" href="{{ url('/news') }}">News</a></li>
            <li class="navButtoni"><a class="navButtoniLinks" href="{{ url('/about') }}">About us</a></li>
        @else
            <li class="dropdown navButtoni">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                    <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:30px; height:30px; position:absolute; top:-3px; left:14px; border-radius: 50%">
                    ID: {{ Auth::user()->id }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu" >
                    <li>
                        <a href="{{ url('/create') }}">
                            Write News
                        </a>
                        <a href="{{ url('/profile') }}">
                            Profile
                        </a>
                        @if(Auth::user()->paid === 0)
                        <a href="{{ url('/payticket') }}">
                            Pay Ticket
                        </a>
                        @endif
                        <a href="{{ url('/campsite') }}">
                            Reserve Camp site
                        </a>
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            <li class="navButtoni"><a class="navButtoniLinks" href="{{ url('/mainstage') }}">Main Stage</a></li>
            <li class="navButtoni"><a class="navButtoniLinks" href="{{ url('/tournaments') }}">Tournaments</a></li>
            <li class="navButtoni"><a class="navButtoniLinks" href="{{ url('/news') }}">News</a></li>
            <li class="navButtoni"><a class="navButtoniLinks" href="{{ url('/about') }}">About us</a></li>

        @endif
    </ul>
</div>
<div>
    @if (session('status'))
        <div class="alert alert-success" style="position: fixed; margin:35%; margin-top: 3.5%;">
            {{ session('status') }}
        </div>
    @endif
    @if (session('warning'))
        <div class="alert alert-warning" style="position: fixed; margin:25%; margin-top: 3.5%;">
            {{ session('warning') }}
        </div>
    @endif
</div>

    @yield('content')
<div>
    <div id="socialnaMedia" >
        <a href="https://www.facebook.com/%D0%9D%D0%B5%D0%BE%D1%84%D0%B8%D1%86%D0%B8%D0%B0%D0%BB%D0%BD%D0%B0-Nerf-festival-342044696161466/" target="_blank" ><img class="SMicons" src="Images/FacebookIcon.png" alt="facebookIcon"></a>
        <a href="" target="_blank"><img class="SMicons" src="Images/GoogleIcon.png" alt="googlePlusIcon"></a>
        <a href="" target="_blank"><img class="SMicons" src="Images/TwitterIcon.png" alt="twitterIcon"></a>
        <a href="" target="_blank"><img class="SMicons" src="Images/YoutubeIcon.png" alt="youtubeIcon"></a>
    </div>
</div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
<script>
    function showForm(id) {
        var text1 = document.getElementById(id);
        var loginBtn = document.getElementById("logIn_main");

        if (text1.style.display == "none") {
            text1.style.display = "inline";
            loginBtn.style.display = "none";
        }
    }

    function hideForm(id) {
        var text1 = document.getElementById(id);
        var loginBtn = document.getElementById("logIn_main");

        if (text1.style.display == "inline") {
            text1.style.display = "none";
            loginBtn.style.display = "inline";
        }
    }
    @yield('java')
</script>
</html>
