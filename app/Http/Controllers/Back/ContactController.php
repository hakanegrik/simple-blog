<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $messages=Contact::orderBy('created_at','asc')->get();
        return view('back.message.message',compact('messages'));
    }
    public function message($id){
        $messages=Contact::findOrFail($id);
        return view('back.message.show',compact('messages'));
    }


    public function deleteMessage($id){
        Contact::find($id)->delete();
        return redirect()->route('admin.messages');

    }
}
