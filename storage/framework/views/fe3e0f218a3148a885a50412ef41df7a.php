

<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kriteria Kerja Sama</h1>

    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="/exportkriteriakerjasama" class="btn btn-info btn-sm">Export PDF</a>
      </div>
    </div>
  </div>

  <h4>Tabel</h4>
  <div class="table-responsive">
    <a href="/dashboard/kriteria_kerja_samas/create" class="btn btn-primary mb-3">Create</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>NO</th>
          <th scope="col">Id Kriteria Kerja Sama</th>
          <th scope="col">Id Karyawan</th>
          <th scope="col">Id Bobot Kriteria</th>
          <th scope="col">Poin Penilaian</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        <?php $no=0; ?>
        <?php $__currentLoopData = $data_kriteria_kerja_sama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $no++; ?>
        <tr>
          <td><?php echo e($no); ?></td>
          <td><?php echo e($post['id_kriteria_kerja_sama']); ?></td>
          <td><?php echo e($post['id_karyawan']); ?></td>
          <td><?php echo e($post['id_bobot_kriteria']); ?></td>
          <td><?php echo e($post['poin_penilaian']); ?></td>
          <td><td>
            <a href="/showkriteriakerjasama/<?php echo e($post->id); ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="/deletekriteriakerjasama/<?php echo e($post->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Confirm To Delete')"">Delete</a>
          </td></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 4\Sistem Informasi\Website SI\WEBSI\resources\views/dashboard/kriteria_kerja_samas/index.blade.php ENDPATH**/ ?>