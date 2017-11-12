


<?php
$con=mysqli_connect('localhost','root','','dropsheppee')
    or die("connection failed".mysqli_errno());

$request=$_REQUEST;
$col =array(
    0   =>  'id_pd',
    1   =>  'name_pd',
    2   =>  'code_pd',
    3   =>  'detail_pd',
    4   =>  'price_pd',
    //5   =>  'img_pd',

);  //create column like table in database

$sql ="SELECT * FROM test";
$query=mysqli_query($con,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql ="SELECT * FROM test WHERE 1=1";
if(!empty($request['search']['value'])){
    $sql.=" AND (id_pd Like '".$request['search']['value']."%' ";
   
    $sql.=" OR name_pd Like '".$request['search']['value']."%' )";
}
$query=mysqli_query($con,$sql);
$totalData=mysqli_num_rows($query);

//Order
$sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".
    $request['start']."  ,".$request['length']."  ";

$query=mysqli_query($con,$sql);

$data=array();
$image = '';

 

while($row=mysqli_fetch_array($query)){if($row["img_pd"] != '')
 {
  $image = '<img src="image/'.$row["img_pd"].'" id="imgs" width="70" height="70"
  img.onclick = function();  />';

 }
 else
 {
  $image = '';
 }
    $subdata=array();
    $subdata[]=$image;  //img
    //$subdata[]=$row[0]; //id
    $subdata[]=$row[2]; //code_pd
    $subdata[]=$row[1]; //name
    $subdata[]=$row[3]; //detail_pd 
    $subdata[]=$row[4]; //price_pd
    
          
    $subdata[]='<button type="button" id="getEdit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" data-id="'.$row[0].'"><i class="glyphicon glyphicon-pencil">&nbsp;</i>Edit</button>
                <button type="button" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash">&nbsp;</i>Delete</button>';
    $data[]=$subdata;
}



$json_data=array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);

echo json_encode($json_data);


?>


    


