@extends('layouts.user')

@section('content')

<div class="col-md-7 mx-auto mt-5 mb-5">
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

        <h5 class="" style=" border-bottom: 2px solid #000;"><b> Sebelum menjual, perbarui dulu data domba kamu
                ya!</b></h5>
        <br>
        <div class="mb-3">
            <label for="jenis" class="form-label">Berat Domba Saat Ini (Kg)</label>
            <input name="jenis" type="text" id="jenis" class="form-control"
                placeholder="Berapa timbangan berat dari domba yang ingin Anda investasikan?">
            <!-- @error('jenis')
            <div class="text-danger">{{ $message }}</div>
            @enderror -->
        </div>
        <br>

        <div class="form-group">
            <label for="berkas" class="form-label">Foto Domba Saat Ini (Ukuran Maksimal 2MB)</label>
            <input type="file" name="image" id="harga" class="image form-control">
            <!-- @error('berkas')
            <div class="text-danger">{{ $message }}</div>
            @enderror -->
        </div>
        <br>

        <div class="uy" style=" border-bottom: 2px solid #000;">
        </div>
        <br>
        <h5 class="mt-2"><b> Data Domba yang akan Dijual :</b></h5>


        <div class=" row" style="border: 1px solid #000; margin-top: 10px; height: 230px; background-color: white;">
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
        <center>
            <button type="submit" class="btn btn-primary mt-2">Perbarui Data & Lanjut</button>
        </center>
        </fieldset>
    </form>
</div>

@endsection