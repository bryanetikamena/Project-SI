

<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Users</h1>

    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="/exportuser" class="btn btn-info btn-sm">Export PDF</a>
      </div>
    </div>
  </div>

  <?php if(session()->has('success')): ?>
    <div class="alert alert-secces" role="alert" col-lg-8></div>
      <?php echo e(session('succes')); ?>

    </div>
  <?php endif; ?>

  <h4>Tabel Users</h4>
  <div class="table-responsive">
    <a href="/dashboard/users/create" class="btn btn-primary mb-3">Create</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>NO</th>
          <th scope="col">Username</th>
          <th scope="col">Id Admin</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        <?php $no=0; ?>
        <?php $__currentLoopData = $data_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $no++; ?>
        <tr>
          <td><?php echo e($no); ?></td>
          <td><?php echo e($post['username']); ?></td>
          <td><?php echo e($post['id_admin']); ?></td>
          <td><?php echo e($post['email']); ?></td>
          <td><?php echo e($post['password']); ?></td>
          <td>
            <a href="/showuser/<?php echo e($post->id); ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="/deleteuser/<?php echo e($post->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Confirm To Delete')"">Delete</a>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </tbody>
    </table>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 4\Sistem Informasi\Website SI\WEBSI\resources\views/dashboard/users/index.blade.php ENDPATH**/ ?>