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

            <div class="max-w-[1065px] mx-auto">

                <!-- Cover  -->
                <div class="bg-white shadow lg:rounded-b-2xl lg:-mt-10 dark:bg-dark2">
    
                    <!-- cover -->
                    <div class="relative overflow-hidden w-full lg:h-60 h-40">
                        <img src="{{ asset('public/files/pages/'.$pageData->cover_photo) }}" alt="" class="h-full w-full object-cover inset-0">
    
                        <!-- overly -->
                        <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from -black/60 pt-10 z-10"></div>
    
                        <div class="absolute bottom-0 right-0 m-4 z-20">
                            <div class="flex items-center gap-3">
                                <button class="button bg-white/20 text-white flex items-center gap-2 backdrop-blur-small">Crop</button>
                                <button class="button bg-black/10 text-white flex items-center gap-2 backdrop-blur-small">Edit</button>
                            </div>
                        </div>
    
                    </div>
    
                    <div class="lg:px-10 md:p-5 p-3">
    
                        <div class="flex flex-col justify-center -mt-20">
    
                            <div class="relative h-20 w-20 mb-4 z-10">
                                <div class="relative overflow-hidden rounded-full md:border-[2px] border-gray-100 shrink-0 dark:border-slate-900 shadow">
                                    <img src="{{ asset('public/files/pages/'.$pageData->user_photo) }}" alt="" class="h-full w-full object-cover inset-0">                           
                                </div>
                            </div>
                           
                            <div class="flex lg:items-center justify-between max-md:flex-col max-md:gap-3">
    
                                <div class="flex-1"> 
                                    <h3 class="md:text-2xl text-lg font-bold text-black dark:text-white"> {{ $pageData->name }} </h3>
                                    <p  class=" font-normal text-gray-500 mt-2 flex gap-2 dark:text-white/80">

                                        <span> <b class="font-medium text-black dark:text-white">1.2K</b> likes </span>
                                        <span> • </span>
                                        <span> <b class="font-medium text-black dark:text-white">1.4K</b> followers </span>
                                    </p>
                                </div>
    
                                <div class="flex items-center gap-2 mt-1"> 
                                    <button class="button bg-primary text-white flex items-center gap-2  py-2 px-3.5 shadow max-lg:flex-1">  
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                            <path fill-rule="evenodd" d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902 1.168.188 2.352.327 3.55.414.28.02.521.18.642.413l1.713 3.293a.75.75 0 001.33 0l1.713-3.293a.783.783 0 01.642-.413 41.102 41.102 0 003.55-.414c1.437-.231 2.43-1.49 2.43-2.902V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0010 2zM6.75 6a.75.75 0 000 1.5h6.5a.75.75 0 000-1.5h-6.5zm0 2.5a.75.75 0 000 1.5h3.5a.75.75 0 000-1.5h-3.5z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm"> Chat  </span>
                                    </button>
                                    <button class="button bg-secondery flex items-center gap-2  py-2 px-3.5 max-lg:flex-1">  
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                            <path d="M1 8.25a1.25 1.25 0 112.5 0v7.5a1.25 1.25 0 11-2.5 0v-7.5zM11 3V1.7c0-.268.14-.526.395-.607A2 2 0 0114 3c0 .995-.182 1.948-.514 2.826-.204.54.166 1.174.744 1.174h2.52c1.243 0 2.261 1.01 2.146 2.247a23.864 23.864 0 01-1.341 5.974C17.153 16.323 16.072 17 14.9 17h-3.192a3 3 0 01-1.341-.317l-2.734-1.366A3 3 0 006.292 15H5V8h.963c.685 0 1.258-.483 1.612-1.068a4.011 4.011 0 012.166-1.73c.432-.143.853-.386 1.011-.814.16-.432.248-.9.248-1.388z" />
                                        </svg>
                                        <span class="text-sm"> Like  </span>
                                    </button>
                                    <div> 
                                        <button type="button" class="rounded-lg bg-secondery flex px-2.5 py-2 dark:bg-dark2"> 
                                            <ion-icon name="ellipsis-horizontal" class="text-xl">
                                        </button>
                                        <div  class="w-[240px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click;offset:10"> 
                                            <nav>
                                                <a href="#"> <ion-icon class="text-xl" name="pricetags-outline"></ion-icon> Unfollow </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="share-outline"></ion-icon> Share  </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="link-outline"></ion-icon>  Copy link </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="chatbubble-ellipses-outline"></ion-icon>  Sort comments </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="flag-outline"></ion-icon>  Report group</a>  
                                                <hr>
                                                <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50"> <ion-icon class="text-xl" name="stop-circle-outline"></ion-icon>  Block </a>  
                                            </nav>
                                        </div>
                                    </div>
                                </div>
     
                            </div>
                            
    
                        </div>
     
                    </div>
    
                    <div class="flex items-center justify-between border-t border-gray-100 px-2 dark:border-slate-700">
    
                        <nav class="flex gap-0.5 rounded-xl overflow-hidden -mb-px text-gray-500 font-medium text-sm overflow-x-auto dark:text-white">
                            <a href="#" class="inline-block py-3 leading-8 px-3.5 border-b-2 border-blue-600 text-blue-600">Timeline</a>
                            <a href="#" class="inline-block py-3 leading-8 px-3.5">About</a>
                            <a href="#" class="inline-block py-3 leading-8 px-3.5">Photo</a>
                            <a href="#" class="inline-block py-3 leading-8 px-3.5">Video</a>
                            <a href="#" class="inline-block py-3 leading-8 px-3.5">Reviews</a>
                            <a href="#" class="inline-block py-3 leading-8 px-3.5">Discussion</a>
                        </nav>
    
                        <div class="flex items-center gap-1 text-sm p-3 bg-secondery py-2 mr-2 rounded-xl max-lg:hidden dark:bg-white/5">
                            <ion-icon name="search" class="text-lg"></ion-icon>
                            <input placeholder="Search .." class="!bg-transparent">
                        </div>
    
                    </div>
    
    
                </div>
                
                <div class="flex 2xl:gap-12 gap-10 mt-8 max-lg:flex-col" id="js-oversized">
    
                    <!-- feed story -->
                    <div class="flex-1 xl:space-y-6 space-y-3">
                        
                        <!-- add story -->
                        <div class="bg-white rounded-xl shadow-sm p-4 space-y-4 text-sm font-medium border1 dark:bg-dark2">
    
                            <div class="flex items-center gap-3">
                                <div class="flex-1 bg-slate-100 hover:bg-opacity-80 transition-all rounded-lg cursor-pointer dark:bg-dark3" uk-toggle="target: #create-status"> 
                                    <div class="py-2.5 text-center dark:text-white"> What do you have in mind? </div>
                                </div>
                                <div class="cursor-pointer hover:bg-opacity-80 p-1 px-1.5 rounded-lg transition-all bg-pink-100/60 hover:bg-pink-100" uk-toggle="target: #create-status">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 stroke-pink-600 fill-pink-200/70" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M15 8h.01" />
                                        <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
                                        <path d="M3.5 15.5l4.5 -4.5c.928 -.893 2.072 -.893 3 0l5 5" />
                                        <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l2.5 2.5" />
                                      </svg>
                                </div>
                                <div class="cursor-pointer hover:bg-opacity-80 p-1 px-1.5 rounded-lg transition-all bg-sky-100/60 hover:bg-sky-100" uk-toggle="target: #create-status">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 stroke-sky-600 fill-sky-200/70 " viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z" />
                                        <path d="M3 6m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" />
                                    </svg>
                                </div> 
                            </div>
                            
                        </div>


                        <!-- sadaaaaaaaaaaaaaaaaaaa -->
                        @foreach($pagePostData as $row)

                        <!--  post image-->
                        <div class="bg-white rounded-xl shadow-sm text-sm font-medium border1 dark:bg-dark2">
    

                            <!-- post heading -->
                            <div class="flex gap-3 sm:p-4 p-2.5 text-sm font-medium">
                                <a href="timeline.html"> <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-3.jpg" alt="" class="w-9 h-9 rounded-full"> </a>  
                                <div class="flex-1">
                                    <a href="timeline.html"> <h4 class="text-black dark:text-white"> Monroe Parker </h4> </a>  
                                    <div class="text-xs text-gray-500 dark:text-white/80"> 2 hours ago</div>
                                </div>
    
                                <div class="-mr-1">
                                    <button type="button" class="button-icon w-8 h-8"> <ion-icon class="text-xl" name="ellipsis-horizontal"></ion-icon> </button>
                                    <div  class="w-[245px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click"> 
                                        <nav> 
                                            <a href="#"> <ion-icon class="text-xl shrink-0" name="bookmark-outline"></ion-icon>  Add to favorites </a>  
                                            <a href="#"> <ion-icon class="text-xl shrink-0" name="notifications-off-outline"></ion-icon> Mute Notification </a>  
                                            <a href="#"> <ion-icon class="text-xl shrink-0" name="flag-outline"></ion-icon>  Report this post </a>  
                                            <a href="#"> <ion-icon class="text-xl shrink-0" name="share-outline"></ion-icon>  Share your profile </a>  
                                            <hr>
                                            <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50"> <ion-icon class="text-xl shrink-0" name="stop-circle-outline"></ion-icon>  Unfollow </a>  
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            @if(isset($row->post_description))
                            <div class="sm:px-4 p-2.5 pt-0">
                                <p class="font-normal">{{ $row->post_description }}</p>
                            </div>
                            @endif

                            <!-- post image -->
                            @if(isset($row->post_photo))
                            <div class="relative w-full lg:h-96 h-full sm:px-4">
                                <img src="{{ asset('public/files/pages/post/'.$row->post_photo) }}" alt="" class="sm:rounded-lg w-full h-full object-cover">
                            </div>
                            @endif
    
                            
                            <!-- post icons -->
                            <div class="sm:p-4 p-2.5 flex items-center gap-4 text-xs font-semibold">
                                <div>
                                    <div class="flex items-center gap-2.5">
                                        <button type="button" class="button-icon text-red-500 bg-red-100 dark:bg-slate-700"> <ion-icon class="text-lg" name="heart"></ion-icon> </button>
                                        <a href="#">1,300</a>
                                    </div>
                                    <div    class="p-1 px-2 bg-white rounded-full drop-shadow-md w-[212px] dark:bg-slate-700 text-2xl"
                                            uk-drop="offset:10;pos: top-left; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-bottom-left"> 
                                        
                                        <div class="flex gap-2"  uk-scrollspy="target: > button; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
                                            <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 👍 </span></button>
                                            <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> ❤️ </span></button>
                                            <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 😂 </span></button>
                                            <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 😯 </span></button>
                                            <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 😢 </span></button>
                                        </div>
                                        
                                        <div class="w-2.5 h-2.5 absolute -bottom-1 left-3 bg-white rotate-45 hidden"></div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <button type="button" class="button-icon bg-slate-200/70 dark:bg-slate-700"> <ion-icon class="text-lg" name="chatbubble-ellipses"></ion-icon> </button>
                                    <span>260</span>
                                </div>
                                <button type="button" class="button-icon ml-auto"> <ion-icon class="text-xl" name="paper-plane-outline"></ion-icon> </button>
                                <button type="button" class="button-icon"> <ion-icon class="text-xl" name="share-outline"></ion-icon> </button>
                            </div>
    
                            <!-- comments -->
                            <div class="sm:p-4 p-2.5 border-t border-gray-100 font-normal space-y-3 relative dark:border-slate-700/40"> 
                        
                                <div class="flex items-start gap-3 relative">
                                    <a href="timeline.html"> <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                                    <div class="flex-1">
                                        <a href="timeline.html" class="text-black font-medium inline-block dark:text-white"> Steeve </a>
                                        <p class="mt-0.5">What a beautiful photo! I love it. 😍 </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 relative">
                                    <a href="timeline.html"> <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-3.jpg" alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                                    <div class="flex-1">
                                        <a href="timeline.html" class="text-black font-medium inline-block dark:text-white"> Monroe </a>
                                        <p class="mt-0.5">   You captured the moment.😎 </p>
                                    </div>
                                </div>
    
                                <button type="button" class="flex items-center gap-1.5 text-gray-500 hover:text-blue-500 mt-2">
                                    <ion-icon name="chevron-down-outline" class="ml-auto duration-200 group-aria-expanded:rotate-180"></ion-icon>
                                    More Comment
                                </button>
    
                            </div>
    
                            <!-- add comment -->
                            <div class="sm:px-4 sm:py-3 p-2.5 border-t border-gray-100 flex items-center gap-1 dark:border-slate-700/40">
                                
                                <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-7.jpg" alt="" class="w-6 h-6 rounded-full">
                                
                                <div class="flex-1 relative overflow-hidden h-10">
                                    <textarea placeholder="Add Comment...." rows="1" class="w-full resize-none !bg-transparent px-4 py-2 focus:!border-transparent focus:!ring-transparent"></textarea>
    
                                    <div class="!top-2 pr-2" uk-drop="pos: bottom-right; mode: click">
                                        <div class="flex items-center gap-2" uk-scrollspy="target: > svg; cls: uk-animation-slide-right-small; delay: 100 ;repeat: true">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-sky-600">
                                                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-pink-600">
                                                <path d="M3.25 4A2.25 2.25 0 001 6.25v7.5A2.25 2.25 0 003.25 16h7.5A2.25 2.25 0 0013 13.75v-7.5A2.25 2.25 0 0010.75 4h-7.5zM19 4.75a.75.75 0 00-1.28-.53l-3 3a.75.75 0 00-.22.53v4.5c0 .199.079.39.22.53l3 3a.75.75 0 001.28-.53V4.75z" />
                                            </svg>
                                        </div>
                                    </div>
                                    
    
                                </div>
                                
    
                                <button type="submit" class="text-sm rounded-full py-1.5 px-3.5 bg-secondery"> Replay</button>
                            </div> 


    
                        </div>

                        @endforeach

                        <!-- sadaaaaaaaaaaaaaaaaaaa -->

    

    
                        <!-- placeholder -->
                        <div class="rounded-xl shadow-sm p-4 space-y-4 bg-slate-200/40 animate-pulse border1 dark:bg-dark2">
    
                            <div class="flex gap-3">
                                <div class="w-9 h-9 rounded-full bg-slate-300/20"></div>
                                <div class="flex-1 space-y-3">
                                    <div class="w-40 h-5 rounded-md bg-slate-300/20"></div>
                                    <div class="w-24 h-4 rounded-md bg-slate-300/20"></div>
                                </div>
                                <div class="w-6 h-6 rounded-full bg-slate-300/20"></div>
                            </div>
    
                            <div class="w-full h-52 rounded-lg bg-slate-300/10 my-3"> </div>
    
                            <div class="flex gap-3">
    
                                <div class="w-16 h-5 rounded-md bg-slate-300/20"></div>
    
                                <div class="w-14 h-5 rounded-md bg-slate-300/20"></div>
    
                                <div class="w-6 h-6 rounded-full bg-slate-300/20 ml-auto"></div>
                                <div class="w-6 h-6 rounded-full bg-slate-300/20  "></div>
                            </div>
    
                        </div>
         
        
                    </div>
        
                    <div class="lg:w-[400px]"> 
          
                        <div class="lg:space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6" 
                             uk-sticky="media: 1024; end: #js-oversized; offset: 80">
    
                            <div class="box p-5 px-6">
            
                            
                                <div class="flex items-ce justify-between text-black dark:text-white">
                                    <h3 class="font-bold text-lg"> Intro   </h3>
                                    <a href="#" class="text-sm text-blue-500">Edit</a>
                                </div>
    
                                <ul class="text-gray-700 space-y-4 mt-4 text-sm dark:text-white/80">
    
                                    <li class="flex items-center gap-3"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122" />
                                        </svg>
                                        <div>  Page - <span class="font-semibold text-black dark:text-white"> Business , Shopping  </span> </div>
                                    </li>
                                    <li class="flex items-center gap-3"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                        </svg>
                                        <div>  posts <span class="font-semibold text-black dark:text-white"> {{ $postCount }} </span> </div>
                                    </li>
                                    <li class="flex items-center gap-3"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                          </svg>
                                          
                                        <div>  +123 456 789 </div>
                                    </li>
                                    <li class="flex items-center gap-3"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                        </svg>
                                          
                                        <div> martingray@gmail.com</div>
                                    </li>
                                    <li class="flex items-center gap-3"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                        </svg>
                                        <div>  Rating ·  <span class="font-semibold text-black dark:text-white"> 4.6</span> (59 reviews) </div>
                                    </li>
                                    <li class="flex items-center gap-3"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 19.5v-.75a7.5 7.5 0 00-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                        </svg>
                                        <div>  Flowwed By <span class="font-semibold text-black dark:text-white"> 3,240 People </span> </div>
                                    </li>
                            
                                </ul>
                                
                            </div>
                            
                            <!-- group media  -->
                            <div class="box p-5 px-6">
            
                                <div class="flex items-baseline justify-between text-black dark:text-white">
                                    <h3 class="font-bold text-base"> Recent Media </h3>
                                    <a href="#" class="text-sm text-blue-500">See all</a>
                                </div>
    
                                <div class="grid grid-cols-2 gap-1 text-center text-sm mt-4 mb-2 rounded-lg overflow-hidden">
    
                                    <div class="relative w-full aspect-[4/3]">
                                        <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-5.jpg" alt="" class="object-cover w-full h-full inset-0">
                                    </div> 
                                    <div class="relative w-full aspect-[4/3]">
                                        <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-7.jpg" alt="" class="object-cover w-full h-full inset-0">
                                    </div> 
                                    <div class="relative w-full aspect-[4/3]">
                                        <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-4.jpg" alt="" class="object-cover w-full h-full inset-0">
                                    </div> 
                                    <div class="relative w-full aspect-[4/3]">
                                        <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-6.jpg" alt="" class="object-cover w-full h-full inset-0">
                                    </div> 
    
                                </div>
                                
                            </div>
                            
                            <!-- related pages  -->
                            <div class="box p-5 px-6">
            
                                <div class="flex items-baseline justify-between text-black dark:text-white">
                                    <h3 class="font-bold text-base"> Pages you manage </h3>
                                    <a href="#" class="text-sm text-blue-500">See all</a>
                                </div>
            
                                <div class="side-list">
    
                                    <div class="side-list-item">
                                        <a href="timeline-page.html">
                                            <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-4.jpg" alt="" class="side-list-image rounded-full">
                                        </a>
                                        <div class="flex-1">
                                            <a href="timeline-page.html"><h4 class="side-list-title"> Martin Gray  </h4></a>
                                            <div class="side-list-info"> 320k Following   </div>
                                        </div>
                                        <button class="button bg-secondery">edit</button>
                                    </div>
                                    <div class="side-list-item">
                                        <a href="timeline-page.html">
                                            <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-3.jpg" alt="" class="side-list-image rounded-full">
                                        </a>
                                        <div class="flex-1">
                                            <a href="timeline-page.html"><h4 class="side-list-title"> Monroe Parker  </h4></a>
                                            <div class="side-list-info"> 125k Following  </div>
                                        </div>
                                        <button class="button bg-secondery">edit</button>
                                    </div>
                                    <div class="side-list-item">
                                        <a href="timeline-page.html">
                                            <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-2.jpg" alt="" class="side-list-image rounded-full">
                                        </a>
                                        <div class="flex-1">
                                            <a href="timeline-page.html"><h4 class="side-list-title"> John Michael  </h4></a>
                                            <div class="side-list-info"> 320k Following   </div>
                                        </div>
                                        <button class="button bg-secondery">edit</button>
                                    </div>
                                     
                                </div>
     
            
                            </div>
    
                            <!-- related pages  -->
                            <div class="box p-5 px-6">
            
                                <div class="flex items-baseline justify-between text-black dark:text-white">
                                    <h3 class="font-bold text-base"> Suggested pages </h3>
                                    <a href="#" class="text-sm text-blue-500">See all</a>
                                </div>
            
                                <div class="side-list">
    
                                    <div class="side-list-item">
                                        <a href="timeline-page.html">
                                            <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-5.jpg" alt="" class="side-list-image rounded-full">
                                        </a>
                                        <div class="flex-1">
                                            <a href="timeline-page.html"><h4 class="side-list-title"> James Lewis  </h4></a>
                                            <div class="side-list-info"> 192k Following   </div>
                                        </div>
                                        <button class="button border">Follow</button>
                                    </div>
                                    <div class="side-list-item">
                                        <a href="timeline-page.html">
                                            <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-4.jpg" alt="" class="side-list-image rounded-full">
                                        </a>
                                        <div class="flex-1">
                                            <a href="timeline-page.html"><h4 class="side-list-title"> Martin Gray  </h4></a>
                                            <div class="side-list-info"> 320k Following   </div>
                                        </div>
                                        <button class="button border">Follow</button>
                                    </div>
                                    <div class="side-list-item">
                                        <a href="timeline-page.html">
                                            <img src="{{ asset('public/frontend') }}/assets/images/avatars/avatar-2.jpg" alt="" class="side-list-image rounded-full">
                                        </a>
                                        <div class="flex-1">
                                            <a href="timeline-page.html"><h4 class="side-list-title"> John Michael  </h4></a>
                                            <div class="side-list-info"> 260k Following </div>
                                        </div>
                                        <button class="button border">Follow</button>
                                    </div>
                                     
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

    <!-- create status -->
    <div class="hidden lg:p-20 uk- open" id="create-status" uk-modal="">
   
        <div class="uk-modal-dialog tt relative overflow-hidden mx-auto bg-white shadow-xl rounded-lg md:w-[520px] w-full dark:bg-dark2">

            <div class="text-center py-4 border-b mb-0 dark:border-slate-700">
                <h2 class="text-sm font-medium text-black"> Create Status </h2>

                <!-- close button -->
                <button type="button" class="button-icon absolute top-0 right-0 m-2.5 uk-modal-close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
     
            </div>
                  
            <form action="{{ route('page-post-store') }}" method="Post" enctype='multipart/form-data'>
                @csrf
            <input type="hidden" name="id" value="{{ $pageData->id }}">
            <div class="space-y-5 mt-3 p-2">
                <textarea class="w-full !text-black placeholder:!text-black !bg-white !border-transparent focus:!border-transparent focus:!ring-transparent !font-normal !text-xl" name="post_description" id=""  rows="6" placeholder="What do you have in mind?"></textarea>
            </div>

            <div class="flex items-center gap-2 text-sm py-2 px-4 font-medium flex-wrap">
                <!-- <button type="button" class="flex items-center gap-1.5 bg-sky-50 text-sky-600 rounded-full py-1 px-2 border-2 border-sky-100">  
                    <ion-icon name="image" class="text-base"></ion-icon>  
                    Image 
                </button> -->
                <input type="file" name="post_photo">

                <button type="button" class="flex items-center gap-1.5 bg-teal-50 text-teal-600 rounded-full py-1 px-2 border-2 border-teal-100">  
                    <ion-icon name="videocam" class="text-base"></ion-icon>  
                    Video 
                </button>
                <button type="button" class="flex items-center gap-1.5 bg-sky-50 text-sky-600 rounded-full py-1 px-2 border-2 border-sky-100">  
                    <ion-icon name="happy" class="text-base"></ion-icon>  
                    Feeling
                </button>
                <button type="button" class="flex items-center gap-1.5 bg-red-50 text-red-600 rounded-full py-1 px-2 border-2 border-red-100">  
                    <ion-icon name="location" class="text-base"></ion-icon>  
                    Check in 
                </button>
                <button type="button" class="grid place-items-center w-8 h-8 text-xl rounded-full bg-secondery">  
                    <ion-icon name="ellipsis-horizontal"></ion-icon>
                </button>
            </div>

 
            <div class="p-5 flex justify-between items-center">
                <div>
                    <button class="inline-flex items-center py-1 px-2.5 gap-1 font-medium text-sm rounded-full bg-slate-50 border-2 border-slate-100 group aria-expanded:bg-slate-100 aria-expanded: dark:text-white dark:bg-slate-700" type="button"> 
                        Everyone
                        <ion-icon name="chevron-down-outline" class="text-base duration-500 group-aria-expanded:rotate-180"></ion-icon> 
                    </button>

                    <div  class="p-2 bg-white rounded-lg shadow-lg text-black font-medium border border-slate-100 w-60 dark:bg-slate-700"
                          uk-drop="offset:10;pos: bottom-left; reveal-left;animate-out: true; animation: uk-animation-scale-up uk-transform-origin-bottom-left ; mode:click">

                        <form>
                            <label>
                                <input type="radio" name="post_status" value="0" id="monthly1" class="peer appearance-none hidden" checked />
                                <div class=" relative flex items-center justify-between cursor-pointer rounded-md p-2 px-3 hover:bg-secondery peer-checked:[&_.active]:block dark:bg-dark3">
                                    <div class="text-sm">  Everyone </div> 
                                    <ion-icon name="checkmark-circle" class="hidden active absolute -translate-y-1/2 right-2 text-2xl text-blue-600 uk-animation-scale-up"></ion-icon>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="post_status" value="1" id="monthly1" class="peer appearance-none hidden" />
                                <div class=" relative flex items-center justify-between cursor-pointer rounded-md p-2 px-3 hover:bg-secondery peer-checked:[&_.active]:block dark:bg-dark3">
                                    <div class="text-sm"> Friends </div> 
                                    <ion-icon name="checkmark-circle" class="hidden active absolute -translate-y-1/2 right-2 text-2xl text-blue-600 uk-animation-scale-up"></ion-icon>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="post_status" value="2" id="monthly" class="peer appearance-none hidden" />
                                <div class=" relative flex items-center justify-between cursor-pointer rounded-md p-2 px-3 hover:bg-secondery peer-checked:[&_.active]:block dark:bg-dark3">
                                    <div class="text-sm"> Only me </div> 
                                    <ion-icon name="checkmark-circle" class="hidden active absolute -translate-y-1/2 right-2 text-2xl text-blue-600 uk-animation-scale-up"></ion-icon>
                                </div>
                            </label>
                        </form>

                    </div>
                </div>
                <div class="flex items-center gap-2"> 
                    <button type="submit" class="button bg-blue-500 text-white py-2 px-12 text-[14px]"> Create</button>
                </div>
            </div>

            </form>

        
        </div>

    </div>

@endsection