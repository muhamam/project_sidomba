@extends('layouts.user')

@section('content')

<div class="col-md-6 mx-auto mt-5 mb-5">
    <form>
        <center>
            <div class="PHOTO">
                <img src="img/domba_input.png" alt="" style="width: 81; height:81px;">
            </div>

            <fieldset>

                <legend>Input Data Domba </legend>
                <input type="hidden" name="id">
                <input type="hidden" name="nama_peternak">
                <input type="hidden" name="namafile">
        </center>
        <div class="mb-3">
            <label for="jenis" class="form-label"> ID Domba (Sesuai RFID/Input Manual)</label>
            <input name="jenis" type="text" id="jenis" class="form-control"
                placeholder="JENIS DOMBA APA YANG KMU PUNYA?">
            <!-- @error('jenis')
            <div class="text-danger">{{ $message }}</div>
            @enderror -->
        </div>
        <div class="mb-3">

            <label for="jenis" class="form-label">Tanggal Lahir Domba (Umur Domba akan ditentukan dari tanggal
                lahirnya)</label>
            <input name="jenis" type="text" id="jenis" class="datepicker form-control" placeholder="TGL/BULAN/TAHUN">


            <!-- @error('umur')
            <div class="text-danger">{{ $message }}</div>
            @enderror -->
        </div>
        <div class="mb-3">
            <label for="berat" class="form-label">Berat Domba Saat Ini (Kg)</label>
            <input name="berat" type="text" id="berat" class="form-control" placeholder="MASUKAN BERAT DOMBAMU!">
            <!-- @error('berat')
            <div class="text-danger">{{ $message }}</div>
            @enderror -->
        </div>

        <div class="mb-3">
            <label for="kelamin" class="form-label">JENIS KELAMIN DOMBA</label>
            <select id="kelamin" class="form-select form-control" name="kelamin">
                <option value="betina">
                    <!-- {{ old('kelamin') == 'betina' ? 'selected' : '' }} -->
                    BETINA
                </option>
                <option value="betina">
                    <!-- {{ old('kelamin') == 'Jantan' ? 'selected' : '' }} -->
                    JANTAN
                </option>
            </select>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Jenis Domba</label>
            <input name="harga" type="text" id="harga" class="form-control" placeholder="masukan jenis dombamu">
            <!-- @error('harga')
            <div class="text-danger">{{ $message }}</div>
            @enderror -->
        </div>
        <div class="form-group">
            <label for="berkas" class="form-label">Foto Domba (max 2mb)</label>
            <input type="file" name="image" id="harga" class="image form-control">
            <!-- @error('berkas')
            <div class="text-danger">{{ $message }}</div>
            @enderror -->
        </div>
        <center>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </center>
        </fieldset>
    </form>
</div>

@endsection