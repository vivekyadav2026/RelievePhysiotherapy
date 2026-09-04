<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relieve Physiotherapy | Expert Care in Gurgaon</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Swiper CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="images/logo.jpg?v=<?php echo time(); ?>">
    <link rel="shortcut icon" type="image/jpeg" href="images/logo.jpg?v=<?php echo time(); ?>">
    <!-- Google Fonts for a professional look similar to the image -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom Style CSS with Cache Busting -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0284c7',
                            600: '#0369a1',
                            700: '#075985',
                            800: '#0c4a6e',
                            900: '#071e33',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        .hero-bg {
            background-image: url('images/slide7.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .hero-overlay {
            background: linear-gradient(to right, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.3) 100%);
        }
        .slider-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url('images/physiotherapy_services_1788474926861.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="font-sans antialiased text-gray-800 bg-gray-50 pt-[72px]">

    <!-- Navigation Header -->
    <nav class="bg-brand-900 text-white shadow-lg fixed w-full z-50 top-0 border-b border-brand-800/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-[72px] items-center">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="index.php" class="flex items-center gap-3">
                        <img src="images/logo.jpg" alt="Relieve Physiotherapy" class="h-10 md:h-12 w-auto rounded bg-white p-1 shadow-sm">
                        <span class="text-white font-extrabold text-base md:text-xl tracking-wide leading-tight">Relieve<br class="md:hidden"> <span class="text-brand-300 font-bold">Physiotherapy</span></span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-7">
                    <a href="index.php" class="text-sm font-semibold text-brand-300 hover:text-white transition">Home</a>
                    
                    <div class="relative group">
                        <a href="services.php" class="text-sm font-semibold text-gray-200 hover:text-brand-300 inline-flex items-center pb-6 mt-6 transition">
                            Services <i class="fas fa-chevron-down ml-1 text-xs text-brand-300"></i>
                        </a>
                        <div class="absolute left-0 top-full mt-0 w-60 bg-white text-gray-800 border border-gray-100 rounded-xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 py-2">
                            <a href="services.php" class="block px-4 py-2.5 text-sm font-bold text-brand-700 bg-brand-50 hover:bg-brand-100 border-b border-gray-100"><i class="fas fa-th-large mr-2"></i> All Services</a>
                            <a href="chiropractic.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600 font-medium">Chiropractic Adjustment</a>
                            <a href="kinesiology.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600 font-medium">Kinesiology Taping</a>
                            <a href="ultrasound.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600 font-medium">Ultrasound Therapy</a>
                            <a href="dry-needling.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600 font-medium">Dry Needling</a>
                            <a href="tens.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600 font-medium">TENS Therapy</a>
                            <a href="cupping.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600 font-medium">Cupping Therapy</a>
                        </div>
                    </div>
                    
                    <a href="about.php" class="text-sm font-semibold text-gray-200 hover:text-brand-300 transition">About Us</a>
                    
                    <div class="relative group">
                        <a href="blogs.php" class="text-sm font-semibold text-gray-200 hover:text-brand-300 inline-flex items-center pb-6 mt-6 transition">
                            Blogs <i class="fas fa-chevron-down ml-1 text-xs text-brand-300"></i>
                        </a>
                        <div class="absolute left-0 top-full mt-0 w-44 bg-white text-gray-800 border border-gray-100 rounded-xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 py-2">
                            <a href="blogs.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600 font-medium">Latest Posts</a>
                            <a href="single-blog.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600 font-medium">Sample Article</a>
                        </div>
                    </div>
                    
                    <a href="contact.php" class="text-sm font-semibold text-gray-200 hover:text-brand-300 transition">Contact</a>

                    <!-- CTA Button -->
                    <a href="tel:7987397821" class="bg-brand-500 hover:bg-brand-400 text-white font-bold text-xs px-4 py-2.5 rounded-xl transition-all shadow-md flex items-center gap-2 border border-brand-400/30">
                        <i class="fas fa-phone-alt"></i> +91 7987397821
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-white hover:text-brand-300 focus:outline-none p-2">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Panel -->
        <div id="mobile-menu" class="hidden md:hidden bg-brand-900 border-t border-brand-800 shadow-xl absolute w-full left-0">
            <div class="px-4 pt-3 pb-5 space-y-2">
                <a href="index.php" class="block px-4 py-2.5 rounded-lg text-base font-semibold text-white bg-brand-800">Home</a>
                <a href="services.php" class="block px-4 py-2.5 rounded-lg text-base font-semibold text-gray-200 hover:bg-brand-800 hover:text-white">Services</a>
                <a href="about.php" class="block px-4 py-2.5 rounded-lg text-base font-semibold text-gray-200 hover:bg-brand-800 hover:text-white">About Us</a>
                <a href="blogs.php" class="block px-4 py-2.5 rounded-lg text-base font-semibold text-gray-200 hover:bg-brand-800 hover:text-white">Blogs</a>
                <a href="contact.php" class="block px-4 py-2.5 rounded-lg text-base font-semibold text-gray-200 hover:bg-brand-800 hover:text-white">Contact</a>
                <a href="tel:7987397821" class="block text-center mt-3 bg-brand-500 hover:bg-brand-400 text-white font-bold text-sm px-4 py-3 rounded-xl shadow">
                    <i class="fas fa-phone-alt mr-2"></i> Call Now: +91 7987397821
                </a>
            </div>
        </div>
    </nav>
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
