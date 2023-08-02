<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AllUser()
    {
        $all = DB::table('users')->get();

        return view('backend.user.all-user', compact('all'));
    }

    public function AddUserIndex()
    {
        return view('backend.user.add_user');
    }

    public function InsertUser(Request $request)
    {
        $data                   = array();
        $data['name']           = $request->name;
        $data['email']          = $request->email;
        $data['role']           = $request->role;
        $data['password']       = Hash::make($request->password);
        $data['created_at']     = date('Y-m-d H:i:s');
        $data['updated_at']     = date('Y-m-d H:i:s');

        $insert = DB::table('users')->insert($data);
        if($insert){
            $notification=array(
                'messege'=>'Successfuly User Inserted',
                'alert-type'=>'success'
            );
            return redirect()->route('alluser')->with($notification);
        } else{
            $notification=array(
                'messege'=>'Ups!! Something is Wrong, Please Try Again!',
                'alert-type'=>'error'
            );
            return redirect()->route('alluser')->with($notification);
        }
    }

    public function EditUser($id)
    {
        $edit = DB::table('users')->where('id',$id)->first();
        return view('backend.user.edit_user',compact('edit'));
    }

    public function UpdateUser(Request $request, $id)
    {
        $data                   = array();
        $data['name']           = $request->name;
        $data['email']          = $request->email;
        $data['role']           = $request->role;
        $data['password']       = Hash::make($request->password);
        $data['created_at']     = date('Y-m-d H:i:s');
        $data['updated_at']     = date('Y-m-d H:i:s');

        $update = DB::table('users')
        ->where('id',$id)
        ->update($data);

        if($update){
            return redirect('/all-user');
        } else{
            echo "Upss! Something is wrong";
        }

        
    }

    public function DeleteUser($id){
        
        $delete = DB::table('users')->where('id', $id)->delete();
        if($delete){
            return redirect('/all-user');
        } else{
            echo "Upss! Something is wrong";
        }
    }
    /* Controller Method */
    // public function users() {
    //     users::select('roles', DB::raw('count(*) as count'))
    //     ->groupBy('roles')
    //     ->get();
        
    // }
        

}
