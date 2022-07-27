@extends('layouts.user')

@section('content')
<div class="col-md-9 mx-auto mt-5 mb-5" style="color: black;">
    <form>
        <center>
            <div class="PHOTO">
                <img src="images/logo-domba-investasi.png" alt="" style="width: 81; height:81px;">
            </div>

            <fieldset>

                <legend>Investasikan Domba</legend>
                <input type="hidden" name="id">
                <input type="hidden" name="nama_peternak">
                <input type="hidden" name="namafile">
        </center>

        <h5 class="" style=" border-bottom: 2px solid #000;"><b> Keren! Data Domba Kamu Sudah Diperbarui!
                Silakan Masukkan Data Investasi Dombamu</b></h5>
        <br>
        <div class="mb-3 ">
            <labe for="jenis" class="form-label ">
                <h5>Nominal Investasi yang Diajukan </h5></label>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">(klik disini untuk melihat
                    harga pokok pasar regional Anda )</a>
                <br>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <labe for="jenis" class="form-label ">
                                    <h5 class="modal-title" id="exampleModalLabel">Kota Peternakan Anda :</h5>
                                    </label>
                                    <input name="jenis" type="text" id="jenis" class="form-control"
                                        placeholder="Bandung">
                                    <br>
                                    <labe for="jenis" class="form-label ">
                                        <h5 class="modal-title" id="exampleModalLabel">Harga Pasar Pokok
                                            Regional (Bandung) :
                                        </h5>
                                        </label>
                                        <input name="jenis" type="text" id="jenis" class="form-control"
                                            placeholder="~Rp.250,000/Kg">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                <button type="button" class="btn btn-primary">Ganti lokasi</button>
                            </div>
                        </div>
                    </div>
                </div>

                <input name="jenis" type="text" id="jenis" class="form-control" placeholder="Rp.---,----,----">
                <!-- @error('jenis')
            <div class="text-danger">{{ $message }}</div>
            @enderror -->
        </div>
        <br>
        <labe for="jenis" class="form-label ">
            <h5>Persentase Skema Bagi Hasil (Peternak - Investor)</h5></label>
            <div class="input-group mb-3 ">

                <button class="btn btn-outline-secondary" type="button" id="button-addon1">Peternak</button>
                <input type="text" class="" placeholder="0-100%" aria-label="Example text with button addon"
                    aria-describedby="button-addon1" style="margin-right:10px ;">

                <div class="uy" style=" background-color: #000; width: 30px; height: 2px; margin-top: 15px; ">

                </div>

                <button class="btn btn-outline-secondary" type="button" id="button-addon1"
                    style="margin-left: 10px;">Investor</button>
                <input type="text" class="" placeholder="0-100%" aria-label="Example text with button addon"
                    aria-describedby="button-addon1">
            </div>
            <br>
            <labe for="jenis" class="form-label ">
                <h5>Perkiraan Berat Kambing Saat Akan Dijual (Berat Kambing Saat Ini : 5Kg)</h5></label>
                <div class="input-group mb-3 ">

                    <input type="text" class="" placeholder="0" aria-label="Example text with button addon"
                        aria-describedby="button-addon1" style="margin-right:10px ;">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1"
                        style="margin-left:-10px ;">Kg</button>


                    <button class="btn btn-outline-secondary" type="button" id="button-addon1"
                        style="margin-left: 10px;">Perkiraan Waktu Penjualan (Opsional)</button>
                    <input type="text" class="" placeholder="X Tahun" aria-label="Example text with button addon"
                        aria-describedby="button-addon1">
                </div>
                <br>
                <labe for="jenis" class="form-label ">
                    <h5>Perkiraan Profit Penjualan Kambing</h5></label>
                    <div class="input-group mb-3  ">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1" style="">Harga
                            Dasar</button>
                        <input type="text" class="" placeholder="Rp.xxx,xxx,xxx - Rp.xxx,xxx,xxx"
                            aria-label="Example text with button addon" aria-describedby="button-addon1"
                            style="width: 300px ;">
                    </div>
                    <div class="input-group mb-3  ">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1" style="">Margin Harga
                        </button>
                        <input type="text" class="" placeholder="+Rp.250,000 / +1Kg"
                            aria-label="Example text with button addon" aria-describedby="button-addon1"
                            style="width: 295px ;">
                        <a href="#" style="margin-left: 50px; color:;">( Apa itu Margin Harga? )</a>
                    </div>

                    <br>

                    <div class="uy" style=" border-bottom: 2px solid #000;">
                    </div>
                    <br>
                    <h5 class="mt-2"><b> Data Domba yang akan Diinvestasikan :</b></h5>
                    <br>
                    <center>
                        <div class="col-md-8   row"
                            style="border: 1px solid #000; margin-top: 10px; height: 230px; background-color: white;">
                            <div class="g col-md-4 " style="margin-left: 15px; padding:0; margin-top: 10px;">
                                <img src="images/slide-4.jpg" alt="" style="width:160px ;height :180px; ">
                            </div>
                            <div class="col">
                                <h5>Domba Ekor Tipis #1</h5>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th></th>
                                            <th scope="col "> : </th>
                                            <th></th>
                                            <th>D0001</th>
                                            <th></th>
                                            <th></th>
                                        </tr>

                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th>Tgl. Lahir</th>
                                            <th></th>
                                            <th scope="col "> : </th>
                                            <th></th>
                                            <th>20/01/2017</th>
                                            <th style="color: white;">pa</th>




                                        </tr>
                                        <tr>
                                            <th>Umur</th>
                                            <th></th>
                                            <th scope="col "> : </th>
                                            <th></th>
                                            <th>5 tahun</th>
                                            <th style="color: white;"></th>


                                        </tr>
                                        <tr>
                                            <th>Berat</th>
                                            <th></th>
                                            <th scope="col "> : </th>
                                            <th></th>
                                            <th>27 kg</th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th>Jenis Kelamin</th>
                                            <th></th>
                                            <th> : </th>
                                            <th></th>
                                            <th>Jantan</th>

                                        </tr>

                                    </tbody>
                                </table>




                            </div>
                        </div>
                    </center>
                    <br>
                    <center>
                        <button type="submit" class="btn btn-primary mt-2">Investasi Sekarang!</button>
                    </center>
                    </fieldset>
    </form>
</div>

@endsection