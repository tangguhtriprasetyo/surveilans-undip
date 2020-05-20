$(document).ready(function () {
    $('#formResiko').validate({
        rules: {
            nama: {
                required: true,
            },
            usia: {
                required: true,
            },
            email: {
                required: true,
            },
            hp: {
                required: true,
            },
            posisi: {
                required: true,
            },
            wilayah: {
                required: true,
            },
            pekerjaan: {
                required: true,
            },
            tempat_kerja: {
                required: true,
            },
            wfh: {
                required: true,
            },
            kesulitan: {
                required: true,
            },
            ansietas: {
                required: true,
            },
            ketegangan: {
                required: true,
            },
            ketakutan: {
                required: true,
            },
            gangguan: {
                required: true,
            },
            intelek: {
                required: true,
            },
            depresi: {
                required: true,
            },
            somatik: {
                required: true,
            },
            sensorik: {
                required: true,
            },
            kardio: {
                required: true,
            },
            respi: {
                required: true,
            },
            gastro: {
                required: true,
            },
            urogen: {
                required: true,
            },
            otonom: {
                required: true,
            },
            tingkah: {
                required: true,
            },
            terms: {
                required: true
            },
        },
        messages: {
            nama: "Masukkan nama anda",
            usia: {
                required: "Masukkan usia"
            },
            email: {
                required: "Masukkan alamat email anda"
            },
            hp: {
                required: "Masukkan nomer hp anda"
            },
            posisi: {
                required: "Masukkan Nama Kota"
            },
            wilayah: {
                required: "Pilih salah satu"
            },
            pekerjaan: {
                required: "Pilih salah satu"
            },
            tempat_kerja: {
                required: "Masukkan tempat kerja anda"
            },
            wfh: {
                required: "Pilih salah satu"
            },
            kesulitan: {
                required: "Pilih satu atau lebih"
            },
            ansietas: {
                required: "Pilih salah satu"
            },
            ketegangan: {
                required: "Pilih salah satu"
            },
            ketakutan: {
                required: "Pilih salah satu"
            },
            gangguan: {
                required: "Pilih salah satu"
            },
            intelek: {
                required: "Pilih salah satu"
            },
            depresi: {
                required: "Pilih salah satu"
            },
            somatik: {
                required: "Pilih salah satu"
            },
            sensorik: {
                required: "Pilih salah satu"
            },
            kardio: {
                required: "Pilih salah satu"
            },
            respi: {
                required: "Pilih salah satu"
            },
            gastro: {
                required: "Pilih salah satu"
            },
            urogen: {
                required: "Pilih salah satu"
            },
            otonom: {
                required: "Pilih salah satu"
            },
            tingkah: {
                required: "Pilih salah satu"
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