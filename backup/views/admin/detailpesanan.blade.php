@extends('layouts.admin')

@section('content')

<div class="container-xxl position-relative bg-white d-flex p-0">

    @include('layouts.sidebarAdmin')

    <!-- Content Start -->
    <div class="content">
        
        @include('layouts.navbarAdmin')


<!-- Sale & Revenue Start -->
<div class="tombol justify-content-between">
    <a class="rounded-pill d-flex justify-content-center  col-md-2"
        style="background-color: #979494;  color: #020302; margin-top: 20px;" href="validasi.html">
        <i class="fi fi-rr-arrow-left" style="margin-right: 15px; font-size: 20px;"></i>Kembali
    </a>
</div>

<div class="container row d-flex justify-content-center">

    <div class="judulvalidasi  col-md-11 d-flex justify-content-center"
        style="margin-top: 20px; background-color: #C4C4C4;">

        <h2>Daftar Pesanan</h2>

    </div>
    <div class=" col-md-12 d-lg-inline-flex justify-content-between">

        <div class="border border-dark col-md-5  align-items-start"
            style="margin-left: 40px; margin-top: 20px;">
            <div class="infopesanan  d-flex justify-content-center " style=" background-color: #C4C4C4;">

                <h6>Info Pesanan</h6>


            </div>
            <div class="gambar col-md-12 row ">
                <img class="col-3 d-flex align-items-stretch " src="img/testimonial-1.jpg" alt=""
                    style="height: 100px;">
                <div class="col-9 " style="font-size: small;">
                    <p> Domba Garut</p>
                    <p> 1 x Rp.2.000.000</p>
                    <p>Peternakan Vahalla</p>
                </div>
            </div>
            <table class="table">

                <tbody>
                    <tr>

                        <td>Berat</td>
                        <td> : </td>
                        <td>20kg</td>

                    </tr>
                    <tr>

                        <td>Umur</td>
                        <td> : </td>
                        <td>5 tahun</td>

                    </tr>
                    <tr>

                        <td>Jenis Kelamin</td>
                        <td> : </td>
                        <td>Jantan</td>

                    </tr>
                    <tr>

                        <td>Asal Peternakan</td>
                        <td> : </td>
                        <td>Valhalla</td>

                    </tr>

                </tbody>
            </table>
            <div class="garis" style="border-bottom: 3px solid black;"></div>

            <table class="table">

                <tbody>
                    <tr>

                        <td>Harga</td>
                        <td> : </td>
                        <td>Rp. 2,000,000</td>

                    </tr>
                    <tr>

                        <td>Jumlah Pesanan</td>
                        <td> : </td>
                        <td>1 ekor</td>

                    </tr>
                    <tr>

                        <td>Total</td>
                        <td> : </td>
                        <td>Rp. 2,000,000</td>

                    </tr>


                </tbody>
            </table>


        </div>
        <div class="border border-dark col-md-5  align-items-start"
            style="margin-right: 40px; margin-top: 20px;">
            <div class="infopesanan  d-flex justify-content-center " style=" background-color: #C4C4C4;">

                <h6>Info Pembayaran</h6>


            </div>
            <!-- <div class="gambar col-md-12 row ">
                <img class="col-3 d-flex align-items-stretch " src="img/testimonial-1.jpg" alt=""
                    style="height: 100px;">
                <div class="col-9 " style="font-size: small;">
                    <p> Domba Garut</p>
                    <p> 1 x Rp.2.000.000</p>
                    <p>Peternakan Vahalla</p>
                </div>
            </div> -->
            <table class="table">


                <tr>

                    <td>Info Pembayaran</td>
                    <td> : </td>
                    <td>Transfer ATM (Manual)</td>

                </tr>



            </table>
            <div class="garis" style="border-bottom: 3px solid black;"></div>

            <table class="table">
                <tr>

                    <td>Waktu Pemesanan</td>
                    <td> : </td>
                    <td>24/12/2021, 12:30</td>

                </tr>
                <tr>

                    <td>Waktu Pembayaran</td>
                    <td> : </td>
                    <td>25/12/2021, 09:30</td>

                </tr>

            </table>
            <div class="garis" style="border-bottom: 3px solid black;"></div>
            <table class="table">
                <tr>

                    <td>Total Harga</td>
                    <td> : </td>
                    <td>Rp. 2,000,000</td>

                </tr>
                <tr>

                    <td>Total Ongkos Kirim</td>
                    <td> : </td>
                    <td>Rp. 0</td>

                </tr>
                <tr>

                    <td>Total Pembayaran</td>
                    <td> : </td>
                    <td>Rp. 2,000,000</td>

                </tr>

            </table>
            <div class="garis" style="border-bottom: 3px solid black;"></div>


            <p>Bukti Pembayaran :</p>
            <center><img src="img/testimonial-1.jpg" alt=""
                    style="width:112px; height: 112px; margin-bottom: 20px;">
                <a class="rounded-pill d-flex justify-content-center "
                    style="background-color: #15ff00; width: 134px; height: 20px; color: #0b8300;">
                    Sudah Tervalidasi
                </a>

            </center>



        </div>
    </div>
    <div class=" col-md-12 d-flex justify-content-between">

        <div class="border border-dark col-md-5  align-items-start"
            style="margin-left: 40px; margin-top: 20px;">
            <div class="infopesanan  d-flex justify-content-center " style=" background-color: #C4C4C4;">

                <h6>Info Pembeli</h6>


            </div>
            <div class="gambar col-md-12 row ">
                <img class="col-3 d-flex align-items-stretch " src="img/testimonial-1.jpg" alt=""
                    style="height: 100px;">
                <div class="col-9 " style="font-size: small;">
                    <p> User A</p>
                    <p> @userA</p>
                    <p>L0yalty Status : <span style="color: rgb(112, 95, 1);">Gold</span></p>
                </div>
            </div>
            <table class="table">

                <tbody>
                    <tr>

                        <td>Email</td>
                        <td> : </td>
                        <td>usera@gmail.com</td>

                    </tr>
                    <tr>

                        <td>No Telepon</td>
                        <td> : </td>
                        <td>0812-9999-9999</td>

                    </tr>
                    <tr>

                        <td>ID User</td>
                        <td> : </td>
                        <td>U1234</td>

                    </tr>

                </tbody>
            </table>

            <div class="garis" style="border-bottom: 3px solid black;"></div>

            <table class="table">

                <tbody>
                    <tr>

                        <td>Alamat Pengiriman : </td>



                    </tr>
                    <tr>
                        <td>Jl. Siliwangi no. 01, Tugujaya, Cihideung, Kota Tasikmalaya, Jawa Barat,
                            46126</td>
                    </tr>


                </tbody>
            </table>

        </div>
        <div class="border border-dark col-md-5  align-items-start"
            style="margin-right: 40px; margin-top: 20px;">
            <div class="infopesanan  d-flex justify-content-center " style=" background-color: #C4C4C4;">

                <h6>Status Pembayaran dan Pengiriman</h6>


            </div>

            <table class="table">

                <tbody>
                    <tr>

                        <td>Status Pembayaran</td>
                        <td> : </td>
                        <td>
                            <p class="rounded-pill d-flex justify-content-center"
                                style="background-color: #15ff00;  color: #0b8300;">Lunas</p>
                        </td>

                    </tr>
                    <tr>

                        <td>Status Pengiriman</td>
                        <td> : </td>
                        <td>
                            <p class="rounded-pill d-flex justify-content-center"
                                style="background-color: #15ff00;  color: #0b8300;">Sudah Diterima</p>
                        </td>

                    </tr>
                    <tr>

                        <td>Status Pengiriman</td>
                        <td> : </td>
                        <td>
                            <p class="rounded-pill d-flex justify-content-center"
                                style="background-color: #ff0000; color: #6A0909;">Belum Diterima</p>
                        </td>

                    </tr>

                </tbody>
            </table>

        </div>
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