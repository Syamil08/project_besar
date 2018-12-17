                <div class="row">
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-header">
                                Tambah Petugas
                            </div>
                            <div class="card-body">
                                <form action="<?php echo site_url('admin/save')?>" class="needs-validation was-validate" method="post">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="firstname">First Name</label>
                                            <input type="text" name="firstname" id="firstName" class="form-control" placeholder="First Name" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="firstname">Last Name</label>
                                            <input type="text" name="lastname" id="lastName" class="form-control" placeholder="Last Name"required>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="username" required placeholder="Username">
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="nohp">Nomor Handphone</label>
                                        <input type="number" class="form-control" name="nohp" placeholder="Nomor Handphone" required>
                                    </div>
                                    <div class="mb-4 form-group">
                                        <label for="description">Alamat</label>
                                        <textarea name="alamat" rows="3" class="form-control"></textarea>
                                    </div>
                                    <hr class="mb-4">
                                    <button class="btn btn-primary mb-3" type="submit">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>