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
    $last_name = $_POST['last_name']; // required

    $number = $_POST['phone']; // required


    $email_from = $_POST['pemail'];  // required

    $ZipCode = $_POST['zip']; // required
    $Address = $_POST['state']; // required

    $LeadId = $_POST['universal_leadid'];

    $id    = rand(12, 15);

    $type = "Manual";

    include_once 'database.php';

    $sql = "INSERT INTO insurance_leads (lead_id,first_name,last_name,website,phone,campaign,email,zipcode,city,state,ipaddress,de_status,user_type,lead_date,lead_time)
   VALUES('$LeadId','$first_name','$last_name','mva.infinitequotehub.com','$number','MVA','$email_from','$ZipCode','','$Address','$user_ip','$type','$id',now(),now());";

    $run = mysqli_query($connection, $sql);
    // $run2 = mysqli_query($connection, $sql);

    if ($run) {
        header("Location: index.php?success=true");
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
    <title>Document</title>
</head>

<body  class="scroll-smooth">



    <!-- HEADER -->
    <header class="py-2 md:px-0 px-4 max-w-7xl mx-auto bg-white flex items-center justify-between border-b border-gray-200 relative z-20">
        <div class="flex items-center gap-3">
            <a href="https://infinitequotehub.com/">
                <img src="./images/logo.png" alt="Infinite Quote Hub Logo" class="w-28 ml-3" />
            </a>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex gap-4">
            <a href="tel:8336152933" class="bg-gray-800 hover:bg-[#005fa3] transition text-white px-6 py-3 rounded-md font-semibold text-sm sm:text-base shadow-md">CALL 24/7</a>
            <a href="tel:833-615-2933" class="bg-green-700 text-white flex gap-2 items-center font-semibold uppercase p-[12px_25px] rounded-md">(833) 615 2933</a>
            <a href="#form" class="bg-gray-800 hover:bg-[#005fa3] transition text-white px-6 py-3 rounded-md font-semibold text-sm sm:text-base shadow-md">SCHEDULE A FREE CONSULTATION</a>
        </div>

        <!-- Hamburger Button -->
        <div class="lg:hidden">
            <button id="menu-toggle" class="text-gray-800 focus:outline-none z-50 relative">
                <!-- Hamburger Icon -->
                <svg id="hamburger-icon" class="w-8 h-8 block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                </svg>
                <!-- Cross Icon -->
                <svg id="close-icon" class="w-8 h-8 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </header>

    <!-- MOBILE OVERLAY BACKGROUND + MENU -->
    <div id="mobile-wrapper" class="fixed inset-0 z-40 bg-black/50 backdrop-blur-sm scale-y-0 origin-top transition-all duration-300 ease-in-out lg:hidden">
        <div id="mobile-menu" class="max-w-7xl mx-auto px-4 py-4 bg-white relative">
            <!-- Optional Close Button Inside Menu -->

             <a href="https://infinitequotehub.com/">
                <img src="./images/logo.png" alt="Infinite Quote Hub Logo" class="w-28 ml-3" />
            </a>
            <button id="menu-close" class="absolute top-4 right-4 text-gray-700 focus:outline-none lg:hidden">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <div class="flex flex-col gap-4 pt-8">
                <div class="flex flex-col gap-2 mt-3 text-center">
                    <a href="./practice_area.php" class="text-gray-700 font-medium text-[17px]">PRACTICE AREAS</a>
                    <a href="./location.php" class="text-gray-700 font-medium text-[17px]">LOCATIONS</a>
                    <a href="./about.php" class="text-gray-700 font-medium text-[17px]">ABOUT US</a>
                    <a href="./contact.php" class="text-gray-700 font-medium text-[17px]">CONTACT US</a>
                </div>
                <a href="tel:8336152933" class="bg-gray-800 text-white px-6 py-3 rounded-md font-semibold text-sm shadow-md text-center">CALL 24/7</a>
                <a href="tel:833-615-2933" class="bg-green-700 text-white font-semibold uppercase px-6 py-3 rounded-md text-center">(833) 615 2933</a>
                <a href="#form" class="bg-gray-800 text-white px-6 py-3 rounded-md font-semibold text-sm shadow-md text-center">SCHEDULE A FREE CONSULTATION</a>
            </div>
        </div>
    </div>


    <!-- HERO SECTION -->

    <div class="bg-center bg-[#f0ede2] bg-cover bg-no-repeat lg:h-[50vh] h-[50vh] flex flex-col justify-center items-center relative">
    
    <!-- Desktop top navigation inside section -->
    <div class="hidden lg:flex justify-end gap-6 md:max-w-7xl lg:max-w-7xl mx-auto py-3 absolute top-0 right-0 left-0 z-10">
        <a href="./practice_area.php" class="text-white font-medium text-[17px]">PRACTICE AREAS</a>
        <a href="./location.php" class="text-white font-medium text-[17px]">LOCATIONS</a>
        <a href="./about.php" class="text-white font-medium text-[17px]">ABOUT US</a>
        <a href="./contact.php" class="text-white font-medium text-[17px]">CONTACT US</a>
    </div>

    <h2 class="text-[60px] z-10">CONTACT US</h2>
</div>






   


    <div class="mt-10 bg-[#eaeaea]">
        <div class="flex justify-center items-center gap-5">
            <img src="./images/mva-logo.png" alt="" class="lg:w-[140px] w-[100px] lg:h-[140px] h-[100px]  lg:mt-0 mt-5">
            <h2 class="lg:text-[46px] text-[36px] font-bold">MVA</h2>
        </div>
        <div>
            <p class="lg:text-[28px] text-[18px] font-semibold text-center lg:px-10 pb-5 px-3">Get Exclusive, Highly Qualified Auto Accident Personal Injury Leads Delivered to you.
                One of the most sought-after type of leads in the personal injury lead-generation space is motor vehicle accident leads. We focus on generating high-quality, real-time auto accident leads for our legal firm partners. Our auto accident personal injury leads for sale are designed for law firms who represent injured drivers, passengers, pedestrians and their families who are victims of a car crash and are searching for an attorney who will be proactive and fight to get them the best possible settlement.</p>
        </div>
    </div>

    <!-- Centered Section -->
    <div class=" flex items-center justify-center bg-whiten my-14">
        <a href="#quoteForm">
            <button class="px-8 py-0 border-black border-[2px] text-[36px] rounded-full">
                GET A QUOTE
            </button>
        </a>
    </div>



    <div class="bg-gray-100 py-10">
        <div class="max-w-5xl mx-auto grid md:grid-cols-2 grid-cols-1 rounded-lg overflow-hidden">
            <div>
                <img src="./images/accident 1.avif" class="h-[300px] w-full object-cover" alt="">
            </div>
            <div>
                <img src="./images/accident 2.avif" class="h-[300px] w-full object-cover" alt="">
            </div>
            <div>
                <img src="./images/accident 3.avif" class="h-[300px] w-full object-cover" alt="">
            </div>
            <div>
                <img src="./images/accident 4.avif" class="h-[300px] w-full object-cover" alt="">
            </div>
        </div>
    </div>

     <!--form section --> 

        <div id="quoteForm" class=" mx-auto mt-10  w-full md:w-2/5 lg:max-w-xl bg-white p-6 rounded-md shadow-lg min-h-[600px]">
            <div class="">
                <!-- Replace this div with your form -->
                <div class="w-full h-full flex items-center justify-center text-gray-500 text-sm italic">
                    <div>
                        <h2 class="text-2xl font-semibold text-center text-black mb-4">Get Connected To Our Legal Team</h2>


                        <form action="./index.php" method="POST" class="space-y-3">
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


</body>

</html>