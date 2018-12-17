<div class="card mb-3">
  <div class="card-header d-flex justify-content-between">
    <div>
      <i class="fa fa-table"></i>
      Daftar Donasi: <?php echo $disaster->title ?>  
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="220">No</th>
            <th>Nama Donatur</th>
            <th width="140">Nama Barang</th>
            <th width="50">Jumlah</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        	<?php $no=1;
        	foreach ($donate as $key => $d): ?>
        		<tr>
        			<td><?php echo $no++ ?></td>
					<td><?php echo $d->n ?></td>
					<td><?php echo $d->name ?></td>
					<td><?php echo $d->qty ?></td>
					<td><?php echo $d->address ?></td>
                    <td>
                    	<?php if ($d->status == 'schedule'): ?>
                    		<a href="<?php echo site_url('petugas/donate_to_complete/'.$d->id) ?>" class="btn btn-success btn-sm">Jadikan Complete</a>
                    	<?php else: ?>
                    		<span class="badge badge-success">Sudah diambil</span>
                    	<?php endif; ?>
                    </td>
                </tr>
        	<?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- <div class="card-footer small text-muted">Diperbarui Kemarin Jam 18:59 Malam</div> -->
</div>

