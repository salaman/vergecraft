@section('header')
<header class="jumbotron subhead" id="overview">
    <div class="container">
        <h1>Server Rules</h1>
        <!-- <p class="lead">Download a copy of the old world for yourself</p> -->
    </div>
</header>
@stop

@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="span3">
                <ul class="nav nav-tabs nav-stacked" data-spy="affix" data-offset-top="170" data-offset-bottom="155">
                    <li><a href="#basic-rules"><i class="icon-chevron-right"></i>Basic Rules</a></li>
                    <li><a href="#pvp-rules"><i class="icon-chevron-right"></i>PvP Rules</a></li>
                    <li class="nav-indent"><a href="#killing-looting"><i class="icon-chevron-right"></i>Killing &amp; Looting</a></li>
                    <li class="nav-indent"><a href="#player-made-structures"><i class="icon-chevron-right"></i>Player-made Structures</a></li>
                    <li><a href="#faction-rules"><i class="icon-chevron-right"></i>Factions Rules</a></li>
                    <li class="nav-indent"><a href="#basic-faction-rules"><i class="icon-chevron-right"></i>Basic Factions Rules</a></li>
                    <li class="nav-indent"><a href="#claiming-territory"><i class="icon-chevron-right"></i>Claiming Territory</a></li>
                    <li class="nav-indent"><a href="#peaceful-factions"><i class="icon-chevron-right"></i>Peaceful Factions</a></li>
                    <li><a href="#style-guide"><i class="icon-chevron-right"></i>Style Guide</a></li>
                </ul>
            </div>
            <div class="span9">
                <section id="basic-rules">
                    <div class="page-header">
                        <h2>Basic Rules</h2>
                    </div>
                    <ul>
                        <li>
                            <b>Be courteous.</b> Follow the same rules of the road in the Verge's community guidelines. That means no spam, illegal activities, porn, personal attacks, racism, or sexism.
                        </li>
                        <li>
                            <b>Don't advertise.</b> Please don't advertise your website, your Minecraft server, or anything else.
                        </li>
                        <li>
                            <b>Play fair. </b>Don't ask server admins to bend the rules: they are not allowed to spawn items or creatures, or teleport players between locations. Additionally, if you discover an exploit, please report it to server admins using the "/helpop" command. Players caught knowingly using exploits to gain an unfair advantage, or otherwise cheating, will be banned.
                        </li>
                    </ul>
                </section>

                <section id="pvp-rules">
                    <div class="page-header">
                        <h2>PvP Rules</h2>
                    </div>

                    <h3 id="killing-looting">Killing &amp; Looting</h3>
                    <p>Player-versus-player gameplay is a feature of Vergecraft Realms. For veterans of Vergecraft, this is the biggest change: players who build and travel in unclaimed "Wilderness" spaces are open to attack, and may be killed by other players. Players who are killed may have their possessions taken, and cannot use the "/back" command to return to the location of their death.</p>

                    <h3 id="player-made-structures">Player-made Structures</h3>
                    <p>Once you venture outside of the New Verge City safe-zone, you are exploring and building <em>at your own risk</em>. In Vergecraft Realms, structures in unclaimed Wilderness are "fair game" — it is not considered griefing for players to destroy them. Players that want to protect their lives, fortunes, and homesteads must band together in factions and claim territory: players are unable to destroy structures located in claimed territory, unless their factions are at war.</p>
                    <p>Faction leaders are responsible for policing griefing on their own by sub-dividing their faction claims. Faction leaders can protect the overall faction from internal griefing by assigning plots of land to specific members of the faction, and allowing specific owners to build in shared areas. Faction leaders are not required to use this system. (See the player guide below for more information on the factions system.)</p>
                </section>

                <section id="faction-rules">
                    <div class="page-header">
                        <h2>Factions Rules</h2>
                    </div>

                    <h3 id="basic-faction-rules">Basic Factions Rules</h3>

                    <ul>
                    <li>Players can't hurt fellow faction members or allies.</li>
                    <li>Players can't hurt neutral faction members in their own territory.</li>
                    <li>Enemies and players without a faction are always vulnerable, except in safe-zones.</li>
                    <li>Damage dealt to faction members in their own territory is reduced.</li>
                    <li>Only faction members can build and destroy in their own territory.</li>
                    <li>Non-peaceful factions can either be neutral, allies, or enemies with other factions. Ally status requires two factions to mutually agree to be allies. Factions can declare their enemies unilaterally.</li>
                    </ul>

                    <h3 id="claiming-territory">Claiming Territory</h3>

                    <p>Factions are not required to build in connected lands, and may claim territory from rivals as their power declines (more information on power and land claiming can be found in the player guide below). <b>Factions must have a minimum of 5 members to claim territory.</b></p>

                    <h3 id="peaceful-factions">Peaceful Factions</h3>

                    <p>Some players may want to completley remove themselves from player-versus-player gameplay, and can join or establish peaceful factions. Peaceful factions cannot become allies or enemies of other factions, and their members cannot damage or be damaged by other players. Additionally, peaceful factions cannot claim territory from other factions, and cannot have their own land claimed by other factions.</p>
                    <p>Faction leaders must request to become peaceful factions from a server admin using the "/helpop" command. Once made into a peaceful faction, there's no going back: factions that choose to become peaceful do so permanently.</p>
                </section>

                <section id="style-guide" class="section-last">
                    <div class="page-header">
                        <h2>Server Style Guide</h2>
                    </div>
                    <p>Vergecraft Realms does not enforce a specific texture pack or strictly define building styles, but there are some general rules:</p>
                    <ol>
                        <li>
                            <b>No floating platforms or sky cities.</b>
                            We just haven't achieved the technology.
                        </li>
                        <li>
                            <b>No single-block towers.</b>
                            These are really unsightly.
                        </li>
                        <li>
                            <b>No pixel art or symbols from the "real world."</b>
                            Those floating Pokemon pictures were pretty cool, but they're not for this world.
                        </li>
                    </ol>
                </section>
            </div>
        </div>
    </div>
</div>
@stop
