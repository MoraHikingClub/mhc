<style>
    .social ul li.social-facebook:hover .facebook-like {
        display: inline-block;
    }

    .facebook-like {
        display: none;
    }

    .ig-b- {
        display: inline-block;
         
    }

    .ig-b- img {
        visibility: hidden;
    }

    .ig-b-:hover {
        background-position: 0 -60px;
    }

    .ig-b-:active {
        background-position: 0 -120px;
    }

    .ig-b-v-24 {
        width: 137px;
        height: 24px;
        background: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24.png) no-repeat 0 0;
    }

    @media only screen and (-webkit-min-device-pixel-ratio: 2),
    only screen and (min--moz-device-pixel-ratio: 2),
    only screen and (-o-min-device-pixel-ratio: 2 / 1),
    only screen and (min-device-pixel-ratio: 2),
    only screen and (min-resolution: 192dpi),
    only screen and (min-resolution: 2dppx) {
        .ig-b-v-24 {
            background-image: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24@2x.png);
            background-size: 160px 178px;
        }
    }
</style>


<!--social media navigation bar-->
<nav class="social">

    <ul>

        <li class="social-twitter">
        <i class="fa fa-twitter"></i>
            <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" style="position: static; visibility: visible; width: 183px; height: 28px;" title="Twitter Follow Button" src="https://platform.twitter.com/widgets/follow_button.0639d67d95b7680840758b6833f06d87.en-gb.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en-gb&amp;screen_name=morahikingclub&amp;show_count=false&amp;show_screen_name=true&amp;size=l&amp;time=1565414950256" data-screen-name="morahikingclub"></iframe>
        </li>
        
        {{-- <li class="social-flickr"><i class="fa fa-flickr"></i><a target="_blank" href="https://www.flickr.com/people/morahikingclub/">Flickr</a></li> --}}
        
        <li class="social-insta">
        <i class="fa fa-instagram"></i>
            <a target="_blank" href="https://www.instagram.com/mora_hiking_club/?ref=badge" class="ig-b- ig-b-v-24"><img src="//badges.instagram.com/static/images/ig-badge-view-24.png" alt="Instagram" /></a>
        </li>
        <li class="social-insta">
        <i class="fa fa-youtube-play"></i>
        <a target="_blank" href="https://youtube.com/@MoraHikingClub" class="ig-b- ig-b-v-24"></a>
        </li>
        <li class="social-facebook">
        <i class="fa fa-facebook"></i>
            Facebook
            <div class="facebook-like">
                <div class="fb-like-box" data-href="https://www.facebook.com/MoraHikingClub" data-width="260" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
            </div>
        </li>
    </ul>
</nav>