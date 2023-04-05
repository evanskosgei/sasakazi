<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("welcome");
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        // ]);
        $user= new Profile();
        $user->fullname= $request['fullname'];
        $user->email= $request['email'];
        $user->password = $request['password'];
        $user->profile = $request->file('profile')->store('public');
        $user->save();
        return redirect()->back();
    }
    public function edit($id)
    {
        $users = Profile::find($id);;
        return view('update', compact('users'));
    }
    public function update(Request $request, $id)
    {
        $user = Profile::find($id);
        $user->fullname = $request->input('fullname');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->profile = $request->file('profile')->store('public');
        $user->update();
        return view('welcome');
    }
    public function display(){
        $users = Profile::All();
        return view('showAll',['users'=>$users]);
    }
    public function delete($id)
    {
        $users = Profile::find($id);
        $users->delete();
        return redirect()->back();

    }
}
