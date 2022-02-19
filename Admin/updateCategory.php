<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <?php include('adminNavbar.php'); ?>

    <section class="flex">

        <?php include('sidebar.php'); ?>

        <section class="p-6 w-full bg-grey  dark:bg-gray-500 ">
            <h2 class="mb-6 text-2xl font-semibold text-gray-700 capitalize dark:text-white">Update Category</h2>

            <form>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="selectCategory">Select Category Name</label>
                    <!-- <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"> -->

                    <div class="flex-1 hidden sm:block">
                        <label class="sr-only" for="location"> Location </label>

                        <select class="w-4/5 h-10 mt-2 mb-3 px-3 text-sm border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" id="location">
                            <option>Family Tour</option>
                            <option>Adventure Tour</option>
                            <option>Special Event Tour</option>
                            <option>Group tour</option>
                            <option>Themed Vacation</option>
                        </select>
                        <button class="px-6 py-2 ml-16 justify-end leading-5 text-black  transition-colors duration-300 transform bg-white rounded-md hover:bg-grey  ">Show</button>
                    </div>

                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="categoryName">Category Name</label>
                    <input id="categoryName" type="text" class="block w-4/5 px-4 py-2 mt-2  text-gray-700 bg-white border border-gray-200 rounded-md  dark:text-black dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>


                <div class="flex justify-end mt-6">
                    <button class="px-6 py-2 mr-4 leading-5 text-white  transition-colors duration-300 transform bg-blue-400 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 font-bold">Save</button>
                </div>

            </form>
        </section>
    </section>
    <?php include('adminFooter.php'); ?>
</body>

</html>