          <div class="row">
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-header">
                                Tambah Berita
                            </div>
                            <div class="card-body">
                                <form action="<?php echo site_url('petugas/save')?>" method="post" class="needs-validation was-validate" enctype='multipart/form-data' >
                                    <div class="mb-3 form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" name="title" required placeholder="Title">
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="category">Category</label>
                                        <select name="category" class="form-control">
											<?php foreach ($berita as $b): ?>
												<option value="<?php echo $b->id?>"><?php echo $b->name?></option>
											<?php endforeach ?>
										</select>
                                    </div>
                                    <div class="mb-4 form-group">
                                        <label for="description">Deskripsi</label>
                                        <textarea name="description" id="editor"></textarea>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="date">Tenggat Waktu</label>
                                        <input type="date" class="form-control" name="date" required>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="image">Tambah Gambar</label><br>
                                        <input type="file" name="file_name">
                                    </div>
                                    <hr>
                                    <button class="btn btn-primary mb-3" type="submit">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>