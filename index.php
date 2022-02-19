<?php if (!isset($_SESSION)) {
    session_start();
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobe Naki Tour : Your best Tour Organizing Partner</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>

<body>

    <?php
    if ($_SESSION['loginstatus'] == "") {
        header("location:signin.php");
    }
    ?>

    <?php include('navbar.php'); ?>

   
    <!-- Hero code**************************************** -->
    <section class="bg-white dark:bg-gray-800">
        <div class="container flex flex-col px-6 py-10 mx-auto space-y-6 lg:h-[32rem] lg:py-16 lg:flex-row lg:items-center">
            <div class="w-full lg:w-1/2">
                <div class="lg:max-w-lg">
                    <h1 class="text-3xl font-bold tracking-wide text-gray-800 dark:text-white lg:text-5xl">
                        Find Your Next Tour Destination
                    </h1>

                    <div class="mt-8 space-y-5">
                        <p class="flex items-center -mx-2 text-gray-700 dark:text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <span class="mx-2">Risk Free Payment System</span>
                        </p>

                        <p class="flex items-center -mx-2 text-gray-700 dark:text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <span class="mx-2">Small and Organized Tour</span>
                        </p>

                        <p class="flex items-center -mx-2 text-gray-700 dark:text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <span class="mx-2">Easy to Use</span>
                        </p>
                    </div>
                </div>

                <div class="w-full mt-8 bg-transparent border rounded-md lg:max-w-sm dark:border-gray-700 focus-within:border-blue-400 focus-within:ring focus-within:ring-blue-300 dark:focus-within:border-blue-400 focus-within:ring-opacity-40">
                    <form class="flex flex-col lg:flex-row">
                        <input type="email" placeholder="Enter your email address" class="flex-1 h-10 px-4 py-2 m-1 text-gray-700 placeholder-gray-400 bg-transparent border-none appearance-none dark:text-gray-200 focus:outline-none focus:placeholder-transparent focus:ring-0" />

                        <button type="button" class="h-10 px-4 py-2 m-1 text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400">
                            Join Us
                        </button>
                    </form>
                </div>
            </div>

            <div class="flex items-center justify-center w-full h-96 lg:w-1/2">
                <img class="object-cover w-full h-full mx-auto rounded-md lg:max-w-2xl" src="https://images.unsplash.com/photo-1577624060070-ca1afe89ddad?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1626&q=80" alt="glasses photo">
            </div>
        </div>
    </section>

    <h1 class="text-4xl font-bold tracking-wide text-gray-800 mx-auto text-center mt-20 mb-10 ">
        Trending Tours
    </h1>


    <!-- card view ******************** -->
    <div class="slider overflow-hidden flex max-w-6xl mx-auto justify-center my-20 owl-carousel">

        <div class="max-w-lg mx-2 overflow-hidden my-4 bg-white rounded-lg shadow-md ">
            <img class="w-full h-64" src="projectImages/sylhet.jpg" alt="Article">

            <div class="p-6">
                <div>
                    <span class="text-xs font-medium text-blue-600 uppercase ">Premium</span>
                    <a href="packages.php" class="block mt-2 text-2xl font-semibold text-gray-800 transition-colors duration-200 transform d hover:text-gray-600 hover:underline">Sylhet Premium Trip</a>
                    <p class="mt-2 text-sm text-gray-600 "></p>
                </div>

                <div class="mt-4">
                    <div class="flex items-center">
                        <div class="flex items-center">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 11V9a2 2 0 00-2-2m2 4v4a2 2 0 104 0v-1m-4-3H9m2 0h4m6 1a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>                            <a href="#" class="mx-2 font-semibold text-green-600 "> From 5500 BDT</a>
                        </div>
                        <span class="mx-1 text-xs text-gray-600 "> 2 Days & 3 night</span>

                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-lg mx-2 overflow-hidden my-4 bg-white rounded-lg shadow-md ">
            <img class="object-cover w-full h-64" src="projectImages/sajek.jpg" alt="Article">

            <div class="p-6">
                <div>
                    <span class="text-xs font-medium text-blue-600 uppercase ">Premium</span>
                    <a href="#" class="block mt-2 text-2xl font-semibold text-gray-800 transition-colors duration-200 transform d hover:text-gray-600 hover:underline">Sylhet Premium Trip</a>
                    <p class="mt-2 text-sm text-gray-600 "></p>
                </div>

                <div class="mt-4">
                    <div class="flex items-center">
                        <div class="flex items-center">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 11V9a2 2 0 00-2-2m2 4v4a2 2 0 104 0v-1m-4-3H9m2 0h4m6 1a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>                            <a href="#" class="mx-2 font-semibold text-green-600 "> From 5500 BDT</a>
                        </div>
                        <span class="mx-1 text-xs text-gray-600 "> 2 Days & 3 night</span>

                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-lg mx-2 overflow-hidden my-4 bg-white rounded-lg shadow-md ">
            <img class="object-cover w-full h-64" src="projectImages/nikli.jpg" alt="Article">

            <div class="p-6">
                <div>
                    <span class="text-xs font-medium text-blue-600 uppercase ">Premium</span>
                    <a href="#" class="block mt-2 text-2xl font-semibold text-gray-800 transition-colors duration-200 transform d hover:text-gray-600 hover:underline">Sylhet Premium Trip</a>
                    <p class="mt-2 text-sm text-gray-600 "></p>
                </div>

                <div class="mt-4">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 11V9a2 2 0 00-2-2m2 4v4a2 2 0 104 0v-1m-4-3H9m2 0h4m6 1a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <a href="#" class="mx-2 font-semibold text-green-600 "> From 5500 BDT</a>
                        </div>
                        <span class="mx-1 text-xs text-gray-600 "> 2 Days & 3 night</span>

                    </div>
                </div>
            </div>
        </div>


    </div>
    <script>
        $(".slider").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3500,
            autoPlayHoverPause: true,
        });
    </script>



    <!-- Contact us section code ********************************************-->

    <section id="ContactUs" class="w-full max-w-6xl px-6 py-4 mx-auto bg-white rounded-md shadow-md ">
        <h2 class="text-3xl font-semibold text-center text-gray-800 ">Get the best holiday plan by expert</h2>
        <p class="mt-3 text-center text-gray-600 ">You can also call us or contact us through mail</p>

        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 md:grid-cols-3">
            <a href="#" class="flex flex-col items-center px-4 py-3 text-gray-700 transition-colors duration-200 transform rounded-md  hover:bg-blue-200 ">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>

                <span class="mt-2">137/12, Dhanmondi, Dhaka-1200.</span>
            </a>

            <a href="#" class="flex flex-col items-center px-4 py-3 text-gray-700 transition-colors duration-200 transform rounded-md  hover:bg-blue-200 ">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                </svg>

                <span class="mt-2">+88-0184444444</span>
            </a>

            <a href="#" class="flex flex-col items-center px-4 py-3 text-gray-700 transition-colors duration-200 transform rounded-md  hover:bg-blue-200 ">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                </svg>

                <span class="mt-2">hobenakitour.com@gmail.com</span>
            </a>
        </div>

        <div class="mt-6 ">
            <div class="items-center -mx-2 md:flex">
                <div class="w-full mx-2">
                    <label class="block mb-2 text-sm font-medium text-gray-600 ">Name</label>

                    <input class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-md   focus:border-blue-400 focus:ring-blue-300  focus:outline-none focus:ring focus:ring-opacity-40" type="text">
                </div>

                <div class="w-full mx-2 mt-4 md:mt-0">
                    <label class="block mb-2 text-sm font-medium text-gray-600 ">E-mail</label>

                    <input class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-md  focus:border-blue-400 focus:ring-blue-300  focus:outline-none focus:ring focus:ring-opacity-40" type="email">
                </div>

                <div class="w-full mx-2 mt-4 md:mt-0">
                    <label class="block mb-2 text-sm font-medium text-gray-600 ">Contact Number</label>

                    <input class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-md  focus:border-blue-400 focus:ring-blue-300  focus:outline-none focus:ring focus:ring-opacity-40" type="email">
                </div>
            </div>

            <div class="w-full mt-4">
                <label class="block mb-2 text-sm font-medium text-gray-600 ">Message</label>

                <textarea class="block w-full h-40 px-4 py-2 text-gray-700 bg-white border rounded-md  focus:border-blue-400  focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"></textarea>
            </div>

            <div class="flex justify-end mt-6">
                <button class="px-4 py-2 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Send Message</button>
            </div>
        </div>
    </section>



    <!-- Footer code******************************************** -->

    <?php include('footer.php'); ?>

</body>

</html>