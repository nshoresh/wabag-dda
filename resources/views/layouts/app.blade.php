<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Wabag District Development Authority</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('ep-flag.png') }}" type="image/png">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'wabag-red': '#9E2B25',
                        'wabag-yellow': '#F0C808',
                        'wabag-brown': '#5E3023',
                        'wabag-green': '#1A4314',
                        'wabag-blue': '#1E3F66',
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                        serif: ['Roboto', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        .enga-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239E2B25' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        /* Mobile menu styles */
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .mobile-menu.open {
            max-height: 500px;
        }

        /* Dropdown menu styles */
        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #9E2B25;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 0 0 4px 4px;
        }

        .dropdown-menu a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-menu a:hover {
            background-color: #7e221d;
        }

        /* Sticky header styles */
        .sticky-header {
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .sticky-header.scrolled {
            background-color: #9E2B25; /* wabag-red */
            padding-top: 0;
            padding-bottom: 0;
        }

        .sticky-header.scrolled .logo-container {
            transform: scale(0.9);
            transition: transform 0.3s ease;
        }

        .sticky-header.scrolled .mobile-menu {
            max-height: 400px; /* Slightly smaller when scrolled */
        }

        @keyframes progress {
        from { transform: translateX(-100%); }
        to { transform: translateX(100%); }
    }
    .animate-progress {
        width: 50%; /* Half-width for smoother animation */
        animation: progress 1.5s ease-in-out infinite;
    }
    </style>
    @stack('styles')
</head>
<body class="bg-gray-50 font-sans text-wabag-blue">
    <!-- Top Header Bar - Larger text -->
    <div class="bg-wabag-brown text-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center py-6">
                <div class="flex flex-wrap items-center space-x-4 mb-2 md:mb-0">
                    <div class="flex items-center text-base">
                        <svg class="h-5 w-5 mr-2 text-wabag-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span>Wabag District, Enga Province, PNG</span>
                    </div>
                    <div class="flex items-center text-base">
                        <svg class="h-5 w-5 mr-2 text-wabag-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <span>info@wabagdda.gov.pg</span>
                    </div>
                </div>
                <div class="flex flex-wrap items-center space-x-4 text-base">
                    <div class="flex items-center">
                        <svg class="h-5 w-5 mr-2 text-wabag-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>+675 XXX XXXX</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="h-5 w-5 mr-2 text-wabag-yellow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.479 5.092 1.479 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        <span>+675 XXX XXXX</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header with Mobile Responsiveness - Now Sticky -->
    <header class="enga-pattern bg-wabag-red text-white shadow-md sticky-header" id="main-header">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center py-4">
                <div class="flex items-center justify-between w-full md:w-auto mb-4 md:mb-0">
                    <div class="flex items-center logo-container">
                        <!-- Logo without border or shadow -->
                        <img src="{{ asset('images/logo/wabag-dda-logo.png') }}" alt="Wabag DDA Logo" class="h-16 w-auto mr-4">

                        <div>
                            <h1 class="text-2xl md:text-3xl font-serif font-bold">Wabag DDA</h1>
                            <p class="text-sm md:text-base text-wabag-yellow">Empowering our people</p>
                        </div>
                    </div>
                    <!-- Mobile menu button -->
                    <button class="md:hidden text-white focus:outline-none" id="mobile-menu-button">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:block w-full md:w-auto">
                    <ul class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-6 font-semibold">
                        <li>
                            <a href="{{ url('/') }}" class="block py-2 px-3 rounded hover:bg-wabag-red-dark transition @if(Request::is('/')) border-b-2 border-wabag-yellow @endif">Home</a>
                        </li>
                        <li class="dropdown relative group">
                            <a href="{{ url('/about-wabag-dda') }}" class="block py-2 px-3 rounded hover:bg-wabag-red-dark transition @if(Request::is('about*')) border-b-2 border-wabag-yellow @endif flex items-center">
                                About
                                <svg class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            <div class="dropdown-menu hidden group-hover:block absolute left-0 mt-0">
                                <a href="{{ url('/about/mps-message') }}" class="hover:bg-wabag-red-dark">MP's Message</a>
                                <a href="{{ url('/about/ceos-message') }}" class="hover:bg-wabag-red-dark">CEO's Message</a>
                            </div>
                        </li>
                        <li class="dropdown relative group">
                            <a href="{{ url('/administration') }}" class="block py-2 px-3 rounded hover:bg-wabag-red-dark transition @if(Request::is('administration*')) border-b-2 border-wabag-yellow @endif flex items-center">
                                Administration
                                <svg class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            <div class="dropdown-menu hidden group-hover:block absolute left-0 mt-0">
                                <a href="{{ url('/administration/executive') }}" class="hover:bg-wabag-red-dark">Executive Services</a>
                                <a href="{{ url('/administration/finance') }}" class="hover:bg-wabag-red-dark">Finance Division</a>
                                <a href="{{ url('/administration/planning') }}" class="hover:bg-wabag-red-dark">Planning Division</a>
                                <a href="{{ url('/administration/works') }}" class="hover:bg-wabag-red-dark">Works & Infrastructure</a>
                            </div>
                        </li>
                        <li>
                            <a href="{{ url('/development-plans') }}" class="block py-2 px-3 rounded hover:bg-wabag-red-dark transition @if(Request::is('development-plans*')) border-b-2 border-wabag-yellow @endif">Development Plans</a>
                        </li>
                        <li class="dropdown relative group">
                            <a href="{{ url('/projects') }}" class="block py-2 px-3 rounded hover:bg-wabag-red-dark transition @if(Request::is('projects*')) border-b-2 border-wabag-yellow @endif flex items-center">
                                Projects
                                <svg class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            <div class="dropdown-menu hidden group-hover:block absolute left-0 mt-0">
                                <a href="{{ url('/projects/health') }}" class="hover:bg-wabag-red-dark">Health Projects</a>
                                <a href="{{ url('/projects/education') }}" class="hover:bg-wabag-red-dark">Education Projects</a>
                                <a href="{{ url('/projects/infrastructure') }}" class="hover:bg-wabag-red-dark">Infrastructure</a>
                                <a href="{{ url('/projects/community') }}" class="hover:bg-wabag-red-dark">Community Development</a>
                            </div>
                        </li>
                        <li>
                            <a href="{{ url('/news') }}" class="block py-2 px-3 rounded hover:bg-wabag-red-dark transition @if(Request::is('news*')) border-b-2 border-wabag-yellow @endif">News</a>
                        </li>
                        <li>
                            <a href="{{ url('/contact') }}" class="block py-2 px-3 rounded hover:bg-wabag-red-dark transition @if(Request::is('contact*')) border-b-2 border-wabag-yellow @endif">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Mobile Navigation - Simple links without sticky behavior -->
            <div class="mobile-menu md:hidden bg-wabag-red-dark" id="mobile-menu">
                <ul class="flex flex-col space-y-2 px-4 py-2">
                    <li>
                        <a href="{{ url('/') }}" class="block py-2 px-3 rounded hover:bg-wabag-red transition">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/about-wabag-dda') }}" class="block py-2 px-3 rounded hover:bg-wabag-red transition">About</a>
                    </li>
                    <li>
                        <a href="{{ url('/administration') }}" class="block py-2 px-3 rounded hover:bg-wabag-red transition">Administration</a>
                    </li>
                    <li>
                        <a href="{{ url('/development-plans') }}" class="block py-2 px-3 rounded hover:bg-wabag-red transition">Development Plans</a>
                    </li>
                    <li>
                        <a href="{{ url('/projects') }}" class="block py-2 px-3 rounded hover:bg-wabag-red transition">Projects</a>
                    </li>
                    <li>
                        <a href="{{ url('/news') }}" class="block py-2 px-3 rounded hover:bg-wabag-red transition">News</a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}" class="block py-2 px-3 rounded hover:bg-wabag-red transition">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Enhanced Footer -->
    <!-- Footer -->
    <footer class="bg-wabag-brown text-white pt-12 pb-6">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-5 gap-8 mb-8">
                <div class="md:col-span-1">
                    <h3 class="text-xl font-serif font-bold mb-4">Wabag DDA</h3>
                    <p class="text-sm opacity-80 mb-4">Empowering the people of Wabag District through sustainable development and honest governance.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="h-10 w-10 rounded-full bg-wabag-red flex items-center justify-center hover:bg-wabag-yellow transition">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="h-10 w-10 rounded-full bg-wabag-red flex items-center justify-center hover:bg-wabag-yellow transition">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/></svg>
                        </a>
                        <a href="#" class="h-10 w-10 rounded-full bg-wabag-red flex items-center justify-center hover:bg-wabag-yellow transition">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/></svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ url('/') }}" class="hover:text-wabag-yellow transition">Home</a></li>
                        <li><a href="{{ url('/about-us') }}" class="hover:text-wabag-yellow transition">About Us</a></li>
                        <li><a href="{{ url('/projects') }}" class="hover:text-wabag-yellow transition">Our Projects</a></li>
                        <li><a href="{{ url('/news') }}" class="hover:text-wabag-yellow transition">News & Updates</a></li>
                        <li><a href="{{ url('/contact') }}" class="hover:text-wabag-yellow transition">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Government Links</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="https://enga.gov.pg/" target="_blank" class="hover:text-wabag-yellow transition">Enga Provincial Government</a></li>
                        <li><a href="https://pmnec.gov.pg/" target="_blank" class="hover:text-wabag-yellow transition">PM NEC</a></li>
                         <li><a href="https://planning.gov.pg/" target="_blank" class="hover:text-wabag-yellow transition">National Planning & Monitoring</a></li>
                        <li><a href="https://www.treasury.gov.pg/" target="_blank" class="hover:text-wabag-yellow transition">Department of Treasury</a></li>
                        <li><a href="https://www.finance.gov.pg/" target="_blank" class="hover:text-wabag-yellow transition">Department of Finance</a></li>
                        <li><a href="https://web.dherst.gov.pg/" target="_blank" class="hover:text-wabag-yellow transition">DHERST</a></li>
                        <li><a href="https://www.education.gov.pg/" target="_blank" class="hover:text-wabag-yellow transition">Department of Education</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Resources</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-wabag-yellow transition">Development Plans</a></li>
                        <li><a href="#" class="hover:text-wabag-yellow transition">Annual Reports</a></li>
                        <li><a href="#" class="hover:text-wabag-yellow transition">Budget Documents</a></li>
                        <li><a href="#" class="hover:text-wabag-yellow transition">Tenders</a></li>
                        <li><a href="#" class="hover:text-wabag-yellow transition">Employment</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Information</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-wabag-yellow transition">Terms & Conditions</a></li>
                        <li><a href="#" class="hover:text-wabag-yellow transition">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-wabag-yellow transition">Sitemap</a></li>
                        <li><a href="#" class="hover:text-wabag-yellow transition">Accessibility</a></li>
                        <li><a href="#" class="hover:text-wabag-yellow transition">Feedback</a></li>

                        <li><a href="{{ url('admin/login') }}" class="hover:text-wabag-yellow transition">Admin Login</a></li>

                        <li><a href="#" class="hover:text-wabag-yellow transition">Admin Login</a></li>

                    </ul>
                </div>
            </div>
            <div class="border-t border-wabag-red border-opacity-20 pt-6 text-sm text-center opacity-80">
                <p>&copy; {{ date('Y') }} Wabag District Development Authority. All rights reserved.</p>
                {{--<p class="mt-1 text-xs">Website by [Your Company Name]</p>--}}
            </div>
        </div>
    </footer>
    <!-- Loading Progress Bar -->
    <div id="loading-bar" class="fixed top-0 left-0 right-0 h-1 bg-wabag-yellow z-50 hidden">
        <div class="h-full bg-wabag-red animate-progress"></div>
    </div>
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('open');
        });

        // Sticky header on scroll
        window.addEventListener('scroll', function() {
            const header = document.getElementById('main-header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
        // Loading bar for internal links
        document.addEventListener('DOMContentLoaded', function() {
            const loadingBar = document.getElementById('loading-bar');

            // Show loading bar when clicking internal links
            document.addEventListener('click', function(e) {
                const link = e.target.closest('a');

                if (link &&
                    link.href &&
                    !link.href.includes('#') &&
                    link.target !== '_blank' &&
                    link.href.startsWith(window.location.origin)) {
                    loadingBar.classList.remove('hidden');
                }
            });

            // Hide when new page loads (for traditional navigation)
            window.addEventListener('load', function() {
                loadingBar.classList.add('hidden');
            });

            // For Turbo/Frames (if using Laravel)
            document.addEventListener('turbo:load', function() {
                loadingBar.classList.add('hidden');
            });
        });

        document.addEventListener('click', function(e) {
        const link = e.target.closest('a');
        if (link && link.href.includes('/about')) {
            e.preventDefault();
            document.getElementById('loading-bar').classList.remove('hidden');
            setTimeout(() => {
                window.location.href = link.href;
            }, 3000); // 3-second delay
        }
    });

        // For smooth scrolling to sections
       // document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      //      anchor.addEventListener('click', function(e) {
      //          e.preventDefault();
       //         const target = document.querySelector(this.getAttribute('href'));
       //         if (target) {
       //             target.scrollIntoView({
       //                 behavior: 'smooth'
       //             });
       //         }
       //     });
      //  });

    </script>
    @stack('scripts')
</body>
</html>
<style>
    /* Custom styles for the sticky header */
    .sticky-header {
        background-color: #9E2B25; /* wabag-red */
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .sticky-header.scrolled {
        background-color: #7e221d; /* Darker red when scrolled */
    }

    .logo-container img {
        transition: transform 0.3s ease;
    }

    .sticky-header.scrolled .logo-container img {
        transform: scale(0.9);
    }
</style>
