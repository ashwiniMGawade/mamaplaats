<?php

class __Mustache_c1a87525e5395aaac84dc030c33b338a extends Mustache_Template
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
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/profile" class="list-group-item active">';
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
        $buffer .= $indent . '                                    <span class="amount">(4)</span>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/conversation/list?type=outbox" class="list-group-item ">';
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
        $buffer .= $indent . '			<section class="blog-masonry following-blog-masonry">';
        $buffer .= "\n";
        $buffer .= $indent . '	<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h1>Blogs van moeders die ik volg</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '	</header>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="grid-box">';
        $buffer .= "\n";
        $buffer .= $indent . '			<article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '				<figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a class="photo-wrap" href="/blog/zwemkamp-the-weekend">';
        $buffer .= "\n";
        $buffer .= $indent . '						<b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '					</a>';
        $buffer .= "\n";
        $buffer .= $indent . '				</figure>';
        $buffer .= "\n";
        $buffer .= $indent . '				<h4><a href="/blog/zwemkamp-the-weekend">Zwemkamp &quot;The Weekend&quot;</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				<p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="/lid/kimdejong">Kimdejong</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '					<time datetime="2015-06-18 22:49:47">18 Jun 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '				</p>';
        $buffer .= "\n";
        $buffer .= $indent . '				<p>Eindelijk was het dan afgelopen weekend zover. we gingen op kamp met het gehele gezin!...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '			</article>';
        $buffer .= "\n";
        $buffer .= $indent . '			<article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '				<figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a class="photo-wrap" href="/blog/yes-gewonnen-met-de-bucketlist-deel-1">';
        $buffer .= "\n";
        $buffer .= $indent . '						<b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '					</a>';
        $buffer .= "\n";
        $buffer .= $indent . '				</figure>';
        $buffer .= "\n";
        $buffer .= $indent . '				<h4><a href="/blog/yes-gewonnen-met-de-bucketlist-deel-1">Yes! Gewonnen met De bucketlist! Deel 1</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				<p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="/lid/kimwoltersom">KimWoltersom</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '					<time datetime="2015-06-09 18:06:50"> 9 Jun 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '				</p>';
        $buffer .= "\n";
        $buffer .= $indent . '				<p>Winneres van de bucketlist! (Tattoo van me dochter nouja de tekening waar ze mij getekend had met ha...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '			</article>';
        $buffer .= "\n";
        $buffer .= $indent . '			<article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '				<figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a class="photo-wrap" href="/blog/sportavond-in-het-water-ehh-oweer-gevallen">';
        $buffer .= "\n";
        $buffer .= $indent . '						<b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '					</a>';
        $buffer .= "\n";
        $buffer .= $indent . '				</figure>';
        $buffer .= "\n";
        $buffer .= $indent . '				<h4><a href="/blog/sportavond-in-het-water-ehh-oweer-gevallen">Sportavond in het water ehh oweer gevallen!</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				<p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="/lid/kimdejong">Kimdejong</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '					<time datetime="2015-06-07 19:36:41"> 7 Jun 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '				</p>';
        $buffer .= "\n";
        $buffer .= $indent . '				<p>Eindelijk was het dan afgelopen vrijdag weer zover: Sportavond op het werk. We hadden er weer zin in...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '			</article>';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</section>';
        $buffer .= "\n";
        $buffer .= $indent . '<input type="hidden" value="3" id="limit-following">';
        $buffer .= "\n";
        $buffer .= $indent . '<a href="#" id="load-more-btn-following" onclick="return load_more.user_profile_dashboard(\'following\', 6)" class="load-more">Klik hier om meer berichten te laden</a>';
        $buffer .= "\n";
        $buffer .= $indent . '<section class="blog-masonry most_read-blog-masonry">';
        $buffer .= "\n";
        $buffer .= $indent . '    <header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '        <h1>Meest gelezen blogs</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '    </header>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="grid-box">';
        $buffer .= "\n";
        $buffer .= $indent . '			<article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '				<figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a class="photo-wrap" href="/blog/upload-images-on-amazon-and-test-the-working">';
        $buffer .= "\n";
        $buffer .= $indent . '						<b><img alt="" src="/image/legacy/2015/09/photo_230xn.jpg" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '					</a>';
        $buffer .= "\n";
        $buffer .= $indent . '				</figure>';
        $buffer .= "\n";
        $buffer .= $indent . '				<h4><a href="/blog/upload-images-on-amazon-and-test-the-working">upload images on amazon and test the working</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				<p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '					<time datetime="2015-09-01 15:16:10"> 1 Sep 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '				</p>';
        $buffer .= "\n";
        $buffer .= $indent . '				<p>upload images on amazon and test the working upload images on amazon and test the working...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '			</article>';
        $buffer .= "\n";
        $buffer .= $indent . '			<article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '				<figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a class="photo-wrap" href="/blog/aghlkgsaghsd-alkdshfjdsfasdff">';
        $buffer .= "\n";
        $buffer .= $indent . '						<b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '					</a>';
        $buffer .= "\n";
        $buffer .= $indent . '				</figure>';
        $buffer .= "\n";
        $buffer .= $indent . '				<h4><a href="/blog/aghlkgsaghsd-alkdshfjdsfasdff">aghlkgsaghsd alkdshfjDSFASDFf</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				<p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '					<time datetime="2015-08-31 15:17:44">31 Aug 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '				</p>';
        $buffer .= "\n";
        $buffer .= $indent . '				<p>aghlkgsaghsd alkdshfjDSFASDFf aghlkgsaghsd alkdshfjDSFASDFf aghlkgsaghsd alkdshfjDSFASDFf aghlkgsagh...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '			</article>';
        $buffer .= "\n";
        $buffer .= $indent . '			<article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '				<figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a class="photo-wrap" href="/blog/alsdhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh-kasjdddf">';
        $buffer .= "\n";
        $buffer .= $indent . '						<b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '					</a>';
        $buffer .= "\n";
        $buffer .= $indent . '				</figure>';
        $buffer .= "\n";
        $buffer .= $indent . '				<h4><a href="/blog/alsdhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh-kasjdddf">als;dhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh kasjdddf</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				<p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '					<time datetime="2015-08-20 15:52:55">20 Aug 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '				</p>';
        $buffer .= "\n";
        $buffer .= $indent . '				<p>als;dhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh kasjdddfals;dhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh kasjdddfals;dh...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '			</article>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</section>';
        $buffer .= "\n";
        $buffer .= $indent . '<input type="hidden" value="3" id="limit-most_read">';
        $buffer .= "\n";
        $buffer .= $indent . '<a href="#" id="load-more-btn-most_read" onclick="return load_more.user_profile_dashboard(\'most_read\', 6)" class="load-more">Klik hier om meer berichten te laden</a>';
        $buffer .= "\n";
        $buffer .= $indent . '<section class="blog-masonry list-blog-masonry">';
        $buffer .= "\n";
        $buffer .= $indent . '    <header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '        <h1>Mijn blogs</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '    </header>';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="grid-box">';
        $buffer .= "\n";
        $buffer .= $indent . '            <article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '                <figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a class="photo-wrap" href="/blog/upload-images-on-amazon-and-test-the-working">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <b><img alt="" src="/image/legacy/2015/09/photo_230xn.jpg" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                </figure>';
        $buffer .= "\n";
        $buffer .= $indent . '                <h4><a href="/blog/upload-images-on-amazon-and-test-the-working">upload images on amazon and test the working</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '                    <time datetime="2015-09-01 15:16:10"> 1 Sep 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '                </p>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p>upload images on amazon and test the working upload images on amazon and test the working...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '            </article>';
        $buffer .= "\n";
        $buffer .= $indent . '            <article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '                <figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a class="photo-wrap" href="/blog/aghlkgsaghsd-alkdshfjdsfasdff">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                </figure>';
        $buffer .= "\n";
        $buffer .= $indent . '                <h4><a href="/blog/aghlkgsaghsd-alkdshfjdsfasdff">aghlkgsaghsd alkdshfjDSFASDFf</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '                    <time datetime="2015-08-31 15:17:44">31 Aug 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '                </p>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p>aghlkgsaghsd alkdshfjDSFASDFf aghlkgsaghsd alkdshfjDSFASDFf aghlkgsaghsd alkdshfjDSFASDFf aghlkgsagh...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '            </article>';
        $buffer .= "\n";
        $buffer .= $indent . '            <article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '                <figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a class="photo-wrap" href="/blog/test-12121-test-12121-test-12121-test-12121-test-12121t">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                </figure>';
        $buffer .= "\n";
        $buffer .= $indent . '                <h4><a href="/blog/test-12121-test-12121-test-12121-test-12121-test-12121t">test 12121 test 12121 test 12121 test 12121 test 12121t</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '                    <time datetime="2015-08-26 13:09:35">26 Aug 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '                </p>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p>test 12121 test 12121 test 12121 test 12121test 12121vtest 12121test 12121test 12121...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '            </article>';
        $buffer .= "\n";
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '</section>';
        $buffer .= "\n";
        $buffer .= $indent . '<input type="hidden" value="3" id="limit-list">';
        $buffer .= "\n";
        $buffer .= $indent . '<a href="#" id="load-more-btn-list" onclick="return load_more.user_profile_dashboard(\'list\', 6)" class="load-more">Klik hier om meer berichten te laden</a>';
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