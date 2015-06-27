/*================================================
  Document ready
================================================*/
$(document).ready(function() {

/*------------------------------------
  Components
------------------------------------*/

    // Modal popup window - videos
    $('.video-overlay').magnificPopup({
      type: 'iframe',
      mainClass: 'mfp-fade'
    });


    // Tooltips
    $('.tooltip').tooltipster({
       animation: 'fade',
       touchDevices: false,
       trigger: 'hover',
       contentAsHTML: false,
       interactive: true,
       position: 'top'
    });


    // Tabs
    $('.tabs li').on('click', function(){
        var tabID = $(this).data('tabid');
        $('.tabs li').removeClass('active');
        $('.tab-panel').removeClass('active');
        $(this).addClass('active');
        $('.tab-panel#'+tabID).slideToggle().addClass('active');
    });


    // Accordion
    $('.accordion .acc-title').on('click', function(){
        var panelID = $(this).data('panelid');
        $(this).toggleClass('active');
        $('.acc-panel#'+panelID).toggleClass('active').slideToggle('fast');
    });

    // Clear the search form
    $("input[type='text'][name*='SearchValue_TextBox']").val('');


/*------------------------------------
  Site specific
------------------------------------*/

    // Sliding mobile menu
    $('.mobile-menu-toggle').on('click', function(e){
        $('.nav-wrap').toggleClass('open');
    });

    /* Mobile menu links */
    $("#header").on('click', '.open #navigation li a', function(e){
        var parentItem = $(this).parent();
        if ( $(parentItem).children("ul").length > 0 ) {
            e.preventDefault();
            $(parentItem).children("ul").toggleClass('open');
        }
    });

    // Mobile menu parent links
    $('#navigation > li').each(function(){
      if ( $(this).children("ul").length > 0 ) {
        $(this).addClass('parent');
        var parentTitle = $(this).clone().contents('a:first-child').html();
        var parentLink = $(this).clone().contents('a:first-child').attr('href');
        $(this).children('ul').children('li:first-child').before('<li class="mobile-link"><a href="'+ parentLink +'">' + parentTitle + '</a></li>');
      }
    });

    // Search dropdown
    $('.search').on('click', function(e){
        $('.header-search').toggle();
    });

    // Get window width
    var windowWidth = $(window).width();

    // Back to top button
    $(function() {
        $(window).scroll(function() {
            var sectionHeight = $('#section1').height();
            if($(this).scrollTop() > sectionHeight) {
                $('#backBtn').fadeIn(300);
            } else {
                $('#backBtn').fadeOut(300);
            }
        });

        $('#backBtn').click(function() {
            $('body, html').animate({scrollTop:0},800);
        });

        $('.top-btn').click(function() {
            $('body, html').animate({scrollTop:0},800);
        });
    });

    // Reset for inputs
    /*inputReseter($('.email input'), 'Enter an email address');*/

    // Add class on form focus
    $('.form input:not([type="submit"]), .form select, .form textarea').bind("focus blur",function(){
        $(this).parent().toggleClass('focus');
    });

    // Adjust styles for fixed header on page scroll
    if (windowWidth > 480){

        $(window).bind('scroll', function () {
            if($(this).scrollTop() > 80){
                $('.header-top').stop().addClass('bg-position');
            } else {
                $('.header-top').stop().removeClass('bg-position');
            }
        });
    }

}); // end document ready


/*================================================
  Functions
================================================*/

/*------------------------------------
  Components
------------------------------------*/

    // Strict new page
    $(function() {
        $('a[rel*=external]').click( function() {
            window.open(this.href);
            return false;
        });
    });

    // Input resetter
    function inputReseter(jqObj, iniVal){
        $(jqObj).focus(function(){
            value = $(this).val();
            if( value == iniVal ){
                $(this).val('');
                } else {
            // user has entered input, do nothing
            }
        });
        $(jqObj).blur(function(){
            if($(this).val() === ''){
                $(this).val(iniVal);
                } else {
            // user has entered input, do nothing
            }
        });
    }

/*------------------------------------
  Site specific
------------------------------------*/

    // Horizontal and vertical align
    $.fn.hAlign = function() {
        return this.each(function(i){
        var ah = $(this).width();
        var ph = $(this).parent().width();
        var mh = ((ph - ah) / 2);
        $(this).css('margin-left', mh);
        });
    };

    $.fn.vAlign = function() {
        $(this).parent().height(maxElWidth($(this)));
        return this.each(function(i){
        var ah = $(this).height();
        var ph = $(this).parent().height();
        var mh = ((ph - ah) / 2);
        $(this).css('margin-top', mh);
        });
    };

    function maxElWidth($elements) {
        var maxHeight = 0;
        $elements.each(function(key, val) {
            if($(val).height()>maxHeight) {
                maxHeight = $(val).height();
            }

        });
        return maxHeight;
    }

    function equalHeight(group) {
        var tallest = 0;
        group.each(function() {
            var thisHeight = $(this).height();
            if(thisHeight > tallest) {
                tallest = thisHeight;
            }
        });
        group.height(tallest);
    }