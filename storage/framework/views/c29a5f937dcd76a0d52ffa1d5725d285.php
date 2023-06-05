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

<h1>Data Bobot Kriteria</h1>

<table id="TB">
  <tr>
    <th>No</th>
    <th scope="col">Id Bobot Kriteria</th>
    <th scope="col">Nama</th>
    <th scope="col">Bobot</th>
  </tr>
  <?php
    $no=1;
  ?>
  <?php $__currentLoopData = $data_bobot_kriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($no++); ?></td>
    <td><?php echo e($post['id_bobot_kriteria']); ?></td>
    <td><?php echo e($post['nama']); ?></td>
    <td><?php echo e($post['bobot']); ?></td
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

</body>
</html>


<?php /**PATH D:\Kuliah\Semester 4\Sistem Informasi\Website SI\WEBSI\resources\views//dashboard/bobot_kriterias/pdf.blade.php ENDPATH**/ ?>