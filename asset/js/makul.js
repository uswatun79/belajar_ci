$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Makul');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#makul_kode').val('');
        $('#makul_nama').val('');
        $('#makul_sks').val('');
        $('#id').val('');
    });


    $('.tampilModalUbah').on('click', function() {
        
        $('#formModalLabel').html('Ubah Data Makul');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-content form').attr('action', 'http://localhost/belajar_ci/makul/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/belajar_ci/makul/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
              $('#makul_kode').val(data.makul_kode);
              $('#makul_nama').val(data.makul_nama);
              $('#makul_sks').val(data.makul_sks);
              $('#id').val(data.id);
            }
        });
        
    });

});


function confirmation(text,text1,text2)
{
    swal({
      title: text,
      text: text1,
      icon: "warning",
      buttons: true,
      dangerMode: true,
      buttons: ["Batal", "Hapus!"],
    })
    .then((willDelete) => {
      if(willDelete) {
       location.href=text2;
      } else {
        swal("Proses dibatalkan!");
      }
    });
}
