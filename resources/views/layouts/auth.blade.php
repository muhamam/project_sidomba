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
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>



    <!---------------------------------------------------------------------------------------------------------->

    <!-- HALAMAN BODY -->

    <!--[ <body> open ]-->

<body class='body-login '>

    <div class="row">
        <div class="body-login11 mr-5 col-10">

        </div>
        <div class="bulat">
        </div>
        <div class="bulat2">

        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <center>
                                    <h5 class="text-dark">Lupa Password</h5>
                                </center>
                                <p>Link untuk mengubah password akan dikirimkan ke email yang telah
                                    terdaftar pada akun SIDOMBA Anda :</p>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <center>
                                <button type="submit" class="btn btn-primary">Kirim link</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal1 -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <center>
                                <iconify-icon icon="bi:envelope-check" width="25" height="25"></iconify-icon>
                                <h5 class="text-dark">Verifikasi Email</h5>
                            </center>
                            <p>Harap verifikasi email Anda dengan membuka link yang telah dikirim pada email dibawah ini
                                :</p>
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <center>
                            <button type="submit" class="btn btn-secondary">Kirim Ulang (59s)</button>
                            <button type="submit" class="btn btn-primary">Verifikasi</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @yield('content')


</body>

</html>