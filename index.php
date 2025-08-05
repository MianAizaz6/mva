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
    header("Location: message.html");
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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Infinite Quote Hub</title>
  <!-- 
  <script type="text/javascript">
    function getHostCountry() {

      fetch('https://ipinfo.io/json')
        .then(response => response.json())
        .then(data => {

          if (data.country === 'US') {

          } else {
            document.body.innerHTML = '<div id="access-denied" read-only style="display: flex;justify-content: center;align-items: center;height: 100vh;background-color: #f8d7da;color: #721c24;text-align: center;font-family: Arial, sans-serif;padding: 20px;box-sizing: border-box;"><h1 style="font-size: 3em;margin-bottom: 10px;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);">Access Denied</h1><p style="font-size: 1.5em;margin-top: 0;line-height: 1.6;      ">  &nbsp; Sorry, this website is not available in your country</p></div>';
            throw new Error('Access Denied');
          }
        })
        .catch(error => {

          console.error('Error:', error);
        });
    }
    window.addEventListener('DOMContentLoaded', getHostCountry);
  </script> -->

  <meta name="title" content="Motor Vehice Accidents">
  <meta name="description" content="Every year, millions of Americans are injured in motor vehicle accidents. If you’ve been hurt due to someone else’s negligence, you may be entitled to compensation for medical bills, lost wages, and pain and suffering.">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://infinitequotehub.com/">
  <meta property="og:title" content="Motor Vehice Accidents">
  <meta property="og:description" content="Every year, millions of Americans are injured in motor vehicle accidents. If you’ve been hurt due to someone else’s negligence, you may be entitled to compensation for medical bills, lost wages, and pain and suffering.">
  <meta property="og:image" content="https://infinitequotehub.com/og-img.jpeg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://infinitequotehub.com/">
  <meta property="twitter:title" content="Motor Vehice Accidents">
  <meta property="twitter:description" content="Every year, millions of Americans are injured in motor vehicle accidents. If you’ve been hurt due to someone else’s negligence, you may be entitled to compensation for medical bills, lost wages, and pain and suffering.">
  <meta property="twitter:image" content="https://infinitequotehub.com/og-img.jpeg">

  <script type="text/javascript">
    (function(c, l, a, r, i, t, y) {
      c[a] = c[a] || function() {
        (c[a].q = c[a].q || []).push(arguments)
      };
      t = l.createElement(r);
      t.async = 1;
      t.src = "https://www.clarity.ms/tag/" + i;
      y = l.getElementsByTagName(r)[0];
      y.parentNode.insertBefore(t, y);
    })(window, document, "clarity", "script", "slj0d121j2");
  </script>

  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1732966307430400');
    fbq('track', 'PageView');
  </script>


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

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="./images/favicon.ico" type="image/x-icon" />

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
  </style>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


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

<body class="font-sans text-[#000000] bg-white">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PG83ZZP2"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Header -->
  <header class="py-2 px-12 max-w-6xl mx-auto  bg-white flex items-center justify-between border-b border-gray-200">
    <div class="flex items-center gap-3 ">

      <a href="https://infinitequotehub.com/">
        <img src="./images/logo.png" alt="Infinite Quote Hub Logo" class="w-28 ml-3" />
      </a>
      <!-- <span class="text-lg font-bold tracking-wide uppercase">Infinite Quote Hub</span> -->
    </div>
    <div class="flex gap-3">
      <a href="tel:833-615-2933"
        class="bg-green-700 text-white flex gap-2 items-center  font-semibold uppercase p-[12px_25px] rounded-md ">
        (833) 615 2933</a>

      <a href="tel:8334030913"
        class="hidden md:inline-flex items-center gap-2 bg-transparent text-green-700  text-md transition-all duration-200">

        Agentes en Español (833-403-0913)
      </a>
    </div>

  </header>


  <div id="contact" class="relative bg-cover bg-center bg-no-repeat min-h-screen flex items-center justify-center" style="background-image: url('./images/cover.jpeg');">
    <div class="bg-black/60 w-full h-full absolute inset-0 z-0"></div>

    <div class="relative z-10 w-full max-w-7xl md:mt-0  mx-auto px-4 py-16 flex flex-col-reverse lg:flex-row items-center justify-between gap-12">

      <!-- Left Content -->
      <div class="text-center lg:text-left text-white max-w-xl">
        <h2 class="text-3xl sm:text-4xl font-semibold leading-tight mb-4">
          Have Questions? We’re Here <br class="hidden sm:block"> To Help You
        </h2>
        <!-- <p class="text-base sm:text-lg text-gray-200">
          Fill out the form and our team will contact you shortly.
        </p> -->

        <p class="text-white">If you've been injured or otherwise harmed, then you may be entitled to significant compensation under the law. Contact us today to be connected to one of our experienced attorneys within our network. The attorneys in our network offer free consultations that encompass various legal practice areas.</p>
      </div>

      <!-- Right Placeholder for Form -->
      <div class="w-full max-w-xl bg-white p-6 rounded-md shadow-lg min-h-[600px]">
        <!-- Replace this div with your form -->
        <div class="w-full h-full flex items-center justify-center text-gray-500 text-sm italic">
          <div>
            <h2 class="text-2xl font-semibold text-center text-black mb-4">Get Connected To Our Legal Team</h2>


            <form action="index.php" method="POST" class="space-y-3">
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
                  class="inline-block uppercase  mt-4 bg-black text-white font-medium px-6 py-3 rounded-md hover:bg-gray-800 transition">
                  SUBMIT
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>



  <!-- text section -->
  <section class="bg-[#e9e9e9] px-4 py-10 text-black font-['Helvetica']">
    <div class="max-w-6xl mx-auto text-center">

      <div class="max-w-4xl mx-auto px-4 text-center">

        <p class="text-xl font-medium leading-6 text-gray-800 mb-4">
          Every year, millions of Americans are injured in motor vehicle accidents. If you’ve been hurt due to someone else’s negligence, you may be entitled to compensation for medical bills, lost wages, and pain and suffering.
        </p>

        <p class="text-xl font-medium leading-6 text-gray-800 mb-6">
          Car accidents can happen in an instant but have lifelong consequences. Some of the most common causes include:
        </p>

        <!-- Bullet List (Left Aligned Inside Centered Block) -->
        <ul class="space-y-3 text-left mx-auto w-fit mb-6">
          <li class="flex items-center text-xl text-gray-800 !mt-0">
            <img src="./images/check.svg" alt="check" class="w-5 h-5 mr-3" />
            Distracted Driving (texting, phone use, eating)
          </li>
          <li class="flex items-center text-xl text-gray-800 !mt-0">
            <img src="./images/check.svg" alt="check" class="w-5 h-5 mr-3" />
            Speeding & Reckless Driving
          </li>
          <li class="flex items-center text-xl text-gray-800 !mt-0">
            <img src="./images/check.svg" alt="check" class="w-5 h-5 mr-3" />
            Drunk Driving (DUI/DWI)
          </li>
          <li class="flex items-center text-xl text-gray-800 !mt-0">
            <img src="./images/check.svg" alt="check" class="w-5 h-5 mr-3" />
            Fatigued Driving
          </li>
          <li class="flex items-center text-xl text-gray-800 !mt-0">
            <img src="./images/check.svg" alt="check" class="w-5 h-5 mr-3" />
            Aggressive Driving & Road Rage
          </li>
          <li class="flex items-center text-xl text-gray-800 !mt-0">
            <img src="./images/check.svg" alt="check" class="w-5 h-5 mr-3" />
            Poor Weather Conditions
          </li>
          <li class="flex items-center text-xl text-gray-800 !mt-0">
            <img src="./images/check.svg" alt="check" class="w-5 h-5 mr-3" />
            Defective Auto Parts (Tires, Brakes, Airbags)
          </li>
        </ul>

        <!-- Final Paragraphs -->
        <p class="text-xl font-medium text-gray-800 mb-4">
          If another driver’s negligence caused your accident, you may have a legal claim.
        </p>

        <p class="text-xl font-bold text-red-600">
          Don't Settle for Less Than You Deserve!!
        </p>
      </div>


      <!-- CTA Button -->
      <div class="mt-6 flex w-full justify-center">
        <a href="tel:833-615-2933"
          class="bg-green-700 text-white w-fit flex gap-2 items-center  justify-center font-semibold uppercase p-[12px_25px] rounded-md ">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current text-white" viewBox="0 0 24 24">
            <path
              d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.1 4.18 2 2 0 0 1 4 2h3a2 2 0 0 1 2 1.72c.12.83.38 1.63.74 2.39a2 2 0 0 1-.45 2.18L8 9a16 16 0 0 0 7 7l.71-.71a2 2 0 0 1 2.18-.45c.76.36 1.56.62 2.39.74A2 2 0 0 1 22 16.92z" />
          </svg>

          833-615-2933</a>
      </div>
    </div>
  </section>


  <div class="relative h-[300px] md:h-[450px] bg-cover bg-center flex items-center justify-center text-center px-4"
    style="background-image: url('./images/cover.jpeg');">
    <div class="md:h-[450px] bg-black opacity-40 absolute inset-0 "></div>
    <h1 class="text-white z-10 text-xl md:text-4xl font-bold leading-snug">
      Injured in a Car Accident? Know Your Rights & Get the Compensation<br class="hidden sm:block" />
      <span class="uppercase">YOU Deserve!</span> Get connected with our legal team today!
    </h1>
  </div>


  <!-- <div class="bg-gray-100 py-12">
    <div class="max-w-5xl mx-auto grid md:grid-cols-2 grid-cols-1 rounded-lg overflow-hidden">
      <div>
        <img src="./images/1.jpg" class="h-[300px] w-full object-cover" alt="">
      </div>
      <div>
        <img src="./images/2.jpg" class="h-[300px] w-full object-cover" alt="">
      </div>
      <div>
        <img src="./images/3.jpg" class="h-[300px] w-full object-cover" alt="">
      </div>
      <div>
        <img src="./images/4.jpg" class="h-[300px] w-full object-cover" alt="">
      </div>
    </div>
  </div> -->


  <section class="bg-gray-900 text-white py-12 px-4 ">
    <div class="max-w-5xl mx-auto flex  flex-col md:flex-row items-center gap-8">

      <!-- Heading -->
      <div class="md:w-1/3 h-full flex items-center">
        <h2 class="text-[36px] uppercase font-semibold">Our Mission:</h2>
      </div>

      <!-- Text -->
      <div class="md:w-2/3 text-md leading-relaxed">
        <p>
          At Infinite Quote Hub, our mission is to connect you with an experienced attorney in our network that will help you 24/7. Once connected to a qualified attorney, they will work closely with you to learn your case, gather the facts and work closely with you to get you the results that you're looking for. We only work with the top performing firms across all 50 states.
        </p>
      </div>

    </div>
  </section>


  <div class=" flex justify-center py-10  bg-gray-100">
    <a href="tel:833-615-2933"
      class="bg-green-700 text-white flex gap-2 items-center  font-semibold uppercase p-[12px_25px] rounded-md ">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current text-white" viewBox="0 0 24 24">
        <path
          d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.1 4.18 2 2 0 0 1 4 2h3a2 2 0 0 1 2 1.72c.12.83.38 1.63.74 2.39a2 2 0 0 1-.45 2.18L8 9a16 16 0 0 0 7 7l.71-.71a2 2 0 0 1 2.18-.45c.76.36 1.56.62 2.39.74A2 2 0 0 1 22 16.92z" />
      </svg>

      833-615-2933</a>
  </div>

  <div class="bg-gray-100 text-black font-sans">




    <section class="max-w-5xl mx-auto px-0 pb-10 md:mb-4">
      <h2 class="text-3xl font-semibold text-center mb-6">Frequently Asked Questions</h2>

      <div class="space-y-2">

        <div class="bg-white border rounded-lg shadow-sm">
          <button class="w-full px-2 py-2 flex items-center justify-between faq-toggle">
            <span class="text-left font-semibold text-[16px]"> How long do I have to file a claim? </span>
            <span class="icon text-xl font-bold text-gray-500">+</span>
          </button>
          <div class="faq-content px-3 pb-2 text-[16px] text-gray-700 hidden">
            This varies by state, typically 1-3 years from accident date.
          </div>
        </div>

        <div class="bg-white border rounded-lg shadow-sm">
          <button class="w-full px-2 py-2 flex items-center justify-between faq-toggle">
            <span class="text-left font-semibold text-[16px]">What if I was partially at fault? </span>
            <span class="icon text-xl font-bold text-gray-500">+</span>
          </button>
          <div class="faq-content px-3 pb-2 text-[16px] text-gray-700 hidden">
            Many states follow comparative negligence rules allowing partial recovery.
          </div>
        </div>

        <div class="bg-white border rounded-lg shadow-sm">
          <button class="w-full px-2 py-2 flex items-center justify-between faq-toggle">
            <span class="text-left font-semibold text-[16px]">How much is my case worth? </span>
            <span class="icon text-xl font-bold text-gray-500">+</span>
          </button>
          <div class="faq-content px-3 pb-2 text-[16px] text-gray-700 hidden">
            Depends on injury severity, medical costs, lost wages, and other factors.
          </div>
        </div>

        <div class="bg-white border rounded-lg shadow-sm">
          <button class="w-full px-2 py-2 flex items-center justify-between faq-toggle">
            <span class="text-left font-semibold text-[16px]">Do I need a lawyer for a minor accident? </span>
            <span class="icon text-xl font-bold text-gray-500">+</span>
          </button>
          <div class="faq-content px-3 pb-2 text-[16px] text-gray-700 hidden">
            Even minor crashes can have hidden injuries - consult an attorney to be safe.
          </div>
        </div>

        <div class="bg-white border rounded-lg shadow-sm">
          <button class="w-full px-2 py-2 flex items-center justify-between faq-toggle">
            <span class="text-left font-semibold text-[16px]">What if the other driver doesn’t have insurance? </span>
            <span class="icon text-xl font-bold text-gray-500">+</span>
          </button>
          <div class="faq-content px-3 pb-2 text-[16px] text-gray-700 hidden">
            You may still recover compensation through *uninsured/underinsured motorist coverage.
          </div>
        </div>

        <div class="bg-white border rounded-lg shadow-sm">
          <button class="w-full px-2 py-2 flex items-center justify-between faq-toggle">
            <span class="text-left font-semibold text-[16px]">What are my rights during an accident? </span>
            <span class="icon text-xl font-bold text-gray-500">+</span>
          </button>
          <div class="faq-content px-3 pb-2 text-[16px] text-gray-700 hidden">
            Understanding Your Rights: <br>

            1. No-Fault vs. At-Fault States: How it affects your claim. <br>
            2. Statute of Limitations: Time limits for filing a lawsuit. <br>
            3. Comparative Negligence: How fault affects your compensation. <br>

            Types of Compensation
            <br>
            1. Medical Expenses: Current and future treatment costs. <br>
            2. Lost Wages: Compensation for time off work. <br>
            3. Pain and Suffering*: Non-economic damages. <br>
            4. Property Damage: Vehicle repairs or replacement. <br>
          </div>
        </div>

      </div>
    </section>


    <!-- CTA Section -->
    <!-- <section class="bg-gray-900 py-10 px-4">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-xl md:text-2xl font-medium text-white tracking-wide mb-6">
          Our agents are ready to answer all of your questions
        </h2>

        <a href="https://wa.me/13058138838" target="_blank" rel="noopener noreferrer"
          class="inline-block px-8 py-3 bg-[#3B9EDC] text-white text-lg font-bold rounded-md shadow-md border-4 border-[#2076B5] hover:bg-[#2D8BC3] transition">
          CHAT NOW
        </a>
      </div>
    </section> -->

    <!-- Footer -->
    <section class="bg-gray-800 py-3">
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
  </div>


  <script>
    document.querySelectorAll('.faq-toggle').forEach(button => {
      button.addEventListener('click', () => {
        const content = button.nextElementSibling;
        const icon = button.querySelector('.icon');

        content.classList.toggle('hidden');
        icon.textContent = content.classList.contains('hidden') ? '+' : '−';
      });
    });
  </script>


  <?php if (isset($_GET['success']) && $_GET['success'] == 'true'): ?>
    <script>
      Swal.fire({
        title: "Submitted successfully!",
        text: "Thank you for submitting the form. Our team will be in contact with you soon.",
        icon: "success"
      });
    </script>
  <?php endif; ?>

  <?php if (isset($_GET['error']) && $_GET['error'] == 'true'): ?>
    <script>
      Swal.fire({
        title: "Error in Submitting Lead!",
        text: "There is an error occured while submitting your lead. Please try again.",
        icon: "success"
      });
    </script>
  <?php endif; ?>

  <script src="./scripts.js"></script>

  <script id="LeadiDscript" type="text/javascript">
    (function() {
      var s = document.createElement('script');
      s.id = 'LeadiDscript_campaign';
      s.type = 'text/javascript';
      s.async = true;
      s.src = '//create.lidstatic.com/campaign/5a9ebdba-b6f8-b36a-d86e-a76ed1b6f1e7.js?snippet_version=2&f=reset';
      var LeadiDscript = document.getElementById('LeadiDscript');
      LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
    })();
  </script>
  <noscript><img src='//create.leadid.com/noscript.gif?lac=47C1746C-8A81-9E03-394F-639E75E3F303&lck=5a9ebdba-b6f8-b36a-d86e-a76ed1b6f1e7&snippet_version=2' /></noscript>

</body>

</html>