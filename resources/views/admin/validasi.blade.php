@extends('layouts.admin')

@section('content')
<div class="container-xxl position-relative bg-white d-flex p-0">

    @include('layouts.sidebarAdmin')

    <!-- Content Start -->
    <div class="content">
        @include('layouts.navbarAdmin')

        <!-- Sale & Revenue Start -->

        <div class="container row d-flex justify-content-center">
            <div class="judulvalidasi  col-md-11 d-flex justify-content-center" style="margin-top: 20px;">

                <h2>Daftar Pesanan</h2>

            </div>

            <div class="judulvalidasi col-md-11 d-flex justify-content-center" style="margin-top: 20px; ;">
                <table class="table " style="color: black;">
                    <thead style="background: #C4C4C4;">
                        <tr>
                            <th scope="col">ID Pesanan</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Pemesan</th>
                            <th scope="col">Status Pembayaran</th>
                            <th scope="col">Status Pengiriman</th>
                            <th scope="col">Total</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1128212</th>
                            <td>24/12/2021</td>
                            <td>Raihan</td>
                            <td>
                                <p class="rounded-pill d-flex justify-content-center"
                                    style="background-color: #25C517;">Lunas</p>
                            </td>
                            <td>
                                <p class="rounded-pill d-flex justify-content-center"
                                    style="background-color: #25C517;">Diterima</p>
                            </td>
                            <td>Rp. 5000.000</td>
                            <td>
                                <a href="{{route('admin.detailpesanan')}}" class="btn btn-primary rounded-pill col-md-12">
                                    Periksa</a>

                            </td>

                        </tr>
                        <tr>
                            <th scope="row">235452</th>
                            <td>24/12/2021</td>
                            <td>Anas</td>
                            <td>
                                <p class="rounded-pill d-flex justify-content-center"
                                    style="background-color: #25C517;">Lunas</p>
                            </td>
                            <td>
                                <p class="rounded-pill d-flex justify-content-center"
                                    style="background-color: #ff0000;">Belum Diterima</p>
                            </td>
                            <td>Rp. 10.000.000</td>
                            <td>
                                <a href="detailpesanan-belumditerima.html"
                                    class="btn btn-primary rounded-pill col-md-12"> Periksa</a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3223323</th>
                            <td>24/12/2021</td>
                            <td>Indra</td>
                            <td>
                                <p class="rounded-pill d-flex justify-content-center"
                                    style="background-color: #ff0000;">Belum Lunas</p>
                            </td>
                            <td>
                                <p class="rounded-pill d-flex justify-content-center"
                                    style="background-color: #ff0000;">Belum Diterima</p>
                            </td>
                            <td>Rp. 8.000.000</td>
                            <td>
                                <a href="detailpesanan-belumvalidasi.html"
                                    class="btn btn-primary rounded-pill col-md-12"> Periksa</a>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>













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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@endsection