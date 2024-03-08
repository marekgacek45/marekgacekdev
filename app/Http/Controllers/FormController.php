<?php

namespace App\Http\Controllers;
use App\Mail\ContactEmail;

use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactFormRequest;

class FormController extends Controller
{
    
    public function contact(ContactFormRequest $request){
        $validatedData = $request->validated();
$details = [
    'title' => 'Nowa wiadomość z formularza kontaktowego',
    'name' => $validatedData['name'],
    'email' => $validatedData['email'],
    'phone' => $validatedData['phone'],
    'message' => $validatedData['message'],
];
       
        Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactEmail($details));
       
        return Inertia('Contact/Index', ['message_sent' => 'Wiadomość została wysłana']);
      
    }
}