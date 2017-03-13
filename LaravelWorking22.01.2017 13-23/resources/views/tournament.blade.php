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
    <link href="/css/tournaments.css" type="text/css" rel="stylesheet"/>
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
                        <a href="{{ url('/payticket') }}">
                            Pay Ticket
                        </a>
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

<div id="razlika"></div>
<div style="height: 100%; width: 100%; position:relative; z-index: -10;">
    <div class="hideable" >
        <a class="linkoveIgri" onclick="hide('div', 'hideable')">
            <!--            <div class="opacity">-->
            <img src="Images/League%20of%20Legents.jpg" class="igri"/>
            <!--            </div>-->
        </a>
    </div>
    <div class="hideable" >
        <a class="linkoveIgri" onclick="hide('div2', 'hideable')">
            <!--            <div class="opacity">-->
            <img src="Images/Hearthstone.jpg" class="igri"/>
            <!--            </div>-->
        </a>
    </div>
    <div class="hideable">
        <a class="linkoveIgri" onclick="hide('div3', 'hideable')">
            <!--            <div class="opacity">-->
            <img src="Images/Overwatch.jpg" class="igri"/>
            <!--            </div>-->
        </a>
    </div>

</div>
<div id="div">
    <img class="logota" src="Images/League-of-Legends-Banner.png" onclick="show('hideable', 'div')" />
    <p class="tourInfo">League of Legends is a fast-paced, competitive online game that blends the speed and intensity of an RTS with RPG elements. Two teams of powerful champions, each with a unique design and playstyle, battle head-to-head across multiple battlefields and game modes. With an ever-expanding roster of champions, frequent updates and a thriving tournament scene, League of Legends offers endless replayability for players of every skill level. In League of Legends, players assume the role of an unseen "summoner" that controls a "champion" with unique abilities and battle against a team of other players or computer-controlled champions. The goal is usually to destroy the opposing team's "nexus", a structure which lies at the heart of a base protected by defensive structures. Each League of Legends match is discrete, with all champions starting off fairly weak but increasing in strength by accumulating items and experience over the course of the game. <br> On our tournament you can watch 10 teams fight for the title King of the Summoner's Rift. There will be four tour where the teams will fight and show their best. Come and see if they are prepared for the new season's changes. Let's watch together the battle! </p>
</div>
<div id="div2">
    <img class="logota" src="Images/Hearthstone-Banner.png" onclick="show('hideable', 'div2')" />
    <p class="tourInfo">Hearthstone, originally known as Hearthstone: Heroes of Warcraft, is a free-to-play online collectible card video game developed and published by Blizzard Entertainment.The game is a turn-based card game between two opponents, using constructed decks of thirty cards along with a selected hero with a unique power. Players use mana points to cast spells or summon minions to attack the opponent, with the goal to reduce the opponent's health to zero. Winning matches can earn in-game gold, rewards in the form of new cards, and other in-game prizes. Players can then buy packs of new cards through gold or microtransactions to customize and improve their decks. The game features several modes of play, including casual and ranked matches, as well as daily quests and weekly challenges to help earn more gold and cards. New content for the game involves the addition of new card sets and gameplay, taking the form of either expansion packs or single-player adventures that reward the player with collectible cards upon completion.</p>
</div>
<div id="div3">
    <img class="logota" src="Images/Overwatch-Banner.png" style="height: 300px; width: 600px" onclick="show('hideable', 'div3')" />
    <p class="tourInfo">Overwatch is a team-based multiplayer first-person shooter video game developed and published by Blizzard Entertainment. Overwatch puts players into two teams of six, with each player selecting one of several pre-defined hero characters with unique movement, attributes, and abilities; these heroes are divided into four classes: Offense, Defense, Tank and Support. Players on a team work together to secure and defend control points on a map and/or escort a payload across the map in a limited amount of time. Players gain cosmetic rewards that do not affect gameplay, such as character skins and victory poses, as they continue to play in matches. The game was launched with casual play, while Blizzard added competitive ranked play about a month after launch. Additionally, Blizzard has developed and added new characters, maps, and game modes post-release, while stating that all Overwatch updates will remain free, with the only additional cost to players being microtransactions to earn additional cosmetic rewards.</p>
</div>
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
    function hide(id, hideId) {
        if (document.getElementById) {
            var divid = document.getElementById(id);
            var divs = document.getElementsByClassName(hideId);
            for (var i = 0; i < divs.length; i = i + 1) {
                $(divs[i]).fadeOut("slow");
            }
            divid.style.display = 'block';
            $(divid).fadeIn("slow");

        }
        return false;
    }

    function show(showId, id) {
        if (document.getElementById) {
            var divid = document.getElementById(id);
            var divs = document.getElementsByClassName(showId);

//            divid.style.display = 'block';
            $(divid).fadeOut("slow");
            for (var i = 0; i < divs.length; i = i + 1) {
                $(divs[i]).fadeIn("slow");
            }

        }
        return false;
    }
</script>
</html>