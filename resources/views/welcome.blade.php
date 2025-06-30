@extends('layouts.app')

@section('title', 'Wabag District Development Authority')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-wabag-green to-wabag-blue text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-serif font-bold mb-6">Developing Wabag District Together</h1>
            <p class="text-xl max-w-3xl mx-auto mb-8">Empowering communities through sustainable development projects and initiatives.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/projects" class="bg-wabag-yellow hover:bg-yellow-600 text-wabag-brown font-bold py-3 px-6 rounded-lg text-center transition duration-300">Our Projects</a>
                <a href="/contact" class="bg-white hover:bg-gray-100 text-wabag-blue font-bold py-3 px-6 rounded-lg text-center transition duration-300">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-serif font-bold text-wabag-brown mb-4">About Wabag DDA</h2>
                    <div class="w-24 h-1 bg-wabag-yellow mb-6"></div>
                    <p class="text-lg mb-4">The Wabag District Development Authority is committed to improving the quality of life for all residents through strategic development initiatives, infrastructure projects, and community empowerment programs.</p>
                    <p class="text-lg mb-6">Our mission is to foster sustainable development that benefits current and future generations while preserving our cultural heritage and natural resources.</p>
                    <a href="/about" class="inline-block bg-wabag-red hover:bg-red-800 text-white font-bold py-2 px-6 rounded-lg transition duration-300">Learn More</a>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Wabag District" class="w-full h-auto rounded-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-serif font-bold text-wabag-brown mb-4">Current Projects</h2>
                <p class="text-lg max-w-2xl mx-auto">Discover our ongoing and completed development projects transforming communities across Wabag District.</p>
                <div class="w-24 h-1 bg-wabag-yellow mx-auto mt-4"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="bg-gradient-to-b from-wabag-blue to-wabag-green text-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-white bg-opacity-20 p-3 rounded-full mr-4">
                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-serif font-bold">Wabag Central Water Supply</h3>
                    </div>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start">
                            <svg class="h-4 w-4 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Installation of modern water treatment system</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-4 w-4 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>15,000 residents served</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-4 w-4 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Budget: K1,000,000</span>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <div class="flex justify-between text-sm mb-1">
                            <span>Progress</span>
                            <span>100% Complete</span>
                        </div>
                        <div class="w-full bg-white bg-opacity-20 rounded-full h-2">
                            <div class="bg-wabag-yellow h-2 rounded-full" style="width: 100%"></div>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-gradient-to-b from-wabag-red to-wabag-brown text-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-white bg-opacity-20 p-3 rounded-full mr-4">
                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-serif font-bold">Hospital Expansion</h3>
                    </div>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start">
                            <svg class="h-4 w-4 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>New wards and modern equipment</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-4 w-4 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>50,000 residents served</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-4 w-4 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Budget: K1,500,000</span>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <div class="flex justify-between text-sm mb-1">
                            <span>Progress</span>
                            <span>60% Complete</span>
                        </div>
                        <div class="w-full bg-white bg-opacity-20 rounded-full h-2">
                            <div class="bg-wabag-yellow h-2 rounded-full" style="width: 60%"></div>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-gradient-to-b from-wabag-green to-wabag-blue text-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-white bg-opacity-20 p-3 rounded-full mr-4">
                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-serif font-bold">Rural Roads Rehabilitation</h3>
                    </div>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start">
                            <svg class="h-4 w-4 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Upgrading rural roads network</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-4 w-4 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>25,000 residents served</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-4 w-4 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Budget: K2,000,000</span>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <div class="flex justify-between text-sm mb-1">
                            <span>Progress</span>
                            <span>30% Complete</span>
                        </div>
                        <div class="w-full bg-white bg-opacity-20 rounded-full h-2">
                            <div class="bg-wabag-yellow h-2 rounded-full" style="width: 30%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="/projects" class="inline-block bg-wabag-red hover:bg-red-800 text-white font-bold py-3 px-8 rounded-lg transition duration-300">View All Projects</a>
            </div>
        </div>
    </section>

    <!-- News & Updates -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-serif font-bold text-wabag-brown mb-4">News & Updates</h2>
                <p class="text-lg max-w-2xl mx-auto">Stay informed about our latest activities and announcements.</p>
                <div class="w-24 h-1 bg-wabag-yellow mx-auto mt-4"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- News 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Funding announcement" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <span>June 15, 2023</span>
                            <span class="mx-2">•</span>
                            <span class="text-wabag-red">Announcement</span>
                        </div>
                        <h3 class="text-xl font-bold text-wabag-blue mb-3">New Infrastructure Funding</h3>
                        <p class="text-gray-600 mb-4">The Wabag DDA has secured K5 million in additional funding for rural infrastructure projects across the district.</p>
                        <a href="#" class="text-wabag-red hover:text-red-800 font-medium inline-flex items-center">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- News 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1431540015161-0bf868a2d407?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Community meeting" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <span>May 28, 2023</span>
                            <span class="mx-2">•</span>
                            <span class="text-wabag-red">Event</span>
                        </div>
                        <h3 class="text-xl font-bold text-wabag-blue mb-3">Community Consultation</h3>
                        <p class="text-gray-600 mb-4">Public meetings scheduled to gather input on proposed Wabag Central Market redevelopment.</p>
                        <a href="#" class="text-wabag-red hover:text-red-800 font-medium inline-flex items-center">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- News 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="School construction" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <span>May 10, 2023</span>
                            <span class="mx-2">•</span>
                            <span class="text-wabag-red">Progress Report</span>
                        </div>
                        <h3 class="text-xl font-bold text-wabag-blue mb-3">Education Project Update</h3>
                        <p class="text-gray-600 mb-4">The district-wide school rehabilitation program is on track for August completion.</p>
                        <a href="#" class="text-wabag-red hover:text-red-800 font-medium inline-flex items-center">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="/news" class="inline-block border-2 border-wabag-red text-wabag-red hover:bg-wabag-red hover:text-white font-bold py-3 px-8 rounded-lg transition duration-300">View All News</a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-wabag-blue text-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <div class="p-6">
                    <div class="text-4xl font-serif font-bold mb-2">42</div>
                    <div class="text-wabag-yellow font-medium">Completed Projects</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-serif font-bold mb-2">18</div>
                    <div class="text-wabag-yellow font-medium">Ongoing Projects</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-serif font-bold mb-2">15</div>
                    <div class="text-wabag-yellow font-medium">Communities Served</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-serif font-bold mb-2">K28M</div>
                    <div class="text-wabag-yellow font-medium">Funds Invested</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden max-w-4xl mx-auto">
                <div class="md:flex">
                    <div class="md:w-1/2 bg-wabag-green p-8 text-white">
                        <h2 class="text-2xl font-serif font-bold mb-4">Contact Wabag DDA</h2>
                        <p class="mb-6">Have questions or want to learn more about our work? Reach out to our team.</p>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <svg class="h-6 w-6 text-wabag-yellow mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <div>
                                    <h3 class="font-bold">Phone</h3>
                                    <p>+675 547 1234</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg class="h-6 w-6 text-wabag-yellow mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <div>
                                    <h3 class="font-bold">Email</h3>
                                    <p>info@wabagdda.gov.pg</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg class="h-6 w-6 text-wabag-yellow mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <div>
                                    <h3 class="font-bold">Address</h3>
                                    <p>Wabag DDA Office, Wabag Town, Enga Province, PNG</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 p-8">
                        <h2 class="text-2xl font-serif font-bold text-wabag-blue mb-4">Send Us a Message</h2>
                        <form>
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                                <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-wabag-blue focus:border-transparent">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-wabag-blue focus:border-transparent">
                            </div>
                            <div class="mb-4">
                                <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                                <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-wabag-blue focus:border-transparent"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-wabag-red hover:bg-red-800 text-white font-bold py-3 px-4 rounded-lg transition duration-300">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
