<div class="col-3" style="margin-left: 30px; margin-top:110px;">
    <div class=" bg-light " style=" border-radius:15px;">
        <center>
            <table>
                <tr>
                    <td> <span><img
                                src="{{ Auth::user()->avatar === null ? asset('img/boy.png') : Auth::user()->avatar }}"
                                alt="" style="width: 85px; height:85px; " class="  ml-3 rounded-circle">
                        </span></td>
                    <td>
                        <a href="#" class="" style="color:#000000 ;">{{Auth::user()->fullname}}
                        </a>
                        <a href="#" style="font-size:9px;color:#000000 ;">{{Auth::user()->email}}</a><br>

                        <a href="#" style="color:#000000 ;">ID Investor : XXX</a>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </table>
            <div class="garis" style="width: 95%; height: 2px; background-color: black; margin-left: 5px; margin-right:
                    5px;">
                <p></p>
            </div>
            <div class="dalam ">
                <span class="iconify" data-icon="carbon:home" data-width="25" data-height="25"
                    style="margin-right: 130px; margin-bottom: -60px;"></span>
                <a href="#" class="dropdown-item ">Beranda</a>
                <span class="iconify" data-icon="healthicons:market-stall-outline" data-width="25" data-height="25"
                    style="margin-right: 130px; margin-bottom: -60px;"></span>
                <a href="#" class="dropdown-item ">Market</a>
                <span class="iconify" data-icon="mdi:cow" data-width="25" data-height="25"
                    style="margin-right: 130px; margin-bottom: -60px;"></span>
                <a href="investasi_saya_semua.html" class="dropdown-item">Investasi</a>
                <span class="iconify" data-icon="ant-design:history-outlined" data-width="25" data-height="25"
                    style="margin-right: 130px; margin-bottom: -60px;"></span>
                <a href="#" class="dropdown-item">History</a>
                <span class="iconify" data-icon="emojione-monotone:money-bag" data-width="25" data-height="25"
                    style="margin-right: 130px; margin-bottom: -60px;"></span>
                <a href="#" class="dropdown-item ml-3">Pencairan Dana</a>
                <br>
            </div>

        </center>
    </div>

</div>