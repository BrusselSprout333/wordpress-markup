$(document).ready(function(){
    /* плавная прокрутка */
    $('.header a[href^="#"').click(function() {
        let target = $(this).attr('href'); //присваиваем этому эл-ту атрибут
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 500);  //scroll вниз при ссылках 500 мс
        $('.header a[href^="#"').parent().removeClass('active');
        $(this).parent().addClass('active');
        $('.menu__mobile .menu').toggle(500);
        $('.menu__burger').toggleClass('close');
        return false; //отмена стандартного поведения ссылок
    })

    /* бургер для мобильных устройств */
    $('.menu__burger').click(function() {
        $('.menu__mobile .menu').toggle(500); //отображение за 500мс
        $(this).toggleClass('close');
    });

    /* слайдер */
    let swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        slidesPerGroup: 3,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});