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
    

<!-- <header class="shadow-sm bg-gray-800 sticky top-0 z-50">
  <div class="max-w-screen-xl p-4 mx-auto ">
    <div class="flex items-center justify-between space-x-4 lg:space-x-10">
      <div class="flex lg:w-0 lg:flex-1">
        <span class="w-20 h-10 bg-gray-200 rounded-lg"></span>
      </div>

      <nav class="hidden space-x-8 text-sm font-medium md:flex ">
        <a class="text-gray-500" href="">About</a>
        <a class="text-gray-500" href="">Blog</a>
        <a class="text-gray-500" href="">Projects</a>
        <a class="text-gray-500" href="">Contact</a>
        <a class="text-gray-500" href="">Contact</a>
      </nav>

      <div class="items-center justify-end flex-1 hidden space-x-4 sm:flex">
        <a class="px-5 py-2 text-sm font-medium text-gray-500 bg-gray-100 rounded-lg" href=""> Log in </a>

        <a class="px-5 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg" href=""> Sign up </a>
      </div>

      <div class="lg:hidden">
        <button class="p-2 text-gray-600 bg-gray-100 rounded-lg" type="button">
          <span class="sr-only">Open menu</span>
          <svg
            aria-hidden="true"
            class="w-5 h-5"
            fill="none"
            stroke="currentColor"
            viewbox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</header> -->



































<header class="shadow-sm bg-gray-800 sticky top-0 z-50">
<nav class=" w-full container p-5  mx-auto lg:flex lg:justify-between lg:items-center ">
        <div class="flex items-center justify-between">
            <div>
                <a class="text-2xl font-bold text-gray-800 dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300"
                    href="#">Hobe Naki Tour</a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex lg:hidden">
                <button type="button"
                    class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                    aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                        <path fill-rule="evenodd"
                            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
         <div class="flex flex-col mt-4 space-y-2 lg:-mx-6 lg:mt-0 lg:flex-row lg:space-y-0">
            <a class="text-gray-700 dark:text-gray-200 lg:px-6 dark:hover:text-blue-400 hover:text-blue-500"
                href="index.php">Home</a>
            <a class="text-gray-700 dark:text-gray-200 lg:px-6 dark:hover:text-blue-400 hover:text-blue-500"
                href="about.php">About</a>
            <a class="text-gray-700 dark:text-gray-200 lg:px-6 dark:hover:text-blue-400 hover:text-blue-500"
                href="packages.php">Category</a>
            <a class="text-gray-700 dark:text-gray-200 lg:px-6 dark:hover:text-blue-400 hover:text-blue-500"
                href="faqs.php">FAQ</a>
            <a class="text-gray-700 dark:text-gray-200 lg:px-6 dark:hover:text-blue-400 hover:text-blue-500"
                href="index.php#ContactUs">Contact</a>
        </div>

        <a class="h-10 px-4 py-2 text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400"
            href="signin.php">
            Login
        </a>
    </nav>
    </header>
</body>
</html>