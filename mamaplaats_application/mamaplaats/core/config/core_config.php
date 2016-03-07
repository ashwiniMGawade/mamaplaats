<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
    'avatar_path' => str_replace(DOCROOT, 'kohana/', '') . '/wordpress/wp-content/avatars/',

	'header_menu' => array(
        'blog' => array('text' => 'Blogs', 'path' => 'blog/list', 'sub_menu' => array(
            array('text' => 'Zwanger', 'path' => 'blog/list/zwanger'),
            array('text' => 'Baby', 'path' => 'blog/list/babys'),
            array('text' => 'Kind', 'path' => 'blog/list/kind'),
            array('text' => 'Mama', 'path' => 'blog/list/mama'),
            array('text' => 'Bloggers', 'path' => 'leden/A'),
        )),
        'vandaag' => array('text' => 'Vandaag', 'path' => 'blog/list/actueel', 'sub_menu' => array(
            array('text' => 'Trending', 'path' => 'blog/list/actueel'),
            array('text' => 'Showbizz', 'path' => 'blog/list/showbizz'),
            array('text' => 'Dagmenu', 'path' => 'blog/list/recepten'),
            array('text' => 'Kijk', 'path' => 'blog/list/videos'),
        )),
		'advies' => array('text' => 'Advies', 'path' => 'advies/list', 'sub_menu' => array(
			array('text' => 'Zwanger', 'path' => 'advies/list/zwanger'),
			array('text' => 'Baby', 'path' => 'advies/list/babys'),
			array('text' => 'Kind', 'path' => 'advies/list/kind'),
			array('text' => 'Mama', 'path' => 'advies/list/mama'),
		)),
		'expert' => array('text' => 'Expert', 'path' => 'expert/list', 'sub_menu' => array(
			array('text' => 'Voeding', 'path' => 'expert/list/voeding-advies'),
			array('text' => 'Thuis', 'path' => 'expert/list/thuis-advies'),
		)),
		'win' => array('text' => 'Win', 'path' => 'win', 'sub_menu' => array(

		)),
		'test' => array('text' => 'Test', 'path' => 'review/aankomende', 'sub_menu' => array(
			array('text' => 'Aanmelden Testpanels', 'path' => 'review/aankomende'),
			array('text' => 'Lopende Testpanels', 'path' => 'review/lopende'),
			array('text' => 'Afgeronde Testpanels', 'path' => 'review/afgeronde'),
		)),
		'coupon' => array('text' => 'Korting', 'path' => 'korting/gratis', 'sub_menu' => array(
			array('text' => 'Alle Categorien', 'path' => 'korting/categorien'),
			array('text' => 'Alle Winkels', 'path' => 'korting/winkels'),
			array('text' => 'Meest Populaire', 'path' => 'korting/meest-populair'),
			array('text' => 'Nieuwste', 'path' => 'korting/nieuwste'),
			array('text' => 'Gratis', 'path' => 'korting/gratis'),
		)),
        'Forum' => array('text' => 'Forum', 'path' => 'http://forum.mamaplaats.nl'),
	),

    'profile_menu' => array(
        'profile' => array('text' => 'Profiel', 'path' => '#', 'sub_menu' => array(
            array('text' => 'Persoonsgegevens', 'path' => 'user/update/personal_info'),
            array('text' => 'Gezinssituatie', 'path' => 'user/update/family_situation'),
            array('text' => 'Mijn interesses', 'path' => 'user/update/interest'),
            array('text' => 'Over jezelf', 'path' => 'user/update/own_detail'),
            array('text' => 'Nieuwsbrief', 'path' => 'user/update/newsletter_settings'),
            array('text' => 'Wachtwoord wijzigen', 'path' => 'user/update/change_password'),
        )),
        'blogs' => array('text' => 'Blogs', 'path' => '#', 'sub_menu' => array(
            array('text' => 'Blog bericht schrijven', 'path' => 'user/blog/index'),
            array('text' => 'Mijn Blogs', 'path' => 'user/blog/list'),
            array('text' => 'Mijn concepten', 'path' => 'user/blog/list/concepts'),
            array('text' => 'Meest gelezen blogs', 'path' => 'user/blog/most_read'),
            array('text' => 'Blogs van Mamaplaats', 'path' => 'user/blog/admin_blogs'),
            array('text' => ' Blogs van moeders die ik volg', 'path' => 'user/blog/following'),
        )),
        'volgen' => array('text' => 'Volgen', 'path' => 'user/follow/suggestions', 'sub_menu' => array(
            array('text' => 'Moeders die ik volg', 'path' => 'user/follow/following'),
            array('text' => 'Moeders die mij volgen', 'path' => 'user/follow/followers'),
            array('text' => 'Nieuwe moeders volgen', 'path' => 'user/follow/suggestions'),
        )),
        'berichten' => array('text' => 'Berichten', 'path' => 'conversation/list', 'sub_menu' => array(
            array('text' => 'Schrijf bericht', 'path' => 'conversation/new'),
            array('text' => 'Postvak in', 'path' => 'conversation/list?type=inbox'),
            array('text' => 'Postvak uit', 'path' => 'conversation/list?type=outbox'),
            array('text' => 'Concepten', 'path' => 'conversation/list?type=draft'),
        )),
        'testpanel' => array('text' => 'Testpanel', 'path' => '#', 'sub_menu' => array(
            array('text' => 'Schrijf je in voor een testpanel', 'path' => 'user/review-products/suggestions'),
            array('text' => 'Reeds voor ingeschreven', 'path' => 'user/review-products/subscribed'),
        )),

		'Forum' => array('text' => 'Forum', 'path' => '#', 'sub_menu' => array(
			array('text' => 'Naar het forum', 'path' => 'http://forum.mamaplaats.nl'),
		)),

        'Winacties' => array('text' => 'Winacties', 'path' => '#', 'sub_menu' => array(
            array('text' => 'Schrijf je in voor een winactie', 'path' => 'user/win/suggestions'),
            array('text' => 'Reeds voor ingeschreven', 'path' => 'user/win/subscribed'),
        )),

        'Service' => array('text' => 'Service', 'path' => '#', 'sub_menu' => array(
            array('text' => 'Over ons', 'path' => 'over-ons'),
            array('text' => 'Adverteren', 'path' => 'adverteren'),
            array('text' => 'Contact', 'path' => 'contact'),
            array('text' => 'Algemene voorwaarden', 'path' => 'algemene-voorwaarden-2'),
            array('text' => 'Disclaimer', 'path' => 'disclaimer'),
        )),
    ),

    'footer_menu' => array(
        array('menu_block' => array(
            array('text' => 'Blog', 'path' => '', 'sub_menu' => array(
                array('text' => 'Zwanger', 'path' => 'blog/list/zwanger'),
                array('text' => 'Baby', 'path' => 'blog/list/babys'),
                array('text' => 'Kind', 'path' => 'blog/list/kind'),
                array('text' => 'Mama', 'path' => 'blog/list/mama'),
                array('text' => 'Onze Bloggers', 'path' => 'leden'),
            ))
        )),
        array('menu_block' => array(
            array('text' => 'Advies', 'path' => '', 'sub_menu' => array(
                array('text' => 'Zwanger', 'path' => 'advies/list/zwanger'),
                array('text' => 'Baby', 'path' => 'advies/list/babys'),
                array('text' => 'Kind', 'path' => 'advies/list/kind'),
                array('text' => 'Mama', 'path' => 'advies/list/mama'),
            )),
        )),
        array('menu_block' => array(
            array('text' => 'Win Acties', 'path' => '', 'sub_menu' => array(
                array('text' => 'Huidige Winacties', 'path' => 'win'),
            )),
        )),
        array('menu_block' => array(
            array('text' => 'Reviews', 'path' => '', 'sub_menu' => array(
                array('text' => 'Aanmelden Reviews', 'path' => 'review/aankomende'),
                array('text' => 'Lopende Reviews', 'path' => 'review/lopende'),
                array('text' => 'Afgeronde Reviews', 'path' => 'review/afgeronde'),
            )),
        )),
        array('menu_block' => array(
            array('text' => 'Service', 'path' => '', 'sub_menu' => array(
                array('text' => 'Adverteren', 'path' => 'adverteren'),
                array('text' => 'Contact', 'path' => 'contact'),
                array('text' => 'Over Ons', 'path' => 'over-ons'),
                array('text' => 'Algemene Voorwaarden', 'path' => 'algemene-voorwaarden-2'),
                array('text' => 'Disclaimer', 'path' => 'disclaimer'),
            )),
        )),
    ),

    'partners' => array(
        array('text' => 'C&A', 'image' => 'assets/images/partners/CA.png', 'url' => 'http://www.c-en-a.nl'),
        array('text' => 'Fisher Price', 'image' => 'assets/images/partners/Fisherprice.png', 'url' => 'http://www.fisher-price.com'),
        array('text' => 'Greetz', 'image' => 'assets/images/partners/Greetz.png', 'url' => 'http://www.greetz.nl'),
        array('text' => 'V&D', 'image' => 'assets/images/partners/VD.png', 'url' => 'http://www.vd.nl/'),
        array('text' => 'ClubMed', 'image' => 'assets/images/partners/Clubmed.png', 'url' => 'http://www.clubmed.nl'),
        array('text' => 'Nutricia', 'image' => 'assets/images/partners/Nutricia.png', 'url' => 'http://www.nutricia.nl'),
        array('text' => 'Stokke', 'image' => 'assets/images/partners/Stokke.png', 'url' => 'https://www.stokke.com'),
        array('text' => 'Tomy', 'image' => 'assets/images/partners/TOMY.png', 'url' => 'http://tomy.com'),
        array('text' => 'VTech', 'image' => 'assets/images/partners/Vtech.png', 'url' => 'http://www.vtech.com'),
        array('text' => 'Zilveren Kruis', 'image' => 'assets/images/partners/Zilverenkruis.png', 'url' => 'http://www.zilverenkruis.nl'),
    ),

    'script_urls_for_videopost' => array(
        'besparen-met-toon-van-eneco',
        'test-toon-eneco',
        'michiels-woontip-inzicht-energieverbruik',
        'videopost-2',
        'videopost-3',
        'videopost-4',
        'test-toon-eneco-2',
        'mamatorial',
        'mamatorial-2',
        'expertartikel-2',
        'expertartikel-3',
        'expertartikel-4',
        'besparen-toon-eneco',
        'besparen-met-toon-van-eneco',
        'michiels-woontip-rookmelders-op-toon',
        'een-veilig-thuis',
        'michiels-woontip-inzicht-je-energieverbruik',
        'mijn-ervaring-met-toon-slimme-thermostaat-van-eneco',
        'win-e100-met-enecos-en-jouw-eigen-wintertips',
    )

);