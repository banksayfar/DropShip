<?php
  require_once 'condb.php';

?>
<!DOCTYPE>
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
      <h1 align="center"> Register </h1>
      <hr />
      <form action="addRegister.php" method="POST" >
        <div class="form-group">
          <div class="col-sm-12">
            <p> code</p>
            <input type="text"  name="code" class="form-control" required placeholder="" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> ชื่อเล่น</p>
            <input type="text"  name="user" class="form-control" required placeholder="" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> ชื่อ</p>
            <input type="text"  name="name" class="form-control" required placeholder="" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> นามสกุล </p>
             <input type="text"  name="lastname" class="form-control" required placeholder="" />
          </div>
      </div>
       <div class="form-group">
         <div class="col-sm-12">
            <p> วันเดือนปีเกิด </p>
 			<input type="text"  name="birth" class="form-control" required placeholder="" />
          </div>
          </div>
         <div class="form-group">
         <div class="col-sm-6">
            <p> ที่อยู่ </p>
             <input type="text"  name="address" class="form-control" required placeholder="" />
          </div>
      <div class="col-sm-6">
            <p> facebook </p>
             <input type="text"  name="facebook" class="form-control" required placeholder="" />
          </div>
       <div class="col-sm-6">
            <p> LINE </p>
             <input type="text"  name="line" class="form-control" required placeholder="" />
          </div>
        
      <div class="col-sm-6">
            <p> email </p>
             <input type="text"  name="email" class="form-control" required placeholder="" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> password </p>
             <input type="password"  name="password" class="form-control" required placeholder="" />
          </div>
      </div>
        
       <div class="form-group">
       	<div class="col-sm-12">
         <p>Gender</p>		
			<input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female
			
		</div>
		</div>
      <div class="form-group">
          <div class="col-sm-5 col-sm-push-4">
            <button  type="submit" class="btn btn-primary" name="save" >  Register  </button>
		</div>
	   <div class="form-group">
          <div class="col-sm-5 col-sm-push-1">
            <a href="login.php" button  type="submit" class="btn btn-primary" >  Cancel  </a>
		</div>
		</div>
          </div>
       </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>