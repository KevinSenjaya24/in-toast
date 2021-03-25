<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimoni;

class TestimoniController extends Controller
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
        $data = Testimoni::get();
        return view('admin.testimoni.index',["testimoni"=>$data]);
    }

    public function details(Request $request)
    {
        $data = Testimoni::find($request->id);
        return view('admin.testimoni.detail',["testimoni"=>$data]);
    }

    public function update(Request $request)
    {
        //select book
        if($request->id){
            $data = Testimoni::find($request->id);
        }else{
            $data = new Testimoni;
        }

        // update data variable
        $data->nama =  $request->nama;
        $data->status =  $request->status;
        $data->description =  $request->description;
        
        //record data to database
        $status = $data->save();

        //redirect with message
        if($status){
            return redirect('/admin/testimoni')->with('success', 'Congrats Testimoni Saved Successfully!');
        }
        return redirect('/admin/testimoni')->with('error', 'Opps! Testimoni Fail to Create!');
    }

    public function delete($id)
    {
        $post = Testimoni::find($id);
        $post->delete();

        return redirect('/admin/testimoni')->with('success', 'Congrats Testimoni Deleted Successfully');
    }
}
