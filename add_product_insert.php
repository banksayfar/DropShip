<?php
  require_once 'condb.php';

?>
<!DOCTYPE>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6"> <br />
      <h1 align="center"> ฟอร์มเพิ่มสินค้า </h1>
      <hr />
      <form action="add_product_doinsert.php" method="POST" enctype="multipart/form-data"  name="addprd" class="form-horizontal" id="addprd">
        <div class="form-group">
          <div class="col-sm-12">
            <p> รหัสสินค้า</p>
            <input type="text"  name="code_pd" class="form-control" required placeholder="รหัสสินค้า" />
          </div>
        </div>
        <div class="form-group">

          <div class="col-sm-12">
          
            <p> ชื่อสินค้า</p>
            <input type="text"  name="name_pd" class="form-control" required placeholder="ชื่อสินค้า" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> รายละเอียดสินค้า </p>
            <textarea name="detail_pd" class="form-control"  rows="3" required placeholder="รายละเอียดสินค้า"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3">
            <p> ราคา (บาท) </p>
            <input type="number"  name="price_pd" min="0" max="2000" maxlength="6" amen="p_price" class="form-control" required placeholder="ราคา" />
           
          </div>
          <div class="col-sm-8 info">
            <p> ภาพสินค้า </p>
            <input type="file" name="img_pd" class="form-control" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5 col-sm-push-4">
            <button  type="submit" class="btn btn-primary" name="save" >  เพิ่มสินค้า  </button>

          </div>
       </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>