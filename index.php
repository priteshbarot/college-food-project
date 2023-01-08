<?php include('components/header.php'); ?>
<?php include('components/footer.php'); ?>
<?php include('utils/connection.php'); ?>

<body class="bg-gradient-to-l from-white to-[#aeafb8]">
    <?php include('components/user/header.php'); ?>

    <section class="max-h-full mx-5 my-20 md:my-10 md:mx-0">
        <div class="flex flex-col md:flex-row justify-between items-center gap-5">
            <div class="flex justify-between flex-col w-full mx-10 space-y-5 basis-1/2">
                <h1 class="text-2xl md:text-5xl font-serif">Hungry ??</h1>
                <p class="text-xl">Order Food From Favourite Restaurants Near You</p>

                <form>   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Food..." required>
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Search
                        </button>
                    </div>
                </form>
            </div>

            <div class="h-auto basis-1/2">
                <img src="assets/images/pexels-ella-olsson-1640777.jpg" />
            </div>
        </div>
    </section>
</body>