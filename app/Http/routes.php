<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index', [
        'heading1' => 'Triple C Automotive',

        'text1' => 'Triple C Automotive was established on January 2017 in Markham by Carlos Felipa who is a Master Mechanic. Carlos Felipa has been in the car repair industry since he was a child and has over a decade of experience. He has worked on every possible car repair job. Carlos has worked in all major car shops like Canadian Tire, Active Green Ross and dealerships in all over the Great Toronto Area. He has replaced engines, rebuilt engines, replaced transmissions of all makes and models, just name the job he has done it.',


        'heading2' => 'Our Auto Shop',

        'text2' => 'We pride ourselves in having a modern and clean clean facility for our customers. We provide them with a cozy place where they can hang out, play a game, watch a film while we repair their car if they choose to. All our customers are provided with Free Wifi access so they can save on their cellular data and chat with their family and friends.',

        'img1' => './assets/png/icon-2.png',
        

        'heading3' => 'Promise To You',

        'text3' => 'Here at Triple C Automotive we respect each and every customer and treat them like they’re our family. We aim to satisfy all our customers but our promise is to provide honesty to all our customers and never take advantage of them. We challenge you to find another auto repair shop in Markham who will provide you with honesty, professionalism and affordable prices. We will not only repair your car but educate you on how you could expand the life of your car.',

        'img2' => './assets/png/icon-1.png',
        

        'heading4' => 'Auto Shop',

        'text4' => 'We pride ourselves in having a modern and clean clean facility for our customers. We provide them with a cozy place where they can hang out, play a game, watch a film while we repair their car if they choose to. All our customers are provided with Free Wifi access so they can save on their cellular data and chat with their family and friends.',
        
        'img3' => './assets/png/icon-3.png',
        

        'heading5' => 'Auto Services',

        'description1' => 'Oil Changes, Brake Checks, A/C Repairs and more',

        'img4' => './assets/png/service-image-2.png',
        'buttonName1' => 'Our Services',
        

        'heading6' => 'Exclusive Offers',

        'description2' => 'Start saving on winter tires installation by signing up to our newsletter',

        'img5' => './assets/png/service-image-4.png',
        'buttonName2' => 'Sign Up',
        

        'heading7' => 'Have Questions?',

        'description3' => 'We\'re happy to educate you about car maintenance',

        'img6' => './assets/png/service-image-1.png',
        'buttonName3' => 'Call Now',

        'icon1' => './assets/png/check-mark.png',
        ]);
});
