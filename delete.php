<?php
    require_once 'condb.php';

    $id_pd = $_GET['id_pd'];

    $sql = "SELECT * FROM `test` WHERE test.id_pd = $id_pd";

    $query = mysqli_query($conn,$sql);

    $num = mysqli_num_rows($query);

    $fetch = mysqli_fetch_assoc($query);
?>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
 
<h1>คุณต้องการลบข้อมูลนี้ใช่หรือไม่</h1>
 
<form action="doDelete.php" method="POST" enctype="multipart/form-data"  name="addprd" class="form-horizontal" id="addprd">
        
            <input type="hidden" name="id_pd" value="<?=$fetch['id_pd']?>"/>
            
            <button  type="submit" class="btn btn-primary" name="save" >  ลบ  </button>
                        
          </div>
       </div>
      </form>
 
 
</body>
</html>