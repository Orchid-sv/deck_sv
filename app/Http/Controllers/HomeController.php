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

    public function user_introduction(){
        return view('mypage/edit/user_introduction');
    }

    public function user_name(){
        return view('mypage/edit/user_name');
    }

    public function user_edit(Request $request){
        $type =$request->type;
        $param=[
            'id'=>$request->id,
            'user_information' => $request->user_information
        ];
        if($type === 'name'){
            DB::update('update users set name =:user_information where id =:id', $param);
        }elseif($type ==='introduction'){
            DB::update('update users set introduction =:user_information where id =:id', $param);
        }
        return redirect('/home');
    }

    public function user_icon(){
        return view('mypage/edit/user_icon');
    }

    public function image_edit(Request $request){
        $file = $request->file('file');
        $x =$request->profileImageX;
        $y =$request->profileImageY;
        $w =$request->profileImageW;
        $h =$request->profileImageH;
        $base_img = null;
        $filrename = date("YmdHis");
        $filrename .= mt_rand();
        $imagetype =$request->imagetype;
        

        switch(exif_imagetype($file)){
            case IMAGETYPE_PNG:
                $base_img = imagecreatefrompng($file);
                $filrename .= '.png';
                break;
            case IMAGETYPE_JPEG:
                $base_img = imagecreatefromjpeg($file);
                $filrename .= '.jpg';
                break;
            case IMAGETYPE_GIF:
                $base_img = imagecreatefromgif($file);
                $filrename .= '.gif';
        }
        $param=[
            'id'=>$request->id,
            'image' => $filrename,
        ];
        $img= \Image::make($base_img);
        if($imagetype === 'header'){
            $img->crop($w, $h, $x, $y)->save(public_path().'/img/user_header/'.$filrename,100);
            DB::update('update users set header_image =:image where id =:id', $param);
        }elseif($imagetype === 'icon'){
            $img->crop($w, $h, $x, $y)->save(public_path().'/img/user_icon/'.$filrename,100);
            DB::update('update users set icon_image =:image where id =:id', $param);
        }
        return redirect('/home');
    }
    public function user_header(){
        return view('mypage/edit/user_header');
    }

}