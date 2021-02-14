
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
                <a class="nav-link active" href="laporanbike.html">
                  <span data-feather="file-text"></span>
                  Bike
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Laporan Bike</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Copy</button>
                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" id="ddexport" data-toggle="dropdown">Export</button>
                <div class="dropdown-menu" aria-labelledby="ddexport">
                  <a class="dropdown-item" href="#">Excel</a>
                  <a class="dropdown-item" href="#">CSV</a>
                  <a class="dropdown-item" href="#">PDF</a>
                </div>
              </div>
              <div class="dropdown">
                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" id="ddwaktu" data-toggle="dropdown">
                  <span data-feather="calendar"></span>
                  This week
                </button>
                <div class="dropdown-menu" aria-labelledby="ddwaktu">
                  <input type="date" name="" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="lookup" class="table table-striped">
                      <thead>
                        <th>#</th>
                        <th>Nama Peserta</th>
                        <th>Kategori</th>
                        <th>No. Handphone</th>
                        <th>Tindakan</th>
                      </thead>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </main>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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
  </body>
</html>
