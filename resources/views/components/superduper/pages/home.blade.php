<x-superduper.main>

    <div class="page-wrapper relative z-[1]">
        <main class="relative overflow-hidden main-wrapper">

            <x-superduper.components.hero />
            
            <x-superduper.components.value-proposition />

            <!-- Visi & Misi Section -->
            <div class="relative py-16 bg-white dark:bg-slate-900 border-t border-slate-100 dark:border-slate-800">
                <div class="container px-4 mx-auto">
                    <div class="mb-12 text-center">
                        <span class="inline-block px-4 py-1 mb-3 text-sm font-medium rounded-full bg-primary-50 text-primary-700 dark:bg-primary-900/30 dark:text-dark-400">Our Core Principles</span>
                        <h2 class="mb-4 text-3xl font-bold text-slate-900 dark:text-dark">Vision & Mission</h2>
                        <p class="max-w-2xl mx-auto text-lg text-slate-600 dark:text-dark-400">Driven by passion, guided by innovation. Here are the core values that shape genz tech.</p>
                    </div>

                    <div class="grid max-w-5xl gap-8 mx-auto md:grid-cols-2">
                        <!-- Vision -->
                        <div class="p-8 transition-all duration-300 bg-white border border-slate-100 rounded-2xl hover:shadow-xl hover:shadow-primary-500/10 dark:bg-slate-800/50 dark:border-slate-700/50">
                            <div class="flex items-center justify-center w-14 h-14 mb-6 rounded-xl bg-primary-50 text-primary-600 dark:bg-primary-500/10 dark:text-primary-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                            <h3 class="mb-4 text-2xl font-bold text-slate-900 dark:text-dark">Our Vision (Visi)</h3>
                            <p class="text-slate-600 dark:text-dark-400 leading-relaxed">
                                To be the leading global technology partner that continuously innovates and empowers businesses to achieve their full potential through modern, scalable, and secure IT ecosystems.
                            </p>
                        </div>
                        
                        <!-- Mission -->
                        <div class="p-8 transition-all duration-300 bg-white border border-slate-100 rounded-2xl hover:shadow-xl hover:shadow-primary-500/10 dark:bg-slate-800/50 dark:border-slate-700/50">
                            <div class="flex items-center justify-center w-14 h-14 mb-6 rounded-xl bg-primary-50 text-primary-600 dark:bg-primary-500/10 dark:text-primary-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="mb-4 text-2xl font-bold text-slate-900 dark:text-dark">Our Mission (Misi)</h3>
                            <ul class="space-y-3 text-slate-600 dark:text-dark-400">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 mr-3 text-primary-500 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Deliver high-quality, custom software solutions tailored to client needs.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 mr-3 text-primary-500 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Provide strategic IT consulting that drives direct business growth.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 mr-3 text-primary-500 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Maintain resilient managed services for 24/7 business continuity.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Showcases --}}
            <div class="relative py-8 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-b from-white to-slate-50 dark:from-slate-900 dark:to-slate-950 -z-10"></div>
                
                <div class="container px-4 py-16 mx-auto">
                    <div class="mb-16 text-center">
                        <span class="inline-block px-4 py-1 mb-3 text-sm font-medium rounded-full bg-primary-50 text-primary-700 dark:bg-primary-900/30 dark:text-primary-300">Latest Updates</span>
                        <h2 class="mb-4 text-3xl font-bold text-slate-900 dark:text-white">Insights & Tech News</h2>
                        <p class="max-w-2xl mx-auto text-lg text-gray-600 dark:text-gray-300">Stay updated with the latest trends, tips, and insights from the genz tech team.</p>
                    </div>
                    
                    <!-- Blog Showcase -->
                    <div class="mb-16">
                        <livewire:super-duper.blog-section-slider
                            :limit="6"
                            :featured-only="false"
                            :category-slug="null"
                        />
                    </div>
                    
                    <!-- Banner Showcase -->
                    <div class="pt-8 border-t border-background-light dark:border-primary-700">
                        <div class="mb-10 text-center">
                            <span class="inline-block px-4 py-1 mb-3 text-sm font-medium rounded-full bg-primary-50 text-primary-700 dark:bg-primary-900/30 dark:text-primary-300">Featured Projects</span>
                            <h2 class="mb-4 text-3xl font-bold text-slate-900 dark:text-white">Discover Our Work</h2>
                            <p class="max-w-2xl mx-auto text-lg text-gray-600 dark:text-gray-300">See how we've helped businesses transform through robust digital solutions</p>
                        </div>
                        
                        <div class="max-w-5xl mx-auto overflow-hidden bg-white rounded-lg shadow-lg">
                            <x-superduper.components.banner />
                        </div>
                    </div>
                </div>
                
                <div class="absolute bottom-0 left-0 right-0 h-16 bg-white dark:bg-gray-800 -z-10" style="clip-path: polygon(0 100%, 100% 0, 100% 100%, 0% 100%);"></div>
            </div>

            <div class="container px-4 py-16 mx-auto">
                <div class="mb-16 text-center">
                    <h2 class="mb-4 text-3xl font-bold text-slate-900 dark:text-dark">Frequently Asked Questions</h2>
                    <p class="max-w-2xl mx-auto text-lg text-slate-600 dark:text-dark-300">Get answers to the most common questions about our services and process</p>
                </div>
                
                <div class="max-w-4xl mx-auto divide-y divide-gray-200 dark:text-dark-700">
                    <div class="py-6" x-data="{ open: false }">
                        <div class="flex items-center justify-between cursor-pointer" @click="open = !open">
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-dark">What services does genz tech offer?</h3>
                            <svg class="w-5 h-5 transition-transform text-slate-900 dark:text-dark" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                        <div class="mt-4" x-show="open" x-collapse>
                            <p class="text-gray-700 dark:text-dark-300">We offer a wide range of IT services including custom software development, IT consulting, managed infrastructure support, cloud migration, and comprehensive web ecosystems designed to scale with your business.</p>
                        </div>
                    </div>
                    
                    <div class="py-6" x-data="{ open: false }">
                        <div class="flex items-center justify-between cursor-pointer" @click="open = !open">
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-dark">Do you build custom software tailored to our industry?</h3>
                            <svg class="w-5 h-5 transition-transform text-slate-900 dark:text-dark" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                        <div class="mt-4" x-show="open" x-collapse>
                            <p class="text-gray-700 dark:text-dark-300">Absolutely! Our team of experienced developers specializes in creating custom software solutions that perfectly align with your specific industry requirements and operational workflows.</p>
                        </div>
                    </div>
                    
                    <div class="py-6" x-data="{ open: false }">
                        <div class="flex items-center justify-between cursor-pointer" @click="open = !open">
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-dark">How do we start a project with genz tech?</h3>
                            <svg class="w-5 h-5 transition-transform text-slate-900 dark:text-dark" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                        <div class="mt-4" x-show="open" x-collapse>
                            <p class="text-gray-700 dark:text-dark-300">You can start by contacting us through our form or reaching out directly. We will schedule an initial consultation to understand your needs, followed by a detailed proposal and timeline for your project.</p>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>

</x-superduper.main>
