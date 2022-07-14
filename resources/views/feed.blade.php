@include('header')


<style>
    #main_menu li:nth-child(1) a span,
    #main_menu li:nth-child(1) a i {
        color: #be185d !important;
    }
</style>

<div class="container m-auto feed">

    <h1 class="lg:text-2xl text-lg font-extrabold leading-none text-gray-900 tracking-tight mb-2"> Feed </h1>

    <div class="lg:flex justify-center lg:space-x-10 lg:space-y-0 space-y-5">

        <!-- left sidebar-->
        <div class="space-y-5 flex-shrink-0 lg:w-7/12" id="postBar">

            <!-- post 1-->
            @foreach ($user_post as $post_row)
                <?php $sql = DB::table('register')
                    ->where('id', $post_row->user_id)
                    ->first(); ?>

                <?php $follow_id = explode(',',$sql->followers);
            
                if(in_array(Session::get('user_id'),$follow_id) || $post_row->user_id == Session::get('user_id')) {  ?>

                <div class="bg-white shadow_bg rounded-md dark:bg-gray-900 -mx-2 lg:mx-0">

                    <!-- post header-->
                    <div class="flex justify-between items-center px-4 py-1 pt-2">
                        <div class="flex flex-1 items-center space-x-4">
                            <a href="#">
                                <div class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-0.5 rounded-full">
                                    <img src="{{ asset('register_user/' . $post_row->image) }}"
                                        class="bg-gray-200 border border-white rounded-full w-10 h-10">
                                </div>
                            </a>
                            <span>
                                <span class="block capitalize font-semibold dark:text-gray-100"
                                    style="line-height: 14px"> {{ $post_row->fname }} {{ $post_row->lname }}</span>
                                <p class="m-0" style="font-size: 14px;">
                                </p>
                            </span>
                        </div>
                        <div>
                            <a href="#"> <i class="fa-solid fa-ellipsis-vertical" style="font-size: 20px;"></i>
                            </a>
                            <div class="w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700 shadow_bg feed_tgl bg-light"
                                uk-drop="mode: hover;pos: top-right">

                                <ul class="space-y-1 p-0">
                                    <li>
                                        <a href="#"
                                            class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md">
                                            <i class="uil-share-alt mr-1"></i> Share
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                            <i class="uil-edit-alt mr-1"></i> Edit Post
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                            <i class="uil-comment-slash mr-1"></i> Disable comments
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                            <i class="uil-favorite mr-1"></i> Add favorites
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="-mx-2 my-2 dark:border-gray-800">
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                            <i class="uil-trash-alt mr-1"></i> Delete
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <?php $img_arry = explode(',', $post_row->post);
                    
                    $cnt = count($img_arry);
                    
                    ?>


                    <?php  if($cnt == 1) { ?>

                    <div uk-lightbox class="post_1">
                        <a href="{{ asset('user_post/' . $img_arry[0]) }}">
                            <img class="w-100" src="{{ asset('user_post/' . $img_arry[0]) }}" alt="">
                        </a>
                    </div>
                    <?php }elseif($cnt == 2)  { ?>

                    <div uk-lightbox class="post_2">
                        <a href="{{ asset('user_post/' . $img_arry[0]) }}">
                            <img src="{{ asset('user_post/' . $img_arry[0]) }}" alt=""
                                class="rounded-md w-full object-cover h-full" style="height: 200px">
                        </a>
                        <a href="{{ asset('user_post/' . $img_arry[1]) }}">
                            <img src="{{ asset('user_post/' . $img_arry[1]) }}" alt=""
                                class="rounded-md w-full object-cover h-full" style="height: 200px">
                        </a>
                    </div>
                    <?php  } elseif($cnt ==3) { ?>
                    <div uk-lightbox class="post_3">
                        <div class="grid grid-cols-2 gap-2 p-2">

                            <a href="{{ asset('user_post/' . $img_arry[0]) }}" class="col-span-2">
                                <img src="{{ asset('user_post/' . $img_arry[0]) }}" alt=""
                                    class="rounded-md w-full lg:h-76 object-cover">
                            </a>
                            <a href="{{ asset('user_post/' . $img_arry[1]) }}">
                                <img src="{{ asset('user_post/' . $img_arry[1]) }}" alt=""
                                    class="rounded-md w-full h-full">
                            </a>
                            <a href="{{ asset('user_post/' . $img_arry[2]) }}" class="relative">
                                <img src="{{ asset('user_post/' . $img_arry[2]) }}" alt=""
                                    class="rounded-md w-full h-full">
                            </a>

                        </div>
                    </div>

                    <?php } else { ?>

                    <div uk-lightbox>
                        <div class="grid grid-cols-2 gap-2 p-2">

                            <a href="{{ asset('user_post/' . $img_arry[0]) }}" class="col-span-2">
                                <img src="{{ asset('user_post/' . $img_arry[0]) }}" alt=""
                                    class="rounded-md w-full lg:h-76 object-cover">
                            </a>
                            <a href="{{ asset('user_post/' . $img_arry[1]) }}">
                                <img src="{{ asset('user_post/' . $img_arry[1]) }}" alt=""
                                    class="rounded-md w-full h-full">
                            </a>
                            <a href="{{ asset('user_post/' . $img_arry[2]) }}" class="relative">
                                <img src="{{ asset('user_post/' . $img_arry[2]) }}" alt=""
                                    class="rounded-md w-full h-full">
                                <div
                                    class="mor15 absolute bg-gray-900 bg-opacity-30 flex justify-center items-center text-white rounded-md inset-0 text-2xl">
                                    +{{ $cnt - 3 }}
                                </div>
                            </a>

                        </div>
                    </div>
                    <?php } ?>






                    <div class="py-3 px-4 space-y-3">

                        <div class="flex space-x-4 lg:font-bold mb-3">
                            <a href="#" class="flex items-center space-x-1">
                                <div class=" rounded-full text-black">
                                    <i class="fa-solid fa-heart fs-4"></i>
                                </div>
                            </a>
                            <a href="#" class="flex items-center space-x-1">
                                <div class="rounded-full text-black">
                                    <i class="fa-solid fa-comment fs-4"></i>
                                </div>
                            </a>
                            <a href="#" class="flex items-center space-x-1">
                                <div class="rounded-full text-black">
                                    <i class="fa-solid fa-paper-plane fs-4"></i>
                                </div>
                            </a>
                            <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                                <i class="fa-solid fa-bookmark fs-4"></i>
                            </a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="flex items-center">
                                <img src="assets/images/avatars/avatar-1.jpg" alt=""
                                    class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                                <img src="assets/images/avatars/avatar-4.jpg" alt=""
                                    class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                    class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                            </div>



                            <div class="dark:text-gray-100">
                                Liked <strong> Johnson</strong> and <strong> {{ $cnt }} Others
                                </strong>
                            </div>
                        </div>

                        <div class="post_dis mt-2">
                            <strong class="text-capitalize">{{ $post_row->fname }} {{ $post_row->lname }} :
                            </strong>
                            <span>{{ $post_row->description }}</span>
                        </div>



                        <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                            <div class="flex">
                                <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                    <img src="assets/images/avatars/avatar-1.jpg" alt=""
                                        class="absolute h-full rounded-full w-full">
                                </div>
                                <div
                                    class="msg_bg text-gray-700 py-2 px-3 rounded-md bg-gray-100 h-full relative lg:ml-5 ml-2 lg:mr-20  dark:bg-gray-800 dark:text-gray-100">
                                    <p class="leading-6">In ut odio libero vulputate <urna class="i uil-heart">
                                        </urna>
                                        <i class="uil-grin-tongue-wink"> </i>
                                    </p>
                                    <div
                                        class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800">
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                    <img src="assets/images/avatars/avatar-1.jpg" alt=""
                                        class="absolute h-full rounded-full w-full">
                                </div>
                                <div
                                    class="msg_bg text-gray-700 py-2 px-3 rounded-md bg-gray-100 h-full relative lg:ml-5 ml-2 lg:mr-20  dark:bg-gray-800 dark:text-gray-100">
                                    <p class="leading-6">Nam liber tempor cum soluta nobis eleifend option <i
                                            class="uil-grin-tongue-wink-alt"></i>
                                    </p>
                                    <div
                                        class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-100 bg-gray-100 rounded-full rounded-md relative dark:bg-gray-800">
                            <input type="text" placeholder="Add your Comment.."
                                class="bg-transparent max-h-10 shadow-none">
                            <div class="absolute bottom-0 flex h-full items-center right-0 right-3 text-xl space-x-2">
                                <a href="#"> <i class="uil-image"></i></a>
                                <a href="#"> <i class="uil-video"></i></a>
                            </div>
                        </div>

                    </div>

                </div>
                <?php  } ?>
            @endforeach



            <!-- Load more-->
            <div class="flex justify-center mt-6 toggle" id="toggle"
                uk-toggle="target: #toggle ;animation: uk-animation-fade">
                <a href="#"
                    class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                    Load more ..</a>
            </div>


            <!-- Load more-->
            <div class="flex justify-center mt-6 toggle" id="toggle" hidden>
                <a href="#"
                    class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                    Load more ..</a>
            </div>


        </div>

        <!-- right sidebar-->
        <div class="lg:w-5/12">

            <div class="bg-white dark:bg-gray-900 shadow-md rounded-md overflow-hidden shadow_bg">

                <div
                    class="bg-gray-50 dark:bg-gray-800 border-b border-gray-100 flex items-baseline justify-between py-3 px-6 dark:border-gray-800">
                    <h2 class="font-semibold text-lg">Who to follow</h2>
                    <a href="#"> Refresh</a>
                </div>

                {{-- ======================== Who To Followers ============================== --}}

                <div class="divide-gray-300 divide-gray-50 divide-opacity-50 divide-y px-4 dark:divide-gray-800 dark:text-gray-100"
                    id="follow_data">


                    @foreach ($user_data as $user_row)
                        <?php $follow_id = explode(',', $user_row->followers); ?>
                        <div class="flex items-center justify-between py-3">
                            <div class="flex flex-1 items-center space-x-4">
                                <a href="profile.html">
                                    <img src="register_user/{{ $user_row->image }}"
                                        class="bg-gray-200 rounded-full w-10 h-10">
                                </a>
                                <div class="flex flex-col">
                                    <span class="block capitalize font-semibold"> {{ $user_row->fname }}
                                        {{ $user_row->lname }} </span>
                                    <span class="block capitalize text-sm"> {{ $user_row->country }} </span>
                                </div>
                            </div>

                            <?php if(in_array(Session::get('user_id'),$follow_id)) { ?>

                            <a href="javascript:void(0)" data-folo="{{ $user_row->id }}"
                                class="font-semibold px-2 py-1 unfolo"style="font-size: 15px;"> Unfollow </a>

                            <?php } else { ?>


                            <a href="javascript:void(0)" data-folo="{{ $user_row->id }}"
                                class="font-semibold px-2 py-1 folo"style="font-size: 15px;"> Follow </a>

                            <?php } ?>
                        </div>
                    @endforeach

                </div>

                {{-- ======================== End Who To Follw ============================== --}}










            </div>

            <div class="mt-5" uk-sticky="offset:28; bottom:true ; media @m">
                <div class="bg-white dark:bg-gray-900 shadow-md rounded-md overflow-hidden shadow_bg">

                    <div
                        class="bg-gray-50 border-b border-gray-100 flex items-baseline justify-between py-4 px-6 dark:bg-gray-800 dark:border-gray-700">
                        <h2 class="font-semibold text-lg">Latest</h2>
                        <a href="explore.html"> See all</a>
                    </div>

                    <div class="grid grid-cols-2 gap-2 p-3 uk-link-reset">

                        <div
                            class="bg-red-500 max-w-full h-32 rounded-lg relative overflow-hidden uk-transition-toggle">
                            <a href="#story-modal" uk-toggle>
                                <img src="assets/images/post/img2.jpg"
                                    class="w-full h-full absolute object-cover inset-0">
                            </a>
                            <div
                                class="flex flex-1 justify-around items-center absolute bottom-0 w-full p-2 text-white custom-overly1 uk-transition-slide-bottom-medium">
                                <a href="#"> <i class="uil-heart"></i> 150 </a>
                                <a href="#"> <i class="uil-heart"></i> 30 </a>
                            </div>
                        </div>

                        <div
                            class="bg-red-500 max-w-full h-40 rounded-lg relative overflow-hidden uk-transition-toggle">
                            <a href="#story-modal" uk-toggle>
                                <img src="assets/images/post/img7.jpg"
                                    class="w-full h-full absolute object-cover inset-0">
                            </a>
                            <div
                                class="flex flex-1 justify-around items-center absolute bottom-0 w-full p-2 text-white custom-overly1 uk-transition-slide-bottom-medium">
                                <a href="#"> <i class="uil-heart"></i> 150 </a>
                                <a href="#"> <i class="uil-heart"></i> 30 </a>
                            </div>
                        </div>

                        <div
                            class="bg-red-500 max-w-full h-40 -mt-8 rounded-lg relative overflow-hidden uk-transition-toggle">
                            <a href="#story-modal" uk-toggle>
                                <img src="assets/images/post/img5.jpg"
                                    class="w-full h-full absolute object-cover inset-0">
                            </a>
                            <div
                                class="flex flex-1 justify-around  items-center absolute bottom-0 w-full p-2 text-white custom-overly1 uk-transition-slide-bottom-medium">
                                <a href="#"> <i class="uil-heart"></i> 150 </a>
                                <a href="#"> <i class="uil-heart"></i> 30 </a>
                            </div>
                        </div>

                        <div
                            class="bg-red-500 max-w-full h-32 rounded-lg relative overflow-hidden uk-transition-toggle">
                            <a href="#story-modal" uk-toggle>
                                <img src="assets/images/post/img3.jpg"
                                    class="w-full h-full absolute object-cover inset-0">
                            </a>
                            <div
                                class="flex flex-1 justify-around  items-center absolute bottom-0 w-full p-2 text-white custom-overly1 uk-transition-slide-bottom-medium">
                                <a href="#"> <i class="uil-heart"></i> 150 </a>
                                <a href="#"> <i class="uil-heart"></i> 30 </a>
                            </div>
                        </div>

                    </div>

                </div>
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


        var nightMode = document.querySelector('#night-mode-2');
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
    $('.folo').click(function() {


        var folo_id = $(this).attr('data-folo');


        $.ajax({


            type: "get",
            url: "/folo",
            data: {

                "_token": "{{ csrf_token() }}",
                "id": folo_id

            },
            success: function(res) {
                $('#follow_data').html(res);
            }


        });


    });

    $('.unfolo').click(function() {


        var folo_id = $(this).attr('data-folo');



        $.ajax({


            type: "post",
            url: "/unfolo",
            data: {

                "_token": "{{ csrf_token() }}",
                "id": folo_id

            },
            success: function(res) {
                $('#follow_data').html(res);
            }


        });


    });
</script>
