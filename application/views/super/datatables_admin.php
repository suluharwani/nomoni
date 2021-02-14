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
<script src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js" type="text/javascript" charset="utf-8" async defer></script>

 
<script type="text/javascript">
 
var table;
 
$(document).ready(function() {
 
    //datatables
    
    table = $('#table').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('admin/ajax_list')?>",
            "type": "POST",
            "data": function ( data ) {
                data.level = $('#level').val();
                data.nama = $('#nama').val();
                data.email = $('#email').val();
                data.alamat = $('#alamat').val();
            }
        },
  columns: [
                {}, //no 
                {}, //nama
                {
                mRender: function (data, type, row) {
                    return '<a href="mailto:'+row[2]+'">'+row[2]+'</a>'
                  }  
                }, //email  <a href="mailto:example@tutorialspark.com?subject=Feedback">
                {}, //no1
                {}, //no2
                {}, //alamat
                {
                  mRender: function (data, type, row) {
                         if(row[6] == 1){
                             return 'Laki-laki'
                        }else {
                          return 'Perempuan'
                        }

                         
                         
                } 
                }, //tanggal
                {
                  mRender: function (data, type, row) {
                         if(row[7] == 1){
                             return '<span class="badge badge-pill badge-danger text-white">SA</span>'
                        }else {
                          return '<span class="badge badge-pill badge-success">A</span>'
                        }
                }
              },
              {                         
                      mRender: function (data, type, row) {
                        if(row[7] != 1){
                          return '<a class="btn btn-sm btn-danger"  href="<?= base_url() ?>admin/ajax_delete/'+row[8]+'" data-toggle="tooltip" data-placement="bottom" title="Hapus Peserta" onclick="return confirm(`Apakah anda yakin untuk menghapus data ini?`)"><span data-feather="trash-2"></span> HAPUS</a>'
                      }else {
                        return '<span class="badge badge-pill badge-warning text-white">Tidak dapat dihapus</span>'
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
 
});
 
</script>
