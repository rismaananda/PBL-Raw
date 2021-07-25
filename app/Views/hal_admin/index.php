<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">APB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/admin">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/detail_feedback">Lihat Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a href="/login/logout" class="nav-link text-danger">Logout <i class="fas fa-sign-out-alt"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar-->

    <!--Tampilan-->
    <div class="container mt-3">
        <h1>Ringkasan Data</h1>
        <div class="row mt-3">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">User Terdaftar</h3>
                        <h4 class="card-text mt-3"><i class="fas fa-users"></i> <?= $jml_user ?> User</h4>
                        <a href="<?= base_url('admin/detail_user') ?>" class="btn btn-primary mt-3">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Supplier Terdaftar</h3>
                        <h4 class="card-text mt-3"><i class="fas fa-box"></i> <?= $jml_supp ?> Supplier</h4>
                        <a href="<?= base_url('admin/detail_supplier') ?>" class="btn btn-primary mt-3">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Produk Terdaftar</h3>
                        <h4 class="card-text mt-3"><i class="fas fa-boxes"></i> <?= $jml_brg; ?> Produk</h4>
                        <a href="<?= base_url('admin/detail_produk') ?>" class="btn btn-primary mt-3">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Feedback Masuk</h3>
                        <h4 class="card-text mt-3"><i class="far fa-paper-plane"></i> <?= $jml_feed; ?> Feedback</h4>
                        <a href="<?= base_url('admin/detail_feedback') ?>" class="btn btn-primary mt-3">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Tampilan-->
</body>

</html>