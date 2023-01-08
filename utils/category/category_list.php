<?php 
 try {
    include('../../utils/connection.php');
    $page = isset($_GET['page']) ? (int) $_GET['page'] : 0;
    
    function getTotalPages($con){
        $sql = 'select * from categories';
        $res = mysqli_query($con,$sql);
        return ceil(mysqli_num_rows($res)/5);
    }
    
    function getCategoryListPaginate($con,$page){
        $sql = 'select * from categories limit '.($page*5).',5';
        $res = mysqli_query($con,$sql);
        return $res;
    }

} 
catch (\Throwable $th) {
print_r($th);
exit;
}