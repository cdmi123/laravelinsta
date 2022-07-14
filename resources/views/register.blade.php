<!DOCTYPE html>
<html lang="en">

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

    <!-- icons
        ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">

    <!-- CSS
        ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/css/uikit.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
        .mf {
            position: absolute;
            top: 13px;
            left: 21px;
        }

        .mobil {
            position: relative;
        }

        .input_self {
            background-color: transparent;
            border: none;
            border-bottom: 1px solid;
            width: 100%;
            text-transform: capitalize;
        }

        input:focus,
        select:focus {
            outline: none;
        }

        .input_head {
            position: relative;
        }

        .in_img {
            position: relative;
            height: 84px;
            width: 84px;
            border-radius: 50%;
        }

        .in_img_2 {
            height: 80px;
            width: 80px;
            border: 2px solid #be185d;
            border-radius: 50%;
            position: relative;
            overflow: hidden;

        }

        .image_file {
            cursor: pointer;
            position: absolute;
            top: 30px;
            left: 0px;
            height: 25px;
            transform: scale(4);
            opacity: 0;
        }

        #img {
            position: absolute;
            top: 0%;
            left: 0%;
            z-index: 0;
        }

        .ch_img {
            position: relative;
            z-index: 111;
        }

        .plus_icon {
            color: #be185d;
            position: absolute;
            bottom: 0px;
            right: 20px;
            background-color: #fff;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 11111;
        }


        .gen {
            display: flex;
            justify-content: space-between;

        }

        .rj_label {
            margin: 10px 10px 10px 12px;
        }

        .rj_gender {
            border: 1px solid #d3d5d8 !important;
            margin-right: 15px;
        }
    </style>

</head>

<body class="bg-gray-100">


    <div id="wrapper" class="flex flex-col justify-between h-screen">

        <!-- header-->
        <div class="bg-white py-4 shadow dark:bg-gray-800">
            <div class="max-w-6xl mx-auto">


                <div class="flex items-center lg:justify-between justify-around">

                    <a href="trending.html">
                        <img src="assets/images/logo.png" alt="" class="w-32">
                    </a>

                    <div class="capitalize flex font-semibold hidden lg:block my-2 space-x-3 text-center text-sm">
                        <a href="{{ url('/') }}" class="py-3 px-4">Login</a>
                        <a href="{{ url('/register') }}"
                            class="bg-pink-500 pink-500 px-6 py-3 rounded-md shadow text-white"
                            style="color: #fff !important;">Register</a>
                    </div>

                </div>
            </div>
        </div>

        <!-- Content-->

        <div>
            <div class="lg:p-12 max-w-md max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
                <h1 class="lg:text-3xl text-xl font-semibold mb-6 text-center"> Sign in</h1>
                <form method="POST" enctype="multipart/form-data">
                    @CSRF
                    <div class="row">
                        <div class="col-12 m-auto mt-4 mb-4 input_head">
                            <!-- <label for="image">Image File</label> -->
                            <div class="in_img m-auto">
                                <div class="plus_icon">
                                    <i class="fa-solid fa-circle-plus"></i>
                                </div>
                                <div class="in_img_2">
                                    <img alt="" width="100%" id="chosen-image" class="ch_img"
                                        style="object-fit: cover;height: 100%;">
                                    <img src="{{ asset('assets/images/no_user.webp') }}" alt="" width="100% " id="img">
                                    <input type="file" class="image_file" id="upload-button" name="image"
                                        style="z-index: 111;">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="flex lg:flex-row flex-col lg:space-x-2">
                        <input type="text" placeholder="First Name" name="fname"
                            class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800"
                            style="border: 1px solid #d3d5d8 !important;">
                        <input type="text" placeholder="Last Name" name="lname"
                            class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800"
                            style="border: 1px solid #d3d5d8 !important;">
                    </div>

                    <input type="text" placeholder="Email" name="email"
                        class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800"
                        style="border: 1px solid #d3d5d8 !important;">

                    <div class="flex lg:flex-row flex-col lg:space-x-2">
                        <div class="mobil">
                            <input type="text" placeholder="Mobile No." name="mobile"
                                class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800"
                                style="padding-left: 60px;border: 1px solid #d3d5d8 !important;" maxlength="10"
                                minlength="10">
                            <div class="mf">
                                +91 |
                            </div>
                        </div>

                        <div class="gen">
                            <label for="male" class="rj_label">Male</label>
                            <input type="radio" id="male" name="gender" value="male"
                                class="rj_gender bg-gray-200 mb-2 ms-5 shadow-none  dark:bg-gray-800 mt-3">
                            <label for="female" class="rj_label">Female</label>
                            <input type="radio" id="female" value="female" name="gender"
                                class="rj_gender bg-gray-200 mb-2 shadow-none  dark:bg-gray-800 mt-3">
                        </div>
                    </div>

                    <input type="text" placeholder="Password" name="pass"
                        class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800"
                        style="border: 1px solid #d3d5d8 !important;">

                    <input type="text" placeholder="Confirm Password" name="cpass"
                        class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800"
                        style="border: 1px solid #d3d5d8 !important;">

                    <input type="text" placeholder="Country" name="country"
                        class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800"
                        style="border: 1px solid #d3d5d8 !important;">

                    <div class="flex lg:flex-row flex-col lg:space-x-2">
                        <input type="text" placeholder="State" name="state"
                            class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800"
                            style="border: 1px solid #d3d5d8 !important;">
                        <input type="text" placeholder="City" name="city"
                            class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800"
                            style="border: 1px solid #d3d5d8 !important;">
                    </div>

                    <div class="flex justify-start my-4 space-x-1">
                        <div class="checkbox">
                            <input type="checkbox" id="chekcbox1" checked>
                            <label for="chekcbox1"><span class="checkbox-icon"></span> I Agree</label>
                        </div>
                        <a href="#"> Terms and Conditions</a>
                    </div>
                    <input type="submit" name="save" class="bg-gradient-to-br from-pink-500 py-1 rounded-md text-white text-xl to-red-400 w-full w-100 fs-5"
                        value="Signup">
                    <div class="text-center mt-5 space-x-2">
                        <p class="text-base"> Do you have an account? <a href="{{ url('/') }}"> Login </a></p>
                    </div>
                </form>
            </div>
        </div>

        <!-- Footer -->

        <div class="lg:mb-5 py-3 uk-link-reset">
            <div
                class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
                <div class="flex space-x-2 text-gray-700 uppercase">
                    <a href="#"> About</a>
                    <a href="#"> Help</a>
                    <a href="#"> Terms</a>
                    <a href="#"> Privacy</a>
                </div>
                <p class="capitalize"> © copyright 2020 by Instello</p>
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

    @include('footer')
