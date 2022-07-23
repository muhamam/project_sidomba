<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <!-- Google Font 'Open Sans' feel free to change -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- jQuery CDN for smooth scroll, adding mobile to nav -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous" defer></script>
    <script src="https://kit.fontawesome.com/71cd5983fb.js" crossorigin="anonymous"></script>

    <title>Sidomba</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/user/style.css')}}">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('css/user/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/user/akun-user.css')}}">
    <link rel="stylesheet" href="{{asset('css/user/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/user/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/user/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/user/owl.css')}}">
    <link rel="stylesheet" href="{{asset('css/user/tooplate-main.css')}}">
    <link rel="stylesheet" href="{{asset('css/user/style.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>

    <div class="container-fluid navbar navbar-expand  " style="background-color: #3a8bcd">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="" style="color:white;">
                    <img class="m-1" src="{{asset('img/logodombaputih.png')}}" alt="" width="40">
                    <p class="d-inline fw-bold me-3">SI-Domba</p>
                    <p class="d-inline">Dashboard</p>
                </li>
                <li class="ms-5 my-auto">
                    <form class="input-group input-group-md">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search" size="40">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </li>
                @auth
                <li class="my-auto">
                    <a href="" class="ms-5 me-2" style="color: white;"><span class="iconify"
                            data-icon="carbon:notification" data-width="20" data-height="20"></span>
                    </a>
                    <a href="" class="me-2" style="color: white;"><span class="iconify mr-2" data-icon="ep:chat-round"
                            data-width="20" data-height="20"></span>
                    </a>
                    <a href="" class="me-2" style="color: white;"> <span class="iconify" data-icon="cil:cart"
                            data-width="20" data-height="20"></span>
                    </a>
                </li>
                <li class="mx-1 my-auto">
                    <span class="iconify d-inline ms-2" style="color: white;" data-icon="maki:farm" data-width="20"
                        data-height="20"></span>

                    <div class="dropdown d-inline">
                        <a href="index_investasi.html" class="dropdown-toggle" data-bs-toggle="dropdown"
                            style="color: white; ">
                            Peternakan
                        </a>
                        <div class="dropdown-menu bg-light p-1" style="margin-top: 1em; left:-5em;">
                            <center>
                                <p class="dropdown-item" style="font-size: 0.7em; margin-bottom:0;">Anda belum
                                    mendaftarkan
                                    peternakan anda</p>
                                <a href="#" class="dropdown-item rounded-pill text-white"
                                    style="background-color:#3A8BCD;">Daftarkan Peternakan Anda</a>
                                <a href="#" class="dropdown-item" style="color: #3A8BCD;">Syarat & Ketentuan</a>
                            </center>
                        </div>
                    </div>
                </li>
                <li class="mx-1 my-auto">
                    <span><img src="{{ asset('img/investasi.png')}}" alt="" style="width: 16px; height:16px; "
                            class="d-inline ms-2">
                    </span>

                    <div class="d-inline dropdown">
                        <a href="index_investasi.html" class="dropdown-toggle" data-bs-toggle="dropdown"
                            style="color: white; ">
                            Investasi
                        </a>
                        <div class="dropdown-menu bg-light p-1" style="margin-top: 1em; left:-5em;">
                            <center>
                                <p class="dropdown-item" style="font-size: 0.7em; margin-bottom:0;">
                                    Anda belum mengaktifkan akun investor anda
                                </p>
                                <a href="#" class="dropdown-item rounded-pill text-white"
                                    style="background-color:#3A8BCD ;">Aktifkan Akun Investor</a>
                                <a href="#" class="dropdown-item" style="color: #3A8BCD;">Syarat & Ketentuan</a>
                            </center>
                        </div>
                    </div>
                </li>
                <li class="mx-1 my-auto">
                    <span><img
                            src="https://lh3.googleusercontent.com/a-/AOh14GjWJy4eDhbJeMxGKLA-s9yAjqPeZzaqIXCeKC2yfQ=s96-c"
                            alt="" style="width: 35px; height:35px; " class="rounded-circle d-inline ms-2">
                    </span>

                    <div class="d-inline dropdown">
                        <a href="index_akun.html" class="dropdown-toggle " data-bs-toggle="dropdown"
                            style="color: white;">
                            {{ Auth::user()->fullname }}
                        </a>
                        <div class="dropdown-menu bg-light" style="margin-top: 1em; right:0; left:auto;">
                            <div class="dropdown-item" style="border-bottom:2px solid #3A8BCD ;">
                                <a href="#" class="text-dark">{{ Auth::user()->username }}<br>
                                    <p style="font-size: 0.7em;">{{ Auth::user()->email}}</p>
                                </a>
                            </div>
                            <div class="dropdown-item my-1">
                                <span class="iconify me-2" data-icon="icons8:buy" data-width="25"
                                    data-height="25"></span>
                                <a href="#" class="text-dark">Pembelian</a>
                            </div>
                            <div class="dropdown-item my-1">
                                <span class="iconify me-2" data-icon="ant-design:star-outlined" data-width="25"
                                    data-height="25"></span>
                                <a href="#" class="text-dark">Wishlist</a>
                            </div>
                            <div class="dropdown-item my-1">
                                <span class="iconify me-2" data-icon="ic:outline-switch-account" data-width="25"
                                    data-height="25" data-flip="horizontal" "></span>
                                <a href=" #" class="text-dark">Akun</a>
                            </div>
                            <div class="dropdown-item my-1">
                                <span class="iconify me-2" data-icon="ant-design:logout-outlined" data-width="25"
                                    data-height="25"></span>
                                <a href="{{ route('logout') }}" class="text-dark">Keluar</a>
                            </div>
                        </div>
                    </div>
                </li>
                @else
            </ul>
            <div class="ms-auto">
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
            <div class="col" style="margin-left: 450px; font-size: 20px; "><a class="text-dark" href="#">SI Domba</a>
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

    <!-- Bootstrap core JavaScript -->

    <!-- Additional Scripts -->
    <script src="{{asset('js/jquery.min.js')}} "></script>
    <script src="{{asset('js/popper.js')}} "></script>
    <script src="{{asset('js/bootstrap.min.js')}} "></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/js_baru/jquery.min.js')}} "></script>
    <script src="{{asset('js/js_baru/jquery.min.js')}} "></script>
    <script src="{{asset('js/js_baru/bootstrap.min.js')}} "></script>
    <script src="{{asset('js/js_baru/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/js_baru/main.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</body>

</html>