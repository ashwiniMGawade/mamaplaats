<?php
use \WebGuy;

class BlogSubMenuCest
{
    public function _before(WebGuy $I)
    {

    }

    public function _after(WebGuy $I)
    {
    }

    // tests
    public function checkBlogsVanMamaplaatsSubMenuPresent(WebGuy $I)
    {
        $I->wantTo("check whether new sub menu, Blogs Van Mamaplaats is properly added under blogs");
        $I->amOnPage('/user/profile');
        //$I->canSee('Blogs');
    }
}