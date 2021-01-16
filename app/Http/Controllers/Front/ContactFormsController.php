<?php

namespace App\Http\Controllers\Front;

use Validator;
use SEO;
use Lunaweb\RecaptchaV3\Facades\RecaptchaV3;
use App\Models\ContactForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactFormsController extends Controller
{
    
    public function index()
    {
        return view('front.form_contact', compact());
    }

    protected function validator(array $data)
    {
        return Validator::make(
            $data,
            [
            'name' => 'required',
            'email' => 'required|email',
            'comments' => 'required',
            ],
            [
            'name.required' => 'Por favor indica tu nombre y apellido',
            'email.required' => 'Por favor indica tu dirección de email',
            'email.email' => 'La dirección de email no parece correcta',
            'comments.required' => 'No has ingresado un mensaje',
            ]
        );
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $this->validator($data)->validate();
        $score = RecaptchaV3::verify($request->get('g-recaptcha-response'), 'contacto');
        if ($score < 0.5) {
            return redirect()->back()->with(['error' => 'Envio rechazado. para Google eres robot']);
        }
        $message = ContactForm::create($data);
        return redirect()->back()->with(['success'=>'Tu mensaje ha sido enviado, te responderemos a la brevedad.']);
    }
}
