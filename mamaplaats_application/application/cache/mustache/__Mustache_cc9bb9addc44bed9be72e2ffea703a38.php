<?php

class __Mustache_cc9bb9addc44bed9be72e2ffea703a38 extends Mustache_Template
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
        $buffer .= $indent . '                                    <a href="http://dev.mamaplaats.nl/user/profile" class="list-group-item ">Mijn startpagina</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="http://dev.mamaplaats.nl/user/update/personal_info" class="list-group-item ">Persoonsgegevens</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="http://dev.mamaplaats.nl/user/update/family_situation" class="list-group-item ">Gezinssituatie</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="http://dev.mamaplaats.nl/user/update/interest" class="list-group-item ">Mijn interesses</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="http://dev.mamaplaats.nl/user/update/own_detail" class="list-group-item ">Over jezelf</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="http://dev.mamaplaats.nl/user/update/newsletter_settings" class="list-group-item ">Nieuwsbrief</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="http://dev.mamaplaats.nl/user/update/change_password" class="list-group-item ">Wachtwoord wijzigen</a>';
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
        $buffer .= $indent . '                                    <a href="http://dev.mamaplaats.nl/user/blog/index" class="list-group-item ">Blog bericht schrijven</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="http://dev.mamaplaats.nl/user/blog/list" class="list-group-item ">Mijn Blogs</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="http://dev.mamaplaats.nl/user/blog/list/concepts" class="list-group-item ">Mijn concepten</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="http://dev.mamaplaats.nl/user/blog/most_read" class="list-group-item ">Meest gelezen blogs</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="http://dev.mamaplaats.nl/user/blog/admin_blogs" class="list-group-item ">Blogs van Mamaplaats</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="http://dev.mamaplaats.nl/user/blog/following" class="list-group-item "> Blogs van moeders die ik volg</a>';
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
        $buffer .= $indent . '                                    <a href="http://dev.mamaplaats.nl/user/follow/following" class="list-group-item ">Moeders die ik volg</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="http://dev.mamaplaats.nl/user/follow/followers" class="list-group-item ">Moeders die mij volgen</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="http://dev.mamaplaats.nl/user/follow/suggestions" class="list-group-item ">Nieuwe moeders volgen</a>';
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
        $buffer .= $indent . '                                    <a href="http://dev.mamaplaats.nl/user/review-products/suggestions" class="list-group-item ">Schrijf je in voor een testpanel</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="http://dev.mamaplaats.nl/user/review-products/subscribed" class="list-group-item ">Reeds voor ingeschreven</a>';
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
        $buffer .= $indent . '                                    <a href="http://dev.mamaplaats.nl/user/win/suggestions" class="list-group-item ">Schrijf je in voor een winactie</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="http://dev.mamaplaats.nl/user/win/subscribed" class="list-group-item ">Reeds voor ingeschreven</a>';
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
        $buffer .= $indent . '	<h1>Stuur een privé bericht</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '</header>';
        $buffer .= "\n";
        $buffer .= $indent . '<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '	<h3>Ontvanger Bericht</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '</header>';
        $buffer .= "\n";
        $buffer .= $indent . '<div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<form id="user_search" method="get">';
        $buffer .= "\n";
        $buffer .= $indent . '		<input id="recipient" type="text" name="search-term" placeholder="Zoek een moeder op voornaam, achternaam of gebruikersnaam" autocomplete="off">';
        $buffer .= "\n";
        $buffer .= $indent . '	</form>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div id="result"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '	<h3>Schrijf een nieuw bericht</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '</header>';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="msg-box">';
        $buffer .= "\n";
        $buffer .= $indent . '	<form action="" method="post">';
        $buffer .= "\n";
        $buffer .= $indent . '		<fieldset>';
        $buffer .= "\n";
        $buffer .= $indent . '			<input id="recipient_id" name="recipient_id" type="hidden" value="">';
        $buffer .= "\n";
        $buffer .= $indent . '			<textarea name="content" placeholder="JOUW BERICHT *" rows="5" cols="50"></textarea>';
        $buffer .= "\n";
        $buffer .= $indent . '			<button class="btn" type="submit">verstuur</button>';
        $buffer .= "\n";
        $buffer .= $indent . '		</fieldset>';
        $buffer .= "\n";
        $buffer .= $indent . '	</form>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
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