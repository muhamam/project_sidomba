@extends('layouts.user')

@section('content')
<div class="container">
    <div class=" d-flex d-flex justify-content-center mt-5" style="margin-bottom: 20px;">
        <img src="../img/logodomba.png" alt="" style="width: 77px; height: 77px;">
        <div class="garis"
            style="width: 4px; height: 85px; background-color: black; margin-left: 5px; margin-right: 5px;">
            <p></p>
        </div>
        <h3 class="" style="margin-top: 10px; margin-left: 10px; height: 10px;">CARIBI</h3>
    </div>
    <div class="d-flex justify-content-center">
        <div class="bg-light col-10" style="border-radius: 15px;">
            <br>
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

@endsection