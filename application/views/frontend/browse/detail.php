<?php
echo $faskes->id;
echo $faskes->nama;
echo $faskes->nama_faskes;
?>

<div class="container-lg">
  <div class="row mt-5">
    <div class="col-md-12">
      <h1 class="fs-2 mb-0"><?= $faskes->nama ?></h1>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <p class="text-muted d-flex align-items-center desc-summary">
        <small><i class="fa fa-star text-warning"></i> <?= $faskes->skor_rating ?> </small>
        <small><i class="fa-solid fa-circle px-1 pb-2"></i></small>
        <small class="fw-bold"><?= $faskes->nama_faskes ?></small>
        <small><i class="fa-solid fa-circle px-1 pb-2"></i></small>
        <small><?= $faskes->alamat ?></small>
      </p>
    </div>
  </div>

  <div class="card mb-3 border-0">
    <div class="row justify-content-between">
      <div class="col-md-7">
        <div class="rounded-4">
          <img src="<?= base_url() ?>assets/img/building-hero2.png" class="img-fluid rounded-4" alt="...">
        </div>

        <div class="row row-cols-2 my-3">
          <div class="col-sm-3">
            <div class="card-body bg-white rounded-3">
              <img src="<?= base_url() ?>assets/img/building-hero2.png" class="img-fluid rounded-4" alt="...">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card-body bg-white rounded-3">
              <img src="<?= base_url() ?>assets/img/building-hero2.png" class="img-fluid rounded-4" alt="...">
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-5">
        <div class="card-body bg-white rounded-4 shadow h-100 p-4">
          <h5 class="card-title">Deskripsi</h5>
          <p class="card-text"><?= $faskes->deskripsi ?></p>
          <small><b>Jumlah Dokter: </b><?= $faskes->jumlah_dokter ?></small>
          <small class="d-block"><b>Jumlah Pegawai: </b><?= $faskes->jumlah_pegawai ?></small>
          <small class="d-block"><b>Website: </b><?= $faskes->website ?></small>
          <small class="d-block"><b>Latlong: </b><?= $faskes->latlong ?></small>
        </div>
      </div>

    </div>
  </div>

  <div class="row mt-5 mx-auto">
    <h6>Apa pendapat anda mengenai fasilitas kesehatan ini?</h6>
    <div class="col-md-7">
      <div class="stars">
        <?= form_open('browse/detail'); ?>
        <input class="star star-5" id="star-5" type="radio" name="star" value="Sangat Bagus" />
        <label class="star star-5" for="star-5"></label>
        <input class="star star-4" id="star-4" type="radio" name="star" value="Bagus" />
        <label class="star star-4" for="star-4"></label>
        <input class="star star-3" id="star-3" type="radio" name="star" value="Biasa Aja" />
        <label class="star star-3" for="star-3"></label>
        <input class="star star-2" id="star-2" type="radio" name="star" value="Kurang Bagus" />
        <label class="star star-2" for="star-2"></label>
        <input class="star star-1" id="star-1" type="radio" name="star" value="Jelek" />
        <label class="star star-1" for="star-1"></label>
        <span class="card"></span>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card border-0">
        <textarea class="card-body rounded-2 shadow border-0" name="komentar" id="komentar" cols="30" rows="3" placeholder="Tulis pendapat anda..."></textarea>
        <!-- <input type="text" name="komentar" id="komentar" class="card-body rounded-2 shadow border-0" placeholder="Tulis pendapat anda..."> -->
      </div>
      <button class="btn btn-primary mt-3 w-100 mb-3">Kirim Komentar</button>
      <?= form_close(); ?>
    </div>
  </div>


</div>