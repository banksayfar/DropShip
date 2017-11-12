<?php
    require_once "condb.php";
 
    //print_r($_POST);die();
    $id_pd = $_POST['id_pd'];
 
 
 
    $sql = "DELETE FROM `test` WHERE `test`.`id_pd` = $id_pd";
 
    $query = mysqli_query($conn,$sql);      
 
     
?>
 
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
 
<?php
    if($query){
        header('Location: index.php');
    }else {
        echo "ลบข้อมูลไม่สำเร็จ";       
    }
 
?>
<br/>

</body>
</html>