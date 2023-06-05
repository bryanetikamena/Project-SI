

<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Penilaian</h1>

    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="/exportpenilaian" class="btn btn-info btn-sm">Export PDF</a>
      </div>
    </div>
  </div>

  <h4>Tabel</h4>
  <div class="table-responsive">
    <a href="/dashboard/penilaians/create" class="btn btn-primary mb-3">Create</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>NO</th>
          <th scope="col">Id Penilaian</th>
          <th scope="col">Id Karyawan</th>
          <th scope="col">Id Kriteria Tanggung Jawab</th>
          <th scope="col">Id Kriteria Disiplin</th>
          <th scope="col">Id Kriteria Loyalitas</th>
          <th scope="col">Id Kriteria Keahlian</th>
          <th scope="col">Id Kriteria Kerja Sama</th>
          <th scope="col">Id Kriteria Pengetahuan</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>

        <?php $no=0; ?>
        <?php $__currentLoopData = $data_penilaian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $no++; ?>
        <tr>
          <td><?php echo e($no); ?></td>
          <td><?php echo e($post->id_penilaian); ?></td>
          <td><?php echo e($post->id_karyawan); ?></td>
          <td><?php echo e($post->id_kriteria_tanggung_jawab); ?></td>
          <td><?php echo e($post->id_kriteria_disiplin); ?></td>
          <td><?php echo e($post->id_kriteria_loyalitas); ?></td>
          <td><?php echo e($post->id_kriteria_keahlian); ?></td>
          <td><?php echo e($post->id_kriteria_kerja_sama); ?></td>
          <td><?php echo e($post->id_kriteria_pengetahuan); ?></td>
          <td>
            <td>
              <a href="/showpenilaian/<?php echo e($post->id); ?>" class="btn btn-warning btn-sm">Edit</a>
              <a href="/deletepenilaian/<?php echo e($post->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Confirm To Delete')"">Delete</a>
            </td>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


    <table class="table table-striped table-sm ">
      <thead>
        <tr>
          <th>NO</th>
          <th scope="col">Normalisasi Tanggung Jawab</th>
          <th scope="col">Normalisasi Disiplin</th>
          <th scope="col">Normalisasi Loyalitas</th>
          <th scope="col">Normalisasi Keahlian</th>
          <th scope="col">Normalisasi Kerja Sama</th>
          <th scope="col">Normalisasi Pengetahuan</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=0; ?>
        <?php $__currentLoopData = $data_penilaian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $no++; ?>
        <tr>
          <td><?php echo e($no); ?></td>
          <td><?php echo e($post->normalisasi_tanggung_jawab); ?></td>
          <td><?php echo e($post->normalisasi_disiplin); ?></td>
          <td><?php echo e($post->normalisasi_loyalitas); ?></td>
          <td><?php echo e($post->normalisasi_keahlian); ?></td>
          <td><?php echo e($post->normalisasi_kerja_sama); ?></td>
          <td><?php echo e($post->normalisasi_pengetahuan); ?></td>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>



    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>.</p>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 4\Sistem Informasi\Website SI\WEBSI\resources\views/dashboard/penilaians/index.blade.php ENDPATH**/ ?>