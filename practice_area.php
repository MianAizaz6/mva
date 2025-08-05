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

<body class="font-sans text-[#000000] bg-white flex flex-col">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PG83ZZP2"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->


  <?php include('./includes/car_header.php') ?>


  <section class="px-4 pb-8 bg-white">
    <div class="hidden lg:flex justify-end gap-6 md:max-w-7xl lg:max-w-7xl mx-auto py-3 relative z-10">
      <a href="./car_accident/index.php" class="text-black font-medium text-[17px]">HOME</a>
      <a href="./practice_area.php" class="text-black font-medium text-[17px]">PRACTICE AREAS</a>
      <a href="./location.php" class="text-black font-medium text-[17px]">LOCATIONS</a>
      <a href="./about.php" class="text-black font-medium text-[17px]">ABOUT US</a>
      <a href="./contact.php" class="text-black font-medium text-[17px]">CONTACT US</a>
    </div>

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
            <a href="./index.php" class="text-black font-medium text-[17px]">HOME</a>
            <a href="../practice_area.php" class="text-gray-700 font-medium text-[17px]">PRACTICE AREAS</a>
            <a href="../location.php" class="text-gray-700 font-medium text-[17px]">LOCATIONS</a>
            <a href="../about.php" class="text-gray-700 font-medium text-[17px]">ABOUT US</a>
            <a href="../contact.php" class="text-gray-700 font-medium text-[17px]">CONTACT US</a>
          </div>
          <a href="tel:8336152933" class="bg-gray-800 text-white px-6 py-3 rounded-md font-semibold text-sm shadow-md text-center">CALL 24/7</a>
          <a href="tel:833-615-2933" class="bg-green-700 text-white font-semibold uppercase px-6 py-3 rounded-md text-center">(833) 615 2933</a>
          <a href="#form" class="bg-gray-800 text-white px-6 py-3 rounded-md font-semibold text-sm shadow-md text-center">SCHEDULE A FREE CONSULTATION</a>
        </div>
      </div>
    </div>


    <div class="max-w-7xl mx-auto">

      <h2 class="text-4xl font-bold text-center mb-12 uppercase tracking-wide">Practice Areas</h2>

      <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Card 1 -->
        <div class="bg-gray-100 rounded overflow-hidden shadow-sm min-h-[350px]">
          <img src="./images/practice_areas/accidented_car.jpg" alt="Car Accident" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="font-semibold text-xl mb-2">Car Accidents:</h3>
            <p class="text-md text-gray-700">
              Whether your car crash was minor or serious, any injuries sustained in an accident can be painful and costly.
            </p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-gray-100 rounded overflow-hidden shadow-sm min-h-[350px]">
          <img src="./images/practice_areas/bike.jpeg" alt="Motorcycle Accident" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="font-semibold text-xl mb-2">Motorcycle Accidents:</h3>
            <p class="text-md text-gray-700">
              As motorcycle accident lawyers, we know how devastating a motorcycle accident can be.
            </p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-gray-100 rounded overflow-hidden shadow-sm min-h-[350px]">
          <img src="./images/practice_areas/truck.jpeg" alt="Truck Accident" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="font-semibold text-xl mb-2">Truck Accidents:</h3>
            <p class="text-md text-gray-700">
              Big trucks can be over 30-feet long and weigh up to 80,000 Lbs. At that size, a truck accident can be catastrophic.
            </p>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-gray-100 rounded overflow-hidden shadow-sm min-h-[350px]">
          <img src="./images/practice_areas/bus.jpeg" alt="Bus Accident" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="font-semibold text-xl mb-2">Bus Accidents:</h3>
            <p class="text-md text-gray-700">
              Whenever there’s a bus accident, you are our first priority. If you’re injured, you’ll need immediate medical attention.
            </p>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="bg-gray-100 rounded overflow-hidden shadow-sm min-h-[350px]">
          <img src="./images/practice_areas/cycle.jpeg" alt="Bicycle Accident" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="font-semibold text-xl mb-2">Bicycle Accidents:</h3>
            <p class="text-md text-gray-700">
              From unsafe infrastructure to negligent drivers, bicyclists are often the first to suffer.
            </p>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="bg-gray-100 rounded overflow-hidden shadow-sm min-h-[350px]">
          <img src="./images/practice_areas/pedist.jpeg" alt="Pedestrian Accident" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="font-semibold text-xl mb-2">Pedestrian Accidents:</h3>
            <p class="text-md text-gray-700">
              Some drivers simply don’t respect the rights of pedestrians.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>






  <?php include('./includes/footer.php') ?>

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