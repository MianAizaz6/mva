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
                    faqSidebar.classList.remove('lg:sticky', 'lg:top-5', 'lg:h-[90vh]');
                    faqSidebar.classList.add('max-h-[60vh]', 'overflow-y-auto');
                } else {
                    // For larger screens, maintain sticky behavior
                    faqSidebar.classList.add('lg:sticky', 'lg:top-5', 'lg:h-[90vh]');
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


    <div id="contact" class="relative bg-cover bg-center bg-no-repeat min-h-screen " style="background-image: url('./images/car\ accident.jpg');">
        <div class="bg-black/60 w-full h-full absolute inset-0 z-0"></div>

        <div>
            <h2 class="text-white relative z-10 font-semibold text-center lg:text-[77px] sm:text-xl pt-10 ">
                CAR ACCIDENT ATTORNEYS
            </h2>
        </div>
        <div class="flex items-center justify-center">

            <div class="relative z-10 w-full max-w-7xl md:mt-0  mx-auto px-4 py-16 flex flex-col-reverse lg:flex-row items-center justify-center lg:gap-[100px] ">
                <!-- Left Content -->
                <div class="text-center lg:text-left text-white max-w-xl">
                    <h2 class="text-3xl sm:text-4xl font-semibold leading-tight mb-4">
                        Is It Worth Hiring A Car Accident Lawyer?
                    </h2>
                    <!-- <p class="text-base sm:text-lg text-gray-200">
                           Fill out the form and our team will contact you shortly.
                         </p> -->

                    <p class="text-white">Yes, hiring a car accident lawyer is a crucial step after a crash. While many cases settle before trial, an experienced attorney plays a pivotal role in negotiating with insurance companies to secure the maximum possible compensation. They also have the expertise to take your case to trial if that becomes the best path to justice. Most importantly, a lawyer understands the complexities of personal injury law and can leverage all available evidence to build the strongest possible case on your behalf.</p>
                </div>

                <div>
                    <img src="./images/hero men.jpg" alt="" class="rounded-sm w-[200px] h-[300px]">
                </div>

            </div>

        </div>
    </div>

    <div class="relative lg:absolute lg:top-[600px] mx-auto  px-4 w-full max-w-7xl">
        <div class="flex flex-col lg:flex-row gap-6 lg:gap-10">
            <!-- Cards Container - Now comes first in DOM -->
            <div class="flex flex-col sm:flex-row gap-6 w-full lg:w-auto">
                <!-- Card 1 -->
                <div class="w-full sm:w-[200px] h-[250px] bg-gray-200 flex flex-col rounded-md">
                    <div class="px-2 mt-6">
                        <h2 class="font-bold text-[18px] text-center">Local Attorneys National Network</h2>
                        <p class="text-[10px] text-center mt-2">We will find you the best local attorney for your case.</p>
                    </div>
                    <div class="flex flex-grow justify-center items-center">
                        <img src="./images/card 1.png" alt="" class="w-[120px] h-[120px] object-contain">
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="w-full sm:w-[200px] h-[250px] bg-gray-200 flex flex-col rounded-md">
                    <div class="px-2 mt-6">
                        <h2 class="font-bold text-[18px] text-center">No Win, No Fee</h2>
                        <p class="text-[10px] text-center mt-2">If we don't win your case, there is no fee to you.</p>
                    </div>
                    <div class="flex flex-grow justify-center items-center">
                        <img src="./images/card 2.png" alt="" class="w-[100px] h-[100px] object-contain">
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="w-full sm:w-[200px] h-[250px] bg-gray-200 flex flex-col rounded-md">
                    <div class="px-2 mt-6">
                        <h2 class="font-bold text-[18px] text-center">Experienced Team</h2>
                        <p class="text-[10px] text-center mt-2">For over 35+ years, we have helped thousands of people get the compensation they deserve.</p>
                    </div>
                    <div class="flex flex-grow justify-center items-center">
                        <img src="./images/truck.png" alt="" class="w-[100px] h-[100px] object-contain">
                    </div>
                </div>
            </div>
            <!-- Form Container -->
            <div class="w-full lg:max-w-xl bg-white p-6 rounded-md shadow-lg min-h-[600px]">
                <div class="w-full h-full flex items-center justify-center">
                    <div class="w-full">
                        <h2 class="text-xl lg:text-2xl font-semibold text-center text-black mb-4">Get Free Consultation now Available 24/7</h2>

                        <form action="index.php" method="POST" class="space-y-3">
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
                                    <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                                    <select id="state" name="state" class="w-full px-4 py-3 border rounded text-sm" required>
                                        <option value="" disabled selected>Select your state</option>
                                        <!-- State options remain the same -->
                                    </select>
                                    <p class="text-red-500 text-xs mt-1 hidden" id="stateError">Please select your state.</p>
                                </div>

                                <!-- Zip -->
                                <div>
                                    <label for="zip" class="block text-sm font-medium text-gray-700">Zip</label>
                                    <input type="text" id="zip" name="zip" placeholder="Enter your zip code" class="w-full px-4 py-3 border rounded text-sm" required>
                                    <p class="text-red-500 text-xs mt-1 hidden" id="zipError">Zip code must be exactly 5 digits.</p>
                                </div>
                            </div>

                            <input id="leadid_token" name="universal_leadid" type="hidden" value="" />

                            <div class="pt-3">
                                <p class="text-xs leading-tight">
                                    <input type="checkbox" id="leadid_tcpa_disclosure" required class="mr-2">
                                    By checking this box, I acknowledge that I have read and agree to the Terms and Conditions, CCPA, and Privacy Policy...
                                    <!-- Rest of your legal text -->
                                </p>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" name="finish" class="inline-block uppercase mt-4 bg-black text-white font-medium px-6 py-3 rounded-md hover:bg-gray-800 transition w-full sm:w-auto">
                                    SUBMIT
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- FAQS SECTIONS -->
    <div class="flex flex-col lg:flex-row justify-between items-start gap-8 px-4 py-8 max-w-7xl mx-auto lg:mt-[600px]">


        <!-- FAQ Content -->
        <div class="w-full lg:max-w-[700px] lg:ml-10 space-y-8" id="faq-content">
            <!-- Q/1 -->
            <div id="q1" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4">Is It Worth Hiring A Car Accident Lawyer?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">
                    Yes, hiring a car accident lawyer is a crucial step after a crash. While many cases settle before trial, an experienced attorney plays a pivotal role in negotiating with insurance companies to secure the maximum possible compensation. They also have the expertise to take your case to trial if that becomes the best path to justice. Most importantly, a lawyer understands the complexities of personal injury law and can leverage all available evidence to build the strongest possible case on your behalf.
                </p>
            </div>

            <!-- Q/2 -->
            <div id="q2" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4">How Does A Car Accident Lawyer Help?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">A lawyer handles all the legal complexities, allowing you to focus on your recovery. Their key responsibilities include:</p>
                <div class="ml-6 mt-4 space-y-2">
                    <p class="font-bold">● Investigating the facts of the case</p>
                    <p class="font-bold">● Gathering and preserving evidence for trial</p>
                    <p class="font-bold">● Serving as a "communication middleman"</p>
                    <p class="font-bold">● Identifying eyewitnesses</p>
                    <p class="font-bold">● Collaborating with expert witnesses</p>
                    <p class="font-bold">● Developing a comprehensive legal strategy</p>
                    <p class="font-bold">● Negotiating a potential settlement</p>
                    <p class="font-bold">● Reacting dynamically to changing circumstances</p>
                </div>

                <h3 class="text-xl lg:text-[25px] font-bold  mt-6">Compensation</h3>
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
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4">How Much Does A Car Accident Lawyer Cost?</h2>
                <h3 class="text-xl lg:text-[25px] font-semibold  mb-3">Contingency Fee Arrangements And Free Consultations</h3>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">
                    You may be concerned about the cost of hiring a lawyer, but it's important to know that most car accident attorneys work on a contingency basis. This means you pay nothing unless and until they successfully win your case and you obtain compensation. There are no upfront fees. Your attorney will cover all out-of-pocket expenses, such as the costs of litigation and working with expert witnesses and investigators.
                    <br><br>
                    This fee structure is highly advantageous to you. It eliminates financial risk and incentivizes your attorney to work efficiently to maximize your recovery. The more they secure for you, the more they get paid, creating a win-win situation.
                    <br><br>
                    Additionally, most car accident attorneys provide free consultations. This allows you to discuss your case and understand your legal options without any obligation. It's a vital first step with no barrier to entry.
                </p>
            </div>

            <!-- Q/4 -->
            <div id="q4" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4">Do I Need A Lawyer For Car Accidents?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">
                    While you can try to handle a car accident dispute on your own, it is strongly discouraged. As a victim, you are up against a system that is not on your side. Defendants can be hostile, and insurance companies will often outright reject your claim or offer a minimal settlement. An auto accident attorney is your advocate, handling your case from start to finish and fighting relentlessly to secure the maximum compensation you deserve.
                </p>
            </div>

            <!-- Q/5 -->
            <div id="q5" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4">What If My Case Seems Too Small For An Attorney To Take?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">
                    Even if you believe your case is minor, you should still contact a car accident lawyer. They can assess the evidence and determine if there's a viable path to compensation. While some attorneys may decline cases with small settlement potential due to overhead costs, many will still work to "build up" the value of the case to a reasonable level. If an attorney is unwilling to do so, it may be a sign to seek a different one.
                </p>
            </div>

            <!-- Q/6 -->
            <div id="q6" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4">What Should I Bring To My First Meeting With A Car Accident Lawyer?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">
                    A well-prepared first meeting is a great way to start your case. You should create a folder with copies of all documents related to your case, including:
                </p>
                <div class="ml-6 mt-4 space-y-2">
                    <p class="font-bold">● Police reports</p>
                    <p class="font-bold">● Accident descriptions</p>
                    <p class="font-bold">● Photos and videos of the scene</p>
                    <p class="font-bold">● Paycheck stubs to document wage loss</p>
                    <p class="font-bold">● Medical bills and records</p>
                    <p class="font-bold">● Any communications you've had with your insurance company</p>
                </div>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px] mt-4">
                    Organizing these documents beforehand will make the meeting more efficient and productive.
                </p>
            </div>

            <!-- Q/7 -->
            <div id="q7" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold text-[#00446A] mb-4">How Do I Know My Car Accident Lawyer Will Approach My Case In The Right Way?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">
                    It is perfectly acceptable—and encouraged—to ask your lawyer about their strategic plan for your case. They should be able to:
                </p>
                <div class="ml-6 mt-4 space-y-2">
                    <p class="font-bold">● Estimate what your case is worth based on your injuries and other damages.</p>
                    <p class="font-bold">● Explain their strategy for securing compensation for your car accident.</p>
                </div>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px] mt-4">
                    Remember, your lawyer is here to serve you. You have the right to ask questions and request that they approach things differently, such as negotiating a settlement rather than going to trial.
                </p>
            </div>

            <!-- Q/8 -->
            <div id="q8" class="section-item bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-2xl lg:text-[35px] font-bold  mb-4">Should I Get A Lawyer For A Car Accident?</h2>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px]">
                    Yes, it is absolutely critical that you hire a lawyer. Without one, you risk unintentionally damaging your case with a simple statement to an insurance adjuster. An experienced car accident attorney removes the stress of the legal process and will:
                </p>
                <div class="ml-6 mt-4 space-y-2">
                    <p class="font-bold">● Fully investigate your case</p>
                    <p class="font-bold">● Gather all evidence to support your injury claim</p>
                    <p class="font-bold">● Advocate on your behalf</p>
                    <p class="font-bold">● Negotiate for a fair settlement</p>
                    <p class="font-bold">● Take your case to trial if necessary</p>
                </div>
                <p class="text-base lg:text-md leading-relaxed lg:leading-[30px] mt-4">
                    By hiring a lawyer, you can confidently focus on moving forward with your life while they handle all the legal matters.
                </p>
            </div>
        </div>
        <!-- FAQ's Sidebar - Sticky on large screens -->
        <div class="bg-gray-300 flex flex-col gap-5 py-5 px-4 w-full lg:max-w-[350px] lg:sticky lg:top-5 lg:h-[90vh] lg:overflow-y-auto" id="faq-sidebar">
            <div class="my-5">
                <h2 class=" text-3xl lg:text-[40px] font-semibold">
                    Explore This Page
                </h2>
                <div class="h-[3px] w-full lg:w-[310px] bg-black"></div>
            </div>

            <!-- FAQ links -->
            <div class="flex flex-col gap-4">
                <div class="flex justify-start items-center gap-2 faq-link" data-target="q1">
                    <img src="./images/arrow (2).png" alt="" class="transition-transform duration-200 w-4 h-4">
                    <a href="#q1" class=" text-base lg:text-lg hover:font-bold  transition-colors">Is It Worth Hiring A Car Accident Lawyer?</a>
                </div>

                <div class="flex justify-start items-center gap-2 faq-link" data-target="q2">
                    <img src="./images/arrow (2).png" alt="" class="transition-transform duration-200 w-4 h-4">
                    <a href="#q2" class=" text-base lg:text-lg hover:font-bold  transition-colors">How Does A Car Accident Lawyer Help?</a>
                </div>

                <div class="flex justify-start items-center gap-2 faq-link" data-target="q3">
                    <img src="./images/arrow (2).png" alt="" class="transition-transform duration-200 w-4 h-4">
                    <a href="#q3" class=" text-base lg:text-lg hover:font-bold  transition-colors">How Much Does A Car Accident Lawyer Cost?</a>
                </div>

                <div class="flex justify-start items-center gap-2 faq-link" data-target="q4">
                    <img src="./images/arrow (2).png" alt="" class="transition-transform duration-200 w-4 h-4">
                    <a href="#q4" class=" text-base lg:text-lg hover:font-bold  transition-colors">Do I Need A Lawyer For Car Accidents?</a>
                </div>

                <div class="flex justify-start items-center gap-2 faq-link" data-target="q5">
                    <img src="./images/arrow (2).png" alt="" class="transition-transform duration-200 w-4 h-4">
                    <a href="#q5" class=" text-base lg:text-lg hover:font-bold  transition-colors">What If My Case Seems Too Small For An Attorney To Take?</a>
                </div>

                <div class="flex justify-start items-center gap-2 faq-link" data-target="q6">
                    <img src="./images/arrow (2).png" alt="" class="transition-transform duration-200 w-4 h-4">
                    <a href="#q6" class=" text-base lg:text-lg hover:font-bold  transition-colors">What Should I Bring To My First Meeting With A Car Accident Lawyer?</a>
                </div>

                <div class="flex justify-start items-center gap-2 faq-link" data-target="q7">
                    <img src="./images/arrow (2).png" alt="" class="transition-transform duration-200 w-4 h-4">
                    <a href="#q7" class=" text-base lg:text-lg hover:font-bold  transition-colors">How Do I Know My Car Accident Lawyer Will Approach My Case In The Right Way?</a>
                </div>

                <div class="flex justify-start items-center gap-2 faq-link" data-target="q8">
                    <img src="./images/arrow (2).png" alt="" class="transition-transform duration-200 w-4 h-4">
                    <a href="#q8" class=" text-base lg:text-lg hover:font-bold transition-colors">Should I Get A Lawyer For A Car Accident?</a>
                </div>
            </div>
        </div>

    </div>




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