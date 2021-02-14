<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.16/b-1.5.1/b-colvis-1.5.1/b-flash-1.5.1/b-html5-1.5.1/b-print-1.5.1/r-2.2.1/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.16/b-1.5.1/b-colvis-1.5.1/b-flash-1.5.1/b-html5-1.5.1/b-print-1.5.1/r-2.2.1/datatables.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
 
<script type="text/javascript">
 
$(document).ready(function() {
        var table =   $('#table').DataTable({
            scrollY: '', /*'65vh'*/
            scrollCollapse: true,
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source



        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
            scrollCollapse: true,
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.


        "ajax": {
            "url": "<?php echo site_url('admin/ajax_list_peserta_bike')?>",
            "type": "POST"
           
        },
  columns: [
                {}, //no 
                {mRender: function (data, type, row) {
                    return '<a href="#"><b>'+row[18]+'</b></a>'
                  } }, //invoice
                {mRender: function (data, type, row) {
                  return row[21]
                  } }, //tanggal 
                { mRender: function (data, type, row) {
                    return '<b>'+row[2]+'</b>'
                  } }, //nama
                /*{mRender: function (data, type, row) {
                    return row[13]
                  } }, //no1*/
                { mRender: function (data, type, row) {
                        if(row[1] == 1){
                             return '<span class="badge badge-pill badge-primary">5K RUN</span>'
                        }else if(row[1] == 2){
                             return '<span class="badge badge-pill badge-success">10K RUN</span>'
                        }else if(row[1] == 3){
                             return '<span class="badge badge-pill badge-warning text-white">HALF MARATHON 21K</span>'
                        }else if(row[1] == 4){
                             return '<span class="badge badge-pill badge-info">BIKE</span>'
                        }else {
                          return '<span class="badge badge-pill badge-danger">BELUM DIPILIH</span>'
                        }   
                } }, //kategori
                /*{mRender: function (data, type, row) {
                    return row[14]
                  } }, //no2 
                {
                  mRender: function (data, type, row) {
  
                          return row[15]
                  } }, //riwayat penyakit*/
                {mRender: function (data, type, row) {
                        if(row[5] == 1){
                             return '<span class="badge badge-pill badge-success">Sudah Bayar</span>'
                        }else if(row[5] == 0){
                             return '<span class="badge badge-pill badge-warning text-white">Belum Bayar</span>'
                        }
                  } },
                {mRender: function (data, type, row) {               
                  if(row[20] == 1){
                        return '<b class="text-success">Online</b>'
                   }else if(row[20] == 0){
                        return '<b class="text-danger">Offline</b> | by admin'
                   }
                }}, //metode
                { mRender: function (data, type, row) {
                   if (row[19]==0) {

                    return '<a class="btn btn-danger far fa-trash-alt"  href="<?= base_url() ?>admin/ajax_delete_peserta_bike/'+row[12]+'" onclick="return confirm(`Apakah anda yakin untuk menghapus data ini?`)"  title="Hapus Peserta"></a> <a class="btn btn-success far fa-check-circle"  href="<?= base_url() ?>admin/ajax_konfirmasi_bike/'+row[12]+'" onclick="return confirm(`Konfirmasi?`)"  title="Konfirmasi"></a>'

                   }else{
                          return '<a class="btn btn-warning text-white far fa-times-circle"  href="<?= base_url() ?>admin/ajax_batal_konfirmasi_bike/'+row[12]+'" onclick="return confirm(`Apakah anda yakin untuk membatalkan data ini?`)"  title="Batal Konfirmasi"></a>'
                        }
                    
                    }       
              } 
            
 
            ],
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
 
    });
 
    $('#btn-filter').click(function(){ //button filter event click
        table.ajax.reload();  //just reload table
    });
    $('#btn-reset').click(function(){ //button reset event click
        $('#form-filter')[0].reset();
        table.ajax.reload();  //just reload table
    });
     $('#dropdown1').on('change', function () {
     if (!!this.value) {
         table.column(6).search(this.value).draw();
     } else {
         table.column(6).search(this.value).draw();
     }
 } );

 
});
 



</script>
