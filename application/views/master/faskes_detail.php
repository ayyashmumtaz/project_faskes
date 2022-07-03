<style>
    section {
       animation-name: disolve;
       animation-duration: 0.8s;
    }

    @keyframes disolve {
       from {
          opacity: 0;
       }

       to {
          opacity: 100;
       }
    }
 </style>
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
                   <li class="breadcrumb-item"><a href="<?= base_url('Master/faskes') ?>">Home</a></li>
                   <li class="breadcrumb-item active"><?= $faskes->nama ?></li>
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
             <h3 class="card-title"><b>Detail Faskes, <?= $faskes->nama ?></b></h3>
          </div>

          <div class="card-body">
             <div class="row">
                <div class="col-12 table-responsive">
                   <table class="table table-hover table-bordered">
                      <tr>
                         <td>ID Faskes</td>
                         <td><?= $faskes->id ?></td>
                      <tr>
                         <td>Nama</td>
                         <td><?= $faskes->nama ?></td>
                      </tr>
                      <tr>
                         <td>Alamat</td>
                         <td><?= $faskes->alamat ?></td>
                      </tr>
                      <tr>
                         <td>Kecamatan</td>
                         <td><?= $faskes->nama_kecamatan ?></td>
                      </tr>
                      <tr>
                         <td>Latitude and Longitide</td>
                         <td><?= $faskes->latlong ?></td>
                      </tr>
                      <tr>
                         <td>Deskripsi</td>
                         <td><?= $faskes->deskripsi ?></td>
                      </tr>
                      <tr>
                         <td>Rating</td>
                         <td><?= $faskes->skor_rating ?></td>
                      </tr>
                      <tr>
                         <td>Foto 1</td>
                         <td><?= $faskes->foto1 ?></td>
                      </tr>
                      <tr>
                         <td>Foto 2</td>
                         <td><?= $faskes->foto2 ?></td>
                      </tr>
                      <tr>
                         <td>Foto 3</td>
                         <td><?= $faskes->foto3 ?></td>
                      </tr>
                      <tr>
                         <td>Website</td>
                         <td><?= $faskes->website ?></td>
                      </tr>
                      <tr>
                         <td>Jumlah Dokter</td>
                         <td><?= $faskes->jumlah_dokter ?></td>
                      </tr>
                      <tr>
                         <td>Jumlah Pegawai</td>
                         <td><?= $faskes->jumlah_pegawai ?></td>
                      </tr>
                      <tr>
                         <td>Jenis Faskes</td>
                         <td><?= $faskes->nama_faskes ?></td>
                      </tr>
                      <tr>
                         <td>Action</td>
                         <td>
                            <a href="<?= base_url('Master/faskes_edit?id=') . $faskes->id ?>" class="btn btn-sm btn-success mr-1">
                               <i class="fa-solid fa-file-pen pr-1"></i>Edit
                            </a>
                            <a type="button" class="btn btn-sm btn-danger pr-2" onclick="return deletedata()">
                               <i class="fa-solid fa-trash pr-1"></i>Delete
                            </a>
                         </td>
                      </tr>
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
 <script>
    function deletedata() {
       Swal.fire({
          title: 'Hapus Data?',
          text: "Anda akan menghapus data Faskes <?= $faskes->nama; ?>",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
       }).then((result) => {
          if (result.isConfirmed) {
             window.location = "<?= base_url('Master/faskes_delete?id=') . $faskes->id ?>";
             Swal.fire(
                'Deleted!',
                'Faskes <?= $faskes->nama; ?> Berhasil di Hapus',
                'success'
             )
          }
       })
    }
 </script>