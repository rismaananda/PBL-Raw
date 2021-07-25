<!-------Product------>

<div class="small-container">
    <br>
    <div class="row row-2">
        <h2>All Products</h2>
        <select>
            <option>Default Shorting</option>
            <option>Sort by price</option>
            <option>Sort by popularity</option>
        </select>
    </div>
    <form class="form-search" action="" method="POST">
        <div class="search-bar">
            <button class="btn-search" type="submit">search</button>
            <input class="search" type="text" placeholder="product" name="keyword">

        </div>
    </form>
    <div class="row">
        <?php foreach ($product as $p) : ?>
            <div class="col-4">
                <a href="/product/detail/<?= $p['nama_product']; ?>"><img src="/assets/images/<?= $p['input_gambar']; ?>"></a>
                <h4><?= $p['nama_product']; ?></h4>
                <p>Rp. <?= $p['harga']; ?></p>
                <p>vendor: <?= $p['nama']; ?></p>

            </div>
        <?php endforeach; ?>
        <div class="page-btn">
            <?= $pager->links('product', 'product_pagination'); ?>
        </div>
    </div>


</div>
</div>