
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Palu Nomoni 2018">
    <meta name="author" content="WeeR INDONESIA">
    <link rel="icon" href="<?=base_url()?>assets/home/images/favicon.png">

    <title><?=$title;?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/home/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body style="background-color: #eee">
   
    <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
      <div class="card">
        <div class="card-body">
          <h3 align="center" style="margin-top: 20px; margin-bottom: 20px;"><span data-feather="credit-card"></span> INVOICE. <b>12345678</b></h3>
          <hr>

          <div class="row" style="margin-top: 20px; margin-bottom: 50px;">
            <div class="col-lg-4">
              <h6><b>Peserta:</b></h6>
            </div>
            <div class="col-lg-4">
              <h6><b>Transfer Ke:</b></h6>
            </div>
            <div class="col-lg-4">
              <h6>INVOICE. <b>12345678</b></h6>
              <button type="button" class="btn btn-info btn-sm">Kirim Konfirmasi Berhasil</button>
              <button type="button" class="btn btn-danger btn-sm">Kirim Konfirmasi Gagal</button>
            </div>
          </div>

          <div class="row" style="margin-bottom: 50px;">
            <div class="col-lg-12">
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <th>Nama Pemilik Rekening</th>
                    <th>Dari Bank</th>
                    <th>No. Rekening</th>
                    <th>Jumlah</th>
                    <th>Tindakan</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Agus Suga</td>
                      <td>Bank Bank</td>
                      <td>12345xxxxx</td>
                      <td>Rp. 300.000</td>
                      <td>
                        <button type="button" class="btn btn-warning text-white btn-sm">Racepack Info</button>
                        <button type="button" class="btn btn-danger btn-sm">Kirim Peringatan</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <h6><b>Biodata Peserta:</b></h6>
            </div>
            <div class="col-lg-6">
              <h2>Amount Due: 2018-09-16 15:07:38</h2>
              <table class="table">
                <tr>
                  <td>Kategori</td>
                  <td>5K RUN</td>
                </tr>
                <tr>
                  <td>Biaya Pendaftaran</td>
                  <td>Rp. 200.000</td>
                </tr>
                <tr>
                  <td>Pajak</td>
                  <td>0%</td>
                </tr>
                <tr>
                  <td>Kode Unik</td>
                  <td>999</td>
                </tr>
                <tr>
                  <td><b class="text-danger">Total</b></td>
                  <td><b class="text-danger">Rp. 200.999</b></td>
                </tr>
              </table>
            </div>
          </div>
          
          <div class="row" style="margin-top: 20px; margin-bottom: 50px;">
            <div class="col-lg-12" align="right">
              <button type="button" class="btn btn-secondary">Kembali</button>
              <button type="button" class="btn btn-info" onclick="window.print()">Print</button>
            </div>
          </div>
        </div>
      </div>
    </div>
   

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>assets/home/js/jquery.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?=base_url()?>assets/home/js/jquery.min.js"><\/script>')</script>
    <script src="<?=base_url()?>assets/home/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  </body>
</html>
