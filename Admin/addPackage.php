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
    <?php include('adminNavbar.php'); ?>

    <section class="flex">

        <?php include('sidebar.php'); ?>

        <section class="p-6 w-full bg-grey  dark:bg-gray-500">
            <h2 class="mb-6 text-2xl font-semibold text-gray-700 capitalize dark:text-white">Add Package</h2>

            <form method="post">
                <div>
                    <label class=" text-gray-700 dark:text-gray-200" for="packageName">Package Name</label>
                    <input name="packageName" id="packageName" type="text" class="block w-4/5 px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  dark:text-black dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>

                <label class="text-gray-700 dark:text-gray-200" for="selectCategory">Select Category</label>
                <!-- <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"> -->

                <div class="flex-1 hidden sm:block">
                    <label class="sr-only" for="location"> Location </label>

                    <select name="selectCategory" class="w-4/5 h-10 mt-2 mb-3 px-3 text-sm border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" id="location">
                        <option value="">Select</option>

                        <?php
                        $cn = makeconnection();
                        $s = "select * from category";
                        $result = mysqli_query($cn, $s);
                        $r = mysqli_num_rows($result);
                        //echo $r;

                        while ($data = mysqli_fetch_array($result)) {
                            if (isset($_POST["showBTN"]) && $data[0] == $_POST["selectCategory"]) {
                                echo "<option value=$data[0] selected='selected'>$data[1]</option>";
                            } else {
                                echo "<option value=$data[0]>$data[1]</option>";
                            }
                        }
                        ?>
                    </select>
                    <button name="showBTN" class="px-6 py-2 ml-16 justify-end leading-5 text-black  transition-colors duration-300 transform bg-white rounded-md hover:bg-grey">Show</button>
                </div>

                <label class="text-gray-700 dark:text-gray-200" for="selectCategory">Select Subcategory </label>
                <!-- <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"> -->

                <div class="flex-1 hidden sm:block">
                    <label class="sr-only" for="location"> Location </label>

                    <select name="selectSubCategory" class="w-4/5 h-10 mt-2 mb-3 px-3 text-sm border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" id="location">
                        <option value="">Select</option>

                        <?php
                        $cn = makeconnection();
                        $s = "select * from subcategory";
                        $result = mysqli_query($cn, $s);
                        $r = mysqli_num_rows($result);
                        //echo $r;

                        while ($data = mysqli_fetch_array($result)) {
                            if (isset($_POST["showBTN"])) {
                                if ($data[2] == $_POST["selectCategory"]) {
                                    echo "<option value=$data[0] >$data[1]</option>";
                                } else {
                                    //	echo "<option value=$data[0]>$data[1]</option>";
                                }
                            }
                        }
                        ?>
                    </select>

                </div>

                <div>
                    <label class=" text-gray-700 dark:text-gray-200" for="packagePrice">Package Price</label>
                    <input name="packagePrice" id="packagePrice" type="text" class="block w-4/5 px-4 py-2 mt-2 text-black bg-white border border-gray-200 rounded-md  dark:text-black dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>

                <label class="text-gray-700 dark:text-gray-200" for="details">Details</label>
                <input name="detail" id="details" type="text" class="block w-4/5 h-32 px-4 py-2 mt-2  text-black bg-white border border-gray-200 rounded-md  dark:text-black dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">

                <div class="h-10 mt-4">
                    <input type="file" class="hide_file  dark:text-gray-200 " name="t4">
                </div>
                <div class="h-10 mt-4">
                    <input type="file" class="hide_file  dark:text-gray-200 "  name="t5">
                </div>
                <div class="h-10 mt-4">
                    <input type="file" class="hide_file  dark:text-gray-200 " name="t6">
                </div>

                <div class="flex justify-end mt-6">
                    <button name="saveBTN" class="px-6 py-2 leading-5 text-white  transition-colors duration-300 transform bg-blue-400 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 font-bold">Save</button>
                </div>
            </form>
        </section>
    </section>

    <?php include('adminFooter.php'); ?>

    

    <?php
if(isset($_POST["saveBTN"]))
{
	$cn=makeconnection();
	$f1=0;
	$f2=0;
	$f3=0;
	
	$target_dir = "projectImages/";
	//t4
	$target_file = $target_dir.basename($_FILES["t4"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["t4"]["tmp_name"]);
	if($check!==false) {
		echo "file is an image - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "file is not an image.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "sorry,file already exists.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["t4"]["size"]>500000){
		echo "sorry, your file is too large.";
		$uploadok=0;
	}
	
	
	//aloow certain file formats
	if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t4"]["tmp_name"], $target_file)){
			$f1=1;
	} else{
			echo "sorry there was an error uploading your file.";
		}
	}
	
	
	//t5
	$target_file = $target_dir.basename($_FILES["t5"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["t5"]["tmp_name"]);
	if($check!==false) {
		echo "file is an image - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "file is not an image.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "sorry,file already exists.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["t5"]["size"]>500000){
		echo "sorry, your file is too large.";
		$uploadok=0;
	}
	
	
	//aloow certain file formats
	if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t5"]["tmp_name"], $target_file)){
			$f2=1;
	} else{
			echo "sorry there was an error uploading your file.";
		}
	}
	//t6
	$target_file = $target_dir.basename($_FILES["t6"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["t6"]["tmp_name"]);
	if($check!==false) {
		echo "file is an image - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "file is not an image.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "sorry,file already exists.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["t6"]["size"]>500000){
		echo "sorry, your file is too large.";
		$uploadok=0;
	}
	
	
	//aloow certain file formats
	if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t6"]["tmp_name"], $target_file)){
			$f3=1;
	} else{
			echo "sorry there was an error uploading your file.";
		}
	}
	
		if($f1>0&& $f2>0&&$f3>0)
		{
	
	$s="insert into package(packname,category,subcategory,packprice,pic1,pic2,pic3,detail) 
    values('" . $_POST["packageName"] ."','" . $_POST["selectCategory"] . "','" . $_POST["selectSubCategory"] ."','". $_POST["packagePrice"] . "','" . basename($_FILES["t4"]["name"]) . "','" . basename($_FILES["t5"]["name"]) . "','" . basename($_FILES["t6"]["name"])."','". $_POST["detail"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
		}
	
		
	}
?>

</body>

</html>