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
        <div class="pt-14 max-w-7xl mx-auto">
            <h2 class="text-white text-center relative z-10 font-semibold lg:text-[62px] sm:text-xl lg:pr-10 pr-0 ">
                COMMERCIAL ACCIDENT ATTORNEYS
            </h2>
        </div>

        <!-- Content Section -->
        <div class="max-w-6xl mx-auto px-4 py-10 z-50 flex flex-col-reverse lg:flex-row         items-center lg:items-center justify-between gap-8 lg:pl-10 pl-0">
            <!-- Left Content Box -->
            <div class="bg-white/80 py-11 px-6 shadow-lg z-20 border border-gray-200 rounded-md md:min-h-[500px] w-full lg:w-1/2">
                <div class="text-center">
                    <!-- Heading -->
                    <h2 class="text-[24px] sm:text-[34px]  font-bold text-[#00446A] leading-snug mb-4">
                        How A Commercial Vehicle<br /> Accident?
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
        <div class="w-full md:w-[52%] md:ml-40 space-y-8" id="faq-content">
            <!-- Q/1 -->
            <div id="q1" class="section-item bg-white p-2 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4">Is It Worth Hiring A Commercial Vehicle Accident Lawyer?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">
                    Yes, hiring a commercial vehicle accident lawyer is a crucial step after a crash. While many cases settle before trial, an experienced attorney plays a pivotal role in negotiating with insurance companies and large corporations to secure the maximum possible compensation. They also have the expertise to take your case to trial if that becomes the best path to justice. Most importantly, a lawyer understands the complexities of personal injury law and can leverage all available evidence to build the strongest possible case on your behalf.
                </p>
            </div>

            <!-- Q/2 -->
            <div id="q2" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4">How Does A Commercial Vehicle Accident Lawyer Help?</h2>
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
                <h3 class="text-xl lg:text-[25px] font-semibold  mb-3">Contingency Fee Arrangements And Free Consultations</h3>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">
                    You may be concerned about the cost of hiring a lawyer, but it's important to know that most commercial vehicle accident attorneys work on a contingency basis. This means you pay nothing unless and until they successfully win your case and you obtain compensation. There are no upfront fees. Your attorney will cover all out-of-pocket expenses, such as the costs of litigation and working with expert witnesses and investigators.
                    <br><br>
                    This fee structure is highly advantageous to you. It eliminates financial risk and incentivizes your attorney to work efficiently to maximize your recovery. The more they secure for you, the more they get paid, creating a win-win situation.
                    <br><br>
                    Additionally, most commercial vehicle accident attorneys provide free consultations. This allows you to discuss your case and understand your legal options without any obligation. It’s a vital first step with no barrier to entry.
                </p>
            </div>

            <!-- Q/4 -->
            <div id="q4" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4">How Much Is Your Case Worth?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">
                    his is one of the most common questions we receive, and it’s a difficult one to answer without knowing the specific details of your case. The value of your claim is determined by a comprehensive review of the evidence, including who was at fault, the severity of your injuries, property damage, time off work, and long-term care needs.
                    Generally, there are three types of damages in personal injury claims:
                </p>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Noneconomic Damages</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">Non-economic damages are meant to compensate for intangible losses. They include:</p>
                <div class="ml-6 mt-4 space-y-2">
                    <h2 class="font-bold">● Pain and suffering</h2>
                    <h2 class="font-bold">● Loss of quality of life</h2>
                    <h2 class="font-bold">● Emotional distress</h2>
                    <h2 class="font-bold">● And more</h2>
                </div>

                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Monetary, Or Economic Damages</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">Economic damages are for quantifiable financial losses. These include:</p>
                <div class="ml-6 mt-4 space-y-2">
                    <h2 class="font-bold">●	Lost wages</h2>
                    <h2 class="font-bold">●	Loss of future earning capacity</h2>
                    <h2 class="font-bold">●	Property loss</h2>
                    <h2 class="font-bold">●	Past and future medical expenses</h2>
                </div>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3"> Punitive Damages</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">Punitive damages are distinct. They are awarded in limited cases to punish defendants for particularly malicious or reckless behavior (such as drunk driving) and to deter others from similar actions. These damages can significantly increase the total value of a claim, potentially into millions of dollars. An experienced lawyer can determine if you are entitled to punitive damages.</p>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Working With An Accident Lawyer As Soon As Possible</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">If you've been in a commercial vehicle accident, it's crucial to hire a lawyer as quickly as possible. This is not just about moving on with your life; there are practical, legal reasons for acting fast.</p>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Accident Case Investigation</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">Attorneys have the resources to immediately launch a thorough investigation. They will identify witnesses, gather photographic and video evidence, and collect all relevant records (medical, police, employment, etc.). A skilled commercial vehicle accident attorney ensures all necessary procedures are followed, from preserving the vehicle's "black box" data as evidence to helping you craft a victim impact statement.</p>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Preventing Problematic Disclosures</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">The success of your case can be undermined if you are found to be partially at fault for the accident. Your lawyer serves as a crucial communication middleman, speaking with opposing counsel and insurance companies on your behalf. This protects you from inadvertently making a statement that could jeopardize your claim and reduce your compensation.</p>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Statute of Limitation Issues</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">All personal injury claims are subject to a statute of limitations, which is a strict legal deadline. If you fail to file your claim within this timeframe, you lose your right to pursue a lawsuit. An attorney will be aware of all procedural deadlines and ensure your case is filed correctly and on time.</p>
            </div>

            <!-- Q/5 -->
            <div id="q5" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4">Do I Need A Lawyer For Commercial Vehicle Accidents?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">
                    While you can try to handle a commercial vehicle accident dispute on your own, it is strongly discouraged. As a victim, you are up against a system that is not on your side. Defendants can be hostile, and insurance companies will often outright reject your claim or offer a minimal settlement. A commercial vehicle accident attorney is your advocate, handling your case from start to finish and fighting relentlessly to secure the maximum compensation you deserve.
                </p>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Finding The Right Attorney</h2>
                <p  class="text-base lg:text-md leading-relaxed lg:leading-[30px]">Knowing you need a lawyer is one thing; finding the right one is another. Here are some key tips for making the best decision:</p>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Ask for an attorney</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">It can be challenging to assess an attorney's quality from a simple online search. Look for an experienced attorney with a strong reputation.</p>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Understand the fee structure</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">Always confirm the attorney's fee structure. As mentioned, most work on a contingency basis, so you should have a clear understanding of the percentage they will take from your final recovery before moving forward.</p>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Experience matters</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">Experience is a meaningful predictor of quality representation. An attorney who has handled many cases has a unique insight into common patterns in litigation, which can help them navigate your case to a successful outcome and avoid pitfalls.</p>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Go through a free consultation</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">Take advantage of free consultations to get a feel for the attorney. This is your chance to gather information about your case and determine if their personality and approach are a good fit for you.</p>
                <h2 class="text-xl lg:text-[25px] font-semibold  mb-3">Choosing between a large firm or small firm of commercial vehicle accident lawyers</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">The assumption that larger firms are always better is not necessarily true. At a large firm, your case can sometimes get lost in the shuffle, while many smaller firms excel at providing personalized, focused attention to each client. The best choice depends on your specific needs, and we can connect you with an experienced commercial vehicle accident lawyer who is capable of handling claims like yours.</p>

            </div>

            <!-- Q/6 -->
            <div id="q6" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4">What If My Case Seems Too Small For An Attorney To Take?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">
                   Even if you believe your case is minor, you should still contact a commercial vehicle accident lawyer. They can assess the evidence and determine if there’s a viable path to compensation. While some attorneys may decline cases with small settlement potential due to overhead costs, many will still work to “build up” the value of the case to a reasonable level. If an attorney is unwilling to do that, you may want to explore hiring a different one.
                </p>
            </div>

            <!-- Q/7 -->
            <div id="q7" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold mb-4">What Should I Bring To My First Meeting With A Commercial Vehicle Accident Lawyer?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">
                    A well-prepared first meeting is a great way to start your case. You should create a folder with copies of all documents related to your case, including:
                </p>
                <div class="ml-6 mt-4 space-y-2">
                    <p class="font-bold">●	Police reports</p>
                    <p class="font-bold">●	Accident descriptions</p>
                    <p class="font-bold">●  Photos and videos of the scene</p>
                    <p class="font-bold">●	Paycheck stubs to document wage loss</p>
                    <p class="font-bold">●	Medical bills and records</p>
                    <p class="font-bold">●	Any communications you've had with your insurance company</p>
                </div>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px] mt-4">
                    Organizing these documents beforehand will make the meeting more efficient and productive.
                </p>
            </div>

            <!-- Q/8 -->
            <div id="q8" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4">How Do I Know My Commercial Vehicle Accident Lawyer Will Approach My Case In The Right Way?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">
                    It is perfectly acceptable—and encouraged—to ask your lawyer about their strategic plan for your case. They should be able to
                </p>
                <div class="ml-6 mt-4 space-y-2">
                    <p class="font-bold">●	Estimate what your case is worth based on your injuries and other damages.</p>
                    <p class="font-bold">●	Explain their strategy for securing compensation for your commercial vehicle accident.</p>
                </div>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px] mt-4">
                   Remember, your lawyer is here to serve you. You have the right to ask questions and request that they approach things differently, such as negotiating a settlement rather than going to trial.
                </p>
            </div>

            <div id="q9" class="section-item bg-white p-6 rounded-lg shadow-sm">
                       <h2 class="text-2xl lg:text-[35px] font-bold  mb-4">Should I Get A Lawyer For A Commercial Vehicle Accident?</h2>
                       <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]" >Yes, it is absolutely critical that you hire a lawyer. Without one, you risk unintentionally damaging your case with a simple statement to an insurance adjuster. An experienced commercial vehicle accident attorney removes the stress of the legal process and will:</p>

                       <div  class="ml-6 mt-4 space-y-2">
                        <p class="font-bold">●	Gather all evidence to support your injury claim</p>
                        <p class="font-bold">●	Fully investigate your case</p>
                        <p class="font-bold">●	Advocate on your behalf</p>
                        <p class="font-bold">●	Negotiate for a fair settlement</p>
                        <p class="font-bold">●	Take your case to trial if necessary</p>
                        <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">By hiring a lawyer, you can confidently focus on moving forward with your life while they handle all the legal matters.</p>
                       </div>
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
                <div class="flex justify-start items-center gap-2 faq-link" data-target="q1">
                    <img src="../images/right-icon.png" alt="" class="transition-transform duration-200 w-4 h-4 invert">
                    <a href="#q1" class=" text-base lg:text-lg hover:font-bold  transition-colors">Is It Worth Hiring A Commercial Vehicle Accident Lawyer?</a>
                </div>

                <div class="flex justify-start items-center gap-2 faq-link" data-target="q2">
                    <img src="../images/right-icon.png" alt="" class="transition-transform duration-200 w-4 h-4 invert">
                    <a href="#q2" class=" text-base lg:text-lg hover:font-bold  transition-colors">How Does A Commercial Vehicle Accident Lawyer Help?</a>
                </div>

                <div class="flex justify-start items-center gap-2 faq-link" data-target="q3">
                    <img src="../images/right-icon.png" alt="" class="transition-transform duration-200 w-4 h-4 invert">
                    <a href="#q3" class=" text-base lg:text-lg hover:font-bold  transition-colors">How Much Does A Commercial Vehicle Accident Lawyer Cost?</a>
                </div>

                <div class="flex justify-start items-center gap-2 faq-link" data-target="q4">
                    <img src="../images/right-icon.png" alt="" class="transition-transform duration-200 w-4 h-4 invert">
                    <a href="#q4" class=" text-base lg:text-lg hover:font-bold  transition-colors">How Much Is Your Case Worth?</a>
                </div>

                <div class="flex justify-start items-center gap-2 faq-link" data-target="q5">
                    <img src="../images/right-icon.png" alt="" class="transition-transform duration-200 w-4 h-4 invert">
                    <a href="#q5" class=" text-base lg:text-lg hover:font-bold  transition-colors">Do I Need A Lawyer For Commercial Vehicle Accidents?</a>
                </div>

                <div class="flex justify-start items-center gap-2 faq-link" data-target="q6">
                    <img src="../images/right-icon.png" alt="" class="transition-transform duration-200 w-4 h-4 invert">
                    <a href="#q6" class=" text-base lg:text-lg hover:font-bold  transition-colors">What If My Case Seems Too Small For An Attorney To Take?</a>
                </div>

                <div class="flex justify-start items-center gap-2 faq-link" data-target="q7">
                    <img src="../images/right-icon.png" alt="" class="transition-transform duration-200 w-4 h-4 invert">
                    <a href="#q7" class=" text-base lg:text-lg hover:font-bold  transition-colors">What Should I Bring To My First Meeting With A Commercial Vehicle Accident Lawyer?</a>
                </div>

                <div class="flex justify-start items-center gap-2 faq-link" data-target="q8">
                    <img src="../images/right-icon.png" alt="" class="transition-transform duration-200 w-4 h-4 invert">
                    <a href="#q8" class=" text-base lg:text-lg hover:font-bold transition-colors">How Do I Know My Commercial Vehicle Accident Lawyer Will Approach My Case In The Right Way?</a>
                </div>

                <div class="flex justify-start items-center gap-2 faq-link" data-target="q9">
                    <img src="../images/right-icon.png" alt="" class="transition-transform duration-200 w-4 h-4 invert">
                    <a href="#q9" class=" text-base lg:text-lg hover:font-bold transition-colors">Should I Get A Lawyer For A Commercial Vehicle Accident?</a>
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