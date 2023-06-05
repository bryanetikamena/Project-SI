

<?php $__env->startSection('container'); ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom btn-toolbar mb-2 mb-md-0">
    <h1 class="h2">Create New Users</h1>
  </div>


  <div class="col-lg-5">
    <form method="post" action="/dashboard/users">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <p> </p>
            <label for="id_admin" class="form-label">Id Admin</label>
            <input type="text" name="id_admin" class="form-control" id="id_admin" value="<?php echo e(old('id_admin')); ?>">
        </div>
        <div class="mb-3">
          <p> </p>
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email" value="<?php echo e(old('email')); ?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" value="<?php echo e(old('username')); ?>" >
        </div>
        <div class="mb-3">
          <p> </p>
          <label for="username" class="form-label">Username</label>
          <input type="text" name="username" class="form-control" id="username" value="<?php echo e(old('username')); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
  </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 4\Sistem Informasi\Website SI\WEBSI\resources\views/dashboard/users/create.blade.php ENDPATH**/ ?>