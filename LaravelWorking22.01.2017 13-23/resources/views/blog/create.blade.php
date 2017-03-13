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
    <link href="/css/buyTicket.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div class="menubar" style="z-index: 10">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="/Images/Logo.png" height="40px" width="85px" style="position: absolute; top:0px;">
    </a>
    <!-- Right Side Of Navbar -->
    <ul id="barzanavigaciqta">
        <!-- Authentication Links -->
        @if (Auth::guest())
            <li class="navButtoni"><a class="navButtoniLinks" href="{{ url('/mainstage') }}">Main Stage</a></li>
            <li class="navButtoni"><a class="navButtoniLinks" href="{{ url('/tournaments') }}">Tournaments</a></li>
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
            <li class="navButtoni"><a class="navButtoniLinks" href="{{ url('/news') }}">News</a></li>
            <li class="navButtoni"><a class="navButtoniLinks" href="{{ url('/about') }}">About us</a></li>
        @else
            <li class="dropdown navButtoni">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                    <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:30px; height:30px; position:absolute; top:-3px; left:14px; border-radius: 50%">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ url('/create') }}">
                            Write News
                        </a>
                        <a href="{{ url('/profile') }}">
                            Profile
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
            <li class="navButtoni"><a class="navButtoniLinks" href="{{ url('/news') }}">News</a></li>
            <li class="navButtoni"><a class="navButtoniLinks" href="{{ url('/about') }}">About us</a></li>

        @endif
    </ul>
</div>
<div>
    @if (session('status'))
        <div class="alert alert-success" style="position: absolute; margin:35%; margin-top: 3.5%;">
            {{ session('status') }}
        </div>
    @endif
    @if (session('warning'))
        <div class="alert alert-warning" style="position: absolute; margin:25%; margin-top: 3.5%;">
            {{ session('warning') }}
        </div>
    @endif
</div>
<img src="/Images/asd.jpg" style="position: fixed; z-index: 0; height: 100%; width: 100%;">
<br><br><br>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default" style="background-color: rgba(19, 79, 75, 0.8);">
                        <center>
                            <div class="panel-heading"><h1>Add new post</h1></div>
                            <div class="panel-body">
                            <form class="" action="/blog" method="post">
                                <input type="text" name="title" value="" placeholder="Title" style="background-color: rgba(19, 79, 75, 0.0);">
                                <input type="hidden" name="auth_id" value="{{Auth::user()->id}}" >
                                {{($errors->has('title')) ? $errors->first('title') : ''}}<br>
                                <br>
                                <textarea name="post" rows="8" cols="40" placeholder="Desc" style="background-color: rgba(19, 79, 75, 0.0);"></textarea>
                                {{($errors->has('post')) ? $errors->first('post') : ''}}<br>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" name="name" value="post" class="btn-primary">
                            </form>
                                <a href="/blog"> back</a>
                            </div>
                            </center>
                    </div>
                </div>
            </div>
        </div>
</body>
<script src="js/app.js"></script>
</html>
        </center>