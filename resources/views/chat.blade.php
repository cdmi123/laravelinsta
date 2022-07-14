@include('header')

<style>
    #main_menu li:nth-child(3) a span,
    #main_menu li:nth-child(3) a i {
        color: #be185d !important;
    }

    .main_content {
        margin-bottom: 0 !important;
    }
</style>

<div class="container m-auto pt-3 chat">

    <h1 class="font-semibold lg:mb-6 mb-3 text-2xl"> Messages</h1>

    <div
        class="lg:flex lg:shadow lg:bg-white lg:space-y-0 space-y-8 rounded-md lg:-mx-0 -mx-5 overflow-hidden lg:dark:bg-gray-800 shadow_bg" style="height: 500px">
        <!-- left message-->
        <div class="lg:w-4/12 border-r dark:bg-gray-800 dark:border-gray-600">

            <!-- search-->
            <div class="border-b dark:border-gray-600" style="padding: 12px 0px">
                <div class="bg-gray-100 input-with-icon rounded-md dark:bg-gray-700">
                    <input id="autocomplete-input" type="text" placeholder="Search"
                        class="bg-transparent max-h-10 shadow-none">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>

            <!-- user list-->
            <div class="w-full overflow-auto" style="height: 435px" data-simplebar>
                <ul class="dark:text-gray-100 chat_msg p-0">
                    @foreach ($chat_data as $user_chat)
                        <?php $sql = DB::table('register')
                            ->where('id', $user_chat->id)
                            ->first();

                        $follow_id = explode(',',$sql->followers);

                        if(in_array(Session::get('user_id'),$follow_id)) { ?>
                        <li>
                            <a href="javascript:void(0)"
                                class="block flex items-center py-3 px-4 space-x-3 hover:bg-gray-100 dark:hover:bg-gray-700 user_chat"
                                data-chat="{{ $user_chat->id }}">
                                <div class="w-12 h-12 rounded-full relative flex-shrink-0">
                                    <img src="{{ asset('register_user/' . $user_chat->image) }}" alt=""
                                        class="absolute h-full rounded-full w-full">
                                       <?php if($user_chat->logins == 1){ ?> 
                                    <span
                                        class="absolute bg-green-500 border-2 border-white bottom-0 h-3 m-0.5 right-0 rounded-full shadow-md w-3"></span>
                                        <?php } ?>
                                </div>
                                <span class="flex-1 min-w-0 relative text-gray-500">
                                    <h6 class="text-black font-semibold dark:text-white text-capitalize">
                                        {{ $user_chat->fname }} {{ $user_chat->lname }} </h6>
                                    <span class="absolute right-0 top-1 text-xs">Sun</span>
                                    <p class="truncate">Esmod tincidunt ut laoreet</p>
                                </span>
                            </a>
                        </li>
                        <?php } ?>
                    @endforeach
                </ul>
            </div>
        </div>

        <!--  message-->
        <div class="lg:w-8/12 bg-white dark:bg-gray-800" id="chat_id">
          
            @if(Session()->has('chat_id'))
                <div class="px-5 pb-2 pt-3 flex uk-flex-between">

                    <a href="#" class="flex items-center space-x-3" id="recive_id" data-id="{{$chat->id}}" >
                        <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                            <img src="{{ asset('register_user/' . $chat->image) }}" alt=""
                                class="h-full rounded-full w-full">
                                <?php if($chat->logins == 1) { ?>
                            <span
                                class="absolute bg-green-500 border-2 border-white bottom-0 h-3 m-0.5 right-0 rounded-full shadow-md w-3">
                            </span>
                            <?php } ?>
                        </div>
                        <span class="flex-1 min-w-0 relative text-gray-500">
                            <h4 class="font-semibold text-black text-lg mb-0">  
                                {{$chat->fname}}
                            </h4>

                          <?php if($chat->logins == 1 ) { ?>  <p class="font-semibold leading-3 text-green-500 text-sm mb-0">is online</p><?php } ?>
                        </span>
                    </a>

                    <a href="#"
                        class="flex hover:text-red-400 items-center leading-8 space-x-2 text-red-500 font-medium">
                        <i class="uil-trash-alt"></i> <span class="lg:block hidden"> Delete Conversation </span>
                    </a>
                </div>

                <div class="border-t dark:border-gray-600">

                    <div class="lg:p-8 p-4 space-y-5 overflow-auto" style="height: 378px" data-simplebar>

                        <h3 class="lg:w-60 mx-auto text-sm uk-heading-line uk-text-center lg:pt-2"><span> 28 June, 2018
                            </span></h3>

                            @foreach($old_msg as $msg)
                            <?php if($msg->send_id == Session::get('user_id')){ ?>
                        <!-- my message-->
                        <div class="flex lg:items-center flex-row-reverse">
                            <div class="w-14 h-14 rounded-full relative flex-shrink-0">
                                <img src="{{ asset('register_user/' . Session::get('user_image')) }}" alt=""
                                    class="absolute h-full rounded-full w-full">
                            </div>
                            <div
                                class="text-white py-2 px-3 rounded bg_chat_color relative h-full lg:mr-5 mr-2 lg:ml-20 bg_dark">
                                <p class="leading-6">{{$msg->message}}<i class="uil-grin-tongue-wink"></i> </p>
                                <div class="absolute w-3 h-3 top-3 -right-1 transform rotate-45 bg_chat_color_side">
                                </div>
                            </div>
                        </div>
                        <br>
                        <?php } else { ?>
                        {{-- <h3 class="lg:w-60 mx-auto text-sm uk-heading-line uk-text-center lg:pt-2"><span> 28 June, 2018
                            </span></h3> --}}

                        <div class="flex lg:items-center">
                            <div class="w-14 h-14 rounded-full relative flex-shrink-0">
                                <img src="{{ asset('register_user/' . $chat->image) }}" alt=""
                                    class="absolute h-full rounded-full w-full">
                            </div>
                            <div
                                class="text-gray-700 py-2 px-3 rounded bg-gray-100 h-full relative lg:ml-5 ml-2 lg:mr-20 dark:bg-gray-700 dark:text-white bg_light">
                                <p class="leading-6">{{$msg->message}}<urna class="i uil-heart"></urna> <i
                                        class="uil-grin-tongue-wink"> </i> </p>
                                <div
                                    class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-700">
                                </div>
                            </div>
                        </div>
                        <br>
                        <?php } ?>
                        @endforeach
                        <br>
                        <div class="flex lg:items-center">
                            <div class="w-14 h-14 rounded-full relative flex-shrink-0">
                                <img src="{{ asset('register_user/' . $chat->image) }}" alt=""
                                    class="absolute h-full rounded-full w-full">
                            </div>
                            <div
                                class="text-gray-700 py-2 px-3 rounded bg-gray-100 relative h-full lg:ml-5 ml-2 lg:mr-20 dark:bg-gray-700 dark:text-white bg_light">

                                <div class="flex space-x-0.5 my-2 animate-pulse bg_light">
                                    <div class="w-2 h-2 rounded-full bg-gray-400"></div>
                                    <div class="w-2 h-2 rounded-full bg-gray-300"></div>
                                    <div class="w-2 h-2 rounded-full bg-gray-300"></div>
                                </div>
                                <div
                                    class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-700">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="border-t flex p-2 dark:border-gray-700">
                        <textarea cols="1" rows="1" placeholder="Your Message.." id="msg"
                            class="border-0 flex-1 h-10 min-h-0 resize-none min-w-0 shadow-none dark:bg-transparent me-3 pt-2 ps-2"></textarea>
                        <div class="flex h-full space-x-2">
                           <a href="javascript:void(0)" class="bg_chat_color font-semibold px-6 py-2 rounded-md text-white" id="send">Send</a>
                        </div>
                    </div>

                </div>
            @endif

            <div class="blank px-5 flex uk-flex-between">

            </div>
            
        </div>

    </div>

</div>

</div>

</div>


<script>
    (function(window, document, undefined) {
        'use strict';
        if (!('localStorage' in window)) return;
        var nightMode = localStorage.getItem('gmtNightMode');
        if (nightMode) {
            document.documentElement.className += ' dark';
        }
    })(window, document);


    (function(window, document, undefined) {

        'use strict';

        // Feature test
        if (!('localStorage' in window)) return;

        // Get our newly insert toggle
        var nightMode = document.querySelector('#night-mode');
        if (!nightMode) return;

        // When clicked, toggle night mode on or off
        nightMode.addEventListener('click', function(event) {
            event.preventDefault();
            document.documentElement.classList.toggle('dark');
            if (document.documentElement.classList.contains('dark')) {
                localStorage.setItem('gmtNightMode', true);
                return;
            }
            localStorage.removeItem('gmtNightMode');
        }, false);

    })(window, document);
</script>



@include('footer')

<script>

    $('.user_chat').click(function() {
        var chat_id = $(this).attr('data-chat');

        // alert(chat_id);

        $.ajax({

            type: "GET",
            url: "/user_chat_id",
            data: {
                "_token": "{{ csrf_token() }}",
                "id": chat_id

            },
            success: function(res) {
                $("#chat_id").html(res);
            }

        });
    });


$(document).ready(function(){
    $('#send').click(function() {

        var message_data = $('#msg').val();
        var chat_id = $('#recive_id').attr('data-id');
        $.ajax({

            type: "GET",
            url: "/user_chat_id",
            data: {
                "_token": "{{ csrf_token() }}",
                "message": message_data,
                "id":chat_id
               

            },
            success: function(res) {
                $("#chat_id").html(res);
            }

        });
    });
});
</script>

