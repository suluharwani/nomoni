
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Palu Nomoni 2018">
    <meta name="author" content="WeeR INDONESIA">
    <link rel="icon" href="<?=base_url()?>assets/admin/images/favicon.png">

    <title>Admin Palu Nomoni</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/admin/css/styleadmin.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/r-2.2.1/datatables.min.css"/>


<!-- <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet"> -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Palu Nomoni | User</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Logout</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link text-primary" href="dashboard.html">
                  <span class="text-primary" data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <div class="dropdown">
                  <a class="nav-link dropdown-toggle text-warning" href="#" id="ddpeserta" data-toggle="dropdown">
                    <span class="text-warning" data-feather="list"></span>
                    Peserta
                  </a>
                  <div class="dropdown-menu" aria-labelledby="ddpeserta">
                    <h6 class="dropdown-header">Kategori Lomba</h6>
                    <a class="dropdown-item" href="pesertamarathon.html">Marathon</a>
                    <a class="dropdown-item" href="pesertabike.html">Bike</a>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <div class="dropdown">
                  <a class="nav-link text-success" href="admin.html">
                    <span class="text-success" data-feather="user"></span>
                    Admin
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger" href="kuota.html">
                  <span class="text-danger" data-feather="pie-chart"></span>
                  Kuota & Jersey
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-info">
              <span>Laporan<!--Saved reports--></span>
              <!--<a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>-->
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="laporanmarathon.html">
                  <span data-feather="file-text"></span>
                  Marathon
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="laporanbike.html">
                  <span data-feather="file-text"></span>
                  Bike
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Admin</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <!--<div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>-->
              <button class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#tambahadmin">
                <span data-feather="plus-circle"></span>
                Tambah Admin
              </button>
            </div>
          </div>

<!-- datatable -->
<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>No Darurat</th>
                    <th>Alamat</th>
                    <th>Gender</th>
                    <th>Level</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
 
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>No Darurat</th>
                    <th>Alamat</th>
                    <th>Gender</th>
                    <th>Level</th>
                </tr>
            </tfoot>
        </table>
<!-- datatable -->
          
        </main>
      </div>
    </div>

    <!-- Modal Daftar Admin -->
    <div class="modal fade" id="tambahadmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post">
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label><b>Nama Lengkap:</b></label>
                    <input type="text" class="form-control" name="nama" placeholder="Contoh: Agus Suga" required="">
                  </div>
<!--                   <div class="form-group">
                    <label><b>Username:</b></label>
                    <input type="text" class="form-control" name="" placeholder="Contoh: agusuga" required="">
                  </div> -->
                  <div class="form-group">
                    <label><b>Email:</b></label>
                    <input type="email" class="form-control" name="email" placeholder="Contoh: email@mail.com" required="">
                  </div>
                  <div class="form-group">
                    <label><b>Password:</b></label>
                    <input type="password" class="form-control" name="password" placeholder="Contoh: admin123" required="">
                  </div>

                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label><b>Jenis Kelamin:</b></label>
                    <select class="form-control" name="gender">
                      <option selected="" disabled="">-- Pilih Jenis Kelamin --</option>
                      <option value="1">Laki-laki</option>
                      <option value="2">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label><b>Alamat Lengkap:</b></label>
                    <textarea class="form-control" name="alamat" placeholder="Contoh: Jl. Raya Ramai No. xx"></textarea>
                  </div>
                  <div class="form-group">
                    <label><b>No. Handphone:</b></label>
                    <input type="text" class="form-control" name="hp" placeholder="Contoh: 081xxxxxxxxx" required="">
                  </div>
                  <div class="form-group">
                    <label><b>No. Handphone Darurat (Optional):</b></label>
                    <input type="text" class="form-control" name="hp2" placeholder="Contoh: 081xxxxxxxxx">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="submit" name="submit" value="submit"  class="btn btn-info"><span class="text-white" data-feather="save"></span>Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/jquery/jquery-2.2.3.min.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.min.js')?>"></script>
 
 



    <script src="<?=base_url()?>assets/admin/js/jquery.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?=base_url()?>assets/admin/js/jquery.min.js"><\/script>')</script>
    <script src="<?=base_url()?>assets/admin/js/popper.min.js"></script>
    <script src="<?=base_url()?>assets/admin/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/r-2.2.1/datatables.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
        $('#lookup').DataTable();
      } );
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>



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
                {}, //tanggal
                {}, //tanggal
                {}, //tanggal
                {}, //tanggal
                {}, //tanggal
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
                             return 'Super Admin'
                        }else {
                          return 'Admin'
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



  </body>
</html>
