<!-- Modal -->
<div id="tambah" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-gradient-info">
        <h4 class="modal-title">Form Data Suplier</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form id="form_datasuplier">
          <input type="hidden" id="idx" name="id">
          <div class="row">
            
              
              <div class="col-md-6 col-sm-6 col-xs-12">
                <label>Nama Perusahaan</label>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <input type="text" class="form-control form-control-sm" name="nama_perusahaan">
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <label>Nama Suplier</label>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <input type="text" class="form-control form-control-sm" name="nama_sup">
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <label>Nomor Hp</label>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <input type="text" class="form-control form-control-sm" name="no_hp">
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <label>Fax</label>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <input type="number" class="form-control form-control-sm" name="fax">
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <label>NPWP</label>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <input type="text" class="form-control form-control-sm" name="npwp">
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <label>Email</label>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <input type="text" class="form-control form-control-sm" name="email">
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <label>Alamat</label>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <textarea class="form-control form-control-sm" name="alamat"></textarea>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <label>Keterangan</label>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <textarea class="form-control form-control-sm" name="keterangan"></textarea>
                </div>
              </div>

            
            

           </div> <!-- End div row -->
         </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" id="btn-simpan-sup" type="button">Process</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>