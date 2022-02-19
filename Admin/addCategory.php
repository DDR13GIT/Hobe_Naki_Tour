<?php if (!isset($_SESSION)) {
    session_start();
} ?>
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

    <?php
    if ($_SESSION['loginstatus'] == "") {
        header("location:signin.php");
    }

    ?>
    <?php include('function.php'); ?>
    <?php
    if (isset($_POST["saveBTN"])) {
        $cn = makeconnection();
        $s = "insert into category(Cat_name) values('" . $_POST["categoryName"] . "')";
        mysqli_query($cn, $s);
        mysqli_close($cn);
        echo "<script>alert('Record Save');</script>";
    }
    ?>
    <?php include('adminNavbar.php'); ?>

    <section class="flex">

        <?php include('sidebar.php'); ?>
        <section class="p-6 w-full  bg-grey  dark:bg-gray-500">
            <h2 class="mb-6 text-2xl font-semibold text-gray-700 capitalize dark:text-white">Add Category</h2>

            <form method="post">
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="categoryName">Category Name</label>
                    <input id="categoryName" type="text" name="categoryName" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-200 rounded-md  dark:text-black dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>


                <div class="flex justify-end mt-6">
                    <button class="px-6 py-2 leading-5 text-white  transition-colors duration-300 transform bg-blue-400 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 font-bold" name="saveBTN">Save</button>
                </div>
            </form>
        </section>
    </section>
    <?php include('adminFooter.php'); ?>

</body>

</html>