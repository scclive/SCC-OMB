<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Sunra\PhpSimple\HtmlDomParser;
use Illuminate\Support\Facades\Hash;
use Image;

class ProfileController extends Controller
{
    public function index()
    {
        $data = DB::table('users')->where('id', '=', Auth::id())->get();
        return view('profile.index', compact('data'));
    }

    public function store(Request $request)
    {
        DB::table('users')->where('id', '=',Auth::id())->update([
            'firstname' => $request->firstname,
            'surname' => $request->surname,
            'gender' => $request->gender,
            // 'photo' => $request->photo,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'cnic' => $request->cnic,
            'aboutme' => $request->aboutme,
            'employed' => $request->employed,
            'address' => $request->address,
            'city' => $request->city,
        ]);

        return redirect('profile');

    }

    public function password()
    {
        return view('profile.password');
    }
    
    public function passwordCheck(Request $request)
    {
        $currentPasswordHash = DB::table('users')->select('password')->where('id', '=', Auth::id())->get()[0]->password;
        $password = 0;
        $newpassword = 1;

        if (Hash::check($request->get('password'), $currentPasswordHash)){
            $password = 1;
        }
        if (Hash::check($request->get('newpassword'), $currentPasswordHash)){
            $newpassword = 0;
        }

        $output = array(
            'currentPasswordHash'  => $currentPasswordHash,
            'passwordHash'  => bcrypt("password"),
            'password'  => $password,
            'newpassword'   => $newpassword
        );

        if($password == 1 && $newpassword == 1){
            DB::table('users')->where('id', Auth::id())->update(['password' => bcrypt($request->get('newpassword'))]);
        }

        return response()->json($output);
    }

    public function photo()
    {
        return view('profile.photo');
    }

    public function photoSave(Request $request)
    {

        //checks if image exists
        if($request->get('x') != ''){

            $Image_Dir = $request->file('file');
            $files = glob(public_path('images/profile_image/'.Auth::id().'*'));
            foreach ($files as $file) {
                unlink($file);
            }
            // upload image
            $img = $Image_Dir;
            $img = Image::make($Image_Dir);
            $croppath = public_path('images/profile_image/'.Auth::id().'.'.$Image_Dir->getClientOriginalExtension());

            $x = intval($request->get('x')*1.3);
            $y = intval($request->get('y')*1.3);
            $w = intval($request->get('w')*1.3);
            $h = intval($request->get('h')*1.3);


            $img->crop( $w, $h, $x, $y);
            $img->save($croppath);

            // enter image
            DB::table('users')->where('id', Auth::id())->update(['photo' => Auth::id().'.'.$Image_Dir->getClientOriginalExtension()]);
        
        }
        return redirect('profile');









        //return view('profile.photo');
    }
    
}
