<!-------Favorit---->
<div class="title">
    <h1>Favorite</h1>

</div>

<div class="small-container cart-page">
    <table>
        <tr>
            <th>Product</th>
            <th>Product Address</th>
            <th>Action</th>
        </tr>
        <?php foreach ($favorite as $row) :  ?>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="/assets/images/<?= $row['input_gambar']; ?>">
                        <div>
                            <h4><?= $row['nama_product']; ?></h4>
                            <p><?= $row['deskripsi']; ?></p>
                            <small><?= $row['harga']; ?></small><br>
                            <small>Vendor Name: <?= $row['nama']; ?></small>
                            <br>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="cart-address">
                        <p><?= $row['alamat']; ?></p>
                    </div>
                </td>
                <td> <a href="<?= $row['link_vendor']; ?>" class="btn-home">Rental</a>
                    <a href="/favorite/delete/<?= $row['id_fav']; ?>" onclick="return confirm('Are you sure want to delete this?');" class="btn-home">Remove</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<!------FOOTER------>