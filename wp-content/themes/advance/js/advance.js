//advance JavaScript 

jQuery(window).ready(function($) {

    /*CHECK IF TOUCH ENABLED DEVICE*/
    function is_touch_device() {
        return (('ontouchstart' in window) || (navigator.MaxTouchPoints > 0) || (navigator.msMaxTouchPoints > 0));
    }

    if (is_touch_device()) {
        jQuery('body').addClass('onlytouch');
    }
 
});

window.matchMedia = window.matchMedia || (function(e, f) {
    var c, a = e.documentElement,
        b = a.firstElementChild || a.firstChild,
        d = e.createElement("body"),
        g = e.createElement("div");
    g.id = "mq-test-1";
    g.style.cssText = "position:absolute;top:-100em";
    d.style.background = "none";
    d.appendChild(g);
    return function(h) {
        g.innerHTML = '&shy;<style media="' + h + '"> #mq-test-1 { width: 42px; }</style>';
        a.insertBefore(d, b);
        c = g.offsetWidth == 42;
        a.removeChild(d);
        return {
            matches: c,
            media: h
        }
    }
})(document);

jQuery(document).ready(function($){
// WOW
    new WOW().init();
	
	});
/* 
 * js start
 */
jQuery(document).ready(function($){
	
	 // Set options
    var options = {
        offset: '#showHere',
        offsetSide: 'top',
        classes: {
            clone: 'branding--clone',
            stick: 'branding--stick',
            unstick: 'branding--unstick'
        }
    };


    // Initialise with options
    var banner = new Headhesive('.branding,.branding-single', options);

    // Headhesive destroy
    // banner.destroy();
	
	
	// footerHeight
	
	 var docHeight = jQuery(window).height();
    var footerHeight = jQuery('#footer').height();
    var footerTop = jQuery('#footer').position().top + footerHeight;

    if (footerTop < docHeight) {
        jQuery('#footer').css('margin-top', 1 + (docHeight - footerTop) + 'px');
    }
	
	
	
	// matchHeight
                    jQuery('.matchhe').matchHeight({
                        property: 'min-height'
                    });

	 
	
	 //Comment Form
    jQuery('.comment-form-author, .comment-form-email, .comment-form-url').wrapAll('<div class="field_wrap" />');

    jQuery(".comment-reply-link").click(function() {
        jQuery('#respond_wrap .single_skew_comm, #respond_wrap .single_skew').hide();
    });
    jQuery("#cancel-comment-reply-link").click(function() {
        jQuery('#respond_wrap .single_skew_comm, #respond_wrap .single_skew').show();
    });

    // scrollup
    jQuery(window).bind("scroll", function() {
        if (jQuery(this).scrollTop() > 800) {
            jQuery(".scrollup").fadeIn('slow');
        } else {
            jQuery(".scrollup").fadeOut('fast');
        }
    });
    jQuery(".scrollup").click(function() {
        jQuery("html, body").animate({
            scrollTop: 0
        }, "slow");
        return false;
    });
	

	//Next-Previous Post Image Check
	jQuery(".pre-nav-saf a").addClass('prev');
	jQuery(".next-nav-saf a").addClass('next');

    //MENU Animation
    if (jQuery(window).width() > 768) {
        jQuery('#navmenu ul > li').hoverIntent(function() {
            jQuery(this).find('.sub-menu:first, ul.children:first').slideDown({
                duration: 200
            });
            jQuery(this).find('a').not('.sub-menu a').stop().animate({
                "color": '#0000'
            }, 200);
        }, function() {
            jQuery(this).find('.sub-menu:first, ul.children:first').slideUp({
                duration: 200
            });
            jQuery(this).find('a').not('.sub-menu a').stop().animate({
                "color": '#ffff'
            }, 200);

        });

        jQuery('#navmenu ul li').not('#navmenu ul li ul li').hover(function() {
            jQuery(this).addClass('menu_hover');
        }, function() {
            jQuery(this).removeClass('menu_hover');
        });
        jQuery('#navmenu li').has("ul").addClass('zn_parent_menu');
        jQuery('.zn_parent_menu > a').append('<span class="menu_arrow"><i class="fa fa-angle-down"></i></span>');
    }
   

 /* Side responsive menu	 */
    $('.menu-toggle').sidr({
        name: 'sidr-left',
        side: 'left',
        source: '#navmenu',
        onOpen: function() {
            $('.menu-toggle').animate({
                marginLeft: "260px"
            }, 200);
        },
        onClose: function() {
            $('.menu-toggle').animate({
                marginLeft: "0px"
            }, 200);
        }
    });


// smoothScroll
 jQuery('body').smoothScroll({
        delegateSelector: '#navmenu li a'
      });
	  
	
/* PRO	 */	




 /* search-icon	 */
 jQuery('.search-icon i.fa-search').click(function() {
    jQuery('.search-icon .advance-search').toggleClass('active');
});

jQuery('.advance-search .close').click(function() {
    jQuery('.search-icon .advance-search').removeClass('active');
});

jQuery('.overlay-search').click(function() {
    jQuery('.search-icon .advance-search').removeClass('active');
});

 
 }); 
/* 
 * js END
 */
 
 
