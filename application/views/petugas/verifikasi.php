<div class="card mb-3">
		          <div class="card-header d-flex justify-content-between">
		            <div>
		              <i class="fa fa-table"></i>
		              Daftar Donatur  
		            </div>
		          </div>
		          <div class="card-body">
		            <div class="table-responsive">
		              <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
		                <thead>
		                  <tr>
		                    <th width="220">Nama</th>
		                    <th>Username</th>
		                    <th width="140">Status</th>
		                    <th>Alamat</th>
		                    <th>No Hp</th>
		                    <th width="140">Action</th>
		                  </tr>
		                </thead>
		                <tbody>
		                	<?php foreach ($donatur as $key => $b): ?>
		                		<tr>
									<td><?php echo $b->name?></td>
									<td><?php echo $b->username?></td>
									<td><?php echo $b->status?></td>
									<td><?php echo $b->address?></td>
									<td><?php echo $b->phone?></td>
				                    <td>
				                    	<a href="<?php echo site_url('petugas/edit_verifikasi/'.$b->id)?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
				                    	<a href="<?php echo site_url('petugas/delete_donatur/'.$b->id)?>" onclick="return confirm('Apakah anda yakin ?')" class="btn btn-danger btn-sm"><i  class="fa fa-trash"></i></a>
				                    </td>
				                </tr>
		                	<?php endforeach ?>
		                </tbody>
		              </table>
		              <br>
		              <?php
		              	echo $this->pagination->create_links();
		              ?>
		            </div>
		          </div>
		          <!-- <div class="card-footer small text-muted">Diperbarui Kemarin Jam 18:59 Malam</div> -->
		        </div>