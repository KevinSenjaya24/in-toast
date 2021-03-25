<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Contact::get();
        return view('admin.contact.index',["contact"=>$data]);
    }

    public function details(Request $request)
    {
        $data = Contact::find($request->id);
        return view('admin.contact.detail',["contact"=>$data]);
    }

    public function create(Request $request)
    {
        $data = new Contact;

        // update data variable
        $data->nama =  $request->nama;
        $data->email =  $request->email;
        $data->subject =  $request->subject;
        $data->message =  $request->message;
        
        //record data to database
        $status = $data->save();

        //redirect with message
        if($status){
            return 'Congrats Contact Saved Successfully!';
        }
        return 'Opps! Contact Fail to Create!';
    }

    public function delete($id)
    {
        $post = Contact::find($id);
        $post->delete();

        return redirect('/')->with('success', 'Congrats Contact Deleted Successfully');
    }
}
