$(window).on("scroll", function() {
    if($(window).scrollTop() > 1000) {
        $(".links").addClass("coloredlinks");
        $(".rechts").addClass("coloredrechts");
        $('.content').fadeOut(1000);
        $('.content2').fadeIn(1000);
        $('.information').fadeOut(1000);
        $('.information2').fadeIn(1000);



    } else {
        // Verwijder de achtergrond kleur zodat die weer transparant word
        $(".links").removeClass("coloredlinks");
        $(".rechts").removeClass("coloredrechts");
        $('.content2').fadeOut(1000);
        $('.content').fadeIn(1000);
        $('.information2').fadeOut(1000);
        $('.information').fadeIn(1000);

    }
});
function scroll(){
    $('.content').fadeIn(1000);
    $('.content2').fadeOut(1000);
}

scroll();