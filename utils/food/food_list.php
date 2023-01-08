<?php 
 try {
    include('../../utils/connection.php');
    $page = isset($_GET['page']) ? (int) $_GET['page'] : 0;
    
    function getTotalPages($con){
        $sql = 'select * from food';
        $res = mysqli_query($con,$sql);
        return ceil(mysqli_num_rows($res)/5);
    }
    
    function getFoodListPaginate($con,$page){
        $sql = 'select food.*, categories.id, categories.category_name as category_name from food join categories on food.category_id = categories.id order by food.id desc limit '.($page*5).',5';
        $res = mysqli_query($con,$sql);
        return $res;
    }

} 
catch (\Throwable $th) {
    print_r($th);
    exit;
}