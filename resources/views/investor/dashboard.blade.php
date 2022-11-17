@extends('layouts.user')

@section('content')

<div class="row  d-flex">

    @include('layouts.sidebarInvestor')
    <section class="ftco-section col" style="margin-top: 100px;">
        <div class="mr-5 d-flex justify-content-center">
            <img src="../img/domba.png" alt="" style="width: 77px; height: 77px; border-right:2px solid black;">
            <h3 class="ml-3" style="color:black">CARIBI <br>Investasi</h3>
        </div>
        <br>
        <div class="container">
            <div class=" row justify-content-center " style=" background-color: white; width: 800px; height: 565px;">
                <table class="table  "
                    style=" margin-top: 40px; border: 1px solid #000000;height: 150px; width: 300px;">
                    <thead style="background: #3A8BCD; ">
                        <tr>
                            <th></th>
                            <th>Total Jumlah Investasi</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th></th>
                            <td>Rp9.000.00,00 <br>
                                3 Investasi
                            </td>
                            <td>
                                <span class="iconify" data-icon="fxemoji:sheep" data-width="55" data-height="55"></span>
                            </td>


                        </tr>


                    </tbody>
                </table>
                <table class="table" style="margin-top: 40px; border: 1px solid #000000; margin-left: 30px;height: 150px; width:
                    300px;">
                    <thead style="background: #3A8BCD;">
                        <tr>
                            <th></th>
                            <th colspan="2">Total Untung Bagi Hasil</th>
                            <th></th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th></th>
                            <td>Rp9.000.00,00 <br>
                                3 Investasi
                            </td>
                            <td>
                                <span class="iconify" data-icon="flat-color-icons:money-transfer" data-width="55"
                                    data-height="55"></span>
                            </td>

                        </tr>


                    </tbody>
                </table>
                <div class="dotted1 mb-10 col-md-10"></div>

                <table class=" mb-5 ml-4" style="color: #000000;">
                    <thead>
                        <tr>
                            <th>

                            </th>
                            <th>

                                <h1>Profil Investasi </h1>
                                <h6>Jumlah Domba yang Diinvestasikan : 3 Ekor</h6>
                                <h6>Peternakan yang Diinvestasikan : 2 Peternakan</h6>

                            </th>
                            <th> </th>


                        </tr>
                    </thead>
                    <tbody>



                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

@endsection