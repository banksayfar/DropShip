<?php
    require_once 'condb.php';

    $id_pd = $_GET['id_pd'];

    $sql = "SELECT * FROM `test` WHERE test.id_pd = $id_pd";

    $query = mysqli_query($conn,$sql);

    $num = mysqli_num_rows($query);

    $row = mysqli_fetch_assoc($query);
?>

<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6"> <br />
      <h1 align="center"> แก้ไขสินค้า </h1>
      <hr />
      <form action="add_product_doedit.php" method="POST" enctype="multipart/form-data"  name="addprd" class="form-horizontal" id="addprd">
        <input type="hidden" name="id_pd" value="<?=$row['id_pd']?>"/>
        <div class="form-group">
          <div class="col-sm-12">
            <p> รหัสสินค้า</p>
            <input type="text"  name="code_pd" class="form-control" value="<?=$row['code_pd']?>" required placeholder="รหัสสินค้า" />
          </div>
        </div>
        <div class="form-group">

          <div class="col-sm-12">
          
            <p> ชื่อสินค้า</p>
            <input type="test"  name="name_pd" class="form-control" value="<?=$row['name_pd']?>" required placeholder="ชื่อสินค้า" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> รายละเอียดสินค้า </p>
            <textarea name="detail_pd" class="form-control"  rows="3" value="<?=$row['detail_pd']?>"  required placeholder="รายละเอียดสินค้า"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3">
            <p> ราคา (บาท) </p>
            <input type="number"  name="price_pd" min="0" max=""  value="<?=$row['price_pd']?>"  amen="p_price" class="form-control" required placeholder="ราคา" />
           
          </div>
          <div class="col-sm-8 info">
            <p> ภาพสินค้า </p>
            <input type="file" name="img_pd" class="form-control"  value="<?=$row['img_pd']?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5 col-sm-push-4">
            <button  type="submit" class="btn btn-primary" name="save" >  แก้ไข  </button>
                        
          </div>
       </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>