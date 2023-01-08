<?php 
 try {
    include('../connection.php');

    function getCategory($con,$id){
        $sql = 'select * from categories where id='.$id;
        $res = mysqli_query($con,$sql);
        if($res && mysqli_num_rows($res)){
            return mysqli_fetch_assoc($res);
        }
        else{
            return 0;
        }
    }

    $category_id = mysqli_real_escape_string($con,$_GET['id']);

    if(getCategory($con,$category_id)){
        $sql = "delete from categories where id = ".$category_id;
        $res = mysqli_query($con,$sql);
        header('Location: ../../admin/category/list.php');
    }
    else{
        header('Location: ../../admin/category/list.php');
    }

} 
catch (\Throwable $th) {
    print_r($th);
    exit;
}