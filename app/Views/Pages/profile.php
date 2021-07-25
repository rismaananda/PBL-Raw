<!-- Profile -->
<div class="container mb-5">
  <h1>Hi, User</h1>
  <h1 class="mt-5 text-dark">Profile</h1>
  <form>

    <div class="row">
      <div class="form-group row mt-3">
        <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control" id="staticUsername" value="<?= $profile['username']; ?>" />
        </div>
      </div>
      <div class="form-group row mt-3">
        <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control bg-primary text-white" id="staticNama" value="<?= $profile['nama']; ?>" />
        </div>
      </div>
      <div class="form-group row mt-3">
        <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control" id="statickJk" value="<?= $profile['tanggal_lahir']; ?>" />
        </div>
      </div>
      <div class="form-group row mt-3">
        <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control" id="statickaddress" value="<?= $profile['alamat_user']; ?>" />
        </div>
      </div>
      <div class="form-group row mt-3">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" readonly class="form-control" id="staticEmail" value="<?= $profile['email']; ?>" />
        </div>
      </div>
      <div class="form-group row mt-3">
        <label for="staticEmail" class="col-sm-2 col-form-label">Number Phone</label>
        <div class="col-sm-10">
          <input type="number" readonly class="form-control" id="staticEmail" value="<?= $profile['no_hp']; ?>" />
        </div>
      </div>
      <div class="form-group row mt-3">
        <label for="staticEmail" class="col-sm-2 col-form-label">Vendor Link</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control" id="staticEmail" value="<?= $profile['link_vendor']; ?>" />
        </div>
      </div>
      <div class="form-group row mt-3">
        <div class="col-sm-12">
          <a href="/Login/logout" class="btn btn-primary p-3" style="border-radius: 50px">Logout</a>
        </div>

      </div>

      <div class="col-md btn-user">
        <div class="text-center mt-5">
          <a href="" class="btn btn-primary p-3" data-toggle="modal" data-target="#exampleModal" style="border-radius: 50px">Edit Profile</a>
          <a href="/vendor" class="ml-5">As Vendor</a>
        </div>
      </div>
    </div>
  </form>
</div>
<!-- Profile -->

<!-- Modal Edit Profile -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- FORM -->
        <form action="/profile/edit/<?= $profile['id_user'] ?>" method="POST" enctype="multipart/form-data">
          <?= csrf_field(); ?>
          <div class="form-row">
            <input type="hidden" name="id_login" value="<?= $profile['id_login'] ?>">
            <input type="hidden" name="id_user" value="<?= $profile['id_user'] ?>">
            <input type="hidden" name="username" value="<?= $profile['username'] ?>">
            <div class="form-group col-md-6">
              <label for="link_vendor">Vendor Link</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Vendor Link" value="<?= $profile['link_vendor'] ?>" name="link_vendor" />
            </div>
            <div class="form-group col-md-6">
              <label for="Name">Name</label>
              <input type="text" class="form-control" id="inputPassword4" placeholder="Name" value="<?= $profile['nama'] ?>" name="nama" />
            </div>
          </div>
          <div class="form-group">
            <label for="inputNumber">Number Phone</label>
            <input type="text" class="form-control" id="inputNumber" placeholder="***********" value="<?= $profile['no_hp'] ?>" name="no_hp" />
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputAlamat">Alamat</label>
              <input type="text" class="form-control" id="inputAlamat" value="<?= $profile['alamat_user'] ?>" name="alamat_user" />
            </div>
            <div class="form-group col-md-4">
              <label for="Tanggal Lahir">Tanggal Lahir</label>
              <input type="date" class="form-control" id="inputAlamat" value="<?= $profile['tanggal_lahir'] ?>" name="tanggal_lahir" />
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail">Email</label>
              <input type="email" class="form-control" id="inputEmail" value="<?= $profile['email'] ?>" name="email" />
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Edit Profile -->