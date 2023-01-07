<?php include('../../constants/index.php'); ?>
<?php include('../../utils/check_session.php'); ?>
<?php include('../../components/header.php'); ?>
<?php include('./../components/sidebar.php'); ?>
<div class="ml-[25%]">
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <?php include('../../components/alert.php'); ?>
            <h2 class="mb-4 text-xl font-bold text-gray-900 ">Add a new category</h2>
            <form action="<?php echo $url.'utils/category/category_add.php';?>" method="POST">
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="category_name" class="block mb-2 text-sm font-medium text-gray-900 ">Category
                            Name</label>
                        <input type="text" name="category_name" id="category_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Type Category Name" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="category_description"
                            class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
                        <textarea id="category_description" rows="8" name="category_desc"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                            placeholder="Your description here"></textarea>
                    </div>
                </div>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 hover:bg-blue-800">
                    Add Category
                </button>
            </form>
        </div>
    </section>
</div>
<?php include('../../components/footer.php'); ?>