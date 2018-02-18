<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Mail;
    use Illuminate\Routing\Controller;
    use App\Post; 

    class PagesController extends Controller {
       
        public function getHomepage() {
            $data = [
                'heading1' => 'Triple C Automotive',

                'text1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere mollitia dolorum voluptatum labore possimus iusto explicabo porro magni cumque fuga accusamus numquam facilis exercitationem dignissimos, praesentium pariatur? Debitis, modi iusto.',


                'heading2' => 'Our Auto Shop',

                'text2' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere mollitia dolorum voluptatum labore possimus iusto explicabo porro magni cumque fuga accusamus numquam facilis exercitationem dignissimos, praesentium pariatur? Debitis, modi iusto.',

                'img1' => './assets/png/icon-2.png',
                

                'heading3' => 'Promise To You',

                'text3' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere mollitia dolorum voluptatum labore possimus iusto explicabo porro magni cumque fuga accusamus numquam facilis exercitationem dignissimos, praesentium pariatur? Debitis, modi iusto.',

                'img2' => './assets/png/icon-1.png',
                

                'heading4' => 'Auto Shop',

                'text4' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere mollitia dolorum voluptatum labore possimus iusto explicabo porro magni cumque fuga accusamus numquam facilis exercitationem dignissimos, praesentium pariatur? Debitis, modi iusto.',
                
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
            ];

            return view('index')->withData($data);
        } // getHomepage() Ends Here

    }
?>