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
            <li class="nav-item"><a class="nav-link me-lg-3 active" href="#Home">Home</a></li>
            <li class="nav-item"><a class="nav-link me-lg-3" href="#Articles">Articles</a></li>
            <li class="nav-item"><a class="nav-link me-lg-3" href="#About">About</a></li>
          </ul>
          <div>
            <a href="<?= base_url() ?>login" class="btn btn-outline-primary rounded px-3 mb-2 mb-lg-0">
              <span class="d-flex align-items-center">
                <span class="small">Masuk</span>
              </span>
            </a>
            <a href="<?= base_url() ?>login/register" class="btn btn-primary rounded px-3 mb-2 ms-2 mb-lg-0">
              <span class="d-flex align-items-center">
                <span class="small">Daftar</span>
              </span>
            </a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Header-->
    <div class="container">
      <div class="row hero rounded-5">
        <div class="col-md-7">
          <div class="row row-cols-sm-1 mt-5 txt-cta-hero">
            <h1 class="text-hero fs-5 mx-auto text-md-start"><span class="non-bold">Temukan</span> <br> Fasilitas Kesehatan Depok<br> <span class="non-bold">Sesuka Anda</span></h1>
            <a href="<?= base_url() ?>/browse/browseAll" class="btn btn-primary ms-md-4 cta mt-2 mx-auto fw-semibold">Lihat Semua</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Specific Faskes Search Card -->
    <div class="container position-relative d-flex justify-content-center">
      <div class="row row-cols-sm-12 w-100 rounded-4 bg-glass position-absolute align-items-center justify-content-center py-2">

        <div class="col-md-4 mt-2">
          <h6 class="select-title"><i class="fa fa-location-dot me-2"></i></i>Kecamatan</h6>

          <select id="kecamatan" name="kecamatan" class="form-select btn btn-primary border-0 w-100">
            <option selected value="*">All</option>
            <option value="Cilodong">Cilodong</option>
            <option value="Sukmajaya">Sukmajaya</option>
            <option value="Beji">Beji</option>
            <option value="Pancoran Mas">Pancoran Mas</option>
            <option value="Sawangan">Sawangan</option>
          </select>
        </div>

        <div class="col-md-4 mt-3">
          <h6 class="select-title"><i class="fa fa-notes-medical me-2"></i></i>Kategori</h6>

          <select id="kategori" name="kategori" class="form-select btn btn-primary border-0 w-100">
            <option selected value="*">All</option>
            <option value="Rumah Sakit">Rumah Sakit</option>
            <option value="Klinik Gigi">Klinik Gigi</option>
            <option value="Klinik Umum">Klinik Umum</option>
            <option value="Puskesmas">Puskesmas</option>
            <option value="Apotek">Apotek</option>
          </select>
        </div>

        <div class="col-md-4 text-center col-btn-search">
          <button name="submit" type="submit" class="btn btn-primary w-100 text-center mt-4 mb-3 border-0 search">
            <i class="fa fa-magnifying-glass"></i>
            <span class="cari">Cari</span>
          </button>
        </div>

      </div>
    </div>
  </header>