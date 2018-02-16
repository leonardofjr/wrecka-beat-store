<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdn.rawgit.com/scottjehl/picturefill/3.0.2/dist/picturefill.min.js"></script>
        <title>Triple C Automotive</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400|Open+Sans:300,400|Oswald:200,300,400|Roboto:100,300,400|Vollkorn" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="./js/google-places/google-places.js"></script>

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
        <div class="container">
            <div class="content">
                <section class="about-container py-5"><a id="about"></a>
                    <div class="about-header fade-in">
                        @include('components.one-column-paragraph-heading', ['headingTag' => 'h2', 'heading' => $heading1, 'text' => $text1])
                    </div>
                    <div class="about-content row">
                         @include('components.three-column-heading-paragraph-image', [
                         'headingTag1' => 'h3',
                         'heading1' => $heading2,
                         'text1' => $text2, 
                         'img1' => $img1,

                         'headingTag2' => 'h3',
                         'heading2' => $heading3,
                         'text2' => $text3,
                         'img2' => $img2,

                         'headingTag3' => 'h3',
                         'heading3' => $heading4,
                         'text3' => $text4,
                         'img3' => $img3
                         ])
                    </div>
                </section>

                <section class="featured-content row text-center py-5">
                   @include('components.three-column-heading-image-description-button', [
                         'headingTag1' => 'h3',
                         'heading1' => $heading5,
                         'description1' => $description1, 
                         'img1' => $img4,
                         'buttonName1' => $buttonName1,

                         'headingTag2' => 'h3',
                         'heading2' => $heading6,
                         'description2' => $description2, 
                         'img2' => $img5,
                         'buttonName2' => $buttonName2,

                         'headingTag3' => 'h3',
                         'heading3' => $heading7,
                         'description3' => $description3, 
                         'img3' => $img6,
                         'buttonName3' => $buttonName3,

                         ])
                </section>

                <section>
                    @include('inc.sections.services')
                </section>
            </div>
        </div>
        <section class="special offers-container py-5">
            @include('inc.sections.discounts')
        </section>
        <section class="map">
            @include('inc.sections.map')
        </section>
        <footer>
            @include('inc.sections.footer-content')
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
    <script src="js/main-carousel.js"></script>
</html>