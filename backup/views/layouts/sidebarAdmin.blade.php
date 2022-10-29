<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">

            <img src="{{ asset('img/logodomba.png') }}" alt="" style="position: absolute;
                width: 51px;
                height: 51px;
                left: 9px;
                top: 7px;">
            <h6 class="text-primary" style="margin-left: 65%;">Si domba</h6>
            <h3 style="margin-left: 70%;">ADMIN</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ $admin->avatar === null ? asset('img/boy.png') : asset('image/'.$admin->avatar) }}" alt="" style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Selamat Datang</h6>
                <span>{{ Auth::user()->fullname }}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('admin.home') }}" class="nav-item nav-link active">
                <i class="fa-solid fa-table-columns"></i>
                Dashboard</a>
            <a href="{{ route('admin.chat') }}" class="nav-item nav-link"><i class="fa-solid fa-comment"></i>Chat</a>
            <a href="{{ route('accountAdmin.index') }}" class="nav-item nav-link"><i class="fa-solid fa-user-gear"></i>Accounts</a>
            <a href="{{ route('admin.validasi') }}" class="nav-item nav-link">
                <i class="fi fi-rr-document-signed"></i>Validasi
            </a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->