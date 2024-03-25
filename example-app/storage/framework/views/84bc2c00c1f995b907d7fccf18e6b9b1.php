<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <table class="table">
        <thead>
          <tr>
            <th scope="empID ">รหัส</th>
            <th scope="prefix">คำนำหน้าชื่อ</th>
            <th scope="firstName ">ชื่อ</th>
            <th scope="lastName">สกุล</th>
            <th scope="phoneNumber ">โทรศัพท์</th>
            <th scope="email">อีเมล</th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($employee->empID); ?></td>
            <td><?php echo e($employee->prefix); ?></td>
            <td><?php echo e($employee->firstName); ?></td>
            <td><?php echo e($employee->lastName); ?></td>
            <td><?php echo e($employee->phoneNumber); ?></td>
            <td><?php echo e($employee->email); ?></td>
            <td> <a href=> update </a> </td> 
            <td> <a href=> delete </a> </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
        </tbody>
      </table>
  </body>
</html><?php /**PATH D:\SE_test\example-app\resources\views/stud_view.blade.php ENDPATH**/ ?>