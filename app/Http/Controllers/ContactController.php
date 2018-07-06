<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('pages/contact');
    }
    
    public function store(ContactRequest $request)
    {
       // return view('pages/confirm');
       Mail::to('nemrihiloula@gmail.com')
       ->send(new Contact($request->except('_token')));//la création d'une instance de la classe Contact avec la transmission des données saisies (mis à part le token pour la protection CSRF qui ne sert pas

   return view('pages.confirm');
    }


    /********** sans ContactRequest********** 
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'bail|required|between:5,20|alpha',
            'email' => 'bail|required|email',
            'texte' => 'bail|required|max:250'
        ]);
 
        return view('pages/confirm');
    }*/
}