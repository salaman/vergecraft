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
                    <li><a href="#zones"><i class="icon-chevron-right"></i>Zones</a></li>
                    <li class="nav-indent"><a href="#safe-zone"><i class="icon-chevron-right"></i>Safe Zone</a></li>
                    <li class="nav-indent"><a href="#verge-city"><i class="icon-chevron-right"></i>Verge City</a></li>
                    <li class="nav-indent"><a href="#war-zone"><i class="icon-chevron-right"></i>Warzone</a></li>
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

                <div class="alert alert-error">
                    Words in commands shown <code>[between square braces]</code> are meant to be replaced with your own information. Do not include the square braces!
                </div>

                <div class="page-header">
                    <h2 id="basic-permissions-commands">Basic Permissions &amp; Commands</h2>
                </div>
                <ul>
                    <li>
                        <code>/spawn</code> Returns players to the central plaza at New Verge City
                    </li>
                    <li>
                        <code>/home</code> Returns players to their bed, unless it has been destroyed.
                    </li>
                    <li>
                        <code>/f home</code> Returns players to their Faction's spawn point.
                    </li>
                    <li>
                        <code>/dynmap [hide/show]</code> Enables or disables your visibility in the Vergecraft Realms dynamic map.
                    </li>
                    <li>
                        <code>/list</code> Lists players currently online.
                    </li>
                    <li>
                        <code>/time</code> Displays the current time.
                    </li>
                    <li>
                        <code>/mail</code> Allows players to read or send in-game mail to other players.
                    </li>
                    <li>
                        <code>/helpop</code> Sends a message to server admins.
                    </li>
                </ul>

                <h3><span id="chests-item-locking"></span>Chests &amp; Item Locking</h3>
                <p>You can lock your chests, and other items like furnaces and dispensers, using the following commands:</p>
                <ul>
                    <li>
                        <code>/lwc</code> Opens a help menu for the chest locking plugin.
                    </li>
                    <li>
                        <code>/lock</code> Creates a private protection for your chest.
                    </li>
                    <li>
                        <code>/cpassword</code> Password-protects a chest. Anybody with the password can open it.
                    </li>
                    <li>
                        <code>/cpublic</code> Creates a public chest.
                    </li>
                    <li>
                        <code>/unlock</code> Removes protection on a protected item that you own.
                    </li>
                    <li>
                        <code>/cunlock [password]</code> Attempt to gain access to a password-protected object.
                    </li>
                </ul>

                <div class="page-header">
                    <h2 id="zones">Zones</h2>
                </div>

                <h3><span id="safe-zone"></span>Safe Zone</h3>
                <p>The Safe Zone is a protected area encompassing spawn where all players begin their journey. It also contains public portals and roads. This area is neutral and players cannot build here or harm other players.</p>
                <p>All players can return to New Verge City with the <code>/spawn</code> command.</p>

                <h3><span id="verge-city"></span>Verge City</h3>
                <p>Verge City is the central, community area surrounding PvE starting area. It cannot be claimed by any single faction. This portion of the PvE map is managed by the community as a whole and policed by server moderators and players. Players can work on builds oriented towards the community either for their utility or aesthetic qualities.</p>
                <p>Before building in this area players should read the server style guide and keep several things in mind. This area cannot be claimed and no official plot system exists. Players wishing to build here should clearly mark their build area with fences or other easily identifiable blocks and any items should be locked in a chest at the intended build site, both for protection and as a way for players to check who is building. Builds which go extended periods of time without being completed may be removed.</p>

                <h3><span id="war-zone"></span>Warzone</h3>
                <p>The Warzone surrounding the PvP starter area is considered hostile territory. Players can harm and be harmed by other players here. Players cannot claim this land or build in this area.</p>

                <div class="page-header">
                    <h2 id="factions">Factions</h2>
                </div>
                <p>Factions enables players to band together to protect their territory, and establish allies and enemies. All factions commands can be accessed with the "<b>/f</b>" command.</p>

                <h3><span id="basic-factions-commands"></span>Basic Factions Commands</h3>
                <ul>
                    <li>
                        <code>/f help</code> In-game help for Factions.
                    </li>
                    <li>
                        <code>/f map [on/off]</code> Enables or disables an ASCII map of nearby territory.
                    </li>
                </ul>

                <h3><span id="player-faction-power"></span>Player &amp; Faction Power</h3>
                <p>Each player has their own "power level," which directly determines the amount of land they can claim and protect. For each unit of power, a player may claim and protect one chunk of land. </p>
                <div class="alert alert-info">
                    Players in the <strong>PvE</strong> world have a maximum of 50 power and can claim up to <strong>50 chunks of land</strong>.
                </div>
                <div class="alert">
                    Players in the <strong>PvP</strong> world have a maximum of 15 power and can claim up to <strong>15 chunks of land</strong>.
                </div>
                <p>Players dying to PvP battle lose 2 power when they die, and regain it automatically over time. All deaths in the PvP world result in a 2 power loss.</p>
                <p>In order to encourage competition on a limited map size, the faction member count in the PvP world is set capped at 5, and thus power is capped at 75.</p>

                <h3><span id="starting-a-faction"></span>Starting a Faction</h3>
                <p>Any player can create a faction by using the <code>/f create [faction name]</code> command. Once created, leaders can use these commands to manage their factions:</p>
                <ul>
                    <li>
                        <code>/f desc</code> Changes the faction description.
                    </li>
                    <li>
                        <code>/f name [faction name]</code> Changes the faction name.
                    </li>
                    <li>
                        <code>/f open</code> Toggles whether your faction requires an invitation to join.
                    </li>
                    <li>
                        <code>/f invite [player name]</code> Invites a player to your faction.
                    </li>
                    <li>
                        <code>/f kick [player name]</code> Removes a player from the faction.
                    </li>
                    <li>
                        <code>/f sethome</code> Sets the location that players will arrive at when using the "/f home" command.
                    </li>
                    <li>
                        <code>/f officer [player name]</code> Grants or revokes moderator privileges to a member of the faction (faction leader only).
                    </li>
                    <li>
                        <code>/f leader [player name]</code> Gives leadership of the faction to a new member (faction leader only).
                    </li>
                    <li>
                        <code>/f title [player name]</code> Creates or removes a decorative player title.
                    </li>
                </ul>

                <h3><span id="claiming-territory"></span>Claiming Territory</h3>
                <p>Only factions with 5 or more members may claim territory. The basic claimable unit of territory is the Minecraft "chunk:" a 16 x 16 block rectangular cube that extends from the bottom of the world to the top. Once claimed, a faction owns the entirety of the chunk. To claim territory, faction leaders can use the following commands:</p>
                <ul>
                    <li>
                        <code>/f claim</code> Claims one "chunk" of land where the player is standing.
                    </li>
                    <li>
                        <code>/f claim [radius]</code> Claims land around where the player is standing, to the radius specified (for example: <code>/f claim 10</code> will attempt to claim a square of land with a radius of 10 chunks, a total of 400 chunks).
                    </li>
                    <li>
                        <code>/f unclaim</code> Unclaims the chunk the player is standing on from the Faction's territory.
                    </li>
                </ul>
                <div class="alert alert-error">
                    <strong>Watch out!</strong> Claims with a radius are larger than you may think! Start with a tiny radius and work up gradually.
                </div>

                <h3><span id="protecting-territory"></span>Protecting Territory from Faction Members and Allies</h3>
                <p>Larger factions with members who are strangers may want to further protect their faction territory. Faction leaders can do this by subdividing faction territory with owners: this allows leaders to give members specific plots of land, and to allow groups of people ownership of various areas (for example, a faction leader might give their officers the ability to build and destroy in shared areas of that faction's city).</p>
                <ul>
                    <li>
                        <code>/f access</code> Allows a specific player or faction access to a chunk of claimed land. See <a href="http://www.massivecraft.com/factions#land" target="_blank" rel="nofollow">the official Factions guide</a> for more specific instructions.
                    </li>
                </ul>

                <h3><span id="diplomacy"></span>Diplomacy</h3>
                <p>Factions may become formal allies with other groups, and declare enemies.</p>
                <ul>
                    <li>
                        <code>/f ally [faction name]</code> Proposes an alliance with the named faction. Both factions must agree to become allies. Allied factions can build and open containers inside your faction land.
                    </li>
                    <li>
                        <code>/f truce [faction name]</code> Proposes a truce with the named faction. Both factions must agree to truce.
                    </li>
                    <li>
                        <code>/f enemy [faction name]</code> Declares a faction an enemy. Factions can declare enemies unilaterally.
                    </li>
                    <li>
                        <code>/f neutral [faction name]</code> Cancels an alliance or removes an enemy status.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop
