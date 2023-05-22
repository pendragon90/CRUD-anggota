<?php 

include ('layout/header.php');
include ('config/koneksi.php');
include ('config/query.php');

$no_urut = 1;

?>

    <div class="daftarAnggota container mt-5 table-responsive">
   <div class="mb-3 text-lg-start text-center">
   <a href="add.php" class="btn btn-primary">Tambah Data</a>
   </div>
      <table class="table table-striped table-bordered" id="table">
        <thead>
          <tr>
            <th class="text-center">No.</th>
            <th class="text-center">ID</th>
            <th class="text-center">Nama</th>
            <th class="text-center">NIP</th>
            <th class="text-center">No.HP</th>
            <th class="text-center">Tanggal Lahir</th>
            <th class="text-center">Aksi/Pilihan</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach($results as $result ) : ?>
          <tr>
            <td class="text-center"><?php echo $no_urut++; ?></td>
            <td class="text-center"><?php echo $result['id']?></td>
            <td><?php echo $result['nama']?></td>
            <td><?php echo $result['nip']?></td>
            <td><?php echo $result['no_hp']?></td>
            <td><?php echo $result['tgl_lahir']?></td>
            <td width="25%" class="text-center">
              <a href ="update.php?id=<?php echo $result['id']; ?>" class="btn btn-warning">Edit</a>
              <a href ="config/delete.php?id=<?php echo $result['id']; ?>" class="btn btn-danger mt-2 mt-md-0" >Hapus</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

<?php 

include 'layout/footer.php';

?>

