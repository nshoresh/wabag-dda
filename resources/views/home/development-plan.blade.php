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
                <li>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <a href="/about-wabag-dda" class="ml-1 text-gray-600 hover:text-wabag-blue transition-colors md:ml-2">About Wabag DDA</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-wabag-blue font-medium md:ml-2">Development Plans</span>
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
                        <p class="lead">The Wabag District Development Authority has established comprehensive development plans to guide our district's growth and service delivery over the coming years.</p>

                        <p>These plans align with national and provincial development strategies while addressing the unique needs of Wabag communities.</p>

                        <h2 id="current-projects" class="text-2xl font-serif font-bold text-wabag-brown mt-8 mb-4">Current Development Projects</h2>
                        <p>Our district is currently implementing several key projects across priority sectors:</p>

                        <div class="grid md:grid-cols-2 gap-6 my-6">
                            <!-- Project Card 1 -->
                            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow border border-gray-200">
                                <div class="bg-wabag-blue h-2"></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-serif font-bold text-dark mb-2">Road Infrastructure Upgrade</h3>
                                    <p class="text-gray-600 mb-4">Rehabilitation of major district roads to improve connectivity and economic activity.</p>
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-wabag-green">Implementation</span>
                                        <span class="text-sm text-gray-500">Due: Q4 2023</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Card 2 -->
                            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow border border-gray-200">
                                <div class="bg-wabag-green h-2"></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-serif font-bold text-dark mb-2">School Facilities Program</h3>
                                    <p class="text-gray-600 mb-4">Construction and renovation of primary and secondary schools across the district.</p>
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-wabag-blue">Planning</span>
                                        <span class="text-sm text-gray-500">Due: Q1 2024</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Card 3 -->
                            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow border border-gray-200">
                                <div class="bg-wabag-red h-2"></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-serif font-bold text-dark mb-2">Health Center Expansion</h3>
                                    <p class="text-gray-600 mb-4">Upgrading rural health facilities to improve access to medical services.</p>
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-wabag-yellow">Design Phase</span>
                                        <span class="text-sm text-gray-500">Due: Q2 2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 id="implementation-milestones" class="text-2xl font-serif font-bold text-wabag-brown mt-8 mb-4">Implementation Milestones</h2>
                        <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-serif font-medium text-gray-500 uppercase tracking-wider">Milestone</th>
                                            <th class="px-6 py-3 text-left text-xs font-serif font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                            <th class="px-6 py-3 text-left text-xs font-serif font-medium text-gray-500 uppercase tracking-wider">Target Date</th>
                                            <th class="px-6 py-3 text-left text-xs font-serif font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap font-medium text-dark">Project Approval</td>
                                            <td class="px-6 py-4 text-gray-600">Final approval of 2023 development projects</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-600">Mar 15, 2023</td>
                                            <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 py-1 text-sm rounded-full bg-wabag-green bg-opacity-20 text-wabag-green">Completed</span></td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap font-medium text-dark">Contractor Selection</td>
                                            <td class="px-6 py-4 text-gray-600">Procurement process for infrastructure projects</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-600">Jun 30, 2023</td>
                                            <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 py-1 text-sm rounded-full bg-wabag-blue bg-opacity-20 text-wabag-blue">In Progress</span></td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap font-medium text-dark">Mid-Year Review</td>
                                            <td class="px-6 py-4 text-gray-600">Assessment of project implementation progress</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-600">Aug 31, 2023</td>
                                            <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 py-1 text-sm rounded-full bg-gray-100 text-gray-800">Pending</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <h2 id="strategic-roadmap" class="text-2xl font-serif font-bold text-wabag-brown mt-8 mb-4">Five-Year Strategic Roadmap</h2>
                        <div class="relative">
                            <!-- Timeline line -->
                            <div class="absolute left-4 h-full w-0.5 bg-gray-200 md:left-1/2 md:-ml-1"></div>

                            <!-- Timeline items -->
                            <div class="space-y-8">
                                <!-- Item 1 -->
                                <div class="relative flex md:items-center">
                                    <div class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-wabag-blue text-white z-10 md:mx-auto">
                                        1
                                    </div>
                                    <div class="flex-grow ml-6 md:ml-16 md:mr-16 md:flex md:items-center">
                                        <div class="bg-white p-6 rounded-lg shadow-md md:w-full border border-gray-200">
                                            <h3 class="text-xl font-serif font-bold text-dark">2023 - Infrastructure Development</h3>
                                            <p class="mt-2 text-gray-600">Focus on road networks, bridges, and public buildings to improve district connectivity and services.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item 2 -->
                                <div class="relative flex md:items-center">
                                    <div class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-wabag-green text-white z-10 md:mx-auto">
                                        2
                                    </div>
                                    <div class="flex-grow ml-6 md:ml-16 md:mr-16 md:flex md:items-center">
                                        <div class="bg-white p-6 rounded-lg shadow-md md:w-full border border-gray-200">
                                            <h3 class="text-xl font-serif font-bold text-dark">2024 - Education & Health</h3>
                                            <p class="mt-2 text-gray-600">Expansion of school facilities and health centers to improve access to essential services.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item 3 -->
                                <div class="relative flex md:items-center">
                                    <div class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-wabag-red text-white z-10 md:mx-auto">
                                        3
                                    </div>
                                    <div class="flex-grow ml-6 md:ml-16 md:mr-16 md:flex md:items-center">
                                        <div class="bg-white p-6 rounded-lg shadow-md md:w-full border border-gray-200">
                                            <h3 class="text-xl font-serif font-bold text-dark">2025-2027 - Economic Growth</h3>
                                            <p class="mt-2 text-gray-600">Initiatives to support local businesses, agriculture, and tourism for sustainable economic development.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-wabag-yellow bg-opacity-10 p-6 rounded-xl border-l-8 border-wabag-yellow my-8">
                            <h3 class="text-xl font-serif font-bold text-wabag-brown mb-2">Community Participation</h3>
                            <p>All development plans incorporate input from local communities through ward planning committees and public consultations to ensure they address real needs.</p>
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
                                    <a href="#current-projects" class="flex items-center text-wabag-blue hover:text-wabag-red transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-yellow" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Current Projects
                                    </a>
                                </li>
                                <li>
                                    <a href="#implementation-milestones" class="flex items-center text-wabag-blue hover:text-wabag-red transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-yellow" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Implementation Milestones
                                    </a>
                                </li>
                                <li>
                                    <a href="#strategic-roadmap" class="flex items-center text-wabag-blue hover:text-wabag-red transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-yellow" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Strategic Roadmap
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Documents -->
                        <div class="bg-gray-50 p-6 rounded-lg shadow-sm border border-gray-200">
                            <h3 class="text-xl font-serif font-bold text-wabag-blue mb-4">Plan Documents</h3>
                            <ul class="space-y-3">
                                <li>
                                    <a href="#" class="flex items-center text-wabag-blue hover:text-wabag-red transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-green" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/>
                                        </svg>
                                        Five-Year Development Plan 2023-2027
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center text-wabag-blue hover:text-wabag-red transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-green" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/>
                                        </svg>
                                        Annual Implementation Plan 2023
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center text-wabag-blue hover:text-wabag-red transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-green" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/>
                                        </svg>
                                        Project Progress Reports
                                    </a>
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
