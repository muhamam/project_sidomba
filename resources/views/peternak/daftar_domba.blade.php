@extends('layouts.user')

@section('content')
<!-- Banner Starts Here -->
<div class="banner col-12 rounded"
    style="background-image: url({{asset('img/banner-bg.jpg')}});background-repeat:no-repeat; ">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <center>
                    <div class="caption rounded ml-4">
                        <h3>PETERNAKAN MUNDUR JAYA</h3>

                        <p>Selamat datang di SI DOMBA, sebuah aplikasi jual-beli serta pusat informasi mengenai
                            domba-domba dari seluruh peternak domba di Indonesia.</p>


                    </div>
                </center>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->



<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>DAFTAR DOMBA</h3>
                <center>
                    <div class="line-dec"></div>
                </center>
            </div>

            <table class="table" style="margin-top: 40px; border: 1px solid #000000;">
                <thead style="background: #3A8BCD;">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Jenis Domba</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Terakhir di-Update</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Domba Ekor Gemuk (DEG)</td>
                        <td>50 ekor</td>
                        <td>22/03/2022, 10:45</td>
                        <td>
                            <a class="btn btn-primary" href="#">Periksa</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Domba Ekor Tipis</td>
                        <td>30 ekor</td>
                        <td>22/03/2022, 10:45</td>
                        <td>
                            <a class="btn btn-primary" href="#">Periksa</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Domba Garut</td>
                        <td>20 ekor</td>
                        <td>22/03/2022, 10:45</td>
                        <td>
                            <a class="btn btn-primary" href="#">Periksa</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>Total </td>
                        <td>100 ekor</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection