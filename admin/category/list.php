<?php include('../../constants/index.php'); ?>
<?php include('../../utils/check_session.php'); ?>
<?php include('../../utils/category/category_list.php'); ?>
<?php $totalPages = getTotalPages($con); ?>
<?php $category_list = getCategoryListPaginate($con,$page); ?>
<?php $nextPage =$page+1; $prevPage = $page-1 ?>
<?php print_r($nextPage." "); print_r($prevPage); ?>
<?php include('../../components/header.php'); ?>
<?php include('./../components/sidebar.php'); ?>
<div class="ml-[20%]">
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
        <div class="flex justify-end items-center">
            <nav class="mt-8">
                <ul class="inline-flex -space-x-px">
                    <li>
                        <a href="<?php echo $prevPage >= 0 ? $url.'admin/category/list.php?page='.$prevPage : '#'; ?>"
                            class="<?php if($prevPage < 0){ echo "bg-gray-100 text-gray-700";}else{echo "text-gray-500 bg-white";}  ?> px-3 py-2 ml-0 leading-tight border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
                    </li>
                    <?php for ($i=1; $i <= $totalPages; $i++) { ?>
                    <?php if($page == $i-1) {?>
                    <li>
                        <a href="#" aria-current="page"
                            class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700"><?php echo $i ?></a>
                    </li>
                    <?php }else{ ?>
                    <li>
                        <a href="<?php echo $i-1 ? $url.'admin/category/list.php?page='.$i-1 :  $url.'admin/category/list.php' ?>"
                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700"><?php echo $i ?></a>
                    </li>
                    <?php }?>
                    <?php } ?>
                    <li>
                        <a href="<?php echo $nextPage < $totalPages ? $url.'admin/category/list.php?page='.$nextPage : '#'; ?>"
                            class="<?php if($nextPage >= $totalPages){ echo "bg-gray-100 text-gray-700";}else{echo "text-gray-500 bg-white";}  ?> px-3 py-2 leading-tight border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<?php include('../../components/footer.php'); ?>