@extends('layouts.socialite')

@section('user_content')


  <!-- sidebar overly -->
  <div id="site__sidebar__overly" 
                class="absolute top-0 left-0 z-20 w-screen h-screen xl:hidden backdrop-blur-sm"
                uk-toggle="target: #site__sidebar ; cls :!-translate-x-0"> 
            </div>
        </div>

        <!-- main contents -->
        <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

            <div class="flex max-lg:flex-col 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto" id="js-oversized">

                <div class="flex-1">

                    <div class="max-w-[680px] w-full mx-auto">

                        <div class="page-heading">
                            
                            <h1 class="page-title"> Pages </h1>
        
                            <nav class="nav__underline">
        
                                <ul class="group" uk-switcher="connect: #page-tabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium"> 
                            
                                    <li> <a href="#"> Suggestions  </a> </li>
                                    <li> <a href="#"> Popular </a> </li>
                                    <li> <a href="#"> My pages </a> </li>
                                    
                                </ul> 
        
                            </nav>
        
                        </div>
        
                        <!-- page feautred -->
                        <div tabindex="-1" uk-slider="finite:true">
            
                            <div class="uk-slider-container pb-1">
                            
                                <ul class="uk-slider-items grid-small">
                                    

                                @foreach($pageData as $row)
                                    <li class="lg:w-1/4 sm:w-1/3 w-1/2">
                                        <div class="card uk-transition-toggle">
                                            <a href="timeline-page.html">
                                                <div class="card-media sm:aspect-[2/1.9] h-40">
                                                    <img src="{{ asset('public/files/pages/'.$row->cover_photo) }}" alt="">
                                                    <div class="card-overly"></div>
                                                </div>
                                            </a>
                                            <div class="card-body p-3 w-full z-10 absolute bg-gradient-to-t bottom-0 from-black/60">
                                                <p class="card-text text-xs text-white/80"> {{ $row->country }} </p>
                                                <a href="timeline-page.html">
                                                    <h4 class="card-title text-sm mt-0.5 !text-white"> {{ $row->name }} </h4>
                                                </a>
                                            </div>
                                            <!-- close -->
                                            <button type="button" class="uk-transition-fade absolute top-0 right-0 m-2 z-10 bg-black/20 rounded-full flex p-1">
                                                <ion-icon name="close" class="text-white"></ion-icon>
                                            </button>
                                        </div>
                                    </li> 

                                    @endforeach
        
                                    
                                    
                                </ul>
                        
                            </div>
                        
                            <!-- slide nav icons -->
                            <a class="nav-prev" href="#" uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon> </a>
                            <a class="nav-next" href="#" uk-slider-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon></a>
                            
                        </div>
        
                        <div id="page-tabs" class="uk-switcher mt-10">
        
                            <!-- pages card layout 1 -->
        
                            <div class="grid sm:grid-cols-3 grid-cols-2 gap-3" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
        

                            @foreach($pageData as $row)

                                <div class="card">
                                    <a href="timeline-page.html">
                                        <div class="card-media sm:aspect-[2/1.7] h-40">
                                            <img src="{{ asset('public/files/pages/'.$row->cover_photo) }}" alt="">
                                            <div class="card-overly"></div>
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <a href="timeline-page.html"> <h4 class="card-title"> {{ $row->name }} </h4> </a>
                                        <p class="card-text">125k Following</p>
                                        <button type="button" class="button bg-primary text-white">Follow</button>
                                    </div>
                                </div>

                                @endforeach


                                <!-- load more -->
                                <div class="flex justify-center my-6 lg:col-span-3 col-span-2">
                                    <button type="button" class="bg-white py-2 px-5 rounded-full shadow-md font-semibold text-sm dark:bg-dark2">Load more...</button>
                                </div>
        
                            </div>
                            
                            <!-- pages card layout 2-->
        
                            <div class="grid sm:grid-cols-2 gap-3" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
        
                                <div class="card flex space-x-5 p-5">
                                    <a href="timeline-page.html">
                                        <div class="card-media w-16 h-16 shrink-0 rounded-full">
                                            <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-1.jpg" alt="">
                                            <div class="card-overly"></div>
                                        </div>
                                    </a>
                                    



                                    <div class="card-body flex-1 p-0">
                                        <a href="timeline-page.html"> <h4 class="card-title"> Jesse Steeve srs </h4> </a>
                                        <p class="card-text"> 162k Following </p>
                                        <div class="flex gap-1 mt-1">
                                            <button type="button" class="button bg-primary-soft text-primary dark:text-white">  
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                    <path d="M7.493 18.75c-.425 0-.82-.236-.975-.632A7.48 7.48 0 016 15.375c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75 2.25 2.25 0 012.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23h-.777zM2.331 10.977a11.969 11.969 0 00-.831 4.398 12 12 0 00.52 3.507c.26.85 1.084 1.368 1.973 1.368H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 01-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227z" />
                                                </svg>
                                                Liked
                                            </button>
                                            <button type="button" class="button bg-primary-soft text-primary dark:text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                    <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z" clip-rule="evenodd" />
                                                </svg>
                                                Message
                                            </button>
                                        </div>
                                    </div>
                                </div>





                            
        
                                <!-- load more -->
                                <div class="flex justify-center my-6 sm:col-span-2">
                                    <button type="button" class="bg-white py-2 px-5 rounded-full shadow-md font-semibold text-sm dark:bg-dark2">Load more...</button>
                                </div>
        
                            </div>
        
        
                            <!-- pages card layout 3 -->
        
                            <div class="grid sm:grid-cols-3 grid-cols-2 gap-3" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
        

                            @foreach($pageData as $row)
                            
                                <div class="card">
                                    <div class="card-media sm:h-24 h-16">
                                        <img src="{{ asset('public/files/pages/'.$row->cover_photo) }}" alt="">
                                        <div class="card-overly"></div>
                                    </div>
                                    <div class="card-body relative z-10">
                                        <img src="{{ asset('public/files/pages/'.$row->user_photo) }}" alt="" class="w-10 rounded-full sm:mb-2 mb-1 shadow -mt-8 relative border-2 border-white">
                                        <h4 class="card-title"> {{ $row->name }} </h4>
                                        <p class="card-text"> 125k Followingxx1 </p>
                
                                        <div class="flex gap-2">
                                            <a href="" class="button bg-primary text-white flex-1">Edit</a>
                                            <a href="{{ route('page.view',$row->id) }}" class="button bg-secondery !w-auto">View</a>
                                        </div>
                                        
                                    </div>
                                </div>
                                @endforeach
                               
                                <!-- load more -->
                                <div class="flex justify-center my-6 lg:col-span-3 col-span-2">
                                    <button type="button" class="bg-white py-2 px-5 rounded-full shadow-md font-semibold text-sm dark:bg-dark2">Load more...</button>
                                </div>
        
                            
                            </div>
        
                        </div>

                    </div>

           
                </div>
    
                <!-- sidebar -->
                <div class="2xl:w-[380px] lg:w-[330px] w-full">
    
                    <div  class="lg:space-y-6 space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6" 
                          uk-sticky="media: 1024; end: #js-oversized; offset: 80">
                          
                        <div class="box p-5 px-6">
    
                            <div class="flex items-baseline justify-between text-black dark:text-white">
                                <h3 class="font-bold text-base"> Pages You Manage </h3>
                                <a href="#" class="text-sm text-blue-500">See all</a>
                            </div>
                        
                            <div class="side-list">
    
                            @foreach($pageUserManageData as $row)

                                <div class="side-list-item">
                                    <a href="{{ route('page.view',$row->id) }}">
                                        <img src="{{ asset('public/files/pages/'.$row->user_photo) }}" alt="" class="side-list-image rounded-full">
                                    </a>
                                    <div class="flex-1">
                                        <a href="{{ route('page.view',$row->id) }}"><h4 class="side-list-title">  John Michael</h4></a>
                                        <div class="side-list-info"> Updated 2 day ago </div>
                                    </div>
                                    <button class="button bg-secondery">Edit</button>
                                </div>

                                @endforeach

                                 
                            </div>
    
                        </div>
    
                        <!-- Groups You Manage  -->
                        <div class="bg-white rounded-xl shadow p-5 px-6 border1 dark:bg-dark2">
                                        
                            <div class="flex items-baseline justify-between text-black dark:text-white">
                                <h3 class="font-bold text-base"> pages you manage </h3>
                                <a href="#" class="text-sm text-blue-500">See all</a>
                            </div>
    
                            <div class="side-list">


                            @foreach($pageUserManageData as $row)
    
                                <div class="side-list-item">
                                    <a href="{{ route('page.view',$row->id) }}">
                                        <img src="{{ asset('public/files/pages/'.$row->user_photo) }}" alt="" class="side-list-image rounded-full">
                                    </a>
                                    <div class="flex-1">
                                        <a href="{{ route('page.view',$row->id) }}"><h4 class="side-list-title">  John Michael</h4></a>
                                        <div class="side-list-info"> Updated 6 day ago </div>
                                    </div>
                                    <button class="button bg-primary-soft text-primary dark:text-white">Like</button>
                                </div>

                                @endforeach

                                 
                            </div>
    
                            <button class="bg-secondery w-full text-black py-1.5 font-medium px-3.5 rounded-md text-sm mt-3 dark:text-white">See all</button>

                        </div>
    
                        <!-- Groups You Manage  -->
                        <div class="bg-white rounded-xl shadow p-5 px-6 border1 dark:bg-dark2">
                                        
                            <div class="flex items-baseline justify-between text-black dark:text-white">
                                <h3 class="font-bold text-base"> Suggested pages </h3>
                                <a href="#" class="text-sm text-blue-500">See all</a>
                            </div>
    
                            <div class="side-list">
    
                                <div class="side-list-item">
                                    <a href="timeline-group.html">
                                        <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-2.jpg" alt="" class="side-list-image rounded-full">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-group.html"><h4 class="side-list-title">  John Michael</h4></a>
                                        <div class="side-list-info"> Updated 1 week ago </div>
                                    </div>
                                    <button class="button bg-primary text-white">Like</button>
                                </div>
                                <div class="side-list-item">
                                    <a href="timeline-group.html">
                                        <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-4.jpg" alt="" class="side-list-image rounded-full"> 
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-group.html"><h4 class="side-list-title"> Martin Gray</h4></a>
                                        <div class="side-list-info"> Updated 4 week ago </div>
                                    </div>
                                    <button class="button bg-primary text-white">Like</button>
                                </div>  
                                <div class="side-list-item">
                                    <a href="timeline-group.html">
                                        <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-3.jpg" alt="" class="side-list-image rounded-full">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-group.html"><h4 class="side-list-title"> Monroe Parker</h4></a>
                                        <div class="side-list-info"> Updated 2 month ago </div>
                                    </div>
                                    <button class="button bg-primary text-white">Like</button>
                                </div>  
                               
                                 
                            </div>
     
                        </div>
         
                    </div> 
    
                </div>
    
            </div>
            
        </main>

    </div>


    <!-- open chat box -->
    <div>
        <button type="button" class="sm:m-10 m-5 px-4 py-2.5 rounded-2xl bg-gradient-to-tr from-blue-500 to-blue-700 text-white shadow fixed bottom-0 right-0 group flex items-center gap-2">
            
            <svg class="w-6 h-6 group-aria-expanded:hidden duration-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
            </svg>
    
            <div class="text-base font-semibold max-sm:hidden"> Chat </div>
    
            <svg class="w-6 h-6 -mr-1 hidden group-aria-expanded:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
            </svg>
              
        </button>
        <div  class="bg-white rounded-xl drop-shadow-xl  sm:w-80 w-screen border-t dark:bg-dark3 dark:border-slate-600" id="chat__box"
              uk-drop="offset:10;pos: bottom-right; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-bottom-right; mode: click">
                                              
              <div class="relative">
                <div class="p-5">
                    <h1 class="text-lg font-bold text-black"> Chats </h1>
                </div>
        
                <!-- search input defaul is hidden -->
                <div class="bg-white p-3 absolute w-full top-11 border-b flex gap-2 hidden dark:border-slate-600 dark:bg-slate-700 z-10" 
                     uk-scrollspy="cls:uk-animation-slide-bottom-small ; repeat: true; duration:0" id="search__chat">
                    
                    <div class="relative w-full">
                        <input type="text" class="w-full rounded-3xl dark:!bg-white/10" placeholder="Search">
    
                        <button type="button" class="absolute  right-0  rounded-full shrink-0 px-2 -translate-y-1/2 top-1/2" 
                                uk-toggle="target: #search__chat ; cls: hidden">
                            
                                <ion-icon name="close-outline" class="text-xl flex"></ion-icon>
                        </button>
                    </div>
    
                </div>
                
                <!-- button actions -->
                <div class="absolute top-0 -right-1 m-5 flex gap-2 text-xl">
                    <button uk-toggle="target: #search__chat ; cls: hidden">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>
                    <button uk-toggle="target: #chat__box ; cls: uk-open">
                        <ion-icon name="close-outline"></ion-icon>
                    </button>
                </div>
                
                <!-- tabs -->
                <div class="page-heading bg-slat e-50 ">
                     
                    <nav class="nav__underline -mt-7 px-5">
        
                        <ul class="group" uk-switcher="connect: #chat__tabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium"> 
                       
                            <li> <a href="#" class="inline-block py-[18px] border-b-2 border-transparent aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white"> Friends  </a> </li>
                            <li> <a href="#"> Groups </a> </li>
                            
                        </ul> 
        
                    </nav>
        
                </div>
                  
                <!-- tab 2 optional -->
                <div class="grid grid-cols-2 px-3 py-2 bg-slate-50  -mt-12 relative z-10 text-sm border-b  hidden" uk-switcher="connect: #chat__tabs; toggle: * > button ; animation: uk-animation-slide-right uk-animation-slide-top">
                    <button class="bg-white shadow rounded-md py-1.5"> Friends </button>
                    <button> Groups </button>
                </div>
    
                <!-- chat list -->
                <div class="uk-switcher overflow-hidden rounded-xl -mt-8" id="chat__tabs">
    
                    <!-- tab list 1 -->
                    <div class="space-y -m t-5 p-3 text-sm font-medium h-[280px] overflow-y-auto">
        
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-1.jpg" alt="" class="w-7 rounded-full">
                                <div> Jesse Steeve </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-2.jpg" alt="" class="w-7 rounded-full">
                                <div> John Michael </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-3.jpg" alt="" class="w-7 rounded-full">
                                <div> Monroe Parker </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-5.jpg" alt="" class="w-7 rounded-full">
                                <div> James Lewis </div>
                            </div>
                        </a> 
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-4.jpg" alt="" class="w-7 rounded-full">
                                <div> Martin Gray </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-6.jpg" alt="" class="w-7 rounded-full">
                                <div> Alexa stella </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-1.jpg" alt="" class="w-7 rounded-full">
                                <div> Jesse Steeve </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-2.jpg" alt="" class="w-7 rounded-full">
                                <div> John Michael </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-3.jpg" alt="" class="w-7 rounded-full">
                                <div> Monroe Parker </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-5.jpg" alt="" class="w-7 rounded-full">
                                <div> James Lewis </div>
                            </div>
                        </a>
                        
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-4.jpg" alt="" class="w-7 rounded-full">
                                <div> Martin Gray </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-6.jpg" alt="" class="w-7 rounded-full">
                                <div> Alexa stella </div>
                            </div>
                        </a>
                        
                         
                    </div>
        
                    <!-- tab list 2 -->
                    <div class="space-y -m t-5 p-3 text-sm font-medium h-[280px] overflow-y-auto">
        
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-1.jpg" alt="" class="w-7 rounded-full">
                                <div> Jesse Steeve </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-2.jpg" alt="" class="w-7 rounded-full">
                                <div> John Michael </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-3.jpg" alt="" class="w-7 rounded-full">
                                <div> Monroe Parker </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-5.jpg" alt="" class="w-7 rounded-full">
                                <div> James Lewis </div>
                            </div>
                        </a> 
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-4.jpg" alt="" class="w-7 rounded-full">
                                <div> Martin Gray </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-6.jpg" alt="" class="w-7 rounded-full">
                                <div> Alexa stella </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-1.jpg" alt="" class="w-7 rounded-full">
                                <div> Jesse Steeve </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-2.jpg" alt="" class="w-7 rounded-full">
                                <div> John Michael </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-3.jpg" alt="" class="w-7 rounded-full">
                                <div> Monroe Parker </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-5.jpg" alt="" class="w-7 rounded-full">
                                <div> James Lewis </div>
                            </div>
                        </a>
                        
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-4.jpg" alt="" class="w-7 rounded-full">
                                <div> Martin Gray </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-6.jpg" alt="" class="w-7 rounded-full">
                                <div> Alexa stella </div>
                            </div>
                        </a>
                        
                         
                    </div>
                    
                </div>
    
    
              </div>
              
              <div class="w-3.5 h-3.5 absolute -bottom-2 right-5 bg-white rotate-45 dark:bg-dark3"></div>
        </div>
    </div>


@endsection
