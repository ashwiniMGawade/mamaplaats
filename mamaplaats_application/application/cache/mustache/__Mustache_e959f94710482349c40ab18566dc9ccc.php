<?php

class __Mustache_e959f94710482349c40ab18566dc9ccc extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div id="profile">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-3">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="profile-side-holder">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="side-menu-holder">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="#" class="opener">Side menu</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                    <div class="side-menu">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <div class="avatar-holder clearfix">';
        $buffer .= "\n";
        $buffer .= $indent . '                            <div class="img-holder pull-left">';
        $buffer .= "\n";
        $buffer .= $indent . '                                <img src="/image/avatar/1_140x120.png" alt="Mamaplaats" width="70" height="70" class="img-circle">';
        $buffer .= "\n";
        $buffer .= $indent . '                            </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                            <div class="text-holder">';
        $buffer .= "\n";
        $buffer .= $indent . '                                <div class="holder">';
        $buffer .= "\n";
        $buffer .= $indent . '									<span class="name">Mamaplaats</span>';
        $buffer .= "\n";
        $buffer .= $indent . '									<span class="info">Mama blogger</span>';
        $buffer .= "\n";
        $buffer .= $indent . '								</div>';
        $buffer .= "\n";
        $buffer .= $indent . '                            </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                        </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                        <a class="btn" href="/user/blog/index" role="button">Blog bericht schrijven</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                        <nav class="ad-menu">';
        $buffer .= "\n";
        $buffer .= $indent . '                            <strong class="title">Profiel</strong>';
        $buffer .= "\n";
        $buffer .= $indent . '                            <div class="list-group">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/profile" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Mijn startpagina';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/update/personal_info" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Persoonsgegevens';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/update/family_situation" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Gezinssituatie';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/update/interest" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Mijn interesses';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/update/own_detail" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Over jezelf';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/update/newsletter_settings" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Nieuwsbrief';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/update/change_password" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Wachtwoord wijzigen';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                            </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                        </nav>';
        $buffer .= "\n";
        $buffer .= $indent . '                        <nav class="ad-menu">';
        $buffer .= "\n";
        $buffer .= $indent . '                            <strong class="title">Blogs</strong>';
        $buffer .= "\n";
        $buffer .= $indent . '                            <div class="list-group">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/blog/index" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Blog bericht schrijven';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/blog/list" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Mijn Blogs';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/blog/list/concepts" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Mijn concepten';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/blog/most_read" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Meest gelezen blogs';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/blog/admin_blogs" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Blogs van Mamaplaats';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/blog/following" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                     Blogs van moeders die ik volg';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                            </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                        </nav>';
        $buffer .= "\n";
        $buffer .= $indent . '                        <nav class="ad-menu">';
        $buffer .= "\n";
        $buffer .= $indent . '                            <strong class="title">Volgen</strong>';
        $buffer .= "\n";
        $buffer .= $indent . '                            <div class="list-group">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/follow/following" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Moeders die ik volg';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/follow/followers" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Moeders die mij volgen';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/follow/suggestions" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Nieuwe moeders volgen';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                            </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                        </nav>';
        $buffer .= "\n";
        $buffer .= $indent . '                        <nav class="ad-menu">';
        $buffer .= "\n";
        $buffer .= $indent . '                            <strong class="title">Berichten</strong>';
        $buffer .= "\n";
        $buffer .= $indent . '                            <div class="list-group">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/conversation/new" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Schrijf bericht';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/conversation/list?type=inbox" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Postvak in';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <span class="amount">(5)</span>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/conversation/list?type=outbox" class="list-group-item active">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Postvak uit';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/conversation/list?type=draft" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Concepten';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                            </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                        </nav>';
        $buffer .= "\n";
        $buffer .= $indent . '                        <nav class="ad-menu">';
        $buffer .= "\n";
        $buffer .= $indent . '                            <strong class="title">Testpanel</strong>';
        $buffer .= "\n";
        $buffer .= $indent . '                            <div class="list-group">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/review-products/suggestions" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Schrijf je in voor een testpanel';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/review-products/subscribed" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Reeds voor ingeschreven';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                            </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                        </nav>';
        $buffer .= "\n";
        $buffer .= $indent . '                        <nav class="ad-menu">';
        $buffer .= "\n";
        $buffer .= $indent . '                            <strong class="title">Winacties</strong>';
        $buffer .= "\n";
        $buffer .= $indent . '                            <div class="list-group">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/win/suggestions" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Schrijf je in voor een winactie';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/win/subscribed" class="list-group-item ">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    Reeds voor ingeschreven';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                            </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                        </nav>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-9">';
        $buffer .= "\n";
        $buffer .= $indent . '			<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="btns">';
        $buffer .= "\n";
        $buffer .= $indent . '		<a href="/conversation/new" class="btn">nieuw bericht</a>';
        $buffer .= "\n";
        $buffer .= $indent . '		<button class="btn alt" onclick="document.getElementById(\'message_list\').submit();">verwijderen</button>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<h1>Berichten</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '</header>';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="check-list">';
        $buffer .= "\n";
        $buffer .= $indent . '	<form id="message_list" method="post">';
        $buffer .= "\n";
        $buffer .= $indent . '		<fieldset>';
        $buffer .= "\n";
        $buffer .= $indent . '			<label class="item alt">';
        $buffer .= "\n";
        $buffer .= $indent . '				<input type="checkbox" name="partner_ids[]" value="576" >';
        $buffer .= "\n";
        $buffer .= $indent . '				<span class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="/conversation/index/576" class="photo-wrap">';
        $buffer .= "\n";
        $buffer .= $indent . '						<b><img src="/image/avatar/default_70x70.png" width="70" height="70" alt="tessa021182"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '					</a>';
        $buffer .= "\n";
        $buffer .= $indent . '				</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				<span class="description">';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="wrap">';
        $buffer .= "\n";
        $buffer .= $indent . '						<time datetime="2015-07-20 11:02:27">Monday 20 Jul 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '						<strong class="title">';
        $buffer .= "\n";
        $buffer .= $indent . '							<a href="/conversation/index/576">';
        $buffer .= "\n";
        $buffer .= $indent . '								tessa021182';
        $buffer .= "\n";
        $buffer .= $indent . '							</a>';
        $buffer .= "\n";
        $buffer .= $indent . '						</strong>';
        $buffer .= "\n";
        $buffer .= $indent . '					</span>';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="text">hi this it the outbox message to u....</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</span>';
        $buffer .= "\n";
        $buffer .= $indent . '			</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			<label class="item alt">';
        $buffer .= "\n";
        $buffer .= $indent . '				<input type="checkbox" name="partner_ids[]" value="95" >';
        $buffer .= "\n";
        $buffer .= $indent . '				<span class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="/conversation/index/95" class="photo-wrap">';
        $buffer .= "\n";
        $buffer .= $indent . '						<b><img src="/image/avatar/default_70x70.png" width="70" height="70" alt="testtestest"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '					</a>';
        $buffer .= "\n";
        $buffer .= $indent . '				</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				<span class="description">';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="wrap">';
        $buffer .= "\n";
        $buffer .= $indent . '						<time datetime="2015-07-16 14:20:58">Thursday 16 Jul 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '						<strong class="title">';
        $buffer .= "\n";
        $buffer .= $indent . '							<a href="/conversation/index/95">';
        $buffer .= "\n";
        $buffer .= $indent . '								testtestest';
        $buffer .= "\n";
        $buffer .= $indent . '							</a>';
        $buffer .= "\n";
        $buffer .= $indent . '						</strong>';
        $buffer .= "\n";
        $buffer .= $indent . '					</span>';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="text">test me without concepten...</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</span>';
        $buffer .= "\n";
        $buffer .= $indent . '			</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			<label class="item alt">';
        $buffer .= "\n";
        $buffer .= $indent . '				<input type="checkbox" name="partner_ids[]" value="1" >';
        $buffer .= "\n";
        $buffer .= $indent . '				<span class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="/conversation/index/1" class="photo-wrap">';
        $buffer .= "\n";
        $buffer .= $indent . '						<b><img src="/image/avatar/1_70x70.png" width="70" height="70" alt="Mamaplaats"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '					</a>';
        $buffer .= "\n";
        $buffer .= $indent . '				</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				<span class="description">';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="wrap">';
        $buffer .= "\n";
        $buffer .= $indent . '						<time datetime="2015-07-20 17:10:12">Monday 20 Jul 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '						<strong class="title">';
        $buffer .= "\n";
        $buffer .= $indent . '							<a href="/conversation/index/1">';
        $buffer .= "\n";
        $buffer .= $indent . '								Mamaplaats';
        $buffer .= "\n";
        $buffer .= $indent . '							</a>';
        $buffer .= "\n";
        $buffer .= $indent . '						</strong>';
        $buffer .= "\n";
        $buffer .= $indent . '					</span>';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="text">test me here...</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</span>';
        $buffer .= "\n";
        $buffer .= $indent . '			</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			<label class="item alt">';
        $buffer .= "\n";
        $buffer .= $indent . '				<input type="checkbox" name="partner_ids[]" value="59136" >';
        $buffer .= "\n";
        $buffer .= $indent . '				<span class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="/conversation/index/59136" class="photo-wrap">';
        $buffer .= "\n";
        $buffer .= $indent . '						<b><img src="/image/avatar/59136_70x70.png" width="70" height="70" alt="layla1983"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '					</a>';
        $buffer .= "\n";
        $buffer .= $indent . '				</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				<span class="description">';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="wrap">';
        $buffer .= "\n";
        $buffer .= $indent . '						<time datetime="2013-10-22 08:51:01">Tuesday 22 Oct 2013</time>';
        $buffer .= "\n";
        $buffer .= $indent . '						<strong class="title">';
        $buffer .= "\n";
        $buffer .= $indent . '							<a href="/conversation/index/59136">';
        $buffer .= "\n";
        $buffer .= $indent . '								layla1983';
        $buffer .= "\n";
        $buffer .= $indent . '							</a>';
        $buffer .= "\n";
        $buffer .= $indent . '						</strong>';
        $buffer .= "\n";
        $buffer .= $indent . '					</span>';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="text">Hoi Layla, Als het goed is ontvang je een mail wanneer je het hebt gewijzigd en dan moet je in de mail bevestigen dat je het wilt aanpassen. Dit is ee...</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</span>';
        $buffer .= "\n";
        $buffer .= $indent . '			</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			<label class="item alt">';
        $buffer .= "\n";
        $buffer .= $indent . '				<input type="checkbox" name="partner_ids[]" value="28355" >';
        $buffer .= "\n";
        $buffer .= $indent . '				<span class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="/conversation/index/28355" class="photo-wrap">';
        $buffer .= "\n";
        $buffer .= $indent . '						<b><img src="/image/avatar/28355_70x70.png" width="70" height="70" alt="braamn"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '					</a>';
        $buffer .= "\n";
        $buffer .= $indent . '				</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				<span class="description">';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="wrap">';
        $buffer .= "\n";
        $buffer .= $indent . '						<time datetime="2013-09-30 08:52:53">Monday 30 Sep 2013</time>';
        $buffer .= "\n";
        $buffer .= $indent . '						<strong class="title">';
        $buffer .= "\n";
        $buffer .= $indent . '							<a href="/conversation/index/28355">';
        $buffer .= "\n";
        $buffer .= $indent . '								braamn';
        $buffer .= "\n";
        $buffer .= $indent . '							</a>';
        $buffer .= "\n";
        $buffer .= $indent . '						</strong>';
        $buffer .= "\n";
        $buffer .= $indent . '					</span>';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="text">Hoi Nienke,';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . 'Ik heb je net gemaild, maar je inbox is vol. Hopelijk zie je het op deze manier. Anders bel ik je nog wel.';
        $buffer .= "\n";
        $buffer .= $indent . 'Je hoeft in ieder geval de lap...</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</span>';
        $buffer .= "\n";
        $buffer .= $indent . '			</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			<label class="item alt">';
        $buffer .= "\n";
        $buffer .= $indent . '				<input type="checkbox" name="partner_ids[]" value="45029" >';
        $buffer .= "\n";
        $buffer .= $indent . '				<span class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="/conversation/index/45029" class="photo-wrap">';
        $buffer .= "\n";
        $buffer .= $indent . '						<b><img src="/image/avatar/default_70x70.png" width="70" height="70" alt="Stuiter"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '					</a>';
        $buffer .= "\n";
        $buffer .= $indent . '				</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				<span class="description">';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="wrap">';
        $buffer .= "\n";
        $buffer .= $indent . '						<time datetime="2013-09-30 08:56:13">Monday 30 Sep 2013</time>';
        $buffer .= "\n";
        $buffer .= $indent . '						<strong class="title">';
        $buffer .= "\n";
        $buffer .= $indent . '							<a href="/conversation/index/45029">';
        $buffer .= "\n";
        $buffer .= $indent . '								Stuiter';
        $buffer .= "\n";
        $buffer .= $indent . '							</a>';
        $buffer .= "\n";
        $buffer .= $indent . '						</strong>';
        $buffer .= "\n";
        $buffer .= $indent . '					</span>';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="text">Hoi Stuiter,';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . 'Er gaat iets fout met het design, maar in dat kleine blokje kun je jouw blog typen. Dat blokje';
        $buffer .= "\n";
        $buffer .= $indent . 'boven de afbeelding. Aan de rechterkant e...</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</span>';
        $buffer .= "\n";
        $buffer .= $indent . '			</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			<label class="item alt">';
        $buffer .= "\n";
        $buffer .= $indent . '				<input type="checkbox" name="partner_ids[]" value="44668" >';
        $buffer .= "\n";
        $buffer .= $indent . '				<span class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="/conversation/index/44668" class="photo-wrap">';
        $buffer .= "\n";
        $buffer .= $indent . '						<b><img src="/image/avatar/44668_70x70.png" width="70" height="70" alt="smuijs"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '					</a>';
        $buffer .= "\n";
        $buffer .= $indent . '				</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				<span class="description">';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="wrap">';
        $buffer .= "\n";
        $buffer .= $indent . '						<time datetime="2013-08-14 08:20:32">Wednesday 14 Aug 2013</time>';
        $buffer .= "\n";
        $buffer .= $indent . '						<strong class="title">';
        $buffer .= "\n";
        $buffer .= $indent . '							<a href="/conversation/index/44668">';
        $buffer .= "\n";
        $buffer .= $indent . '								smuijs';
        $buffer .= "\n";
        $buffer .= $indent . '							</a>';
        $buffer .= "\n";
        $buffer .= $indent . '						</strong>';
        $buffer .= "\n";
        $buffer .= $indent . '					</span>';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="text">Hoi, ';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . 'Als het goed is moet je nu weer mee kunnen doen. Er zat vorige week inderdaad een technisch foutje. Succes met de winactie.';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . 'Groetjes Marielle ...</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</span>';
        $buffer .= "\n";
        $buffer .= $indent . '			</label>';
        $buffer .= "\n";
        $buffer .= $indent . '		</fieldset>';
        $buffer .= "\n";
        $buffer .= $indent . '	</form>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<!--<a class="load-more" href="#">Meer berichten laden</a>-->';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= "\n";

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}