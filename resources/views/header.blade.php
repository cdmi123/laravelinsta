<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="{{ asset('assets/images/favicon.png') }}" rel="icon" type="image/png">

    <!-- Basic Page Needs
        ================================================== -->
    <title>Instagram</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Instello - Sharing Photos platform HTML Template">




    <!-- CSS
        ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/uikit.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
        #main_menu li:nth-child(3) a span:nth-child(3) {
            color: #ffffff !important;
        }
    </style>


</head>

<body>


    <div id="wrapper">

        <div class="sidebar">
            <div
                class="sidebar_header border-b border-gray-200 from-gray-100 to-gray-50 bg-gradient-to-t  uk-visible@logo">
                <a href="#">
                    <img src="{{ asset('assets/images/logo.png') }}">
                    <img src="{{ asset('assets/images/logo-light.png') }}" class="logo_inverse">
                </a>
                <!-- btn night mode -->
                <a href="#" id="night-mode" class="btn-night-mode d-flex justify-center align-items-center fs-4"
                    data-tippy-placement="left" title="Switch to dark mode"><i
                        class="fa-solid fa-circle-half-stroke"></i></a>
            </div>
            <div class="border-b border-gray-20 flex justify-between items-center p-3 pl-5 relative uk-hidden@logo">
                <h3 class="text-xl"> Navigation </h3>
                <span uk-toggle="target: #wrapper ; cls: sidebar-active" style="font-size: 20px;">
                    <i class="fa-solid fa-xmark"></i>
                </span>
            </div>
            <div class="sidebar_inner" data-simplebar>
                <div class="flex flex-col items-center my-6 uk-visible@m">
                    <div
                        class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transition m-0.5 mr-2  w-24 h-24">
                        <img src="{{ asset('register_user/' . session('user_image')) }}"
                            class="bg-gray-200 border-4 border-white rounded-full w-full h-full">
                    </div>
                    <a href="{{ url('profile') }}" class="text-xl font-medium capitalize mt-4 uk-link-reset">
                        {{ Session::get('user_fname') }} {{ Session::get('user_lname') }}</a>
                    <div class="flex justify-around w-full items-center text-center uk-link-reset text-gray-800 mt-6">
                        <div>
                            <a href="#">
                                <strong>Post</strong>
                                <div> {{Session::get('post_count')}} </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <strong>Followers</strong>
                                <div>{{ Session::get('followers_count') }}</div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <strong>Following</strong>
                                <div>{{ Session::get('following_count') }}</div>
                            </a>
                        </div>
                    </div>
                </div>
                <hr class="-mx-4 -mt-1 uk-visible@m">
                <ul id="main_menu">
                    <li class="active">
                        <a href="{{ url('/feed') }}">
                            <i class="fa-solid fa-boxes-stacked"></i>
                            <span> Feed </span> </a>
                    </li>
                    <li>
                        <a href="{{ url('explore') }}">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <span> Explore </span> </a>
                    </li>
                    <li>
                        <a href="{{ url('chat') }}">
                            <i class="fa-solid fa-comment-dots"></i>
                            <span> Messages </span> <span class="nav-tag"> 3</span> </a>
                    </li>
                    <li>
                        <a href="{{ url('trending') }}">
                            <i class="fa-solid fa-fire"></i>
                            <span> Trending </span> </a>
                    </li>
                    <li>
                        <a href="{{ url('market') }}">
                            <i class="fa-solid fa-users"></i>
                            <span> Followers </span> </a>
                    </li>
                    <li>
                        <a href="{{ url('setting') }}">
                            <div style="width: 100%; display: flex; align-items: center;">
                                <i class="fa-solid fa-gear"></i>
                                <span> Settings </span>
                            </div>
                            <i class="fa-solid fa-angle-down" style="font-size: 20px;"></i>
                        </a>
                        <ul>
                            <li><a href="{{ url('setting') }}">General </a></li>
                            <li><a href="{{ url('setting') }}"> Account setting </a></li>
                            <li><a href="{{ url('setting') }}">Billing <span class="nav-tag">3</span> </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('profile') }}">
                            <i class="fa-solid fa-user"></i>
                            <span> My Profile </span> </a>
                    </li>
                    <li>
                        <hr class="my-2">
                    </li>
                    <li>
                        <a href="{{ url('logout') }}">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span> Logout </span> </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main_content">

            <header>
                <div class="header_inner">
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="{{ url('home') }}">
                                <img src="{{ asset('assets/images/logo-mobile.png') }}" alt=""
                                    class=" uk-hidden@logo">
                                <img src="{{ asset('assets/images/logo-mobile-light.png') }}"
                                    class="uk-hidden@logo logo_inverse ">
                            </a>

                        </div>

                        <div class="triger" uk-toggle="target: #wrapper ; cls: sidebar-active">
                            <i class="fa-solid fa-sliders"></i>
                        </div>

                        <div class="header_search">
                            <input type="text" placeholder="Search..">
                            <div class="icon-search">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                        </div>

                    </div>
                    <div class="right-side lg:pr-4">
                        <!-- upload -->
                        <a href="#"
                            class="bg-pink-500 flex font-bold hover:bg-pink-600 hover:text-white inline-block items-center lg:block max-h-10 mr-4 px-4 py-2 rounded shado text-white">
                            <ion-icon name="add-circle"
                                class="-mb-1
                             mr-1 opacity-90 text-xl uilus-circle">
                            </ion-icon> Upload
                        </a>
                        <!-- upload dropdown box -->
                        <div uk-dropdown="pos: bottom-right;mode:click ; animation: uk-animation-slide-bottom-small"
                            class="header_dropdown" style="width: 565px; top: 20px !important;">

                            <!-- notivication header -->
                            <div class="px-4 py-1 -mx-5 -mt-4 mb-5 border-b">
                                <h4>Upload Photo</h4>
                            </div>

                            <!-- notification contents -->
                            <form method="post" enctype="multipart/form-data">
                                @CSRF
                                <div class="flex justify-center flex-center text-center dark:text-gray-300">

                                    <div class="flex flex-col choose-upload text-center w-100">

                                        <div class="bg-gray-100 rounded-4 border-2 border-dashed flex flex-col h-24 items-center justify-center relative w-full rounded-lg dark:bg-gray-800 dark:border-gray-600  overflow-hidden"
                                            style="height: 324px;">
                                            <i class="fa-solid fa-plus" style="font-size: 70px; color:#cfd0d2;"></i>

                                            <img alt="" width="100%" id="chosen-image" class="post_show"
                                                height="100px">

                                        </div>

                                        <div uk-form-custom>
                                            <input type="file" name="post[]" multiple id="upload-button"
                                                value="Choose file" style="top: -322px;height: 320px;">
                                        </div>
                                        <div>
                                            <input type="text" placeholder="Add Description" class="mt-2"
                                                style="background-color: #F3F4F6" name="des">
                                        </div>


                                        <a href="post" class="w-100">
                                            <input type="submit" name="uplode" id="post_uplode" class="mt-3 w-100"
                                                placeholder="POST" value="POST">
                                        </a>


                                    </div>

                                    <script>
                                        let uploadButton = document.getElementById("upload-button");
                                        let chosenImage = document.getElementById("chosen-image");

                                        uploadButton.onchange = () => {

                                            let reader = new FileReader();
                                            reader.readAsDataURL(uploadButton.files[0]);
                                            reader.onload = () => {
                                                chosenImage.setAttribute("src", reader.result);
                                            }

                                        }
                                    </script>


                                </div>
                            </form>

                        </div>

                        <!-- Notification -->
                        <div class="dark_mode">
                            <a href="#" id="night-mode-2"
                                class="btn-night-mode d-flex justify-center align-items-center fs-4"
                                data-tippy-placement="left" title="Switch to dark mode"><i
                                    class="fa-solid fa-circle-half-stroke"></i></a>
                        </div>

                        <a href="#" class="header-links-item">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </a>
                        <div uk-drop="mode: click;offset: 4" class="header_dropdown">
                            <h4
                                class="-mt-5 -mx-5 bg-gradient-to-t from-gray-100 to-gray-50 border-b font-bold px-6 py-3">
                                Notification </h4>
                            <ul class="dropdown_scrollbar" data-simplebar>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img
                                                src="{{ asset('assets/images/avatars/avatar-1.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="drop_content">
                                            <p> <strong>Adrian Mohani</strong> Lorem ipsum dolor cursus
                                                <span class="text-link"> Adipiscing massa convallis </span>
                                            </p>
                                            <span class="time-ago"> 2 hours ago </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img
                                                src="{{ asset('assets/images/avatars/avatar-2.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="drop_content">
                                            <p>
                                                <strong>Stella Johnson</strong> Nonummy nibh euismod
                                                <span class="text-link"> Imperdiet doming </span>
                                            </p>
                                            <span class="time-ago"> 9 hours ago </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img
                                                src="{{ asset('assets/images/avatars/avatar-3.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="drop_content">
                                            <p>
                                                <strong>Alex Dolgove</strong> Lorem ipsum dolor cursus
                                                <span class="text-link"> Adipiscing massa convallis </span>
                                            </p>
                                            <span class="time-ago"> 12 hours ago </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img
                                                src="{{ asset('assets/images/avatars/avatar-1.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="drop_content">
                                            <p>
                                                <strong>Stella Johnson</strong> Nonummy nibh euismod
                                                <span class="text-link"> Imperdiet doming </span>
                                            </p>
                                            <span class="time-ago"> Yesterday </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img
                                                src="{{ asset('assets/images/avatars/avatar-3.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="drop_content">
                                            <p>
                                                <strong>Alex Dolgove</strong> Lorem ipsum dolor cursus
                                                <span class="text-link"> Adipiscing massa convallis </span>
                                            </p>
                                            <span class="time-ago"> 12 hours ago </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="see-all">See all</a>
                        </div>

                        <!-- Messages -->

                        <a href="#" class="header-links-item">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                        </a>
                        <div uk-drop="mode: click;offset: 4" class="header_dropdown">
                            <h4
                                class="-mt-5 -mx-5 bg-gradient-to-t from-gray-100 to-gray-50 border-b font-bold px-6 py-3">
                                Messages </h4>
                            <ul class="dropdown_scrollbar" data-simplebar>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img
                                                src="{{ asset('assets/images/avatars/avatar-1.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> John menathon </strong> <time> 6:43 PM</time>
                                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img
                                                src="{{ asset('assets/images/avatars/avatar-2.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> Zara Ali </strong> <time>12:43 PM</time>
                                            <p> Sediam nonummy nibh euismod tincidunt laoreet dolore </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img
                                                src="{{ asset('assets/images/avatars/avatar-3.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> Mohamed Ali </strong> <time> Wed </time>
                                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img
                                                src="{{ asset('assets/images/avatars/avatar-1.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> John menathon </strong> <time> Sun</time>
                                            <p> Namliber tempor cumsoluta nobis eleifend option adipiscing </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img
                                                src="{{ asset('assets/images/avatars/avatar-2.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> Zara Ali </strong> <time> Fri</time>
                                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img
                                                src="{{ asset('assets/images/avatars/avatar-3.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> Mohamed Ali </strong> <time>1 Week ago</time>
                                            <p> Sediam nonummy nibh euismod tincidunt laoreet dolore </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="see-all">See all</a>
                        </div>

                        <!-- profile -->

                        <a href="#">
                            <img src="{{ asset('register_user/' . session('user_image')) }}" class="header-avatar"
                                alt="">
                        </a>
                        <div uk-drop="mode: click;offset:9" class="header_dropdown profile_dropdown border-t">
                            <ul>
                                <li><a href="#"> Account setting </a> </li>
                                <li><a href="#"> Payments </a> </li>
                                <li><a href="#"> Help </a> </li>
                                <li><a href="form-{{ url('login') }}"> Log Out</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </header>
