$(function(){

    $('nav.mobile').click(function(){
        var listaMenu=$('nav.mobile ul');
        if(listaMenu.is(':hidden')==true){
            var icone = $('.botao-menu').find('i');
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');
            listaMenu.slideToggle();
        }
        else{
            var icone = $('.botao-menu').find('i');
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
            listaMenu.slideToggle();
        }
    })
    $('.fa-twitter').click(function(){
        url="https://twitter.com/bernardobb_13";
        $(location).attr("href", url);
    })
    $('.fa-facebook-square').click(function(){
        url="http://facebook.com.br";
        $(location).attr("href", url);
    })
    $('.fa-linkedin-square').click(function(){
        url="https://www.linkedin.com/in/bernardo-barbosa-05168478/";
        $(location).attr("href", url);
    })
    $('.fa-instagram').click(function(){
        url="https://www.instagram.com/bernardobuenobarbosa/";
        $(location).attr("href", url);
    })
    $('.fa-github-square').click(function(){
        url="http://github.com/bernardobb93";
        $(location).attr("href", url);
    })

})