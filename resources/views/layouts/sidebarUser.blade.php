<div class="row  flex-lg-nowrap mr-5 mt-5">
    <div class="col-12 col-lg-auto mb-3" style="width: 300px;">
        <div class="card">
            <div class="card-body">
                <div class="e-navlist e-navlist--active-bg">
                    <div class="profile-usermenu">
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                <img src="{{ Auth::user()->avatar === null ? asset('img/boy.png') : asset(Auth::user()->avatar) }}"
                                    {{-- need redesign system --}} alt="" style="width: 100px; height: 100px; "
                                    class="rounded-circle d-inline">
                            </div>
                            <div class="profile-usertitle-job">
                                {{ Auth::user()->fullname}}
                                <p style="font-size: 10px;">{{ Auth::user()->email}}</p>
                            </div>

                        </div>
                        <div class="dashed-line2"></div>
                        <!-- END SIDEBAR USER TITLE -->
                        <ul class="nav row" >
                            <li class="nav-item col-12">
                                
                                    <a class="nav-link px-2 active" href="{{route('account.index')}}">
                                        <i class="iconify"
                                        data-icon="ic:baseline-account-box" data-width="35"
                                        data-height="35"></i></i>
                                        <span style="font-size :17px;">
                                           
                                                Akun
                                            
                                        </span>
                                    </a>
                                
                            </li>
                            <li class="nav-item col-12">
                                <a class="nav-link px-2" href="{{route('chat.index')}}"><i class="iconify"
                                        data-icon="bi:chat-text" data-width="35" data-height="35"></i>
                                    <span> Chat</span></a>
                            </li>
                            <li class="nav-item col-12">
                                <a class="nav-link px-2" href="{{route('ulasan.indexBelumDiulas')}}"><i class="iconify"
                                        data-icon="carbon:star-review" data-width="35" data-height="35"></i>
                                        <span style="font-size :17px;">
                                        Ulasan
                                        </span>
                                </a>
                            </li>
                            <li class="nav-item col-12">
                                <a class="nav-link px-2" href="{{route('komplain.index')}}"><i class="iconify"
                                        data-icon="carbon:warning" data-width="35" data-height="35"></i><span>
                                        Komplain</span></a>
                            </li>
                            <li class="nav-item col-12">
                                <a class="nav-link px-2" href="{{route('wishlist.index')}}"><i class="iconify"
                                        data-icon="bi:list-stars" data-width="35" data-height="35"></i>
                                        <span style="font-size :17px;">
                                        Wistlist
                                        </span>
                                </a>
                            </li>
                            <li class="nav-item col-12">
                                <a class="nav-link px-2" href="{{route('transaksi.indexDiproses')}}"><i class="iconify"
                                        data-icon="carbon:money" data-width="35" data-height="35"></i>
                                        <span style="font-size :17px;">
                                        Transaksi
                                        </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
