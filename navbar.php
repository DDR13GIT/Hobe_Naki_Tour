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


<header class="shadow-sm  sticky top-0 z-50 bg-slate-50">
<nav class=" w-full px-80 py-5  mx-auto flex justify-between items-center ">
        <div class="flex items-center justify-between">
            <div>
            <img class="h-7" src="projectImages/logo.svg" alt="">
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
            <a class="text-gray-700  lg:px-6  hover:text-blue-500"
                href="index.php">Home</a>
            <a class="text-gray-700  lg:px-6  hover:text-blue-500"
                href="about.php">About</a>
            <a class="text-gray-700  lg:px-6  hover:text-blue-500"
                href="packages.php">Packages</a>
            <a class="text-gray-700  lg:px-6  hover:text-blue-500"
                href="faqs.php">FAQ</a>
            <a class="text-gray-700  lg:px-6  hover:text-blue-500"
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