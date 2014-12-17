(function($) {
    $(document).ready(function() {

        $('#shotsByPlayerId').feeds({
            feeds: {
                evento: 'http://tortoyoyo.tumblr.com/tagged/evento/rss'
            },
            ssl: 'false',
            entryTemplate: function(entry) {
                var template = '';

                if (entry.source == 'evento') {

                    var splitvalores = entry.content.split('</p>');
                    var img = splitvalores[0] + '</p>';
                    var conteudo = splitvalores[1] + '</p>';

                    template += '<li>'
                    template += '<a href="#">'
                    template += img
                    template += '<h3><a href="#"><!=title!></a></h3>'
                    template += '<div class="likecount">'
                    template += '<a href="#"><span class="icon-heart"></span> 71</a>'
                    template += '</div>'
                    template += '<div class="commentcount">'
                    template += '<a href="#"><span class="icon-bubbles"></span> 15</a>'
                    template += '</div>'
                    template += '</li>'

                  
                } else if (entry.source == 'pessoa') {
                    // Just the content for twitter entries
                    template = '<div><!=content!></div>';
                }

                // Render the template
                return this.tmpl(template, entry);
            }
        });

        //========================
        //PRELOADER
        //========================
        $('#status').fadeOut(); // will first fade out the loading animation
        $('#preloader').delay(350).fadeOut('slow');
        // will fade out the white DIV that covers the website.
        $('body').delay(350).css({
            'overflow': 'visible'
        });


        //========================
        //CUSTOM SCROLLBAR
        //========================
        $("html").niceScroll({
            mousescrollstep: 70,
            cursorcolor: "#ea9312",
            cursorwidth: "5px",
            cursorborderradius: "10px",
            cursorborder: "none",
        });

        //========================
        //SMOOTHSCROLL
        //========================
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });


        //========================
        //NAVBAR
        //========================
        // hide .navbar first
        $(".navbar").hide();

        // fade in .navbar
        $(function() {
            $(window).scroll(function() {

                // set distance user needs to scroll before we start fadeIn
                if ($(this).scrollTop() > 40) {
                    $('.navbar')
                        .removeClass('animated fadeOutUp')
                        .addClass('animated fadeInDown')
                        .fadeIn();

                } else {
                    $('.navbar')
                        .removeClass('animated fadeInDown')
                        .addClass('animated fadeOutUp')
                        .fadeOut();
                }
            });
        });

    });
}(jQuery));