<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<div class="relative pt-24 pb-20 hero-bg bg-center bg-cover border-b border-gray-200">
    <div class="absolute inset-0 bg-gradient-to-r from-gray-900/90 to-gray-800/80"></div>
    <div class="relative z-10 text-center max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 tracking-tight">Our Health Blog</h1>
        <div class="w-16 h-1.5 bg-brand-500 mx-auto rounded-full mb-6"></div>
        <p class="text-gray-300 text-lg font-medium">Expert insights, tips, and guides for a pain-free life.</p>
    </div>
</div>

<section class="py-16 md:py-24 bg-gray-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Blog Card 1 -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition group">
                <div class="h-48 bg-gray-200 relative overflow-hidden">
                    <div class="absolute inset-0 bg-brand-600/20 mix-blend-multiply group-hover:bg-transparent transition duration-300 z-10"></div>
                    <img src="images/physiotherapy_services_1788474926861.jpg" alt="Blog Image" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 text-xs font-bold text-brand-600 rounded shadow z-20 uppercase tracking-wide">Posture</div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-xs text-gray-400 mb-3 gap-4 font-medium">
                        <span class="flex items-center gap-1.5"><i class="far fa-calendar-alt"></i> Oct 12, 2023</span>
                        <span class="flex items-center gap-1.5"><i class="far fa-clock"></i> 5 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-brand-600 transition">5 Simple Exercises to Fix Your Desk Posture</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Sitting at a desk all day can wreak havoc on your spine. Here are five easy exercises you can do from your chair to prevent long-term back and neck pain.</p>
                    <a href="single-blog.php" class="text-brand-600 font-bold text-sm flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                        Read Full Article <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- Blog Card 2 -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition group">
                <div class="h-48 bg-gray-200 relative overflow-hidden">
                    <div class="absolute inset-0 bg-brand-600/20 mix-blend-multiply group-hover:bg-transparent transition duration-300 z-10"></div>
                    <img src="images/physiotherapy_hero_1788474885428.jpg" alt="Blog Image" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 text-xs font-bold text-brand-600 rounded shadow z-20 uppercase tracking-wide">Recovery</div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-xs text-gray-400 mb-3 gap-4 font-medium">
                        <span class="flex items-center gap-1.5"><i class="far fa-calendar-alt"></i> Sep 28, 2023</span>
                        <span class="flex items-center gap-1.5"><i class="far fa-clock"></i> 7 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-brand-600 transition">The Difference Between Ice and Heat Therapy</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Confused about when to ice an injury versus when to apply heat? Our lead physiotherapist breaks down the science behind temperature therapies.</p>
                    <a href="single-blog.php" class="text-brand-600 font-bold text-sm flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                        Read Full Article <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- Blog Card 3 -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition group">
                <div class="h-48 bg-gray-200 relative overflow-hidden flex items-center justify-center bg-brand-50">
                    <i class="fas fa-running text-6xl text-brand-200"></i>
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 text-xs font-bold text-brand-600 rounded shadow z-20 uppercase tracking-wide">Sports</div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-xs text-gray-400 mb-3 gap-4 font-medium">
                        <span class="flex items-center gap-1.5"><i class="far fa-calendar-alt"></i> Sep 15, 2023</span>
                        <span class="flex items-center gap-1.5"><i class="far fa-clock"></i> 4 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-brand-600 transition">How to Prevent Common Running Injuries</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Whether you're training for a marathon or just jogging for health, these preventive tips will keep runner's knee and shin splints at bay.</p>
                    <a href="single-blog.php" class="text-brand-600 font-bold text-sm flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                        Read Full Article <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>

        </div>
        
        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            <nav class="flex items-center gap-2">
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50 transition"><i class="fas fa-chevron-left text-xs"></i></a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg bg-brand-600 text-white font-bold shadow transition">1</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 font-bold transition">2</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 font-bold transition">3</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50 transition"><i class="fas fa-chevron-right text-xs"></i></a>
            </nav>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
