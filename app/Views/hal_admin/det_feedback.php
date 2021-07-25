<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js">
    </script>
</head>

<body>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

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
        <h2>Feedback Masuk</h2>
        <div class="row mt-3">
            <?php
            foreach ($feed as $row) :
            ?>
                <div class="card col-md-3 me-3">
                    <h5 class="card-header">Permasalahan : <b class="text-danger"><?= $row['subjek_fb'] ?></b></h5>
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['nama_fb']; ?></h5>
                        <p class="card-text"><?= $row['pesan_fb']; ?>.</p>
                        <a href="<?= base_url('admin/delete_feedback/' . $row['id_fb']) ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus Komentar</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <!--End Tampilan-->
</body>

</html>