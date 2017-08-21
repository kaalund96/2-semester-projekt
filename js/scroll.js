//Scroll effekt på desktop-menu
//Menuen vises som udgangspunkt ikke

//Kennet: Nav virker, men nav-div-venstre og nav-div-højre gør ikke
    $('nav, .nav-div-venstre, .nav-div-højre').toggleClass('desktopnavnone');

//Ved scroll vises menuen
$(document).scroll(function(){
     $('nav, .nav-div-venstre, .nav-div-højre').toggleClass('desktopnavscroll', $(this).scrollTop() > $(window).height());
    });
    
    /* sammenflettet og omskrivning af http://codepen.io/rgfx/pen/mlyib (Revolution Graphics) og https://stackoverflow.com/questions/29366616/scroll-down-page-by-the-height-of-current-viewport (Alvin Magalona)*/


