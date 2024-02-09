<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Auth;

use App\Models\Page;
use App\Models\PagePost;

use App\Models\User;


// For slug===>
use Illuminate\Support\Str;

// For image ===>
use Image;
use File;

use DB;

class PageController extends Controller
{
    //

    public function index()
    {
        $currentAuth = !empty(Auth::user()->id) ? Auth::user()->id : 0 ;

        $pageData = Page::where('user_id', $currentAuth)->get();

        $pageUserManageData = DB::table('pages')->where('user_id', $currentAuth)->limit(4)->get(); 

        return view('user.pages',compact('pageData','pageUserManageData'));

    }

    public function pageInsert(Request $request){

        $input = $request->all();

        $currentDate = date("Y-m-d");
        $user_id = !empty(Auth::user()->id) ? Auth::user()->id : 0 ;
        $user_email = !empty(Auth::user()->email) ? Auth::user()->email : 0 ;
        $user_phone = !empty(Auth::user()->phone) ? Auth::user()->phone : 0 ;
        $date = date('Y-m-d H:i:s');
        
        $input['user_id'] = $user_id;
        $input['email'] = $user_email;
        $input['name'] = $input['name'];
        $input['country'] = $input['country'];
        $input['phone'] = $user_phone;
        $input['date'] = $date;
        $input['description'] = $input['description'];
        

        // For img ===>
        $slug = Str::of($input['name'])->slug('-');
            

        // For Single cover_photo====>
        if($request['user_photo']){
        // For store image---->
        $coverPhoto =$request['user_photo'];
        $photoname = $slug.'.'.$coverPhoto->getClientOriginalExtension();
        // $coverPhoto->move('public/files/pages/',$photoname); //without image intervention
        Image::make($coverPhoto)->resize(600,600)->save('public/files/pages/'.$photoname); // image intervention===>>
        // sudhu data base e name ta save krtac ====> ager code brandcontroller e ace
        $input['user_photo'] = $photoname;
        }


        // For Single cover_photo====>
        if($request['cover_photo']){
        // For store image---->
        $coverPhoto =$request['cover_photo'];
        $photoname = $slug.'.'.$coverPhoto->getClientOriginalExtension();
        // $coverPhoto->move('public/files/pages/',$photoname); //without image intervention
        Image::make($coverPhoto)->resize(600,600)->save('public/files/pages/'.$photoname); // image intervention===>>
        // sudhu data base e name ta save krtac ====> ager code brandcontroller e ace
        $input['cover_photo'] = $photoname;
        }


        Page::create($input);

        return redirect()->back();
    }

    public function pageView($id){

        $pageData = Page::find($id);

        // dd($pageData);

        $pagePostData = PagePost::where('page_id', $id)->orderBy('id', 'desc')->get();

        // $pagePostData = PagePost::all();


        // dd($pagePostData);

        return view('user.single-page',compact('pageData','pagePostData'));

    }

    public function pagePostStore(Request $request){

        $input = $request->all();
        $currentUserName = !empty(Auth::user()->name) ? Auth::user()->name : 0 ;
        $date = date('Y-m-d H:i:s');
        
        $input['page_id'] = $input['id'];
        $input['post_description'] = $input['post_description'];
        $input['date'] = $date;

        // For img ===>
        $slug = Str::of($currentUserName)->slug('-');

        // For Single post_photo====>
        if($request['post_photo']){
        // For store image---->
        $coverPhoto =$request['post_photo'];
        $photoname = $slug.'.'.$coverPhoto->getClientOriginalExtension();
        // $coverPhoto->move('public/files/pages/post/',$photoname); //without image intervention
        Image::make($coverPhoto)->resize(600,600)->save('public/files/pages/post/'.$photoname); // image intervention===>>
        // sudhu data base e name ta save krtac ====> ager code brandcontroller e ace
        $input['post_photo'] = $photoname;
        }

        PagePost::create($input);

        return redirect()->back();

    }
}
