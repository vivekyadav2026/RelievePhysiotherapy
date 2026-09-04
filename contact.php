<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<div class="relative pt-24 pb-20 hero-bg bg-center bg-cover border-b border-gray-200">
    <div class="absolute inset-0 bg-gradient-to-r from-gray-900/90 to-gray-800/80"></div>
    <div class="relative z-10 text-center max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 tracking-tight">Contact Us</h1>
        <div class="w-16 h-1.5 bg-brand-500 mx-auto rounded-full mb-6"></div>
        <p class="text-gray-300 text-lg font-medium">Ready to start your pain-free journey? Get in touch today.</p>
    </div>
</div>

<section class="py-16 md:py-24 bg-gray-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid lg:grid-cols-2 gap-16 max-w-5xl mx-auto">
            
            <!-- Contact Info -->
            <div>
                <h2 class="text-brand-600 font-bold tracking-wide uppercase text-sm mb-2">Get in touch</h2>
                <h3 class="text-3xl font-extrabold text-gray-900 mb-8">We're Here to Help You Heal</h3>
                
                <div class="space-y-8">
                    <!-- Item -->
                    <a href="tel:7987397821" class="flex items-start group">
                        <div class="w-14 h-14 bg-white shadow-sm border border-gray-100 text-brand-600 rounded-xl flex items-center justify-center text-xl group-hover:bg-brand-600 group-hover:text-white transition flex-shrink-0">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="ml-5">
                            <h4 class="font-bold text-gray-900 mb-1">Phone Number</h4>
                            <p class="text-gray-500 group-hover:text-brand-600 transition font-medium text-lg">+91 7987397821</p>
                            <p class="text-xs text-gray-400 mt-1">Available 24/7 for booking</p>
                        </div>
                    </a>
                    
                    <!-- Item -->
                    <a href="mailto:devendra.kumar.dhruv96@gmail.com" class="flex items-start group">
                        <div class="w-14 h-14 bg-white shadow-sm border border-gray-100 text-brand-600 rounded-xl flex items-center justify-center text-xl group-hover:bg-brand-600 group-hover:text-white transition flex-shrink-0">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="ml-5">
                            <h4 class="font-bold text-gray-900 mb-1">Email Address</h4>
                            <p class="text-gray-500 group-hover:text-brand-600 transition font-medium break-all">devendra.kumar.dhruv96@gmail.com</p>
                            <p class="text-xs text-gray-400 mt-1">We typically reply within 2 hours</p>
                        </div>
                    </a>
                    
                    <!-- Item -->
                    <div class="flex items-start">
                        <div class="w-14 h-14 bg-white shadow-sm border border-gray-100 text-brand-600 rounded-xl flex items-center justify-center text-xl flex-shrink-0">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="ml-5">
                            <h4 class="font-bold text-gray-900 mb-1">Location</h4>
                            <p class="text-gray-500 font-medium leading-relaxed">Gurgaon</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-100">
                <h3 class="text-2xl font-bold mb-6 text-gray-900">Request a Callback</h3>
                <form action="#" method="POST" class="space-y-5">
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Full Name <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Enter your full name" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Mobile Number <span class="text-red-500">*</span></label>
                        <div class="flex">
                            <span class="inline-flex items-center px-4 rounded-l-xl border border-r-0 border-gray-200 bg-gray-100 text-gray-500 text-sm font-medium">
                                +91
                            </span>
                            <input type="tel" placeholder="10 digit mobile number" class="flex-1 bg-gray-50 border border-gray-200 rounded-r-xl px-4 py-3 text-sm focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition">
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Message / Concern</label>
                        <textarea placeholder="Tell us about your pain or condition..." rows="4" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition resize-none"></textarea>
                    </div>
                    <button type="button" class="w-full bg-brand-600 hover:bg-brand-700 text-white font-bold py-4 px-4 rounded-xl transition shadow-lg shadow-brand-200 flex items-center justify-center gap-2">
                        Submit Request <i class="fas fa-paper-plane text-sm"></i>
                    </button>
                    <p class="text-xs text-center text-gray-400 mt-4"><i class="fas fa-lock mr-1"></i> Your information is safe and secure.</p>
                </form>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
