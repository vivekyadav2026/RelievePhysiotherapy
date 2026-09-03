<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relieve Physiotherapy | Expert Care in Gurgaon</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts for a professional look similar to the image -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            900: '#14532d',
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

    <!-- Navigation -->
    <nav class="bg-white shadow-sm fixed w-full z-50 top-0 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-[72px] items-center">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="index.php" class="flex items-center gap-3">
                        <img src="images/logo.jpg" alt="Relieve Physiotherapy" class="h-12 w-auto rounded">
                        <span class="text-brand-700 font-bold text-lg hidden sm:block tracking-wide">Relieve Physiotherapy</span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="index.php" class="text-sm font-medium text-brand-600">Home</a>
                    
                    <div class="relative group">
                        <a href="services.php" class="text-sm font-medium text-gray-700 hover:text-brand-600 inline-flex items-center pb-6 mt-6">
                            Services <i class="fas fa-chevron-down ml-1 text-xs text-gray-400"></i>
                        </a>
                        <div class="absolute left-0 top-full mt-0 w-56 bg-white border border-gray-100 rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 py-2">
                            <a href="chiropractic.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">Chiropractic</a>
                            <a href="kinesiology.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">Kinesiology Taping</a>
                            <a href="ultrasound.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">Ultrasound Therapy</a>
                            <a href="dry-needling.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">Dry Needling</a>
                            <a href="tens.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">TENS Therapy</a>
                            <a href="cupping.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">Cupping Therapy</a>
                        </div>
                    </div>
                    
                    <a href="about.php" class="text-sm font-medium text-gray-700 hover:text-brand-600">About Us</a>
                    
                    <div class="relative group">
                        <a href="blogs.php" class="text-sm font-medium text-gray-700 hover:text-brand-600 inline-flex items-center pb-6 mt-6">
                            Blogs <i class="fas fa-chevron-down ml-1 text-xs text-gray-400"></i>
                        </a>
                        <div class="absolute left-0 top-full mt-0 w-40 bg-white border border-gray-100 rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 py-2">
                            <a href="blogs.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">Latest Posts</a>
                            <a href="single-blog.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-50 hover:text-brand-600">Sample Article</a>
                        </div>
                    </div>
                    
                    <a href="contact.php" class="text-sm font-medium text-gray-700 hover:text-brand-600">Contact</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-gray-600 hover:text-brand-600 focus:outline-none p-2">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Panel -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 shadow-lg absolute w-full">
            <div class="px-4 pt-2 pb-4 space-y-1">
                <a href="index.php" class="block px-3 py-2 rounded-md text-base font-medium text-brand-600 bg-brand-50">Home</a>
                <a href="services.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50">Services</a>
                <a href="about.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50">About Us</a>
                <a href="contact.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50">Contact</a>
            </div>
        </div>
    </nav>
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
