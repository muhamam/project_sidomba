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
        <div class="container bg-light" style="background-color: white; border-radius:20px;">

            <div class="d-flex flex-row   ml-3 mb-3 mt-3">
                <a class="mt-3" style="color: #000;">
                </a>

            </div>
            <div class="d-flex">
                <div class=" col-10">
                    <label for="basic-url" class="col-10">Dana Yang Ingin Anda Cairkan : </label>

                    <div class="input-group mb-3 col-10">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Rp</span>
                        </div>
                        <input type="text" class="form-control" aria-label="pencairan" aria-describedby="basic-addon1"
                            placeholder="16.000.000,00">
                    </div>
                    <div class="dotted1 mb-10 col-md-15"></div>
                    <br>

                    <label for="basic-url" class="col-10">No Rekening :</label>
                    <div class="input-group mb-3 col-10">
                        <select class="form-control col-3" id="exampleFormControlSelect1">
                            <option>Mandiri</option>
                            <option>BSI</option>
                            <option>BRI</option>
                            <option>BTN</option>
                            <option>BCA</option>
                        </select>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                            placeholder="Ketikan Nomor Rekening Anda">
                    </div>
                    <center><a type="button" href="#" class="btn btn-primary " data-toggle="modal"
                            data-target="#exampleModal-1" style=" font-size:15px;">Cairkan Dana</a> </center>
                    <br>
                    <div class="dotted1 mb-10 col-md-15"></div>
                    <br>
                    <center><span class="iconify" data-icon="icomoon-free:notification" data-width="40"
                            data-height="40"></span>
                        <p><b>PENTING</b></p>
                        <p style="font-size:15px"> Proses pencairan dana bisa berlangsung selama 1-7 hari. Harap selalu
                            memeriksa
                            rekening yang Anda cantumkan untuk memastikan uang yang Anda cairkan telah masuk.</p>
                    </center>
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