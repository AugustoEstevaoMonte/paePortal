
// INICIO DO NIVO SLIDE SCRIPTS
  $(window).load(function() {
    $('#slider').nivoSlider({
    effect: 'fade',
    slices: 15,
    boxCols: 8,
    boxRows: 4,
    animSpeed: 500,
    pauseTime: 5000,
    startSlide: 0,
    directionNav: true,
    controlNav: true,
    controlNavThumbs: false,
    pauseOnHover: true,
    manualAdvance: false,
    prevText: '<i class="fas fa-chevron-circle-left"></i>',
    nextText: '<i class="fas fa-chevron-circle-right"></i>',
    randomStart: false,
    beforeChange: function(){},
    afterChange: function(){},
    slideshowEnd: function(){},
    lastSlide: function(){},
    afterLoad: function(){}
    });
    });
// FIM DO NIVO SLIDE SCRIPTS

    $(document).ready(function(){
        $("ul.sub-menu").parent().addClass("dropdown");
        $("ul.sub-menu").addClass("dropdown-menu");
        $("ul#menuid li.dropdown a").addClass("dropdown-toggle");
        $("ul.sub-menu li a").removeClass("dropdown-toggle"); 
        $('.navbar .dropdown-toggle').append('');
        $('a.dropdown-toggle').attr('data-toggle', 'dropdown');
    });

