$(document).ready(function () {
    $('#formDeteksi').validate({
        rules: {
            nama: {
                required: true,
            },
            gender: {
                required: true,
            },
            ttl: {
                required: true,
            },
            email: {
                required: true,
            },
            hp: {
                required: true,
            },
            kerabat: {
                required: true,
            },
            tinggal: {
                required: true,
            },
            alamat: {
                required: true,
            },
            asal: {
                required: true,
            },
            pendidikan: {
                required: true,
            },
            status: {
                required: true,
            },
            pekerjaan: {
                required: true,
            },
            gejala: {
                required: true,
            },
            durasi: {
                required: false,
            },
            radius: {
                required: true,
            },
            kontak: {
                required: true,
            },
            karantina: {
                required: true,
            },
            prinsip: {
                required: false,
            },
            keluar: {
                required: false,
            },
            penyemprotan: {
                required: true,
            },
            physical: {
                required: true,
            },
            kerumunan: {
                required: true,
            },
            terms: {
                required: true
            },
        },
        messages: {
            nama: {
                required: "Masukkan nama anda"
            },
            gender: {
                required: "Masukkan jenis kelamin"
            },
            ttl: {
                required: "Masukkan tempat dan tanggal lahir"
            },
            email: {
                required: "Masukkan alamat email anda"
            },
            hp: {
                required: "Masukkan nomer hp anda"
            },
            kerabat: {
                required: "Masukkan nomer kerabat anda"
            },
            tinggal: {
                required: "Pilih salah satu"
            },
            alamat: {
                required: "Masukkan alamat lengkap"
            },
            asal: {
                required: "Tuliskan nama Kota dan Provinsi"
            },
            pendidikan: {
                required: "Pilih salah satu"
            },
            status: {
                required: "Pilih salah satu"
            },
            pekerjaan: {
                required: "Pilih salah satu"
            },
            gejala: {
                required: "Pilih satu atau lebih"
            },
            durasi: {
                required: "Masukkan durasi"
            },
            radius: {
                required: "Pilih salah satu"
            },
            kontak: {
                required: "Pilih salah satu"
            },
            karantina: {
                required: "Pilih salah satu"
            },
            prinsip: {
                required: "Pilihan satu / lebih"
            },
            keluar: {
                required: "Pilihan satu / lebih"
            },
            penyemprotan: {
                required: "Pilih salah satu"
            },
            physical: {
                required: "Pilih salah satu"
            },
            kerumunan: {
                required: "Pilih satu / lebih"
            },
            terms: "Please accept our terms"
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