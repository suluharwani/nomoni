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
  <body data-spy="scroll">
    <span class="invisible" id="home">#</span>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm nav nav-pills" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#"><h3><span class="text-primary">Palu</span> Nomoni</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse h5" id="navbarResponsive">
          <ul class="navbar-nav ml-auto align-center">
            <li class="nav-item ">
              <a class="nav-link" href="#home">Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#route">Route</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>faq.php">FAQ</a>
            </li>
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
              <a class="btn btn-primary" href="#register">Daftar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Carousel -->
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('images/jumb1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/jumb2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/jumb3.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <section class="py-5">
      <div class="container">       
        <div class="row">
          <div class="co-md-6">
            <!--<img src="holder.js/500x250/?text=Gambar/Video">-->
            <iframe  width="560" height="315" src="https://www.youtube.com/embed/zhgc07KgLME" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="col align-self-start">
            <h1 class="text-left">About Us</h1>
            <hr class="float-left" style="background-color: green; height: 2px;" width="100px" /><br><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
      <span class="invisible" id="schedule">#</span>
    </section>

    <!-- Schedule -->
    <section class="py-5 bg-dark text-white" id="">
      <div class="container">
        <div class="row">
          <div class="col align-self-center">
            <h1 class="text-center">Schedule</h1>
            <hr style="background-color: green; height: 2px;" width="100px" /><br><br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 pt-2">
            <img class="img-fluid" src="<?=base_url()?>assets/home/images/office.jpg">
          </div>
          <div class="col-md-4 pt-2">
            <img class="img-fluid" src="<?=base_url()?>assets/home/images/office.jpg">
          </div>
          <div class="col-md-4 pt-2">
            <img class="img-fluid" src="<?=base_url()?>assets/home/images/office.jpg">
          </div>
        </div>
      </div>
    </section>

    <!-- Remaining Quote -->
    <section class="py-5 bg-dark text-white">
      <div class="container">       
        <div class="row">
          <div class="col">
            <h1 class="text-center">Remaining Quote</h1>
            <hr class="" style="background-color: green; height: 2px;" width="100px" /><br><br>
            <div class="row">
              <div class="col-md-4 text-center"><h1 class="display-3">999</h1><hr class="" style="background-color: red; height: 2px;" width="25%" /><h1 class="display-5">Half Marathon 21K</h1></div>
              <div class="col-md-4 text-center"><h1 class="display-3">999</h1><hr class="" style="background-color: blue; height: 2px;" width="25%" /><h1 class="display-5">10K RUN</h1></div>
              <div class="col-md-4 text-center"><h1 class="display-3">999</h1><hr class="" style="background-color: yellow; height: 2px;" width="25%" /><h1 class="display-5">5K RUN</h1></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Registration Fee -->
    <section class="py-5">
      <div class="container">       
        <div class="row">
          <div class="col">
            <h1 class="text-center">Registration Fee</h1>
            <hr class="" style="background-color: green; height: 2px;" width="100px" /><br><br>
            <div class="">
              <div class="row">
                <div class="col-md-4" style="margin-bottom: 10px;">
                  <div class="card border border-danger w-100">
                    <div class="card-body">
                      <h3 class="card-title">Half Marathon 21K</h3>
                      <h4 class="text-muted">Rp. 0.00</h4>
                      <ul class="list-unstyled">  
                          <li><i class="material-icons align-top">navigate_next</i> Nomor Dada (BIB) </li>
                          <li><i class="material-icons align-top">navigate_next</i> Jersey </li>
                          <li><i class="material-icons align-top">navigate_next</i> Finisher Jersey</li>
                          <li><i class="material-icons align-top">navigate_next</i> Finisher Medal</li>
                      </ul>
                      <span class="float-right">
                        <a href="#route" class="card-link">Route</a>
                        <a href="#register" class="card-link btn btn-primary">Register</a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="margin-bottom: 10px;">
                  <div class="card border border-info w-100">
                    <div class="card-body">
                      <h3 class="card-title">10K RUN</h3>
                      <h4 class="text-muted">Rp. 0.00</h4>
                      <ul class="list-unstyled">  
                          <li><i class="material-icons align-top">navigate_next</i> Nomor Dada (BIB) </li>
                          <li><i class="material-icons align-top">navigate_next</i> Jersey </li>
                          <li><i class="material-icons align-top">navigate_next</i> Finisher Jersey</li>
                          <li><i class="material-icons align-top">navigate_next</i> Finisher Medal</li>
                      </ul>
                      <span class="float-right">
                        <a href="#route" class="card-link">Route</a>
                        <a href="#register" class="card-link btn btn-primary">Register</a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="margin-bottom: 10px;">
                  <div class="card border border-warning w-100">
                    <div class="card-body">
                      <h3 class="card-title">5K RUN</h3>
                    <h4 class="text-muted">Rp. 0.00</h4>
                    <ul class="list-unstyled">  
                        <li><i class="material-icons align-top">navigate_next</i> Nomor Dada (BIB) </li>
                        <li><i class="material-icons align-top">navigate_next</i> Jersey </li>
                        <li><i class="material-icons align-top">navigate_next</i> Finisher Jersey</li>
                        <li><i class="material-icons align-top">navigate_next</i> Finisher Medal</li>
                    </ul>
                    <span class="float-right">
                      <a href="#route" class="card-link">Route</a>
                      <a href="#register" class="card-link btn btn-primary">Register</a>
                    </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <span class="invisible" id="route">#</span>
    </section>

    <!-- Route -->
    <section class="py-5">
      <div class="container">       
        <div class="row">
          <div class="col">
            <h1 class="text-center">Route</h1>
            <hr class="" style="background-color: green; height: 2px;" width="10%" /><br><br>
            <div class="row">
              <div class="col-md-4 text-center pt-2">
                <img src="<?=base_url()?>assets/home/images/bikeroute.jpg" class="img-fluid">
              </div>
              <div class="col-md-4 text-center pt-2">
                <img src="<?=base_url()?>assets/home/images/marathonroute.jpg" class="img-fluid">
              </div>
              <div class="col-md-4 text-center pt-2">
                <img src="<?=base_url()?>assets/home/images/marathonroute.jpg" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Jersey & Medals -->
    <!--<section class="py-5 bg-dark text-white" id="">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1 class="">Jersey & Medals</h1>
            <hr class="" style="background-color: green; height: 2px;" width="150px" /><br><br>
          </div>
        </div>       
        <div class="row">
          <div class="col-lg-6 pt-4">
            <img class="img-fluid" src="https://centralcelebesmarathon.com/assets/template_web/images/jersey.jpg" class="img-responsive" alt="Responsive image">
          </div>
          <div class="col-lg-6 pt-4">
            <img class="img-fluid" src="https://centralcelebesmarathon.com/assets/template_web/images/medali.jpg" class="img-responsive" alt="Responsive image">
          </div>
          <div class="col-lg-12 pt-4">
            <img class="img-fluid" src="https://centralcelebesmarathon.com/assets/template_web/images/finisher.jpg" class="img-responsive" alt="Responsive image">
          </div>
        </div>
    </section>-->

    <section class="py-5 bg-dark text-white" id="">
      <div class="container-fluid">
        <div class="row justify-content-md-center">
          <div class="col text-center">
            <h1 class="">Jersey & Medals</h1>
            <hr class="" style="background-color: green; height: 2px;" width="150px" /><br><br>
          </div>
        </div>

        <div class="row no-gutters">
          <div class="col-md-6 float-left">
            <img class="img-fluid ml-0" src="https://centralcelebesmarathon.com/assets/template_web/images/jersey.jpg" class="img-responsive" alt="Responsive image">
          </div>
          <div class="col-md-6 pt-3 pl-2 float-left">
            <h2 class="display-5">Jersey SlimfitK</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <div class="w-100 d-none d-md-block"></div>

          <div class="col-md-6 pt-3 pl-2 float-right">
            <h2 class="display-5">Finisher Jersey</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-md-6 float-right">
            <img class="img-fluid ml-0" src="https://centralcelebesmarathon.com/assets/template_web/images/jersey.jpg" class="img-responsive" alt="Responsive image">
          </div>

          <div class="w-100 d-none d-md-block"></div>
          <div class="col-md-6">
            <img class="img-fluid ml-0" src="https://centralcelebesmarathon.com/assets/template_web/images/jersey.jpg" class="img-responsive" alt="Responsive image">
          </div>
          <div class="col-md-6 pt-3 pl-2">
            <h2 class="display-5">Medalion</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <!--
        <div class="row">
          <div class="col-12">
            <div class="row align-center float-left">
              <div class="col-md-6 pr-0 pl-0">
                <img class="img-fluid" src="https://centralcelebesmarathon.com/assets/template_web/images/jersey.jpg" class="img-responsive" alt="Responsive image">
              </div>
              <div class="col-4 col-md-6 d-md-none d-lg-block">
                <h2 class="display-4"><i class="material-icons" style="font-size: 60px;">directions_run</i> Half <br/>Marathon 21K</h2>
                <ul class="list-unstyled mb-0">
                  <li>
                   <i class="material-icons align-top">navigate_next</i> Size S  : 0 PCs
                  </li>
                  <li>
                   <i class="material-icons align-top">navigate_next</i> Size M  : 0 PCs
                  </li>
                  <li>
                   <i class="material-icons align-top">navigate_next</i> Size L  : 0 PCs
                  </li>
                  <li>
                   <i class="material-icons align-top">navigate_next</i> Size XL  : 0 PCs
                  </li>
                </ul>
              </div>
              <div class="col-4 col-md-6 text-left pt-3">
                <h2 class="display-4"><i class="material-icons" style="font-size: 60px;">directions_run</i> 10K RUN</h2>
                <ul class="list-unstyled mb-0">
                  <li>
                   <i class="material-icons align-top">navigate_next</i> Size S  : 0 PCs
                  </li>
                  <li>
                   <i class="material-icons align-top">navigate_next</i> Size M  : 0 PCs
                  </li>
                  <li>
                   <i class="material-icons align-top">navigate_next</i> Size L  : 0 PCs
                  </li>
                  <li>
                   <i class="material-icons align-top">navigate_next</i> Size XL  : 0 PCs
                  </li>
                </ul>
              </div>
              <div class="col-md-6 pr-0 pl-0">
                <img class="img-fluid" src="https://centralcelebesmarathon.com/assets/template_web/images/jersey.jpg" class="img-responsive" alt="Responsive image">
              </div>
              <div class="col-md-6 pr-0 pl-0">
                <img class="img-fluid" src="https://centralcelebesmarathon.com/assets/template_web/images/jersey.jpg" class="img-responsive" alt="Responsive image">
              </div>
              <div class="col-md-6 pt-3">
                <h2 class="display-4"><i class="material-icons" style="font-size: 60px;">directions_run</i> 5K RUN</h2>
                <ul class="list-unstyled mb-0">
                  <li>
                   <i class="material-icons align-top">navigate_next</i> Size S  : 0 PCs
                  </li>
                  <li>
                   <i class="material-icons align-top">navigate_next</i> Size M  : 0 PCs
                  </li>
                  <li>
                   <i class="material-icons align-top">navigate_next</i> Size L  : 0 PCs
                  </li>
                  <li>
                   <i class="material-icons align-top">navigate_next</i> Size XL  : 0 PCs
                  </li>
                </ul>
                </ul>
              </div>
            </div>
          </div>
        </div>-->
      </div>
    </section>

    <!-- REMAINING JERSEY -->
    <section class="py-5">
      <div class="container">       
        <div class="row">
          <div class="col">
            <h1 class="text-center">Remaining Jersey</h1>
            <hr class="" style="background-color: green; height: 2px;" width="10%" /><br><br>
            <div class="card-group">
              <div class="row">
                <div class="col-md-4 pt-2">
                  <div class="card border border-danger w-100">
                    <div class="card-body">
                      <h3 class="card-title">Half Marathon 21K</h3>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <ul class="list-unstyled pr-40">  
                          <li><i class="material-icons align-top">navigate_next</i> Size S : 0 PCs</li>
                          <li><i class="material-icons align-top">navigate_next</i> Size M : 0 PCs</li>
                          <li><i class="material-icons align-top">navigate_next</i> Size L : 0 PCs</li>
                          <li><i class="material-icons align-top">navigate_next</i> Size XL : 0 PCs</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 pt-2">
                  <div class="card border border-info">
                    <div class="card-body">
                      <h3 class="card-title">10K RUN</h3>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <ul class="list-unstyled">  
                          <li><i class="material-icons align-top">navigate_next</i> Size S : 0 PCs</li>
                          <li><i class="material-icons align-top">navigate_next</i> Size M : 0 PCs</li>
                          <li><i class="material-icons align-top">navigate_next</i> Size L : 0 PCs</li>
                          <li><i class="material-icons align-top">navigate_next</i> Size XL : 0 PCs</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 pt-2">
                  <div class="card border border-warning">
                    <div class="card-body">
                      <h3 class="card-title">5K Run</h3>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <ul class="list-unstyled">  
                          <li><i class="material-icons align-top">navigate_next</i> Size S : 0 PCs</li>
                          <li><i class="material-icons align-top">navigate_next</i> Size M : 0 PCs</li>
                          <li><i class="material-icons align-top">navigate_next</i> Size L : 0 PCs</li>
                          <li><i class="material-icons align-top">navigate_next</i> Size XL : 0 PCs</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <!-- How To Registration -->
    <section class="py-5">
      <div class="container">       
        <div class="row">
          <div class="col">
            <h1 class="text-center">How To Registration</h1>
            <hr class="" style="background-color: green; height: 2px;" width="30%"/><br><br>
            <div class="row">
              <div class="col text-center"><img src="<?=base_url()?>assets/home/images/caradaftar.jpg" class="img-fluid" style="max-width: 100%; height: auto;" alt="Responsive image"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- COUNTDOWN -->
    <section class="py-5 bg-dark text-white">
      <div class="container">       
        <div class="row justify-content-md-center">
          <div class="col">
            <h1 class="text-center">COUNTDOWN</h1>
            <hr class="" style="background-color: green; height: 2px;" width="21%"/><br><br>
            <div class="row">
              <div class="col-md-3 text-center">
                <h1 class="display-3">0</h1>
                <hr class="" style="background-color: red; height: 2px;" width="25%" />
                <h1>Day</h1>
              </div>
              <div class="col-md-3 text-center">
                <h1 class="display-3">0</h1>
                <hr class="" style="background-color: green; height: 2px;" width="25%" />
                <h1>Hours</h1>
              </div>
              <div class="col-md-3 text-center">
                <h1 class="display-3">0</h1>
                <hr class="" style="background-color: blue; height: 2px;" width="25%" />
                <h1>Minutes</h1>
              </div>
              <div class="col-md-3 text-center">
                <h1 class="display-3">0</h1>
                <hr class="" style="background-color: yellow; height: 2px;" width="25%" />
                <h1>Second</h1>
              </div>
            </div>
          </div>
        </div>
      </div><span class="invisible" id="register">#</span>
    </section>

    <!-- Registration -->
    <section class="py-5 bg-dark text-white">
      <div class="container">       
        <div class="row">
          <div class="col">
            <h1 class="text-center">Registration</h1>
            <hr style="background-color: green; height: 2px;" width="21%" />
            <p class="text-center" style="font-size: 20pt;">Form Pendaftaran Palu Nomoni</p><br><br>

            <!--
            <div class="row">
              <div class="col text-center">
                <a href="#collapseOne" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                  <i class="material-icons hvr-skew" style="font-size: 70px;">directions_bike</i>
                </a><h1>Bike</h1>
              </div>
              <div class="col text-center">
                <a href="#collapseTwo" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                  <i class="material-icons hvr-skew" style="font-size: 70px;">directions_run</i>
                </a><h1>Marathon</h1>
              </div>
            </div>-->
            <div class="row">
              <div class="col text-center">
                <a class="btn btn-outline-primary" href="#collapseTwo" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                 <h3>Daftar</h3>
                </a>
              </div>
            </div>
          </div>
        </div>
        
          <div class="accordion" id="accordionExample">
            <div class="row">
              <!--<div class="col-md-6">
                <div class="card bg-dark">
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body"> 
                      <form action="#" method="post">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                      <label for="email">email</label>
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Address</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Address 2</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                          <option selected>Choose...</option>
                          <option>...</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Check me out
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>-->
              <div class="col-md-12">
                <div class="card bg-dark">
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                    <!-- Form -->
                    <form action="" method="post">
                      <div class="row">             
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="identitas">No. Indentitas (KTP/Passport/SIM/Kartu Pelajar)</label>
                            <input type="text" name="" class="form-control" id="identitas" placeholder="No. Indentitas" required>
                          </div>
                          <div class="form-group">
                            <label for="namaLengkap">Nama Lengkap</label>
                            <input type="text" name="" class="form-control" id="namaLengkap" placeholder="Nama Lengkap" required>
                          </div>
                          <div class="form-group">
                            <label for="namaNBIB">Nama NBIB</label>
                            <input type="text" name="" class="form-control" id="namaNBIB" placeholder="Nama Lengkap" required>
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="" class="form-control" id="email" placeholder="example@email.com" required>
                          </div>
                          <div class="form-group">
                            <label for="gender">Jenis Kelamin</label>
                            <select class="form-control" id="gender" required>
                              <option selected hidden> Pilih Jenis Kelamin</option>
                              <option>Laki-laki</option>
                              <option>Perempuan</option>
                            </select>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="tmplahir">Tempat Lahir</label>
                              <input type="text" name="" class="form-control" id="tmplahir" placeholder="Tempat Lahir" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="tgllahir">Tanggal Lahir</label>
                              <input name="" type="date" class="form-control" id="inputNama" placeholder="Tanggal Lahir" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="" class="form-control" rows="1" id="alamat" placeholder="Alamat" required></textarea>
                          </div>
                        </div>
                        <div class="col-md-6">            
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="tmplahir">Kota</label>
                              <input type="text" name="" class="form-control" id="tmplahir" placeholder="Kota " required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="provinsi">Provinsi</label>
                              <input type="text" name="" class="form-control" id="provinsi" placeholder="Provinsi" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="kategoriLomba">Kategori Lomba</label>
                            <input type="text" name="" class="form-control" id="tmplahir" placeholder="Tempat Lahir" required>
                          </div>
                          <div class="form-row"></div>
                            <div class="form-group">
                              <label for="hp">No. Handphone</label>
                              <input type="text" name="" class="form-control" id="tmplahir" placeholder="No. Handphone" required>
                            </div>
                            <div class="form-group">
                              <label for="hpalternatif">No. Handphone Darurat (bila terjadi sesuatu)</label>
                              <input type="text" name="" class="form-control" id="hpalternatif" placeholder="No. Handphone Darurat" required>
                            </div>
                            <div class="form-group">
                              <label for="riwayatPenyakit">Riwayat Penyakit (bila ada)</label>
                              <input type="text" name="" class="form-control" id="riwayatPenyakit" placeholder="Riwayat Penyakit">
                            </div>
                            <div class="form-group">
                              <label for="komunitas">Komunitas (bila ada)</label>
                              <input type="text" name="" class="form-control" id="komunitas" placeholder="Kominitas">
                            </div>
                            <div class="form-group">
                              <label for="prediksiWaktu">Prediksi Waktu Sampai (COT)</label>
                              <input type="time" name="" class="form-control" id="prediksiWaktu" placeholder="Prediksi Waktu Sampai" required>
                            </div>
                            <div class="form-group" hidden>
                              <label for="metodeDaftar">Metode Daftar</label>
                              <input type="text" name="" class="form-control" id="metodeDaftar" placeholder="Metode Daftar" required value="Online">
                            </div>
                        </div>      
                      </div>
                      <div class="">
                        <div class="custom-control custom-checkbox" >
                          <div class="row">
                            <div class="col-md-9">
                              <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                              <label class="float-left custom-control-label" for="customCheck1">Saya Sudah membaca <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Syarat dan ketentuan</a> &nbsp;</label>
                              <div class="collapse float-left" id="collapseExample">
                                <div class="card card-body bg-dark text-light">
                                  <h5>Syarat dan ketentuan</h5>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                  <ul type="1">
                                    <li>Lorem ipsum dolor sit amet,</li>
                                    <li>consectetur adipisicing elit</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <button type="submit" class="float-right btn btn-primary">Daftar</button>
                              <button type="submit" class="float-right btn btn-link" data-target="#collapseTwo" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">Batal</button>
                            </div>
                          </div>
                        </div>    
                      </div> 
                   </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sponsors -->
    <section class="py-5">
      <div class="container">       
        <div class="row">
          <div class="col">
            <h1 class="text-center">Sponsors</h1>
            <hr class="float-center" style="background-color: green; height: 2px;" width="13%" /><br><br>
            <div class="row">
              <div class="col text-center"><img class="img-fluid mw-100" src="<?=base_url()?>assets/home/images/sponsor.png"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Location -->
    <section class="py-5">
      <div class="container-fluid">       
        <div class="row">
          <div class="col">
            <h1 class="text-center">Our Location</h1>
            <hr class="" style="background-color: green; height: 2px;" width="15%" /><br><br>
            <div class="row">
              <div class="col-12 text-center wm-100 p-0 ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.951251287047!2d110.35446671477818!3d-7.794986394382621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNDcnNDIuMCJTIDExMMKwMjEnMjQuMCJF!5e0!3m2!1sen!2sid!4v1527276150927" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
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

    <!-- Login -->
    <!--
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="titleModalLogin" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="titleModalLogin">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <div class="form-group">
                <label for="formGroupExampleInput">Email</label>
                <input type="email" class="form-control" id="formGroupExampleInput" placeholder="example@email.com" required="Email">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Password</label>
                <input type="Password" class="form-control" id="formGroupExampleInput2" placeholder="Password" required>
              </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    -->

    <!-- Daftar 
    <div class="modal fade" id="modalDaftar" tabindex="-1" role="dialog" aria-labelledby="titleModalDaftar" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="titleModalLogin">Daftar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <div class="row">             
                <div class="col">
                  <div class="form-group">
                    <label for="identitas">No. Indentitas (KTP/Passport/SIM/Kartu Pelajar)</label>
                    <input type="text" name="" class="form-control" id="inputNama" placeholder="No. Indentitas" required>
                  </div>
                  <div class="form-group">
                    <label for="namaLengkap">Nama Lengkap</label>
                    <input type="text" name="" class="form-control" id="namaLengkap" placeholder="Nama Lengkap" required>
                  </div>
                  <div class="form-group">
                    <label for="namaNBIB">Nama NBIB</label>
                    <input type="text" name="" class="form-control" id="inputNama" placeholder="Nama Lengkap" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="" class="form-control" id="inputEmail" placeholder="example@email.com" required>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label for="gender">Jenis Kelamin</label>
                      <select class="form-control" id="gender">
                        <option selected hidden> Pilih Jenis Kelamin</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="inputNama">Nama</label>
                    <input type="text" class="form-control" id="inputNama" placeholder="Your Name" required>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="example@email.com" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Password</label>
                    <input type="Password" class="form-control" id="formGroupExampleInput2" placeholder="Password" required>
                  </div>
                </div>      
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Daftar</button>
                </div> 
           </form>
                         
          </div>
          
        </div>
      </div>
    </div>-->

    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>assets/home/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/home/js/bootstrap.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="<?=base_url()?>assets/home/js/nomoni.js"></script>

  </body>

</html>
