<!--HOME PAGE-->
<div class="row">
  <div class="col-2">
    <h1>SEWA BARANG</h1>
    <p>
      Aplikasi pinjam-meminjam barang yang dapat <br />
      membantu dalam mempersiapkan kebutuhan acara.
    </p>
    <a href="#product" class="btn-home">Get Started</a>
  </div>
  <div class="col-2">
    <img src="/Assets/Images/img-2.jpg" width="100%" />
  </div>
</div>
</div>
</div>

<!-------Produk kategori---->
<div class="kategori" id="product">
  <div class="small-container">
    <h2 class="title">Product</h2>
    <div class="row">
      <?php
      foreach ($barang as $row) :
      ?>
        <div class="col-4">
          <a href="/product/detail/<?= $row['nama_product']; ?>">
            <img src="/assets/images/<?= $row['input_gambar']; ?>" />
          </a>
          <h4><?= $row['nama_product']; ?></h4>
          <p><?= $row['harga']; ?></p>
        </div>
      <?php endforeach; ?>
      <a class="title" href="/product">View More</a>
    </div>

  </div>
</div>