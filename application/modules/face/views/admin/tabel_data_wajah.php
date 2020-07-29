<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="<?php echo base_url('face/form_input_wajah');?>"class="btn btn-sm btn-flat btn-info"><i class="fa fa-user"></i>Tambah</a>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Unit</th>
                      <th>Input Date</th>
                      <th>X</th>
                      <th>Y</th>
                      <th>Z</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($isitabel as $key) { ?>

                    <tr>
                      <td><?php echo $key->Id;?></td>
                      <td><?php echo $key->nama;?></td>
                      <td><?php echo $key->unit;?></td>
                      <td><?php echo $key->tanggal;?></td>
                      <td><?php echo $key->x;?></td>
                      <td><?php echo $key->y;?></td>
                      <td><?php echo $key->z;?></td>
                      <!-- <td class=" last">
                        <a href="<?php echo base_url('face/delete_wajah/'.$key->Id);?>"><i class="fa fa-trash"></i>Delete</a>
                        <a href="<?php echo base_url('face/edit_wajah/'.$key->Id);?>"> <i class="fa fa-edit"></i> Edit</a>
                      </td> -->
                      <td class="text">
                        <a href="<?php echo base_url('face/edit_wajah/'.$key->Id);?>" class="btn btn-sm btn-flat bg-orange"><i class="fa fa-edit"></i></a>
                        <a href="<?php echo base_url('face/delete_wajah/'.$key->Id);?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" class="btn btn-sm btn-flat bg-red"><i class="fa fa-trash"></i></a>
                      </button>
                    </td>
                    </tr>
                    <?php } ?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>