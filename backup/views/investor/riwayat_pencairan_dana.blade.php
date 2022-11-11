@extends('layouts.user')

@section('content')

<div class="row  d-flex">

    @include('layouts.sidebarInvestor')
    <section class="ftco-section col" style="margin-top: 100px;">
        <div class=" d-flex d-flex justify-content-center">
            <img src="../img/domba.png" alt="" style="width: 77px; height: 77px;">
            <div class="garis"
                style="width: 2px; height: 85px; background-color: black; margin-left: 10px; margin-right: 20px;">
                <p></p>
            </div>
            <h3 class="" style="text-center">CARIBI <br>Investasi</h3>
        </div>
        <br>
        <div class="d-flex flex-row ml-3">
            <a class="" href="investasi_riwayat.html" style="color: #000;">
                <h5>Pencairan Dana</h5>
            </a>
            <a class="ml-4" href="investasi_negosiasi.html" style="color: #000;">
                <h5> Riwayat Pencairan</h5>
            </a>
        </div>
        <div class="container bg-light" style="background-color: white; border-radius:20px;">
            <div class="row mt-3">
                <div class="col-15" style="border-radius: 5px; border:1px solid black;">
                    <p></p>
                    <p><b>Rabu, 25 Mei 2022 </b> </p>
                </div>
                <div class="col-15" style="border-radius: 5px; border:1px solid black;">
                    <p></p>
                    <p><b>Dana Yang Dicairkan : <a style="color: #3A8BCD">Rp16.000.000,00
                        </b></a></p>
                    <p><b>Nomor Rekening : <a style="color: #3A8BCD">1122334455 - <span class="iconify"
                                    data-icon="logos:visa" data-width="40" data-height="40"></span>
                        </b></a></p>
                </div>

            </div>
        </div>

</div>
</section>

@endsection