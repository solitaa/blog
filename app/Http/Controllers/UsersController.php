<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Session;

class UsersController extends Controller
{

    public function __construct()
    {
            $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index')->with('users', User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $user = User::create([
//            'name' => "Arev",
//            'email' => "arev@gmail.com",
//            'password' => bcrypt("as1234"),
//            'admin' => 1,
//        ]);
//        Profile::create([
//            'user_id' => $user->id,
//            'about' => "kuku bubu",
//            'avatar' => "uploads/avatars/a.jpg",
//            'facebook' => 'facebook.com',
//            'youtube' => 'youtube.com',
//        ]);


        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt('as1234');
        $user->save();

        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->avatar = "uploads/avatars/a.jpg";
        $profile->save();


        Session::flash('success', 'You created a user');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->profile->delete();
        $user->delete();
        Session::flash('success', 'User deleted.');
        return redirect()->back();
    }



    public function admin($id)
    {
        $user = User::find($id);

        if($user->admin == 0){
            $user->admin = 1;
        }
        else {
            $user->admin = 0;
        }
        $user->save();

        Session::flash('success', 'You updated user admin status');
        return redirect()->back();
    }

}
