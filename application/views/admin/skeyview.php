        <!-- Data di tabel -->
        <div class="card mb-3">
          <div class="card-header d-flex justify-content-between">
            <div>
              <i class="fa fa-table"></i>
              Contoh Data  
            </div>
            <form class="d-flex" action="<?php echo site_url('admin/skeyword')?>" method="post">
              <input type="text" class="form-control" style="border-radius: 0;" name="title">
              <button class="btn btn-info btn-sm" style="border-radius: 0;">Search</button>
              <?php if (empty($results)): ?>
                <?php echo "Maaf Pencarian Tidak Ditemukan" ?>
              <?php endif ?>
            </form>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th width="90">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($results as $key => $p): ?>
                  	<tr>
                  		<td><?php echo $p->name?></td>
                  		<td><?php echo $p->role?></td>
                  		<td><?php echo $p->status?></td>
                  		<td>
                  			<a href="<?php echo site_url('admin/edit/'.$p->id)?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
		                    <a href="<?php echo site_url('admin/delete/'.$p->id)?>" onclick="return confirm('Apakah anda yakin ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                  		</td>
                  	</tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Diperbarui Kemarin Jam 18:59 Malam</div>
        </div>