(function($) {
    $(document).ready(function() {
        var tempPessoa = 1;
        /*
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
                    template += '<h3><!=title!></h3></a>'
                    template += '<div class="likecount">'
                    template += '<a href="#"><span class="icon-heart"></span> 71</a>'
                    template += '</div>'
                    template += '<div class="commentcount">'
                    template += '<a href="#"><span class="icon-bubbles"></span> 15</a>'
                    template += '</div>'
                    template += '</li>'


                } else if (entry.source == 'pessoa') {

                    if (tempPessoa === 1) {
                        template += '<div class="row">';
                        template += '<div class="col-md-6">';
                        template += '<div class="clientsphoto">';
                        template += '<img src="img/s1.png" alt="Fulana">';
                        template += '</div>';
                        template += '<div class="quote">';
                        template += '<blockquote>';
                        template += '<p>s, et.</p>';
                        template += '</blockquote>';
                        template += '<h5>Fulana X</h5>';
                        template += '<p>@fulana_x</p>';
                        template += '</div>';
                        template += '</div>';
                        template += '</div>';

                        tempPessoa++;
                    } else {

                    }


                }

                // Render the template
                return this.tmpl(template, entry);
            }
        });
				*/

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
       // $(".navbar").hide();

        // fade in .navbar
       $(function() {
            $(window).scroll(function() {

                // set distance user needs to scroll before we start fadeIn
                if ($(this).scrollTop() > 40) {
                    $('.navbar').addClass('mozHex');
						//.css("backgroun-color");
                        //.removeClass('animated fadeOutUp')
                        //.addClass('animated fadeInDown')
                        //.fadeIn();

                } else {
                    $('.navbar')
                        .removeClass('mozHex');
                       // .addClass('animated fadeOutUp')
                       // .fadeOut();
                }
            });
        });

    });
}(jQuery));