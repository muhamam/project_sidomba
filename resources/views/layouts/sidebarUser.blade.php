<div class="col-3 " style="margin-left: 30px; margin-top:180px; width: 300px;">
    <div class=" bg-light " style="border-radius: 15px;">
        <br>
        <center>
            <table>
                <tr>
                    <td> <span><img src="{{ Auth::user()->avatar === null ? asset('img/boy.png') : asset(Auth::user()->avatar) }}" alt="" style="width: 85px; height:85px; "
                                class="  ml-3 rounded-circle">
                        </span></td>
                    <td>
                        <a href="#" class="  " style="color:#000000 ;">{{ Auth::user()->fullname}}
                        </a>
                        <a href="#" style="font-size:9px;color:#000000 ;">{{ Auth::user()->email}}</a><br>
                        <ul class="d-flex" style="list-style-type: disc; color:red; font-size:12px;">
                            <li>
                                <span style="color: black;">Peternakan</span>
                            </li>
                            <li class="ml-4">
                                <span style="color: black;">Investasi</span>
                            </li>
                        </ul>
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

                <span class="iconify" data-icon="ic:baseline-account-box" data-width="25" data-height="25"
                    style="margin-right: 130px; margin-bottom: -60px;"></span>
                <a href="dashboard_investor.html" class="dropdown-item ">Akun</a>
                <span class="iconify" data-icon="bi:chat-text" data-width="25" data-height="25"
                    style="margin-right: 130px; margin-bottom: -60px;"></span>
                <a href="pasar.html" class="dropdown-item ">Chat</a>
                <span class="iconify" data-icon="carbon:star-review" data-width="25" data-height="25"
                    style="margin-right: 130px; margin-bottom: -60px;"></span>
                <a href="investasi_saya_semua.html" class="dropdown-item">Ulasan</a>
                <span class="iconify" data-icon="carbon:warning" data-width="25" data-height="25"
                    style="margin-right: 130px; margin-bottom: -60px;"></span>
                <a href="investasi_riwayat.html" class="dropdown-item">Komplain</a>
                <span class="iconify" data-icon="bi:list-stars" data-width="25" data-height="25"
                    style="margin-right: 130px; margin-bottom: -60px;"></span>
                <a href="#" class="dropdown-item ml-3">Wishlist</a>
                <span class="iconify" data-icon="carbon:money" data-width="25" data-height="25"
                    style="margin-right: 130px; margin-bottom: -60px;"></span>
                <a href="#" class="dropdown-item ml-3 ">Transaksi</a>
            </div>

        </center>
        <br>
    </div>

</div>