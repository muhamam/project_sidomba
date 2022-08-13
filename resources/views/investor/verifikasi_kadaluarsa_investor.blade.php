@extends('layouts.user')

@section('content')
<div class="row  d-flex">
    @include('layouts.sidebarbayarInvest')

    <section class="ftco-section col" style="margin-top: 100px;">
        <div class=" d-flex d-flex justify-content-center">
            <img src="../img/domba.png" alt="" style="width: 77px; height: 77px;">
            <div class="garis"
                style="width: 2px; height: 85px; background-color: black; margin-left: 10px; margin-right: 20px;">
                <p></p>
            </div>
            <h3 class="" style="text-center">SI-DOMBA <br>Investasi</h3>
        </div>
        <div class="container bg-light" style="background-color: white; border-radius:20px;">
            <div class="d-flex flex-row   ml-3 mb-3 mt-3">
                <a class="mt-3" style="color: #000;">
                    <h5>Status Pembayaran</h5>
                </a>

            </div>
            <center>
                <div class="form-group col-6" style="border: 1px solid black; border-radius:15px;">
                    <span class="iconify" data-icon="charm:notes-cross" data-width="70" data-height="70"></span>
                    <br>
                    <h6>Waktu pembayaran telah kadaluarsa, silahkan cari domba lain di Pasar</h6>
                    <a href="#">00:00:00</a>
                </div>
                <br>
                <span class="iconify col-12" data-icon="healthicons:market-stall-outline" data-width="150"
                    data-height="150"></span>
                <a class="btn btn-primary" href="#">Kembali ke Pasar</a>
            </center>
            <br>

        </div>
</div>
</div>
<br>

</div>
</section>
</div>




@endsection