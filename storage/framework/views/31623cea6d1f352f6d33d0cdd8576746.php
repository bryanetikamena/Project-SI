

<?php $__env->startSection('container'); ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom btn-toolbar mb-2 mb-md-0">
    <h1 class="h2">Create Bobot Kriteria</h1>
  </div>


  <div class="col-lg-5">
    <form method="post" action="/dashboard/bobot_kriterias">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <p> </p>
            <label for="id_bobot_kriteria" class="form-label">Id Bobot Kriteria</label>
            <input type="text" name="id_bobot_kriteria" class="form-control" id="id_bobot_kriteria" value="<?php echo e(old('id_bobot_kriteria')); ?>">
        </div>
        <div class="mb-3">
          <p> </p>
          <label for="nama" class="form-label">Nama</label>
          <input type="text" name="nama" class="form-control" id="nama" value="<?php echo e(old('nama')); ?>">
        </div>
        <div class="mb-3">
            <p> </p>
            <label for="bobot" class="form-label">Id Penilaian</label>
            <input type="text" name="bobot" class="form-control" id="bobot" value="<?php echo e(old('bobot')); ?>">
        </div>
        
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
  </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 4\Sistem Informasi\Website SI\WEBSI\resources\views/dashboard/bobot_kriterias/create.blade.php ENDPATH**/ ?>