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
 
<script type="text/javascript">
 
var table;
 
$(document).ready(function() {
 
    //datatables
    table = $('#table').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        

      scrollY: '', /*'65vh'*/
            "iDisplayLength": 5000,    
            dom: 'Bfrtip',
        buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm",
                  orientation: 'landscape',
                  pageSize: 'A2'
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
        ],
            scrollCollapse: true,
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.


        "ajax": {
            "url": "<?php echo site_url('admin/ajax_list_peserta')?>",
            "type": "POST"
           
        },
  columns: [
                {}, //no 
                {mRender: function (data, type, row) {
                    return row[24]
                  }},
                { mRender: function (data, type, row) {
                    return row[2]
                  }  }, //nama
                {mRender: function (data, type, row) {
                return row[3]
                  }},//nbib
                {
                mRender: function (data, type, row) {
                    return row[18]
                  }  
                }, 
                { mRender: function (data, type, row) {
                    return row[4]
                  } },//email
                 {mRender: function (data, type, row) {
                              if(row[6] == 1){
                             return 'Laki-laki'
                        }else if(row[6] == 2){
                             return 'Perempuan'
                        }else {
                             return 'Belum dipilih'
                        }
                }         
              }, 
              {  mRender: function (data, type, row) {
                              if(row[7] == 1){
                             return 'A'
                        }else if(row[7] == 2){
                             return 'B'
                        }else if(row[7] == 3){
                             return 'AB '
                        }else if(row[7] == 4){
                             return 'O '
                        }else {
                             return 'Belum dipilih'
                        }
                }                       
                       
              },{mRender: function (data, type, row) {
                return row[8]+', '+row[25]+''


              }},

              {mRender: function (data, type, row) {
                return row[9]+', '+row[10]+', '+row[11]+''
              }
              },//alamat
              { mRender: function (data, type, row) {
                              if(row[1] == 1){
                             return '5K RUN'
                        }else if(row[1] == 2){
                             return '10K RUN'
                        }else if(row[1] == 3){
                             return 'HALF MARATHON 21K '
                        }else if(row[1] == 4){
                             return 'BIKE '
                        }else {
                          return 'Belum Dipilih'
                        }

                         
                         
                } }, 

              {mRender: function (data, type, row) {
                    return row[13]
                  } }, //no1
              {mRender: function (data, type, row) {
                    return row[14]
                  }}, //no2
                
              {mRender: function (data, type, row) {
  
                          return row[15]
                    

                         
                         
                } 
                }, //tanggal

             

              {mRender: function (data, type, row) {
                return row[16]
              }},//komunitas
              {mRender: function (data, type, row) {
                return row[18]
              }},//kode unik
              {mRender: function (data, type, row) {
                return row[17]
              }},//prediksi waktu
              {mRender: function (data, type, row) {
                              if(row[5] == 1){
                             return 'Sudah Bayar'
                        }else if(row[5] == 0){
                             return 'belum Bayar'
                        }else if(row[5] == 3){
                             return 'HALF MARATHON 21K '
                        }
                }

              },
              {mRender: function (data, type, row) {
               
               if(row[20] == 1){
                      return 'ONLINE'
                 }else if(row[20] == 0){
                      return 'OFFLINE'
                 }
              }}, //metode
              {mRender: function (data, type, row) {
                return row[21]
              }}, //tgl
              {mRender: function (data, type, row) {
                if(row[22]==1) {
                  return "Super Admin ("+row[22]+")"
                }else if (row[22]>1){
                  return "Admin ("+row[22]+")"
                }else{
                  return "Belum Dikonfirmasi"
                }
              }}, //id_admin
              {mRender: function (data, type, row) {
                return row[23]
              }} //nama_admin
            
 
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
