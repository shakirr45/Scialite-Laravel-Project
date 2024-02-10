<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;

use App\Models\Page;
use App\Models\PagePost;
use App\Models\User;

use Illuminate\Support\Str;
use Image;
use File;

class PageController extends Controller
{
    public function index()
    {
        $currentAuth = !empty(Auth::user()->id) ? Auth::user()->id : 0 ;

        $pageData = Page::where('user_id', $currentAuth)->get();

        $pageUserManageData = Page::where('user_id', $currentAuth)->limit(4)->get();

        return view('user.pages',compact('pageData','pageUserManageData'));

    }

    public function pageInsert(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

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
        
        $slug = Str::of($input['name'])->slug('-');
            
        if($request['user_photo']){
        $coverPhoto =$request['user_photo'];
        $photoname = $slug.'.'.$coverPhoto->getClientOriginalExtension();
        Image::make($coverPhoto)->resize(600,600)->save('public/files/pages/'.$photoname); 
        $input['user_photo'] = $photoname;
        }

        if($request['cover_photo']){
        $coverPhoto =$request['cover_photo'];
        $photoname = $slug.'.'.$coverPhoto->getClientOriginalExtension();
        Image::make($coverPhoto)->resize(600,600)->save('public/files/pages/'.$photoname);
        $input['cover_photo'] = $photoname;
        }

        Page::create($input);

        return redirect()->back();
    }

    public function pageView($id){

        $pageData = Page::find($id);

        $pagePostData = PagePost::where('page_id', $id)->orderBy('id', 'desc')->get();

        $postCount = PagePost::where('page_id', $id)->count();

        return view('user.single-page',compact('pageData','pagePostData','postCount'));
    }

    public function pagePostStore(Request $request){

        $this->validate($request, [
            'post_description' => 'required',
            'post_status' => 'required',
        ]);


        $input = $request->all();
        $currentUserName = !empty(Auth::user()->name) ? Auth::user()->name : 0 ;
        $date = date('Y-m-d H:i:s');
        
        $input['page_id'] = $input['id'];
        $input['post_description'] = $input['post_description'];
        $input['post_status'] = $input['post_status'];
        $input['date'] = $date;

        $slug = Str::of($currentUserName)->slug('-');

        if($request['post_photo']){
        $coverPhoto =$request['post_photo'];
        $photoname = $slug.'.'.$coverPhoto->getClientOriginalExtension();
        Image::make($coverPhoto)->resize(600,600)->save('public/files/pages/post/'.$photoname);
        $input['post_photo'] = $photoname;
        }

        PagePost::create($input);

        return redirect()->back();
    }
}
