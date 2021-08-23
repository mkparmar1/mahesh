<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ServiceModel;
use Image;
use Illuminate\Support\Facades\Crypt;
class ServiceController extends Controller
{
    public function index()
    {
        $data = ServiceModel::all();
        return view('admin.adminservice',['data'=>$data]);
    }
    public function addservice(Request $request)
    {
        $servicemodel = new ServiceModel();
        if ($request->HasFile('profile')) {
            $pics1 = $request->file('profile');
            $filename1 = $pics1->getClientOriginalName();
            Image::make($pics1)->save(public_path('/uploads/service/' . $filename1));
            $servicemodel->profile = $filename1;
        }
        $servicemodel->name = $request->name;
        $servicemodel->phone = $request->phone;
        $servicemodel->newphone = $request->newphone;
        $servicemodel->city = $request->city;
        $servicemodel->gender = $request->gender;
        $servicemodel->work = $request->work;
        $user = ServiceModel::where('phone','=', $request['phone'])->first();
        if( $user != null)
        {
            $data = ServiceModel::all();
            return back()->with('admin.adminservice',['data'=>$data]);
        }
        else{
            $servicemodel->save();
            $data = ServiceModel::all();
            return back()->with('admin.adminservice',['data'=>$data]);
        }
    }
    public function ShowService($id){
        $id = Crypt::decrypt($id);
        $data = ServiceModel::find($id);
        return view('admin.adminserviceupdate',['data'=>$data]);


    }
    public function destroyadmin($id){
        ServiceModel::destroy($id);
        return redirect()->back();
    }
    public function updateservice(Request $request){
        $servicemodel=ServiceModel::find($request->id);
        if ($request->HasFile('profile')) {
            $pics1 = $request->file('profile');
            $filename1 = $pics1->getClientOriginalName();
            Image::make($pics1)->save(public_path('/uploads/service/' . $filename1));
            $servicemodel->profile = $filename1;
        }
        $servicemodel->name = $request->name;
        $servicemodel->phone = $request->phone;
        $servicemodel->newphone = $request->newphone;
        $servicemodel->city = $request->city;
        $servicemodel->gender = $request->gender;
        $servicemodel->work = $request->work;
        $servicemodel->save();
        $data = ServiceModel::all();
        return view('admin.adminservice',['data'=>$data]);
    }
    public function servicehome(Request $request)
    {
        $data = ServiceModel::all();
        return view('Services',['data'=>$data]);
    }
}
