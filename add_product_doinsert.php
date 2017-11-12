<?php
require_once'condb.php';

if(!isset($_POST['img_pd']));{
        if(!empty($_FILES['img_pd'])){
            $filename =  $_FILES['img_pd']['name'];
            $ext = explode('.',$_FILES['img_pd']['name']);
            $dest =  __DIR__.DIRECTORY_SEPARATOR.'image'.DIRECTORY_SEPARATOR.$filename;
            if(!copy($_FILES['img_pd']['tmp_name'], $dest)) {
                        echo 'upload Error';
                        exit();
                      
              }
              $img_pd = $filename;
          }
      }  
        
        $name_pd = $_POST['name_pd'];
        $code_pd = $_POST['code_pd'];
        $detail_pd = $_POST['detail_pd'];
        $price_pd = $_POST['price_pd'];

        $sql = "INSERT INTO `test` (`name_pd`, `code_pd`, `detail_pd`, `price_pd`, `img_pd`) VALUES ('$name_pd', '$code_pd', '$detail_pd', '$price_pd' , '$img_pd')";
  
        $query = mysqli_query($conn,$sql);

        if ($query) {
          header('Location: index.php');
        }
         

?>