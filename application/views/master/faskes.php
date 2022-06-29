 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-6">
                <h1><b>Data Faskes</b></h1>
             </div>
             <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href="#">Home</a></li>
                   <li class="breadcrumb-item active">Blank Page</li>
                </ol>
             </div>
          </div>
       </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

       <!-- Default box -->
       <div class="card card-primary card-outline">
          <div class="card-header">
             <h3 class="card-title"><b>List Fasilitas Kesehatan</b></h3>
          </div>

          <div class="card-body">
             <div class="row">
                <div class="form-group row ml-2">
                   <button name="submit" type="submit" class="btn btn-primary">
                      <i class="fa-solid fa-plus mr-2"></i><a href="<?= base_url('Master/faskes_create') ?>" class="text-white">Tambah Faskes</a>
                   </button>
                </div>
                <div class="col-12 table-responsive">
                   <table class="table table-hover table-bordered">
                      <?php $nomor = 1; ?>
                      <?php foreach ($dataFaskes as $df) : ?>
                         <tr>
                            <td>No</td>
                            <td><?= $nomor++ ?></td>
                         <tr>
                            <td>Nama</td>
                            <td><?= $df->nama ?></td>
                         </tr>
                         <tr>
                            <td>Alamat</td>
                            <td><?= $df->alamat ?></td>
                         </tr>
                         <tr>
                            <td>Kecamatan</td>
                            <td><?= $df->nama_kecamatan ?></td>
                         </tr>
                         <tr>
                            <td>Latitude and Longitide</td>
                            <td><?= $df->latlong ?></td>
                         </tr>
                         <tr>
                            <td>Deskripsi</td>
                            <td><?= $df->deskripsi ?></td>
                         </tr>
                         <tr>
                            <td>Rating</td>
                            <td><?= $df->skor_rating ?></td>
                         </tr>
                         <tr>
                            <td>Foto 1</td>
                            <td><?= $df->foto1 ?></td>
                         </tr>
                         <tr>
                            <td>Foto 2</td>
                            <td><?= $df->foto2 ?></td>
                         </tr>
                         <tr>
                            <td>Foto 3</td>
                            <td><?= $df->foto3 ?></td>
                         </tr>
                         <tr>
                            <td>Website</td>
                            <td><?= $df->website ?></td>
                         </tr>
                         <tr>
                            <td>Jumlah Dokter</td>
                            <td><?= $df->jumlah_dokter ?></td>
                         </tr>
                         <tr>
                            <td>Jumlah Pegawai</td>
                            <td><?= $df->jumlah_pegawai ?></td>
                         </tr>
                         <tr>
                            <td>Jenis Faskes</td>
                            <td><?= $df->nama_faskes ?></td>
                         </tr>
                         <tr>
                            <td>Action</td>
                            <td>
                               <a href="<?= base_url('Master/detail?nama=') . $df->id ?>" class="pr-2 text-info">
                                  <i class="fa-solid fa-eye pr-1 text-info"></i>View
                               </a>
                               <a href="<?= base_url('Master/edit?nama=') . $df->id ?>" class="pr-2 text-success">
                                  <i class="fa-solid fa-file-pen pr-1 text-success"></i>Edit
                               </a>
                               <a href="<?= base_url('Master/delete?nama=') .$df->id ?>" class="pr-2 text-danger" onclick="if(!confirm('Anda Yakin Menghapus Data Faskes Bernama, <?= $df->nama ?> ?')) {return false}">
                                  <i class="fa-solid fa-trash pr-1 text-danger"></i>Delete
                               </a>
                            </td>
                         </tr>
                      <?php endforeach ?>
                   </table>
                </div>
             </div>
             <!-- /.card-body -->
          </div>
          <!-- /.card -->

    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->