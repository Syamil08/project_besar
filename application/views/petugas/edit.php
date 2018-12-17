          <div class="row">
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-header">
                                Tambah Berita
                            </div>
                            <div class="card-body">
                                <form action="<?php echo site_url('petugas/update')?>" method="post" class="needs-validation was-validate">
                                	<input type="hidden" name="id" value="<?php echo $berita->id?>">
                                    <div class="mb-3 form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" name="title" value="<?php echo $berita->title?>">
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="category">Category</label>
                                        <select name="category" class="form-control">
											<?php foreach ($category as $c): ?>
												<option value="<?php echo $c->id?>" <?php if($c->id == $berita->category_id) echo 'selected'?> ><?php echo $c->name?></option>
											<?php endforeach ?>
										</select>
                                    </div>
                                    <div class="mb-4 form-group">
                                        <label for="description">Deskripsi</label>
                                        <textarea name="description" id="editor"><?php echo $berita->description?></textarea>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="date">Date</label>
                                        <input type="date" class="form-control" name="date" value="<?php echo $berita->deadline?>" >
                                    </div>
                                    <hr>
                                    <button class="btn btn-primary mb-3" type="submit">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>