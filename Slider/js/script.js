$(document).ready(function () {
    let speed = 500; //fade speed
    let autoswitch = true; //auto slider option
    let autoswitch_speed = 4000; //Auto slider speed

    //add initial active class
    $('.slide').first().addClass('active');

    //hide all slides
    $('.slide').hide();

    //show first slider
    $('.active').show('active');

    //next slider
    $('#next').on('click',nextSlide);

    //prev slider
    $('#prev').on('click',prevSlide);

    //auto switch slide
    if (autoswitch == true){
        setInterval(nextSlide,autoswitch_speed);
    }


    //switch to next slide
    function nextSlide() {
        $('.active').removeClass('active').addClass('oldActive');
        if ($('.oldActive').is(':last-child')){
            $('.slide').first().addClass('active');
        }
        else{
            $('.oldActive').next().addClass('active')
        }
        $('.oldActive').removeClass('oldActive');

        $('.slide').fadeOut(speed);

        $('.active').fadeIn(speed);
    }

    //switch to prev slide

    function prevSlide() {
        $('.active').removeClass('active').addClass('oldActive');
        if ($('.oldActive').is(':first-child')){
            $('.slide').last().addClass('active');
        }
        else{
            $('.oldActive').prev().addClass('active')
        }
        $('.oldActive').removeClass('oldActive');

        $('.slide').fadeOut(speed);

        $('.active').fadeIn(speed);
    }
});