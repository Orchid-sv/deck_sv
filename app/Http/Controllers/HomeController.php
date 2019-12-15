<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
        return view('mypage/home');
    }

    public function edit(){
        return view('mypage/home_edit');
    }

    public function user_name(){
        return view('mypage/edit/user_name');
    }

    public function name_edit(Request $request){

        $param=[
            'id'=>$request->id,
            'user_name' => $request->user_name
        ];
        DB::update('update users set name =:user_name where id =:id', $param);
        return redirect('/home');
    }

    public function user_icon(){
        return view('mypage/edit/user_icon');
    }

    public function icon_edit(Request $request){
        $file = $request->file('file');
        $x =$request->profileImageX;
        $y =$request->profileImageY;
        $w =$request->profileImageW;
        $h =$request->profileImageH;
        $base_img = null;

        switch(exif_imagetype($file)){
            case IMAGETYPE_PNG:
                $base_img = imagecreatefrompng($file);
                break;
            case IMAGETYPE_JPEG:
                $base_img = imagecreatefromjpeg($file);
                break;
            case IMAGETYPE_GIF:
                $base_img = imagecreatefromgif($file);
        }

        if($base_img !== null){
            $img=\Image::make($base_img);
            $img->crop($w, $h, $x, $y)->save(public_path().'/img/test.jpg',100);


            // $new_img = imagecreatetruecolor(120, 120);
            // imagecopyresampled($new_img, $base_img, 0, 0, $x, $y, 120, 120, $w, $h);
            // imagepng($image,'public/img/'."aww.png");
        }

        var_dump($base_img);

        // return redirect('/home');
    }
}
