<!DOCTYPE html>
<html lang="en">

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/home/css/bootstrap.min.css" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:600&amp;subset=latin-ext" rel="stylesheet"> 

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/home/css/hover-min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/home/css/nomoni.min.css">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Palu Nomoni | Half Maratho 2018</title>

  </head>
  <body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm nav nav-pills">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#"><h3><span class="text-primary">Palu</span> Nomoni</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse h5" id="navbarResponsive">
          <ul class="navbar-nav ml-auto align-center">
            <li class="nav-item active">
              <a class="nav-link" href="<?=base_url()?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?=base_url()?>#schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?=base_url()?>#route">Route</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="<?=base_url()?>faq.php">FAQ</a>
            </li>
            
            <!-- disabled-->
            <!--
            <li class="nav-item">
              <a class="nav-link" href="#register">Register</a>
            </li>
            
            <li class="nav-item">
              <span class="nav-link" href="#">&nbsp;</span>
            </li>
            -->
            <li class="nav-item">
              <form class="navbar-form navbar-right" method="POST">
                <div class="input-group">
                  <input type="number" class="form-control border border-primary" name="daftar" placeholder="No. Peserta">
                  <span class="input-group-btn">
                    <button class="btn btn-outline-primary border-left-0" type="submit" name="submit" value="check"><i style="font-size: 21px;" class="material-icons align-top">search</i></button>
                  </span>
                </div>
              </form>     
            </li>&nbsp;
            <li class="nav-item">
              <a class="btn btn-primary" href="<?=base_url()?>#register">Daftar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section>
      <div class="jumbotron jumbotron-fluid mt-5 bg-primary">
      <div class="container text-white">
        <h1 class="display-4">FAQ</h1>
        <p class="lead">Panduan dan penjelasan singkat tentang acara Palu Nomoni</p>
      </div>
    </div>
    </section>

    <!-- Page Content -->
    <section class="py-1 container mb-5">
      <div class="row">
        <div class="col-3">
          <div class="nav flex-column nav-pills text-black" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active text-truncate" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true" title="Apa itu Palu Nomoni?">Apa itu Palu Nomoni?</a>
            <a class="nav-link text-truncate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false" title="Kapan Palu Nomoni akan diselenggarakan?">Kapan Palu Nomoni akan diselenggarakan?</a>
            <a class="nav-link text-truncate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false" title="Kategori apa saja yang dilombakan di Palu Nomoni?">Kategori apa saja yang dilombakan di Palu Nomoni?</a>
            <a class="nav-link text-truncate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false" title="Apakah ada batas usia untuk masing-masing lomba?">Apakah ada batas usia untuk masing-masing lomba?</a>
            <a class="nav-link text-truncate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false" title="Bagaimana cara saya mendaftar di Palu Nomoni?">Bagaimana cara saya mendaftar di Palu Nomoni?</a>
            <a class="nav-link text-truncate" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false" title="Siapa saja yang bisa mendaftar di Palu Nomoni 2018?">Siapa saja yang bisa mendaftar di Palu Nomoni 2018?</a>
            <a class="nav-link text-truncate" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-7" aria-selected="false" title="Dapatkah saya mengubah kategori nomor lari yang sudah saya daftarkan sebelumnya?">Dapatkah saya mengubah kategori nomor lari yang sudah saya daftarkan sebelumnya?</a>
            <a class="nav-link text-truncate" id="v-pills-8-tab" data-toggle="pill" href="#v-pills-8" role="tab" aria-controls="v-pills-8" aria-selected="false" title="Apakah bisa mendaftar pada hari pengambilan race pack dan atau pada hari perlombaan?">Apakah bisa mendaftar pada hari pengambilan race pack dan atau pada hari perlombaan?</a>
          </div>
        </div>
        <div class="col-9">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
              <h4>Apa itu Palu Nomoni?</h4>
              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span> 
            </div>
            <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
              <h4>Kapan Palu Nomoni akan diselenggarakan?</h4>
              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span> 
            </div>
            <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
              <h4>Kategori apa saja yang dilombakan di Palu Nomoni?</h4>
              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>  
            </div>
            <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
              <h4>Apakah ada batas usia untuk masing-masing lomba?</h4>
              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span> 
            </div>
            <div class="tab-pane fade show active" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
              <h4>Siapa saja yang bisa mendaftar di Palu Nomoni 2018?</h4>
              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span> 
            </div>
            <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
              <h4>Dapatkah saya mengubah kategori nomor lari yang sudah saya daftarkan sebelumnya?</h4>
              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span> 
            </div>
            <div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab"> 
              <h4>Apakah bisa mendaftar pada hari pengambilan race pack dan atau pada hari perlombaan?</h4>
              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>  
            </div>
            <div class="tab-pane fade" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-8-tab">
              <h4>Apakah bisa mendaftar pada hari pengambilan race pack dan atau pada hari perlombaan?</h4>
              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span> 
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <div class="bg-dark">
      <div class="container bg-dark text-light pt-3">
        <div class="row">
        <div class="col">
          <h5>Contact Us</h5>
          <address>Address: Jln. Setia Budi No. 61A, Kota Palu. <br/>
          Telp: 08114563031 <br/>
          E-mail: centralcelebesmarathon@gmail.com</address>
        </div>
        <div class="col">
          <h5>Follow Us</h5>
          <div class="row">
            <div class="col-sm-1 hvr-grow-rotate pl-2">
              <a href="https://www.facebook.com/" title="Facebook">
                <svg style="width:30px;height:30px" viewBox="0 0 24 24">
                    <path fill="#fff" d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M18,5H15.5A3.5,3.5 0 0,0 12,8.5V11H10V14H12V21H15V14H18V11H15V9A1,1 0 0,1 16,8H18V5Z" />
                </svg>
              </a>
            </div>
            <div class="col-sm-1 hvr-grow-rotate pl-2">
              <a href="https://www.instagram.com/" title="Instagram">
                <svg style="width:30px;height:30px" viewBox="0 0 24 24">
                <path fill="#fff" d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
                </svg>
              </a>
            </div>
            <div class="col-sm-1 hvr-grow-rotate pl-2">
              <a href="https://www.twitter.com/" title="Twitter">
                <svg style="width:30px;height:30px" viewBox="0 0 24 24">
                  <path fill="#fff" d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33Z" />
                </svg>
              </a>
            </div>
            <div class="col-sm-1 hvr-grow-rotate pl-2">
              <a href="https://plus.google.com/" title="Google+">
                <svg style="width:30px;height:30px" viewBox="0 0 24 24">
                    <path fill="#fff" d="M23,11H21V9H19V11H17V13H19V15H21V13H23M8,11V13.4H12C11.8,14.4 10.8,16.4 8,16.4C5.6,16.4 3.7,14.4 3.7,12C3.7,9.6 5.6,7.6 8,7.6C9.4,7.6 10.3,8.2 10.8,8.7L12.7,6.9C11.5,5.7 9.9,5 8,5C4.1,5 1,8.1 1,12C1,15.9 4.1,19 8,19C12,19 14.7,16.2 14.7,12.2C14.7,11.7 14.7,11.4 14.6,11H8Z" />
                </svg>
              </a>
            </div>
          </div>         
        </div>
        <div class="col">        
        <ul class="list-unstyled mb-0">
          <li>
            <h5>Link</h5>
          </li>
          <li>
            <a href="#" class="text-light">Gallery</a>
          </li>
          <li>
            <a href="#" class="text-light">FAQ</a>
          </li>
        </ul>
        </div>
        </div>
      </div>
    </div>
    <footer class="py-3 bg-dark">
      <div class="container text-center">
        <spam class="m-0 text-left">Copyright &copy; Palu Nomoni 2018</span><a class="float-right" href=""><i class="fas fa-facebook-square"></i></a>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>assets/home/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/home/js/bootstrap.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="<?=base_url()?>assets/home/js/nomoni.js"></script>

  </body>

</html>
