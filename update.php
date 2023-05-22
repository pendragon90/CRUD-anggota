<?php 

include 'layout/header.php';
include 'config/koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id='$id'");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<div class="container mt-5">
      <form action="config/edit.php" method="post">
        <input type="hidden" value="<?php echo $result[0]['id'] ?>" name="id">
      <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" placeholder="" name="nama" required value="<?php echo $result[0]['nama'] ?>"/>
      </div>

      <div class="mb-3">
        <label for="nip" class="form-label">NIP</label>
        <input type="text" class="form-control" id="nip" placeholder="" name="nip" required value="<?php echo $result[0]['nip'] ?>"/>
      </div>

      <div class="mb-3">
        <label for="no_hp" class="form-label">No. HP</label>
        <input type="text" class="form-control" id="no_hp" placeholder="" name="no_hp" required value="<?php echo $result[0]['no_hp'] ?>"/>
      </div>

      <div class="mb-3">
        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl_lahir" placeholder="" name="tgl_lahir" required value="<?php echo $result[0]['tgl_lahir'] ?>"/>
      </div>

      <button class="btn btn-primary">Update</button>
      </form>
    </div>

<?php 

include 'layout/footer.php';

?>

