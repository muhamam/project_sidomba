@extends('layouts.admin')

@section('content')
<div class="container-xxl position-relative bg-white d-flex p-0">

    @include('layouts.sidebarAdmin')

    <!-- Content Start -->
    <div class="content">
        @include('layouts.navbarAdmin')

        <div class=" col-md-12  ">


            <a href=" #" id="chat-user" class="btn  rounded-pill col-md-12 "
                style="background: #C4C4C4; color:black "> </i>Chat
                User</a>
            <div class="chatuser rounded-pill col-md-12 justify-content-between row"
                style="background: #C4C4C4; color:black ;margin-top: 20px;">

                <img class="col-1 rounded-circle" src="img/testimonial-1.jpg" style="border-radius: 40px; ">

                <h5 class="col-2">User A</h5>

                <div class="col-1" style="border-left: 5px solid black;"></div>

                <p class="col-6" style="margin-top: 10px;"> <span> Pesan : </span>Permisi min, mau nanya soal
                    investasi itu
                    caranya............</p>

                <div class="tom col-2" style="margin-top: 10px;">
                    <a href="{{route('admin.isi-chat')}}" class="btn btn-primary rounded-pill col-md-12">
                        Periksa</a>
                </div>
            </div>
            <div class="chatuser rounded-pill col-md-12 justify-content-between row"
                style="background: #C4C4C4; color:black ;margin-top: 20px;">

                <img class="col-1 rounded-circle" src="img/testimonial-1.jpg" style="border-radius: 40px; ">

                <h5 class="col-2">Investor B</h5>

                <div class="col-1" style="border-left: 5px solid black;"></div>

                <p class="col-6" style="margin-top: 10px;"> <span> Pesan : </span>Permisi min, mau nanya soal
                    investasi itu
                    caranya............</p>

                <div class="tom col-2" style="margin-top: 10px;">
                    <a href="isi-chat.html" class="btn btn-primary rounded-pill col-md-12">
                        Periksa</a>
                </div>
            </div>
            <div class="chatuser rounded-pill col-md-12 justify-content-between row"
                style="background: #C4C4C4; color:black ;margin-top: 20px;">

                <img class="col-1 rounded-circle" src="img/testimonial-1.jpg" style="border-radius: 40px; ">

                <h5 class="col-2">Investor C</h5>

                <div class="col-1" style="border-left: 5px solid black;"></div>

                <p class="col-6" style="margin-top: 10px;"> <span> Pesan : </span>Permisi min, mau nanya soal
                    investasi itu
                    caranya............</p>

                <div class="tom col-2" style="margin-top: 10px;">
                    <a href="isi-chat.html" class="btn btn-primary rounded-pill col-md-12">
                        Periksa</a>
                </div>
            </div>
            <a href=" #" id="chat-peternak" class="btn  rounded-pill col-md-12"
                style="background: #C4C4C4;margin-top: 20px; color:black">
                </i>Chat Peternak</a>

            <div class="chatpeternak rounded-pill col-md-12 justify-content-between row"
                style="background: #C4C4C4; color:black ;margin-top: 20px;">

                <img class="col-1 rounded-circle" src="img/testimonial-1.jpg" style="border-radius: 40px; ">

                <h5 class="col-2">Peternak A</h5>

                <div class="col-1" style="border-left: 5px solid black;"></div>

                <p class="col-6" style="margin-top: 10px;"> <span> Pesan : </span>Permisi min, mau nanya soal
                    investasi itu
                    caranya............</p>

                <div class="tom col-2" style="margin-top: 10px;">
                    <a href="isi-chat.html" class="btn btn-primary rounded-pill col-md-12">
                        Periksa</a>
                </div>
            </div>
            <div class="chatpeternak rounded-pill col-md-12 justify-content-between row"
                style="background: #C4C4C4; color:black ;margin-top: 20px;">

                <img class="col-1 rounded-circle" src="img/testimonial-1.jpg" style="border-radius: 40px; ">

                <h5 class="col-2">Peternak A</h5>

                <div class="col-1" style="border-left: 5px solid black;"></div>

                <p class="col-6" style="margin-top: 10px;"> <span> Pesan : </span>Permisi min, mau nanya soal
                    investasi itu
                    caranya............</p>

                <div class="tom col-2" style="margin-top: 10px;">
                    <a href="isi-chat.html" class="btn btn-primary rounded-pill col-md-12">
                        Periksa</a>
                </div>
            </div>
            <div class="chatpeternak rounded-pill col-md-12 justify-content-between row"
                style="background: #C4C4C4; color:black ;margin-top: 20px;">

                <img class="col-1 rounded-circle" src="img/testimonial-1.jpg" style="border-radius: 40px; ">

                <h5 class="col-2">Peternak A</h5>

                <div class="col-1" style="border-left: 5px solid black;"></div>

                <p class="col-6" style="margin-top: 10px;"> <span> Pesan : </span>Permisi min, mau nanya soal
                    investasi itu
                    caranya............</p>

                <div class="tom col-2" style="margin-top: 10px;">
                    <a href="isi-chat.html" class="btn btn-primary rounded-pill col-md-12">
                        Periksa</a>
                </div>
            </div>

            <a href=" #" id="chat-investor" class="btn rounded-pill col-md-12"
                style="background: #C4C4C4; margin-top: 20px; color:black">
                </i>Chat Investor</a>

            <div class="chatinvestor rounded-pill col-md-12 justify-content-between row"
                style="background: #C4C4C4; color:black ;margin-top: 20px;">

                <img class="col-1 rounded-circle" src="img/testimonial-1.jpg" style="border-radius: 40px; ">

                <h5 class="col-2">Peternak A</h5>

                <div class="col-1" style="border-left: 5px solid black;"></div>

                <p class="col-6" style="margin-top: 10px;"> <span> Pesan : </span>Permisi min, mau nanya soal
                    investasi itu
                    caranya............</p>

                <div class="tom col-2" style="margin-top: 10px;">
                    <a href="isi-chat.html" class="btn btn-primary rounded-pill col-md-12">
                        Periksa</a>
                </div>
            </div>
            <div class="chatinvestor rounded-pill col-md-12 justify-content-between row"
                style="background: #C4C4C4; color:black ;margin-top: 20px;">

                <img class="col-1 rounded-circle" src="img/testimonial-1.jpg" style="border-radius: 40px; ">

                <h5 class="col-2">Peternak A</h5>

                <div class="col-1" style="border-left: 5px solid black;"></div>

                <p class="col-6" style="margin-top: 10px;"> <span> Pesan : </span>Permisi min, mau nanya soal
                    investasi itu
                    caranya............</p>

                <div class="tom col-2" style="margin-top: 10px;">
                    <a href="isi-chat.html" class="btn btn-primary rounded-pill col-md-12">
                        Periksa</a>
                </div>
            </div>
            <div class="chatinvestor rounded-pill col-md-12 justify-content-between row"
                style="background: #C4C4C4; color:black ;margin-top: 20px;">

                <img class="col-1 rounded-circle" src="img/testimonial-1.jpg" style="border-radius: 40px; ">

                <h5 class="col-2">Peternak A</h5>

                <div class="col-1" style="border-left: 5px solid black;"></div>

                <p class="col-6" style="margin-top: 10px;"> <span> Pesan : </span>Permisi min, mau nanya soal
                    investasi itu
                    caranya............</p>

                <div class="tom col-2" style="margin-top: 10px;">
                    <a href="isi-chat.html" class="btn btn-primary rounded-pill col-md-12">
                        Periksa</a>
                </div>
            </div>
            <!-- <div class="user">
                    <p>Chat User</p>

                </div> -->
            <!-- <div class="chat-user">
                    <p>Chat User</p>

                </div>
                <div class="chat-user">
                    <p>Chat User</p>

                </div>
                <div class="chat-user">
                    <p>Chat User</p>

                </div> -->
            <!-- <div class="peternak">
                    <p>Chat Peternak</p>
                </div>
                <div class="investor">
                    <p>Chat Investor</p>


        </div> -->


        



           <!-- Footer Start -->

            <div class="container-fluid pt-9 px-9" style="margin-top: 100%;">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <center>
                            <div class="col-12 col-sm-6 text-center text-sm-start">
                                &copy; <a href="#">Si-domba</a>, Company.
                            </div>
                        </center>
                    </div>
                </div>
            </div>

            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->
</div>
@endsection