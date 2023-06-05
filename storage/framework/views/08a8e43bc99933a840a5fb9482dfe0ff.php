<!DOCTYPE html>
<html>
<head>
<style>
#TB {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#TB td, #TB th {
  border: 1px solid #ddd;
  padding: 8px;
}

#TB tr:nth-child(even){background-color: #f2f2f2;}

#TB tr:hover {background-color: #ddd;}

#TB th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #76c4f4;
  color: white;
}
</style>
</head>
<body>

<h1>Data Penilaian</h1>

<table id="TB">
  <tr>
    <th>No</th>
    <th scope="col">Id Peringkat</th>
    <th scope="col">Id Karyawan</th>
    <th scope="col">Id Penilaian</th>
    <th scope="col">Nilai</th>
    <th scope="col">Peringkat</th>
  </tr>
  <?php
    $no=1;
  ?>
  <?php $__currentLoopData = $data_peringkat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($no++); ?></td>
    <td><?php echo e($post['id_peringkat']); ?></td>
    <td><?php echo e($post['id_karyawan']); ?></td>
    <td><?php echo e($post['id_penilaian']); ?></td>
    <td><?php echo e($post['nilai']); ?></td>
    <td><?php echo e($post['peringkat']); ?></td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

</body>
</html>


<?php /**PATH D:\Kuliah\Semester 4\Sistem Informasi\Website SI\WEBSI\resources\views//dashboard/peringkats/pdf.blade.php ENDPATH**/ ?>