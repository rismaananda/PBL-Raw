<!-------Product Detailsss---->
<div class="small-container single-product">
  <div class="row">
    <div class="col-2">
      <img src="/Assets/images/<?= $product['input_gambar']; ?>" width="100%" id="ProductImg" />
      <br>
      <br>
      <div class="small-img-row">
        <div class="small-img-col">
          <img src="/Assets/images/<?= $product['input_gambar']; ?>" width="100%" id="ProductImg" class="small-img" />
        </div>
        <div class="small-img-col">
          <img src="/Assets/images/<?= $product['input_gambar_2']; ?>" width="100%" id="ProductImg" class="small-img" />
        </div>
        <div class="small-img-col">
          <img src="/Assets/images/<?= $product['input_gambar_3']; ?>" width="100%" id="ProductImg" class="small-img" />
        </div>
        <div class="small-img-col">
          <img src="/Assets/images/<?= $product['input_gambar_4']; ?>" width="100%" id="ProductImg" class="small-img" />
        </div>
      </div>
    </div>

    <div class="col-2">
      <p>Vendor / Product</p>
      <h1><?= $product['nama_product']; ?></h1>
      <h4>Vendor: <?= $product['nama']; ?></h4>
      <h4>Rp. <?= $product['harga']; ?></h4>
      <button class="btn-detail-edit" id="">Edit this Product</button>
      <br>
      <a href="" class="btn-detail">Rented</a>
      <a href="/vendor/delete/<?= $product['id']; ?>" class="btn-detail" onclick="return confirm('Are you sure want to delete this?');">Delete</a>
      <h3>Product Details</h3>
      <p><?= $product['deskripsi']; ?></p>
      <h3>Product Address</h3>
      <p><?= $product['alamat']; ?></p>
      <br>
    </div>
  </div>

  <!--- MOdal -->

  <div class="dalmo" id="dalmo-vendor">
    <div class="dalmo-content">
      <span class="close-btn">&times;</span>
      <div class="dalmo-content-left">
        <form action="/vendor/update/<?= $product['id'] ?>" method="POST" class="dalmo-form" enctype="multipart/form-data">
          <br>
          <h1>Edit Your Product</h1>
          <br>
          <div class="form-validation">
            <input name="id_user" readonly placeholder="id User" id="id_user" type="hidden" value="<?= $product['id_user']; ?>" />
          </div>
          <input type="hidden" name="input_gambarLama" value="<?= $product['input_gambar']; ?>">
          <input type="hidden" name="input_gambar2Lama" value="<?= $product['input_gambar_2']; ?>">
          <input type="hidden" name="input_gambar3Lama" value="<?= $product['input_gambar_3']; ?>">
          <input type="hidden" name="input_gambar4Lama" value="<?= $product['input_gambar_4']; ?>">
          <div class="form-validation">
            <label for="nama_product">Nama Barang</label>
            <input name="nama_product" required placeholder="Nama Barang" id="nama_product" type="text" value="<?= $product['nama_product']; ?>" />
          </div>
          <div class=" form-validation">
            <label for="harga">Harga Barang</label>
            <input name="harga" required placeholder="Rp .xxxx" id="harga" type="text" value="<?= $product['harga']; ?>" />
          </div>
          <div class=" form-validation">
            <label for="berat">Berat Barang</label>
            <input name="berat" required placeholder="Kilogram" id="berat" type="text" value="<?= $product['berat']; ?>" />
          </div>
          <div class=" form-validation">
            <label for="alamat">Alamat Barang</label>
            <textarea name="alamat" required placeholder="Alamat Barang" id="alamat"><?= $product['alamat']; ?></textarea>
          </div>
          <div class="form-validation">
            <label for="deskripsi">Deskripsi Barang</label>
            <textarea name="deskripsi" required placeholder="Deskripsi Barang" id="deskripsi"><?= $product['deskripsi']; ?></textarea>
          </div>
          <!-- gambar utama -->
          <div class="form-group row form-validation">
            <div class="col-sm-3">
              <img src="/assets/images/<?= $product['input_gambar']; ?>" class="img-thumbnail img-preview">
            </div>
            <div class="col-sm-9">
              <div class="custom-file">
                <input type="file" class="custom-file-input <?= ($validation->hasError('input_gambar')) ? 'is-invalid' : ''; ?>" id="input_gambar" name="input_gambar" onchange="previewImg()">
                <div class="invalid-feedback">
                  <?= $validation->getError('input_gambar'); ?>
                </div>
                <Label class="custom-file-label" for="input_gambar"> <?= $product['input_gambar']; ?></Label>
              </div>
            </div>
          </div>
          <!-- gambar 2 -->
          <div class="form-group row form-validation">
            <div class="col-sm-3">
              <img src="/assets/images/<?= $product['input_gambar_2']; ?>" class="img-thumbnail img-preview2">
            </div>
            <div class="col-sm-9">
              <div class="custom-file">
                <input type="file" class="custom-file-input <?= ($validation->hasError('input_gambar_2')) ? 'is-invalid' : ''; ?>" id="input_gambar_2" name="input_gambar_2" onchange="previewImg2()">
                <div class="invalid-feedback">
                  <?= $validation->getError('input_gambar_2'); ?>
                </div>
                <Label class="custom-file-label" id="input_gambar2" for="input_gambar_2"> <?= $product['input_gambar_2']; ?></Label>
              </div>
            </div>
          </div>
          <!-- gambar 3 -->
          <div class="form-group row form-validation">
            <div class="col-sm-3">
              <img src="/assets/images/<?= $product['input_gambar_3']; ?>" class="img-thumbnail img-preview3">
            </div>
            <div class="col-sm-9">
              <div class="custom-file">
                <input type="file" class="custom-file-input <?= ($validation->hasError('input_gambar_3')) ? 'is-invalid' : ''; ?>" id="input_gambar_3" name="input_gambar_3" onchange="previewImg3()">
                <div class="invalid-feedback">
                  <?= $validation->getError('input_gambar_3'); ?>
                </div>
                <Label class="custom-file-label" id="input_gambar3" for="input_gambar_3"> <?= $product['input_gambar_3']; ?></Label>
              </div>
            </div>
          </div>
          <!-- gambar 4 -->
          <div class="form-group row form-validation">
            <div class="col-sm-3">
              <img src="/assets/images/<?= $product['input_gambar_4']; ?>" class="img-thumbnail img-preview4">
            </div>
            <div class="col-sm-9">
              <div class="custom-file">
                <input type="file" class="custom-file-input <?= ($validation->hasError('input_gambar_4')) ? 'is-invalid' : ''; ?>" id="input_gambar_4" name="input_gambar_4" onchange="previewImg4()">
                <div class="invalid-feedback">
                  <?= $validation->getError('input_gambar_4'); ?>
                </div>
                <Label class="custom-file-label" id="input_gambar4" for="input_gambar_4"> <?= $product['input_gambar_4']; ?></Label>
              </div>
            </div>
          </div>
          <div class=" form-validation">
            <button type="submit" class="btn-home">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>