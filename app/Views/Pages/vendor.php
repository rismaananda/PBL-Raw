<!-------Vendor Product---->
<div class="row-vendor">
  <div class="col-12">
    <div class="small-container vendor-page">
      <table>
        <tr>
          <th>Product</th>
          <!-- <th>Action</th> -->
        </tr>
        <?php foreach ($vendor as $v) :  ?>
          <tr>
            <td>
              <div class="vendor-info">
                <a href="/vendor/detail/<?= $v['nama_product']; ?>"><img src="/assets/images/<?= $v['input_gambar']; ?>"></a>
                <div>
                  <br>
                  <p class="vendor-info"><?= $v['nama_product']; ?></p>
                  <small class="vendor-info"><?= $v['harga']; ?></small>
                  <p class="vendor-info">Vendor Name = <?= $v['nama']; ?> </p>
                </div>
              </div>
            </td>
            <!-- <td>
              <div class="vendor-action">
                <a href="">Editt</a><br />
                <a href="">Rented</a><br />
                <a href="">Remove</a><br />
              </div>
            </td> -->
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
  <div class="col-12">
    <div class="small-container vendor-page">
      <form action="/vendor/save" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>

        <div class="upload ">
          <legend>Upload Product</legend>
          <p>
            <input name="id_user" readonly placeholder="id User" id="id_user" type="hidden" value="<?= $v['id_user']; ?>" />
          </p>
          <input type="hidden" name="input_gambar_lama" value="<?= $v['input_gambar']; ?>">

          <p>
            <label for="nama_product">Nama Barang</label>
            <input name="nama_product" required placeholder="Nama Barang" id="nama_product" type="text" />
          </p>
          <p>
            <label for="harga">Harga Barang</label>
            <input name="harga" required placeholder="Rp .xxxx" id="harga" type="text" />
          </p>
          <p>
            <label for="berat">Berat Barang</label>
            <input name="berat" required placeholder="Kilogram" id="berat" type="text" />
          </p>
          <p>
            <label for="alamat">Alamat Barang</label>
            <textarea name="alamat" required placeholder="Alamat Barang" id="alamat"></textarea>
          </p>
          <p>
            <label for="deskripsi">Deskripsi Barang</label>
            <textarea name="deskripsi" required placeholder="Deskripsi Barang" id="deskripsi"></textarea>
          </p>

          <!-- Input Gambar utama -->
          <div class="form-group row">
            <div class="col-sm-3">
              <img src="/assets/images/default.png" class="img-thumbnail img-preview">
            </div>
            <div class="col-sm-9">
              <div class="custom-file">
                <input type="file" class="custom-file-input <?= ($validation->hasError('input_gambar')) ? 'is-invalid' : ''; ?>" id="input_gambar" name="input_gambar" onchange="previewImg()">
                <div class="invalid-feedback">
                  <?= $validation->getError('input_gambar'); ?>
                </div>
                <Label class="custom-file-label" for="input_gambar"> Gambar Utama</Label>
              </div>
            </div>
          </div>
          <!-- Input Gambar 2 -->
          <div class="form-group row">
            <div class="col-sm-3">
              <img src="/assets/images/default.png" class="img-thumbnail img-preview2">
            </div>
            <div class="col-sm-9">
              <div class="custom-file">
                <input type="file" class="custom-file-input <?= ($validation->hasError('input_gambar_2')) ? 'is-invalid' : ''; ?>" id="input_gambar_2" name="input_gambar_2" onchange="previewImg2()">
                <div class="invalid-feedback">
                  <?= $validation->getError('input_gambar_2'); ?>
                </div>
                <Label class="custom-file-label" id="input_gambar2" for="input_gambar_2">Gambar 2</Label>
              </div>
            </div>
          </div>
          <!-- Input Gambar 3 -->
          <div class="form-group row">
            <div class="col-sm-3">
              <img src="/assets/images/default.png" class="img-thumbnail img-preview3">
            </div>
            <div class="col-sm-9">
              <div class="custom-file">
                <input type="file" class="custom-file-input <?= ($validation->hasError('input_gambar_3')) ? 'is-invalid' : ''; ?>" id="input_gambar_3" name="input_gambar_3" onchange="previewImg3()">
                <div class="invalid-feedback">
                  <?= $validation->getError('input_gambar_3'); ?>
                </div>
                <Label class="custom-file-label" id="input_gambar3" for="input_gambar_3">Gambar 3</Label>
              </div>
            </div>
          </div>
          <!-- Input Gambar 4 -->
          <div class="form-group row">
            <div class="col-sm-3">
              <img src="/assets/images/default.png" class="img-thumbnail img-preview4">
            </div>
            <div class="col-sm-9">
              <div class="custom-file">
                <input type="file" class="custom-file-input <?= ($validation->hasError('input_gambar_4')) ? 'is-invalid' : ''; ?>" id="input_gambar_4" name="input_gambar_4" onchange="previewImg4()">
                <div class="invalid-feedback">
                  <?= $validation->getError('input_gambar_4'); ?>
                </div>
                <Label class="custom-file-label" id="input_gambar4" for="input_gambar_4"> Gambar 4</Label>
              </div>
            </div>
          </div>


          <p>
            <button type="submit" class="btn-home">Submit</button>
          </p>
        </div>
      </form>
    </div>
  </div>
</div>