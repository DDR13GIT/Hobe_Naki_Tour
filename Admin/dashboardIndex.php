<?php if (!isset($_SESSION)) {
    session_start();
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.0.9/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>

    <?php
    if ($_SESSION['loginstatus'] == "") {
        header("location:signin.php");
    }
    ?>

    <?php include('adminNavbar.php'); ?>

    <section class="flex">



        <?php include('sidebar.php'); ?>

        <section class="text-white bg-gray-500 w-full">
            <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
                <div class="max-w-xl">
                    <h2 class="text-3xl font-bold l">
                        Welcome to Hobe Naki Tour Dashboard
                    </h2>

                    <p class="mt-4 sm:text-xl">
                        See daily nessary stats of the business
                    </p>
                </div>

                <ul class="grid grid-cols-1 gap-8 mt-8 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- <li class="p-8 shadow-xl rounded-xl">
                        <p class="text-3xl font-extrabold">50</p>
                        <p class="mt-1 text-xl font-medium">Websites live</p>
                    </li>

                    <li class="p-8 shadow-xl rounded-xl">
                        <p class="text-3xl font-extrabold">190k+</p>
                        <p class="mt-1 text-xl font-medium">Impressions</p>
                    </li>

                    <li class="p-8 shadow-xl rounded-xl">
                        <p class="text-3xl font-extrabold">$150k+</p>
                        <p class="mt-1 text-xl font-medium">Client profits</p>
                    </li>

                    <li class="p-8 shadow-xl rounded-xl">
                        <p class="text-3xl font-extrabold">10</p>
                        <p class="mt-1 text-xl font-medium">New staff</p>
                    </li>

                    <li class="p-8 shadow-xl rounded-xl">
                        <p class="text-3xl font-extrabold">1</p>
                        <p class="mt-1 text-xl font-medium">New office</p>
                    </li>

                    <li class="p-8 shadow-xl rounded-xl">
                        <p class="text-3xl font-extrabold">6</p>
                        <p class="mt-1 text-xl font-medium">New tech stacks</p>
                    </li> -->
                   

                    <div class="flex items-center p-4 bg-white rounded">
                        <div class="flex flex-shrink-0 items-center justify-center bg-green-200 h-16 w-16 rounded">
                            <svg class="w-6 h-6 fill-current text-green-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="flex-grow flex flex-col ml-4">
                            <span class="text-xl font-bold">$8,430</span>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-500">Revenue last 30 days</span>
                                <span class="text-green-500 text-sm font-semibold ml-2">+12.6%</span>
                            </div>
                        </div>
                    </div>

                    <!-- Tile 2 -->
                    <div class="flex items-center p-4 bg-white rounded">
                        <div class="flex flex-shrink-0 items-center justify-center bg-red-200 h-16 w-16 rounded">
                            <svg class="w-6 h-6 fill-current text-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="flex-grow flex flex-col ml-4">
                            <span class="text-xl font-bold">211</span>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-500">Sales last 30 days</span>
                                <span class="text-red-500 text-sm font-semibold ml-2">-8.1%</span>
                            </div>
                        </div>
                    </div>

                    <!-- Tile 3 -->
                    <div class="flex items-center p-4 bg-white rounded">
                        <div class="flex flex-shrink-0 items-center justify-center bg-green-200 h-16 w-16 rounded">
                            <svg class="w-6 h-6 fill-current text-green-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="flex-grow flex flex-col ml-4">
                            <span class="text-xl font-bold">140</span>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-500">Customers last 30 days</span>
                                <span class="text-green-500 text-sm font-semibold ml-2">+28.4%</span>
                            </div>
                        </div>
                    </div>



            </div>
            </ul>
            </div>
        </section>
    </section>




    <?php include('adminFooter.php'); ?>

</body>

</html>