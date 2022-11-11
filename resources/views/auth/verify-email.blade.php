@extends('layouts.auth')

@section('content')

<!-- Modal1 -->

<div class="body-login2 col-12 " aria-labelledby="exampleModalLabel">
    <div class="body-login3  rounded">
        <center>
            <div class="mb-5 mt-5">
                <img src="../img/logodomba.png" alt="" style="width: 77px; height: 77px;">

                <h3 class="" style="color:black">CARIBI </h3>
            </div>
        </center>
        <div class="modal-content">
            <div class="modal-body">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <div class="form-group">
                        <center>
                            <iconify-icon icon="bi:envelope-check" width="25" height="25"></iconify-icon>
                            <h5 class="text-dark">Verifikasi Email</h5>
                            @if (session('message'))
                                <h6 class="text-success">{{session('message')}}</h6>
                            @endif
                        </center>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary" id="mundu">Kirim ulang link verifikasi</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
var url = ""; // url tujuan
var count = 60; // dalam detik
function countDown() {
    if (count > 0) {
        count--;
        var waktu = count + 1;
        $('#mundur').html('<b>Kirim </b> ' + url + waktu + ' detik.');
        setTimeout("countDown()", 1000);
    } else {
        window.location.href = url;
    }
}
// countDown();
</script>
@endsection