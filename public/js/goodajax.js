var $ = jQuery;

jQuery(document).ready(function () {
    // ini adalah fungsi untuk memunculkan data di datatable
    var datalelang = $('#dataLelang').DataTable({
        "processing": true,
        "ajax": "/getgoods",
        "order": [],
    });
});
