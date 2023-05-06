<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Photo;
use Intervention\Image\Facades\Image;
use App\Models\announced;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use DB;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function create_user() {
        return view("register");
    }

public function store_user(Request $request) {
    $request->validate([
        'name' => ['required'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        'role_id' =>['required', 'integer'],
        'password' => ['required', Rules\Password::defaults()],
    ]);

    $user = new User();
    $user->email = $request->email;
    $user->name = $request-> name;
    $user->role_id = $request->role_id;
    $user->password=Hash::make($request->password);

    $user->save();

    return redirect(route('login'));

}

public function login() {
        return view('login') ;
}
public function store_login(Request $request) {
    $request->validate([
        'email' => ['required'],
        'password' => ['required'],
    ]);

     $credentials = [
        'email'=> $request->email,
        'password'=> $request->password,
    ];
       
    if(Auth::attempt($credentials)){
        return redirect('/admin_page');
    }
    else{
        return redirect('login');
    }
}
public function admin_page() {
    $announced = announced::all();
        $announced = announced::orderBy('announce_id', 'desc')->limit(2)->get();

        $Photo = Photo::all();
        $Photo = Photo::orderBy('job_id','desc')->limit(2)->get();
        return view('adminhome',['announced' => $announced], ['Photo' => $Photo]);
}
public function logout() {
    Auth::logout();
    return view('login');
}

public function Announce(){
        return view('/announce');
}
public function check(){
    return view('/check');
}
public function apply(){
    return view('/apply');
}
public function make_announcement(Request $request) {
    $request->validate([
        'title' => ['required'],
        'description' => ['required'],
        'posted_by' => ['required'],
    ]);

    $announced = new announced();
    $announced->title = $request->title;
    $announced->description = $request->description;
    $announced->posted_by = $request->posted_by;

    $announced->save();

    return redirect('/admin_page');

}

public function Announcement(Request $request){
    $announced = announced::all();
        $announced = announced::orderBy('announce_id', 'desc')->limit(10)->get();
    return view('/announcement', ['announced' => $announced]);
}

public function jobs_upload(){
    return view('/jobs_upload');
}

public function store_job(Request $request){
    
    $image = Image::make($request->file('image'));
    $new_name = $request->file('image')->getClientOriginalName();
    $image-> save('storage/jobs/'.$new_name);

    $photo = new Photo;
    $photo->title = $request->title;
    $photo->salary = $request->salary;
    $photo->position = $request->position;
    $photo->country = $request->country;
    $photo->expiry_date = $request->expiry_date;
    $photo->image = $new_name;
    $photo->save();

    return redirect('/admin_page');
}

public function jobs(Request $request){
    $Photo = Photo::all();
        $Photo = Photo::orderBy('job_id','desc')->limit(10)->get();
    return view('/jobs', ['Photo' => $Photo]);
}

};