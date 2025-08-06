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
    <title>Commercial accident</title>
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
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- faqs -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqLinks = document.querySelectorAll('.faq-link');
            const faqContent = document.getElementById('faq-content');
            const sectionItems = document.querySelectorAll('.section-item');
            const faqSidebar = document.getElementById('faq-sidebar');

            // Click handler for FAQ links
            faqLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('data-target');
                    const targetSection = document.getElementById(targetId);

                    if (targetSection) {
                        // Calculate offset for sticky header
                        const headerHeight = document.querySelector('header')?.offsetHeight || 0;
                        const offset = headerHeight + 20;

                        // Get element position
                        const elementPosition = targetSection.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - offset;

                        // Smooth scroll to the section
                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });

                        // Update active state after a slight delay
                        setTimeout(() => {
                            updateActiveState();
                        }, 300);
                    }
                });
            });

            // Scroll handler to update active FAQ
            window.addEventListener('scroll', updateActiveState);

            function updateActiveState() {
                let foundActive = false;
                const headerHeight = document.querySelector('header')?.offsetHeight || 0;
                const offset = headerHeight + 20;

                // Check which section is currently in view
                sectionItems.forEach(section => {
                    const rect = section.getBoundingClientRect();
                    const sectionTop = rect.top - offset;
                    const sectionBottom = rect.bottom - offset;

                    // If section is in view (with some offset)
                    if (sectionTop <= 100 && sectionBottom >= 100) {
                        const sectionId = section.getAttribute('id');

                        faqLinks.forEach(link => {
                            if (link.getAttribute('data-target') === sectionId) {
                                link.classList.add('active');
                                link.querySelector('a').classList.add('font-bold', 'font-semibold');
                                link.querySelector('img').classList.add('rotate-90');
                                foundActive = true;
                            } else {
                                link.classList.remove('active');
                                link.querySelector('a').classList.remove('font-bold', 'font-semibold');
                                link.querySelector('img').classList.remove('rotate-90');
                            }
                        });
                    }
                });

                // If no section is active (scrolled to top), make first FAQ active
                if (!foundActive && sectionItems.length > 0) {
                    const firstSectionId = sectionItems[0].getAttribute('id');
                    faqLinks.forEach(link => {
                        if (link.getAttribute('data-target') === firstSectionId) {
                            link.classList.add('active');
                            link.querySelector('a').classList.add('font-bold', 'font-semibold');
                            link.querySelector('img').classList.add('rotate-90');
                        } else {
                            link.classList.remove('active');
                            link.querySelector('a').classList.remove('font-bold', 'font-semibold');
                            link.querySelector('img').classList.remove('rotate-90');
                        }
                    });
                }
            }

            // Initialize active state
            updateActiveState();

            // Responsive behavior for smaller screens
            function handleResponsive() {
                if (window.innerWidth < 1024) {
                    // For smaller screens, make the sidebar scrollable
                    faqSidebar.classList.remove('lg:sticky', 'lg:top-0', 'lg:h-[100vh]');
                    faqSidebar.classList.add('max-h-[60vh]', 'overflow-y-auto');
                } else {
                    // For larger screens, maintain sticky behavior
                    faqSidebar.classList.add('lg:sticky', 'lg:top-0', 'lg:h-[100vh]');
                    faqSidebar.classList.remove('max-h-[60vh]', 'overflow-y-auto');
                }
            }

            // Run on load and resize
            handleResponsive();
            window.addEventListener('resize', handleResponsive);
        });
    </script>


</head>

<style>
    /* FAQ Link Styles */
    .faq-link {
        transition: all 0.3s ease;
        padding: 8px 12px;
        border-radius: 4px;
    }

    .faq-link:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }

    .faq-link.active {
        background-color: rgba(255, 255, 255, 0.15);
    }

    /* Rotate arrow for active FAQ */
    .rotate-90 {
        transform: rotate(90deg);
    }

    /* Content Styles */
    .section-item {
        scroll-margin-top: 100px;
        /* Account for sticky header */
    }

    /* Custom scrollbar for sidebar */
    #faq-sidebar::-webkit-scrollbar {
        width: 6px;
    }

    #faq-sidebar::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 3px;
    }

    #faq-sidebar::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.3);
        border-radius: 3px;
    }

    /* Responsive adjustments */
    @media (max-width: 1023px) {
        #faq-sidebar {
            order: -1;
            margin-bottom: 20px;
        }
    }
</style>


<body class="font-sans text-[#000000] bg-white">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PG83ZZP2"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Header -->

    <!-- HEADER -->
    <div class="border-b border-gray-200 w-full">
        <header class="py-2 md:px-0 px-4 max-w-7xl mx-auto bg-white w-full flex items-center justify-between  relative z-20">
            <div class="flex items-center gap-3">
                <a href="https://infinitequotehub.com/">
                    <img src="../images//logo.png" alt="Infinite Quote Hub Logo" class="w-28 ml-3" />
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex justify-center items-center gap-4">
                <h2 class="text-md font-semibold">CALL 24/7</h2>
                <a href="tel:833-615-2933" class="bg-green-700 text-white flex gap-2 items-center font-bold uppercase p-[12px_25px] rounded-md">(833) 615 2933</a>
                <a href="#form" class="bg-gray-800 hover:bg-[#005fa3] transition text-white px-6 py-3 rounded-md font-bold text-sm sm:text-base shadow-md">SCHEDULE A FREE CONSULTATION</a>
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
    </div>

    <!-- MOBILE OVERLAY BACKGROUND + MENU -->
    <div id="mobile-wrapper" class="fixed inset-0 z-40 bg-black/50 backdrop-blur-sm scale-y-0 origin-top transition-all duration-300 ease-in-out lg:hidden">
        <div id="mobile-menu" class="max-w-7xl mx-auto px-4 py-4 bg-white relative">
            <!-- Optional Close Button Inside Menu -->

            <a href="https://infinitequotehub.com/">
                <img src="../images/logo.png" alt="Infinite Quote Hub Logo" class="w-28 ml-3" />
            </a>
            <button id="menu-close" class="absolute top-4 right-4 text-gray-700 focus:outline-none lg:hidden">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <div class="flex flex-col gap-4 pt-8">
                <div class="flex flex-col gap-2 mt-3 text-center">
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



    <div id="contact" class="relative bg-cover bg-center bg-no-repeat md:min-h-[85vh]" style="background-image: url('../images/commercial\ accident\ hero.jpg');">
        <div class="bg-black/60 w-full h-full absolute inset-0 z-0"></div>

        <div class="hidden lg:flex justify-end gap-6 md:max-w-7xl lg:max-w-7xl mx-auto py-3 absolute top-0 right-0 left-0 z-10">
            <a href="../practice_area.php" class="text-white font-medium text-[17px]">PRACTICE AREAS</a>
            <a href="../location.php" class="text-white font-medium text-[17px]">LOCATIONS</a>
            <a href="../about.php" class="text-white font-medium text-[17px]">ABOUT US</a>
            <a href="../contact.php" class="text-white font-medium text-[17px]">CONTACT US</a>
        </div>
        <!-- Title -->
        <div class="pt-16 lg:pt-20 max-w-7xl mx-auto">
            <h2 class="text-white text-center relative z-10 font-semibold lg:text-[62px] sm:text-xl lg:pr-10 pr-0 ">
                COMMERCIAL ACCIDENT ATTORNEYS
            </h2>
        </div>

        <!-- Content Section -->
        <div class="max-w-6xl mx-auto px-4 py-10 z-50 flex flex-col-reverse lg:flex-row  items-center lg:items-center justify-between gap-8 lg:pl-10 pl-0">
            <!-- Left Content Box -->
            <div class="bg-white/80 py-11 px-6 shadow-lg z-20 border border-gray-200 rounded-md md:min-h-[500px] w-full lg:w-1/2">
                <div class="text-center">
                    <!-- Heading -->
                    <h2 class="text-[24px] sm:text-[34px]  font-bold text-[#00446A] leading-[38px] mb-4">
                    How A Commercial Vehicle Accident Attorney Can Help You
                    </h2>

                    <!-- Description -->
                    <p class="text-gray-800 text-[14px] sm:text-[24px] mb-3 leading-[28px]">
                        Dealing with a commercial vehicle accident is an overwhelming experience. Let our compassionate and experienced team handle the complex legal process so you can focus on your recovery. We'll guide you through every step, from taking on large corporations and their powerful legal teams to securing the maximum compensation you need to get back on your feet.
                    </p>

                    <!-- Buttons -->
                    <div class="flex flex-col sm:flex-row justify-center gap-4 mt-4">
                        <a href="tel:8336152933" class="bg-gray-800 hover:bg-[#005fa3] transition text-white px-6 py-3 rounded-md font-semibold text-sm sm:text-base shadow-md">
                            CALL (833) 615 2933
                        </a>
                        <a href="#form" class="bg-gray-800 hover:bg-[#005fa3] transition text-white px-6 py-3 rounded-md font-semibold text-sm sm:text-base shadow-md">
                            SCHEDULE A FREE CONSULTATION
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Image -->
            <div class="w-full lg:w-1/2 flex justify-center z-20">
                <img src="../images/hero men.jpg" alt="Hero image" class="rounded-md w-auto h-[420px] md:h-[515px] object-contain" />
            </div>
        </div>
    </div>



    <!-- CARD & FORM SECTION -->
    <div class=" relative  w-full z-20" id="form">
        <div class="bg-gray-800 px-10 py-16">
            <div class=" flex flex-col max-w-[1440px] mx-auto justify-center items-center lg:flex-row gap-6 lg:gap-10">
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
                                <img src="../images/trophy.png" alt="" class="w-[120px] h-[120px] object-contain">
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="w-full sm:w-[200px] h-[250px] bg-gray-200 flex flex-col rounded-md">
                            <div class="px-2 mt-6">
                                <h2 class="font-bold text-[18px] text-center">35+ Years of Service
                                </h2>
                            </div>
                            <div class="flex flex-grow justify-center items-center">
                                <img src="../images/responsible.png" alt="" class="w-[100px] h-[100px] object-contain">
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="w-full sm:w-[200px] h-[250px] bg-gray-200 flex flex-col rounded-md">
                            <div class="px-2 mt-6">
                                <h2 class="font-bold text-[18px] text-center">Helped over 500,000 Clients</h2>
                            </div>
                            <div class="flex flex-grow justify-center items-center">
                                <img src="../images/users.png" alt="" class="w-[100px] h-[100px] object-contain">
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
                                <img src="../images/no win.png" alt="" class="w-[100px] h-[100px] object-contain">
                            </div>
                        </div>


                        <!-- card 5 -->
                        <div class="w-full sm:w-[200px] h-[250px] bg-gray-200 flex flex-col rounded-md">
                            <div class="px-2 mt-6">
                                <h2 class="font-bold text-[18px] text-center">24/7 Available
                                </h2>
                            </div>
                            <div class="flex flex-grow justify-center items-center">
                                <img src="../images/24-hours.png" alt="" class="w-[100px] h-[100px] object-contain">
                            </div>
                        </div>


                        <!-- card 6 -->
                        <div class="w-full sm:w-[200px] h-[250px] bg-gray-200 flex flex-col rounded-md">
                            <div class="px-2 mt-6">
                                <h2 class="font-bold text-[18px] text-center"> Connect to Attorney in Less than 10 Minutes
                                </h2>
                            </div>
                            <div class="flex flex-grow justify-center items-center">
                                <img src="../images/support.png" alt="" class="w-[100px] h-[100px] object-contain">
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



    <!-- FAQS SECTIONS -->
    <div class="flex flex-col lg:flex-row justify-between items-start gap-8 pl-4 py-0 max-w-fulll mx-auto">
        <!-- FAQ ANSWER -->
        <div class="w-full md:w-[52%] py-8 md:ml-40 space-y-8" id="faq-content">
            <!-- Q/1 -->
            <div id="q1" class="section-item bg-white p-2 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4">Is It Worth Hiring A Commercial Vehicle Accident Lawyer?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">
                    Yes, hiring a commercial vehicle accident lawyer is a crucial step after a crash involving a truck, bus, or other commercial vehicle. While many cases settle before trial, an experienced commercial vehicle accident attorney plays a pivotal role in negotiating with insurance companies and large corporations to secure the maximum possible compensation. They also have the expertise to take your case to trial if that becomes the best path to justice. Most importantly, a commercial vehicle accident lawyer understands the complexities of personal injury law, including specific regulations for truck accidents and bus crashes, and can leverage all available evidence to build the strongest possible case on your behalf.
                </p>
            </div>

            <!-- Q/2 -->
            <div id="q2" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4 leading-[38px]">How Does A Commercial Vehicle Accident Lawyer Help?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">A lawyer handles all the legal complexities, allowing you to focus on your recovery. Their key responsibilities include:</p>
                <div class="ml-6 mt-4 space-y-2">
                    <p class="font-bold">● Investigating the facts of the case</p>
                    <p class="font-bold">● Gathering and preserving evidence for trial</p>
                    <p class="font-bold">● Serving as a “communication middleman”</p>
                    <p class="font-bold">● Identifying eyewitnesses</p>
                    <p class="font-bold">● Collaborating with expert witnesses</p>
                    <p class="font-bold">● Developing a comprehensive legal strategy</p>
                    <p class="font-bold">● Negotiating a potential settlement</p>
                    <p class="font-bold">● Reacting dynamically to changing circumstances</p>
                </div>

                <h3 class="text-xl lg:text-[25px] font-bold  mt-6">Getting Compensation</h3>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">The primary goal of a personal injury attorney is to secure compensation for all losses caused by the accident. These losses, also known as damages, may include:</p>
                <div class="ml-6 mt-4 space-y-2">
                    <p class="font-bold">● Wage loss</p>
                    <p class="font-bold">● Pain and suffering</p>
                    <p class="font-bold">● Medical expenses</p>
                    <p class="font-bold">● Loss of earning capacity</p>
                    <p class="font-bold">● Property loss</p>
                    <p class="font-bold">● And more.</p>
                </div>
            </div>

            <!-- Q/3 -->
            <div id="q3" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4">How Much Does A Commercial Vehicle Accident Lawyer Cost?</h2>
                <h3 class="text-xl lg:text-[25px] font-semibold  mb-3 leading-[38px]">Contingency Fee Arrangements And Free Consultations</h3>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">
                    You may be concerned about the cost of hiring a commercial vehicle accident lawyer? Not a problem. Most commercial vehicle accident attorneys work on a contingency basis. This means you pay nothing unless and until they successfully win your case and you obtain compensation. There are no upfront costs. Put simply, the attorney will represent you for free.
                    <br><br>
                    They will cover out-of-pocket expenses, like: medical expenses, and costs of litigation, like: working with expert witnesses and investigators, building the case, and so on. Your commercial vehicle accident attorney may put in hundreds of thousands of dollars of work for free! Contingency fees make it easier for injured plaintiffs to secure quality legal representation. In exchange, the plaintiff will have to give a percentage of their recovery wins over to the attorney.
                    <br><br>
                    For example, if your truck accident settlement lawyer secures $2,000,000, they may take a percentage in contingency fees, leaving you with a substantial recovery. This dynamic is highly advantageous. Not only do you pay no upfront costs, but it also incentivizes the attorney to work efficiently and to maximize your overall compensation. The more that your attorney can secure on your behalf, the more they get paid. It’s a win-win situation.
                    <br><br>
                    Most commercial vehicle accident attorneys also provide free consultations. This can help you understand whether you have an actionable injury claim, and whether you’d like to move forward with your case. There is no barrier to entry, so if you need truck accident lawyer or truck accident legal help, make sure to contact an accident attorney to get started on next steps.
                </p>
            </div>

            <!-- Q/4 -->
            <div id="q4" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4">How Much Is Your Case Worth?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">
                    This is one of our most frequently asked questions! However, it’s a hard question to answer without knowing the facts of your case.
                    <br><br>
                    When you hire a commercial vehicle accident attorney, they will consider the evidence to determine how much your case may be worth. The value of your claim dictates the damages, or compensation, you might claim. Damages are based on, for example, who was at fault, the severity of your injuries (such as brain injury, spinal cord injury, or other catastrophic injury), property damage, whether you’ve had time off work, and whether you have long-term care needs.
                    <br><br>
                    Generally, there are three types of damages in personal injury claims:
                </p>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Noneconomic Damages</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">What are Non-economic Damages? Non-economic damages include the following losses:</p>
                <div class="ml-6 mt-4 space-y-2">
                    <h2 class="font-bold">● Pain and suffering</h2>
                    <h2 class="font-bold">● Loss of quality of life</h2>
                    <h2 class="font-bold">● Emotional distress</h2>
                    <h2 class="font-bold">● And more</h2>
                </div>

                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3 leading-[38px]">Monetary, Or Economic Damages</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">What are economic damages? Economic damages include the following losses:</p>
                <div class="ml-6 mt-4 space-y-2">
                    <h2 class="font-bold">● Lost wages</h2>
                    <h2 class="font-bold">● Loss of future earning capacity</h2>
                    <h2 class="font-bold">● Property loss</h2>
                    <h2 class="font-bold">● Past and future medical expenses</h2>
                </div>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Punitive Damages</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">What are punitive damages? Punitive damages are somewhat different. They are meant to punish defendants who engaged in particularly problematic, malicious behavior (i.e., drunk driving, road rage accidents, etc.) — and are only available in limited cases.
                    <br><br>
                    Punitive damages are worth claiming where possible, however, as they multiply the baseline damages, leading to damage totals that can tally up into millions. An experienced commercial vehicle accident lawyer can explain if you’re entitled to punitive damages.
                </p>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3 leading-[38px]">Working With An Accident Lawyer As Soon As Possible</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">If you've been in a commercial vehicle accident, it's crucial to hire a commercial vehicle accident lawyer as quickly as possible. This is not just about moving on with your life; there are practical, legal reasons for acting fast.</p>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Accident Case Investigation</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">AAttorneys engage significant resources towards investigating the case. They identify witnesses, work to gather all relevant evidence (i.e., photographic and video evidence from nearby security cameras, medical records, police records, employment records, certifications, truck accident scene investigation reports, etc.), and evaluate potential legal arguments that could win the case for the plaintiff.
                    <br><br>
                </p>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Preventing Problematic Disclosures</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">As the plaintiff, the success of your case could be dramatically influenced by your own fault contribution. In other words, if you are partly responsible for your own injuries, then you could have your damages reduced. In some cases, a recovery may not be available at all. Examples may include:</p>
                <div class="ml-6 mt-4 space-y-2">
                    <h2 class="font-bold">
                        ● If you were speeding at the time of the crash or collision, or
                    </h2>
                    <h2 class="font-bold">
                        ● If you failed to wear a seatbelt when you were hurt or when the injuries happened.
                    </h2>
                </div>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">To minimize the likelihood of this occurrence, your injury attorney will serve as your communication middleman. They will speak with opposing counsel and with insurance companies or adjusters on your behalf. This, in turn, protects you from admitting certain facts that could undermine your accident case.</p>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Statute of Limitation Issues</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">All personal injury disputes, including truck accidents, bus accidents, and other commercial vehicle accidents, are governed by applicable statutes of limitations. The statute of limitations is essentially a deadline. If you do not file your claim by the deadline, then you will no longer have a right to bring a lawsuit against the defendant. Simply put, a failure to act within a reasonable time period can prevent you from securing compensation.</p>
            </div>

            <!-- Q/5 -->
            <div id="q5" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4 leading-[38px]">Do I Need A Lawyer For Commercial Vehicle Accidents?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">
                    While you can try to handle a commercial vehicle accident dispute on your own, it is strongly discouraged. As a victim, you are up against a system that is not on your side. Defendants can be hostile, and even if they are “friendly” they are unlikely to give you exactly what you want. Insurance companies and insurance adjusters are not your allies. If you try to secure an insurance payout, you’ll find:
                </p>
                <div class="ml-6 mt-4 space-y-2">
                    <h2 class="font-bold">
                        ● That they outright reject your claim for damages, or
                    </h2>
                    <h2 class="font-bold">
                        ● That they undermine your accident claim and try to pay you as little as possible.
                    </h2>
                </div>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">That’s where your commercial vehicle accident attorney comes in. They will handle the case from start-to-finish and advocate relentlessly on your behalf, all to secure maximum possible compensation</p>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Finding The Right Attorney</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">So you know that you need a commercial vehicle accident lawyer, but how do you find the right commercial vehicle accident attorney to fit your needs? Here are some key tips to make the best decision possible:</p>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Ask For An Attorney</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">It can be difficult to assess the quality of an attorney from a cursory search online. Look for an experienced commercial vehicle accident lawyer with a strong reputation.</p>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Understand The Fee Structure</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">Always confirm the attorney's fee structure. As discussed earlier, most commercial vehicle accident lawyers work on a contingency basis, meaning they charge no upfront fee and get a percentage of the damages when you win your case. Before you sign anything, be sure that you have a complete understanding of “when” you have to pay and what that fee is based on. Commercial vehicle accident attorneys may work with different contingency fee percentages, so be sure that you’re comfortable with the amount before moving forward with that attorney.</p>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Experience Matters</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">Though experience isn’t the only predictor of quality representation, it is meaningful. An experienced commercial vehicle accident attorney has litigated many cases and has seen “patterns” in litigation. This gives them unique insights into how best to proceed with your case to maximize compensation and avoid a negative outcome. We encourage you to work with commercial vehicle accident attorneys who have helped clients navigate a variety of accident scenarios, including truck vs motorcycle accident or multi car truck accident.</p>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Go Through A Free Consultation</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">Most personal injury and commercial vehicle accident lawyers offer free advice or consultation. At this time, they gather more information through a phone call or online about your case and help identify strategic options. If a commercial vehicle accident lawyer wants money up front for a legal consultation, they are probably not the best candidate. It is important to evaluate whether you feel comfortable with an attorney. Consider: are your personalities compatible in the working context? If they are, you will enjoy a smoother process for your commercial vehicle accident claim or case, which can help to deal with an otherwise stressful experience.</p>
                
            </div>

            <!-- Q/6 -->
            <div id="q6" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4 leading-[38px]">Should I Look For A Large Or A Small Firm?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">
                    Oftentimes, the general public assumes that larger firms are “better” than smaller firms. That simply isn’t true. It’s important not to jump to conclusions. At larger firms, a commercial vehicle accident or personal injury case can get lost in the shuffle. It may not get the attention it deserves. By contrast, there are many small-to-medium-sized firms out there that do an excellent job in representing commercial vehicle accident victims.
                </p>
            </div>

            <!-- Q/7 -->
            <div id="q7" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold mb-4 leading-[38px]">What If My Case Seems Too Small For An Attorney To Take?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">
                   Even if you believe your case is minor, you should still contact a commercial vehicle accident lawyer. They can assess the evidence and determine if there’s a viable path to compensation. Since most attorneys for commercial vehicle accidents are paid a percentage, some won’t accept cases where the settlement amount is relatively small. Every commercial vehicle accident attorney has overhead costs, after all, and they may feel that the investment is not enough to make the case worthwhile.
                   <br><br>
                   Fortunately, most cases can be “worked” up to a reasonable level. If a commercial vehicle accident attorney is unwilling to do that, you may want to explore hiring a different commercial vehicle accident lawyer.
                </p>
            </div>

            <!-- Q/8 -->
            <div id="q8" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4 leading-[38px]">What Should I Bring To My First Meeting With A Commercial Vehicle Accident Lawyer?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">
                    The first sit-down meeting with your commercial vehicle accident attorney is important. Create a folder with copies of all documents that you have on-hand relating to the case. This may include police reports, accident descriptions, photos and videos, paycheck stubs, medical bills, and medical records. Be sure to also include any communications that you may have already had with your insurance company. Documents should be organized so that the commercial vehicle accident attorney doesn’t have to shuffle needlessly through materials.
                </p>
            </div>

            <!-- Q/9 -->
            <div id="q9" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4">How Do I Know My Commercial Vehicle Accident Lawyer Will Approach My Case In The Right Way?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">It is perfectly acceptable—and encouraged—to ask your commercial vehicle accident lawyer how they plan on securing maximum compensation in your case. Commercial vehicle accident lawyers can estimate what your case is worth based on, for example, your injuries and medical bills. They will explain what they think is the best strategy for securing compensation for your commercial vehicle accident. You can ask questions or request that they approach things differently. After all, commercial vehicle accident lawyers are here to serve you. Here’s an example. If you don’t want to go to trial, you can ask your attorney to accept a settlement offer for you instead.</p>
            </div>

            <!-- Q/10 -->
             <div id="q10" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4 leading-[38px]">Should I Get A Lawyer For A Commercial Vehicle Accident?ow Do I Know My Commercial Vehicle Accident Lawyer Will Approach My Case In The Right Way?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">Yes, it is absolutely critical that you hire a lawyer. Without one, you risk unintentionally damaging your case with a simple statement to an insurance adjuster. An experienced commercial vehicle accident attorney removes the stress of filing a lawsuit. The best commercial vehicle accident lawyer will:</p>

                 <div class="ml-6 mt-4 space-y-2">
                    <h2 class="font-bold">
                      ●	Fully investigate your case
                    </h2>
                    <h2 class="font-bold">
                       ●	Gather all the evidence they can to support your injury claim
                    </h2>
                    <h2 class="font-bold">
                        ●	Advocate on your behalf
                    </h2>
                    <h2 class="font-bold">
                        ●	Negotiate for a fair settlement
                    </h2>
                    <h2 class="font-bold">
                        ●	Take your commercial vehicle accident case to trial if this is in your best interests
                    </h2>
                </div>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">By hiring a lawyer, you can confidently focus on moving forward without worrying about legal matters.</p>
            </div>
        </div>
        <!-- FAQ's Sidebar - Sticky on large screens -->
        <div class="bg-gray-300 flex md:w-[48%] flex-col gap-5 py-5 px-4 w-full  lg:sticky lg:top-0 md:sticky md:top-0 md:h-[100vh] lg:h-[100vh] lg:overflow-y-auto" id="faq-sidebar">
            <div class="my-5">
                <h2 class=" text-3xl lg:text-[40px] font-semibold">
                    Explore This Page
                </h2>
                <div class="h-[3px] w-full lg:w-[310px] bg-black"></div>
            </div>

            <!-- FAQ QUESTION links -->
            <div class="flex flex-col gap-1">

                <!-- Q/1 -->
                <div class="flex justify-start items-center gap-2 faq-link" data-target="q1">
                    <img src="../images/right-icon.png" alt="" class="transition-transform duration-200 w-4 h-4 invert">
                    <a href="#q1" class=" text-base lg:text-lg hover:font-bold  transition-colors">Is It Worth Hiring A Commercial Vehicle Accident Lawyer?</a>
                </div>

                <!-- Q/2 -->
                <div class="flex justify-start items-center gap-2 faq-link" data-target="q2">
                    <img src="../images/right-icon.png" alt="" class="transition-transform duration-200 w-4 h-4 invert">
                    <a href="#q2" class=" text-base lg:text-lg hover:font-bold  transition-colors">How Does A Commercial Vehicle Accident Lawyer Help?</a>
                </div>

                <!-- Q/3 -->
                <div class="flex justify-start items-center gap-2 faq-link" data-target="q3">
                    <img src="../images/right-icon.png" alt="" class="transition-transform duration-200 w-4 h-4 invert">
                    <a href="#q3" class=" text-base lg:text-lg hover:font-bold  transition-colors">How Much Does A Commercial Vehicle Accident Lawyer Cost?</a>
                </div>

                <!-- Q/4 -->
                <div class="flex justify-start items-center gap-2 faq-link" data-target="q4">
                    <img src="../images/right-icon.png" alt="" class="transition-transform duration-200 w-4 h-4 invert">
                    <a href="#q4" class=" text-base lg:text-lg hover:font-bold  transition-colors">How Much Is Your Case Worth?</a>
                </div>

                <!-- Q/5 -->
                <div class="flex justify-start items-center gap-2 faq-link" data-target="q5">
                    <img src="../images/right-icon.png" alt="" class="transition-transform duration-200 w-4 h-4 invert">
                    <a href="#q5" class=" text-base lg:text-lg hover:font-bold  transition-colors">Do I Need A Lawyer For Commercial Vehicle Accidents?</a>
                </div>

                <!-- Q/6 -->
                <div class="flex justify-start items-center gap-2 faq-link" data-target="q6">
                    <img src="../images/right-icon.png" alt="" class="transition-transform duration-200 w-4 h-4 invert">
                    <a href="#q6" class=" text-base lg:text-lg hover:font-bold  transition-colors">Should I Look For A Large Or A Small Firm?</a>
                </div>

                <!-- Q/7 -->
                <div class="flex justify-start items-center gap-2 faq-link" data-target="q7">
                    <img src="../images/right-icon.png" alt="" class="transition-transform duration-200 w-4 h-4 invert">
                    <a href="#q7" class=" text-base lg:text-lg hover:font-bold  transition-colors">What If My Case Seems Too Small For An Attorney To Take?</a>
                </div>

                <!-- Q/8 -->
                <div class="flex justify-start items-center gap-2 faq-link" data-target="q8">
                    <img src="../images/right-icon.png" alt="" class="transition-transform duration-200 w-4 h-4 invert">
                    <a href="#q8" class=" text-base lg:text-lg hover:font-bold transition-colors">What Should I Bring To My First Meeting With A Commercial Vehicle Accident Lawyer?</a>
                </div>

                <!-- Q/9 -->
                <div class="flex justify-start items-center gap-2 faq-link" data-target="q9">
                    <img src="../images/right-icon.png" alt="" class="transition-transform duration-200 w-4 h-4 invert">
                    <a href="#q9" class=" text-base lg:text-lg hover:font-bold transition-colors">How Do I Know My Commercial Vehicle Accident Lawyer Will Approach My Case In The Right Way?</a>
                </div>

                <!-- Q/10 -->
                <div class="flex justify-start items-center gap-2 faq-link" data-target="q10">
                    <img src="../images/right-icon.png" alt="" class="transition-transform duration-200 w-4 h-4 invert">
                    <a href="#q10" class=" text-base lg:text-lg hover:font-bold transition-colors">Should I Get A Lawyer For A Commercial Vehicle Accident?</a>
                </div>

            </div>
        </div>

    </div>




    </div>






    <!-- <div class="bg-gray-100 py-12">
    <div class="max-w-5xl mx-auto grid md:grid-cols-2 grid-cols-1 rounded-lg overflow-hidden">
      <div>
        <img src="../images/1.jpg" class="h-[300px] w-full object-cover" alt="">
      </div>
      <div>
        <img src="../images/2.jpg" class="h-[300px] w-full object-cover" alt="">
      </div>
      <div>
        <img src="../images/3.jpg" class="h-[300px] w-full object-cover" alt="">
      </div>
      <div>
        <img src="../images/4.jpg" class="h-[300px] w-full object-cover" alt="">
      </div>
    </div>
  </div> -->




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
                    <img src="../images/advertising.png" class="h-6" alt=""></a>
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