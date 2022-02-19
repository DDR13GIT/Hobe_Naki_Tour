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




    <header class="shadow-sm bg-gray-800 sticky top-0 z-50">
        <nav class=" w-full container p-5  mx-auto flex justify-between items-center ">
            <div class="flex items-center justify-between">
                <div>
                    <img class="h-7 pl-6" src="\Hobe_Naki_Tour/projectImages/logo.svg" alt="">
                </div>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class=" flex justify-between gap-5">
            <div class="flex items-center  right-0 top-0">
                <img class="object-cover mx-2 rounded-full h-9 w-9" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="avatar" />
                <h4 class="mx-2 font-medium text-gray-800 dark:text-gray-200 hover:underline">Admin</h4>
            </div>
            <a class="h-10 px-4 py-2 text-white transition-colors duration-200 transform bg-red-500 rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-800" href="\Hobe_Naki_Tour/logout.php">
                Log Out
            </a>
            </div>
        </nav>
    </header>
</body>

</html>