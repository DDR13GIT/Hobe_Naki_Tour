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

    <div class="max-w-3xl mx-auto space-y-4">
        <details class="group" open>
            <summary class="flex items-center justify-between p-4 rounded-lg cursor-pointer bg-gray-50">
                <h2 class="font-medium">
                    Can you guarantee a delivery date?
                </h2>

                <svg class="w-5 h-5 transition-transform duration-300 group-open:-rotate-180"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </summary>

            <div class="px-4 mt-4">
                <p class="leading-relaxed text-gray-700">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis molestias culpa in,
                    recusandae laboriosam neque aliquid libero nesciunt voluptate dicta quo officiis explicabo
                    consequuntur distinctio corporis earum similique!
                </p>
            </div>
        </details>

        <details class="group">
            <summary class="flex items-center justify-between p-4 rounded-lg cursor-pointer bg-gray-50">
                <h2 class="font-medium">
                    What if my parcel is damaged?
                </h2>

                <svg class="w-5 h-5 transition-transform duration-300 group-open:-rotate-180"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </summary>

            <div class="px-4 mt-4">
                <p class="leading-relaxed text-gray-700">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis molestias culpa in,
                    recusandae laboriosam neque aliquid libero nesciunt voluptate dicta quo officiis explicabo
                    consequuntur distinctio corporis earum similique!
                </p>
            </div>
        </details>

        <details class="group">
            <summary class="flex items-center justify-between p-4 rounded-lg cursor-pointer bg-gray-50">
                <h2 class="font-medium">
                    How do I send a gift without the person knowing?
                </h2>

                <svg class="w-5 h-5 transition-transform duration-300 group-open:-rotate-180"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </summary>

            <div class="px-4 mt-4">
                <p class="leading-relaxed text-gray-700">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis molestias culpa in,
                    recusandae laboriosam neque aliquid libero nesciunt voluptate dicta quo officiis explicabo
                    consequuntur distinctio corporis earum similique!
                </p>
            </div>
        </details>
    </div>

    <?php include('footer.php'); ?>
</body>

</html>