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

			<form method="post" enctype="multipart/form-data">
				<div>
					<label class=" text-gray-700 dark:text-gray-200" for="packageName">Package Name</label>
					<input name="packageName" id="packageName" type="text" class="block w-4/5 px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  dark:text-black dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
				</div>

				<label class="text-gray-700 dark:text-gray-200" for="selectCategory">Select Category</label>
				<!-- <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"> -->

				<div class="flex-1 hidden sm:block">


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

				</div>



				<div>
					<label class=" text-gray-700 dark:text-gray-200" for="packagePrice">Package Price</label>
					<input name="packagePrice" id="packagePrice" type="text" class="block w-4/5 px-4 py-2 mt-2 text-black bg-white border border-gray-200 rounded-md  dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
				</div>
				<!-- 
				<label class="text-gray-700 dark:text-gray-200" for="details">Details</label>
				<input name="detail" id="details" type="text" class="block w-4/5 h-32 px-4 py-2 mt-2  text-black bg-white border border-gray-200 rounded-md  dark:text-black dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"> -->

				<div>
					<label class=" text-gray-700 dark:text-gray-200" for="packageName">Location</label>
					<input name="location" id="location" type="text" class="block w-4/5 px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  dark:text-black dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
				</div>


				<div>
					<label class=" text-gray-700 dark:text-gray-200" for="packageName">Duration</label>
					<input name="duration" id="duration" type="text" class="block w-4/5 px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  dark:text-black dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
				</div>
				<div>
					<label class=" text-gray-700 dark:text-gray-200" for="packageName">Group Size</label>
					<input name="groupSize" id="duration" type="text" class="block w-4/5 px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  dark:text-black dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
				</div>


				<label class="text-gray-700 dark:text-gray-200" for="selectCategory">Tour Type</label>
				<div class="flex-1 hidden sm:block">

					<select name="tourType" class="w-4/5 h-10 mt-2 mb-3 px-3 text-sm border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" id="location">
						<option value="Regular">Regular</option>
						<option value="Premium">Premium</option>


					</select>

				</div>


				<div class="h-10 mt-4">
					<input type="file" class="hide_file  dark:text-gray-200 " name="pic1">
				</div>
				<div class="h-10 mt-4">
					<input type="file" class="hide_file  dark:text-gray-200 " name="pic2">
				</div>
				<div class="h-10 mt-4">
					<input type="file" class="hide_file  dark:text-gray-200 " name="pic3">
				</div>
				<div class="h-10 mt-4">
					<input type="file" class="hide_file  dark:text-gray-200 " name="coverpic">
				</div>

				<div class="flex justify-end mt-6">
					<button name="saveBTN" class="px-6 py-2 leading-5 text-white  transition-colors duration-300 transform bg-blue-400 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 font-bold">Save</button>
				</div>
			</form>
		</section>
	</section>

	<?php
	$newpic1;
	$newpic2;
	$newpic3;
	$newcoverpic;

	if (isset($_POST["saveBTN"])) {

		if (isset($_FILES['pic1'])) {
			$img_name = $_FILES['pic1']['name'];
			$img_size = $_FILES['pic1']['size'];
			$tmp_name = $_FILES['pic1']['tmp_name'];
			$error = $_FILES['pic1']['error'];


			if ($error === 0) {
				
				if ($img_size > 270000) {
					$em = "Sorry, your file is too large.";
				} else {
					$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
					$img_ex_lc = strtolower($img_ex);

					$allowed_exs = array("jpg", "jpeg", "png");

					if (in_array($img_ex_lc, $allowed_exs)) {
						$new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
						$img_upload_path = 'C:/xampp/htdocs/Hobe_Naki_Tour/projectImages/' . $new_img_name;
						move_uploaded_file($tmp_name, $img_upload_path);
						$newpic1 = $new_img_name;
					}
				}
			}
		}
		if (isset($_FILES['pic2'])) {
			$img_name = $_FILES['pic2']['name'];
			$img_size = $_FILES['pic2']['size'];
			$tmp_name = $_FILES['pic2']['tmp_name'];
			$error = $_FILES['pic2']['error'];


			if ($error === 0) {
				
				if ($img_size > 270000) {
					$em = "Sorry, your file is too large.";
				} else {
					$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
					$img_ex_lc = strtolower($img_ex);

					$allowed_exs = array("jpg", "jpeg", "png");

					if (in_array($img_ex_lc, $allowed_exs)) {
						$new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
						$img_upload_path = 'C:/xampp/htdocs/Hobe_Naki_Tour/projectImages/' . $new_img_name;
						move_uploaded_file($tmp_name, $img_upload_path);
						$newpic2 = $new_img_name;
					}
				}
			}
		}
		if (isset($_FILES['pic3'])) {
			$img_name = $_FILES['pic3']['name'];
			$img_size = $_FILES['pic3']['size'];
			$tmp_name = $_FILES['pic3']['tmp_name'];
			$error = $_FILES['pic3']['error'];


			if ($error === 0) {
				
				if ($img_size > 270000) {
					$em = "Sorry, your file is too large.";
				} else {
					$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
					$img_ex_lc = strtolower($img_ex);

					$allowed_exs = array("jpg", "jpeg", "png");

					if (in_array($img_ex_lc, $allowed_exs)) {
						$new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
						$img_upload_path = 'C:/xampp/htdocs/Hobe_Naki_Tour/projectImages/' . $new_img_name;
						move_uploaded_file($tmp_name, $img_upload_path);
						$newpic3 = $new_img_name;
					}
				}
			}
		}
		if (isset($_FILES['coverpic'])) {
			$img_name = $_FILES['coverpic']['name'];
			$img_size = $_FILES['coverpic']['size'];
			$tmp_name = $_FILES['coverpic']['tmp_name'];
			$error = $_FILES['coverpic']['error'];


			if ($error === 0) {
				
				if ($img_size > 270000) {
					$em = "Sorry, your file is too large.";
				} else {
					$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
					$img_ex_lc = strtolower($img_ex);

					$allowed_exs = array("jpg", "jpeg", "png");

					if (in_array($img_ex_lc, $allowed_exs)) {
						$new_img_name = uniqid("IMG-", true) . $img_ex_lc;
						$img_upload_path = 'C:/xampp/htdocs/Hobe_Naki_Tour/projectImages/' . $new_img_name;
						move_uploaded_file($tmp_name, $img_upload_path);
						$newcoverpic = $new_img_name;
					}
				}
			}
		}


		$s = "insert into package(packname,category,packprice,location,duration,groupsize,tourtype,pic1,pic2,pic3,coverpic) 
    values('" . $_POST["packageName"] . "','" . $_POST["selectCategory"] .  "','" . $_POST["packagePrice"] . "','" . $_POST["location"] . "','" . $_POST["duration"] . "','" . $_POST["groupSize"] . "','" . $_POST["tourType"] . "','" . $newpic1  . "','" . $newpic2  . "','" . $newpic3  . "','" . $newcoverpic  . "')";
		mysqli_query($cn, $s);
		mysqli_close($cn);
		echo "<script>alert('Record Save');</script>";
	}


	?>
	<?php include('adminFooter.php'); ?>
</body>

</html>