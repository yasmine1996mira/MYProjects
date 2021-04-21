

$(function(){ // Menu du header
    $('.header-menu').hide()
    $('#fa-user').on('click',function(){
        $('.header-menu').toggle('slow')
    })
})





$('.category').on({ // l'animation de la catégorie
    mouseover:function(){$('.carousel-cell').css('animation-play-state','paused')},
    mouseleave:function(){$('.carousel-cell').css('animation-play-state','running')}
})

/*
$('#aside-menu').on({ // l'animation menu de gauche
    mouseover:function(){$('#aside-menu').css('width','250px')},
    mouseleave:function(){$('#aside-menu').css('width','50px')},
})*/



