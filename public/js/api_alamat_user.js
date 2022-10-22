// js buat edit alamat user (indra)

let tmpProvince, tmpKotaOrKabupaten, tmpKelurahan;

$.ajax({
    url: 'https://dev.farizdotid.com/api/daerahindonesia/provinsi',
    type: 'get',
    dataType: 'json',
    success: function (result) {
        let province = result.provinsi;
        $.each(province, function (i,result) {
            $('#provinsi').append('<option class="provinsi_option" value="'+ result.id +'">'+ result.nama +'</option>')
        })
    }
})

$('#provinsi').on('change', function () {
    $('.kota_option').remove();
    tmpProvince = $('#provinsi').val();
    console.log('ok');
    $.ajax({
        url: 'https://dev.farizdotid.com/api/daerahindonesia/kota',
        type: 'get',
        dataType: 'json',
        data: {
            'id_provinsi': tmpProvince,
        },
        success: function (result) {
            let kota_kabupaten = result.kota_kabupaten;
            $.each(kota_kabupaten, function (i,result) {
                $('#kota-or-kabupaten').append('<option class="kota_option" value="'+ result.id +'">'+ result.nama +'</option>')
                value = $('#kota-or-kabupaten').val();

            })
            
        }
    })
})

$('#kota-or-kabupaten').on('change', function () {
    $('.kecamatan_option').remove();
    tmpKotaOrKabupaten = $('#kota-or-kabupaten').val();
    console.log('ok');
    $.ajax({
        url: 'https://dev.farizdotid.com/api/daerahindonesia/kecamatan',
        type: 'get',
        dataType: 'json',
        data: {
            'id_kota': tmpKotaOrKabupaten,
        },
        success: function (result) {
            let kecamatan = result.kecamatan;
            $.each(kecamatan, function (i,result) {
                $('#kecamatan').append('<option class="kecamatan_option" value="'+ result.id +'">'+ result.nama +'</option>')
                value = $('#kecamatan').val();

            })
            
        }
    })
})

$('#kecamatan').on('change', function () {
    $('.kelurahan_option').remove();
    tmpKelurahan = $('#kecamatan').val();
    console.log('ok');
    $.ajax({
        url: 'https://dev.farizdotid.com/api/daerahindonesia/kelurahan',
        type: 'get',
        dataType: 'json',
        data: {
            'id_kecamatan': tmpKelurahan,
        },
        success: function (result) {
            let kelurahan = result.kelurahan;
            $.each(kelurahan, function (i,result) {
                $('#kelurahan').append('<option class="kelurahan_option" value="'+ result.id +'">'+ result.nama +'</option>')
                value = $('#kelurahan').val();

            })
            
        }
    })
})
    


    


