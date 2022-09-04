<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data['users'] = User::where('user_type','executive')->where('status','1')->orderBy('id', 'asc')->get();
        return view('users.index',$data);
    }
    public function create()
    {
        return view('users.add');
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required|string|max:190',
            'email' => 'required|string|email|max:190|unique:users',
            'phone' => 'required|string|max:190|unique:users',
            'password' => 'required|string|min:6',
        ]);
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'status' => 1,
            'user_type' => 'executive',
        ]);
        return back()->withStatus(__('Created Successfully.'));
        
    }
    public function edit($id){
        $user = User::findOrFail($id);
        return view('users.edit', compact('user')); 
    }
    public function update(Request $request){
        $request->validate([
            'name' => 'required|string|max:190',
            'email' => 'required|string|email|max:190',
            'phone' => 'required|string|max:190|unique:users',
        ]);

        $user = User::find($request->id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => 1,
            'user_type' => 'executive',
        ]);
        return back()->withStatus(__('Profile successfully updated.'));
    }
    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return back()->withStatus(__('Data has been deleted.')); 
    }
}
