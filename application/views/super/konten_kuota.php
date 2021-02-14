        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"><?=$halaman?></h1>
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
                      <h2 class="text-center text-success"><?=$jumlah_marathon_bayar;?>/<?=$jumlah_marathon;?></h2>
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
                      <h2 class="text-center text-primary"><?=$jumlah_bike_bayar;?>/<?=$jumlah_bike;?></h2>
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
                      <h2 class="text-center text-warning"><?=$total_peserta?></h2>
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
                      <h2 class="text-center text-danger"><?=$total_pendaftar?></h2>
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
                  <h5 class="card-title">Atur Kuota</h5>
                  <h6 class="card-subtitle mb-2 text-muted">-----</h6>
                   <form method="post">
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label><b>Marathon 5K</b></label>
                    <input type="number" class="form-control" name="kuota_marathon_5k" >
                  </div>
                 <div class="form-group">
                    <label><b>Marathon 10K</b></label>
                    <input type="number" class="form-control" name="kuota_marathon_10k" >
                  </div>
                  <div class="form-group">
                    <label><b>Marathon 21K</b></label>
                    <input type="number" class="form-control" name="kuota_marathon_21k" >
                  </div>                  <div class="form-group">
                    <label><b>Bike</b></label>
                    <input type="number" class="form-control" name="kuota_bike" >
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
            <div class="col-lg-6">
             <!--  <div class="card">
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
              </div> -->
              <div class="card" style="margin-top: 20px;">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6">
                      <h5 class="card-title">Kuota Terisi</h5>
                      <hr>
                      <h6>Marathon</h6>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: <?=$persetase_marathon;?>%" aria-valuenow="<?=$persetase_marathon;?>" aria-valuemin="0" aria-valuemax="100"><?=$persetase_marathon;?>%</div>
                      </div>
                      <br>
                      <h6>Bike</h6>
                      <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: <?=$persetase_bike;?>%" aria-valuenow="<?=$persetase_bike;?>" aria-valuemin="0" aria-valuemax="100"><?=$persetase_bike;?>%</div>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <h5 class="card-title">Metode Daftar</h5>
                      <hr>
                      <h6>Online</h6>
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$persetase_daftar_online?>%" aria-valuenow="<?=$persetase_daftar_online?>" aria-valuemin="0" aria-valuemax="100"><?=$persetase_daftar_online?>%</div>
                      </div>
                      <br>
                      <h6>Offline</h6>
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$persetase_daftar_offline?>%" aria-valuenow="<?=$persetase_daftar_offline?>" aria-valuemin="0" aria-valuemax="100"><?=$persetase_daftar_offline?>%</div>
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