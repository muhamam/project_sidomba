
    document.querySelector(".peternakan").addEventListener("click", function() {
        Swal.fire({
            title: "Anda belum mendaftarkan peternakan anda",
            text: "Silahkan daftarkan terlebih dahulu peternakan anda",
            icon: "error",
            footer: "<a href='/user/aktivasi/peternak'>Daftarkan Peternakan Anda</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='#'>Syarat & Ketentuan</a>",
        });
    });
    document.querySelector(".investasi").addEventListener("click", function() {
        Swal.fire({
            title: "Anda belum mengaktifkan akun investor anda",
            text: "Silahkan daftarkan terlebih dahulu akun investor anda",
            icon: "error",
            footer: '<a href="/user/aktivasi/investor">Aktifkan Akun Investor</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Syarat & Ketentuan</a>',
        });
    });
    document.querySelector(".proses").addEventListener("click", function() {
        swal({
            title: "Sedang Dalam Proses",
            text: "Masih Proses Pengembangan Bro >_<",
            icon: "info",
            confirmButtonText: "OKAY",
            confirmButtonColor: "#00ff55",
            reverseButtons: true,
        });
    });
    document.querySelector(".proses2").addEventListener("click", function() {
        swal({
            title: "Sedang Dalam Proses",
            text: "Masih Proses Pengembangan Bro >_<",
            icon: "info",
            confirmButtonText: "OKAY",
            confirmButtonColor: "#00ff55",
            reverseButtons: true,
        });
    });
    document.querySelector(".proses3").addEventListener("click", function() {
        swal({
            title: "Sedang Dalam Proses",
            text: "Masih Proses Pengembangan Bro >_<",
            icon: "info",
            confirmButtonText: "OKAY",
            confirmButtonColor: "#00ff55",
            reverseButtons: true,
        });
    });
    