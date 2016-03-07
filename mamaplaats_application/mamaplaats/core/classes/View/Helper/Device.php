<?php

trait View_Helper_Device
{

    public function is_desktop()
    {
        $browser = new Browser();
        $browser->setUserAgent($_SERVER['HTTP_USER_AGENT']);
        if ($browser->isMobile() or $browser->isTablet()) {
            return false;
        }

        return true;
    }
} 