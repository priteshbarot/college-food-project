<?php 
 try {
    include('../connection.php');

    function getFood($con,$id){
        $sql = 'select * from food where id='.$id;
        $res = mysqli_query($con,$sql);
        if($res && mysqli_num_rows($res)){
            return mysqli_fetch_assoc($res);
        }
        else{
            return 0;
        }
    }

    $food_id = mysqli_real_escape_string($con,$_GET['id']);

    if(getFood($con,$food_id)){
        $sql = "delete from food where id = ".$food_id;
        $res = mysqli_query($con,$sql);
        header('Location: ../../admin/food/list.php');
    }
    else{
        header('Location: ../../admin/food/list.php');
    }

} 
catch (\Throwable $th) {
    print_r($th);
    exit;
}