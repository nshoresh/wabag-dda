@extends('layouts.app')

@section('title', 'CEO\'s Message - Wabag District Development Authority')

@section('breadcrumb')
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center text-sm text-gray-600">
            <a href="/" class="hover:text-wabag-blue">Home</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="text-wabag-blue font-medium">CEO's Message</span>
        </div>
    </div>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-wabag-green to-wabag-blue text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-5xl font-serif font-bold mb-6">Message from Our Chief Executive Officer</h2>
            <p class="text-xl max-w-3xl mx-auto">Leadership in District Development</p>
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
                        <a href="/about-us" class="ml-1 text-gray-600 hover:text-wabag-blue transition-colors md:ml-2">About Wabag DDA</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-wabag-blue font-medium md:ml-2">CEO's Message</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
    <!-- CEO's Message Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row gap-8">
                <!-- CEO's Photo -->
                <div class="md:w-1/3">
                    <div class="bg-white p-4 rounded-xl shadow-lg">
                        <!-- Add your CEO image here -->
                        <img src="{{ asset('images/about-us/hon-dr-lino-tom.jpg') }}"
                             alt="Mr. John Doe, Chief Executive Officer"
                             class="w-full h-auto rounded-lg">
                    </div>
                    <div class="mt-4 text-center">
                        <h3 class="text-xl font-bold text-wabag-blue">Mr. John Doe</h3>
                        <p class="text-gray-600">Chief Executive Officer</p>
                        <p class="text-gray-500 text-sm mt-1">Wabag District Development Authority</p>
                        <p class="text-gray-500 text-sm">Since 2020</p>
                        <div class="mt-3 flex justify-center space-x-4">
                            <a href="#" class="text-wabag-blue hover:text-wabag-red">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="#" class="text-wabag-blue hover:text-wabag-red">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Message Content -->
                <div class="md:w-2/3">
                    <h2 class="text-3xl font-serif font-bold text-wabag-brown mb-6">Implementing Our Development Vision</h2>

                    <div class="prose text-gray-700">
                        <p class="mb-4">To the people of Wabag District,</p>

                        <p class="mb-4">As Chief Executive Officer of the Wabag DDA, I am honored to lead the administration that brings our Member's vision to life. Our team works diligently every day to ensure that development projects are implemented efficiently, transparently, and with maximum benefit to our communities.</p>

                        <div class="bg-wabag-yellow bg-opacity-10 p-6 rounded-xl border-l-8 border-wabag-yellow mb-6">
                            <h3 class="text-xl font-serif font-bold text-wabag-brown mb-3">Our Operational Priorities</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                    <span>Effective project management and timely delivery</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                    <span>Prudent financial management of district funds</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                    <span>Strict compliance with government procurement processes</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-wabag-yellow mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                    <span>Community engagement in project planning</span>
                                </li>
                            </ul>
                        </div>

                        <p class="mb-6">The projects showcased on this platform represent our commitment to accountability and results. We monitor all projects closely to ensure they meet quality standards and deliver promised benefits to our people.</p>

                        <div class="bg-gradient-to-b from-wabag-blue to-wabag-green text-white p-6 rounded-xl shadow-lg mb-6">
                            <div class="flex items-center mb-3">
                                <div class="bg-white bg-opacity-20 p-2 rounded-full mr-4">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                </div>
                                <h3 class="text-xl font-serif font-bold">Quality Assurance</h3>
                            </div>
                            <div class="grid grid-cols-2 gap-4 text-sm">
                                <div>
                                    <div class="text-2xl font-bold">100%</div>
                                    <div>Project Compliance</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold">24</div>
                                    <div>Community Consultations</div>
                                </div>
                            </div>
                        </div>

                        <p class="mb-6">I invite you to review our work and provide feedback through the proper channels. Together with our Member and through the dedication of our public servants, we will continue to transform Wabag District into a model of effective local governance.</p>

                        <div class="border-t border-gray-200 pt-6">
                            <p class="font-medium text-wabag-brown">In service to our district,</p>
                            <div class="mt-4">
                                <!-- Add your CEO signature image here -->
                                <img src="{{ asset('path/to/your/ceo-signature.png') }}" alt="Signature" class="h-12">
                                <p class="mt-2 text-wabag-brown">Mr. John Doe</p>
                                <p class="text-gray-600">Chief Executive Officer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Operational Highlights -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-serif font-bold text-wabag-brown mb-8 text-center">Operational Highlights</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-wabag-blue mb-3">
                        <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Projects Completed</h3>
                    <p class="text-gray-600">42 projects delivered on time and within budget</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-wabag-blue mb-3">
                        <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Timely Reporting</h3>
                    <p class="text-gray-600">100% compliance with quarterly reporting requirements</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-wabag-blue mb-3">
                        <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Community Engagement</h3>
                    <p class="text-gray-600">24 public consultations conducted this year</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-12 bg-wabag-blue text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-serif font-bold mb-4">Transparency Portal</h2>
            <p class="text-blue-100 max-w-2xl mx-auto mb-8">Access our public documents, reports, and financial statements through our transparency portal.</p>
            <a href="/transparency" class="inline-block bg-white hover:bg-blue-50 text-wabag-blue font-bold py-3 px-8 rounded-lg transition duration-300">View Public Documents</a>
        </div>
    </section>
@endsection
