var $ = jQuery;

jQuery(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // show modal add
    jQuery('.addbtn').on('click', function () {

        $('#addModal').modal('show');

    });

    // ini adalah fungsi untuk memunculkan data di datatable
    var datalelang = $('#dataLelang').DataTable({
        "processing": true,
        "ajax": "/getgoods",
        "order": [],
    });

    // function add
    $(document).on('submit', '#formtambah', function (event) {
        event.preventDefault();
        var namabarang = $('#nmabarang').val();
        var hargabarang = $('#hrgbarang').val();
        var deskripsiitem = $('#deskitem').val();
        var kategoriitem = $('#ktgritem').val();
        var extension = $('#user_image').val().split('.').pop().toLowerCase();
        if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert("Invalid Image");
            $('#user_image').val('');
            return false;
        }

        if (namabarang != '' && hargabarang != '' && deskripsiitem != '' && kategoriitem != '') {
            $.ajax({
                type: "post",
                url: "/addgoods",
                beforeSend: function () {
                    swal({
                        title: 'Menunggu',
                        html: 'Memproses data',
                        onOpen: () => {
                            swal.showLoading()
                        }
                    })
                },
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function () {
                    swal({
                        type: 'success',
                        title: 'Tambah Barang',
                        text: 'Anda Berhasil Menambah Barang'
                    })
                    $('#formtambah')[0].reset();
                    $('#addModal').modal('hide');
                    datalelang.ajax.reload(null, false);
                },
            });
        } else {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Bother fields are required!',
            });
        }
    });

    // function get id
    $(document).on('click', '.editbtn', function () {
        var id_barang = $(this).attr("id");
        $.ajax({
            url: "/getid",
            type: "post",
            data: {
                id_barang: id_barang
            },
            dataType: "JSON",
            success: function (data) {
                $('#editModal').modal('show');
                $('#namabarang').val(data.nama_barang);
                $('#hargabarang').val(data.harga_awal);
                $('#deskripsiitem').val(data.deskripsi_barang);
                $('#kategoriitem').val(data.kategori_barang);
                $('#status').val(data.status);
                $('#id_barang').val(id_barang);
                $('#foto_barang').html(data.foto_barang);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.responseText);
            }
        });
    });

    // function edit
    $(document).on('submit', '#formedit', function (event) {
        event.preventDefault();
        var namabarang = $('#namabarang').val();
        var hargabarang = $('#hargabarang').val();
        var deskripsiitem = $('#deskripsiitem').val();
        var kategoriitem = $('#kategoriitem').val();
        var status = $('#status').val();
        var extension = $('#image').val().split('.').pop().toLowerCase();
        if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert("Invalid Image");
            $('#image').val('');
            return false;
        }

        if (namabarang != '' && hargabarang != '' && deskripsiitem != '' && kategoriitem != '' && status != '') {
            $.ajax({
                type: "post",
                url: "/editgoods",
                beforeSend: function () {
                    swal({
                        title: 'Menunggu',
                        html: 'Memproses data',
                        onOpen: () => {
                            swal.showLoading();
                        }
                    });
                },
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function () {
                    swal({
                        type: 'success',
                        title: 'Edit Barang',
                        text: 'Anda Berhasil Mengedit Barang'
                    });
                    $('#formedit')[0].reset();
                    $('#editModal').modal('hide');
                    datalelang.ajax.reload(null, false);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.responseText);
                }
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Bother fields are required!',
            });
        }
    });

    // function delete
    $(document).on('click', '.deletebtn', function () {
        var id_barang = $(this).attr("id");
        swal({
            title: 'Konfirmasi',
            text: "Apakah anda yakin ingin menghapus ",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            cancelButtonText: 'Tidak',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "/deletegoods",
                    type: "post",
                    beforeSend: function () {
                        swal({
                            title: 'Menunggu',
                            html: 'Memproses data',
                            onOpen: () => {
                                swal.showLoading()
                            }
                        })
                    },
                    data: {
                        id_barang: id_barang
                    },
                    success: function (data) {
                        swal(
                            'Hapus',
                            'Berhasil Terhapus',
                            'success'
                        )
                        datalelang.ajax.reload(null, false)
                    }
                });
            } else if (result.dismiss === swal.DismissReason.cancel) {
                swal(
                    'Batal',
                    'Anda membatalkan penghapusan',
                    'error'
                )
            };
        });

    });
});
