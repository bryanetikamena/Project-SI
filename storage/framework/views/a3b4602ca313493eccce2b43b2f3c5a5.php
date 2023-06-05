

<?php $__env->startSection('container'); ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom btn-toolbar mb-2 mb-md-0">
    <h1 class="h2">Create New Karyawan</h1>
  </div>


  <div class="col-lg-5">
    <form method="post" action="/dashboard/karyawans">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
          <p> </p>
          <label for="id_karyawan" class="form-label">Id Karyawan</label>
          <input type="text" name="id_karyawan" class="form-control" id="id_karyawan" value="<?php echo e(old('id_karyawan')); ?>">
        </div>
        <div class="mb-3">
            <p> </p>
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="<?php echo e(old('nama')); ?>">
        </div>
        <div class="mb-3">
          <p> </p>
          <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
          <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="<?php echo e(old('tempat_lahir')); ?>">
       </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?php echo e(old('tanggal_lahir')); ?>">
        </div>
        <div class="mb-3">
          <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
          <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="<?php echo e(old('jenis_kelamin')); ?>">
      </div>
      <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo e(old('alamat')); ?>">
      </div>
      <div class="mb-3">
          <label for="kontak" class="form-label">Kontak</label>
          <input type="text" name="kontak" class="form-control" id="kontak" value="<?php echo e(old('kontak')); ?>">
      </div>
      <div class="mb-3">
          <label for="jabatan" class="form-label">Jabatan</label>
          <input type="text" name="jabatan" class="form-control" id="jabatan" value="<?php echo e(old('jabatan')); ?>">
      </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
  </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 4\Sistem Informasi\Website SI\WEBSI\resources\views/dashboard/karyawans/create.blade.php ENDPATH**/ ?>