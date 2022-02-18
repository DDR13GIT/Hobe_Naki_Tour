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
        <h2 class="mb-6 text-2xl font-semibold text-gray-700 capitalize dark:text-white">Add Category</h2>
        
        <form>
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="categoryName">Category Name</label>
                    <input id="categoryName" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>


            <div class="flex justify-end mt-6">
                <button class="px-6 py-2 leading-5 text-white  transition-colors duration-300 transform bg-blue-400 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 font-bold">Save</button>
            </div>
        </form>
    </section>
    
    <?php include('footer.php'); ?>

</body>
</html>