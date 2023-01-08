<?php 
 try {
    include('../../utils/connection.php');
    
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


    function getAllFood($con){
        $sql = 'select * from food order by id desc';
        $res = mysqli_query($con, $sql);
        return $res;
    }

    function getFoodByCategory($con, $id){
        $sql = 'select * from food where category_id='.$id;
        $res = mysqli_query($con,$sql);
        if($res && mysqli_num_rows($res)){
            return mysqli_fetch_array($res);
        }
        else{
            return 0;
        }
    }

} 
catch (\Throwable $th) {
    print_r($th);
    exit;
}