@extends('layouts.user')

@section('content')

<div class="col-md-9 mx-auto mt-5 mb-5" style="color: black;">
    <form>
        <center>
            <div class="PHOTO">
                <img src="images/logo-domba-investasi.png" alt="" style="width: 81; height:81px;">
            </div>

            <fieldset>

                <legend>Jual Domba</legend>
                <input type="hidden" name="id">
                <input type="hidden" name="nama_peternak">
                <input type="hidden" name="namafile">
        </center>

        <h5 class="" style=" border-bottom: 2px solid #000;"><b> Keren! Data Domba Kamu Sudah Diperbarui!
                Silakan Masukkan Data Penjualan Dombamuu</b></h5>
        <br>
        <div class="mb-3 ">
            <labe for="jenis" class="form-label ">
                <h5>Harga Jual Domba Anda</h5></label>
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

        <div class="uy" style=" border-bottom: 2px solid #000;">
        </div>
        <br>
        <h5 class="mt-2"><b>Data Domba yang akan Dijual :</b></h5>
        <br>
        <center>
            <div class=" col-md-8   row"
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
            <button type="submit" class="btn btn-primary mt-2">Jual Sekarang!</button>
        </center>
        </fieldset>
    </form>
</div>

@endsection