/*on scroll change header color*/

$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $(".header").css("background","#fff");
            $(".header").css("box-shadow", "0 12px 20px -10px rgba(0, 0, 0, 0.28), 0 4px 20px 0px rgba(10, 0, 0, 0.12), 0 7px 8px -5px rgba(0, 0, 0, 0.2)");
            $(".header .menu ul li a").css("color", "#212121");
            $(".header_nav_active a").css("color","#fff");
			//$(".header nav.menu .hamburger span").css("color","#000");

            
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $(".header").css("background","transparent");
            $(".header").css("box-shadow", "none");
            $(".header .menu ul li a").css("color","#fff");
			//$(".header nav.menu .hamburger span").css("color","red");
    
        }
    });
});

/* Nav slide in mobile view */
$(function () {
    $('.hamburger').click(function () {
        showHideMobile();
    });
    $(".dimmer").click(function () {
        showHideMobile();
    });
    $('li .icon-arrow').click(function () {
        $(this).parent().parent().toggleClass('showSubmenu');
    });
});

function showHideMobile() {
    $(".hamburger").toggleClass('active');
    $(".hamburger").parent('.menu').toggleClass('active');
    $('.dimmer').toggleClass('active');
    $('body').toggleClass('no-scrolling');
}
/*######################## Active nav ##########################*/
$(document).ready(function () {
    $(function () {
        var current_page_URL = location.href;
        //console.log(current_page_URL);
        $("nav a").each(function () {
            
            if ($(this).attr("href") !== "#") {
               // console.log(this);
                var target_URL = $(this).prop("href");
                //console.log(target_URL);
                 if (target_URL == current_page_URL) {
                    $('nav a').parents('li, ul').removeClass('header_nav_active');
                    $(this).parent('li').addClass('header_nav_active');
                   
                  return false;
                }
            }
        });
    });
});

/*  Time countup */

/* --------------------------
 * GLOBAL VARS
 * -------------------------- */
// The date you want to count down to
var targetDate = new Date("2018/07/24 00:00:00");
// Other date related variables
var days;
var hrs;
var min;
var sec;
/* --------------------------
 * ON DOCUMENT LOAD
 * -------------------------- */
$(function () {
    // Calculate time until launch date
    timeToLaunch();
    // Transition the current countdown from 0 
    numberTransition('#days .number', days, 1000, 'easeOutQuad');
    numberTransition('#hours .number', hrs, 1000, 'easeOutQuad');
    numberTransition('#minutes .number', min, 1000, 'easeOutQuad');
    numberTransition('#seconds .number', sec, 1000, 'easeOutQuad');
    // Begin Countdown
    setTimeout(countDownTimer, 1001);
});
/* --------------------------
 * FIGURE OUT THE AMOUNT OF 
   TIME LEFT BEFORE LAUNCH
 * -------------------------- */
function timeToLaunch() {
    // Get the current date
    var currentDate = new Date();
    // Find the difference between dates
    var diff = (currentDate - targetDate) / 1000;
    var diff = Math.abs(Math.floor(diff));
    // Check number of days until target
    days = Math.floor(diff / (24 * 60 * 60));
    sec = diff - days * 24 * 60 * 60;
    // Check number of hours until target
    hrs = Math.floor(sec / (60 * 60));
    sec = sec - hrs * 60 * 60;
    // Check number of minutes until target
    min = Math.floor(sec / (60));
    sec = sec - min * 60;
}
/* --------------------------
 * DISPLAY THE CURRENT 
   COUNT TO LAUNCH
 * -------------------------- */
function countDownTimer() {
    // Figure out the time to launch
    timeToLaunch();
    // Write to countdown component
    $("#days .number").text(days);
    $("#hours .number").text(hrs);
    $("#minutes .number").text(min);
    $("#seconds .number").text(sec);
    // Repeat the check every second
    setTimeout(countDownTimer, 1000);
}
/* --------------------------
 * TRANSITION NUMBERS FROM 0
   TO CURRENT TIME UNTIL LAUNCH
 * -------------------------- */
function numberTransition(id, endPoint, transitionDuration, transitionEase) {
    // Transition numbers from 0 to the final number
    $({
        numberCount: $(id).text()
    }).animate({
        numberCount: endPoint
    }, {
        duration: transitionDuration
        , easing: transitionEase
        , step: function () {
            $(id).text(Math.floor(this.numberCount));
        }
        , complete: function () {
            $(id).text(this.numberCount);
        }
    });
};


/* --------------------------
 on scroll animation
 * -------------------------- */
       // Trigger CSS animations on scroll.
        // Detailed explanation can be found at http://www.bram.us/2013/11/20/scroll-animations/
        // Looking for a version that also reverses the animation when
        // elements scroll below the fold again?
        // --> Check https://codepen.io/bramus/pen/vKpjNP
        jQuery(function ($) {
            // Function which adds the 'animated' class to any '.animatable' in view
            var doAnimations = function () {
                // Calc current offset and get all animatables
                var offset = $(window).scrollTop() + $(window).height()
                    , $animatables = $('.animatable');
                // Unbind scroll handler if we have no animatables
                if ($animatables.length == 0) {
                    $(window).off('scroll', doAnimations);
                }
                // Check all animatables and animate them if necessary
                $animatables.each(function (i) {
                    var $animatable = $(this);
                    if (($animatable.offset().top + $animatable.height() - 20) < offset) {
                        $animatable.removeClass('animatable').addClass('animated');
                    }
                });
            };
            // Hook doAnimations on scroll, and trigger a scroll
            $(window).on('scroll', doAnimations);
            $(window).trigger('scroll');
        });






/* --------------------------
 Distance Range Slider
 * -------------------------- */


    var $element = $('input[type="range"]');
    $element.rangeslider({
        polyfill: false
        , onInit: function () {
            var $handle = $('.rangeslider__handle', this.$range);
            updateHandle($handle[0], this.value);
        }
    }).on('input', function (e) {
        var $handle = $('.rangeslider__handle', e.target.nextSibling);
        updateHandle($handle[0], this.value);
    });

    function updateHandle(el, val) {
        el.textContent = "0 - " + val + " KM";
    }

/* --------------------------
profile pandit tab
 * -------------------------- */


/* --------------------------
Profile pic uploa
 * -------------------------- */


$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});

