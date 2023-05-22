<?php 

include 'layout/header.php';


?>

<div class="container mt-5">
      <form action="config/insert.php" method="post">
      <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" placeholder="" name="nama" required />
      </div>

      <div class="mb-3">
        <label for="nip" class="form-label">NIP</label>
        <input type="text" class="form-control" id="nip" placeholder="" name="nip" required />
      </div>

      <div class="mb-3">
        <label for="no_hp" class="form-label">No. HP</label>
        <input type="text" class="form-control" id="no_hp" placeholder="" name="no_hp" required />
      </div>

      <div class="mb-3">
        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl_lahir" placeholder="" name="tgl_lahir" required />
      </div>

      <button class="btn btn-primary">Tambah</button>
      </form>
    </div>

<?php 

include 'layout/footer.php';

?>

