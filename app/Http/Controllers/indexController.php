<?php

namespace App\Http\Controllers;

use App\form_users;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Image;
class indexController extends Controller
{
    public function index(Request $request){
    return view('index');
    }
    public function get(){
        $users = form_users::orderBy('id', 'DESC')->get();
        return response()->json([
            'data'=>$users,
            'code'=>'200'
        ]);
    }
    public function save(Request $request){
        $request->validate([
            'username'=>'required|regex:/^[a-zA-Z0-9]+$/|max:8',
            'email'=>'required|Email',
            'name'=>'required|regex:/^[a-zA-Z]+$/',
            'password'=>'required|regex:/^[A-Z].*/',
            'bio'=>'required|min:10'
        ],[
            'username.regex'=>'username must have only character and digits',
            'name.regex'=>'name must have only character',
            'password.regex'=>'password must start with Capital letter'

        ]);

        form_users::create([
            'username'=> $request->input('username'),
            'email'=>$request->input('email'),
            'name'=>$request->input('name'),
            'age'=>$request->input('age'),
            'password'=>\Hash::make($request->input('password')),
            'bio'=>$request->input('bio'),
            'image'=>$request->input('image')
        ]);

        return response()->json([
            'code'=>'200'
        ]);
    }
    public function upload(Request $request){

        $image = $request->file('file');
        $input['imagename'] = time().'.'.$image->extension();
        $imageName = $input['imagename'];
        $destinationPath = public_path('/images');
        $img = Image::make($image->path());
        $img->resize(250, 250, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

        return response()->json(['name'=>$imageName]);

    }

    public function updateUser(Request $request,$id){
        try {

        $username = form_users::findOrFail($id);
        $username->username = $request->input('username');
        $username->update();
        }catch (ModelNotFoundException $exception){
        return response()->json([
            'code'=>'404'
        ]);
        }
        return response()->json([
            'code'=>'200'
        ]);
    }
}
