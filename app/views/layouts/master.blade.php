<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vergecraft</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css?0.8.9">
    <link rel="stylesheet" type="text/css" href="css/master.css">
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-41367211-1', 'vergecraft.com');
        ga('send', 'pageview');
    </script>
</head>
<body>
    <!-- Navigation bar -->
    <div class="navbar navbar-fixed-top navbar-inverse navbar-blue">
        <div class="navbar-inner">
            <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="brand {{ Request::is('/') ? 'active' : '' }}" href="{{ URL::to('/') }}">Vergecraft Realms</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <!-- <li class="{{ Request::is('map') ? 'active' : '' }}"><a href="{{ URL::to('map') }}">Server Map</a></li> -->
                        <li><a href="http://map.vergecraft.com">Server Map</a></li>
                        <li class="{{ Request::is('staff') ? 'active' : '' }}"><a href="{{ URL::to('staff') }}">Staff</a></li>
                        <li class="{{ Request::is('rules') ? 'active' : '' }}"><a href="{{ URL::to('rules') }}">Rules</a></li>
                        <li class="{{ Request::is('guide') ? 'active' : '' }}"><a href="{{ URL::to('guide') }}">Player's Guide</a></li>
                        <li class="{{ Request::is('oldworld') ? 'active' : '' }}"><a href="{{ URL::to('oldworld') }}">Old World Download</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Page image header -->
    @section('header')
    <header class="jumbotron masthead">
        <div class="container">
            <h1>Vergecraft Realms</h1>
            <p class="lead">A survival-based Factions server by The Verge</p>
        </div>
    </header>
    @show

    <!-- Main content -->
    @yield('content')

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <footer>
                <div class="row">
                    <div class="span8">
                        <p>Server owned and operated by <a href="http://www.theverge.com/">The Verge</a></p>
                        <p><i class="icon-heart icon-white"></i>&nbsp;<a href="http://tom.vergecraft.com">Aquaman_Tom</a></p>
                    </div>
                    <div class="span4 text-right social">
                        <a href="https://twitter.com/VergecraftRealm" target="_blank" rel="nofollow"><img src="img/twitter-64.png" alt="Twitter" /></a>
                        <a href="http://reddit.com/r/vergecraft" target="_blank" rel="nofollow"><img src="img/reddit-64.png" alt="Reddit" /></a>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Javascript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js?0.8.9"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        // Initialize Magnific lightboxes
        $('.thumbnail').magnificPopup({type:'image'});
    });
    </script>
</body>
</html>