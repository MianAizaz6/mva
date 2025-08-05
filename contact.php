<?php

if (isset($_POST['finish'])) {


    function getUserIP()
    {
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }

        return $ip;
    }

    $user_ip = getUserIP();


    $first_name = $_POST['full_name']; // required
    // required

    $number = $_POST['phone']; // required


    $email_from = $_POST['email'];  // required

    $ZipCode = $_POST['zip']; // required
    $Address = $_POST['state']; // required

    $LeadId = $_POST['universal_leadid'];

    $id    = rand(12, 15);

    $type = "Manual";

    include_once 'database.php';

    $sql = "INSERT INTO insurance_leads (lead_id,first_name,last_name,website,phone,campaign,email,zipcode,city,state,ipaddress,de_status,user_type,lead_date,lead_time)
   VALUES('$LeadId','$first_name','','mva.infinitequotehub.com','$number','MVA','$email_from','$ZipCode','','$Address','$user_ip','$type','$id',now(),now());";

    $run = mysqli_query($connection, $sql);
    // $run2 = mysqli_query($connection, $sql);

    if ($run) {
        header("Location: ./message.html");
        exit;
    } else {
        header("Location: index.php?error=true");
        exit;
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: "Inria Sans", sans-serif;
            font-style: normal;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Car Accident - Contact Us</title>


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17389903820">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-17389903820');
    </script>


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SQE4G3SQ9X"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-SQE4G3SQ9X');
    </script>


    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PG83ZZP2');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body class="scroll-smooth">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PG83ZZP2"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include('./includes/car_header.php') ?>


    <!-- HERO SECTION -->
    <!-- Desktop top navigation inside section -->
    <div class="hidden lg:flex justify-end gap-6 md:max-w-7xl lg:max-w-7xl mx-auto py-3 z-10">
        <a href="./car_accident/index.php" class="text-black font-medium text-[17px]">HOME</a>
        <a href="./practice_area.php" class="text-black font-medium text-[17px]">PRACTICE AREAS</a>
        <a href="./location.php" class="text-black font-medium text-[17px]">LOCATIONS</a>
        <a href="./about.php" class="text-black font-medium text-[17px]">ABOUT US</a>
        <a href="./contact.php" class="text-black font-medium text-[17px]">CONTACT US</a>
    </div>


    <div class=" relative  w-full max-w-10xl z-20" id="form">
        <div class="bg-gray-800 px-10 py-16">
            <div class=" flex flex-col justify-center items-center lg:flex-row gap-6 lg:gap-10">
                <!-- Cards Container -->
                <div class="bg-gray-800 grid grid-cols-1 bg-[#f9f9f9] gap-14 justify-center h-fit w-full lg:w-3/5">
                    <!-- Cards Row -->
                    <div class="bg-gray-800 flex flex-col justify-between sm:flex-row gap-6 w-full">
                        <!-- Card 1 -->
                        <div class="w-full sm:w-[200px] h-[250px] bg-gray-200 flex flex-col rounded-md">
                            <div class="px-2 mt-6">
                                <h2 class="font-bold text-[18px] text-center"> 100+ Licensed Attorneys
                                </h2>
                            </div>
                            <div class="flex flex-grow justify-center items-center">
                                <img src="./images/card 1.png" alt="" class="w-[120px] h-[120px] object-contain">
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="w-full sm:w-[200px] h-[250px] bg-gray-200 flex flex-col rounded-md">
                            <div class="px-2 mt-6">
                                <h2 class="font-bold text-[18px] text-center">35+ Years of Service
                                </h2>
                            </div>
                            <div class="flex flex-grow justify-center items-center">
                                <img src="./images/card 2.png" alt="" class="w-[100px] h-[100px] object-contain">
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="w-full sm:w-[200px] h-[250px] bg-gray-200 flex flex-col rounded-md">
                            <div class="px-2 mt-6">
                                <h2 class="font-bold text-[18px] text-center">Helped over 500,000 Clients</h2>
                            </div>
                            <div class="flex flex-grow justify-center items-center">
                                <img src="./images/truck.png" alt="" class="w-[100px] h-[100px] object-contain">
                            </div>
                        </div>
                    </div>


                    <div class="bg-gray-800 flex flex-col justify-between sm:flex-row gap-6 w-full">

                        <!-- card 4 -->
                        <div class="w-full sm:w-[200px] h-[250px] bg-gray-200 flex flex-col rounded-md">
                            <div class="px-2 mt-6">
                                <h2 class="font-bold text-[18px] text-center">No Win, No Fee
                                </h2>
                            </div>
                            <div class="flex flex-grow justify-center items-center">
                                <img src="./images/truck.png" alt="" class="w-[100px] h-[100px] object-contain">
                            </div>
                        </div>


                        <!-- card 5 -->
                        <div class="w-full sm:w-[200px] h-[250px] bg-gray-200 flex flex-col rounded-md">
                            <div class="px-2 mt-6">
                                <h2 class="font-bold text-[18px] text-center">24/7 Available
                                </h2>
                            </div>
                            <div class="flex flex-grow justify-center items-center">
                                <img src="./images/truck.png" alt="" class="w-[100px] h-[100px] object-contain">
                            </div>
                        </div>


                        <!-- card 6 -->
                        <div class="w-full sm:w-[200px] h-[250px] bg-gray-200 flex flex-col rounded-md">
                            <div class="px-2 mt-6">
                                <h2 class="font-bold text-[18px] text-center"> Connect to Attorney in Less than 10 Minutes
                                </h2>
                            </div>
                            <div class="flex flex-grow justify-center items-center">
                                <img src="./images/truck.png" alt="" class="w-[100px] h-[100px] object-contain">
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Form Container -->
                <div class="w-full md:w-2/5 lg:max-w-xl bg-white p-6 rounded-md shadow-lg min-h-[600px]">
                    <div class="">
                        <!-- Replace this div with your form -->
                        <div class="w-full h-full flex items-center justify-center text-gray-500 text-sm italic">
                            <div>
                                <h2 class="text-2xl font-semibold text-center text-black mb-4">Get Connected To Our Legal Team</h2>


                                <form action="" method="POST" class="space-y-3">
                                    <!-- Name -->
                                    <div class="grid md:grid-cols-2 grid-cols-1 gap-3">
                                        <!-- Name -->
                                        <div>
                                            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                                            <input type="text" id="fullName" name="full_name" placeholder="Enter your full name" class="w-full px-4 py-3 border rounded text-sm" required>
                                            <p class="text-red-500 text-xs mt-1 hidden" id="nameError">Please enter a valid name (letters only).</p>
                                        </div>

                                        <!-- Phone -->
                                        <div>
                                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                            <input type="text" id="phone" placeholder="Enter your phone number" name="phone" class="w-full px-4 py-3 border rounded text-sm" required>
                                            <p class="text-red-500 text-xs mt-1 hidden" id="phoneError">Please enter a valid 10-digit US phone number.</p>
                                        </div>

                                        <input id="leadid_token" name="universal_leadid" type="hidden" value="" />

                                        <!-- Email -->
                                        <div class="col-span-2">
                                            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                                            <input type="email" id="email" placeholder="Enter your email" name="email" class="w-full px-4 py-3 border rounded text-sm" required>
                                            <p class="text-red-500 text-xs mt-1 hidden" id="emailError">Please enter a valid email address.</p>
                                        </div>

                                        <!-- State -->
                                        <div>
                                            <label for="name" class="block text-sm font-medium text-gray-700">State </label>
                                            <select id="state" name="state" class="w-full px-4 py-3 border rounded text-sm" required>
                                                <option value="" disabled selected>Select your state</option>
                                                <option value="Alabama">Alabama</option>
                                                <option value="Alaska">Alaska</option>
                                                <option value="Arizona">Arizona</option>
                                                <option value="Arkansas">Arkansas</option>
                                                <option value="California">California</option>
                                                <option value="Colorado">Colorado</option>
                                                <option value="Connecticut">Connecticut</option>
                                                <option value="Delaware">Delaware</option>
                                                <option value="Florida">Florida</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Hawaii">Hawaii</option>
                                                <option value="Idaho">Idaho</option>
                                                <option value="Illinois">Illinois</option>
                                                <option value="Indiana">Indiana</option>
                                                <option value="Iowa">Iowa</option>
                                                <option value="Kansas">Kansas</option>
                                                <option value="Kentucky">Kentucky</option>
                                                <option value="Louisiana">Louisiana</option>
                                                <option value="Maine">Maine</option>
                                                <option value="Maryland">Maryland</option>
                                                <option value="Massachusetts">Massachusetts</option>
                                                <option value="Michigan">Michigan</option>
                                                <option value="Minnesota">Minnesota</option>
                                                <option value="Mississippi">Mississippi</option>
                                                <option value="Missouri">Missouri</option>
                                                <option value="Montana">Montana</option>
                                                <option value="Nebraska">Nebraska</option>
                                                <option value="Nevada">Nevada</option>
                                                <option value="New Hampshire">New Hampshire</option>
                                                <option value="New Jersey">New Jersey</option>
                                                <option value="New Mexico">New Mexico</option>
                                                <option value="New York">New York</option>
                                                <option value="North Carolina">North Carolina</option>
                                                <option value="North Dakota">North Dakota</option>
                                                <option value="Ohio">Ohio</option>
                                                <option value="Oklahoma">Oklahoma</option>
                                                <option value="Oregon">Oregon</option>
                                                <option value="Pennsylvania">Pennsylvania</option>
                                                <option value="Rhode Island">Rhode Island</option>
                                                <option value="South Carolina">South Carolina</option>
                                                <option value="South Dakota">South Dakota</option>
                                                <option value="Tennessee">Tennessee</option>
                                                <option value="Texas">Texas</option>
                                                <option value="Utah">Utah</option>
                                                <option value="Vermont">Vermont</option>
                                                <option value="Virginia">Virginia</option>
                                                <option value="Washington">Washington</option>
                                                <option value="West Virginia">West Virginia</option>
                                                <option value="Wisconsin">Wisconsin</option>
                                                <option value="Wyoming">Wyoming</option>
                                            </select>
                                            <p class="text-red-500 text-xs mt-1 hidden" id="stateError">Please select your state.</p>
                                        </div>

                                        <!-- Zip -->
                                        <div>
                                            <label for="name" class="block text-sm font-medium text-gray-700">Zip</label>
                                            <input type="text" id="zip" name="zip" placeholder="Enter your zip code" class="w-full px-4 py-3 border rounded text-sm" required>
                                            <p class="text-red-500 text-xs mt-1 hidden" id="zipError">Zip code must be exactly 5 digits.</p>
                                        </div>
                                    </div>


                                    <input id="leadid_token" name="universal_leadid" type="hidden" value="" />

                                    <div class="pt-3">
                                        <p style="font-size: 12px; line-height:13px; font-weight:300"><input type="checkbox" id="leadid_tcpa_disclosure" required>
                                            By checking this box, I acknowledge that I have read and agree to the Terms and Conditions, CCPA, and Privacy Policy. I also provide my express consent and electronic signature to Infinite Quote Hub, its Partners, 1-800-TheLaw2, Los Defensores, and/or licensed insurance agents employed with Infinite Quote Hub or our partners. I authorize them to contact me regarding Motor Vehicle Accident services via telephone calls and text messages (SMS/MMS) on the provided number, including calls and pre-recorded messages made using an automated dialing system. I further consent to be contacted outside of the standard state and federal calling windows of 8:00 AM to 9:00 PM local time. This consent applies even if my phone number is currently listed on any state, federal, or corporate Do Not Call list, and regardless of whether it is a wireless number. I understand that my consent is not a requirement for purchasing any goods or services, and I may revoke this consent at any time. Standard message and data rates may apply. Furthermore, I confirm that I am over 18 years of age. For more information, please review our Privacy Policy, Terms and Conditions, and other available links.
                                        </p>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="text-center">
                                        <button type="submit" name="finish"
                                            class="inline-block uppercase  mt-4 bg-gray-800 text-white font-medium px-6 py-3 rounded-md hover:bg-gray-800 transition">
                                            SUBMIT
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer -->
    <section class="bg-gray-800 py-3 mt-10">
        <p class="text-[12px] text-white text-gray-700 text-center">This website is for informational purposes only and does not constitute legal advice. Contacting us does not establish an attorney-client relationship.</p>
    </section>
    <footer class="bg-gray-200 py-8">
        <div class="max-w-5xl mx-auto flex justify-between">
            <div class="">
                <p class="text-[12px] text-gray-700">Copyright © 2025 infinitequoteshub All rights reserved</p>
            </div>

            <div class="flex gap-2 items">
                <a href="https://goadvertising.io/" target="_blank">
                    <img src="./images/advertising.png" class="h-6" alt=""></a>
                <p class="text-[12px] text-gray-700">Powered by Go Advertising LLC</p>
            </div>

            <div class="flex gap-4 justify-end">
                <a class="text-[12px] text-gray-700" href="terms.html">Terms & Conditions</a>
                <a class="text-[12px] text-gray-700" href="privacy.html">Privacy Policy</a>
                <a class="text-[12px] text-gray-700" href="ccpa.html">For Our California Audience</a>
            </div>

        </div>
    </footer>







    <!-- SCRIPT -->
    <script>
        const toggleBtn = document.getElementById('menu-toggle');
        const wrapper = document.getElementById('mobile-wrapper');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');
        const menuClose = document.getElementById('menu-close');

        // Toggle open/close
        toggleBtn.addEventListener('click', () => {
            const isOpen = wrapper.classList.contains('scale-y-100');
            wrapper.classList.toggle('scale-y-0');
            wrapper.classList.toggle('scale-y-100');
            hamburgerIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        // Close with inside cross
        menuClose.addEventListener('click', () => {
            wrapper.classList.add('scale-y-0');
            wrapper.classList.remove('scale-y-100');
            hamburgerIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        });
    </script>

<script src="./scripts.js"></script>
</body>

</html>