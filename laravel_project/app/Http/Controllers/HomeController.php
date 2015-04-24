<?php

namespace App\Http\Controllers;


use App\Http\Requests\ContactFormRequest;

use App\models\Artist;
use Response;
use Request;
use Redirect;
use Mail;

class HomeController extends BaseController {

    public function show() {

        $artist = Artist::where('id', '=', 1)->get();

        $image = Artist::find(1)->galleries()->paginate(4);

        if (Request::ajax()) {
            return Response::json(view('gallery.marija.portfolio', array('image' => $image))->render());
        }

        return view('gallery.show', compact('image'), compact('artist'));
    }
    
   
    
    public function store(ContactFormRequest $request) {
        $data =   array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message'),
            'subject' => $request->get('subject') 
        );
      
       
        Mail::send('gallery.marija.mail',
      $data, function($message) use ($data)
    {
        $message->from($data['email']);
        $message->to('zziikkaa83@gmail.com', 'Admin')->subject($data['subject']);
    });
        
        return Redirect::route('contact')
                ->with('message','Thanks for contacting me');
        
    
    }

}
