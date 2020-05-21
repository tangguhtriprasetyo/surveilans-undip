$(document).ready(function () {
    $('#formApd').validate({
        rules: {
            jenis: {
                required: true,
            },
            nama: {
                required: true,
            },
            alamat: {
                required: true,
            },
            kontak: {
                required: true,
            },
            daerah: {
                required: true,
            },
            psbb: {
                required: true,
            },
            koordinasi: {
                required: true,
            },
            pelatihan: {
                required: true,
            },
            kasus: {
                required: true,
            },
            rapid: {
                required: true,
            },
            swab: {
                required: true,
            },
            isolasi: {
                required: true,
            },
            kondisi: {
                required: true,
            },
            sanitizer: {
                required: true,
            },
            thermo: {
                required: true,
            },
            dokter: {
                required: false,
            },
            laboran: {
                required: false,
            },
            perawat: {
                required: false,
            },
            driver: {
                required: false,
            },
            cs: {
                required: false,
            },
            security: {
                required: false,
            },
            bedah: {
                required: false,
            },
            n95: {
                required: false,
            },
            faceshield: {
                required: false,
            },
            goggle: {
                required: false,
            },
            sarungtangan: {
                required: false,
            },
            hazmat: {
                required: false,
            },
            caps: {
                required: false,
            },
            bilik_swab: {
                required: false,
            },
            cover: {
                required: false,
            },
            dekontaminan: {
                required: false,
            },
            headbox: {
                required: false,
            },
            asal: {
                required: true,
            },
            bantuan: {
                required: true,
            },
            kebutuhan: {
                required: true,
            },
        },
        messages: {
            jenis: {
                required: "Pilih salah satu"
            },
            nama: {
                required: "Masukkan nama instansi"
            },
            alamat: {
                required: "Masukkan alamat instansi"
            },
            kontak: {
                required: "Masukkan kontak yang dapat dihubungi"
            },
            daerah: {
                required: "Masukkan Kota"
            },
            psbb: {
                required: "Pilih salah satu"
            },
            koordinasi: {
                required: "Pilih salah satu"
            },
            pelatihan: {
                required: "Pilih salah satu"
            },
            kasus: {
                required: "Pilih salah satu"
            },
            rapid: {
                required: "Pilih salah satu"
            },
            swab: {
                required: "Pilih salah satu"
            },
            isolasi: {
                required: "Pilih salah satu"
            },
            kondisi: {
                required: "harap diisi"
            },
            sanitizer: {
                required: "Masukkan durasi"
            },
            thermo: {
                required: "Pilih salah satu"
            },
            dokter: {
                required: "Pilih salah satu"
            },
            laboran: {
                required: "Pilih salah satu"
            },
            perawat: {
                required: "Pilih salah satu"
            },
            driver: {
                required: "Pilihan satu / lebih"
            },
            cs: {
                required: "Pilihan satu / lebih"
            },
            security: {
                required: "Pilih salah satu"
            },
            bedah: {
                required: "Pilih salah satu"
            },
            n95: {
                required: "Pilih satu / lebih"
            },
            faceshield: {
                required: "Pilih salah satu",
            },
            goggle: {
                required: "Pilih salah satu",
            },
            sarungtangan: {
                required: "Pilih salah satu",
            },
            hazmat: {
                required: "Pilih salah satu",
            },
            caps: {
                required: "Pilih salah satu",
            },
            bilik_swab: {
                required: "Pilih salah satu",
            },
            cover: {
                required: "Pilih salah satu",
            },
            dekontaminan: {
                required: "Pilih salah satu",
            },
            headbox: {
                required: "Pilih salah satu",
            },
            asal: {
                required: "Pilih salah satu",
            },
            bantuan: {
                required: "Pilih salah satu",
            },
            kebutuhan: {
                required: "Sebutkan bantuan yang diperlukan",
            },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});