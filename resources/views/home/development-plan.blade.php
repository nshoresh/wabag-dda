@extends('layouts.app')

@section('title', 'Development Plans - Wabag District Development Authority')

@section('breadcrumb')
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center text-sm text-gray-600">
            <a href="/" class="hover:text-wabag-blue">Home</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="text-wabag-blue font-medium">Development Plans</span>
        </div>
    </div>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-wabag-green to-wabag-blue text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-3xl md:text-5xl font-serif font-bold mb-6">Development Plans</h1>
            <p class="text-xl max-w-3xl mx-auto">Strategic roadmap for sustainable development in Wabag District</p>
        </div>
    </section>

    <!-- Main Content with Sidebar -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Main Content -->
                <div class="lg:w-2/3">
                    <div class="prose lg:prose-lg max-w-none">
                        <p class="lead">The Wabag District Development Authority has established comprehensive development plans in collaboration with provincial administration and donor partners to guide our district's growth and service delivery.</p>

                        <h2 id="partnerships" class="text-2xl font-serif font-bold text-wabag-brown mt-8 mb-4">Development Partners</h2>
                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-200 mb-8">
                            <h3 class="text-xl font-serif font-bold text-wabag-blue mb-4">Key Donor Agencies</h3>
                            <div class="flex flex-wrap gap-3">
                                <span class="px-3 py-1 bg-white rounded-full shadow-sm text-sm border border-gray-200">AFFP</span>
                                <span class="px-3 py-1 bg-white rounded-full shadow-sm text-sm border border-gray-200">AIB</span>
                                <span class="px-3 py-1 bg-white rounded-full shadow-sm text-sm border border-gray-200">IFC</span>
                                <span class="px-3 py-1 bg-white rounded-full shadow-sm text-sm border border-gray-200">AUS-AID</span>
                                <span class="px-3 py-1 bg-white rounded-full shadow-sm text-sm border border-gray-200">ADB</span>
                                <span class="px-3 py-1 bg-white rounded-full shadow-sm text-sm border border-gray-200">EU</span>
                                <span class="px-3 py-1 bg-white rounded-full shadow-sm text-sm border border-gray-200">UNDP</span>
                                <span class="px-3 py-1 bg-white rounded-full shadow-sm text-sm border border-gray-200">WORLD BANK</span>
                                <span class="px-3 py-1 bg-white rounded-full shadow-sm text-sm border border-gray-200">PORGERA</span>
                                <span class="px-3 py-1 bg-white rounded-full shadow-sm text-sm border border-gray-200">PNGSDP</span>
                                <span class="px-3 py-1 bg-white rounded-full shadow-sm text-sm border border-gray-200">NZODA</span>
                            </div>
                        </div>

                        <h2 id="program-areas" class="text-2xl font-serif font-bold text-wabag-brown mt-8 mb-4">Program Implementation Areas</h2>

                        <div class="grid md:grid-cols-2 gap-6 my-6">
                            <!-- Health & Education -->
                            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow border border-gray-200">
                                <div class="bg-wabag-blue h-2"></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-serif font-bold text-dark mb-3 flex items-center">
                                        <svg class="h-5 w-5 text-wabag-blue mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Health & Education
                                    </h3>
                                    <ul class="list-disc pl-5 space-y-2 text-gray-600">
                                        <li>Improve Health Outcomes</li>
                                        <li>Sustainable Population Growth</li>
                                        <li>Tertiary & Vocational Education Excellence</li>
                                        <li>Improved Early Childhood, Junior & High School Outcomes</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Economic Sector -->
                            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow border border-gray-200">
                                <div class="bg-wabag-green h-2"></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-serif font-bold text-dark mb-3 flex items-center">
                                        <svg class="h-5 w-5 text-wabag-green mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Economic Sector
                                    </h3>
                                    <ul class="list-disc pl-5 space-y-2 text-gray-600">
                                        <li>Enga SME & Agro Micro Finance Facility</li>
                                        <li>Commercial Agriculture Development</li>
                                        <li>Boosting Employment Initiatives</li>
                                        <li>Enga Business, Trade & Investment Office</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Environmental Sustainability -->
                            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow border border-gray-200">
                                <div class="bg-wabag-red h-2"></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-serif font-bold text-dark mb-3 flex items-center">
                                        <svg class="h-5 w-5 text-wabag-red mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Environmental Sustainability
                                    </h3>
                                    <ul class="list-disc pl-5 space-y-2 text-gray-600">
                                        <li>Enga Hydro Power Grid</li>
                                        <li>Solar Household Farm Pumps</li>
                                        <li>Climate Resilient Green Growth Projects</li>
                                        <li>70% Access to Electricity, Water and Sanitation</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Infrastructure Development -->
                            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow border border-gray-200">
                                <div class="bg-wabag-yellow h-2"></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-serif font-bold text-dark mb-3 flex items-center">
                                        <svg class="h-5 w-5 text-wabag-yellow mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Infrastructure Development
                                    </h3>
                                    <ul class="list-disc pl-5 space-y-2 text-gray-600">
                                        <li>Enga Infrastructure Plan implementation</li>
                                        <li>Establishment of Infrastructure Finance Facility</li>
                                        <li>Major projects completion by 2030</li>
                                        <li>Wabag-Wopenamado 4-lane Highway</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <h2 id="provincial-collaboration" class="text-2xl font-serif font-bold text-wabag-brown mt-8 mb-4">Provincial Collaboration</h2>
                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-200 mb-8">
                            <h3 class="text-xl font-serif font-bold text-wabag-blue mb-3">Provincial Budget Priority Committee (PBPC)</h3>
                            <p class="text-gray-600">Our development plans are coordinated with the Enga Provincial Administration through the PBPC to ensure alignment with provincial priorities and resource allocation.</p>
                        </div>

                        <div class="bg-wabag-yellow bg-opacity-10 p-6 rounded-xl border-l-8 border-wabag-yellow my-8">
                            <h3 class="text-xl font-serif font-bold text-wabag-brown mb-2">Implementation Framework</h3>
                            <p>All development projects are implemented through the Provincial Works & Transport Services (PWTS) and other specialized units to ensure quality and timely delivery.</p>
                        </div>
                    </div>
                </div>

                <!-- Right Sidebar -->
                <div class="lg:w-1/3">
                    <div class="sticky top-6 space-y-6">
                        <!-- Quick Links -->
                        <div class="bg-gray-50 p-6 rounded-lg shadow-sm border border-gray-200">
                            <h3 class="text-xl font-serif font-bold text-wabag-blue mb-4">Quick Links</h3>
                            <ul class="space-y-3">
                                <li>
                                    <a href="#partnerships" class="flex items-center text-wabag-blue hover:text-wabag-red transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-yellow" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Development Partners
                                    </a>
                                </li>
                                <li>
                                    <a href="#program-areas" class="flex items-center text-wabag-blue hover:text-wabag-red transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-yellow" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Program Areas
                                    </a>
                                </li>
                                <li>
                                    <a href="#provincial-collaboration" class="flex items-center text-wabag-blue hover:text-wabag-red transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-yellow" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Provincial Collaboration
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Key Projects -->
                        <div class="bg-gray-50 p-6 rounded-lg shadow-sm border border-gray-200">
                            <h3 class="text-xl font-serif font-bold text-wabag-blue mb-4">Key Infrastructure Projects</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-wabag-green mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Wabag-Wopenamado 4-lane Highway</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-wabag-green mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Enga Hydro Power Grid Expansion</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-wabag-green mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Rural Health Center Upgrades</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-wabag-green mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Vocational Training Centers</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Contact -->
                        <div class="bg-wabag-blue text-white p-6 rounded-lg">
                            <h3 class="text-xl font-serif font-bold mb-3">Development Questions?</h3>
                            <p class="mb-4">Contact our Planning & Monitoring Division for more information about our development plans.</p>
                            <a href="/contact" class="inline-block bg-wabag-yellow text-wabag-blue font-bold py-2 px-4 rounded hover:bg-yellow-500 transition">
                                Contact Planning Division
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
