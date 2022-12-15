<?php 
include 'koneksi.php';
?>

<div class="container min-vh-100 py-5">
  <div class="row mb-5">
    <div class="col-lg-12">
        <h3 class="fs-3 fw-normal fw-bold text-center">Kuis</h3>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-10">
      <?php 
        $sql = "SELECT * FROM tabel_soal";
        $result = mysqli_query($conn, $sql);
        $jumlah = mysqli_num_rows($result);
        $no_soal = 0;
        
        if ($jumlah > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
        ?>
          <form action="index.php?page=jawaban" method="POST">
            <input type="hidden" name="id_soal[]" value="<?php echo $row['id_soal']; ?>">
            <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
            <div class="card mb-1">
              <div class="card-header"><?php echo "Soal ". $no_soal = $no_soal + 1;  ?></div>
              <div class="card-body">
                <h5 class="card-title fs-6 fw-normal mb-3">
                  <?php 
                    echo $row['soal'];
                  ?>
                </h5>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pilihan[<?php echo $row['id_soal'] ?>]" value="A">
                  <label class="form-check-label" for="flexRadioDefault1">
                    <?php echo $row['A'] ?>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pilihan[<?php echo $row['id_soal'] ?>]" value="B">
                  <label class="form-check-label" for="flexRadioDefault1">
                    <?php echo $row['B'] ?>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pilihan[<?php echo $row['id_soal'] ?>]" value="C">
                  <label class="form-check-label" for="flexRadioDefault1">
                    <?php echo $row['C'] ?>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pilihan[<?php echo $row['id_soal'] ?>]" value="D">
                  <label class="form-check-label" for="flexRadioDefault1">
                    <?php echo $row['D'] ?>
                  </label>
                </div>
              </div>
            </div>          
        <?php  
          }
        } else {
          echo "0 results";
        }
      ?>
      

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Kirim Jawaban
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Kuis</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Apakah anda sudah yakin?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" name="submit" value="Jawab" class="btn btn-secondary">
            </div>
          </div>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>