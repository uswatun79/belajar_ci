$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data petugas');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#alamat').val('');
        $('#bidang').val('');
        $('#id').val('');
    });


    $('.tampilModalUbah').on('click', function() {
        
        $('#formModalLabel').html('Ubah Data petugas');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/belajar_ci/petugas/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/belajar_ci/petugas/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#alamat').val(data.alamat);
                $('#bidang').val(data.bidang);

                $('#id').val(data.id);
            }
        });
        
    });

});