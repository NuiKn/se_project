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
   
    <?php for($i = 0,$j=1; $i<4; $i++,$j++): ?>
    <?php if($criteriakpis != NUll): ?>
    <td><?php echo e($criteriakpis[$i]->title); ?></td>
    <?php endif; ?>
    
    <table class="table">
        <thead>
            <tr> 
            <th scope="max">max</th>
            <th scope="min">min</th>
            <th scope="levelOfQuality">grade</th>
            <th scope="">Select</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $selectionkpis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $select): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <?php if(($select->idcriteriakpi==$j)): ?>
                    <td><?php echo e($select->max); ?></td>
                    <td><?php echo e($select->min); ?></td>  
                    <td><?php echo e($select->grade); ?></td>
                    
                    <td><input type="checkbox" id="a" onclick="return confirm('กรุณาเลือกเพียง 1 ตัวเลือกของแต่ละหัวข้อเท่านั้น คุณต้องการเลือกใช่หรือไม่')" >
                <?php endif; ?>
               
                
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
        </tbody>
      </table>
     <?php endfor; ?>
     <input type="submit" value="บันทึก" onclick="return confirm('คุณต้องการให้ บันทึก ผลของการเลือกหรือไม่')">
  </body>
</html><?php /**PATH D:\SE_test\example-app\resources\views/env.blade.php ENDPATH**/ ?>