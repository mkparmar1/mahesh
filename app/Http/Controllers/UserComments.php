<?php
namespace App\Http\Controllers;

use App\SubmitPro;
use Illuminate\Http\Request;
use App\UComment;
use Illuminate\Support\Facades\Crypt;
class UserComments extends Controller
{
    public function addDetails(Request $request)
    {
            //$comment = UComment::find($request->input('property_id'));
            //$user = UComment::where('property_id',$request->input('property_id'));
            $comment= new UComment();
            $comment->msg=$request['msg'];
            $comment->property_id=$request['property_id'];
            $comment->user_id=$request['user_id'];
            $comment->save();
            return redirect()->back();
    }
    public function show()
    {
        $com1=UComment::all();
        $com=new UComment();
        return view('admin.admincomment',['com'=>$com],['com1'=>$com1]);

    }
    public function userlike(Request $req,$id){
        dd($id);
    }
    public function destroy($id){
        UComment::destroy($id);
        //Session::flash('message', 'Delete successfully!');
        //Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.admincomment');
    }
    public function destroyadmin($id){
        $id=Crypt::decrypt($id);
        UComment::destroy($id);
        return redirect()->back();
    }
}
