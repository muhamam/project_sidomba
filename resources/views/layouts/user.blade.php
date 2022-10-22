<!-- 
    LAST EDIT : RlynnchX007 
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content='width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5'
        name='viewport' />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="../img/domba.png">
    <title>Si-Domba</title>

    <!-- KHUSUS CSS -->
    <link rel="stylesheet" href="{{ asset('css/sidebar.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> TIDAK DIPANGGIL -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/akun-user.css')}}"> TIDAK DIPANGGIL -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!--------------------------------------------------------------------------------------------------------->

    <!-- KHUSUS JAVASCRIPT -->
    <script src="{{asset('js/main.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <!---------------------------------------------------------------------------------------------------------->

    <!-- HALAMAN BODY -->

    <!--[ <body> open ]-->

<body class='onIndex onHome' id='mainContent'>


    <!--[ Active function ]-->
    <input class='profInput hidden' id='offprofile-box' type='checkbox' />
    <input class='navInput hidden' id='offnav-input' type='checkbox' />
    <div class='mainWrapper'>

        <!--[ Header section ]-->
        <header class='header ' id='header'>
            <!--[ Header Notification ]-->
            <div class='no-items section' id='header-notif'>
            </div>
            <!--[ Header content ]-->@auth

            <div class='headerContent'>
                <div class='headerDiv headerLeft'>
                    <!--[ Header button and icon ]-->
                    <div class='headerIcon'>
                        <a href="{{ route('home') }}"><img alt='CARIBI' src="{{ asset('img/logodombaputih.png')}}"
                                title='CARIBI' alt="" width="50" />
                    </div>
                    <!--[ Header widget ]-->
                    <div class='section' id='header-widget'>
                        <div class='widget Header' data-version='2' id='Header1'>
                            <b>CARIBI</b></a>
                        </div>

                    </div>
                </div>

                <div class='headerDiv headerRight'>

                    <!--[ Header Search ]-->
                    <div class='headerSearch' style="background-color: white;">
                        <!--[ Search Form ]-->
                        <form class="input-group input-group-md">
                            <input aria-label='Search' autocomplete='off' id='searchInput' name='q'
                                placeholder='Search...' type='text' />
                            <button aria-label='Search button' class='searchButton' type='submit'>
                                <svg class='linem' viewBox='0 0 24 24'>
                                    <g transform='translate(2.000000, 2.000000)'>
                                        <circle class='fill' cx='9.76659044' cy='9.76659044' r='8.9885584'></circle>
                                        <line x1='16.0183067' x2='19.5423342' y1='16.4851259' y2='20.0000001'></line>
                                    </g>
                                </svg>
                            </button>

                            <button aria-label='Search close' class='close' type='reset'>
                                <!--[ Close icon ]-->
                                <svg class='line' viewBox='0 0 24 24'>
                                    <line x1='18' x2='6' y1='6' y2='18'></line>
                                    <line x1='6' x2='18' y1='6' y2='18'></line>
                                </svg>
                            </button>
                            <span class='fullClose search'></span>
                        </form>
                    </div>
                    <!--[ Dark mode button ]-->
                    <span aria-label='Dark' class='navDark' data-text='Dark' onclick='darkMode()' role='button'>
                        <svg class='linem icho' viewBox='0 0 24 24'>
                            <g class='d2'>
                                <path
                                    d='M183.72453,170.371a10.4306,10.4306,0,0,1-.8987,3.793,11.19849,11.19849,0,0,1-5.73738,5.72881,10.43255,10.43255,0,0,1-3.77582.89138,1.99388,1.99388,0,0,0-1.52447,3.18176,10.82936,10.82936,0,1,0,15.118-15.11819A1.99364,1.99364,0,0,0,183.72453,170.371Z'
                                    transform='translate(-169.3959 -166.45548)'></path>
                            </g>
                            <g class='d1'>
                                <path class='fill'
                                    d='M12 18.5C15.5899 18.5 18.5 15.5899 18.5 12C18.5 8.41015 15.5899 5.5 12 5.5C8.41015 5.5 5.5 8.41015 5.5 12C5.5 15.5899 8.41015 18.5 12 18.5Z'>
                                </path>
                                <path
                                    d='M19.14 19.14L19.01 19.01M19.01 4.99L19.14 4.86L19.01 4.99ZM4.86 19.14L4.99 19.01L4.86 19.14ZM12 2.08V2V2.08ZM12 22V21.92V22ZM2.08 12H2H2.08ZM22 12H21.92H22ZM4.99 4.99L4.86 4.86L4.99 4.99Z'
                                    stroke-width='2'></path>
                            </g>
                        </svg>
                    </span>
                    <!--[ Fullscreen ]-->
                    <span class='noscript'><button aria-label='Mode Fullscreen' id='openfull'
                            onclick='openFullscreen();' style='display: block;'><svg viewBox='0 0 24 24'>
                                <path
                                    d='M5,5H10V7H7V10H5V5M14,5H19V10H17V7H14V5M17,14H19V19H14V17H17V14M10,17V19H5V14H7V17H10Z'>
                                </path>
                            </svg></button>
                        <button aria-label='Mode Tidak Fullscreen' id='exitfull' onclick='closeFullscreen();'
                            style='display: none;'><svg viewBox='0 0 24 24'>
                                <path
                                    d='M14,14H19V16H16V19H14V14M5,14H10V19H8V16H5V14M8,5H10V10H5V8H8V5M19,8V10H14V5H16V8H19Z'>
                                </path>

                            </svg></button></span> <small>ini kemanain ?</small>

                    <!--[ Header button and icon ]-->
                    <div class='headerIcon'>

                        <!-- MENU ICON -->
                        <a href="javascript:void(0);" class="proses"><span class="iconify"
                                data-icon="carbon:notification" data-width="22" data-height="25"></span>
                        </a>
                        <a href="{{route('chat.index')}}" class=""><span class="iconify" data-icon="ep:chat-round"
                                data-width="22" data-height="25"></span>
                        </a>
                        <a href="{{route('keranjang.index')}}" class="proses3"><span class="iconify" data-icon="cil:cart"
                                data-width="22" data-height="25"></span>
                        </a>
                        <a href="javascript:void(0);" class="ms-2 me-2"><span class="iconify" data-icon="ci:line-xl"
                                data-width="22" data-height="25"></span>
                        </a>
                        <a class="peternakan mt-2 ms-2 me-2" href="javascript:void(0);"><i class="iconify d-inline mb-1"
                                data-icon="maki:farm" data-width="20" data-height="20"></i>
                            &nbsp;Peternakan</a>
                        <a class="investasi mt-2 ms-2 me-2" href="javascript:void(0);"><i class="iconify d-inline mb-1"
                                data-icon="fluent-emoji-high-contrast:money-bag" data-width="20" data-height="20"></i>
                            &nbsp;Investasi</a>
                        <label href="javascript:void(0);" aria-label='profile' class='navProfile mt-3 ms-2 me-2'
                            for='offprofile-box' type="button">
                            <img src="{{ Auth::user()->avatar === null ? asset('img/boy.png') : asset(Auth::user()->avatar) }}"
                                {{-- need redesign system --}} alt="" style="width: 20px; height: 20px; "
                                class="rounded-circle d-inline mb-1 ms-2 me-2">
                            &nbsp;{{ Auth::user()->fullname}}</label>
                        <!------------------------------------------------------------------------------------------------->

                        <!--[ Profile widget ]-->

                        <div class='headerProfile' style="color: #000;">
                            <div class='section' id='profile-widget'>
                                <div class='widget Profile' data-version='2' id='Profile00'>
                                    <div class='profileHeader'>
                                        <label data-text='Kembali' for='offprofile-box'>
                                            <svg class='line' viewBox='0 0 24 24'>
                                                <g
                                                    transform='translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) translate(5.000000, 8.500000)'>
                                                    <path d='M14,0 C14,0 9.856,7 7,7 C4.145,7 0,0 0,0'></path>
                                                </g>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class='widget-content solo hasLocation'>
                                        <div class='profileImage' style='margin-bottom:1px'>
                                            <div class='profileImg lazyloaded'>
                                                <img src="
                            {{ Auth::user()->avatar === null ? asset('img/boy.png') : asset(Auth::user()->avatar) }}"
                                                    {{-- need redesign system --}} alt=""
                                                    style="width: 50px; height: 50px; " class="rounded-circle d-inline">
                                            </div>

                                        </div>
                                        <div class='profileInfo'>
                                            <h6>{{ Auth::user()->fullname}}</h6>
                                            <div class='profileLink' style='margin-bottom:5px;font-family:sans-serif'>
                                                Member</div>
                                            <div class='profileText'><b>Username :</b>
                                                {{ Auth::user()->fullname}}<br />
                                                <b>Email :</b>
                                                {{ Auth::user()->email}}
                                            </div>

                                        </div>
                                        <ul class='socialLink' style='display:flex;'>
                                            <li>
                                                <a href="#" class="text-dark"><span class="iconify me-2"
                                                        data-icon="icons8:buy" data-width="25" data-height="25"></span>
                                                    Pembelian</a>
                                            </li>
                                            <li>
                                                <a href="{{route('wishlist.index')}}" class="text-dark"><span class="iconify me-2"
                                                        data-icon="ant-design:star-outlined" data-width="25"
                                                        data-height="25"></span>
                                                    Wishlist</a>
                                            </li>
                                            <li>
                                                <a href=" {{route('account.index')}}" class="text-dark"><span
                                                        class="iconify me-2" data-icon="ic:outline-switch-account"
                                                        data-width="25" data-height="25" data-flip="horizontal"></span>
                                                    Akun</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout') }}" class="text-dark"><span
                                                        class="iconify me-2" data-icon="ant-design:logout-outlined"
                                                        data-width="25" data-height="25"></span>
                                                    Keluar</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class='widget LinkList' data-version='2' id='LinkList001'>

                                </div>
                            </div>
                        </div>
                        <label class='fullClose closeProfile' for='offprofile-box'></label>
                    </div>
                </div>
            </div>
        </header>
        <!--[ Mobile Menu ]-->
        <div class='notranslate section' id='mobile-menu'>
            <div class='widget LinkList' data-version='2' id='LinkList003'>
                <ul class='mobileMenu mHome'>
                    <li>
                        <a aria-label='Home' role='button' style='color:#48525c'>
                            <svg class='line' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'>
                                <g>
                                    <line class='svg-c' x1='14.71978' x2='9.28022' y1='15.00368' y2='15.00368'></line>
                                    <path
                                        d='M100.28571,274.70685h-10a5,5,0,0,1-5-5v-5.00916a5,5,0,0,1,1.601-3.667l5.6798-5.2648a4,4,0,0,1,5.43845,0l5.67981,5.2648a5,5,0,0,1,1.601,3.667v5.00916A5,5,0,0,1,100.28571,274.70685Z'
                                        transform='translate(-83.28571 -252.70317)'></path>
                                </g>
                            </svg>
                            <span class='mobiletext'>Home</span>
                        </a>
                    </li>
                    <li class='mSearch'>
                        <label for='searchInput'>
                            <svg class='linem' viewBox='0 0 24 24'>
                                <g transform='translate(2.000000, 2.000000)'>
                                    <circle class='fill' cx='9.76659044' cy='9.76659044' r='8.9885584'></circle>
                                    <line x1='16.0183067' x2='19.5423342' y1='16.4851259' y2='20.0000001'></line>
                                </g>
                            </svg>
                            <span class='mobiletext'>Search</span></label>
                    </li>

                    <li class='mDark'>
                        <div onclick='darkMode()'>
                            <svg class='linem icho' viewBox='0 0 24 24'>
                                <g class='d2'>
                                    <path
                                        d='M183.72453,170.371a10.4306,10.4306,0,0,1-.8987,3.793,11.19849,11.19849,0,0,1-5.73738,5.72881,10.43255,10.43255,0,0,1-3.77582.89138,1.99388,1.99388,0,0,0-1.52447,3.18176,10.82936,10.82936,0,1,0,15.118-15.11819A1.99364,1.99364,0,0,0,183.72453,170.371Z'
                                        transform='translate(-169.3959 -166.45548)'></path>
                                </g>
                                <g class='d1'>
                                    <path class='fill'
                                        d='M12 18.5C15.5899 18.5 18.5 15.5899 18.5 12C18.5 8.41015 15.5899 5.5 12 5.5C8.41015 5.5 5.5 8.41015 5.5 12C5.5 15.5899 8.41015 18.5 12 18.5Z'>
                                    </path>
                                    <path
                                        d='M19.14 19.14L19.01 19.01M19.01 4.99L19.14 4.86L19.01 4.99ZM4.86 19.14L4.99 19.01L4.86 19.14ZM12 2.08V2V2.08ZM12 22V21.92V22ZM2.08 12H2H2.08ZM22 12H21.92H22ZM4.99 4.99L4.86 4.86L4.99 4.99Z'
                                        stroke-width='2'></path>
                                </g>
                            </svg>
                            <span class='mobiletext' data-text='Dark' data-text1='Light'></span>
                        </div>
                    </li>
                    <li class='mTop'>
                        <div onclick='window.scrollTo({top: 0});'>
                            <svg class='linem' viewBox='0 0 24 24'>
                                <g transform='translate(2.500000, 3.000000)'>
                                    <path class='fill'
                                        d='M9.5,18 C3.00557739,18 0.456662548,17.5386801 0.0435259337,15.2033146 C-0.36961068,12.8679491 2.27382642,8.47741935 3.08841712,7.02846996 C5.81256986,2.18407813 7.66371927,0 9.5,0 C11.3362807,0 13.1874301,2.18407813 15.9115829,7.02846996 C16.7261736,8.47741935 19.3696107,12.8679491 18.9564741,15.2033146 C18.5443995,17.5386801 15.9944226,18 9.5,18 Z'>
                                    </path>
                                </g>
                            </svg>
                            <span class='mobiletext'>Top</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        @else

        <!-- JIKA TIDAK LOGIN TAMPIL INI -->

        <!--[ Active function TIDAK LOGIN ]-->

        <div class='mainWrapper'>

            <!--[ Header section TIDAK LOGIN ]-->

            <!--[ Header Notification TIDAK LOGIN ]-->
            <div class='no-items section' id='header-notif'>
            </div>
            <!--[ Header content TIDAK LOGIN ]-->

            <div class='headerContent'>
                <div class='headerDiv headerLeft'>
                    <!--[ Header button and icon TIDAK LOGIN ]-->
                    <div class='headerIcon'>
                        <a href="{{ route('home') }}"><img class="hide" alt='CARIBI'
                                src="{{ asset('img/logodombaputih.png')}}" title='CARIBI' alt="" width="50" />
                    </div>
                    <!--[ Header widget TIDAK LOGIN ]-->
                    <div class='section' id='header-widget'>
                        <div class='widget Header' data-version='2' id='Header1'>
                            <b>CARIBI</b></a>
                        </div>

                    </div>
                </div>

                <div class='headerDiv headerRight'>

                    <!--[ Header Search TIDAK LOGIN ]-->
                    <div class='headerSearch' style="background-color: white;">
                        <!--[ Search Form TIDAK LOGIN ]-->
                        <form class="input-group input-group-md">
                            <input aria-label='Search' autocomplete='off' id='searchInput' name='q'
                                placeholder='Search...' type='text' />
                            <button aria-label='Search button' class='searchButton' type='submit'>
                                <svg class='linem' viewBox='0 0 24 24'>
                                    <g transform='translate(2.000000, 2.000000)'>
                                        <circle class='fill' cx='9.76659044' cy='9.76659044' r='8.9885584'>
                                        </circle>
                                        <line x1='16.0183067' x2='19.5423342' y1='16.4851259' y2='20.0000001'>
                                        </line>
                                    </g>
                                </svg>
                            </button>

                            <button aria-label='Search close' class='close' type='reset'>
                                <!--[ Close icon TIDAK LOGIN ]-->
                                <svg class='line' viewBox='0 0 24 24'>
                                    <line x1='18' x2='6' y1='6' y2='18'></line>
                                    <line x1='6' x2='18' y1='6' y2='18'></line>
                                </svg>
                            </button>
                            <span class='fullClose search'></span>
                        </form>
                    </div>



                    <!--[ Header button and icon TIDAK LOGIN]-->
                    <div class='headerIcon'>
                        <!-- MENU ICON TIDAK LOGIN -->
                        <a href="{{ route('register') }}">
                            <i class="iconify mb-1" data-icon="line-md:account-add" data-width="25"
                                data-height="25"></i>
                            Daftar</span>
                        </a>
                        <i class="iconify" data-icon="ci:line-xl" data-width="25" data-height="25"></i>
                        <a href="{{ route('login') }}">
                            <i class="iconify" data-icon="mdi:account-arrow-right-outline" data-width="25"
                                data-height="25"></i>
                            Masuk</span>
                        </a>
                        <!------------------------------------------------------------------------------------------------->
                    </div>
                </div>
            </div>
            <!--[ Mobile Menu TIDAK LOGIN ]-->
            <div class='notranslate section' id='mobile-menu'>
                <div class='widget LinkList' data-version='2' id='LinkList003'>
                    <ul class='mobileMenu mHome'>
                        <li>
                            <a aria-label='Home' role='button' style='color:#48525c'>
                                <svg class='line' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'>
                                    <g>
                                        <line class='svg-c' x1='14.71978' x2='9.28022' y1='15.00368' y2='15.00368'>
                                        </line>
                                        <path
                                            d='M100.28571,274.70685h-10a5,5,0,0,1-5-5v-5.00916a5,5,0,0,1,1.601-3.667l5.6798-5.2648a4,4,0,0,1,5.43845,0l5.67981,5.2648a5,5,0,0,1,1.601,3.667v5.00916A5,5,0,0,1,100.28571,274.70685Z'
                                            transform='translate(-83.28571 -252.70317)'></path>
                                    </g>
                                </svg>
                                <span class='mobiletext'>Home</span>
                            </a>
                        </li>
                        <li class='mSearch' style='color:#48525c'>
                            <label for='searchInput'>
                                <svg class='linem' viewBox='0 0 24 24'>
                                    <g transform='translate(2.000000, 2.000000)'>
                                        <circle class='fill' cx='9.76659044' cy='9.76659044' r='8.9885584'></circle>
                                        <line x1='16.0183067' x2='19.5423342' y1='16.4851259' y2='20.0000001'>
                                        </line>
                                    </g>
                                </svg>
                                <span class='mobiletext'>Search</span></label>
                        </li>

                        <li class='mDark' style='color:#48525c'>
                            <div onclick='darkMode()'>
                                <svg class='linem icho' viewBox='0 0 24 24'>
                                    <g class='d2'>
                                        <path
                                            d='M183.72453,170.371a10.4306,10.4306,0,0,1-.8987,3.793,11.19849,11.19849,0,0,1-5.73738,5.72881,10.43255,10.43255,0,0,1-3.77582.89138,1.99388,1.99388,0,0,0-1.52447,3.18176,10.82936,10.82936,0,1,0,15.118-15.11819A1.99364,1.99364,0,0,0,183.72453,170.371Z'
                                            transform='translate(-169.3959 -166.45548)'></path>
                                    </g>
                                    <g class='d1'>
                                        <path class='fill'
                                            d='M12 18.5C15.5899 18.5 18.5 15.5899 18.5 12C18.5 8.41015 15.5899 5.5 12 5.5C8.41015 5.5 5.5 8.41015 5.5 12C5.5 15.5899 8.41015 18.5 12 18.5Z'>
                                        </path>
                                        <path
                                            d='M19.14 19.14L19.01 19.01M19.01 4.99L19.14 4.86L19.01 4.99ZM4.86 19.14L4.99 19.01L4.86 19.14ZM12 2.08V2V2.08ZM12 22V21.92V22ZM2.08 12H2H2.08ZM22 12H21.92H22ZM4.99 4.99L4.86 4.86L4.99 4.99Z'
                                            stroke-width='2'></path>
                                    </g>
                                </svg>
                                <span class='mobiletext' data-text='Dark' data-text1='Light'></span>
                            </div>
                        </li>
                        <li class='mTop' style='color:#48525c'>
                            <div onclick='window.scrollTo({top: 0});'>
                                <svg class='linem' viewBox='0 0 24 24'>
                                    <g transform='translate(2.500000, 3.000000)'>
                                        <path class='fill'
                                            d='M9.5,18 C3.00557739,18 0.456662548,17.5386801 0.0435259337,15.2033146 C-0.36961068,12.8679491 2.27382642,8.47741935 3.08841712,7.02846996 C5.81256986,2.18407813 7.66371927,0 9.5,0 C11.3362807,0 13.1874301,2.18407813 15.9115829,7.02846996 C16.7261736,8.47741935 19.3696107,12.8679491 18.9564741,15.2033146 C18.5443995,17.5386801 15.9944226,18 9.5,18 Z'>
                                        </path>
                                    </g>
                                </svg>
                                <span class='mobiletext'>Top</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <!-------------------------------------------->

    @endauth
    <!-- MEMANGGIL KONTEN -->
    {{-- content --}}
    @yield('content')
    <!-- BATAS MANGGIL KONTEN -->
    <!--[ Footer section ]-->
    <footer class='sectionInner'>
        <!--[ Credit ]-->
        <div class='creditInner'>
            <div class=" row mt-5 ">
                <div class="col"><a class="text-dark" href="#">SI
                        Domba</a>
                </div>
                <div class="col"><a class="text-dark" href="">Bantuan
                        Dan
                        Panduan</a></div>
                <div class="w-100"></div>
                <div class="col"><a href="">Tentang SI Domba</a></div>
                <div class="col"><a href="">Syarat Dan Ketentuan</a></div>
                <div class="w-100"></div>
                <div class="col"><a href="">Karir </a></div>
                <div class="col"><a href="">Help Center</a></div>
                <div class="w-100"></div>
                <div class="col"><a href="">Kemitraan</a></div>
                <div class="col"><a href="">Komplain</a></div>

            </div>

            <!--[ Back top button ]-->
            <div class='toTop' onclick='window.scrollTo({top: 0});'>
                <!--[ Arrow up icon ]-->
                <svg class='line' viewBox='0 0 24 24'>
                    <g
                        transform='translate(12.000000, 12.000000) rotate(-180.000000) translate(-12.000000, -12.000000) translate(5.000000, 8.500000)'>
                        <path d='M14,0 C14,0 9.856,7 7,7 C4.145,7 0,0 0,0'></path>
                    </g>
                </svg>
            </div>
        </div>
    </footer>
    </div>
    <!-- FUNSGIONAL JAVASCRIPT -->
    <script src="{{asset('js/sweet_alert.js')}}"></script>
    <script src="{{asset('js/fungsional.js')}}"></script>
    <script src="{{asset('js/navbar.js')}} "></script>
    <script src="{{asset('js/main.js')}}"></script>

    <!-- BATAS FUNGSIONAL JAVASCRIPT -->

</body>

</html>