<?php 
include 'koneksi.php';

// Mengecek data yang diparsing dari kuis
if(isset($_POST['submit'])) {
    $pilihan = $_POST['pilihan'];
    $id_soal = $_POST['id_soal'];
    $jumlah = $_POST['jumlah'];

    // Inisialisasi variabel
    $score = 0;
    $benar = 0;
    $salah = 0;
    $kosong = 0;

    for($i = 0; $i < $jumlah; $i++){
        $nomor_soal = $id_soal[$i];

        // Jika user tidak memilih jawaban
        if(empty($pilihan[$nomor_soal])){
            $kosong++;
        }else{
            // Jika memilih jawaban
            $jawaban = $pilihan[$nomor_soal];

            // Cek jawaban dari database
            $sql = "SELECT * from tabel_soal WHERE id_soal = '$nomor_soal' AND kunci = '$jawaban'";
            $query = mysqli_query($conn, $sql);

            $cek = mysqli_num_rows($query);
            
            // Counter jawaban benar
            if($cek){
                $benar++;
            }else{
                // Jika salah
                $salah++;
            }
        }
        // hasil total = 100/jumlah soal * jawaban benar;
        $sql = "SELECT * from tabel_soal";
        $query = mysqli_query($conn, $sql);
        $jumlah_soal = mysqli_num_rows($query);
        $score = 100/$jumlah_soal * $benar;
        $hasil = number_format($score, 1);
    }
?>
    <div class="container min-vh-100 py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title fs-3 fw-bold mb-5"><?php echo "Skor Anda : ".$hasil; ?></h5>
                        <p class="card-text fs-5 fw-normal">Rincian Jawaban</p>
                        <p class="card-text"><?php echo "Jawaban Benar : ".$benar; ?></p>
                        <p class="card-text"><?php echo "Jawaban Salah : ".$salah; ?></p>
                        <p class="card-text"><?php echo "Jawaban Kosong : ".$kosong; ?></p>
                        <a href="index.php?page=kuis" class="btn btn-primary mt-3">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
}

?>