<?php

namespace App\Http\Controllers;
use App\Http\Requests\Password;
use App\Http\Requests\EditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Mockery\Generator\StringManipulation\Pass\Pass;
use App\Http\Requests\ImageRequest; 


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
        $new_deck = deck::all();
        return view('mypage/home',['new_deck'=>$new_deck]);
    }

    public function edit(){
        return view('mypage/home_edit');
    }

    public function user_introduction(){
        return view('mypage/edit/user_introduction');
    }


    public function user_pas(){
        return view('mypage/edit/user_pas');
    }

    public function user_name(){
        return view('mypage/edit/user_name');
    }

    public function user_email(){
        return view('mypage/edit/user_email');
    }

    public function user_edit(EditRequest $request){
        $type =$request->type;
        $param=[
            'id'=>$request->id,
            'user_information_name' => $request->user_information_name,
            'user_information_introduction'=>$request->user_information_introduction
        ];
        if($type === 'name'){
            DB::update('update users set name =:user_information_name where id =:id', $param);
        }elseif($type ==='introduction'){
            DB::update('update users set introduction =:user_information_introduction where id =:id', $param);
        }elseif($type ==='mail'){
            DB::update('update users set email =:user_information where id =:id', $param);
        }
        return redirect("/user/{$request->id}");
    }

    public function pasword_edit(Password $request){
        $user = Auth::user();
        $oldpasaword =$user->password;
        $password = $request->user_oldpas;
        $user_newpas =$request->user_newpas;

        if(Hash::check($password,$oldpasaword)){
                $newpass = Hash::make($user_newpas);
                $param =[
                    'id'=>$user->id,
                    'newpass'=>$newpass
                ];
                DB::update('update users set password =:newpass where id =:id',$param);
                return redirect("/user/{$request->id}");
        }else{
            return Response::make('not mach password');
        }
    }

    public function user_icon(){
        return view('mypage/edit/user_icon');
    }

    public function image_edit(ImageRequest $request){
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
        return redirect("/user/{$request->id}");
    }
    public function user_header(){
        return view('mypage/edit/user_header');
    }

    

}