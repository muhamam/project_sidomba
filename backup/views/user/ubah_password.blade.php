@extends('layouts.user')

@section('content')

<div class="container">
    @include('layouts.sidebarUser')

    <div class="col">
        <div class="row">
            <div class="col mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <a class="mt-3" href="{{route('account.index')}}" style="color: #000;">
                                <p class="marker">Biodata</p>
                            </a>
                            <a class="ml-5 mt-3" href="{{route('password.index')}}" style="color: #000;">
                                <p class="marker"> Ubah Password</p>
                            </a>
                            <a class="ml-5 mt-3" href="{{route('address.index')}}" style="color: #000;">
                                <p class="marker"> Alamat</p>
                            </a>
                        </div>

                        <div class="e-profile mt-1">

                            <!-- sebelum di ubah pasword -->
                            <div class="col-4" style="background-color:#ED818C ;">

                                <h6> <b>PERHATIAN</b> : Anda hanya bisa mengubah password sebanyak 2 kali lagi </h6>
                            </div>
                            <!-- sesudah di ubah pasword -->
                            <div class="col-4" style="background-color:#44F060 ;">
                                <span class="iconify" data-icon="akar-icons:check" data-width="30"
                                    data-height="30"></span>
                                <h6>Password berhasil diganti. Anda bisa mengganti password sebanyak 1 kali lagi.
                                </h6>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="margin-right: 300px;"><b> Password Lama</b></label>
                                <input type="password" id="berat" class="form-control"
                                    placeholder="Ketikkan password lama anda disini">

                            </div>

                            <div class="mb-3">
                                <label class="form-label" style="margin-right: 300px;"><b>Password Baru </b>
                                </label>
                                <input type="password" id="berat" class="form-control"
                                    placeholder="Ketikkan Password Baru anda disini">

                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label" style="margin-right: 250px;"><b> Konfirmasi
                                        Password
                                        Baru </b></label>
                                <input name="harga" type="password" id="harga" class="form-control"
                                    placeholder="Ketikkan password baru anda disini">
                                <!-- @error('harga')
            <div class="text-danger">{{ $message }}</div>
            @enderror -->
                            </div>

                            <button type="submit" class="btn btn-primary mt-2">Ganti Password</button>


                        </div>
                    </div>
                </div>

            </div>
        </div>
        </ul>

    </div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
@endsection