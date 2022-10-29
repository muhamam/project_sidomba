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

            <div class="d-flex flex-row   ml-3 mb-3 mt-3">
                <a class="mt-3" style="color: #000;">
                    <h5>Rincian Dana</h5>
                </a>

            </div>
            <div class="d-flex">
                <div class=" col-10">
                    <label for="basic-url" class="col-10">Total Investasi :</label>
                    <label for="basic-url" class="col-10">Total Laba Bersih :</label>
                    <br>
                    <div class=" " style="width: 120%; height: 2px; background-color: #3A8BCD;">
                    </div>
                    <br>
                    <label for="basic-url" class="col-10">Total Deposit :</label>
                    <label for="basic-url" class="col-10">Total Penarikan :</label>
                    <br>
                    <div class=" " style="width: 120%; height: 2px; background-color: #3A8BCD;">
                    </div>
                    <br>
                    <label for="basic-url" class="col-10"><b>Total Deposit Saat
                            Ini</b></label>
                    <br>
                </div>
                <div class=" col-10">
                    <label for="basic-url" class="col-10"><b>Rp12.000.000,00</b></label>
                    <label for="basic-url" class="col-10"><b>
                            <a style="color: #00ff00">Rp4.000.000,00
                        </b></a></label>
                    <br>

                    <br>
                    <label for="basic-url" class="col-10"><b>
                            <a style="color: #3A8BCD">Rp16.000.000,00
                        </b></a></label>
                    <label for="basic-url" class="col-10"><b>
                            <a style="color:red">Rp5.000.000,00
                        </b></a></label>
                    <br>
                    <br>
                    <label for="basic-url" class="col-10"><b>
                            <a style="color: #3A8BCD">Rp16.000.000,00
                        </b></a></label>
                    <br>
                    <br>

                    <a type="button" href="#" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal-1"
                        style=" font-size:15px;">Cairkan Dana</a>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <br>
        <br>
</div>

</div>
</div>



</div>
</div>
<br>
</div>
</section>
</div>

@endsection