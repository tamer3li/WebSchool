/*global $, alert, console*/
$(function () {
    'use strict';
    // Trigger Nice Scroll Plugin
    $('html').niceScroll({
        cursorcolor: '#F7600F',
        cursorwidth: 7,
        cursorborder: '1px solid #F7600F'
    });
    
    // Strat Nav //
    $('div.logo').hover(function () {
        $('div.logo span:first').text('Web');
        $('div.logo span:last').text('School');
    }, function () {
        $('div.logo span:first').text('team');
        $('div.logo span:last').text('project');
    });
    
    $('.links li').click(function () {
        
        $(this).addClass('active').siblings().removeClass('active');
    
    });
     $('.links li a').click(function () {
        
        $('html, body').animate({
            
            scrollTop: $('#' + $(this).data('value')).offset().top
            
        }, 1000);
        
        console.log('#' + $(this).data('value'));
        
    });
    // End Nav //
 
    // Start Subscribe
    
    $('.subscribe button').click(function () {
        $(this).fadeToggle(1000, function () {
            $('.subscribe form').slideToggle(1000, function () {
                $('.subscribe form :first').animate({left: '0'}, 1150);
                $('.subscribe form :last').animate({right: '0'}, 1150, function () {
                    $('.subscribe i:only-of-type').fadeToggle(1250);
                });
            });
        });
    });
    $('.subscribe i:only-of-type').click(function () {
        $(this).fadeToggle(500, function () {
            $('.subscribe form :first').animate({left: '-463'}, 1000);
            $('.subscribe form :last').animate({right: '-225'}, 1000, function () {
                $('.subscribe form').slideToggle(700, function () {
                    $('.subscribe button').fadeToggle(700);
                });
            });
            
        });
    });
      
    //Star Our Team
    $('.our-team .team .per-son .per-img .img-loading-1').on({
        mouseenter: function () {
            $('.our-team .team .per-son .per-img .loading .bar-1').fadeIn().animate({width: '100%'}, 300);
            $('.our-team ul li:first-child').toggleClass('li-first-back').toggleClass('li-second-back');
        },
        mouseleave: function () {
            $('.our-team .team .per-son .per-img .loading .bar-1').hide().animate({width: '0'});
            $('.our-team ul li:first-child').toggleClass('li-first-back').toggleClass('li-second-back');
        }
    });
    $('.our-team .team .per-son .per-img .img-loading-2').on({
        mouseenter: function () {
            $('.our-team .team .per-son .per-img .loading .bar-2').fadeIn().animate({width: '100%'}, 300);
            $('.our-team ul li:nth-child(2)').toggleClass('li-first-back').toggleClass('li-second-back');
        },
        mouseleave: function () {
            $('.our-team .team .per-son .per-img .loading .bar-2').hide().animate({width: '0'});
            $('.our-team ul li:nth-child(2)').toggleClass('li-first-back').toggleClass('li-second-back');
        }
    });
    $('.our-team .team .per-son .per-img .img-loading-3').on({
        mouseenter: function () {
            $('.our-team .team .per-son .per-img .loading .bar-3').fadeIn().animate({width: '100%'}, 300);
            $('.our-team ul li:nth-child(3)').toggleClass('li-first-back').toggleClass('li-second-back');
        },
        mouseleave: function () {
            $('.our-team .team .per-son .per-img .loading .bar-3').hide().animate({width: '0'});
            $('.our-team ul li:nth-child(3)').toggleClass('li-first-back').toggleClass('li-second-back');
        }
    });
    $('.our-team .team .per-son .per-img .img-loading-4').on({
        mouseenter: function () {
            $('.our-team .team .per-son .per-img .loading .bar-4').fadeIn().animate({width: '100%'}, 300);
            $('.our-team ul li:last-child').toggleClass('li-first-back').toggleClass('li-second-back');
        },
        mouseleave: function () {
            $('.our-team .team .per-son .per-img .loading .bar-4').hide().animate({width: '0'});
            $('.our-team ul li:last-child').toggleClass('li-first-back').toggleClass('li-second-back');
        }
    });
});
