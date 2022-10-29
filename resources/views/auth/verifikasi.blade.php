@extends('layouts.auth')

@section('content')

<!-- Modal1 -->

<div class="body-login2 col-12 " aria-labelledby="exampleModalLabel">
    <div class="body-login3 col-7 rounded">
        <center>
            <div class="mb-5">
                <img src="../img/logodomba.png" alt="" style="width: 77px; height: 77px;">

                <h3 class="" style="color:black">CARIBI </h3>
            </div>
        </center>
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
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
@endsection