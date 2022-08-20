<div class="row flex-lg-nowrap">
    <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
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
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link px-2 active" href="#"><i class="iconify"
                                        data-icon="ic:baseline-account-box" data-width="25"
                                        data-height="25"></i></i><span>
                                        Akun</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2" href="#" target="__blank"><i class="iconify"
                                        data-icon="bi:chat-text" data-width="25" data-height="25"></i>
                                    <span> Chat</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2" href="#" target="__blank"><i class="iconify"
                                        data-icon="carbon:star-review" data-width="25" data-height="25"></i><span>
                                        Ulasan</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2" href="#" target="__blank"><i class="iconify"
                                        data-icon="carbon:warning" data-width="25" data-height="25"></i><span>
                                        Komplain</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2" href="#" target="__blank"><i class="iconify"
                                        data-icon="bi:list-stars" data-width="25" data-height="25"></i><span>
                                        Wistlist</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2" href="#" target="__blank"><i class="iconify"
                                        data-icon="carbon:money" data-width="25" data-height="25"></i><span>
                                        Transaksi</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>