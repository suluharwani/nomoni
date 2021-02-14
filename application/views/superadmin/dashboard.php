
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
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Palu Nomoni | <?=$nama;?></a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?=base_url()?>login/logout">Logout</a>
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
                  <a class="nav-link text-success" href="admin/anggota">
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
            <h1 class="h2">Dashboard</h1>
            <!--<div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>-->
          </div>

          <div class="row">
            <div class="col-lg-3" style="margin-bottom: 10px">
              <div class="card border-success">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-7">
                      <b>Total Marathon</b> <br>
                      <span class="text-success" data-feather="bar-chart-2"></span>
                    </div>
                    <div class="col-lg-5">
                      <h2 class="text-center text-success">1000</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3" style="margin-bottom: 10px">
              <div class="card border-primary">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-7">
                      <b>Total Bike</b> <br>
                      <span class="text-primary" data-feather="bar-chart-2"></span>
                    </div>
                    <div class="col-lg-5">
                      <h2 class="text-center text-primary">1000</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3" style="margin-bottom: 10px">
              <div class="card border-warning">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-7">
                      <b>Total Peserta</b> <br>
                      <span class="text-warning" data-feather="bar-chart-2"></span>
                    </div>
                    <div class="col-lg-5">
                      <h2 class="text-center text-warning">1000</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3" style="margin-bottom: 10px">
              <div class="card border-danger">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-7">
                      <b>Total Pendaftar</b> <br>
                      <span class="text-danger" data-feather="bar-chart-2"></span>
                    </div>
                    <div class="col-lg-5">
                      <h2 class="text-center text-danger">1000</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row" style="margin-top: 30px;">
            <div class="col-lg-6" style="margin-bottom: 10px">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Traffic Pendaftar</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Dalam 1 minggu</h6>
                  <canvas class="my-4 w-100" id="myChart" width="900" height="470"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-12">
                      <h5 class="card-title">Total Biaya Pendaftaran</h5>
                      <hr>
                      <div class="row">
                        <div class="col-lg-6">
                          <h6>Marathon</h6>
                          <h3 class="text-success"><b>IDR. 999.999.999</b></h3>
                        </div>
                        <div class="col-lg-6">
                          <h6>Bike</h6>
                          <h3 class="text-primary"><b>IDR. 999.999.999</b></h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card" style="margin-top: 20px;">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6">
                      <h5 class="card-title">Sisa Kuota</h5>
                      <hr>
                      <h6>Marathon</h6>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                      </div>
                      <br>
                      <h6>Bike</h6>
                      <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">98%</div>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <h5 class="card-title">Status Pendaftaran</h5>
                      <hr>
                      <h6>Online</h6>
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">82%</div>
                      </div>
                      <br>
                      <h6>Offline</h6>
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100">43%</div>
                      </div>
                    </div>
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
