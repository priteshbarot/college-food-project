<?php 
    include('components/header.php');
    include('components/footer.php');
    include('utils/connection.php');
    include('utils/food/get_food.php');
    include('constants/index.php');

    $id = $_GET['id'];
    $food_list = getFoodByCategory($con, $id);
    $allFood = getAllFood($con);

    if(!$allFood && $food_list){
        header('Location: ./list.php'); 
    }
?>

<body>
    <?php include('components/user/header.php'); ?>
    <div class="grid grid-cols-3 gap-5 mx-auto">
            <?php while ($row = mysqli_fetch_array($allFood)) { ?>
                    
                <a href="#" class="relative block overflow-hidden group">
                    <img
                        src="<?php echo $url.'uploads/'.$row['image']; ?>"
                        alt=""
                        class="object-contain w-full h-64 transition duration-500 group-hover:scale-105 sm:h-72"
                    />
    
                    <div class="relative p-6 bg-white border border-gray-100">
                        <h3 class="mt-4 text-lg font-medium text-gray-900"><?php echo $row['name'] ?></h3>
                        <p class="mt-1.5 text-sm text-gray-700"> &#8377; <?php echo $row['price']; ?></p>
                        <form class="mt-4 flex items-center justify-between space-x-2">
                            <div>
                                <label for="quantity" class="sr-only">Qty</label>

                                <input
                                    type="number"
                                    id="quantity"
                                    min="1"
                                    value="1"
                                    class="w-12 rounded border-gray-200 py-3 text-center text-xs [-moz-appearance:_textfield] [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none"
                                />
                            </div>
                            <button
                                class="block w-full p-4 text-sm font-medium transition bg-blue-700 text-white rounded hover:scale-105"
                            >
                                Add to Cart
                            </button>
                        </form>
                    </div>
                </a>
            <?php } ?>
    </div>
</body>