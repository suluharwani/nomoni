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
<table id="table" class="table table-striped" cellspacing="0" width="100%">
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
                    <th>Action</th>
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
                    <th>Action</th>
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