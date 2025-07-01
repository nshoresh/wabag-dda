@extends('layouts.app')

@section('title', 'Executive Services - Wabag District Development Authority')

@section('breadcrumb')
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center text-sm text-gray-600">
            <a href="/" class="hover:text-wabag-blue">Home</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="text-wabag-blue font-medium">Executive Services</span>
        </div>
    </div>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-wabag-green to-wabag-blue text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-3xl md:text-5xl font-serif font-bold mb-6">Administrative Services</h1>
            <p class="text-xl max-w-3xl mx-auto">Supporting effective governance and administration for Wabag District</p>
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
                        <span class="ml-1 text-wabag-blue font-medium md:ml-2">Administration</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
    <!-- Main Content with Sidebar -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Main Content -->
                <div class="lg:w-2/3">
                    <div class="prose lg:prose-lg max-w-none">
                        <p class="lead">Every day, the Executive Services is faced with scores of decisions, each with important consequences for working families. We provide the Executive Service with the support needed to govern effectively.</p>

                        <p>The Executive Services has responsibility for tasks ranging from communicating leadership's message to the Enga people to promoting our development interests at provincial and national levels.</p>

                        <h2 id="executive-authority" class="text-2xl font-serif font-bold text-wabag-brown mt-8 mb-4">Executive Authority</h2>
                        <p>The power of the Executive Branch is vested in the <strong>Provincial Administrator of Enga</strong>, who acts as the chief administrator for the province. The Provincial Administrator is responsible for:</p>

                        <ul class="list-disc pl-5 space-y-2 my-4">
                            <li>Implementing and enforcing development plans written by the Provincial Executive Council</li>
                            <li>Coordinating with the National Government of Papua New Guinea</li>
                            <li>Appointing the heads of various administrative agencies</li>
                        </ul>

                        <div class="bg-wabag-yellow bg-opacity-10 p-6 rounded-xl border-l-8 border-wabag-yellow my-8">
                            <h3 class="text-xl font-serif font-bold text-wabag-brown mb-2">Deputy Provincial Administrator</h3>
                            <p>The Deputy Provincial Administrator is also part of the Executive Services, ready to assume the Provincial Administrator's responsibilities should the need arise.</p>
                        </div>

                        <h2 id="administrative-structure" class="text-2xl font-serif font-bold text-wabag-brown mt-8 mb-4">Administrative Structure</h2>
                        <p>Administrative agencies under the Executive Services are tasked with the daily enforcement and management of government operations. These departments and agencies have varied missions and responsibilities, covering multiple sectors.</p>

                        <h3 id="key-sectors" class="text-xl font-serif font-bold text-wabag-blue mt-8 mb-4">Key Sectors</h3>
                        <div class="grid md:grid-cols-2 gap-6 my-6">
                            <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                                <h4 class="font-bold text-lg mb-3 flex items-center">
                                    <svg class="h-5 w-5 text-wabag-green mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    District Administration
                                </h4>
                                <p class="text-gray-600">Overseeing all district operations and coordinating between departments.</p>
                            </div>
                            <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                                <h4 class="font-bold text-lg mb-3 flex items-center">
                                    <svg class="h-5 w-5 text-wabag-green mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    Finance & Treasury
                                </h4>
                                <p class="text-gray-600">Managing district finances, budgets, and financial reporting.</p>
                            </div>
                            <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                                <h4 class="font-bold text-lg mb-3 flex items-center">
                                    <svg class="h-5 w-5 text-wabag-green mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    Planning & Development
                                </h4>
                                <p class="text-gray-600">Strategic planning and development project coordination.</p>
                            </div>
                        </div>

                        <h3 id="operational-units" class="text-xl font-serif font-bold text-wabag-red mt-8 mb-4">Operational Units</h3>
                        <div class="grid md:grid-cols-2 gap-6 my-6">
                            <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                                <h4 class="font-bold text-lg mb-3 flex items-center">
                                    <svg class="h-5 w-5 text-wabag-red mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    Works & Infrastructure
                                </h4>
                                <p class="text-gray-600">Overseeing construction and maintenance of district infrastructure.</p>
                            </div>
                            <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                                <h4 class="font-bold text-lg mb-3 flex items-center">
                                    <svg class="h-5 w-5 text-wabag-red mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    Community Development
                                </h4>
                                <p class="text-gray-600">Programs and initiatives for community empowerment.</p>
                            </div>
                            <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                                <h4 class="font-bold text-lg mb-3 flex items-center">
                                    <svg class="h-5 w-5 text-wabag-red mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    Social Services
                                </h4>
                                <p class="text-gray-600">Education, health, and welfare services for residents.</p>
                            </div>
                        </div>

                        <h2 id="current-leadership" class="text-2xl font-serif font-bold text-wabag-brown mt-8 mb-4">Current Leadership</h2>

                        <div class="grid md:grid-cols-2 gap-6 my-8">
                            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm">
                                <div class="bg-wabag-blue h-32 flex items-center justify-center">
                                    <img src="https://via.placeholder.com/150x150?text=Provincial+Administrator" alt="Provincial Administrator" class="h-24 w-24 rounded-full object-cover border-4 border-white">
                                </div>
                                <div class="p-6 text-center">
                                    <h3 class="text-xl font-bold">Hon. John Doe</h3>
                                    <p class="text-wabag-blue font-semibold mb-2">Provincial Administrator</p>
                                    <p class="text-gray-600 text-sm">Chief executive officer of Enga Province</p>
                                </div>
                            </div>

                            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm">
                                <div class="bg-wabag-red h-32 flex items-center justify-center">
                                    <img src="https://via.placeholder.com/150x150?text=Deputy+Administrator" alt="Deputy Provincial Administrator" class="h-24 w-24 rounded-full object-cover border-4 border-white">
                                </div>
                                <div class="p-6 text-center">
                                    <h3 class="text-xl font-bold">Mr. Michael Johnson</h3>
                                    <p class="text-wabag-red font-semibold mb-2">Deputy Provincial Administrator</p>
                                    <p class="text-gray-600 text-sm">Supporting the Provincial Administrator in all executive functions</p>
                                </div>
                            </div>
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
                                    <a href="#executive-authority" class="flex items-center text-wabag-blue hover:text-wabag-red transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-yellow" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Executive Authority
                                    </a>
                                </li>
                                <li>
                                    <a href="#administrative-structure" class="flex items-center text-wabag-blue hover:text-wabag-red transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-yellow" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Administrative Structure
                                    </a>
                                </li>
                                <li>
                                    <a href="#current-leadership" class="flex items-center text-wabag-blue hover:text-wabag-red transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-yellow" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Current Leadership
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Key Sectors Navigation -->
                        <div class="bg-gray-50 p-6 rounded-lg shadow-sm border border-gray-200">
                            <h3 class="text-xl font-serif font-bold text-wabag-blue mb-4">Key Sectors</h3>
                            <ul class="space-y-3">
                                <li>
                                    <a href="#key-sectors" class="flex items-center text-wabag-blue hover:text-wabag-red transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-green" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        All Key Sectors
                                    </a>
                                </li>
                                <li>
                                    <a href="#district-administration" class="flex items-center text-wabag-blue hover:text-wabag-red transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-green" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        District Administration
                                    </a>
                                </li>
                                <li>
                                    <a href="#finance-treasury" class="flex items-center text-wabag-blue hover:text-wabag-red transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-green" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Finance & Treasury
                                    </a>
                                </li>
                                <li>
                                    <a href="#planning-development" class="flex items-center text-wabag-blue hover:text-wabag-red transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-green" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Planning & Development
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Operational Units Navigation -->
                        <div class="bg-gray-50 p-6 rounded-lg shadow-sm border border-gray-200">
                            <h3 class="text-xl font-serif font-bold text-wabag-red mb-4">Operational Units</h3>
                            <ul class="space-y-3">
                                <li>
                                    <a href="#operational-units" class="flex items-center text-wabag-blue hover:text-wabag-red transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-red" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        All Operational Units
                                    </a>
                                </li>
                                <li>
                                    <a href="#works-infrastructure" class="flex items-center text-wabag-blue hover:text-wabag-red transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-red" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Works & Infrastructure
                                    </a>
                                </li>
                                <li>
                                    <a href="#community-development" class="flex items-center text-wabag-blue hover:text-wabag-red transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-red" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Community Development
                                    </a>
                                </li>
                                <li>
                                    <a href="#social-services" class="flex items-center text-wabag-blue hover:text-wabag-red transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-red" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Social Services
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Contact Card -->{{--
                        <div class="bg-wabag-blue text-white p-6 rounded-lg">
                            <h3 class="text-xl font-serif font-bold mb-3">Need Assistance?</h3>
                            <p class="mb-4">Contact the Executive Services office for inquiries or support.</p>
                            <a href="#contact" class="inline-block bg-wabag-yellow text-wabag-blue font-bold py-2 px-4 rounded hover:bg-yellow-500 transition">
                                Contact Us
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->{{--
    <section id="contact" class="py-12 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="grid md:grid-cols-2">
                    <div class="bg-wabag-brown text-white p-8 md:p-12">
                        <h2 class="text-2xl font-serif font-bold mb-4">Contact Executive Services</h2>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="bg-wabag-yellow text-wabag-brown p-2 rounded-full mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold">Email</p>
                                    <p>executive@wabagdda.gov.pg</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-wabag-yellow text-wabag-brown p-2 rounded-full mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold">Website</p>
                                    <p>www.wabagdda.gov.pg/executive</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-wabag-yellow text-wabag-brown p-2 rounded-full mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold">Address</p>
                                    <p>Provincial Administration Headquarters, Wabag Town, Enga Province</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 md:p-12">
                        <h3 class="text-xl font-serif font-bold text-wabag-blue mb-4">Send a Message</h3>
                        <form class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                                <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wabag-yellow focus:border-transparent">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wabag-yellow focus:border-transparent">
                            </div>
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                                <select id="subject" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wabag-yellow focus:border-transparent">
                                    <option>General Inquiry</option>
                                    <option>Appointment Request</option>
                                    <option>Policy Matter</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                                <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wabag-yellow focus:border-transparent"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-wabag-yellow text-wabag-brown font-bold py-2 px-4 rounded-md hover:bg-yellow-500 transition">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
@endsection
