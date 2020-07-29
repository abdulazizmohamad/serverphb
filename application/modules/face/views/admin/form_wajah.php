<div class="col-md-12">
  <!-- general form elements -->
  
  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title"></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="<?php echo base_url('face/addfacepost');?>" method="post">
      <div class="card-body">

        <div class="form-group row">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <select class="form-control select2" style="width: 100%;" name='namauser'>
              <option value="" disabled selected>--- Select User ---</option>
              <?php foreach ($namauser as $key) { ?>
              <option value="<?php echo $key['nama'];?>"><?php echo $key['nama'];?></option>
              <!-- key pertama nggo post inputan, key kedua ngambil data dari nama user -->
              <?php } ?>
              }
            </select>
          </div>
        </div>
        
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Unit Kerja</label>
          <div class="col-sm-10">
            <input type="tet" class="form-control" id="unit" placeholder="Unit Kerja" name="unit" required="">
          </div>
        </div>
        <div class="form-group row">
          <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Input</label>
          <div class="col-sm-4">
            
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
              </div>
              <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="tanggal">
            </div>

          </div>
        </div>
        
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Data Nilai Wajah</label>
          <div class="col-sm-2">
            <!-- text input -->
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nilai X ..." name="nilaix" required="">
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nilai Y ..." name="nilaiy" required="">
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nilai Z ..." name="nilaiz">
            </div>
          </div>
        </div>

      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-secondary">Submit</button>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
  <!-- /.card -->

</div>