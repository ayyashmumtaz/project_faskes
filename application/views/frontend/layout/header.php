<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Frontend CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
  <title><?= $title ?></title>
</head>
<body>
  <header>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white" id="mainNav">
      <div class="container px-5">
        <a class="navbar-brand fw-bold" href="<?= base_url() ?>homepage">SIFASKES DEPOK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarResponsive">
          <ul class="navbar-nav my-3 my-lg-0 mx-auto">
            <li class="nav-item"><a class="nav-link me-lg-3 active" href="<?= base_url() ?>homepage">Home</a></li>
            <li class="nav-item"><a class="nav-link me-lg-3" href="#Articles">Articles</a></li>
            <li class="nav-item"><a class="nav-link me-lg-3" href="#About">About</a></li>
          </ul>
          <div>
            <!-- <a href="<?= base_url() ?>login" class="btn btn-outline-primary rounded px-3 mb-2 mb-lg-0">
              <span class="d-flex align-items-center">
                <span class="small">Masuk</span>
              </span>
            </a>
            <a href="<?= base_url() ?>login/register" class="btn btn-primary rounded px-3 mb-2 ms-2 mb-lg-0">
              <span class="d-flex align-items-center">
                <span class="small">Daftar</span>
              </span>
            </a> -->
            <a href="<?= base_url() ?>Login/logout" class="btn btn-danger rounded px-3 mb-2 ms-2 mb-lg-0">
              <span class="d-flex align-items-center">
                <span class="small">Sign Out</span>
              </span>
            </a>
          </div>
        </div>
      </div>
    </nav>