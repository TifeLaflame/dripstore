$(document).ready(function(){
    $(window).scroll(function(){
        const scroll = $(window).scrollTop();
        if(scroll > 100){
            $('#header').css('background','#05204a');
            $('#header #mainNav li a').css('color','#fbf5f3');
        }else {
            $('#header').css('background','#fbfbfb');
            $('#header #mainNav li a').css('color','#020202');
        }
        
    });
});