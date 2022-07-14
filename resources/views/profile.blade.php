@include('header')

<style>
    #main_menu li:nth-child(7) a span,
    #main_menu li:nth-child(7) a i {
        color: #be185d !important;
    }
</style>


<div class="container pro-container m-auto">

    <!-- profile-cover-->
    <div class="flex lg:flex-row flex-col items-center lg:py-8 lg:space-x-8">

        <div>
            <div
                class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full m-0.5 mr-2  w-56 h-56 relative overflow-hidden uk-transition-toggle">
                <img src="{{ asset('register_user/' . session('user_image')) }}"
                    class="bg-gray-200 border-4 border-white rounded-full w-full h-full dark:border-gray-900">

                <div
                    class="absolute -bottom-3 custom-overly1 flex justify-center pt-4 pb-7 space-x-3 text-2xl text-white uk-transition-slide-bottom-medium w-full">
                    <a href="#" class="hover:text-white">
                        <i class="uil-camera"></i>
                    </a>
                    <a href="#" class="hover:text-white">
                        <i class="uil-crop-alt"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="lg:w/8/12 flex-1 flex flex-col lg:items-start items-center">

            <h2 class="font-semibold lg:text-2xl text-lg mb-2 text-capitalize">{{ Session::get('user_fname') }}
                {{ Session::get('user_lname') }}</h2>
            <p class="text-lg-start mb-2 text-center  dark:text-gray-100"> Nam liber tempor cum soluta nobis eleifend
                option congue nihil imperdiet doming id quod mazim placerat facer possim assum</p>

            <div class="flex font-semibold mb-3 space-x-2  dark:text-gray-10">
                <a href="#">Travailing</a> , <a href="#">Sports</a> , <a href="#">Movies</a>
            </div>


            <div class="capitalize flex font-semibold space-x-3 text-center text-sm my-2">
                <a href="#" class="bg-gray-300 shadow-sm p-2 px-6 rounded-md dark:bg-gray-700"> Add friend</a>
                <a href="#"
                    class="bg-pink-500 shadow-sm p-2 pink-500 px-6 rounded-md text-white hover:text-white hover:bg-pink-600">
                    Edit Profile</a>
                <div>

                    <a href="#"
                        class="bg-gray-300 flex h-12 h-full items-center justify-center rounded-full text-xl w-9 dark:bg-gray-700">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </a>

                    <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base dark:bg-gray-900"
                        uk-drop="mode: click">

                        <ul class="space-y-1">
                            <li>
                                <a href="#"
                                    class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-700">
                                    <i class="uil-user-minus mr-2"></i>Unfriend
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-700">
                                    <i class="uil-eye-slash  mr-2"></i>Hide Your Story
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-700">
                                    <i class="uil-share-alt mr-2"></i> Share This Profile
                                </a>
                            </li>
                            <li>
                                <hr class="-mx-2 my-2  dark:border-gray-700">
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                    <i class="uil-stop-circle mr-2"></i> Block
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>

            </div>

            <div
                class=" justify-content-between d-flex lg:text-center lg:text-lg mt-3 text-center w-full dark:text-gray-100">
                <div class="flex lg:flex-row flex-col text-center ps-4"> {{ session('post_count') }} <strong
                        class="lg:pl-2">Posts</strong>
                </div>
                <div class="lg:pl-4 flex lg:flex-row flex-col text-center ps-4"> {{ Session::get('followers_count') }}
                    <strong class="lg:pl-2">Followers</strong>
                </div>
                <div class="lg:pl-4 flex lg:flex-row flex-col text-center ps-4"> {{ Session::get('following_count') }}
                    <strong class="lg:pl-2">Following</strong>
                </div>
            </div>

            {{-- <div class="edit_opation border border-2 w-100 mt-4 justify-content-center d-flex align-items-center">
        <a>Edit</a>
      </div> --}}


        </div>

        <div class="w-20"></div>

    </div>

    {{-- <h1 class="lg:text-2xl text-lg font-extrabold leading-none text-gray-900 tracking-tight mt-8"> Highths </h1>

  <div class="my-6 grid lg:grid-cols-5 grid-cols-3 gap-2 hover:text-yellow-700 uk-link-reset">
    <a href="#">
      <div class="border-4 border-dashed flex flex-col h-full items-center justify-center relative rounded-2xl w-full">
        <i class="text-4xl uil-plus-circle"></i> <span> Add new </span>
      </div>
    </a>
    <a href="#story-modal" uk-toggle>
      <img src="assets/images/avatars/avatar-lg-1.jpg" alt="" class="w-full lg:h-60 h-40 rounded-md object-cover">
    </a>
    <a href="#story-modal" uk-toggle>
      <img src="assets/images/post/img2.jpg" alt="" class="w-full lg:h-60 h-40 rounded-md object-cover">
    </a>
    <a href="#story-modal" uk-toggle>
      <img src="assets/images/post/img7.jpg" alt="" class="w-full lg:h-60 h-40 rounded-md object-cover uk-visible@s">
    </a>
  </div> --}}

    <div class="flex items-center justify-between mt-8 space-x-3">
        <h1 class="flex-1 font-extrabold leading-none lg:text-2xl text-lg text-gray-900 tracking-tight uk-heading-line">
            <span>Profile</span>
        </h1>
        <div
            class="bg-white border border-2 border-gray-300 divide-gray-300 divide-x flex rounded-md shadow-sm dark:bg-gray-100">
            <a href="#" class="bg-gray300 flex h-10 items-center justify-center  w-10" data-tippy-placement="top"
                title="Grid view"> <i class="uil-apps"></i></a>
            <a href="#" class="flex h-10 items-center justify-center w-10" data-tippy-placement="top"
                title="List view"> <i class="uil-list-ul"></i></a>
        </div>
    </div>

    {{-- ============= Profile Images ========================= --}}

    {{-- <div class="my-6 grid lg:grid-cols-4 grid-cols-2 gap-1.5 hover:text-yellow-700 uk-link-reset">
        @foreach ($profile_post as $profile_img => $value)
            <?php
            $profile = explode(',', $value->post);
            ?>

            @foreach ($profile as $single_image)
                <div class="bg-red-500 max-w-full lg:h-64 h-40 rounded-md relative overflow-hidden uk-transition-toggle"
                    tabindex="0">
                    <img src="{{ asset('user_post/' . $single_image) }}"
                        class="w-full h-full absolute object-cover inset-0">
                    <div
                        class="absolute bg-black bg-opacity-40 bottom-0 flex h-full items-center justify-center space-x-5 text-lg text-white uk-transition-scale-up w-full bg_post">
                        <a href="#story-modal" uk-toggle class="flex items-center">
                            <ion-icon name="heart" class="mr-1"></ion-icon> 1
                        </a>
                        <a href="#story-modal" uk-toggle class="flex items-center">
                            <ion-icon name="chatbubble-ellipses" class="mr-1"></ion-icon> 30
                        </a>
                        <a href="#story-modal" uk-toggle class="flex items-center">
                            <ion-icon name="pricetags" class="mr-1"></ion-icon> 12
                        </a>
                    </div>
                </div>
            @endforeach
        @endforeach


    </div> --}}

    {{-- ======== Web Post ========= --}}

    <div class="pro_post d-lg-block d-none">
        <div class="row">
            @foreach ($profile_post as $profile_img => $value)
                <?php $profile = explode(',', $value->post);
                
                $profile = explode(',', $value->post);
                ?>
                <div class="col-lg-4 col-md-6 position-relative proc">
                    <div uk-lightbox class="owl-carousel owl-theme profile position-relative" id="profile">
                        @foreach ($profile as $single_image)
                            <div class="item">
                                <a href="{{ asset('user_post/' . $single_image) }}">
                                    <img class="w-100" src="{{ asset('user_post/' . $single_image) }}"
                                        alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="pro_nav d-flex justify-content-between px-5 mt-3">
                        <i class="fa-solid fa-heart fs-5"></i>
                        <i class="fa-solid fa-comment fs-5"></i>
                        <i class="fa-solid fa-paper-plane fs-5"></i>
                        <i class="fa-solid fa-bookmark fs-5"></i>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- ========== Mobile Post =============== --}}

    <div class="lg:flex justify-center lg:space-x-10 lg:space-y-0 space-y-5 d-lg-none d-block">

        <div class="row">
            <div class="col-md-9 m-auto">
                <div class="space-y-5 flex-shrink-0 lg:w-7/12" id="postBar">


                    @foreach ($profile_post as $post_row)
                        <div class="bg-white shadow_bg rounded-md dark:bg-gray-900 -mx-2 lg:mx-0">

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
                                            style="line-height: 14px"> {{ $post_row->fname }}
                                            {{ $post_row->lname }}</span>
                                        <p class="m-0" style="font-size: 14px;">
                                        </p>
                                    </span>
                                </div>
                                <div>
                                    <a href="#"> <i class="fa-solid fa-ellipsis-vertical"
                                            style="font-size: 20px;"></i>
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
                            <?php $img_arry = explode(',', $post_row->post); ?>

                            <div uk-lightbox class="owl-carousel owl-theme profile_mob" id="profile_mob">
                                @foreach ($img_arry as $img_row)
                                    <div class="item">
                                        <a href="{{ asset('user_post/' . $img_row) }}">
                                            <img class="w-100" src="{{ asset('user_post/' . $img_row) }}"
                                                alt="">
                                        </a>
                                    </div>
                                @endforeach
                            </div>


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
                                        Liked <strong> Johnson</strong> and <strong> 2 Others
                                        </strong>
                                    </div>
                                </div>

                                <div class="post_dis mt-2">
                                    <strong class="text-capitalize">{{ $post_row->fname }} {{ $post_row->lname }}
                                        :
                                    </strong>
                                    <span>{{ $post_row->description }}</span>
                                </div>




                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>

    </div>

    {{-- ===================== --}}

    <div class="flex justify-center mt-6 toggle" id="toggle">
        <a href="#"
            class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
            Load more ..</a>
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
