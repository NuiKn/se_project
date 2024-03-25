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
            <th scope="saleTeamID  ">รหัส</th>
            <th scope="teamName">ทีม</th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $saleteams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $saleteam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($saleteam->saleTeamID); ?></td>
            <td><?php echo e($saleteam->teamName); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
        </tbody>
      </table>
  </body>
</html><?php /**PATH D:\SE_test\example-app\resources\views/team.blade.php ENDPATH**/ ?>