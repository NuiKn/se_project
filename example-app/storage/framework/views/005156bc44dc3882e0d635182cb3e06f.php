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

    <!-- Example Code -->
    
    
    <form class="row g-3" method="POST" action="insert"> 
      <?php echo csrf_field(); ?>
      <div class="col-md-4">
        <label for="inputState" class="form-label">รอบการประเมิน</label>
        <select name="idround" class="form-select">
            <?php foreach($rounds as $round){ 
                echo"<option value= $round->idround ";
                echo"> $round->idround. $round->date</option>";
                }; 
            ?></select>
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">ผู้ประเมิน</label>
        <select name="empID1" class="form-select">
            <?php foreach($employees as $employee){ 
              if ($employee->positionID == 1 || $employee->positionID == 2) {
                echo"<option value= $employee->empID ";
                echo"> $employee->firstName. $employee->lastName</option>";
                }; 
              }
                
            ?></select>
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">ผู้ถูกประเมิน</label>
        <select name="empID2" class="form-select">
            <?php foreach($employees as $employee){ 
                if ($employee->positionID == 2 || $employee->positionID == 3) {
                echo"<option value= $employee->empID ";
                echo"> $employee->firstName. $employee->lastName</option>";
                }; 
              }
            ?></select>
      </div>
      <div class="col-md-2">
        <label for="inputState" class="form-label">ชื่อแบบประเมิน </label>
        <select name="idset" class="form-select">
            <?php $setkpis = DB::table('setkpi')->get();
            foreach($setkpis as $setkpi){ 
              echo"<option value= $setkpi->idset ";
              echo"> $setkpi->titleset</option>";
           
            }; 
            
            ?></select>
        
      </div>
      <div class="col-md-2">
        <label for="inputState"class="form-label">วันที่ประเมิน</label>
        <input type="date" name="date" class="form-select"
            value="2023-01-01"
            min="2024-03-01" max="2024-12-31">
      </div><br>
      
      <input type="submit" value="บันทึก" onclick="return confirm('คุณแน่ใจว่าจะเพิ่มแบบประเมินนี้หรือไม่')">
      
    </form>



    
   
    <!-- End Example Code -->
  </body>
</html><?php /**PATH D:\SE_test\example-app\resources\views/db.blade.php ENDPATH**/ ?>