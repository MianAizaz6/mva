<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Location Page</title>

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
    <title>InfiniteQuotesHub - Locations</title>

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

<body class="relative">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PG83ZZP2"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- HEADER -->
    <div class="w-screen border-b border-gray-200">
        <header class="py-2 md:px-0 px-4 max-w-7xl mx-auto bg-white flex items-center justify-between  relative z-20">
            <div class="flex items-center gap-3">
                <a href="https://infinitequotehub.com/">
                    <img src="./images/logo.png" alt="Infinite Quote Hub Logo" class="w-28 ml-3" />
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
                <img src="./images/logo.png" alt="Infinite Quote Hub Logo" class="w-28 ml-3" />
            </a>
            <button id="menu-close" class="absolute top-4 right-4 text-gray-700 focus:outline-none lg:hidden">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <div class="flex flex-col gap-4 pt-8">
                <div class="flex flex-col gap-2 mt-3 text-center">
                    <a href="./car_accident/index.php" class="text-black font-medium text-[17px]">HOME</a>
                    <a href="../practice_area.php" class="text-gray-700 font-medium text-[17px]">PRACTICE AREAS</a>
                    <a href="./location.php" class="text-gray-700 font-medium text-[17px]">LOCATIONS</a>
                    <a href="../about.php" class="text-gray-700 font-medium text-[17px]">ABOUT US</a>
                    <a href="../contact.php" class="text-gray-700 font-medium text-[17px]">CONTACT US</a>
                </div>
                <a href="tel:8336152933" class="bg-gray-800 text-white px-6 py-3 rounded-md font-semibold text-sm shadow-md text-center">CALL 24/7</a>
                <a href="tel:833-615-2933" class="bg-green-700 text-white font-semibold uppercase px-6 py-3 rounded-md text-center">(833) 615 2933</a>
                <a href="#form" class="bg-gray-800 text-white px-6 py-3 rounded-md font-semibold text-sm shadow-md text-center">SCHEDULE A FREE CONSULTATION</a>
            </div>
        </div>
    </div>

    <!-- Desktop top navigation inside section -->
    <div class="hidden lg:flex justify-end gap-6 md:max-w-7xl lg:max-w-7xl mx-auto py-3 ">
        <a href="./car_accident/index.php" class="text-black font-medium text-[17px]">HOME</a>
        <a href="./practice_area.php" class="text-black font-medium text-[17px]">PRACTICE AREAS</a>
        <a href="./location.php" class="text-black font-medium text-[17px]">LOCATIONS</a>
        <a href="./about.php" class="text-black font-medium text-[17px]">ABOUT US</a>
        <a href="./contact.php" class="text-black font-medium text-[17px]">CONTACT US</a>
    </div>


    <h2 class="text-4xl font-bold text-center mb-12 uppercase tracking-wide">LOCATIONS</h2>



    <div class="max-w-4xl mx-auto">
        <img src="./images/location.jpeg" alt="" class="mx-auto">
    </div>

    <div class="max-w-2xl w-full mx-auto mt-10">
        <h2 class="text-[30px] font-semibold text-center ">Our network of over 350+ law firms covers the entire country. </h2>
    </div>


    <!-- <div class="bg-[#eaeaea]  mt-10">

        <div class="max-w-2xl w-full mx-auto">

            <h2 class="text-[30px] font-semibold text-center py-7 ">Our team of attorneys want to hear from you.
            </h2>
            <p class="text-center px-3 lg:px-0">If you’ve been injured in a car accident, motorcycle accident, truck accident, bicycle accident or an innocent pedestrian hit by a motor vehicle, contact our team today!</p>

            <div class="flex justify-center items-center my-5 pb-5">
                <a href="">
                    <button class="px-6 py-1 text-[20px] font-semibold border-2 bg-green-500 text-white rounded-full">Book Now</button>
                </a>
            </div>
        </div>
    </div> -->




    <!-- Footer -->
    <section class="bg-gray-800 py-3 mt-10">
        <p class="text-[12px] text-white text-gray-700  text-center">This website is for informational purposes only and does not constitute legal advice. Contacting us does not establish an attorney-client relationship.</p>
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