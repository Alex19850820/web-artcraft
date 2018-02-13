$(function () {

    /*clouds animation*/
    var x = 0;
    setInterval(function () {
        var pos = (x -= 1) + 'px 0';
        $('.cloud1').css('background-position', pos);
    }, 50);
    var y = 0;
    setInterval(function () {
        var pos = (y += 1) + 'px 0';
        $('.cloud2').css('background-position', pos);
    }, 70);

    /*slider gallery*/
    var positionSlide = 0;
    $(document).on('click', '.portfolio__gallery--btn', function () {
        positionSlide = positionSlide - 430;
        $('.portfolio__gallery--scroller').css({'transform': 'translate('+ positionSlide +'px, 0)'});
    });

    $('.blog__slider').slick({
        dots:false,
        slidesToShow: 4,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });


    $('.brief__col input[type="text"]').unbind().blur( function(){

        var id = $(this).attr('id');
        var val = $(this).val();

        switch(id) {
            // Проверка поля "Имя"
            case 'name':
                var rv_name = /^[a-zA-Zа-яА-Я]+$/;

                if (val.length > 2 && val != '' && rv_name.test(val)) {
                    $(this).addClass('not_error');
                    $(this).next('.error-box').addClass('correctly')
                        .css('color','transparent')
                        .animate({'paddingLeft':'20px'},400)
                        .animate({'paddingLeft':'10px'},400);
                    $(this).css({
                        'color': '#272e34',
                        'border-bottom-color': '#ccc'
                    })
                } else {
                    $(this).removeClass('not_error').addClass('error');
                    $(this).next('.error-box').html('*').removeClass('correctly')
                        .css('color', 'red')
                        .animate({'paddingLeft':'20px'},400)
                        .animate({'paddingLeft':'10px'},400);
                    $(this).css({
                        'color': 'red',
                        'border-bottom-color': '#eb4534'
                    })
                }
                break;

            // Проверка email
            case 'phone':
                var rv_phone = /^[0-9]+$/;
                if (val != '' && rv_phone.test(val)) {
                    $(this).addClass('not_error');
                    $(this).next('.error-box').addClass('correctly')
                        .css('color','transparent')
                        .animate({'paddingLeft':'10px'},400)
                        .animate({'paddingLeft':'5px'},400);
                    $(this).css({
                        'color': '#272e34',
                        'border-bottom-color': '#ccc'
                    })
                } else {
                    $(this).removeClass('not_error').addClass('error');
                    $(this).next('.error-box').html('*').removeClass('correctly')
                        .css('color', 'red')
                        .animate({'paddingLeft':'20px'},400)
                        .animate({'paddingLeft':'10px'},400);
                    $(this).css({
                        'color': 'red',
                        'border-bottom-color': '#eb4534'
                    })
                }
                break;
        } // end switch(...)
    }); // end blur()
    /* close contacts validation*/


    $(document).on("click", ".header__nav a", function() {
        event.preventDefault();
        var t = $(this).attr("href"),
            e = $(t),
            a = e.offset().top;
        return $("html,body").animate({
            scrollTop: a
        }, 1e3),
            !1
    });



    $(document).on('click', '.header__mobile-btn', function () {
        $('.header__mobile-btn').toggleClass('header__mobile-btn--active');
        $('.header__nav').slideToggle().css('display', 'flex');
    });

});











