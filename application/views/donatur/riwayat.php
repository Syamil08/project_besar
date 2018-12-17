          <div class="card mb-3">
            <div class="card-header">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <ul class="nav nav-tabs" id="nav-tabs" role="tablist">
                    <li>
                      <a class="nav-tiem nav-link active" id="nav-home-tab" data-toggle="tab" href="#belum">Belum Terkirim</a>
                    </li>
                    <li>
                      <a class="nav-tiem nav-link" id="nav-home-tab" data-toggle="tab" href="#sudah">Sudah Terkirim</a>
                    </li>
                  </ul>
                </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <div class="tab-content">
                        <div id="belum" class="tab-pane fade show active">
                          <table class="table table-bordered" id="dataTable" width="100%">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Alamat Donatur</th>
                                <th>Nama Bencana</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                                $no = 1;
                              ?>
                              <?php foreach ($riwayat as $key => $r): ?>
                                <tr>
                                  <td><?php echo $no++?></td>
                                  <td><?php echo $r->name?></td>
                                  <td><?php echo $r->qty?></td>
                                  <td><?php echo $r->address?></td>
                                  <td><?php echo $r->title?></td>
                                </tr>
                              <?php endforeach ?>
                            </tbody>
                        </table>
                      </div>

                      <div id="sudah" class="tab-pane fade">
                          <table class="table table-bordered" id="dataTable" width="100%">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Alamat Donatur</th>
                                <th>Nama Bencana</th>
                              </tr>
                            </thead>
                            <?php 
                              $no=1;
                            ?>
                            <tbody>
                              <?php foreach ($completed as $key => $c): ?>
                                <tr>
                                  <td><?php echo $no++?></td>
                                  <td><?php echo $c->name?></td>
                                  <td><?php echo $c->qty?></td>
                                  <td><?php echo $c->address?></td>
                                  <td><?php echo $c->title?></td>
                                </tr>
                              <?php endforeach ?>
                            </tbody>
                        </table>
                      </div>
                    </div>
                </div>
              </nav>
            </div>
          </div> 