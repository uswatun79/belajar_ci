$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Dosen');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama_dosen').val('');
        $('#matakuliah').val('');
        $('#hari').val('');
        $('#no_telpon').val('');
        $('#id').val('');
    });


    $('.tampilModalUbah').on('click', function() {
        
        $('#formModalLabel').html('Ubah Data Dosen');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/belajar_ci/dosen/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/belajar_ci/dosen/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama_dosen').val(data.nama_dosen);
                $('#matakuliah').val(data.matakuliah);
                $('#hari').val(data.hari);
                $('#no_telpon').val(data.no_telpon);

                $('#id').val(data.id);
            }
        });
        
    });

});