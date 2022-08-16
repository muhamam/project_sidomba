<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="../img/domba.png">
    <title>Sidomba</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/navbar.css')}}">

    {{-- costum --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/akun-user.css')}}">

    {{-- boostrap --}}
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<body>

    <nav class="navbar-expand-custom navbar-mainbg">

        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <img class="logodomba" src="{{asset('img/logodombaputih.png')}}" alt="" width="50">
            <a class="navbar-brand navbar-logo" href="{{ route('home') }}">SI-Domba</a>
            <!-- NOTIF -->
            <a class="ml-3">
                <form class="input-group input-group-md">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search" size="20">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </a>
            @auth
            <a class="ml-3">
                <a href="javascript:void(0);" class="me-4 proses" style="color: white;"><span class="iconify"
                        data-icon="carbon:notification" data-width="22" data-height="25"></span>
                </a>
                <a href="javascript:void(0);" class="me-4 proses2" style="color: white;"><span class="iconify"
                        data-icon="ep:chat-round" data-width="22" data-height="25"></span>
                </a>
                <a href="javascript:void(0);" class="me-4 proses3" style="color: white;"><span class="iconify"
                        data-icon="cil:cart" data-width="22" data-height="25"></span>
                </a>
            </a>
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>

                <!-- MENU -->

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link peternakan" href="javascript:void(0);"><i class="iconify d-inline"
                            data-icon="maki:farm" data-width="20" data-height="20"></i>
                        Peternakan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link investasi" href="javascript:void(0);"><i class="iconify d-inline"
                            data-icon="fluent-emoji-high-contrast:money-bag" data-width="20" data-height="20"></i>
                        Investasi</a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0);" class="chatbox-open" aria-expanded="false" type="button">
                        <i class="iconify d-inline" data-icon="line-md:account" data-width="20" data-height="20"></i>
                        Account</a>
                    </a>
                    <Center><button class="chatbox-close">
                            <i class="iconify" data-icon="bi:x" data-width="35" data-height="35"></i>
                        </button></center>
                </li>
            </ul>

        </div>
        </div>

    </nav>

    <section class="chatbox-popup">
        <header class="chatbox-popup__header">
            <center>
                <aside style="flex:3">
                    <img src="{{ Auth::user()->avatar === null ? asset('img/boy.png') : asset(Auth::user()->avatar) }}"
                        {{-- need redesign system --}} alt="" style="width: 50px; height: 50px; "
                        class="rounded-circle d-inline">
                    <br>
                    <b style="font-size: 1em;">{{ Auth::user()->fullname}}</b>
                    <p style="font-size: 0.7em;">{{ Auth::user()->username}}</p>
                    <a style="font-size: 0.7em;">{{ Auth::user()->email}}</a>

                </aside>
            </center>


        </header>
        <main class="chatbox-popup__main">
            <aside style="flex:1;color:#888;text-align:left;">
                <a href="#" class="text-dark"><span class="iconify me-2" data-icon="icons8:buy" data-width="25"
                        data-height="25"></span>
                    Pembelian</a>
                <p></p>
                <a href="#" class="text-dark"><span class="iconify me-2" data-icon="ant-design:star-outlined"
                        data-width="25" data-height="25"></span>
                    Wishlist</a>
                <p></p>
                <a href=" {{route('account.index')}}" class="text-dark"><span class="iconify me-2"
                        data-icon="ic:outline-switch-account" data-width="25" data-height="25"
                        data-flip="horizontal"></span>
                    Akun</a>
                <p></p>
                <a href="{{ route('logout') }}" class="text-dark"><span class="iconify me-2"
                        data-icon="ant-design:logout-outlined" data-width="25" data-height="25"></span>
                    Keluar</a>
            </aside>
        </main>


    </section>
    <!-- ==== -->
    @else
    <div class="ms-auto me-5">
        <a class="btn btn-light" aria-current="page" href="{{ route('register') }}">Daftar</a>
        <a class="btn btn-outline-light" aria-current="page" href="{{ route('login') }}">Masuk</a>
    </div>
    @endauth

    </div>
    </div>

    <div class="row me-0" style="background: #E5E5E5; ">
        {{-- content --}}
        @yield('content')
        <center>
            <div class="dotted mt-5 col-md-10 "></div>
            <div class="dotted mt-5 col-md-10"></div>
        </center>

        <div class=" row mt-5 ">
            <div class="col" style="margin-left: 450px; font-size: 20px; "><a class="text-dark" href="#">SI
                    Domba</a>
            </div>
            <div class="col" style="margin-left: -450px; font-size: 20px;"><a class="text-dark" href="">Bantuan Dan
                    Panduan</a></div>
            <div class="w-100"></div>
            <div class="col"><a href="" style=" margin-left: 450px; color: #737373;">Tentang SI Domba</a></div>
            <div class="col"><a href="" style="color: #737373;">Syarat Dan Ketentuan</a></div>
            <div class="w-100"></div>
            <div class="col"><a href="" style="margin-left: 450px; color: #737373;">Karir </a></div>
            <div class="col"><a href="" style="color: #737373;">Help Center</a></div>
            <div class="w-100"></div>
            <div class="col"><a href="" style="margin-left: 450px; color: #737373;">Kemitraan</a></div>
            <div class="col"><a href="" style="color: #737373;">Komplain</a></div>

        </div>




        <!-- Footer Starts Here -->
        <footer class="text-center" style="background-color: #3a8bcd ; margin-top: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="copyright-text m-3">
                            <p class="text-white"> Copyright &copy; 2022 Team SI Domba | <img
                                    src="{{asset('img/logodombaputih.png')}}" alt="" style="width:25px;"></p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
    </div>
    
    {{-- switch allert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- js costum -->
    <script src="{{asset('js/navbar.js')}} "></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/sweet_alert.js')}}"></script>
    
    {{-- bundle --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    {{-- Separate --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>


    {{-- Iconify --}}
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>


</body>

</html>