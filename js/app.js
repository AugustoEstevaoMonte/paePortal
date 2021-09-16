//INICIO VLIBRAS
new window.VLibras.Widget('https://vlibras.gov.br/app');

jQuery(function(){
  jQuery('.vLibrasActivator').click(function(){
    document.querySelector('[vw-access-button]').click();
    e.preventDefault();
  });
})

let contrasteBtn = document.getElementById("contrasteBtn");
contrasteBtn.addEventListener('click',function(){
  $("body").toggleClass('contraste_bg');
  jQuery(".changeBG").toggleClass('contraste_bg');
  jQuery(".textWhiteContraste").toggleClass('text_contrast');
  jQuery(".link_acess").toggleClass("link_contrast"); 
  jQuery(".changeBG_and_border").toggleClass("changes");
  jQuery(".change_box_dados").toggleClass("box_contraste_change");
  jQuery(".btn_contraste_change").toggleClass("btn_con_change");
  jQuery(".change_box_faq").toggleClass("box_con_faq_change");
  jQuery(".card_contrast_change").toggleClass("card_con_change");
  jQuery(".nivo-caption").toggleClass("nivo_con_change");
  jQuery(".titulo_category_con").toggleClass("titulo_category_contrast");
  jQuery(".change_card_category").toggleClass("card_category_con");
  jQuery(".noticias_con").toggleClass("noticias_contrast_change");
  jQuery(".single_con_change").toggleClass("single_contrast_change");
});
//FIM VLIBRAS

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

