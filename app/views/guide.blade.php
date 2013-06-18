@section('title')
    <title>Player's Guide - Vergecraft</title>
@stop

@section('header')
<header class="jumbotron subhead" id="overview">
    <div class="container">
        <h1>Player's Guide</h1>
    </div>
</header>
@stop

@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="span3">
                <ul class="nav nav-tabs nav-stacked" data-spy="affix" data-offset-top="170" data-offset-bottom="155">
                    <li><a href="#about-this-guide"><i class="icon-chevron-right"></i>About this Guide</a></li>
                    <li><a href="#basic-permissions-commands"><i class="icon-chevron-right"></i>Basic Permissions &amp; Commands</a></li>
                    <li class="nav-indent"><a href="#chests-item-locking"><i class="icon-chevron-right"></i>Chests &amp; Item Locking</a></li>
                    <li><a href="#new-verge-city"><i class="icon-chevron-right"></i>New Verge City</a></li>
                    <li><a href="#factions"><i class="icon-chevron-right"></i>Factions</a></li>
                    <li class="nav-indent"><a href="#basic-factions-commands"><i class="icon-chevron-right"></i>Basic Factions Commands</a></li>
                    <li class="nav-indent"><a href="#player-faction-power"><i class="icon-chevron-right"></i>Player &amp; Faction Power</a></li>
                    <li class="nav-indent"><a href="#starting-a-faction"><i class="icon-chevron-right"></i>Starting a Faction</a></li>
                    <li class="nav-indent"><a href="#claiming-territory"><i class="icon-chevron-right"></i>Claiming Territory</a></li>
                    <li class="nav-indent"><a href="#protecting-territory"><i class="icon-chevron-right"></i>Protecting Territory from Faction Members and Allies</a></li>
                    <li class="nav-indent"><a href="#diplomacy"><i class="icon-chevron-right"></i>Diplomacy</a></li>
                </ul>
            </div>
            <div class="span9">
                <section id="about-this-guide">
                <h2>About this Guide</h2>
                <p>This guide contains information about the special functions and commands in Vergecraft Realms. For strategy and other basic tips, check out this beginner's guide in<a href="http://www.minecraftwiki.net/wiki/Tutorials/Beginner's_guide" target="_blank" rel="nofollow"> the Minecraft Wiki</a>.</p>
                </section>

                <div class="page-header">
                    <h2 id="basic-permissions-commands">Basic Permissions &amp; Commands</h2>
                </div>
                <ul>
                    <li>
                        <b>/spawn</b> Returns players to the central plaza at New Verge City
                    </li>
                    <li>
                        <b>/home</b> Returns players to their bed, unless it has been destroyed.
                    </li>
                    <li>
                        <b>/f home</b> Returns players to their Faction's spawn point.
                    </li>
                    <li>
                        <b>/dynmap (hide,show)</b> Enables or disables your visibility in the Vergecraft Realms dynamic map.
                    </li>
                    <li>
                        <b>/list</b> Lists players currently online.
                    </li>
                    <li>
                        <b>/time</b> Displays the current time.
                    </li>
                    <li>
                        <b>/mail</b> Allows players to read or send in-game mail to other players.
                    </li>
                    <li>
                        <b>/helpop </b>Sends a message to server admins.
                    </li>
                </ul>

                <h3><span id="chests-item-locking"></span>Chests &amp; Item Locking</h3>
                <p>You can lock your chests, and other items like furnaces and dispensers, using the following commands:</p>
                <ul>
                    <li>
                        <b>/lwc </b>Opens a help menu for the chest locking plugin.
                    </li>
                    <li>
                        <b>/cprivate </b>Creates a private protection for your chest.
                    </li>
                    <li>
                        <b>/cpassword </b>Password-protects a chest. Anybody with the password can open it.
                    </li>
                    <li>
                        <b>/cpublic </b>Creates a public chest.
                    </li>
                    <li>
                        <b>/cremove </b>Removes protection on a protected item that you own.
                    </li>
                    <li>
                        <b>/cunlock [password] </b>Attempt to gain access to a password-protected object.
                    </li>
                </ul>

                <div class="page-header">
                    <h2 id="new-verge-city">New Verge City</h2>
                </div>
                <p>New Verge City is the central, neutral safe-zone where all players begin their journey. The city features a number of attractions and utilities, including a library, hospital, End portal, harbor, marketplace, Spleef arena, and more. Players can travel through the city using the local subway system, roads and paths, or the canal system which connects the harbor to the Western river.</p>
                <p>All players can return to New Verge City with the "/spawn" command.</p>

                <div class="page-header">
                    <h2 id="factions">Factions</h2>
                </div>
                <p>Factions enables players to band together to protect their territory, and establish allies and enemies. All factions commands can be accessed with the "<b>/f</b>" command.</p>

                <h3><span id="basic-factions-commands"></span>Basic Factions Commands</h3>
                <ul>
                    <li>
                        <b>/f help </b>In-game help for Factions.
                    </li>
                    <li>
                        <b>/f map (on, off) </b>Enables or disables an ASCII map of nearby territory.
                    </li>
                </ul>

                <h3><span id="player-faction-power"></span>Player &amp; Faction Power</h3>
                <p>Each player has their own "power level," which directly determines the amount of land they can claim and protect. For each unit of power, a player may claim and protect one chunk of land. All players have a maximum of 200 power, and can claim up to 200 chunks of land.</p>
                <p>All players lose power when they die, and regain it automatically over time. Players always lose power when they die, regardless of how they were killed.</p>
                <p>Faction power is simply the sum of the power of all of its members. A five-person faction has a power of 1,000. To prevent any single faction from dominating the game, each faction has a limit of 20,000 power. That means that factions will stop gaining additional power when they expand beyond 100 members.</p>

                <h3><span id="starting-a-faction"></span>Starting a Faction</h3>
                <p>Any player can create a faction by using the "<b>/f create [faction name]</b>" command. Once created, leaders can use these commands to manage their factions:</p>
                <ul>
                    <li>
                        <b>/f desc </b>Changes the faction description.
                    </li>
                    <li>
                        <b>/f tag [faction name] </b>Changes the faction name.
                    </li>
                    <li>
                        <b>/f open </b>Toggles whether your faction requires an invitation to join.
                    </li>
                    <li>
                        <b>/f invite [player name] </b>Invites a player to your faction.
                    </li>
                    <li>
                        <b>/f deinvite [player name] </b>Cancels a pending invitation.
                    </li>
                    <li>
                        <b>/f kick [player name] </b>Removes a player from the faction.
                    </li>
                    <li>
                        <b>/f sethome </b>Sets the location that players will arrive at when using the "/f home" command.
                    </li>
                    <li>
                        <b>/f mod [player name] </b>Grants or revokes moderator privileges to a member of the faction (faction admins only).
                    </li>
                    <li>
                        <b>/f title [player name] </b>Creates or removes a decorative player title.
                    </li>
                </ul>

                <h3><span id="claiming-territory"></span>Claiming Territory</h3>
                <p>Only factions with 5 or more members may claim territory. The basic claimable unit of territory is the Minecraft "chunk:" a 16 x 16 block rectangular cube that extends from the bottom of the world to the top. Once claimed, a faction owns the entirety of the chunk. To claim territory, faction leaders can use the following commands:</p>
                <ul>
                    <li>
                        <b>/f claim </b>Claims one "chunk" of land where the player is standing.
                    </li>
                    <li>
                        <b>/f claim [radius] </b>Claims land around where the player is standing, to the radius specified (for example: "/f claim 10" will attempt to claim a square of land with a radius of 10 chunks, a total of 400 chunks).
                    </li>
                    <li>
                        <b>/f unclaim </b>Unclaims the chunk the player is standing on from the Faction's territory.
                    </li>
                </ul>

                <h3><span id="protecting-territory"></span>Protecting Territory from Faction Members and Allies</h3>
                <p>Larger factions with members who are strangers may want to further protect their faction territory. Faction leaders can do this by subdividing faction territory with owners: this allows leaders to give members specific plots of land, and to allow groups of people ownership of various areas (for example, a faction leader might give their officers the ability to build and destroy in shared areas of that faction's city).</p>
                <ul>
                    <li>
                        <b>/f owner [player name] </b>Establishes or removes ownership of the chunk the player is standing on. If no player is named, it will set ownership to the player using the command, or if owners are currently set, it will clear the chunk of owners.
                    </li>
                    <li>
                        <b>/f ownerlist </b>Shows a list of owners of the current chunk.
                    </li>
                </ul>

                <h3><span id="diplomacy"></span>Diplomacy</h3>
                <p>Factions may become formal allies with other groups, and declare enemies.</p>
                <ul>
                    <li>
                        <b>/f ally [faction name] </b>Proposes an alliance with the named faction. Both factions must agree to become allies.
                    </li>
                    <li>
                        <b>/f enemy [faction name] </b>Declares a faction an enemy. Factions can declare enemies unilaterally.
                    </li>
                    <li>
                        <b>/f neutral [faction name] </b>Cancels an alliance or removes an enemy status.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop
