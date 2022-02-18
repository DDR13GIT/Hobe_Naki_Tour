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
    <?php include('navbar.php'); ?>

    <section class="max-w-4xl p-6 mx-auto mt-20 mb-20 pt-10 pb-10 bg-gey rounded-md  dark:bg-gray-500">
        <h2 class="mb-6 text-2xl font-semibold text-gray-700 capitalize dark:text-white">Add Package</h2>
        
        <form>
                <div>
                    <label class=" text-gray-700 dark:text-gray-200" for="packageName">Package Name</label>
                    <input id="packageName" type="text" class="block w-4/5 px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>

                <label class="text-gray-700 dark:text-gray-200" for="selectCategory">Select Category</label>
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

                    <label class="text-gray-700 dark:text-gray-200" for="selectCategory">Select Subcategory </label>
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
            
                    </div>

                    <div>
                    <label class=" text-gray-700 dark:text-gray-200" for="packagePrice">Package Price</label>
                    <input id="packagePrice" type="text" class="block w-4/5 px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>

                <label class="text-gray-700 dark:text-gray-200" for="details">Details</label>
                    <input id="details" type="text" class="block w-4/5 h-32 px-4 py-2 mt-2  text-gray-700 bg-white border border-gray-200 rounded-md  dark:text-black dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
          
                    <div class="h-10 mt-4">
                        <input type="file" class="hide_file  dark:text-gray-200 ">
                    </div>
                    <div class="h-10 mt-4">
                        <input type="file" class="hide_file  dark:text-gray-200 ">
                    </div>
                    <div class="h-10 mt-4">
                        <input type="file" class="hide_file  dark:text-gray-200 ">
                    </div>

            <div class="flex justify-end mt-6">
                <button class="px-6 py-2 leading-5 text-white  transition-colors duration-300 transform bg-blue-400 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 font-bold">Save</button>
            </div>
        </form>
    </section>
    
    <?php include('footer.php'); ?>

</body>
</html>