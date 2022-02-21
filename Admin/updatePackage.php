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

        if (empty($_FILES['selectSubCategory']['name'])) {

            $s = "update package set Packname='" . $_POST["packageName"] . "',Category='" . $_POST["selectCategory"] . "',Subcategory='" . $_POST["selectSubCategory"] . "',Packprice='" . $_POST["packagePrice"] . "',Detail='" . $_POST["detail"] . "' where Packid='" . $_POST["selectPackage"] . "'";
        } else {


            $s = "update package set Packname='" . $_POST["packageName"] . "',Category='" . $_POST["selectCategory"] . "',Subcategory='" . $_POST["selectSuCategory"] . "',Packprice='" . $_POST["PackagePrice"] . "',Detail='" . $_POST["detail"] . "' where Packid='" . $_POST["selectPackage"] . "'";
        }
        mysqli_query($cn, $s);
        mysqli_close($cn);
        echo "<script>alert('Record Update');</script>";
    }

    ?>
    <?php include('adminNavbar.php'); ?>

    <section class="flex">

        <?php include('sidebar.php'); ?>

        <section class="p-6 w-full bg-grey  dark:bg-gray-500 ">
            <h2 class="mb-6 text-2xl font-semibold text-gray-700 capitalize dark:text-white">Update Package</h2>

            <form method="post">

                <label class="text-gray-700 dark:text-gray-200" for="selectPackage">Select Package</label>
                <!-- <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"> -->

                <div class="flex-1 hidden sm:block">
                    <label class="sr-only" for="location"> Location </label>

                    <select name="selectPckage" class="w-4/5 h-10 mt-2 mb-3 px-3 text-sm border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" id="location">
                        <option value="">Select</option>

                        <?php
                        $cn = makeconnection();
                        $s = "select * from package";
                        $result = mysqli_query($cn, $s);
                        $r = mysqli_num_rows($result);
                        //echo $r;

                        while ($data = mysqli_fetch_array($result)) {
                            if (isset($_POST["showBTN"]) && $data[0] == $_POST["selectPackage"]) {
                                echo "<option value=$data[0] selected>$data[1]</option>";
                            } else {
                                echo "<option value=$data[0]>$data[1]</option>";
                            }
                        }
                        mysqli_close($cn);
                        ?>

                    </select>

                    <button name="showBTN" class="px-6 py-2 ml-16 justify-end leading-5 text-black  transition-colors duration-300 transform bg-white rounded-md hover:bg-grey  ">Show</button>

                    <?php
                    if (isset($_POST["showBTN"])) {
                        $cn = makeconnection();
                        $s = "select * from package where Packid='" . $_POST["selectPackage"] . "'";
                        $result = mysqli_query($cn, $s);
                        $r = mysqli_num_rows($result);
                        //echo $r;

                        $data = mysqli_fetch_array($result);
                        $Packid = $data[0];
                        $Packname = $data[1];
                        $Category = $data[2];
                        $Subcategory = $data[3];
                        $Packprice = $data[4];
                        // $Pic1 = $data[5];
                        // $Pic2 = $data[6];
                        // $Pic3 = $data[7];
                        $Detail = $data[5];

                        mysqli_close($cn);
                    }

                    ?>

                </div>

                <div>
                    <label class=" text-gray-700 dark:text-gray-200" for="packageName">Package Name</label>
                    <input name="packageName" value="<?php if(isset($_POST["showBTN"])){ echo $Packname ;} ?>" id="packageName" type="text" class="block w-4/5 px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>

                <label class="text-gray-700 dark:text-gray-200" for="selectCategory">Select Category </label>
                <!-- <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"> -->

                <div class="flex-1 hidden sm:block">
                    <label class="sr-only" for="location"> Location </label>

                    <select name="selectCategory" class="w-4/5 h-10 mt-2 mb-3 px-3 text-sm border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" id="location">
                        <option value="">Select</option>
                    </select>

                </div>

                <label class="text-gray-700 dark:text-gray-200" for="selectSubCategory">Select SubCategory </label>
                <!-- <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"> -->

                <div class="flex-1 hidden sm:block">
                    <label class="sr-only" for="location"> Location </label>

                    <select name="selectSubCategory" class="w-4/5 h-10 mt-2 mb-3 px-3 text-sm border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" id="location">
                        <option>Family Tour</option>
                        <option>Adventure Tour</option>
                        <option>Special Event Tour</option>
                        <option>Group tour</option>
                        <option>Themed Vacation</option>
                    </select>

                </div>

                <div>
                    <label class=" text-gray-700 dark:text-gray-200" for="packagePrice">Package Price</label>
                    <input name="packagePrice" value="<?php if(isset($_POST["showBTN"])){ echo $Packprice ;} ?>" id="packagePrice" type="text" class="block w-4/5 px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>

                <label class="text-gray-700 dark:text-gray-200" for="details">Details</label>
                <input name="detail" <?php if(isset($_POST["showBTN"])){ echo $Detail ;} ?>id="details" type="text" class="block w-4/5 h-32 px-4 py-2 mt-2  text-gray-700 bg-white border border-gray-200 rounded-md  dark:text-black dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">

                <div class="h-10 mt-4">
                    <input type="file" class="hide_file  dark:text-gray-200 ">
                </div>
                <div class="h-10 mt-4">
                    <input type="file" class="hide_file  dark:text-gray-200 ">
                </div>
                <div class="h-10 mt-4">
                    <input type="file" class="hide_file  dark:text-gray-200 ">
                </div>

                <div class="flex justify-end mt-6">
                    <button name="saveBTN" class="px-6 py-2 leading-5 text-white  transition-colors duration-300 transform bg-blue-400 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 font-bold">Save</button>
                </div>
            </form>
        </section>
    </section>
    <?php include('adminFooter.php'); ?>

</body>

</html>