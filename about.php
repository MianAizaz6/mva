<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About page</title>

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



    <!-- TOGGLE SCRIPT -->

</head>

<body class="font-sans text-[#000000] bg-white">

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
    <div id="mobile-wrapper" class="fixed inset-0 z-40 bg-black/50 backdrop-blur-sm scale-y-0       origin-top transition-all duration-300 ease-in-out lg:hidden">
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
    <div>
        <h2 class="text-center lg:text-[70px] text-[40px] font-bold mt-5 lg:mt-0">ABOUT US</h2>
    </div>
    <div class="relative bg-center bg-cover bg-no-repeat lg:h-[95vh] h-[50vh]" style="background-image: url('./images/aboout.avif');">
        <div class="hidden lg:flex justify-end gap-6 md:max-w-7xl lg:max-w-7xl mx-auto py-3 relative z-10">
            <a href="./practice_area.php" class="text-white font-medium text-[17px]">PRACTICE AREAS</a>
            <a href="./location.php" class="text-white font-medium text-[17px]">LOCATIONS</a>
            <a href="./about.php" class="text-white font-medium text-[17px]">ABOUT US</a>
            <a href="./contact.php" class="text-white font-medium text-[17px]">CONTACT US</a>
        </div>

        <div class="max-w-[700px] w-full absolute top-60 left-1/2 -translate-x-1/2">
            <h2 class="text-white text-center relative z-10 font-semibold lg:text-[26px] sm:text-xl">Partnered with over 350 law firms</h2>
            <h2 class="text-white text-center relative z-10 font-semibold lg:text-[26px] sm:text-xl py-10">Reaching millions of consumers seeking legal assistance</h2>
            <h2 class="text-white text-center relative z-10 font-semibold lg:text-[26px] sm:text-xl">Available 24/7</h2>
        </div>
    </div>

    <!-- ABOUT PARAGRAPH -->
    <div>
        <p class="text-black text-[30px] font-semibold lg:mx-10 mx-5 my-5">
            Our team is committed to making the law more accessible and improving case outcomes by connecting clients to our attorney network. Once you’re connected to a qualified attorney in our network, they will work closely with you to gather the facts, develop the case, and fight to secure compensation on your behalf.
        </p>
    </div>

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


    <div class="bg-black px-10 ">

        <div class="pt-5">
            <h2 class="text-white text-[26px] font-semibold">
                INTEGRITY:
            </h2>
            <p class="text-white text-[20px]">We believe that bringing a fair and honest outlook to every client relationship will help establish the best way to help set up better outcomes for consumers.
            </p>
        </div>

        <div class="my-5">
            <h2 class="text-white text-[26px] font-semibold ">
                TRUSTWORTHINESS:
            </h2>
            <p class="text-white text-[20px]">
                We believe that understanding the legal process while providing the human touch allows us to understand consumers' legal needs in a deeper way. For us, this is the best way to gain their trust upfront.
            </p>
        </div>


        <div>
            <h2 class="text-white text-[26px] font-semibold">
                ACCESSIBILITY:
            </h2>
            <p class="text-white text-[20px]">
                We believe that having a large vetted group of local attorney partners allows us to strategically use our attorney group to provide consumers with a fair way to connect with the right legal representation to make them feel more comfortable and confident.
            </p>
        </div>


        <div class="my-5">
            <h2 class="text-white text-[26px] font-semibold">
                EXPERTISE:
            </h2>
            <p class="text-white text-[20px]">
                We believe that connecting consumers to highly knowledgeable, skilled, and proven attorneys from our network can help overcome consumer’s more skeptical views towards legal outcomes.
            </p>
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

</body>

</html>