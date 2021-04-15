/* Маска для формы номера телефона */
/*
	Masked Input plugin for jQuery
	Copyright (c) 2007-2013 Josh Bush (digitalbush.com)
	Licensed under the MIT license (http://digitalbush.com/projects/masked-input-plugin/#license)
	Version: 1.3.1
*/
(function(e){function t(){var e=document.createElement("input"),t="onpaste";return e.setAttribute(t,""),"function"==typeof e[t]?"paste":"input"}var n,a=t()+".mask",r=navigator.userAgent,i=/iphone/i.test(r),o=/android/i.test(r);e.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},dataName:"rawMaskFn",placeholder:"_"},e.fn.extend({caret:function(e,t){var n;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof e?(t="number"==typeof t?t:e,this.each(function(){this.setSelectionRange?this.setSelectionRange(e,t):this.createTextRange&&(n=this.createTextRange(),n.collapse(!0),n.moveEnd("character",t),n.moveStart("character",e),n.select())})):(this[0].setSelectionRange?(e=this[0].selectionStart,t=this[0].selectionEnd):document.selection&&document.selection.createRange&&(n=document.selection.createRange(),e=0-n.duplicate().moveStart("character",-1e5),t=e+n.text.length),{begin:e,end:t})},unmask:function(){return this.trigger("unmask")},mask:function(t,r){var c,l,s,u,f,h;return!t&&this.length>0?(c=e(this[0]),c.data(e.mask.dataName)()):(r=e.extend({placeholder:e.mask.placeholder,completed:null},r),l=e.mask.definitions,s=[],u=h=t.length,f=null,e.each(t.split(""),function(e,t){"?"==t?(h--,u=e):l[t]?(s.push(RegExp(l[t])),null===f&&(f=s.length-1)):s.push(null)}),this.trigger("unmask").each(function(){function c(e){for(;h>++e&&!s[e];);return e}function d(e){for(;--e>=0&&!s[e];);return e}function m(e,t){var n,a;if(!(0>e)){for(n=e,a=c(t);h>n;n++)if(s[n]){if(!(h>a&&s[n].test(R[a])))break;R[n]=R[a],R[a]=r.placeholder,a=c(a)}b(),x.caret(Math.max(f,e))}}function p(e){var t,n,a,i;for(t=e,n=r.placeholder;h>t;t++)if(s[t]){if(a=c(t),i=R[t],R[t]=n,!(h>a&&s[a].test(i)))break;n=i}}function g(e){var t,n,a,r=e.which;8===r||46===r||i&&127===r?(t=x.caret(),n=t.begin,a=t.end,0===a-n&&(n=46!==r?d(n):a=c(n-1),a=46===r?c(a):a),k(n,a),m(n,a-1),e.preventDefault()):27==r&&(x.val(S),x.caret(0,y()),e.preventDefault())}function v(t){var n,a,i,l=t.which,u=x.caret();t.ctrlKey||t.altKey||t.metaKey||32>l||l&&(0!==u.end-u.begin&&(k(u.begin,u.end),m(u.begin,u.end-1)),n=c(u.begin-1),h>n&&(a=String.fromCharCode(l),s[n].test(a)&&(p(n),R[n]=a,b(),i=c(n),o?setTimeout(e.proxy(e.fn.caret,x,i),0):x.caret(i),r.completed&&i>=h&&r.completed.call(x))),t.preventDefault())}function k(e,t){var n;for(n=e;t>n&&h>n;n++)s[n]&&(R[n]=r.placeholder)}function b(){x.val(R.join(""))}function y(e){var t,n,a=x.val(),i=-1;for(t=0,pos=0;h>t;t++)if(s[t]){for(R[t]=r.placeholder;pos++<a.length;)if(n=a.charAt(pos-1),s[t].test(n)){R[t]=n,i=t;break}if(pos>a.length)break}else R[t]===a.charAt(pos)&&t!==u&&(pos++,i=t);return e?b():u>i+1?(x.val(""),k(0,h)):(b(),x.val(x.val().substring(0,i+1))),u?t:f}var x=e(this),R=e.map(t.split(""),function(e){return"?"!=e?l[e]?r.placeholder:e:void 0}),S=x.val();x.data(e.mask.dataName,function(){return e.map(R,function(e,t){return s[t]&&e!=r.placeholder?e:null}).join("")}),x.attr("readonly")||x.one("unmask",function(){x.unbind(".mask").removeData(e.mask.dataName)}).bind("focus.mask",function(){clearTimeout(n);var e;S=x.val(),e=y(),n=setTimeout(function(){b(),e==t.length?x.caret(0,e):x.caret(e)},10)}).bind("blur.mask",function(){y(),x.val()!=S&&x.change()}).bind("keydown.mask",g).bind("keypress.mask",v).bind(a,function(){setTimeout(function(){var e=y(!0);x.caret(e),r.completed&&e==x.val().length&&r.completed.call(x)},0)}),y()}))}})})(jQuery);
/* !!!Маска для формы номера телефона!!! */
jQuery(document).ready(function($) {
    /* Маска для формы номера телефона */
    $("input[type=tel]").mask("+9 (999) 99-99-999");
    /* !!!Маска для формы номера телефона!!! */
$('#hamburger_header').click(function(){
    if ( $(this).hasClass('is-active'))
     {
        $('.bg').removeClass('active');
		$('.mobile_menu').removeClass('active');
        $('#hamburger_header').removeClass('is-active');
        $('html,body').css('overflow','auto');
		$('header').removeClass('pos_inherit');
    } else {
		$('.bg').addClass('active');
		$('.mobile_menu').addClass('active');
        $('#hamburger_header').addClass('is-active');
        $('html,body').css('overflow','hidden');
		$('header').addClass('pos_inherit');
	}
});
$(window).resize(function () {
  if ($(window).width() >= 992) {
       $('.bg').removeClass('active');
		$('.mobile_menu').removeClass('active');
        $('#hamburger_header').removeClass('is-active');
        $('html,body').css('overflow','auto');
		$('header').removeClass('pos_inherit');
  }
});

 $('.bg').click(function(){
	if ($(this).hasClass('active'))
	{
		 $('.bg').removeClass('active');
		$('.mobile_menu').removeClass('active');
        $('#hamburger_header').removeClass('is-active');
        $('html,body').css('overflow','auto');
		$('header').removeClass('pos_inherit');
	}
})
 $('.header_menu_mob .show_sub_menu').click(function(){
 var ids=$(this).data('from');
 if ($(this).hasClass('active')) {
	$('#'+ids).removeClass('focus');
	$(this).removeClass('active');
	$('#'+ids+ ' ul').css('display','none');
 }
 else {
	$('#'+ids).addClass('focus');
	$(this).addClass('active');
	$('#'+ids+ ' ul').css('display','block');
	$('#'+ids+ ' ul ul').css('display','none');
 }
 })

    $('.main_screen_section').slick({
        arrows: false,
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1
    });
    $('.popular_products_slider').slick({
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="fal fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fal fa-chevron-right"></i></button>',
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 993,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 680,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.our_partners_block').slick({
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="fal fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fal fa-chevron-right"></i></button>',
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        responsive: [
            {
                breakpoint: 993,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 680,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });
    $('.our_customer_review_block').slick({
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="fal fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fal fa-chevron-right"></i></button>',
        infinite: true,
        slidesToShow: 3,
        centerMode: true,
        // centerPadding: 20,
        variableHeight: true,
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    variableHeight: false,

                    slidesToShow: 2
                }
            },
            {
                breakpoint: 680,
                settings: {
                    variableHeight: false,

                    slidesToShow: 1
                }
            }
        ]
    });
    $('.popular_series_models_slider').slick({
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="fal fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fal fa-chevron-right"></i></button>',
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        responsive: [
            {
                breakpoint: 993,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 680,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });

    // header slider dots position
    let withMainSection = $(".main_screen_section").innerWidth();
    let withMainSectionContainer = $(".container").innerWidth();
    let offsetMainSectionDots = (withMainSection - withMainSectionContainer)/2 + 15;
    $(".main_screen_section .slick-dots").css("right", offsetMainSectionDots)
    $(window).resize(function () {
        // header slider dots position
        withMainSection = $(".main_screen_section").innerWidth();
        withMainSectionContainer = $(".container").innerWidth();
        offsetMainSectionDots = (withMainSection - withMainSectionContainer)/2 + 15;
        $(".main_screen_section .slick-dots").css("right", offsetMainSectionDots)
    });

//    services page tabs
    var tab = $('#services_tabs .services_tabs-items > div');
    tab.hide().filter(':first').show();
    // Клики по вкладкам.



    /* При клике наа таб */
    $(".services_tabs-nav a").click(function(){

        var href = $(this).attr('href');
        if (this.closest('.child-navigation')) {
            var href = href.split('/services/')[1];
        }
        console.log(href);
        tab.hide();
        tab.filter(this.hash).show();
        $('#services_tabs .services_tabs-nav a').removeClass('active');
        $(this).addClass('active');
        return false;
    });
    /* При клике на подменю */
    $(".child-navigation a, .footer_menu_list a").click(function(){
        if ($(".services_page").length)  {
            var href = $(this).attr('href');
            if (this.closest('.child-navigation')) {
                var href = href.split('/services/')[1];
            }
            console.log(href);
            tab.hide();
            tab.filter(this.hash).show();
            $('#services_tabs .services_tabs-nav a').removeClass('active');
            $('#services_tabs .services_tabs-nav a[href='+ this.hash +']').addClass('active');
            return false;
        } else {

        }
    });
    /* Активация нужного таба при переходе с других страниц*/
    function activateServicesTab() {
        if ($(".services_page").length) {
            var href = window.location.hash;
            $('#services_tabs .services_tabs-nav a[href='+ href +']').trigger( "click" );
            $('body,html').animate({scrollTop: 180}, 100);
        }
    }
    activateServicesTab();

    // Клики по якорным ссылкам.
    $('.tabs-target').click(function(){
        $('#services_tabs .services_tabs-nav a[href=' + $(this).data('id')+ ']').click();
    });
//    Калькулятор для мощности кондиционера
    var roomSquare, roomHeight, roomPeople, condPower, condText, installationPrice;
    $('.calculate_button').click(function(e) {
        e.preventDefault();
        roomSquare = $('.room_square').val();
        roomSquare = Math.ceil(roomSquare);
        roomHeight = $('.room_height option:selected').val();
        roomPeople = $('.room_people_quantity option:selected').val();
        var result = (parseInt(roomSquare) * parseFloat(roomHeight)) * parseFloat(roomPeople);
        condPower = 0;
        installationPrice = 0;
        if (result == 0) {
            $('.output_class').html('Введите число больше 0');
        }  else if (result >=1 && result <= 21)  {
            condPower = '07';
            installationPrice = '2500 р+600 р (метр трассы)';
        }  else if (result >21 && result <= 27)  {
            condPower = '09';
            installationPrice = '2500 р+600 р (метр трассы)';
        } else if (result >27 && result <= 36)  {
            condPower = '12';
            installationPrice = '3000 р+800 р (метр трассы)';
        } else if (result >36 && result <= 55)  {
            condPower = '18';
            installationPrice = '4000 р+1000 р (метр трассы)';
        } else if (result >55 && result <= 75)  {
            condPower = '24';
            installationPrice = '5000 р+1200 р (метр трассы)';
        } else if (result >75 && result <= 85)  {
            condPower = '28';
            installationPrice = '5500 р+1200 р (метр трассы)';
        } else if (result >85 && result <= 90)  {
            condPower = '30';
            installationPrice = '5500 р+1200 р (метр трассы)';
        } else if (result >90 && result <= 120)  {
            condPower = '36';
            installationPrice = '6000 р+1200 р (метр трассы)';
        } else {

        }
        if (result >0 && result <= 120) {
            condText = '<div class="popup_condText"><p>Исходя из введенных вами данных, мы рекомендуем вам обратить внимание на кондиционеры с мощюностью ' + condPower + '.</p>  <p>Стоимость монтажа кондиционера указанной мощности ' + installationPrice + '</p> <p style="font-size: 0.8em;color: #656565;line-height: 1;">Внимание: заказать монтаж можно не во всех городах. Свяжитесь с менежером для уточнения условий монтажа</p> <p>Подходящие для вас кондиционеры вы можете посмотреть перейдя в каталог.</p><br><a href="/product-category/conditioner/?filter_moshhnost-kondiczionera='+condPower+'" class="link_button_sm">Перейти в каталог</a></div>';
        } else if (result == 0) {
            condText = 'Введите площадь помещения больше 0.';
        }  else {
            condText = 'Вам необходим индивидуальный и более детальный расчет.';
        }
        $.fancybox.open(condText);
    });
    // FAQ Вкладки
    $(function() {
        var tab = $('.faq_page #tabs .tabs-items > div');
        tab.hide().filter(':first').show();
        $('.faq_page #tabs .tabs-nav a').click(function(){
            tab.hide();
            tab.filter(this.hash).show();
            $('.faq_page #tabs .tabs-nav a').removeClass('active');
            $(this).addClass('active');
            return false;
        }).filter(':first').click();

        $('.faq_page .tabs-target').click(function(){
            $('#tabs .tabs-nav a[href=' + $(this).data('id')+ ']').click();
        });
    });
    //    Аккордион
    $('.accordion').accordion({
        active: true,
        collapsible: true,
        heightStyle: 'content',
        header: '> .accordion-item > .accordion-header'
    });
// end jq


    // header_icons_search
    // header search

    $('.header_icons_search').click(function (e) {
        e.preventDefault();
        $('.search_wrapper').slideToggle();
    });

    /*Перемещение цветов на странице продукта*/
    function moveVariantProductColor() {
        if ($('body').find('.product_card_section').length) {
        if($(window).width() > 768 ) {
                let imageBlockWidth = ($('body').find('.product_card_section .image_block').width()) * -1;
                let imageBlockHeight = $('body').find('.product_card_section .image_block').height() + 30;
                let colorBlockHeight = $('body').find('.product_card_section .variations_form.cart #variation_pa_color').height() + imageBlockHeight + 20;
                $('body').find('.product_card_section .variations_form.cart #variation_pa_color').css({ "position": "absolute", "left": imageBlockWidth, "top": imageBlockHeight });
                $('body').find('.product_card_section .variations_form.cart .single_variation_wrap .quantity').css({ "position": "absolute", "left": imageBlockWidth + 124, "top": colorBlockHeight, "width": "80px" });
            }   else {
            let  priceBlockWidth = ($('body').find('.product_card_section .price_block').width()) * -1;
            $('body').find('.product_card_section .variations_form.cart #variation_pa_color').css({"position": "relative", "left": priceBlockWidth, "top": '0px' });
            $('body').find('.product_card_section .variations_form.cart .single_variation_wrap .quantity').css({"position": "relative", "left": priceBlockWidth + 124, "top": '0px', "width": "80px"});
        }
        }
    }
    /* Изменение цены варианта */
    function changePriseVariation() {
        if ($('body').find('.product_card_section .pdp-description #variation_pa_color').length && $('body').find('.pdp-description .single_variation_wrap .woocommerce-variation-price .price').length) {

                let newPrice = $('body').find('.product_card_section .pdp-description .single_variation .woocommerce-variation-price .price');
                $('body').find('.product_card_section .pdp-description .price_block').empty();
                $(newPrice).clone().appendTo($('body').find('.product_card_section .pdp-description  .price_block'));
        }
    }
    $('body .product_card_section ').click(function() {
        setTimeout(changePriseVariation, 100);
    });
    $( window ).resize(function() {
        moveVariantProductColor();
    });
    setTimeout(moveVariantProductColor, 1000);
    setTimeout(changePriseVariation, 1000);
})
