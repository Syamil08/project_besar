<div class="row">
    <div class="col-md-8">
        <div class="card mb-3">
            <div class="card-header">
                Edit Profil
                <?php
                $names = explode(' ', userdata()->name); 
                $firstname = $names[0];
                $lastname  = array_slice($names, 1);
                $lastname  = implode(' ', $lastname); 
                ?>
            </div>
            <div class="card-body">
                <form action="<?php echo site_url('donatur/update')?>" class="needs-validation was-validate" method="post">
                    <div class="row">
                      <input type="hidden" name="id" value="<?php echo userdata()->id?>">
                        <div class="col-md-6 form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" name="firstname" value="<?php echo $firstname?>" class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="firstname">Last Name</label>
                            <input type="text" name="lastname" value="<?php echo $lastname?>" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" value="<?php echo userdata()->username?>" name="username">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="new_password">New Password (Optional)</label>
                        <input type="password" class="form-control" name="new_password" placeholder="New Password">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="nohp">Nomor Handphone</label>
                        <input type="number" class="form-control" value="<?php echo userdata()->phone?>" name="nohp">
                    </div>
                    <div class="mb-4 form-group">
                        <label for="description">Alamat</label>
                        <textarea name="alamat" rows="3" class="form-control"><?php echo userdata()->address?></textarea>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary mb-3" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>