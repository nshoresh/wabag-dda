@extends('layouts.app')

@section('title', 'About Wabag DDA - Wabag District Development Authority')

@section('breadcrumb')
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center text-sm text-gray-600">
            <a href="/" class="hover:text-wabag-blue">Home</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="text-wabag-blue font-medium">About Wabag DDA</span>
        </div>
    </div>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-wabag-green to-wabag-blue text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-5xl font-serif font-bold mb-6">About Wabag DDA</h2>
            <p class="text-xl max-w-3xl mx-auto">Guiding Wabag District towards a future of health, wealth, wisdom, and education through honest governance and community partnership.</p>
        </div>
    </section>

    <div class="container mx-auto px-6 py-4">
        <nav class="flex items-center text-sm" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center text-gray-600 hover:text-wabag-blue transition-colors">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                        Home
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-wabag-blue font-medium md:ml-2">About Wabag DDA</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <!-- Vision/Mission Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-wabag-yellow bg-opacity-10 p-6 rounded-xl border-l-8 border-wabag-yellow">
                    <h3 class="text-2xl font-serif font-bold text-wabag-brown mb-4">Our Vision</h3>
                    <p class="text-lg">To empower the people of Wabag District to become <span class="font-semibold">Healthy, Wealthy, Wise, and Educated</span> by creating a fair and inclusive platform where honesty and hard work are the foundations for success.</p>
                </div>
                <div class="bg-wabag-red bg-opacity-10 p-6 rounded-xl border-l-8 border-wabag-red">
                    <h3 class="text-2xl font-serif font-bold text-wabag-brown mb-4">Our Mission</h3>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-wabag-red mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Deliver sustainable development through aligned policies, infrastructure, and community engagement.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-wabag-red mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Promote universal quality education and agriculture-based SMEs to drive economic growth.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-wabag-red mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Foster transparency, accountability, and equitable service delivery.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Background Section with LLG Map -->
    <section class="py-10 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-serif font-bold text-wabag-brown mb-6">Wabag District</h2>

            <div class="flex flex-col md:flex-row gap-6">
                <div class="md:w-1/2">
                    <p class="mb-4">Wabag District, located in Enga Province, Papua New Guinea, is home to approximately 100,000 people across three Local Level Governments (LLGs):</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-wabag-green mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span class="font-medium">Wabag Urban</span> - Provincial capital and administrative center
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-wabag-green mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span class="font-medium">Wabag Rural</span> - Surrounding villages and communities
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-wabag-green mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span class="font-medium">Maramuni LLG</span> - Remote highlands area
                        </li>
                    </ul>
                    <p class="text-gray-700">The district hosts the provincial capital and key government institutions, yet faces challenges such as difficult terrain, limited infrastructure, and socio-economic disparities.</p>
                </div>

                <!-- LLG Map Section -->
                <div class="md:w-1/2 bg-white p-4 rounded-lg shadow-md">
                    <div class="relative h-80 w-full rounded-md overflow-hidden bg-gray-100">
                        <div id="wabagMap" class="absolute inset-0 z-0">
                            <img src="https://via.placeholder.com/600x400?text=Wabag+District+Map" alt="Wabag District Map" class="w-full h-full object-cover opacity-30" id="mapFallback">
                        </div>
                        <div class="absolute inset-0 flex items-center justify-center z-10" id="mapLoading">
                            <div class="text-center p-4 bg-white bg-opacity-80 rounded-lg">
                                <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-wabag-blue mx-auto mb-2"></div>
                                <p class="text-gray-700">Loading map...</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 flex flex-wrap gap-2 justify-center text-xs">
                        <div class="flex items-center px-2 py-1 bg-gray-50 rounded">
                            <span class="inline-block w-2 h-2 bg-blue-600 mr-1 rounded-full"></span>
                            <span>Wabag Urban</span>
                        </div>
                        <div class="flex items-center px-2 py-1 bg-gray-50 rounded">
                            <span class="inline-block w-2 h-2 bg-green-600 mr-1 rounded-full"></span>
                            <span>Wabag Rural</span>
                        </div>
                        <div class="flex items-center px-2 py-1 bg-gray-50 rounded">
                            <span class="inline-block w-2 h-2 bg-red-600 mr-1 rounded-full"></span>
                            <span>Maramuni</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Development Pillars -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-serif font-bold text-wabag-brown mb-6">Key Development Pillars</h2>
            <p class="text-lg max-w-2xl text-gray-700 mb-8">Our comprehensive approach to sustainable development across critical sectors</p>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Education -->
                <div class="bg-gradient-to-b from-wabag-blue to-wabag-green text-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-white bg-opacity-20 p-3 rounded-full mr-4">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        </div>
                        <h3 class="text-xl font-serif font-bold">Education</h3>
                    </div>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-start">
                            <svg class="h-4 w-4 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Increase enrollment (target: 80% by 2022)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-4 w-4 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Construct new schools</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-4 w-4 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Partner with churches</span>
                        </li>
                    </ul>
                </div>

                <!-- Health -->
                <div class="bg-gradient-to-b from-wabag-red to-wabag-brown text-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-white bg-opacity-20 p-3 rounded-full mr-4">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <h3 class="text-xl font-serif font-bold">Health</h3>
                    </div>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-start">
                            <svg class="h-4 w-4 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Upgrade facilities</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-4 w-4 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Reduce mortality rates</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-4 w-4 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Combat diseases</span>
                        </li>
                    </ul>
                </div>

                <!-- Infrastructure -->
                <div class="bg-gradient-to-b from-wabag-brown to-wabag-red text-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-white bg-opacity-20 p-3 rounded-full mr-4">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h3 class="text-xl font-serif font-bold">Infrastructure</h3>
                    </div>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-start">
                            <svg class="h-4 w-4 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Expand road network</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-4 w-4 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Construct bridges</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-4 w-4 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Improve utilities</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Governance Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-serif font-bold text-wabag-brown mb-6">Governance & Leadership</h2>

            <div class="flex flex-col md:flex-row gap-8">
                <div class="md:w-1/2">
                    <h3 class="text-xl font-serif font-bold text-wabag-blue mb-4">Leadership Structure</h3>
                    <div class="space-y-4">
                        <div class="flex items-start p-4 bg-white rounded-lg shadow-sm">
                            <div class="bg-wabag-red text-white rounded-full h-10 w-10 flex items-center justify-center mr-4 flex-shrink-0">1</div>
                            <div>
                                <h4 class="font-bold">Chairman</h4>
                                <p class="text-sm text-gray-600">Hon. Dr. Lino Tom, MP (Wabag Member)</p>
                            </div>
                        </div>
                        <div class="flex items-start p-4 bg-white rounded-lg shadow-sm">
                            <div class="bg-wabag-red text-white rounded-full h-10 w-10 flex items-center justify-center mr-4 flex-shrink-0">2</div>
                            <div>
                                <h4 class="font-bold">LLG Presidents</h4>
                                <p class="text-sm text-gray-600">Wabag Urban, Wabag Rural, Maramuni</p>
                            </div>
                        </div>
                        <div class="flex items-start p-4 bg-white rounded-lg shadow-sm">
                            <div class="bg-wabag-red text-white rounded-full h-10 w-10 flex items-center justify-center mr-4 flex-shrink-0">3</div>
                            <div>
                                <h4 class="font-bold">Community Representatives</h4>
                                <p class="text-sm text-gray-600">Women, Youth, Church, Business</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <h3 class="text-xl font-serif font-bold text-wabag-blue mb-4">Strategic Goals</h3>
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="bg-wabag-yellow bg-opacity-20 p-2 rounded-lg mr-4">
                                    <svg class="h-5 w-5 text-wabag-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold">National Alignment</h4>
                                    <p class="text-sm text-gray-600">Implement PNG's Vision 2050 and development plans</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-wabag-green bg-opacity-20 p-2 rounded-lg mr-4">
                                    <svg class="h-5 w-5 text-wabag-green" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold">Rural Empowerment</h4>
                                    <p class="text-sm text-gray-600">Inclusive policies and infrastructure development</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-wabag-red bg-opacity-20 p-2 rounded-lg mr-4">
                                    <svg class="h-5 w-5 text-wabag-red" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold">Transparency</h4>
                                    <p class="text-sm text-gray-600">Ensure accountability in all projects</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-12 bg-wabag-blue text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-serif font-bold mb-6">Contact Wabag DDA</h2>
            <div class="max-w-2xl mx-auto bg-white bg-opacity-10 p-8 rounded-xl">
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="text-left">
                        <h3 class="text-xl font-bold mb-4">Office Location</h3>
                        <p class="mb-6">Wabag District Headquarters<br>Enga Province, PNG</p>
                        <h3 class="text-xl font-bold mb-4">Contact Info</h3>
                        <p class="mb-2"><strong>Phone:</strong> +675 XXX XXXX</p>
                        <p><strong>Email:</strong> info@wabagdda.gov.pg</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-4">Send a Message</h3>
                        <form class="space-y-4">
                            <input type="text" placeholder="Your Name" class="w-full px-4 py-2 bg-white bg-opacity-10 border border-white border-opacity-30 rounded focus:outline-none focus:ring-2 focus:ring-wabag-yellow">
                            <input type="email" placeholder="Email Address" class="w-full px-4 py-2 bg-white bg-opacity-10 border border-white border-opacity-30 rounded focus:outline-none focus:ring-2 focus:ring-wabag-yellow">
                            <textarea placeholder="Your Message" rows="4" class="w-full px-4 py-2 bg-white bg-opacity-10 border border-white border-opacity-30 rounded focus:outline-none focus:ring-2 focus:ring-wabag-yellow"></textarea>
                            <button type="submit" class="w-full bg-wabag-yellow text-wabag-brown font-bold py-2 px-4 rounded hover:bg-yellow-500 transition">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
    <!-- Leaflet JS for interactive maps -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        try {
            // Initialize the map
            const map = L.map('wabagMap', {
                zoomControl: false,
                attributionControl: false
            }).setView([-5.4833, 143.7167], 10); // Wabag coordinates

            // Add base map layer
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Sample LLG boundary coordinates (should be replaced with actual GeoJSON)
            const llgBoundaries = {
                "Wabag Urban": {
                    color: "#3b82f6", // blue-600
                    coordinates: [[143.7183303342154,-5.489842254865053], [143.7183303342154,-5.494690784785703],
                    [143.72482128003338,-5.494690784785703], [143.72482128003338,-5.489842254865053]]
                },
                "Wabag Rural": {
                    color: "#16a34a", // green-600
                    coordinates: [[-5.50,143.68], [-5.52,143.72], [-5.48,143.75], [-5.45,143.73]]
                },
                "Maramuni": {
                    color: "#dc2626", // red-600
                    coordinates: [[-5.55,143.65], [-5.58,143.68], [-5.60,143.72], [-5.56,143.75]]
                }
            };

            // Add polygons for each LLG
            Object.entries(llgBoundaries).forEach(([name, data]) => {
                L.polygon(data.coordinates, {
                    color: data.color,
                    fillColor: data.color,
                    fillOpacity: 0.15,
                    weight: 2,
                    dashArray: '5,5'
                }).addTo(map)
                .bindPopup(`<b>${name} LLG</b><br>Population: ~${estimatePopulation(name)}`);
            });

            // Add district center marker
            L.marker([-5.4833, 143.7167], {
                icon: L.divIcon({
                    html: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#059669" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                          </svg>`,
                    className: '',
                    iconSize: [32, 32],
                    iconAnchor: [16, 32]
                })
            }).addTo(map)
            .bindPopup("<b>Wabag Town</b><br>District Headquarters")
            .openPopup();

            // Simple population estimator
            function estimatePopulation(llg) {
                const base = {
                    "Wabag Urban": 35000,
                    "Wabag Rural": 45000,
                    "Maramuni": 20000
                };
                return (base[llg] || 25000).toLocaleString();
            }

            // Hide loading spinner when map is ready
            document.getElementById('mapLoading').style.display = 'none';
            document.getElementById('mapFallback').style.opacity = '0';

            // Add zoom controls
            L.control.zoom({
                position: 'topright'
            }).addTo(map);

        } catch (error) {
            console.error("Map initialization failed:", error);
            document.getElementById('mapLoading').innerHTML = `
                <div class="text-center p-4 bg-white bg-opacity-90 rounded-lg">
                    <svg class="h-8 w-8 text-red-500 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                    <p class="text-gray-700">Map could not be loaded. Please try again later.</p>
                </div>
            `;
        }
    });
    </script>
    @endpush
@endsection
