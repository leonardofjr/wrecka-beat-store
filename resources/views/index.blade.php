<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdn.rawgit.com/scottjehl/picturefill/3.0.2/dist/picturefill.min.js"></script>
        <title>Bangout Beats</title>
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <link  href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CRaleway:400,100,200,300%7CHind:400,300" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="./js/google-places/google-places.js"></script>
        <script src="https://www.paypalobjects.com/api/checkout.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/slick-1.8.0/slick.css">
        <link rel="stylesheet" href="./css/slick-1.8.0/slick-theme.css">
        <link rel="stylesheet" href="./css/animate-css/animate.css">
        <link rel="stylesheet" href="./css/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="./css/app.css">

        
    </head>
    <body>
        <a id="top"></a>
        <header>
            @include ('components.jumbotron')
            @include('components.navigation')
        </header>
        <main>
        <div class="container">
            <div class="content">
                <section class="player-container py-5"><a id="player"></a>
                    @include('inc.sections.player')
                </section>
                <section class="newsletter-container py-5"><a id="newsletter"></a>
                    @include('inc.sections.newsletter')
                </section>

                <section class="featured-content row text-center py-5">
                    @include('inc.sections.licensing-info')
                </section>

                <section class="faq-content">
                    @include('inc.sections.faq')
                </section>

                <section class="services-content">
                    @include('inc.sections.services')
                </section>

            </div>
        </div>
        <section class="special-offers-container py-5">
            @include('inc.sections.discounts')
        </section>
        <section class="map">
            @include('inc.sections.contact-form')
        </section>
        </main>
        <footer>
            <a id="bottom"></a>
            <div class="site-info text-center py-4"><small>Copyright &copy; 2018</small></div>
        </footer>
    </body>
    <script src="js/slick-1.8.0/slick.min.js"></script>
    <script src="js/gsap/TweenMax.min.js"></script>
    <script src="js/gsap/plugins/scrollToPlugin.min.js"></script>
    <script src="js/Scroll-Magic/scrollMagic.min.js"></script>
    <script src="js/Scroll-Magic/plugins/animation.gsap.js"></script>
    <script src="js/Scroll-Magic/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/functions.js"></script>
    <script src="js/ajax-form-process.js"></script>
    <script src="js/main-carousel.js"></script>
</html>