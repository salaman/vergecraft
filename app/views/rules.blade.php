@section('title')
    <title>Rules - Vergecraft</title>
@stop

@section('header')
<header class="jumbotron subhead" id="overview">
    <div class="container">
        <h1>Server Rules</h1>
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
                    <li><a href="#pve-rules"><i class="icon-chevron-right"></i>PvE Rules</a></li>
                    <li class="nav-indent"><a href="#pve-structures"><i class="icon-chevron-right"></i>Player-made Structures</a></li>
                    <li><a href="#pvp-rules"><i class="icon-chevron-right"></i>PvP Rules</a></li>
                    <li class="nav-indent"><a href="#killing-looting"><i class="icon-chevron-right"></i>Killing &amp; Looting</a></li>
                    <li class="nav-indent"><a href="#player-made-structures"><i class="icon-chevron-right"></i>Player-made Structures and Defensive Bonuses</a></li>
                    <li><a href="#faction-rules"><i class="icon-chevron-right"></i>Factions Rules</a></li>
                    <li class="nav-indent"><a href="#basic-faction-rules"><i class="icon-chevron-right"></i>Basic Factions Rules</a></li>
                    <li class="nav-indent"><a href="#claiming-territory"><i class="icon-chevron-right"></i>Claiming Territory</a></li>
                    <li><a href="#style-guide"><i class="icon-chevron-right"></i>Server Style Guide</a></li>
                </ul>
            </div>
            <div class="span9">
                <section id="basic-rules">
                    <div class="page-header">
                        <h2>Basic Rules</h2>
                    </div>
                    <ul>
                        <li>
                            <b>Be courteous.</b> Follow the same rules of the road in the Verge's <a href="http://www.theverge.com/community-guidelines" rel="nofollow">community guidelines</a>. That means no spam, illegal activities, porn, personal attacks, racism, or sexism.
                        </li>
                        <li>
                            <b>Don't advertise.</b> Please don't advertise your website, your Minecraft server, or anything else.
                        </li>
                        <li>
                            <b>Play fair.</b> Don't ask server admins to bend the rules: they are not allowed to spawn items or creatures, or teleport players between locations. Additionally, if you discover an exploit, please report it to server admins using the <code>/helpop</code> command. Players caught knowingly using exploits to gain an unfair advantage, or otherwise cheating, will be banned.
                        </li>
                        <li>
                            <b>Don't cheat.</b> No client-side mods other than Optifine and a minimap which does not reveal player locations may be used while online. No autoclickers are allowed.
                        </li>
                    </ul>
                </section>

                <section id="pve-rules">
                    <div class="page-header">
                        <h2>PvE Rules</h2>
                    </div>
                    <h3 id="pve-structures">Player-made Structures</h3>
                    <p><strong>Griefing is not allowed within Vergecraft's PvE world.</strong> The focus of this world is community building and players may protect what they build by forming peaceful factions and claiming land. Within your own territory members of non-faction players and other factions may not break/build, kill your animals or have access to unlocked chests unless you grant access using <code>/f access</code> to other players or factions.</p>
                    <div class="alert alert-error">
                        A structure that is not claimed is <strong>not</strong> open to griefing and players who do so <strong>will be punished</strong>. Factions in the PvE world is implemented as an assurance against griefing and <strong>not</strong> an excuse to grief unclaimed structures.
                    </div>
                    <p>Faction leaders may further decrease chances of griefing within their own territory by subdividing their faction claims. Faction leaders can protect the overall faction from internal griefing by assigning plots of land to specific members of the faction, and allowing specific owners to build in shared areas. Faction leaders are not required to use this system. (See the <a href="{{ URL::to('guide') }}">Player's Guide</a> for more information on the factions system.)</p>
                </section>

                <section id="pvp-rules">
                    <div class="page-header">
                        <h2>PvP Rules</h2>
                    </div>

                    <h3 id="killing-looting">Killing &amp; Looting</h3>
                    <p>Player-versus-player gameplay is a feature of Vergecraft's PvP world. Once you venture outside of the Safe Zone, you may kill other players who are in factions which you are not currently allied or at peace with. Factions may go to war and conquer each other's land should the other faction's power become depleted due to death(s) of the opposing faction's member(s). Keep in mind though that you are also open to being killed and conquered by other factions, so choose your enemies wisely and build strategically. Details on player power and power loss are in the <a href="{{ URL::to('guide') }}">Player's Guide</a> section of this site.</p>

                    <h3 id="player-made-structures">Player-made Structures and Defensive Bonuses</h3>
                    <p>To gain some protection both for your structures and yourself, remember to form a faction and claim what you build. Opposing faction members take damage when trying to break or build in your territory. You also gain a defensive bonus and take less damage when fighting in your own territory. Anything built in the Wilderness has no protection and no defensive bonus is awarded to any players fighting in this area.</p>
                </section>

                <section id="faction-rules">
                    <div class="page-header">
                        <h2>Factions Rules</h2>
                    </div>

                    <h3 id="basic-faction-rules">Basic Factions Rules</h3>

                    <ul>
                        <li>Players can't hurt fellow faction members or allies except in Warzones.</li>
                        <li>Players can't hurt neutral faction members in their own territory.</li>
                        <li>Damage dealt to faction members in their own territory is reduced.</li>
                        <li>Peaceful factions are immune to griefing and PVP (except in Warzones) by non-faction members.</li>
                        <li>Non-peaceful factions can either be neutral, allies, or enemies with other factions. Ally status requires two factions to mutually agree to be allies. Factions can declare their enemies unilaterally.</li>
                        <li>Factions at war can destroy land in each others’ territory but players attempting to do so will take damage.</li>
                    </ul>

                    <h3 id="claiming-territory">Claiming Territory</h3>

                    <p>Factions are not required to build in connected lands and may claim territory from rivals as their power declines (more information on power and land claiming can be found in the <a href="{{ URL::to('guide') }}">Player's Guide</a>). A map of the server which shows all claimed land as well as faction homes may be found <a href="{{ URL::to('//map.vergecraft.com') }}">here</a>.</p>
                </section>

                <section id="style-guide" class="section-last">
                    <div class="page-header">
                        <h2>Server Style Guide</h2>
                    </div>
                    <p>Vergecraft Realms does not enforce a specific texture pack or strictly define building styles. Building options remain open, however, server moderators have discretionary rights to remove the following if requested by the community at large:</p>
                    <ol>
                        <li><b>Floating structures.</b></li>
                        <li><b>Structures covered in lava.</b></li>
                        <li><b>Large structures built primarily of a single material.</b> (i.e. cobblestone, netherrack, dirt, etc.)</li>
                        <li><b>Single block towers.</b></li>
                    </ol>

                    <p>Be considerate when choosing where to build and what to build with and give your neighbors plenty of space.</p>
                    <p>The following rules will be <strong>strictly enforced</strong>:</p>
                    <ol>
                        <li><b>No pixel art.</b></li>
                        <li><b>Floating structures in the PvP world are prohibited to ensure fair combat.</b></li>
                    </ol>
                </section>
            </div>
        </div>
    </div>
</div>
@stop
