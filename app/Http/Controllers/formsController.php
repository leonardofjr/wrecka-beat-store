<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use Mail;
    use App\Post; 

    class FormsController extends Controller {
       
        public function postContact(Request $request) {

            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required',
            ]);



            $data = [
                'name' => $request->input('contact-form-name'),
                'email' => $request->input('contact-form-email'),
                'inquiry' => $request->input('contact-form-message'),
            ];

            Mail::send('emails.process', $data , function ($m) use ($data) {
            $m->from($data['email'], $data['name']);
            $m->to('leo@startupdesigns.ca')->subject('This mail is sent via contact form on triplecauto.ca');
        });

        return response()->json($data);
        }// postContact() Ends Here

    }
?>