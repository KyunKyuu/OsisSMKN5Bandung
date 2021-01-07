<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{

    function sendMail(Request $request){
        
       // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
         ]);
      

        //  Send mail to admin
        \Mail::send('mail', [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => 'Pesan dari user',
            'user_query' => $request->get('message'),
        ], function($message) use ($request){
            $message->from($request->email);
            $message->to('teguh.iqbal782@gmail.com', 'pyqdhoncelrhteps')->subject('saran untuk osis');
        });

        return back()->with('success', 'Terimakasih sudah mengirimkan saran.');
    }
}