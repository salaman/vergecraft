
@section('content')
<div class="content content-large">
    <div class="container">
        <div class="row">
            <ul class="thumbnails">
                <li class="span3">
                    <a href="img/2013-04-28_17.51.56.jpg" class="thumbnail">
                        <img src="img/2013-04-28_17.51.56-thumb.png" alt="Server Spawn">
                    </a>
                </li>
                <li class="span3">
                    <a href="img/2013-04-28_17.49.29.jpg" class="thumbnail">
                        <img src="img/2013-04-28_17.49.29-thumb.png" alt="Castle">
                    </a>
                </li>
                <li class="span3">
                    <a href="img/2013-04-28_17.54.38.jpg" class="thumbnail">
                        <img src="img/2013-04-28_17.54.38-thumb.png" alt="Iron Farm">
                    </a>
                </li>
                <li class="span3">
                    <a href="img/2013-04-28_17.49.54.jpg" class="thumbnail">
                        <img src="img/2013-04-28_17.49.54-thumb.png" alt="Village">
                    </a>
                </li>

            </ul>
        </div>
        <div class="row">
            <div class="span12">
                <p>
                    Vergecraft Realms is a competitive, survival-based Minecraft server.
                    In addition to the basic survival mode of Minecraft, players may gather together to <strong>form factions</strong>, <strong>claim territory</strong>, <strong>forge alliances</strong>, <strong>wage war</strong>, and <strong>build their own civilizations</strong>.
                    Or, they can explore at their own risk in the Wilderness, dodging creatures and crafty human bandits.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="content content-large content-dark">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="address">
                    <p>Ready to play? Connect to</p>
                    <div class="address-url">
                        <p>mc.vergecraft.com</p>
                    </div>
                </div>
                <div class="quicklinks">
                    <p>
                        Not whitelisted? <a href="http://www.theverge.com/2012/9/15/3336118/vergecraft-realms-request-to-join-the-game-here">Click here to apply</a>
                        &nbsp;&bull;
                        Read our <a href="{{ URL::to('rules') }}">rules</a> and <a href="{{ URL::to('guide') }}">player's guide</a>
                    </p>
                </div>
                <div class="status">
                    @if ($success)
                        <p>You'll need Minecraft <strong>{{ $version }}</strong> to connect.</p>
                        <p><i class="icon-ok"></i> Server up with {{ $players }} player{{ $players == 1 ? '' : 's' }} online.</p>
                    @else
                        <p><i class="icon-remove"></i> Uh oh! The server appears to be down. Check back later!</p>
                    @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop