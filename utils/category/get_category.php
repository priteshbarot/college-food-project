<?php 
 try {
    include('../../utils/connection.php');
    
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

} 
catch (\Throwable $th) {
    print_r($th);
    exit;
}