<?php

class __Mustache_a95fda42eaa3f10c233aeb68e670d31d extends Mustache_Template
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
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/profile" class="list-group-item ">Mijn startpagina</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/update/personal_info" class="list-group-item ">Persoonsgegevens</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/update/family_situation" class="list-group-item ">Gezinssituatie</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/update/interest" class="list-group-item ">Mijn interesses</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/update/own_detail" class="list-group-item ">Over jezelf</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/update/newsletter_settings" class="list-group-item ">Nieuwsbrief</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/update/change_password" class="list-group-item ">Wachtwoord wijzigen</a>';
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
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/blog/index" class="list-group-item ">Blog bericht schrijven</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/blog/list" class="list-group-item ">Mijn Blogs</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/blog/list/concepts" class="list-group-item ">Mijn concepten</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/blog/most_read" class="list-group-item ">Meest gelezen blogs</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/blog/admin_blogs" class="list-group-item active">Blogs van Mamaplaats</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/blog/following" class="list-group-item "> Blogs van moeders die ik volg</a>';
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
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/follow/following" class="list-group-item ">Moeders die ik volg</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/follow/followers" class="list-group-item ">Moeders die mij volgen</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/follow/suggestions" class="list-group-item ">Nieuwe moeders volgen</a>';
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
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/review-products/suggestions" class="list-group-item ">Schrijf je in voor een testpanel</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/review-products/subscribed" class="list-group-item ">Reeds voor ingeschreven</a>';
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
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/win/suggestions" class="list-group-item ">Schrijf je in voor een winactie</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <a href="https://dev.mamaplaats.nl/user/win/subscribed" class="list-group-item ">Reeds voor ingeschreven</a>';
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
        $buffer .= $indent . '			<section class="blog-masonry">';
        $buffer .= "\n";
        $buffer .= $indent . '    <header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '        <h1>Blogs van Mamaplaast</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '    </header>';
        $buffer .= "\n";
        $buffer .= $indent . '    <div id="blog_list" class="grid-box">';
        $buffer .= "\n";
        $buffer .= $indent . '            <article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '                <figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a class="photo-wrap" href="/blog/1212-test-blog-test-blog-test-blog-test-blog-test-blog">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                </figure>';
        $buffer .= "\n";
        $buffer .= $indent . '                <h4><a href="/blog/1212-test-blog-test-blog-test-blog-test-blog-test-blog">1212 test blog test blog test blog test blog test blog </a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '                    <time datetime="2015-06-30 12:05:28">30 Jun 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '                </p>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p>secon the comment feature test the comment feature. test the comment feature test the comment feature. test the comment ...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '            </article>';
        $buffer .= "\n";
        $buffer .= $indent . '            <article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '                <figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a class="photo-wrap" href="/blog/ouder-kind-look-alike-deel-1">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                </figure>';
        $buffer .= "\n";
        $buffer .= $indent . '                <h4><a href="/blog/ouder-kind-look-alike-deel-1">Ouder kind look alike deel 1</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '                    <time datetime="2015-06-22 07:00:52">22 Jun 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '                </p>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p>Je hoort het vaak: &#039;Goh, wat lijkt jouw dochtertje op je zeg!&#039; Maar de volgende foto&#039;s zullen je echt versteld doen staa...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '            </article>';
        $buffer .= "\n";
        $buffer .= $indent . '            <article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '                <figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a class="photo-wrap" href="/blog/snelle-en-verse-courgettesoep-met-roomkaas">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                </figure>';
        $buffer .= "\n";
        $buffer .= $indent . '                <h4><a href="/blog/snelle-en-verse-courgettesoep-met-roomkaas">Snelle en verse courgettesoep (met roomkaas)</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '                    <time datetime="2015-06-21 14:10:24">21 Jun 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '                </p>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p>Dit recept is bedoelt als flink voorgerecht of klein hoofdgerecht voor 4 (volwassen)personen. De bereidingstijd is ongev...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '            </article>';
        $buffer .= "\n";
        $buffer .= $indent . '            <article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '                <figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a class="photo-wrap" href="/blog/sus%c2%adhi%c2%adsa%c2%adla%c2%adde">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                </figure>';
        $buffer .= "\n";
        $buffer .= $indent . '                <h4><a href="/blog/sus%c2%adhi%c2%adsa%c2%adla%c2%adde">Zomerse Sus­hi­sa­la­de</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '                    <time datetime="2015-06-20 13:43:13">20 Jun 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '                </p>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p>Een frisse rijstsalade met komkommer, avocado en gebakken zalm. De stukjes nori en wasabimayo geven ’m een echte sushi...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '            </article>';
        $buffer .= "\n";
        $buffer .= $indent . '            <article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '                <figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a class="photo-wrap" href="/blog/opgelet-hoe-snel-zie-jij-een-kindje-nood">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                </figure>';
        $buffer .= "\n";
        $buffer .= $indent . '                <h4><a href="/blog/opgelet-hoe-snel-zie-jij-een-kindje-nood">Opgelet: Hoe snel zie jij een kindje in nood?</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '                    <time datetime="2015-06-19 09:33:46">19 Jun 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '                </p>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p>Dit een echte eye-opener! Wij op de redactie schrokken dat we het kindje in nood NIET konden ontdekken!! Jij wel?!...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '            </article>';
        $buffer .= "\n";
        $buffer .= $indent . '            <article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '                <figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a class="photo-wrap" href="/blog/wauw-gooisch-meisje-pauline-maakt-een-een-uniek-geboortekaartje">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                </figure>';
        $buffer .= "\n";
        $buffer .= $indent . '                <h4><a href="/blog/wauw-gooisch-meisje-pauline-maakt-een-een-uniek-geboortekaartje">Wauw, Gooisch meisje Pauline maakt een een uniek geboortekaartje</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '                    <time datetime="2015-06-19 09:11:37">19 Jun 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '                </p>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p>Ongeveer een maandje geleden beviel de Gooische Pauline van haar eerste kindje Reinier. Als geboortekaartje wilde Paulin...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '            </article>';
        $buffer .= "\n";
        $buffer .= $indent . '            <article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '                <figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a class="photo-wrap" href="/blog/helft">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                </figure>';
        $buffer .= "\n";
        $buffer .= $indent . '                <h4><a href="/blog/helft">Een halve Iphone, tv en bed...</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '                    <time datetime="2015-06-18 09:49:47">18 Jun 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '                </p>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p>Wat doe je als het uit is met je vriendin? Dan zaag je even alle spullen door het midden... Logisch toch?!...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '            </article>';
        $buffer .= "\n";
        $buffer .= $indent . '            <article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '                <figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a class="photo-wrap" href="/blog/jack-osbourne">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                </figure>';
        $buffer .= "\n";
        $buffer .= $indent . '                <h4><a href="/blog/jack-osbourne">Hoera: Dochtertje VOOR JACK OSBOURNE</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '                    <time datetime="2015-06-18 09:04:26">18 Jun 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '                </p>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p>Lisa en Jack Osbourne zijn helemaal gelukkig met de geboorte van dochtertje Andy Rose. ...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '            </article>';
        $buffer .= "\n";
        $buffer .= $indent . '            <article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '                <figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a class="photo-wrap" href="/blog/leuk-een-nieuwe-prins">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                </figure>';
        $buffer .= "\n";
        $buffer .= $indent . '                <h4><a href="/blog/leuk-een-nieuwe-prins">Leuk: een nieuwe prins!</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '                    <time datetime="2015-06-17 09:57:13">17 Jun 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '                </p>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p>Gisterenmiddag is er een klein prinsje geboren. De Zweedse prinses Madeleine en haar man Christopher O&#039;Neill zijn de pap...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '            </article>';
        $buffer .= "\n";
        $buffer .= $indent . '            <article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '                <figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a class="photo-wrap" href="/blog/10-dagen-vaderschapsverlof-voor-een-man">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                </figure>';
        $buffer .= "\n";
        $buffer .= $indent . '                <h4><a href="/blog/10-dagen-vaderschapsverlof-voor-een-man">10 dagen vaderschapsverlof voor een man? </a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '                    <time datetime="2015-06-17 09:24:32">17 Jun 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '                </p>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p>De twee dagen vaderschapsverlof  die mannen momenteel krijgen moeten 10 dagen vaderschapsverlof  worden, zodat een man b...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '            </article>';
        $buffer .= "\n";
        $buffer .= $indent . '            <article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '                <figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a class="photo-wrap" href="/blog/de-ideale-caki-combi">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                </figure>';
        $buffer .= "\n";
        $buffer .= $indent . '                <h4><a href="/blog/de-ideale-caki-combi">De ideale CaKi-combi</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '                    <time datetime="2015-06-16 16:30:33">16 Jun 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '                </p>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p>Een CaKi-combi: je carrière combineren met het zorgen voor je kind(eren). ...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '            </article>';
        $buffer .= "\n";
        $buffer .= $indent . '            <article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '                <figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a class="photo-wrap" href="/blog/heftige-fotoserie-love-daddy">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                </figure>';
        $buffer .= "\n";
        $buffer .= $indent . '                <h4><a href="/blog/heftige-fotoserie-love-daddy">Heftige fotoserie: love you daddy</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '                    <time datetime="2015-06-16 15:50:02">16 Jun 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '                </p>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p>Prachtige fotoserie, let op: zakdoekjes in de buurt houden, wij hielden het niet helemaal droog! ';
        $buffer .= "\n";
        $buffer .= $indent . 'love you daddy';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '            </article>';
        $buffer .= "\n";
        $buffer .= $indent . '            <article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '                <figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a class="photo-wrap" href="/blog/happy-birthday-kleine-north">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                </figure>';
        $buffer .= "\n";
        $buffer .= $indent . '                <h4><a href="/blog/happy-birthday-kleine-north">Happy Birthday kleine North! </a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '                    <time datetime="2015-06-16 15:05:49">16 Jun 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '                </p>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p>Mama Kim postte een hele schattige foto op Instagram van de kleine North... Ze is jarig vandaag! ...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '            </article>';
        $buffer .= "\n";
        $buffer .= $indent . '            <article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '                <figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a class="photo-wrap" href="/blog/tips-voor-vaderdag">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                </figure>';
        $buffer .= "\n";
        $buffer .= $indent . '                <h4><a href="/blog/tips-voor-vaderdag">Tips voor Vaderdag</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '                    <time datetime="2015-06-16 12:00:25">16 Jun 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '                </p>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p>Zondag 21 juni is het weer zover. Het is dan Vaderdag, en ook dat gaat weer bij veel gezinnen gevierd worden!';
        $buffer .= "\n";
        $buffer .= $indent . 'Vaderdag...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '            </article>';
        $buffer .= "\n";
        $buffer .= $indent . '            <article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '                <figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a class="photo-wrap" href="/blog/oorbellen-baby">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <b><img alt="" src="/image/no-image_230xn.png" width="230" height="140"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                </figure>';
        $buffer .= "\n";
        $buffer .= $indent . '                <h4><a href="/blog/oorbellen-baby">Oorbellen bij een baby, waar ligt de grens? </a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '                    <time datetime="2015-06-16 08:28:44">16 Jun 2015</time>';
        $buffer .= "\n";
        $buffer .= $indent . '                </p>';
        $buffer .= "\n";
        $buffer .= $indent . '                <p>Een grote groep Britten vindt het laten prikken van gaatjes in de oortjes van je 6 maanden oude dochter of zoon, kinderm...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '            </article>';
        $buffer .= "\n";
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '    <a href="#" onclick="return load_more.admin_blogs(15)" class="lazy-load-more">Klik hier om meer berichten te laden</a>';
        $buffer .= "\n";
        $buffer .= $indent . '</section>';
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