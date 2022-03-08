<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/datepicker.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

</head>

<body>
    <?php include('navbar.php'); ?>
    <?php include('function.php');

    $price;
    ?>
    <!-- banner section**************************************** -->
    <div class=" bg-gradient-to-r from-gray-800 to-blue-600 ">
        <div class=" w-full mx-auto py-12 px-80 z-20">
            <h2 class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
                <span class="block">
                    Hello Traveller
                </span>
                <span class="block text-indigo-500 capitalize">
                    Package Details, Decide as your wish
                </span>
            </h2>
        </div>
    </div>


    <section>
        <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-5 lg:grid-cols-4 lg:items-start">
                <div class="lg:sticky lg:top-4">
                    <details open class="overflow-hidden border border-gray-200 rounded">
                        <summary class="flex items-center justify-between px-5 py-3 bg-gray-100 lg:hidden">


                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </summary>

                        <form method="post" class="border-t border-gray-200 lg:border-t-0">
                            <fieldset>
                                <legend class="block w-full px-5 py-3 text-sm font-medium bg-gray-50">
                                    Want to Purchase Package?
                                </legend>

                                <div class="px-5 py-6 space-y-2">
                                    <!-- datepicker -->
                                    <div class="relative">
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input datepicker datepicker-buttons name="date" type="text" class="bg-gray-50 border border-gray-300  sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Select Date">
                                    </div>


                                    <div class="relative flex py-4 px-1 gap-2"><input name="tourGuide" type="checkbox" class="focus:ring-brandColor mt-1 h-4 w-4 text-brandColor border-gray-300 rounded">
                                        <div><label for="yes" class="font-medium text-gray-700 select-none">Need tour guide?</label>
                                            <p class="font-medium text-gray-500 text-md"><span class="font-bold">200৳</span> will be added </p>
                                        </div>
                                    </div>



                                </div>
                            </fieldset>
                            <div class="flex px-3 py-3 border-t border-gray-200">
                                <button name="bookNow" type="submit" class="  px-3 py-3 w-full text-lg font-medium text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400">
                                    Book Now
                                </button>
                            </div>
                            <div class="flex justify-between items-center px-1 mt-1">
                                <h3 class="uppercase text-brandColorNew text-sm text-green-600 font-semibold">customer care:</h3>
                                <div class="text-md px-3 text-gray-800 mb-1 flex justify-start items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                    </svg> 01844244745</div>
                            </div>
                        </form>
                    </details>
                </div>


                <?php


                $s = "select * from package where Packid='$_GET[packid]'";




                $cn = makeconnection();
                $result = mysqli_query($cn, $s);
                $r = mysqli_num_rows($result);
                //echo $r;

                while ($data = mysqli_fetch_array($result)) {
                    $price = $data[3];
                ?>

                    <div class="lg:col-span-3">
                        <div class="flex items-center justify-between">
                            <span class="block text-blue-500 capitalize font-bold text-5xl">
                                <?php echo $data[1]; ?>
                            </span>
                        </div>
                        <span class="block text-gray-500 capitalize font-bold text-lg mt-2">
                            <?php echo $data[7]; ?>
                        </span>


                        <div class="grid grid-cols-3 gap-2 sm:gap-4 py-4">
                            <div class="flex justify-start gap-1 sm:gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-500 h-6 w-6 sm:h-10 sm:w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <h1 class="flex flex-col"><span class="text-sm sm:text-base font-bold text-gray-500 tracking-tight">Duration</span><span class="text-sm font-bold text-green-600 tracking-tight"><?php echo $data[8]; ?></span></h1>
                            </div>
                            <div class="flex sm:justify-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="text-blue-500 h-6 w-6 sm:h-10 sm:w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <h1 class="flex flex-col gap-1"><span class="text-sm sm:text-base font-bold text-gray-500 tracking-tight">Tour Type</span><span class="text-sm font-bold text-green-600 tracking-tight"><?php echo $data[9]; ?></span></h1>
                            </div>
                            <div class="flex sm:justify-end gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="text-blue-500 h-6 w-6 sm:h-10 sm:w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                <h1 class="flex flex-col gap-1"><span class="text-sm sm:text-base font-bold text-gray-500 tracking-tight">Max Group Size</span><span class="text-sm font-bold text-green-600 tracking-tight"><?php echo $data[10]; ?></span></h1>
                            </div>
                        </div>

                        <!-- Swiper -->
                        <div class="swiper mySwiper rounded-lg h-96">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="projectImages/<?php echo $data[4]; ?>" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="projectImages/<?php echo $data[5]; ?>" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="projectImages/<?php echo $data[6]; ?>" />
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>

                        <!-- Swiper JS -->
                        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                    <?php } ?>

                    <!-- Initialize Swiper -->
                    <script>
                        var swiper = new Swiper(".mySwiper", {
                            spaceBetween: 30,
                            effect: "fade",
                            navigation: {
                                nextEl: ".swiper-button-next",
                                prevEl: ".swiper-button-prev",
                            },
                            pagination: {
                                el: ".swiper-pagination",
                                clickable: true,
                                autoplay: {
                                    delay: 1000,
                                },
                            },
                        });
                    </script>
                    <div class="grid pb-6 mt-5">
                        <h3 class="uppercase text-xl font-bold mb-2 text-blue-500">General Information</h3>
                        <div class="text-md text-gray-500">
                            <p>This is Nikli - Mithamain Day tour package</p>
                        </div>
                    </div>
                    <div class="grid food-menu pb-6">
                        <h3 class="uppercase text-xl font-bold mb-2 text-blue-500">food menu</h3>
                        <div class="tabs-component">
                            <ul role="tablist" class="tabs-component-tabs">
                                <li class="nav-item is-active" role="presentation"><a aria-controls="#day-1" href="#day-1" class="tabs-component-tab-a is-active" role="tab" aria-selected="true">Day-1</a></li>
                            </ul>
                            <div class="tabs-component-panels">
                                <div>
                                    <section aria-hidden="false" class="tabs-component-panel" id="day-1" role="tabpanel">
                                        <div class="content mt-4">
                                            <div class="slide-item relative">
                                                <table class="border-collapse text-gray-500 border border-gray-200 w-full md:w-10/12">
                                                    <tbody>
                                                        <tr>
                                                            <td class="border border-gray-200 text-md">Breakfast</td>
                                                            <td class="border border-gray-200 text-md">
                                                                <p>পরটা/রুটি + ডাল/সবজি +ডিম + পানি + চা</p>
                                                                <p>অথবা,&nbsp;চিকেন স্যান্ডউইচ + মিনারেল ওয়াটার + চা</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border border-gray-200 text-md">Lunch</td>
                                                            <td class="border border-gray-200 text-md">
                                                                <ul>
                                                                    <li>ভাত </li>
                                                                    <li>হাওড়ের তাজা মাছ</li>
                                                                    <li>মুরগী ভুনা</li>
                                                                    <li>আলু ভর্তা </li>
                                                                    <li>ডাল </li>
                                                                    <li>মিনারেল পানি </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border border-gray-200 text-md">Snacks</td>
                                                            <td class="border border-gray-200 text-md">
                                                                <ul>
                                                                    <li>চিপস/কেক </li>
                                                                    <li>জুস/কোল্ড ড্রিঙ্কস </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border border-gray-200 text-md">Dinner</td>
                                                            <td class="border border-gray-200 text-md">
                                                                <p>N/A</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pb-6">
                        <h3 class="uppercase text-xl font-bold text-blue-500 mb-5">Included/Exclude</h3>
                        <div class="sm:grid sm:grid-cols-2 gap-4 space-y-3 sm:space-y-0">
                            <div class="flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500New" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <div class="flex-1 text-md text-gray-500">
                                    <p>AC Coaster Bus service</p>
                                    <p>Boat Service For Roaming</p>
                                    <p>Mithamain-Ashtogram Transport Facilities</p>
                                    <p>All meals (Breakfast , Lunch, Evening snacks)</p>
                                </div>
                            </div>
                            <div class="flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                <div class="flex-1 text-md text-gray-500">
                                    <ol>
                                        <li>No Medicines</li>
                                        <li>No Personal Cost</li>
                                    </ol>
                                    <p><br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sm:grid pb-6">
                        <h3 class="uppercase text-xl font-bold mb-2 text-blue-500 sm:mb-5">Group Fare (Per Person)</h3>
                        <div class="space-y-2 bg-gray-200 rounded p-1 sm:p-4">
                            <div class="w-full grid grid-cols-6 gap-1 sm:gap-4">
                                <div class="col-span-2 sm:col-span-3 text-sm sm:text-base text-gray-900 sm:text-gray-700 font-bold">Title</div>
                                <div class="col-span-4 sm:col-span-3 grid grid-cols-3 gap-2">
                                    <div class="col-span-1 text-sm sm:text-base text-gray-900 sm:text-gray-700 font-bold">Persons</div>
                                    <div class="col-span-1 text-sm sm:text-base text-gray-900 sm:text-gray-700 font-bold">Weekend</div>
                                    <div class="col-span-1 text-sm sm:text-base text-gray-900 sm:text-gray-700 font-bold">Weekdays</div>
                                </div>
                            </div>
                            <div class="w-full grid grid-cols-6 gap-2 sm:gap-4">
                                <div class="col-span-2 sm:col-span-3 text-md sm:text-base " title="For  8-10 Person Sharing">For 8-10 Person Sharing</div>
                                <div class="col-span-4 sm:col-span-3 grid grid-cols-3 gap-2">
                                    <div class="col-span-1 text-md sm:text-base sm:flex gap-1">8 <span class="hidden sm:block">persons</span></div>
                                    <div class="col-span-1 text-md sm:text-base">2199৳</div>
                                    <div class="col-span-1 text-md sm:text-base">2199৳</div>
                                </div>
                            </div>
                            <div class="w-full grid grid-cols-6 gap-2 sm:gap-4">
                                <div class="col-span-2 sm:col-span-3 text-md sm:text-base " title="For  18-22 Person Sharing">For 18-22 Person Sharing</div>
                                <div class="col-span-4 sm:col-span-3 grid grid-cols-3 gap-2">
                                    <div class="col-span-1 text-md sm:text-base sm:flex gap-1">18 <span class="hidden sm:block">persons</span></div>
                                    <div class="col-span-1 text-md sm:text-base">1999৳</div>
                                    <div class="col-span-1 text-md sm:text-base">1999৳</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid iternity pb-6">
                        <h3 class="uppercase text-xl font-bold mb-2 text-blue-500">Itinerary</h3>
                        <div class="tabs-component">
                            <ul role="tablist" class="tabs-component-tabs">
                                <li class="nav-item is-active" role="presentation"><a aria-controls="#day-1" href="#day-1" class="tabs-component-tab-a is-active" role="tab" aria-selected="true">Day-1</a></li>
                            </ul>
                            <div class="tabs-component-panels">
                                <div>
                                    <section aria-hidden="false" class="tabs-component-panel" id="day-1" role="tabpanel">
                                        <div class="content mt-4">
                                            <div class="text-md text-gray-800 mb-1 list-discs">
                                                <p><strong>সকাল ৭টাঃ</strong> ঢাকা থেকে রওনা এসি গাড়ীতে করে</p>
                                                <p><br></p>
                                                <p><strong>সকাল ৯টাঃ</strong> পথিমধ্যে সকালের নাশতা&nbsp;</p>
                                                <p><br></p>
                                                <p><strong>সকাল ১১.৩০ঃ</strong> নিকলী হাওরে পৌছবো</p>
                                                <p><br></p>
                                                <p><strong>দুপুর ১২টাঃ</strong> ফ্রেশ হয়ে আমাদের রিসার্ভ ট্রলারে উঠবো। নিকলী হাওরের সবচেয়ে স্ট্যান্ডার্ড নৌকাটায় আমাদের।</p>
                                                <p><br></p>
                                                <p><strong>দুপুর ১.৩০ টাঃ</strong> রিসার্ভ ট্রলারে চলে যাবো ছাতিরচরে। পানিতে ঝাঁপাঝাপি।</p>
                                                <p><strong>দুপুর ২টাঃ</strong> দুপুরের খাবার সেরে নিবো।&nbsp;</p>
                                                <p><br></p>
                                                <p><strong>দুপুর ৩.৩০টাঃ</strong> হাওড়ের সৌন্দর্য উপভোগ করতে করতে চলে আসবো অষ্টগ্রামে। ঘাটে নৌকা রেখে সবাই অষ্টগ্রাম -মিঠামইন এর অপরুপ সুন্দর পিচ ঢালা পথে ঘুরবো অটোতে করে।</p>
                                                <p><br></p>
                                                <p><strong>বিকেল ৪.৩০টাঃ</strong> বড় ব্রীজ দাড়িয়ে আড্ডা দিবো, চারপাশ একটু হেঁটে দেখবো।</p>
                                                <p><br></p>
                                                <p><strong>বিকেল ৫টাঃ</strong> ঘাটে ফিরে বোটে করে আবার নিকলী ফিরবো শেষ বিকেলের সৌন্দর্য উপভোগ করতে করতে।&nbsp;</p>
                                                <p><br></p>
                                                <p><strong>বিকেল ৬টাঃ</strong> আমাদের রিসার্ভ এসি গাড়ীতে ঢাকার উদ্দেশ্য রওনা।&nbsp;গাড়ীতে স্ন্যাকস দেয়া হবে&nbsp;</p>
                                                <p>#স্ন্যাকসঃ জুস, কেক, চিপস।</p>
                                                <p><br></p>
                                                <p><strong>রাত ৯টাঃ</strong> ইনশাল্লাহ ঢাকা থাকবো&nbsp;</p>
                                                <p><br></p>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid">
                        <h3 class="uppercase text-xl font-bold mb-2 text-blue-500">notes</h3>
                        <div class="text-md text-gray-800 mb-1">
                            <h3><strong style="color: rgb(5, 5, 5); background-color: rgb(228, 230, 235);">Note: We use local and seasonal items as such it is expected there would be variation or changes in the menu someday depending on availability.</strong></h3>
                            <p><br></p>
                        </div>
                    </div>

                    <div class="grid">
                        <h3 class="uppercase text-md font-bold mt-12 mb-2">contacts</h3>
                        <ul>
                            <li class="text-md text-gray-800 mb-1">Address:137, Mirpur-1, Dhaka-1216.</li>
                            <li class="text-md text-gray-800 mb-1">Email:hobenakitour@gmail.com</li>
                            <li class="text-md text-gray-800 mb-1">Phone: 01844*****</li>
                        </ul>
                    </div>



                    </div>

            </div>
        </div>
    </section>


    <?php
    if (isset($_POST["bookNow"])) {
        $cn = makeconnection();
        $yes;
        if (isset($_POST["tourGuide"])) {
            $yes = 200;
        }
        $s = "insert into bookInfo (Date,PackageId,Price,additionalExpense) values('" . $_POST["date"] . "','" . $_GET["packid"] . "','" . $price . "','" . $yes . "')";
        mysqli_query($cn, $s);
        mysqli_close($cn);
        echo "<script>alert('Record Saved');</script>";
    }
    ?>

    <?php include('footer.php'); ?>

</body>

</html>