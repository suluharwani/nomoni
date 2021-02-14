        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Laporan Bike</h1>
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
                        <th>No</th>  <!-- 1 -->
                        <th>No. Identitas</th>  <!-- 1 -->
                        <th>Nama</th><!-- 2 -->
                        <th>NBIB</th><!-- 11 -->
                        <th>Kode Daftar</th><!-- 3 -->
                        <th>Email</th><!-- 3 -->
                        <th>Jenis Kelamin</th><!-- 9 -->
                        <th>Golongan Darah</th><!-- 8 -->
                        <th>Tempat,Tgl Lahir</th><!-- 8 -->
                        <th>Alamat</th><!-- 10 -->
                        <th>Kategori Lomba</th><!-- 6 -->
                        <th>Nomor HP</th><!-- 4 -->
                        <th>Nomor Darurat</th><!-- 5 -->    
                        <th>Riwayat Penyakit</th><!-- 7 -->
                        <th>Komunitas</th><!-- 12 -->
                        <th>Kode Unik</th><!-- 13 -->
                        <th>Prediksi Waktu</th><!-- 14 -->
                        <th>Status</th><!-- 15 -->
                        <th>Metode</th><!-- 16 -->
                        <th>Tgl</th><!-- 17 -->
                        <th>ID Admin</th><!-- 18 -->
                        <th>Nama Admin</th><!-- 19 -->

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