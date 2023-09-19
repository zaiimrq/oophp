$(function () {

    $('.tambah').on('click', function () {
        $('#modalLabel').html('Tambah Data Mahasiswa')
        $('.modal-footer button[type=submit]').html('Tambah Data')
        $('.modal-body form').attr('action', 'http://oophp.test/mahasiswa/tambah')
        $('#nama').val('')
        $('#username').val('')
        $('#email').val('')
    })

    $('.ubah').on('click', function () {

        $('#modalLabel').html('Ubah Data Mahasiswa')
        $('.modal-footer button[type=submit]').html('Ubah Data')
        $('.modal-body form').attr('action', 'http://oophp.test/mahasiswa/ubah')

        let username = $(this).data('username')

        $.ajax({
            url: 'http://oophp.test/mahasiswa/getubah',
            data: {username : username},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama)
                $('#username').val(data.username)
                $('#email').val(data.email)
                $('#jurusan').val(data.jurusan)
                $('#id').val(data.id)
            }
        })
    })
});