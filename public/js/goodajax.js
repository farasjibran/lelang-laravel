var $ = jQuery;

jQuery(document).ready(function () {
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

    // Tambah barang
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
});
