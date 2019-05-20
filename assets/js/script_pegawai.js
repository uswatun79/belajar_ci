$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Pegawai');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama_pegawai').val('');
        $('#nip_pegawai').val('');
        $('#alamat_pegawai').val('');
        $('#hp_pegawai').val('');
        $('#id').val('');
    });


    $('.tampilModalUbah').on('click', function() {
        
        $('#formModalLabel').html('Ubah Data Pegawai');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/belajar_ci/pegawai/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/belajar_ci/pegawai/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama_pegawai').val(data.nama_pegawai);
                $('#nip_pegawai').val(data.nip_pegawai);
                $('#alamat_pegawai').val(data.alamat_pegawai);
                $('#hp_pegawai').val(data.hp_pegawai);
                $('#id').val(data.id);
            }
        });
        
    });

});