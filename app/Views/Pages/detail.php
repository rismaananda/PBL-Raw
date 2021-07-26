<!-------Product Detailsss---->
<div class="small-container single-product">
  <div class="row">
    <div class="col-2">
      <img src="/Assets/images/<?= $product['input_gambar']; ?>" width="100%" id="ProductImg" />

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
      <p>Home / Product</p>

      <h1><?= $product['nama_product']; ?></h1>
      <h4>Vendor: <?= $product['nama']; ?></h4>
      <h4>Rp. <?= $product['harga']; ?></h4>
      <a href="<?= $product['link_vendor']; ?>" class="btn-detail">Rent this Product</a> <span>
        <form action="/favorite/favorite" method="post">
          <?= csrf_field(); ?>
          <button type="submit" class="btn-detail">Add To Favorite</button>
          <input type="hidden" name="id_user_fav" value="<?= session()->get('id_login') ?>">
          <input type="hidden" name="id_product" value="<?= $product['id']; ?>">
        </form>
      </span>
      <h3>Product Details</h3>
      <p><?= $product['deskripsi']; ?></p>
      <h3>Product Address</h3>
      <p><?= $product['alamat']; ?></p>
      <br>
    </div>
  </div>
</div>
</div>
<!-- TITLE
<div class="small-container">
  <div class="row row-2">
    <h2>Related Product</h2>
    <p>View More</p>
  </div>
</div>

<div class="small-container">
  <div class="row">
    <div class="col-4">
      <img src="/assets/images/a2.jpg" />
      <h4>Mic</h4>

      <p>Rp. 10.000</p>
    </div>
    <div class="col-4">
      <img src="/assets/images/a6.jpg" />
      <h4>Luxury Gorden</h4>
      <p>Rp. 350.000</p>
    </div>
    <div class="col-4">
      <img src="/assets/images/a1.jpg" />
      <h4>Blazer for wedding</h4>
      <p>Rp. 50.000</p>
    </div>
    <div class="col-4">
      <img src="/assets/images/a5.jpg" />
      <h4>Kamera</h4>
      <p>Rp. 150.000</p>
    </div>
  </div>
</div> -->