<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BelajarAsyik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-primary shadow sticky-top">
      <div class="container py-2">
        <a class="navbar-brand fs-4 fw-bolder text-light" href="index.php?page=home">BelajarAsyik</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-light" href="index.php?page=home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="index.php?page=materi">Materi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="index.php?page=video">Video</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="index.php?page=contohsoal">Contoh Soal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="index.php?page=kuis">Kuis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="index.php?page=team">Our Team</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="home bg-light" id="home">
    <?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];

        switch($page){
            case 'home':
                include "pages/home.php";
                break;
            case 'materi':
                include "pages/materi.php";
                break;
            case 'pldv':
                include "pages/pldv.php";
                break;
            case 'spldv':
                include "pages/spldv.php";
                break;
            case 'grafik':
                include "pages/grafik.php";
                break;
            case 'eliminasi':
                include "pages/eliminasi.php";
                break;
            case 'substitusi':
                include "pages/substitusi.php";
                break;
            case 'video':
                include "pages/video.php";
                break;
            case 'contohsoal':
                include "pages/contohsoal.php";
                break;
            case 'kuis':
                include "pages/kuis.php";
                break;
            case 'jawaban':
                include "pages/jawaban.php";
                break;
            case 'team':
                include "pages/team.php";
                break;
            default:
                echo "Halaman tidak ditemukan";
                break;
        }
    }else{
        include "pages/home.php";
    }

    ?>
    </section>

    <!-- Footer -->
    <footer id="footer" class="bg-primary p-3 text-dark d-flex align-items-center justify-content-center">
      <p class="mt-1 text-light">&copy; 2022 BelajarAsyik</p>
    </footer>
    <!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>
  </body>
</html>
