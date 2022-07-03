
    <!-- Header-->
    <div class="container">
      <div class="row hero rounded-5">
        <div class="col-md-7">
          <div class="row row-cols-sm-1 mt-5 txt-cta-hero">
            <h1 class="text-hero fs-5 mx-auto text-md-start"><span class="non-bold">Temukan</span> <br> Fasilitas Kesehatan Depok<br> <span class="non-bold">Sesuka Anda</span></h1>
            <a href="<?= base_url() ?>browse/search?kecamatan=&kategori=" class="btn btn-primary ms-md-4 cta mt-2 mx-auto fw-semibold">Lihat Semua</a>
          </div>
        </div>
      </div>
    </div>


    <?= form_open('browse/search', 'method = GET'); ?>
    <!-- Specific Faskes Search Card -->
    <div class="container position-relative d-flex justify-content-center">
      <div class="row row-cols-sm-12 w-100 rounded-4 bg-glass position-absolute align-items-center justify-content-center py-2">

        <div class="col-md-4 mt-2">
          <h6 class="select-title"><i class="fa fa-location-dot me-2"></i>Kecamatan</h6>

          <select id="kecamatan" name="kecamatan" class="form-select btn btn-primary border-0 w-100">
            <option selected value="">All</option>
            <option value="Cilodong">Cilodong</option>
            <option value="Sukmajaya">Sukmajaya</option>
            <option value="Beji">Beji</option>
            <option value="Pancoran Mas">Pancoran Mas</option>
            <option value="Sawangan">Sawangan</option>
          </select>
        </div>

        <div class="col-md-4 mt-3">
          <h6 class="select-title"><i class="fa fa-notes-medical me-2"></i>Kategori</h6>

          <select id="kategori" name="kategori" class="form-select btn btn-primary border-0 w-100">
            <option selected value="">All</option>
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
      <?= form_close() ?>
      </div>
    </div>
  </header>