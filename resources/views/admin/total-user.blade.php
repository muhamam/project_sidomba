@extends('layouts.admin')

@section('content')

<div class="container-xxl position-relative bg-white d-flex p-0">

    @include('layouts.sidebarAdmin')

    <!-- Content Start -->
    <div class="content">
        
        @include('layouts.navbarAdmin')


        <div class="tombol justify-content-between">
            <a class="rounded-pill d-flex justify-content-center  col-md-2"
                style="background-color: #979494;  color: #020302; margin-top: 20px;" href="{{ route('admin.home') }}">
                <i class="fi fi-rr-arrow-left" style="margin-right: 15px; font-size: 20px;"></i>Kembali
            </a>
        </div>

        <div class="container">
            <center>
                <div class="totaltransaksi  ms-3 justify-content-center">

                    <h4>Total User Keseluruhan : </h4>
                    <h2 style="color: #25C517;">{{$totalUser}} User</h2>
                    <br>
                    <h4> User Baru Hari Ini :</h4>
                    <h2 style="color: #25C517;">+{{$sum}} User</h2>

                </div>
            </center>

            <div class="container row d-flex justify-content-strat">
                
                <div class="input-group rounded justify-content-strat" style="width: 300px;">
                    <form action="{{route('admin.total-user')}}" method="GET">
                        {{ csrf_field() }}
                        <div class="input-group">
                            @if ($search!==null)
                                <input type="text" class="form-control rounded rounded-pill border-3" name="q" value="{{$search}}"> 
                            @else
                                <input type="text" class="form-control rounded rounded-pill border-3" name="q" placeholder="Search"> 
                            @endif
                            
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>

                <div class="judulvalidasi row d-flex justify-content-center" style="margin-top: 20px; ;">
                    <table id="example" class="table" style="color: black;" >
                        <thead style="background: #C4C4C4;">
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Tanggal Gabung</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0; ?>
                            @forelse ($allUser as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>
                                    {{$item->created_at}}
                                </td>
                                <td>
                                    <form action="{{route('admin.chatStart',['id'=>$item->id])}}" method="post">
                                        @csrf
                                        <a href="/admin/data-user/{{$item->id}}" class="btn btn-primary">Periksa</a>
                                        <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-comments"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <?php $i++; ?>
                            @empty
                            <tr>
                                <td colspan="5">
                                    <div class="text-center fst-italic">Data not found...</div>
                                </td>
                            </tr>
                                
                            @endforelse
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        {{$allUser->links()}}
                    </div>
                    
                    
                </div>

                <div class="container-fluid pt-4 px-4">
                    <div class="row ">
                        <!-- <div class="col-sm-12 col-xl-10 border-4">
                            <div class="bg-light rounded h-100 p-4">
                                <h6 class="mb-4">Grafik Pertumbuhan User</h6>
                                <canvas id="line-chart"></canvas>
                            </div>
                        </div> -->
                        <div class="col-sm-12 col-xl-10">
                            <div class="bg-light rounded h-100 p-4">
                                <h6 class="mb-4">Grafik Pertumbuhan User</h6>
                                <canvas id="salse-revenue"></canvas>
                            </div>
                        </div>
                        <!-- <div class="col-sm-12 col-xl-6">
                            <div class="bg-light rounded h-100 p-4">
                                <h6 class="mb-4">Single Bar Chart</h6>
                                <canvas id="bar-chart"></canvas>
                            </div>
                        </div> -->
                        <!-- <div class="col-sm-12 col-xl-6">
                            <div class="bg-light rounded h-100 p-4">
                                <h6 class="mb-4">Multiple Bar Chart</h6>
                                <canvas id="worldwide-sales"></canvas>
                            </div>
                        </div> -->
                        <!-- <div class="col-sm-12 col-xl-6">
                            <div class="bg-light rounded h-100 p-4">
                                <h6 class="mb-4">Pie Chart</h6>
                                <canvas id="pie-chart"></canvas>
                            </div>
                        </div> -->
                        <!-- <div class="col-sm-12 col-xl-6">
                            <div class="bg-light rounded h-100 p-4">
                                <h6 class="mb-4">Doughnut Chart</h6>
                                <canvas id="doughnut-chart"></canvas>
                            </div>
                        </div> -->
                    </div>
                </div>

            </div>

            <!-- <div class="kotak">

                <div class="satu">
                    <div class="ms-3">

                        <h6>Total User :</h6>
                        <h5>1276 User</h5>
                        <h6>(+25 User Baru Hari Ini)</h6>
                        <a href="#">Klik Untuk Info Selanjutnya</a>

                        <img src="img/userlogo.png" alt="">

                    </div>
                </div>

                <div class="dua">
                    <div class="ms-3">

                        <h6>Total Peternak :</h6>
                        <h5>1276 User</h5>
                        <h6>(+10 Peternak Baru Hari Ini)</h6>
                        <a href="#">Klik Untuk Info Selanjutnya</a>

                        <img src="img/farminglogo.png" alt="">

                    </div>
                </div>
                <div class="tiga">
                    <div class="ms-3">

                        <h6>Total Investor :</h6>
                        <h5>1276 User</h5>
                        <h6>(+30 Investor Baru Hari Ini)</h6>
                        <a href="#">Klik Untuk Info Selanjutnya</a>

                        <img src="img/investor.png" alt="">

                    </div>
                </div>
                <div class="empat">
                    <div class="ms-3">

                        <h6>Total Transaksi Hari Ini :</h6>
                        <h5>1276 User</h5>
                        <h6>(+1000 Transaksi Baru Hari Ini)</h6>
                        <a href="#">Klik Untuk Info Selanjutnya</a>

                        <img src="img/moneylogo.png" alt="">

                    </div>
                </div>

                <div class="lima">
                    <div class="ms-3">

                        <h6>Total Investasi Hari Ini :</h6>
                        <h5>1276 User</h5>
                        <h6>(+100 Investasi Baru Hari Ini)</h6>
                        <a href="#">Klik Untuk Info Selanjutnya</a>

                        <img src="img/investasilogo.png" alt="">

                    </div>
                </div>

            </div>



            <table class="table" style="color: black; position: relative; top: -250px;">
                <tbody>
                    <tr>
                        <td>
                            <h2>Notifikasi</h2>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:110px ;">
                            <p>(02/04/2002</p>
                        </td>
                        <td>
                            <p style="border-left:3px solid black ;">12. 30 PM) </p>

                        </td>
                        <td style="color: rgb(10, 14, 207); width: 110px;">TRNSAKSI : </td>
                        <td>Pembeli A telah meng-upload bukti transaksi </td>
                        <td><a href="validasi.html" class="btn btn-primary">Periksa</a></td>
                    </tr>
                    <tr>
                        <td style="width:110px ;">

                            <p>(02/04/2002</p>

                        </td>
                        <td style="width:110px ;">
                            <p style="border-left:3px solid black ; ">12. 30 PM) </p>

                        </td>
                        <td style="color: rgb(241, 0, 0);">KOMPLAIN : </td>
                        <td>Pembeli B menajukan komplain atas domba peternak A</td>
                        <td><a href="#" class="btn btn-primary">Periksa</a></td>
                    </tr>
                    <tr>
                        <td style="width:110px ;">

                            <p>(02/04/2002</p>

                        </td>
                        <td style="width:110px ;">
                            <p style="border-left:3px solid black ;">12. 30 PM) </p>

                        </td>
                        <td style="color: rgb(226, 214, 44);">INVESTASI : </td>
                        <td>Investor A telah mengupload Bukti investasi</td>
                        <td><a href="#" class="btn btn-primary">Periksa</a></td>
                    </tr>
                </tbody>
            </table>

-->

        </div>






        <!-- Footer Start -->

        <div class="container-fluid pt-4 px-4">
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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
<script>
   
</script>

@endsection