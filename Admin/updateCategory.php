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
        $s = "update category set Cat_name='" . $_POST["categoryName"] . "' where Cat_id='" . $_POST["selectCategoryName"] . "'";
        mysqli_query($cn, $s);
        mysqli_close($cn);
        echo "<script>alert('Record Update');</script>";
    }
    ?>
    <?php include('adminNavbar.php'); ?>

    <section class="flex">

        <?php include('sidebar.php'); ?>

        <section class="p-6 w-full bg-grey  dark:bg-gray-500 ">
            <h2 class="mb-6 text-2xl font-semibold text-gray-700 capitalize dark:text-white">Update Category</h2>

            <form method="post">

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="selectCategory">Select Category Name</label>
                    <!-- <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"> -->

                    <div class="flex-1 hidden sm:block">
                        <label class="sr-only" for="location"> Location </label>

                        <select name="selectCategoryName" class="w-4/5 h-10 mt-2 mb-3 px-3 text-sm border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" id="location">
                            <option value="">Select</option>

                            <?php
                            $cn = makeconnection();
                            $s = "select * from category";
                            $result = mysqli_query($cn, $s);
                            $r = mysqli_num_rows($result);
                            //echo $r;

                            while ($data = mysqli_fetch_array($result)) {
                                if (isset($_POST["showBTN"]) && $data[0] == $_POST["selectCategoryName"]) {
                                    echo "<option value=$data[0] selected>$data[1]</option>";
                                } else {
                                    echo "<option value=$data[0]>$data[1]</option>";
                                }
                            }
                            mysqli_close($cn);



                            ?>
                        </select>

                        <button class="px-6 py-2 ml-16 justify-end leading-5 text-black  transition-colors duration-300 transform bg-white rounded-md hover:bg-grey" name="showBTN">Show</button>
                    
                        <?php
                        if (isset($_POST["showBTN"])) {
                            $cn = makeconnection();
                            $s = "select * from category where Cat_id='" . $_POST["selectCategoryName"] . "'";
                            $result = mysqli_query($cn, $s);
                            $r = mysqli_num_rows($result);
                            //echo $r;

                            $data = mysqli_fetch_array($result);
                            $Cat_id = $data[0];
                            $Cat_name = $data[1];


                            mysqli_close($cn);
                        }

                        ?>
                    </div>


                </div>

                <div>
                    <label class=" text-gray-700 dark:text-gray-200" for="categoryName">Category Name</label>
                            <input id="categoryName" type="text" name="categoryName" value="<?php if(isset($_POST["showBTN"])){ echo $Cat_name ;} ?>" class="block w-4/5 px-4 py-2 mt-2  text-black bg-white border border-gray-200 rounded-md  dark:text-black dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                    </div>


                    <div class="flex justify-end mt-6">
                        <button class="px-6 py-2 mr-4 leading-5 text-white  transition-colors duration-300 transform bg-blue-400 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 font-bold" name="saveBTN">Save</button>
                    </div>

            </form>
        </section>
    </section>
    <?php include('adminFooter.php'); ?>
</body>

</html>