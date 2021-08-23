<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Crypt;
class ContactController extends Controller
{
    public function index()
    {
        $data = Contact::all();
        return view('admin.admincontact',['data'=>$data]);
    }
	public function store(Request $request)
    {
        $contacts=new Contact;
        $contacts->firstname=$request->firstname;
        $contacts->email=$request->email;
        $contacts->subject=$request->subject;
        $contacts->message=$request->message;
        $query=$contacts->save();
        if($query){
            return back()->with('success','Inserted successfully');
        }
    }
    public function destroy($id){
        Contact::destroy($id);
        //Session::flash('message', 'Delete successfully!');
        //Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.admincontact');
    }
    public function destroyadmin($id){
        $id=Crypt::decrypt($id);
        Contact::destroy($id);
        return redirect()->back();
    }
}
