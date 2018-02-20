<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use App\Http\Requests\MailFormValidationRequest;
    use App\Http\Requests\NewsletterFormValidationRequest;
    use Mail;
    use App\Post; 

    class FormsController extends Controller {
       
        public function postContact(MailFormValidationRequest $request) {
            $data = [
                'name' => $request->input('contactFormName'),
                'email' => $request->input('contactFormEmail'),
                'inquiry' => $request->input('contactFormMessage'),
            ];

            Mail::send('emails.contact-form', $data , function ($m) use ($data) {
            $m->from($data['email'], $data['name']);
            $m->to('leo@startupdesigns.ca')->subject('This mail is sent via contact form on triplecauto.ca');
        });

        return response()->json($data);
        }// postContact() Ends Here

        public function postNewsletter(NewsletterFormValidationRequest $request) {

            $data = [
                'email' => $request->input('newsletterFormEmail'),
            ];

            Mail::send('emails.newsletter', $data , function ($m) use ($data) {
            $m->from($data['email'], $data['email']);
            $m->to('leo@startupdesigns.ca')->subject('A new user has subscribed to triplecauto.ca');
        });

        return response()->json($data);
        }// postNewsletter() Ends Here

    }
?>