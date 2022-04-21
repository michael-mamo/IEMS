<?php

namespace App\Http\Controllers\backend\configuration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usertype;
class UsertypeController extends Controller
{
    //Function to view usertypes
    public function UsertypeView(){
        $data['allData'] = Usertype::all();
        return view('admin.configuration.usertype', $data);
    }
    // Function to add usertype
    public function UsertypeAdd(Request $request){
        $validateData = $request->validate([
            'name'=>'required|unique:usertypes',
            'duration'=>'required',
        ]);
        $data = new Usertype();
        $data->name = $request->name;
        $data->duration = $request->duration;
        $data->description = $request->description;
        if($request->has('isActive')){
            $data->isactive = 1;
        }
        else{
           $data->isactive = 0; 
        }
        $data->save();
        $notification = array(
            'message' => 'Usertype Registered successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('usertype.view')-> with($notification);
    }
    public function UsertypeEdit(Request $request, $id){
        $validateData = $request->validate([
            'duration'=>'required',
        ]);
        $data = Usertype::find($id);
        $data->duration = $request->duration;
        $data->description = $request->description;
        if($request->has('isActive')){
            $data->isactive = 1;
        }
        else{
           $data->isactive = 0; 
        }
        $data->save();
        $notification = array(
            'message' => 'Usertype Updated successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('usertype.view')-> with($notification);
    }

    // Function to delete usertype
    public function UsertypeDelete($id){
        $data = Usertype::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Usertype Deleted successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('usertype.view')-> with($notification);
    }
}
