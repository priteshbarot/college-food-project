<?php include('../../constants/index.php'); ?>
<?php include('../../utils/check_session.php'); ?>

<?php include('../../utils/category/category_list.php'); ?>
<?php $category_list = getCategoryList($con); ?>

<?php include('../../components/header.php'); ?>
<?php include('./../components/sidebar.php'); ?>
<div class="ml-[20%]">
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <?php include('../../components/alert.php'); ?>
            <h2 class="mb-4 text-xl font-bold text-gray-900 ">Add a new food</h2>
            <form action="<?php echo $url.'utils/food/food_add.php';?>" method="POST" enctype="multipart/form-data">
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="food_name" class="block mb-2 text-sm font-medium text-gray-900 ">Select Food Category</label>
                        <select name="food_category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <?php while($row = mysqli_fetch_array($category_list)) {?>
                                <option value="<?php echo $row['id'] ?>"><?php echo $row['category_name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="food_name" class="block mb-2 text-sm font-medium text-gray-900 ">Food Name</label>
                        <input type="text" name="food_name" id="food_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Type Food Name" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="food_description"
                            class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
                        <textarea id="food_description" rows="8" name="food_desc"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                            placeholder="Your description here"></textarea>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="food_price" class="block mb-2 text-sm font-medium text-gray-900 ">Food Price</label>
                        <input type="text" name="food_price" id="food_price"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Type Food Name" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="food_img" class="block mb-2 text-sm font-medium text-gray-900 ">Food Image</label>
                        <input type="file" name="food_img" id="food_img"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Type Food Name" required="">
                    </div>
                </div>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 hover:bg-blue-800">
                    Add Food
                </button>
            </form>
        </div>
    </section>
</div>
<?php include('../../components/footer.php'); ?>