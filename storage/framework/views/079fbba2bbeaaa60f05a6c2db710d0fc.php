

<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Karyawan</h1>

    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="/exportkaryawan" class="btn btn-info btn-sm">Export PDF</a>
      </div>
    </div>
  </div>

  <h4>Tabel</h4>
  <div class="table-responsive">
    <a href="/dashboard/karyawans/create" class="btn btn-primary mb-3">Create</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>NO</th>
          <th scope="col">Id Karyawan</th>
          <th scope="col">Nama</th>
          <th scope="col">Tempat Lahir</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Jenis Kelamain</th>
          <th scope="col">Alamat</th>
          <th scope="col">Kontak</th>
          <th scope="col">Jabatan</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        <?php $no=0; ?>
        <?php $__currentLoopData = $data_karyawan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $no++; ?>
        <tr>
          <td><?php echo e($no); ?></td>
          <td><?php echo e($post['id_karyawan']); ?></td>
          <td><?php echo e($post['nama']); ?></td>
          <td><?php echo e($post['tempat_lahir']); ?></td>
          <td><?php echo e($post['tanggal_lahir']); ?></td>
          <td><?php echo e($post['jenis_kelamin']); ?></td>
          <td><?php echo e($post['alamat']); ?></td>
          <td><?php echo e($post['kontak']); ?></td>
          <td><?php echo e($post['jabatan']); ?></td>
          <td><td>
            <a href="/showkaryawan/<?php echo e($post->id); ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="/deletekaryawan/<?php echo e($post->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Confirm To Delete')"">Delete</a>
          </td></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </tbody>
    </table>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 4\Sistem Informasi\Website SI\WEBSI\resources\views/dashboard/karyawans/index.blade.php ENDPATH**/ ?>