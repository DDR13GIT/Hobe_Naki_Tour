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
    <?php if (!isset($_SESSION)) {
        session_start();
    } ?>

    <?php
    if ($_SESSION['loginstatus'] == "") {
        header("location:signin.php");
    }
    ?>

    <?php include('function.php'); ?>

    <?php
    if (isset($_POST["saveBtn"])) {
        $cn = makeconnection();
        $s = "insert into users values('" . $_POST["username"] . "','" . $_POST["password"] . "','" . $_POST["usertype"] . "')";
        mysqli_query($cn, $s);
        mysqli_close($cn);
        echo "<script>alert('Record Save');</script>";
    }
    ?>






    <?php include('adminNavbar.php'); ?>

    <section class="flex">

        <?php include('sidebar.php'); ?>

        <section class="p-6 w-full bg-grey  dark:bg-gray-500 ">
            <h2 class="mb-6  mt-40 text-2xl font-semibold text-gray-700 capitalize dark:text-white">Add User</h2>

            <form method="POST">
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="username">Username</label>
                        <input id="username" type="text" name="username" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md    focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Type Of User</label>
                        <!-- <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"> -->

                        <div class="flex-1 hidden sm:block">
                            <label class="sr-only" for="location"> Location </label>

                            <select class="w-full h-10 mt-2 px-3 text-sm border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" id="location" name="usertype">
                                <option value="Admin">Admin</option>
                                <option value="General">General</option>

                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="password">Password</label>
                        <input id="password" type="password" name="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="passwordconfimation">Password Confimation</label>
                        <input id="passwordconfimation" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                    </div>


                </div>

                <div class="flex justify-end mt-6">
                    <button class="px-6 py-2 leading-5 text-white  transition-colors duration-300 transform bg-blue-400 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 font-bold" name="saveBtn">Save</button>
                </div>
            </form>
        </section>
    </section>


    <?php include('adminFooter.php'); ?>
</body>

</html>