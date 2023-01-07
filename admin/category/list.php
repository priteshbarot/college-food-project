<?php include('../../constants/index.php'); ?>
<?php include('../../utils/check_session.php'); ?>
<?php include('../../utils/category/category_list.php'); ?>
<?php include('../../components/header.php'); ?>
<?php include('./../components/sidebar.php'); ?>
<div class="ml-[25%]">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Category Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_array($category_list)) {?>
                    <tr class="bg-white border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <?php echo $row['category_name']; ?>
                        </th>
                        <td class="px-6 py-4">
                            <?php echo $row['category_desc']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 hover:underline pr-8">Edit</a>
                            <a href="#" class="font-medium text-red-600 hover:underline">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('../../components/footer.php'); ?>