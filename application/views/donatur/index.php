<div class="row">
    <div class="col-md-8">
        <div class="card mb-3">
        	<?php
            $names = explode(' ', userdata()->name); 
            $firstname = $names[0];
            $lastname  = array_slice($names, 1);
            $lastname  = implode(' ', $lastname); 
            ?>
            <div class="card-body">
                <form action="#" class="needs-validation was-validate" method="post">
                    <div class="row">
                      <input type="hidden" name="id">
                        <div class="col-md-6 form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" name="firstname" id="firstName" class="form-control" value="<?php echo $firstname?>" readonly="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="firstname">Last Name</label>
                            <input type="text" name="lastname" id="lastName" class="form-control" value="<?php echo $lastname?>" readonly="">
                        </div>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" value="<?php echo userdata()->username?>" readonly="">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="nohp">Nomor Handphone</label>
                        <input type="number" class="form-control" name="nohp" value="<?php echo userdata()->phone?>" readonly="">
                    </div>
                    <div class="mb-4 form-group">
                        <label for="description">Alamat</label>
                        <textarea name="alamat" rows="3" class="form-control" readonly=""><?php echo userdata()->address?></textarea>
                    </div>
                    <hr class="mb-4">
                    <a href="<?php echo site_url('donatur/edit')?>" class="btn btn-primary mb-3">Edit Profil</a>
                </form>
            </div>
        </div>
    </div>
</div>