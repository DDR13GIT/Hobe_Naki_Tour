<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php include('navbar.php'); ?>
    <?php include('function.php'); ?>
    <!-- banner section**************************************** -->
    <div class=" bg-gradient-to-r from-gray-800 to-blue-600 ">
        <div class=" w-full mx-auto py-12 px-80 z-20">
            <h2 class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
                <span class="block">
                    Hello Traveller
                </span>
                <span class="block text-indigo-500 capitalize">
                    Choose from varieties of Categories
                </span>
            </h2>
        </div>
    </div>


    <section>
        <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-5 lg:grid-cols-4 lg:items-start">
                <div class="lg:sticky lg:top-4">
                    <details open class="overflow-hidden border border-gray-200 rounded">
                        <summary class="flex items-center justify-between px-5 py-3 bg-gray-100 lg:hidden">


                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </summary>

                        <form method="post" class="border-t border-gray-200 lg:border-t-0">
                            <fieldset>
                                <legend class="block w-full px-5 py-3 text-xs font-medium bg-gray-50">
                                    Package Categories
                                </legend>

                                <div class="px-5 py-6 space-y-2">
                                    <?php

                                    $condition = "";
                                    $s = "select * from category";
                                    $result = mysqli_query($cn, $s);
                                    $r = mysqli_num_rows($result);
                                    //echo $r;

                                    while ($data = mysqli_fetch_array($result)) {

                                        echo " <div class='flex items-center'>
    <input id='$data[1]' type='checkbox' name='type$data[0]' class='w-5 h-5 border-gray-300 rounded' />

    <label for='$data[1]' class='ml-3 text-sm font-medium'>
        $data[1]
    </label>
</div>";
                                    }
                                    ?>






                                </div>
                            </fieldset>


                            <div class="flex justify-between px-5 py-3 border-t border-gray-200">
                                <button name="reset" type="button" class="text-xs font-medium text-gray-600 underline rounded">
                                    Reset All
                                </button>

                                <button name="commit" type="submit" class="px-5 py-3 text-xs font-medium text-white transition-colors duration-200 transform bg-green-500 rounded-md hover:bg-green-400 focus:outline-none focus:bg-green-400">
                                    Apply Filters
                                </button>
                            </div>
                        </form>
                    </details>
                </div>




                <div class="lg:col-span-3">
                    <div class="flex items-center justify-between">
                        <p class="text-sm text-gray-500">
                            <span class="hidden sm:inline">
                                Showing
                            </span>
                            all Products
                        </p>


                    </div>

                    <div class="grid grid-cols-1 gap-px mt-4  sm:grid-cols-2 lg:grid-cols-3">







                        <?php
                        $s = "select * from subcategory where Catid IN (0" . $_GET["condition"] . ")";



                        if (isset($_POST['commit'])) {
                            while ($r--) {

                                if (isset($_POST['type' . $r])) {
                                    $condition = $condition . ',' . $r;
                                }
                                echo $condition;
                            }
                        ?>
                            <script>
                                window.location.href = 'subpackages.php?condition=<?php echo $condition; ?>';
                            </script>

                        <?php
                        }


                        $cn = makeconnection();
                        $result = mysqli_query($cn, $s);
                        $r = mysqli_num_rows($result);


                        while ($data = mysqli_fetch_array($result)) {
                        ?>

                            <div class="max-w-lg mx-2 overflow-hidden mt-4 bg-white rounded-lg shadow-md ">
                                <img class="w-full h-64" src="projectImages/sylhet.jpg" alt="Article">

                                <div class="p-4">
                                    <div>
                                        <span class="text-xs font-medium text-blue-600 uppercase ">Premium</span>
                                        <a href="packages.php" class="block mt-2 text-2xl font-semibold text-gray-800 transition-colors duration-200 transform d hover:text-blue-600 "><?php echo $data[1]; ?></a>
                                        <p class="mt-2 text-sm text-gray-600 "></p>
                                    </div>

                                    <div class="mt-4">
                                        <div class="flex items-center">
                                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 11V9a2 2 0 00-2-2m2 4v4a2 2 0 104 0v-1m-4-3H9m2 0h4m6 1a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg> <a href="#" class="mx-2 font-semibold text-green-600 "> From 5500 BDT</a>
                                        </div>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg> <a href="#" class="mx-1 font-semibold text-xs text-green-800 "> 2 days & 3 nights</a>
                                        </div>
                                    </div>

                                    <button name="add" type="button" class="flex items-center justify-center w-full px-8 py-4 mt-4 text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400">
                                        <span class="text-sm font-medium">
                                            Show Details
                                        </span>

                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                        <?php }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php include('footer.php'); ?>

</body>

</html>