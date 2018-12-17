<div class="card mb-3">
		          <div class="card-header d-flex justify-content-between">
		            <div>
		              <i class="fa fa-table"></i>
		              Daftar Bencana  
		            </div>
		            <form class="d-flex" action="<?php echo site_url('petugas/skeyword')?>" method="post">
		              <input type="text" class="form-control" style="border-radius: 0;" name="title">
		              <button class="btn btn-info btn-sm" style="border-radius: 0;">Search</button>
		            </form>
		          </div>
		          <div class="card-body">
		            <div class="table-responsive">
		              <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
		                <thead>
		                  <tr>
		                    <th width="220">Title</th>
		                    <th>Description</th>
		                    <th width="140">Category</th>
		                    <th width="100">Author</th>
		                    <th width="140">Action</th>
		                  </tr>
		                </thead>
		                <tbody>
		                	<?php foreach ($results as $key => $b): ?>
		                		<tr>
									<td><?php echo $b->title?></td>
									<td><?php echo $b->description?></td>
									<td><?php echo $b->n?></td>
									<td><?php echo $b->nn?></td>
				                    <td>
				                    	<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-users"></i></a>
				                    	<a href="<?php echo site_url('petugas/edit/'.$b->id)?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
				                    	<a href="<?php echo site_url('petugas/delete/'.$b->id)?>" onclick="return confirm('Apakah anda yakin ?')" class="btn btn-danger btn-sm"><i  class="fa fa-trash"></i></a>
				                    </td>
				                </tr>
		                	<?php endforeach ?>
		                </tbody>
		              </table>
		            </div>
		          </div>
		          <!-- <div class="card-footer small text-muted">Diperbarui Kemarin Jam 18:59 Malam</div> -->
		        </div>
		        
		    