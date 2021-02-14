 <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link text-primary" href="<?=base_url()?>/admin">
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
                    <a class="dropdown-item" href="<?=base_url()?>admin/peserta_marathon">Marathon</a>
                    <a class="dropdown-item" href="<?=base_url()?>admin/peserta_bike">Bike</a>
                  </div>
                </div>
              </li>
              <?php if ($level==1) {?>
               <li class="nav-item">
                <div class="dropdown">
                  <a class="nav-link text-success" href="<?=base_url()?>admin/anggota">
                    <span class="text-success" data-feather="user"></span>
                    Admin
                  </a>
                </div>
              </li>
             <li class="nav-item">
                <a class="nav-link text-danger" href="<?=base_url()?>admin/kuota">
                  <span class="text-danger" data-feather="pie-chart"></span>
                  Kuota & Jersey
                </a>
              </li>
             <?php } ?>


            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-info">
              <span>Laporan<!--Saved reports--></span>
              <!--<a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>-->
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="<?=base_url()?>admin/laporanmarathon">
                  <span data-feather="file-text"></span>
                  Marathon
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=base_url()?>admin/laporanbike">
                  <span data-feather="file-text"></span>
                  Bike
                </a>
              </li>
            </ul>
          </div>
        </nav>