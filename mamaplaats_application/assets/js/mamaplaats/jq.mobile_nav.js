jQuery(function(){
    initMobileMenu2();
    initUserMenu();
    hideProfileMenu();

    jQuery('.redirect-to-login').on('click', function(e){
        e.preventDefault();
        window.location = "/user/login";
    })

    $(window).on('resize', function (e) {
        hideProfileMenu();
    });
});

function hideProfileMenu()
{
    var windowWidth = $(window).width();
    var mobileNav = $('#mobile-nav').next();
    var pageUserMenu = $('#page').find('#user-menu');
    if (windowWidth > 768) {
        if (!mobileNav.hasClass('visible-sm')) {
            mobileNav.addClass('visible-sm, visible-xs');
            pageUserMenu.removeClass('visible-md');
            pageUserMenu.removeClass('visible-lg');
        }
    } else {
        if (!pageUserMenu.hasClass('visible-md')) {
            pageUserMenu.addClass('visible-md, visible-lg');
        }
        if (mobileNav.hasClass('visible-sm')) {
            mobileNav.removeClass('visible-sm');
            mobileNav.removeClass('visible-xs');
        }
    }
}
// open-close init
function initOpenClose() {
    jQuery('#mobile-nav li').openClose({
        activeClass: 'active',
        opener: '.open-close',
        slider: '.aside-slide',
        animSpeed: 400,
        effect: 'slide'
    });
}

// mobile menu init
function initMobileMenu2() {
    var body = jQuery('body');
    var contentBlock = $('#page'),
        mobileMenu = $('#mobile-nav'),
        opener = contentBlock.find('#header .main-panel > .opener'),
        mobileMenuWidth = mobileMenu.outerWidth(),
        activeClass = 'opened',
        animSpeed = 400;

    mobileMenu.css({
        left: -mobileMenuWidth
    });
    opener.on('click', function(e) {
        e.preventDefault();
        toggleMobileMenu();
    });
    body.on('click touchstart', function(e) {
        var target = jQuery(event.target);
        if (mobileMenu.hasClass(activeClass) && !target.is(mobileMenu) && target.closest(mobileMenu).length == 0 && !target.is(opener) && target.closest(opener).length == 0) {
            hideMobileMenu();
        }
    });

    function toggleMobileMenu() {
        if (mobileMenu.hasClass(activeClass)) {
            hideMobileMenu();
        } else {
            hideProfileMenu();
            showMobileMenu();
        }
    }
    
    function showMobileMenu() {
        mobileMenu.addClass(activeClass).stop().animate({
            left: 0
        }, animSpeed);
        contentBlock.stop().animate({
            left: mobileMenuWidth
        }, animSpeed);
    }

    function hideMobileMenu() {
        mobileMenu.stop().animate({
            left: -mobileMenuWidth
        }, animSpeed);
        setTimeout(function(){
            mobileMenu.removeClass(activeClass)
        }, animSpeed);
        contentBlock.stop().animate({
            left: 0
        }, animSpeed);
    }
}


// mobile menu init
function initUserMenu() {
    var body = jQuery('body');
    var contentBlock = $('#page'),
        mobileMenu = $('.user-menu'),
        opener = contentBlock.find('#header .login-opener'),
        mobileMenuWidth = mobileMenu.outerWidth(),
        activeClass = 'opened',
        animSpeed = 400;

    mobileMenu.css({
        right: -mobileMenuWidth
    });
    opener.on('click', function(e) {
        e.preventDefault();
        contentBlock.css('left', 'auto');
        toggleMobileMenu();
    });
    body.on('click touchstart', function(e) {
        var target = jQuery(event.target);
        if (mobileMenu.hasClass(activeClass) && !target.is(mobileMenu) && target.closest(mobileMenu).length == 0 && !target.is(opener) && target.closest(opener).length == 0) {
            hideMobileMenu();
        }
    });

    function toggleMobileMenu() {
        if (mobileMenu.hasClass(activeClass)) {
            hideMobileMenu();
        } else {
            showMobileMenu();
        }
    }
    
    function showMobileMenu() {
        mobileMenu.addClass(activeClass).stop().animate({
            right: 0
        }, animSpeed);
        contentBlock.stop().animate({
            right: mobileMenuWidth
        }, animSpeed);
    }

    function hideMobileMenu() {
        mobileMenu.stop().animate({
            right: -mobileMenuWidth
        }, animSpeed);
        setTimeout(function(){
            mobileMenu.removeClass(activeClass)
        }, animSpeed);
        contentBlock.stop().animate({
            right: 0
        }, animSpeed);
    }
}