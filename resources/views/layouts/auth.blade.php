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
            <!--[ Header content ]-->

            <div class='headerContent'>
                <div class='headerDiv headerLeft'>
                    <!--[ Header button and icon ]-->
                    <div class='headerIcon'>
                        <a href="{{ route('home') }}"><img alt='SI-DOMBA' src="{{ asset('img/logodomba.png')}}"
                                title='SI-DOMBA' alt="" width="50" />
                    </div>
                    <!--[ Header widget ]-->
                    <div class='section' id='header-widget'>
                        <div class='widget Header' data-version='2' id='Header1'>
                            <b>SI-DOMBA</b></a>
                        </div>

                    </div>
                </div>

                <div class='headerDiv headerRight'>



                    <!--[ Header button and icon ]-->
                    <div class='headerIcon'>

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
        </header>




        <main class="py-5" style="background-color: #E5E5E5;">
            @yield('content')
        </main>

        <footer class="bg-white border-top text-center">
            <!-- Copyright -->
            <div class="text-center p-3">
                Copyright 2022 &copy;
                <a class="text-dark" href="">Team Si Domba</a>
            </div>
            <!-- Copyright -->
        </footer>
</body>

</html>