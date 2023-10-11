$(document).scroll(function(e){
    let scrollTop = $(document).scrollTop();
    if(scrollTop > 0){
        $('.navbar').css("position","fixed");
        $('.navbar').css("height","50px");
    } else {
        $('.navbar').css("position","relative");
        $('.navbar').css("height","60px");
    }
});
