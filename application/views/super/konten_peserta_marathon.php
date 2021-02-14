        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"><?=$judul;?></h1>
            <div class="btn-toolbar mb-2 mb-md-0">
<!--               <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Copy</button>
                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" id="ddexport" data-toggle="dropdown">Export</button>
                <div class="dropdown-menu" aria-labelledby="ddexport">
                  <a class="dropdown-item" href="#">Excel</a>
                  <a class="dropdown-item" href="#">CSV</a>
                  <a class="dropdown-item" href="#">PDF</a>
                </div>
              </div> -->
                <button class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#tambahpeserta">
                <span data-feather="plus-circle"></span>
                Tambah Peserta
              </button>
              <div class="dropdown">
<!--                 <button class="btn btn-sm btn-outline-secondary dropdown-toggle" id="ddwaktu" data-toggle="dropdown">
                  <span data-feather="calendar"></span>
                  This week
                </button> -->
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

                    <div class="row form-inline" style="margin-bottom: 10px; margin-left: 1px;">
                      <div class="col-md-3" >
                        <span class="control-label">Ditampilkan Status</span>
                        <select class="form-control" id="dropdown1">
                          <option value="">Semua</option>
                          <option value="0">Belum bayar</option>
                          <option value="1">Sudah Bayar</option>
                        </select>

                      </div> 
                    </div>
                    <table id="table" class="table table-striped">
                      <thead>
                        <th>No</th>
                        <th>Invoice</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <!--<th>Handphone</th>-->
                        <th>Kategori</th>
                        <!--<th>Nomor Darurat</th>
                        <th>Riwayat Penyakit</th>-->
                        <th>Status</th>
                        <th>Registrasi</th>
                        <th>Actions</th>
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
      
      <div class="modal fade" id="tambahpeserta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah <?=$judul?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-body">
             <form action="" method="post">
                      <div class="row">             
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="identitas">No. Identitas (KTP/Passport/SIM/Kartu Pelajar)</label>
                            <input type="text" name="nomor_identitas" class="form-control" id="identitas" placeholder="No. Identitas" required>
                          </div>
                          <div class="form-group">
                            <label for="namaLengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" id="namaLengkap" placeholder="Nama Lengkap" required>
                          </div>
                          <div class="form-group">
                            <label for="namaNBIB">Nama NBIB</label>
                            <input type="text" name="nama_nbib" class="form-control" id="namaNBIB" placeholder="Nama Panggilan" required>
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="example@email.com" required>
                          </div>
                          <div class="form-group">
                            <label for="gender">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="gender" required>
                              <option selected hidden> Pilih Jenis Kelamin</option>
                              <option value="1">Laki-laki</option>
                              <option value="2">Perempuan</option>
                            </select>
                          </div>
                            <div class="form-group">
                            <label for="gender">Golongan Darah</label>
                            <select class="form-control" name="gol_darah" required>
                              <option selected hidden> Pilih Golongan Darah</option>
                              <option value="1">A</option>
                              <option value="2">B</option>
                              <option value="3">AB</option>
                              <option value="4">O</option>
                            </select>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="tmplahir">Tempat Lahir</label>
                              <input type="text" name="tempat_lahir" class="form-control" id="tmplahir" placeholder="Tempat Lahir" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="tgllahir">Tanggal Lahir</label>
                              <input name="tgl_lahir" type="date" class="form-control" id="inputNama" placeholder="Tanggal Lahir" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control" rows="1" id="alamat" placeholder="Alamat" required></textarea>
                          </div>
                        </div>
                        <div class="col-md-6">            
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="tmplahir">Kota</label>
                              <input type="text" name="kota" class="form-control" id="tmplahir" placeholder="Kota " required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="provinsi">Provinsi</label>
                              <input type="text" name="provinsi" class="form-control" id="provinsi" placeholder="Provinsi" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="kategoriLomba">Kategori Lomba</label>
                             <select class="form-control" name="kategori_lomba" required>
                              <option selected hidden> Pilih Kategori Lomba</option>
                              <option value="1">5K RUN</option>
                              <option value="2">10K RUN</option>
                              <option value="3">HALF MARATHON 21K</option>
                              <option value="4">BIKE</option>
                            </select>
                          </div>
                          <div class="form-row"></div>
                            <div class="form-group">
                              <label for="hp">No. Handphone</label>
                              <input type="text" name="hp1" class="form-control" id="tmplahir" placeholder="No. Handphone" required>
                            </div>
                            <div class="form-group">
                              <label for="hpalternatif">No. Handphone Darurat (bila terjadi sesuatu)</label>
                              <input type="text" name="hp2" class="form-control" id="hpalternatif" placeholder="No. Handphone Darurat" required>
                            </div>
                            <div class="form-group">
                              <label for="riwayatPenyakit">Riwayat Penyakit (bila ada)</label>
                              <input type="text" name="riwayat_penyakit" class="form-control" id="riwayatPenyakit" placeholder="Riwayat Penyakit">
                            </div>
                            <div class="form-group">
                              <label for="komunitas">Komunitas (bila ada)</label>
                              <input type="text" name="komunitas" class="form-control" id="komunitas" placeholder="Kominitas">
                            </div>
                            <div class="form-group">
                              <label for="prediksiWaktu">Prediksi Waktu Sampai (COT)</label>
                              <input type="time" name="prediksi_waktu" class="form-control" id="prediksiWaktu" placeholder="Prediksi Waktu Sampai" required>
                            </div>
                            <div class="form-group" hidden>
                              <label for="metodeDaftar">Metode Daftar</label>
                              <input type="text" name="metode_daftar" class="form-control" id="metodeDaftar" placeholder="Metode Daftar" required value="0">
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
                              <button type="submit" name="submit" value="daftar" class="float-right btn btn-primary">Daftar</button>
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