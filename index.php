<?php include 'includes/header.php'; ?>

<!-- Hero Section with Background -->
<section class="relative pt-6 pb-10 md:pt-8 md:pb-16 hero-bg">
    <div class="absolute inset-0 hero-overlay"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Top Stats Badges -->
        <div class="flex flex-wrap gap-3 mb-5">
            <div class="bg-white/95 backdrop-blur px-4 py-2 rounded-md flex items-center font-bold text-gray-800 text-sm shadow-sm border border-white/50">
                Home Visits <span class="ml-1 text-lg">🥇</span>
            </div>
            <div class="bg-white/95 backdrop-blur px-4 py-2 rounded-md flex items-center font-bold text-gray-800 text-sm shadow-sm border border-white/50">
                Certified 40+ Therapists <span class="ml-1 text-lg">⭐</span>
            </div>
            <div class="bg-white/95 backdrop-blur px-4 py-2 rounded-md flex items-center font-bold text-gray-800 text-sm shadow-sm border border-white/50">
                3000+ Patients <span class="ml-1 text-lg">❤️</span>
            </div>
            <div class="bg-brand-500 backdrop-blur px-4 py-2 rounded-md flex items-center font-bold text-white text-sm shadow-sm border border-brand-400">
                <i class="fas fa-phone-alt mr-2"></i> +91 7987397821
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Left Column: Info & Slider -->
            <div class="lg:w-[60%] space-y-4">
                <!-- Banner Hero Box -->
                <div class="glass-card p-6 md:p-7 rounded-2xl shadow-xl border border-white/30 backdrop-blur-md">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-100 text-brand-700 text-xs font-bold mb-3 uppercase tracking-wider">
                        <i class="fas fa-heartbeat text-brand-600"></i> Relieve Physiotherapy
                    </div>
                    <h1 class="text-2xl md:text-3xl font-extrabold text-gray-900 tracking-tight leading-snug mb-2">
                        Expert Physiotherapy Care, Delivered to Your Doorstep in Gurgaon
                    </h1>
                    <div class="w-12 h-1 bg-brand-500 rounded-full mb-4"></div>
                    <h2 class="text-base md:text-lg font-bold text-brand-700 mb-2">
                        Pain-Free Living Starts at Home
                    </h2>
                    <p class="text-xs md:text-sm text-gray-700 leading-relaxed font-medium">
                        Relieve Physiotherapy brings expert, personalized physiotherapy care directly to your doorstep in Gurgaon. No traffic, no waiting rooms — just skilled therapists focused entirely on your recovery, in the comfort and privacy of your own home.
                    </p>
                </div>

                <!-- Feature Slider Box -->
                <div class="rounded-xl shadow-md overflow-hidden relative h-[260px] md:h-[280px] flex flex-col justify-end p-5 border border-white/20 group slider-container" style="background-color: #1a202c;">
                    
                    <!-- Slide 1 -->
                    <div class="slide absolute inset-0 transition-opacity duration-500 opacity-100" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.9)), url('images/slide2.jpg'); background-size: cover; background-position: center;"></div>
                    <!-- Slide 2 -->
                    <div class="slide absolute inset-0 transition-opacity duration-500 opacity-0" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.9)), url('images/slide3.jpg'); background-size: cover; background-position: center;"></div>
                    <!-- Slide 3 -->
                    <div class="slide absolute inset-0 transition-opacity duration-500 opacity-0" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.9)), url('images/slide4.jpg'); background-size: cover; background-position: center;"></div>

                    <div class="relative z-10 text-white w-full">
                        <!-- Navigation Arrows -->
                        <div class="flex justify-between items-center w-full absolute top-1/2 -translate-y-1/2 -mt-10 left-0 px-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <button onclick="prevSlide()" class="w-8 h-8 rounded-none bg-white/20 backdrop-blur flex items-center justify-center hover:bg-white/40 transition"><i class="fas fa-chevron-left text-sm"></i></button>
                            <button onclick="nextSlide()" class="w-8 h-8 rounded-none bg-white/20 backdrop-blur flex items-center justify-center hover:bg-white/40 transition"><i class="fas fa-chevron-right text-sm"></i></button>
                        </div>
                        
                        <!-- Slide Content Container -->
                        <div id="slide-content">
                            <!-- Injected via JS -->
                        </div>
                        
                        <!-- Slider Dots -->
                        <div class="flex justify-between items-center mt-4 border-t border-gray-500/30 pt-3">
                            <div class="flex gap-1.5" id="slider-dots">
                                <div class="w-6 h-1.5 rounded-full bg-brand-500 cursor-pointer" onclick="goToSlide(0)"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-gray-400 cursor-pointer hover:bg-gray-300" onclick="goToSlide(1)"></div>
                            </div>
                            <div class="text-[10px] text-gray-400 font-semibold bg-gray-800/50 px-2 py-1 rounded" id="slide-counter">1 / 2</div>
                        </div>
                    </div>
                </div>

                <!-- Why Choose Us Box -->
                <div class="glass-card p-5 rounded-xl shadow-md border border-white/20">
                    <h3 class="text-center md:text-left font-extrabold text-gray-900 mb-3 text-[15px] flex items-center gap-2">
                        <i class="fas fa-award text-brand-600"></i> Why Choose Relieve Physiotherapy?
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 text-[13px] text-gray-700">
                        <div class="flex items-start gap-2.5">
                            <i class="fas fa-user-md text-brand-600 mt-1 flex-shrink-0"></i>
                            <div>
                                <strong class="text-gray-900 font-bold block">Qualified & Experienced Therapists</strong>
                                <span class="text-xs text-gray-600 leading-snug block">Every session is led by licensed physiotherapists with hands-on clinical experience across orthopedic, neurological, and sports rehabilitation.</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <i class="fas fa-hand-holding-heart text-brand-600 mt-1 flex-shrink-0"></i>
                            <div>
                                <strong class="text-gray-900 font-bold block">Truly Personalized Care</strong>
                                <span class="text-xs text-gray-600 leading-snug block">One-on-one, full-attention sessions tailored to your condition, pace, and goals — not a shared clinic slot.</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <i class="fas fa-shield-alt text-brand-600 mt-1 flex-shrink-0"></i>
                            <div>
                                <strong class="text-gray-900 font-bold block">Convenience Without Compromise</strong>
                                <span class="text-xs text-gray-600 leading-snug block">All required equipment is brought to you. No commuting, no waiting, no exposure to crowded clinics.</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <i class="fas fa-heart-pulse text-brand-600 mt-1 flex-shrink-0"></i>
                            <div>
                                <strong class="text-gray-900 font-bold block">Faster, More Consistent Recovery</strong>
                                <span class="text-xs text-gray-600 leading-snug block">Treatment in your natural home environment helps build routines that stick, improving long-term outcomes.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Booking Form -->
            <div class="lg:w-[40%] flex flex-col">
                <div class="bg-white rounded-xl shadow-xl p-5 relative border border-gray-100 flex-grow">
                    <!-- Top Ribbon -->
                    <div class="flex justify-between items-center mb-5 border-b border-gray-100 pb-3">
                        <div>
                            <h3 class="font-bold text-gray-900 text-base">Home Session @ <span class="text-lg text-brand-600">₹1000</span> <span class="text-[11px] text-gray-400 line-through">₹1500</span></h3>
                        </div>
                        <div class="bg-blue-50 px-2 py-1.5 rounded flex items-center justify-center border border-blue-100">
                            <span class="text-blue-600 font-bold text-xs flex flex-col items-center leading-tight">
                                <i class="fas fa-shield-alt mb-0.5"></i> Safe
                            </span>
                        </div>
                    </div>
                    
                    <div class="bg-brand-50 rounded p-2 flex items-center justify-center gap-2 mb-4 border border-brand-100">
                        <i class="fas fa-user-md text-brand-600 text-sm"></i>
                        <span class="text-sm font-bold text-brand-800">Book Session Now</span>
                    </div>

                    <form id="enquiry-form" class="space-y-3">
                        <div>
                            <label class="block text-[11px] font-semibold text-gray-700 mb-1">Full Name <span class="text-red-500">*</span></label>
                            <input id="wa-name" type="text" placeholder="Enter your name" class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:ring-1 focus:ring-brand-500 focus:border-brand-500 outline-none transition">
                        </div>
                        
                        <div>
                            <label class="block text-[11px] font-semibold text-gray-700 mb-1">Mobile Number <span class="text-red-500">*</span></label>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 rounded-l border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm font-medium">
                                    +91
                                </span>
                                <input id="wa-phone" type="tel" placeholder="10 digit mobile number" class="flex-1 border border-gray-300 rounded-r px-3 py-2 text-sm focus:ring-1 focus:ring-brand-500 focus:border-brand-500 outline-none transition">
                            </div>
                        </div>

                        <div>
                            <label class="block text-[11px] font-semibold text-gray-700 mb-1">Address (Optional)</label>
                            <input id="wa-address" type="text" placeholder="Enter your address for home visit" class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:ring-1 focus:ring-brand-500 focus:border-brand-500 outline-none transition">
                        </div>

                        <div>
                            <label class="block text-[11px] font-semibold text-gray-700 mb-1">Issue (Optional)</label>
                            <select id="wa-issue" class="w-full border border-gray-300 rounded px-3 py-2 text-sm text-gray-500 focus:ring-1 focus:ring-brand-500 focus:border-brand-500 outline-none bg-white transition">
                                <option value="">Select your issue (optional)</option>
                                <option value="Back Pain">Back Pain</option>
                                <option value="Neck Pain">Neck Pain</option>
                                <option value="Joint Pain">Joint Pain</option>
                                <option value="Post Surgery">Post Surgery</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <button type="button" onclick="submitToWhatsApp()" class="w-full bg-brand-600 hover:bg-brand-700 text-white font-bold py-2.5 px-4 rounded-none transition flex items-center justify-center gap-2 mt-2 shadow-sm">
                            Enquire/Book Now <i class="fas fa-arrow-right text-[10px]"></i>
                        </button>
                        
                        <div class="flex justify-center items-center gap-3 mt-3 text-[9px] text-gray-500 font-bold uppercase tracking-wider">
                            <span class="flex items-center gap-1"><i class="fas fa-lock text-green-500"></i> Safe</span>
                            <span class="flex items-center gap-1"><i class="fas fa-shield-alt text-green-500"></i> Secure Payment</span>
                            <span class="flex items-center gap-1"><i class="fab fa-cc-visa text-blue-600 text-xs"></i> PCI DSS</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 5: Why Choose Relieve Physiotherapy? -->
<section class="py-12 md:py-20 bg-gray-50 border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <span class="text-brand-600 font-bold uppercase tracking-wider text-xs bg-brand-50 px-3 py-1 rounded-full border border-brand-100 inline-block mb-3">Our Core Promise</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight">Why Choose Relieve Physiotherapy?</h2>
            <div class="w-16 h-1 bg-brand-500 mx-auto rounded-full mt-3 mb-4"></div>
            <p class="text-gray-600 text-sm md:text-base font-medium max-w-2xl mx-auto">Experience superior healthcare delivered right to your home in Gurgaon with dedicated 1-on-1 focus.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Benefit 1 -->
            <div class="bg-white p-7 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 bg-brand-50 text-brand-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300 shadow-sm">
                        <i class="fas fa-user-md text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-3 text-lg leading-snug">Qualified & Experienced Therapists</h3>
                    <p class="text-sm text-gray-600 leading-relaxed font-medium">Every session is led by licensed physiotherapists with hands-on clinical experience across orthopedic, neurological, and sports rehabilitation.</p>
                </div>
            </div>
            
            <!-- Benefit 2 -->
            <div class="bg-white p-7 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300 shadow-sm">
                        <i class="fas fa-hand-holding-heart text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-3 text-lg leading-snug">Truly Personalized Care</h3>
                    <p class="text-sm text-gray-600 leading-relaxed font-medium">One-on-one, full-attention sessions tailored to your condition, pace, and goals — not a shared clinic slot.</p>
                </div>
            </div>
            
            <!-- Benefit 3 -->
            <div class="bg-white p-7 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-purple-600 group-hover:text-white transition-colors duration-300 shadow-sm">
                        <i class="fas fa-shield-alt text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-3 text-lg leading-snug">Convenience Without Compromise</h3>
                    <p class="text-sm text-gray-600 leading-relaxed font-medium">All required equipment is brought to you. No commuting, no waiting, no exposure to crowded clinics.</p>
                </div>
            </div>
            
            <!-- Benefit 4 -->
            <div class="bg-white p-7 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300 shadow-sm">
                        <i class="fas fa-heart-pulse text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-3 text-lg leading-snug">Faster, More Consistent Recovery</h3>
                    <p class="text-sm text-gray-600 leading-relaxed font-medium">Treatment in your natural home environment helps build routines that stick, improving long-term outcomes.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 6: FAQ -->
<section class="py-10 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Frequently Asked Questions</h2>
            <p class="text-gray-500 text-sm">Everything you need to know about our home physiotherapy services.</p>
        </div>

        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div class="faq-item border border-gray-200 rounded-lg p-5 hover:border-brand-500 transition cursor-pointer" onclick="toggleFaq(this)">
                <h4 class="font-bold text-gray-900 flex justify-between items-center text-sm">
                    Do I need to arrange any equipment for the home session?
                    <i class="fas fa-plus text-brand-500 text-xs transition-transform duration-300"></i>
                </h4>
                <p class="faq-answer text-gray-600 text-sm mt-3 leading-relaxed hidden">No, you don't need to arrange anything. Our physiotherapists carry all necessary portable equipment, including TENS machines, ultrasound units, and resistance bands, directly to your home.</p>
            </div>
            
            <!-- FAQ 2 -->
            <div class="faq-item border border-gray-200 rounded-lg p-5 hover:border-brand-500 transition cursor-pointer" onclick="toggleFaq(this)">
                <h4 class="font-bold text-gray-900 flex justify-between items-center text-sm">
                    Are your physiotherapists qualified and verified?
                    <i class="fas fa-plus text-brand-500 text-xs transition-transform duration-300"></i>
                </h4>
                <p class="faq-answer text-gray-600 text-sm mt-3 leading-relaxed hidden">Absolutely. Every therapist on our platform holds a valid BPT or MPT degree. We also conduct strict background checks and ensure they have clinical experience before assigning them to home visits.</p>
            </div>
            
            <!-- FAQ 3 -->
            <div class="faq-item border border-gray-200 rounded-lg p-5 hover:border-brand-500 transition cursor-pointer" onclick="toggleFaq(this)">
                <h4 class="font-bold text-gray-900 flex justify-between items-center text-sm">
                    How long does a home physiotherapy session last?
                    <i class="fas fa-plus text-brand-500 text-xs transition-transform duration-300"></i>
                </h4>
                <p class="faq-answer text-gray-600 text-sm mt-3 leading-relaxed hidden">A standard home session typically lasts between 45 to 60 minutes. The first session usually involves a detailed physical assessment and consultation, followed by the initial treatment.</p>
            </div>
        </div>
    </div>
</section>

<!-- Slider JS -->
<script>
    const slidesData = [
        {
            icon: 'fa-bone',
            title: 'Chiropractic Care',
            subtitle: 'Spinal Adjustment & Joint Health',
            desc: 'Chiropractic care focuses on diagnosing and treating neuromuscular disorders through manual adjustment and manipulation.',
            b1: 'Corrects spinal misalignments',
            b2: 'Reduces back and neck pain',
            b3: 'Improves joint mobility',
            b4: 'Enhances athletic performance'
        },
        {
            icon: 'fa-tape',
            title: 'Kinesiology Taping',
            subtitle: 'Muscle Support & Healing',
            desc: 'Targeted taping to reduce inflammation, provide structural muscle support, and facilitate the natural healing process without restricting motion.',
            b1: 'Decreases pain instantly',
            b2: 'Supports weak muscles',
            b3: 'Improves circulation',
            b4: 'Accelerates healing'
        },
        {
            icon: 'fa-wave-square',
            title: 'Ultrasound Therapy',
            subtitle: 'Deep Tissue Healing',
            desc: 'High-frequency sound waves stimulate deep tissue healing, increase blood flow, and accelerate recovery for soft tissue injuries.',
            b1: 'Relieves joint inflammation',
            b2: 'Reduces muscle spasms',
            b3: 'Speeds cellular repair',
            b4: 'Painless treatment'
        }
    ];

    let currentSlide = 0;
    const domSlides = document.querySelectorAll('.slide');
    const dotsContainer = document.getElementById('slider-dots');
    const contentContainer = document.getElementById('slide-content');
    const counter = document.getElementById('slide-counter');

    function updateSlider() {
        // Update bg
        domSlides.forEach((s, i) => {
            s.style.opacity = i === currentSlide ? '1' : '0';
        });
        
        // Update dots
        dotsContainer.innerHTML = slidesData.map((_, i) => 
            `<div class="${i === currentSlide ? 'w-6 bg-brand-500' : 'w-1.5 bg-gray-400 hover:bg-gray-300'} h-1.5 rounded-full cursor-pointer transition-all duration-300" onclick="goToSlide(${i})"></div>`
        ).join('');
        
        // Update content
        const data = slidesData[currentSlide];
        contentContainer.innerHTML = `
            <div class="flex items-center gap-2 mb-1.5 animate-fadeIn">
                <i class="fas ${data.icon} text-xl text-brand-300" style="color: #7dd3fc !important;"></i>
                <div>
                    <h2 class="text-xl font-bold leading-tight text-white" style="color: #ffffff !important;">${data.title}</h2>
                    <p class="text-[10px] text-brand-300 font-bold tracking-wide uppercase" style="color: #7dd3fc !important;">${data.subtitle}</p>
                </div>
            </div>
            
            <p class="text-[12px] text-gray-200 mb-3 max-w-lg line-clamp-2 leading-snug animate-fadeIn" style="color: #f1f5f9 !important;">
                ${data.desc}
            </p>
            
            <div class="grid grid-cols-2 gap-x-3 gap-y-1.5 text-[11px] font-medium animate-fadeIn text-white" style="color: #ffffff !important;">
                <div class="flex items-start gap-1.5" style="color: #ffffff !important;"><i class="fas fa-check text-brand-400 mt-0.5" style="color: #38bdf8 !important;"></i> ${data.b1}</div>
                <div class="flex items-start gap-1.5" style="color: #ffffff !important;"><i class="fas fa-check text-brand-400 mt-0.5" style="color: #38bdf8 !important;"></i> ${data.b2}</div>
                <div class="flex items-start gap-1.5" style="color: #ffffff !important;"><i class="fas fa-check text-brand-400 mt-0.5" style="color: #38bdf8 !important;"></i> ${data.b3}</div>
                <div class="flex items-start gap-1.5" style="color: #ffffff !important;"><i class="fas fa-check text-brand-400 mt-0.5" style="color: #38bdf8 !important;"></i> ${data.b4}</div>
            </div>
        `;
        
        counter.innerText = `${currentSlide + 1} / ${slidesData.length}`;
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slidesData.length;
        updateSlider();
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + slidesData.length) % slidesData.length;
        updateSlider();
    }

    function goToSlide(index) {
        currentSlide = index;
        updateSlider();
    }

    // Auto slide every 5 seconds
    setInterval(nextSlide, 5000);
    
    // Init
    updateSlider();
</script>
<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(5px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadeIn {
        animation: fadeIn 0.4s ease-out forwards;
    }
</style>

<!-- Section 2: How It Works -->
<section class="py-10 md:py-16 bg-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-1/2 bg-gray-50/50 -skew-y-2 origin-top-left -z-10"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-3 tracking-tight">How It Works</h2>
            <div class="w-16 h-1 bg-brand-500 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-500 text-sm md:text-base font-medium max-w-2xl mx-auto">Four simple steps to get started with your personalized tele-physiotherapy journey</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8 relative">
            <!-- Connecting Line (Desktop only) -->
            <div class="hidden lg:block absolute top-10 left-[12%] right-[12%] h-[2px] bg-gradient-to-r from-brand-200 via-brand-400 to-brand-200 border-t-2 border-dashed border-transparent" style="background-clip: padding-box; border-image: repeating-linear-gradient(to right, transparent, transparent 5px, #0284c7 5px, #0284c7 10px) 1; z-index: -1;"></div>

            <!-- Step 1 -->
            <div class="text-center relative group">
                <div class="w-20 h-20 mx-auto bg-white border border-gray-100 text-brand-600 rounded-2xl flex items-center justify-center text-3xl mb-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.08)] group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(2,132,199,0.25)] transition-all duration-300 transform rotate-3 group-hover:rotate-0">
                    <i class="far fa-calendar-alt"></i>
                    <div class="absolute -top-3 -right-3 bg-brand-600 text-white text-[11px] font-extrabold w-7 h-7 rounded-full flex items-center justify-center border-[3px] border-white shadow-sm">01</div>
                </div>
                <h3 class="font-extrabold text-gray-900 mb-3 text-lg">Book a Session</h3>
                <p class="text-[13px] text-gray-500 leading-relaxed font-medium">Submit the form or WhatsApp us. We will contact you to schedule your appointment at your preferred time.</p>
            </div>

            <!-- Step 2 -->
            <div class="text-center relative group">
                <div class="w-20 h-20 mx-auto bg-white border border-gray-100 text-brand-600 rounded-2xl flex items-center justify-center text-3xl mb-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.08)] group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(2,132,199,0.25)] transition-all duration-300 transform -rotate-3 group-hover:rotate-0">
                    <i class="far fa-file-alt"></i>
                    <div class="absolute -top-3 -right-3 bg-brand-600 text-white text-[11px] font-extrabold w-7 h-7 rounded-full flex items-center justify-center border-[3px] border-white shadow-sm">02</div>
                </div>
                <h3 class="font-extrabold text-gray-900 mb-3 text-lg">Physical Assessment</h3>
                <p class="text-[13px] text-gray-500 leading-relaxed font-medium">Our expert physiotherapist visits your home, conducts a thorough assessment, and understands your condition.</p>
            </div>

            <!-- Step 3 -->
            <div class="text-center relative group">
                <div class="w-20 h-20 mx-auto bg-white border border-gray-100 text-brand-600 rounded-2xl flex items-center justify-center text-3xl mb-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.08)] group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(2,132,199,0.25)] transition-all duration-300 transform rotate-3 group-hover:rotate-0">
                    <i class="fas fa-notes-medical"></i>
                    <div class="absolute -top-3 -right-3 bg-brand-600 text-white text-[11px] font-extrabold w-7 h-7 rounded-full flex items-center justify-center border-[3px] border-white shadow-sm">03</div>
                </div>
                <h3 class="font-extrabold text-gray-900 mb-3 text-lg">Personalized Treatment</h3>
                <p class="text-[13px] text-gray-500 leading-relaxed font-medium">Receive a customized treatment plan with exercises, lifestyle recommendations, and clear recovery goals.</p>
            </div>

            <!-- Step 4 -->
            <div class="text-center relative group">
                <div class="w-20 h-20 mx-auto bg-white border border-gray-100 text-brand-600 rounded-2xl flex items-center justify-center text-3xl mb-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.08)] group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(2,132,199,0.25)] transition-all duration-300 transform -rotate-3 group-hover:rotate-0">
                    <i class="fas fa-sync-alt"></i>
                    <div class="absolute -top-3 -right-3 bg-brand-600 text-white text-[11px] font-extrabold w-7 h-7 rounded-full flex items-center justify-center border-[3px] border-white shadow-sm">04</div>
                </div>
                <h3 class="font-extrabold text-gray-900 mb-3 text-lg">Follow-up & Progress</h3>
                <p class="text-[13px] text-gray-500 leading-relaxed font-medium">Regular sessions to monitor progress, adjust the treatment, and ensure the best recovery outcomes.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Conditions We Treat -->
<section class="py-10 md:py-16 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-3 tracking-tight">Conditions We Treat</h2>
            <div class="w-16 h-1 bg-brand-500 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-500 text-sm md:text-base font-medium">Expert care for a wide range of physical health conditions and rehabilitation needs</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Condition 1 -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex gap-4 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                <div class="w-14 h-14 bg-gradient-to-br from-brand-50 to-brand-100 text-brand-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-user-injured text-2xl"></i>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900 mb-1">Back & Neck Pain</h3>
                    <p class="text-[11px] text-gray-500 mb-3 uppercase tracking-wider font-semibold">Posture Correction</p>
                    <ul class="text-[13px] font-medium text-gray-600 space-y-1.5">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-brand-500 text-[10px]"></i> Lower back pain</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-brand-500 text-[10px]"></i> Neck stiffness</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-brand-500 text-[10px]"></i> Sciatica</li>
                    </ul>
                </div>
            </div>

            <!-- Condition 2 -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex gap-4 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                <div class="w-14 h-14 bg-gradient-to-br from-brand-50 to-brand-100 text-brand-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-running text-2xl"></i>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900 mb-1">Sports Injuries</h3>
                    <p class="text-[11px] text-gray-500 mb-3 uppercase tracking-wider font-semibold">Performance Optimization</p>
                    <ul class="text-[13px] font-medium text-gray-600 space-y-1.5">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-brand-500 text-[10px]"></i> Muscle strains</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-brand-500 text-[10px]"></i> Sprains & tears</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-brand-500 text-[10px]"></i> Tennis elbow</li>
                    </ul>
                </div>
            </div>

            <!-- Condition 3 -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex gap-4 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                <div class="w-14 h-14 bg-gradient-to-br from-brand-50 to-brand-100 text-brand-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-dharmachakra text-2xl"></i>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900 mb-1">Joint Problems</h3>
                    <p class="text-[11px] text-gray-500 mb-3 uppercase tracking-wider font-semibold">Mobility Improvement</p>
                    <ul class="text-[13px] font-medium text-gray-600 space-y-1.5">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-brand-500 text-[10px]"></i> Arthritis</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-brand-500 text-[10px]"></i> Joint stiffness</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-brand-500 text-[10px]"></i> Range of motion</li>
                    </ul>
                </div>
            </div>

            <!-- Condition 4 -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex gap-4 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                <div class="w-14 h-14 bg-gradient-to-br from-brand-50 to-brand-100 text-brand-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-brain text-2xl"></i>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900 mb-1">Neurological</h3>
                    <p class="text-[11px] text-gray-500 mb-3 uppercase tracking-wider font-semibold">Stroke Recovery</p>
                    <ul class="text-[13px] font-medium text-gray-600 space-y-1.5">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-brand-500 text-[10px]"></i> Post-stroke rehab</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-brand-500 text-[10px]"></i> Parkinson's</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-brand-500 text-[10px]"></i> Coordination</li>
                    </ul>
                </div>
            </div>

            <!-- Condition 5 -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex gap-4 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                <div class="w-14 h-14 bg-gradient-to-br from-brand-50 to-brand-100 text-brand-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-procedures text-2xl"></i>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900 mb-1">Post-Surgery</h3>
                    <p class="text-[11px] text-gray-500 mb-3 uppercase tracking-wider font-semibold">Guided Rehabilitation</p>
                    <ul class="text-[13px] font-medium text-gray-600 space-y-1.5">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-brand-500 text-[10px]"></i> Post-operative care</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-brand-500 text-[10px]"></i> Scar tissue release</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-brand-500 text-[10px]"></i> Mobility restoration</li>
                    </ul>
                </div>
            </div>

            <!-- Condition 6 -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex gap-4 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                <div class="w-14 h-14 bg-gradient-to-br from-brand-50 to-brand-100 text-brand-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-heartbeat text-2xl"></i>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900 mb-1">Chronic Conditions</h3>
                    <p class="text-[11px] text-gray-500 mb-3 uppercase tracking-wider font-semibold">Long-term Support</p>
                    <ul class="text-[13px] font-medium text-gray-600 space-y-1.5">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-brand-500 text-[10px]"></i> Fibromyalgia</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-brand-500 text-[10px]"></i> Chronic fatigue</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-brand-500 text-[10px]"></i> Pain management</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: What Our Patients Say (Slider) -->
<section class="py-12 md:py-20 bg-brand-900 relative overflow-hidden">
    <!-- Decorative pattern -->
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 2px, transparent 2px); background-size: 30px 30px;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
            <div class="text-left">
                <span class="text-brand-400 font-bold uppercase tracking-wider text-xs bg-brand-800/80 px-3 py-1 rounded-full border border-brand-700/50 inline-block mb-3">Verified Patient Reviews</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white tracking-tight">What Our Patients Say</h2>
                <p class="text-brand-100 text-sm md:text-base font-medium mt-2 max-w-xl">Real recovery stories from patients across Gurgaon who experienced expert physiotherapy right at home.</p>
            </div>
            
            <!-- Custom Slider Controls -->
            <div class="flex items-center gap-3">
                <button id="review-prev" class="w-12 h-12 rounded-full bg-white/10 hover:bg-brand-500 text-white border border-white/20 flex items-center justify-center transition-all duration-300 shadow-lg focus:outline-none cursor-pointer">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <button id="review-next" class="w-12 h-12 rounded-full bg-white/10 hover:bg-brand-500 text-white border border-white/20 flex items-center justify-center transition-all duration-300 shadow-lg focus:outline-none cursor-pointer">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>

        <!-- Swiper Slider -->
        <div class="swiper reviews-swiper !pb-12">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide h-auto">
                    <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/20 shadow-2xl relative hover:-translate-y-2 transition-transform duration-300 h-full flex flex-col justify-between">
                        <i class="fas fa-quote-left text-4xl text-brand-500/40 absolute top-6 right-6"></i>
                        <div>
                            <div class="flex items-center gap-1 text-yellow-400 text-sm mb-4">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="text-brand-50 italic leading-relaxed mb-6 font-medium text-sm md:text-base">
                                "After my total knee replacement surgery, traveling to a clinic daily was painful and overwhelming. Relieve Physiotherapy provided gentle, highly effective home sessions. I was walking independently without a cane in just 3 weeks!"
                            </p>
                        </div>
                        <div class="flex items-center gap-4 border-t border-white/10 pt-4 mt-auto">
                            <div class="w-11 h-11 bg-emerald-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-inner">R</div>
                            <div>
                                <h4 class="font-bold text-white text-base">Rahul Verma</h4>
                                <p class="text-xs text-brand-200"><i class="fas fa-map-marker-alt text-brand-400 mr-1"></i>DLF Phase 4, Gurgaon</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide h-auto">
                    <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/20 shadow-2xl relative hover:-translate-y-2 transition-transform duration-300 h-full flex flex-col justify-between">
                        <i class="fas fa-quote-left text-4xl text-brand-500/40 absolute top-6 right-6"></i>
                        <div>
                            <div class="flex items-center gap-1 text-yellow-400 text-sm mb-4">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="text-brand-50 italic leading-relaxed mb-6 font-medium text-sm md:text-base">
                                "Working 10+ hours on a laptop caused severe cervical stiffness and acute upper back pain. Their chiropractor visited my home with portable equipment and gave me instant relief. Punctual, polite, and top-class care!"
                            </p>
                        </div>
                        <div class="flex items-center gap-4 border-t border-white/10 pt-4 mt-auto">
                            <div class="w-11 h-11 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-inner">S</div>
                            <div>
                                <h4 class="font-bold text-white text-base">Sneha Kapoor</h4>
                                <p class="text-xs text-brand-200"><i class="fas fa-map-marker-alt text-brand-400 mr-1"></i>Golf Course Extension, Gurgaon</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide h-auto">
                    <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/20 shadow-2xl relative hover:-translate-y-2 transition-transform duration-300 h-full flex flex-col justify-between">
                        <i class="fas fa-quote-left text-4xl text-brand-500/40 absolute top-6 right-6"></i>
                        <div>
                            <div class="flex items-center gap-1 text-yellow-400 text-sm mb-4">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="text-brand-50 italic leading-relaxed mb-6 font-medium text-sm md:text-base">
                                "We booked home physiotherapy for my father's post-stroke neuro rehabilitation. The therapist was exceptionally patient and skilled in gait training. Seeing my father regain his strength right at home is wonderful."
                            </p>
                        </div>
                        <div class="flex items-center gap-4 border-t border-white/10 pt-4 mt-auto">
                            <div class="w-11 h-11 bg-amber-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-inner">V</div>
                            <div>
                                <h4 class="font-bold text-white text-base">Vikramaditya Rao</h4>
                                <p class="text-xs text-brand-200"><i class="fas fa-map-marker-alt text-brand-400 mr-1"></i>Sector 57, Gurgaon</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide h-auto">
                    <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/20 shadow-2xl relative hover:-translate-y-2 transition-transform duration-300 h-full flex flex-col justify-between">
                        <i class="fas fa-quote-left text-4xl text-brand-500/40 absolute top-6 right-6"></i>
                        <div>
                            <div class="flex items-center gap-1 text-yellow-400 text-sm mb-4">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="text-brand-50 italic leading-relaxed mb-6 font-medium text-sm md:text-base">
                                "I suffered from acute sciatica pain radiating down my left leg. The ultrasound therapy and nerve gliding exercises provided by their specialist got me completely pain-free within 10 home sessions!"
                            </p>
                        </div>
                        <div class="flex items-center gap-4 border-t border-white/10 pt-4 mt-auto">
                            <div class="w-11 h-11 bg-rose-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-inner">M</div>
                            <div>
                                <h4 class="font-bold text-white text-base">Meenakshi Sundaram</h4>
                                <p class="text-xs text-brand-200"><i class="fas fa-map-marker-alt text-brand-400 mr-1"></i>Sector 14, Gurgaon</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="swiper-slide h-auto">
                    <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/20 shadow-2xl relative hover:-translate-y-2 transition-transform duration-300 h-full flex flex-col justify-between">
                        <i class="fas fa-quote-left text-4xl text-brand-500/40 absolute top-6 right-6"></i>
                        <div>
                            <div class="flex items-center gap-1 text-yellow-400 text-sm mb-4">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="text-brand-50 italic leading-relaxed mb-6 font-medium text-sm md:text-base">
                                "My frozen shoulder restricted my arm movement severely. Their targeted manual mobilization and therapeutic exercises restored 95% shoulder range without any painful surgery. Highly recommend!"
                            </p>
                        </div>
                        <div class="flex items-center gap-4 border-t border-white/10 pt-4 mt-auto">
                            <div class="w-11 h-11 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-inner">A</div>
                            <div>
                                <h4 class="font-bold text-white text-base">Amitabh Joshi</h4>
                                <p class="text-xs text-brand-200"><i class="fas fa-map-marker-alt text-brand-400 mr-1"></i>Sohna Road, Gurgaon</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 6 -->
                <div class="swiper-slide h-auto">
                    <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/20 shadow-2xl relative hover:-translate-y-2 transition-transform duration-300 h-full flex flex-col justify-between">
                        <i class="fas fa-quote-left text-4xl text-brand-500/40 absolute top-6 right-6"></i>
                        <div>
                            <div class="flex items-center gap-1 text-yellow-400 text-sm mb-4">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="text-brand-50 italic leading-relaxed mb-6 font-medium text-sm md:text-base">
                                "Extremely satisfied with their kinesiology taping and rehabilitation after my sports ligament tear. The doctor was knowledgeable, courteous, and followed strict hygiene protocols during visits."
                            </p>
                        </div>
                        <div class="flex items-center gap-4 border-t border-white/10 pt-4 mt-auto">
                            <div class="w-11 h-11 bg-teal-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-inner">P</div>
                            <div>
                                <h4 class="font-bold text-white text-base">Pooja Malhotra</h4>
                                <p class="text-xs text-brand-200"><i class="fas fa-map-marker-alt text-brand-400 mr-1"></i>Nirvana Country, Gurgaon</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination Dots -->
            <div class="swiper-pagination reviews-pagination !-bottom-1"></div>
        </div>
    </div>
</section>

<!-- Swiper Initialization Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.reviews-swiper', {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        pagination: {
            el: '.reviews-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '#review-next',
            prevEl: '#review-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 24,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        }
    });
});
</script>

<script>
    // --- FAQ Toggle Logic ---
    function toggleFaq(element) {
        const answer = element.querySelector('.faq-answer');
        const icon = element.querySelector('.fa-plus') || element.querySelector('.fa-minus');
        
        if (answer.classList.contains('hidden')) {
            // Open
            answer.classList.remove('hidden');
            element.classList.add('border-brand-500', 'bg-brand-50');
            if (icon) {
                icon.classList.remove('fa-plus');
                icon.classList.add('fa-minus', 'rotate-180');
            }
        } else {
            // Close
            answer.classList.add('hidden');
            element.classList.remove('border-brand-500', 'bg-brand-50');
            if (icon) {
                icon.classList.remove('fa-minus', 'rotate-180');
                icon.classList.add('fa-plus');
            }
        }
    }

    // --- WhatsApp Submit Logic ---
    function submitToWhatsApp() {
        const name = document.getElementById('wa-name').value;
        const phone = document.getElementById('wa-phone').value;
        const address = document.getElementById('wa-address').value;
        const issue = document.getElementById('wa-issue').value;

        if (!name || !phone) {
            alert('Please enter your Name and Mobile Number.');
            return;
        }

        let msg = `Hi Relieve Physiotherapy, I would like to book a home session.\n\n*Name:* ${name}\n*Mobile:* +91 ${phone}`;
        const whatsappUrl = `https://wa.me/917987397821?text=${encodeURIComponent(msg)}`;
        window.open(whatsappUrl, '_blank');
    }
</script>

<!-- CTA Call-to-Action Section -->
<section class="py-16 md:py-20 bg-gradient-to-r from-brand-900 via-brand-800 to-brand-900 text-white relative overflow-hidden border-t border-brand-700/50">
    <!-- Background Glow Elements -->
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand-500/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="text-brand-300 font-bold uppercase tracking-wider text-xs bg-white/10 px-4 py-1.5 rounded-full border border-white/20 inline-block mb-4">
            <i class="fas fa-home mr-1.5"></i> Doorstep Healthcare in Gurgaon
        </span>
        <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-4 tracking-tight leading-tight">
            Ready to Experience Pain-Free Living at Home?
        </h2>
        <p class="text-brand-100 text-base md:text-lg max-w-2xl mx-auto mb-8 font-medium leading-relaxed">
            Book your 1-on-1 home physiotherapy session with certified specialists in Gurgaon. Zero commuting, no waiting rooms, 100% focused care.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="contact.php" class="w-full sm:w-auto bg-brand-500 hover:bg-brand-400 text-white font-extrabold px-8 py-4 rounded-xl shadow-xl transition-all duration-300 transform hover:-translate-y-0.5 flex items-center justify-center gap-2 border border-brand-400/40 text-base">
                Book Home Visit @ ₹1000 <i class="fas fa-arrow-right"></i>
            </a>
            <a href="tel:7987397821" class="w-full sm:w-auto bg-white/10 hover:bg-white/20 text-white font-bold px-8 py-4 rounded-xl border border-white/20 backdrop-blur-md transition-all duration-300 flex items-center justify-center gap-2 text-base">
                <i class="fas fa-phone-alt text-brand-300"></i> Call: +91 7987397821
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
