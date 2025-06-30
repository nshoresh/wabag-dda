<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration Dashboard | Wabag DDA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
        .sidebar {
            transition: all 0.3s;
        }
        .active-nav {
            background-color: #F0C808;
            color: #5E3023 !important;
            font-weight: 600;
        }
        .active-nav i {
            color: #5E3023 !important;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="sidebar bg-wabag-brown text-white w-64 space-y-6 py-7 px-2 fixed inset-y-0 left-0 transform -translate-x-full md:translate-x-0 transition duration-200 ease-in-out z-50">
            <!-- Logo -->
            <div class="flex items-center space-x-2 px-4">
                <img src="{{ asset('images/logo/enga-flag.png') }}" alt="Wabag DDA Logo" class="h-12 w-auto">
                <span class="text-xl font-bold">Wabag DDA</span>
            </div>

            <!-- Navigation -->
            <nav>
                <div class="py-4 text-gray-400 uppercase text-xs font-semibold px-4">Main</div>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-wabag-red hover:text-white active-nav">
                    <i class="fas fa-tachometer-alt mr-3"></i>Dashboard
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-wabag-red hover:text-white">
                    <i class="fas fa-newspaper mr-3"></i>News & Updates
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-wabag-red hover:text-white">
                    <i class="fas fa-project-diagram mr-3"></i>Projects
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-wabag-red hover:text-white">
                    <i class="fas fa-users mr-3"></i>Staff Management
                </a>

                <div class="py-4 text-gray-400 uppercase text-xs font-semibold px-4">Content</div>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-wabag-red hover:text-white">
                    <i class="fas fa-file-alt mr-3"></i>Pages
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-wabag-red hover:text-white">
                    <i class="fas fa-images mr-3"></i>Media Library
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-wabag-red hover:text-white">
                    <i class="fas fa-sliders-h mr-3"></i>Site Settings
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 md:ml-64">
            <!-- Top Navigation -->
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between px-6 py-4">
                    <!-- Mobile menu button -->
                    <button class="md:hidden text-wabag-brown focus:outline-none" id="sidebarToggle">
                        <i class="fas fa-bars text-xl"></i>
                    </button>

                    <!-- Search and User Area -->
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-wabag-yellow focus:border-transparent">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="relative">
                                <i class="fas fa-bell text-xl text-wabag-brown"></i>
                                <span class="absolute -top-1 -right-1 bg-wabag-red text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">3</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <img src="https://via.placeholder.com/40" alt="User" class="rounded-full h-8 w-8">
                                <span class="font-medium">Admin User</span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <main class="p-6">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-wabag-blue">Administration Dashboard</h1>
                    <div class="flex space-x-2">
                        <button class="bg-wabag-yellow text-wabag-brown px-4 py-2 rounded-md font-medium hover:bg-yellow-500 transition">
                            <i class="fas fa-plus mr-2"></i>Add New
                        </button>
                        <button class="bg-wabag-red text-white px-4 py-2 rounded-md font-medium hover:bg-red-700 transition">
                            <i class="fas fa-download mr-2"></i>Export
                        </button>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <div class="bg-white p-6 rounded-lg shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500">Total Visitors</p>
                                <h3 class="text-2xl font-bold">1,248</h3>
                                <p class="text-green-500 text-sm"><i class="fas fa-arrow-up mr-1"></i>12% from last week</p>
                            </div>
                            <div class="bg-wabag-yellow bg-opacity-20 p-3 rounded-full">
                                <i class="fas fa-users text-wabag-yellow text-xl"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500">News Articles</p>
                                <h3 class="text-2xl font-bold">36</h3>
                                <p class="text-green-500 text-sm"><i class="fas fa-arrow-up mr-1"></i>3 new this week</p>
                            </div>
                            <div class="bg-blue-100 p-3 rounded-full">
                                <i class="fas fa-newspaper text-blue-500 text-xl"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500">Active Projects</p>
                                <h3 class="text-2xl font-bold">14</h3>
                                <p class="text-red-500 text-sm"><i class="fas fa-arrow-down mr-1"></i>2 completed</p>
                            </div>
                            <div class="bg-green-100 p-3 rounded-full">
                                <i class="fas fa-project-diagram text-green-500 text-xl"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500">Staff Members</p>
                                <h3 class="text-2xl font-bold">28</h3>
                                <p class="text-green-500 text-sm"><i class="fas fa-arrow-up mr-1"></i>2 new hires</p>
                            </div>
                            <div class="bg-purple-100 p-3 rounded-full">
                                <i class="fas fa-user-tie text-purple-500 text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity and Quick Actions -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Recent Activity -->
                    <div class="bg-white p-6 rounded-lg shadow lg:col-span-2">
                        <h2 class="text-xl font-semibold mb-4 text-wabag-blue">Recent Activity</h2>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="bg-wabag-yellow bg-opacity-20 p-2 rounded-full mr-4">
                                    <i class="fas fa-edit text-wabag-yellow"></i>
                                </div>
                                <div>
                                    <p class="font-medium">Updated Homepage Content</p>
                                    <p class="text-gray-500 text-sm">Admin User - 2 hours ago</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-green-100 p-2 rounded-full mr-4">
                                    <i class="fas fa-plus text-green-500"></i>
                                </div>
                                <div>
                                    <p class="font-medium">Added New Project: Road Construction</p>
                                    <p class="text-gray-500 text-sm">Project Manager - 5 hours ago</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-2 rounded-full mr-4">
                                    <i class="fas fa-newspaper text-blue-500"></i>
                                </div>
                                <div>
                                    <p class="font-medium">Published News: District Development Update</p>
                                    <p class="text-gray-500 text-sm">Content Editor - Yesterday</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-purple-100 p-2 rounded-full mr-4">
                                    <i class="fas fa-user-plus text-purple-500"></i>
                                </div>
                                <div>
                                    <p class="font-medium">New Staff Member Added</p>
                                    <p class="text-gray-500 text-sm">HR Manager - 2 days ago</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h2 class="text-xl font-semibold mb-4 text-wabag-blue">Quick Actions</h2>
                        <div class="space-y-3">
                            <button class="w-full flex items-center space-x-3 text-left p-3 rounded-md hover:bg-gray-50 transition">
                                <div class="bg-wabag-red bg-opacity-20 p-2 rounded-full">
                                    <i class="fas fa-plus text-wabag-red"></i>
                                </div>
                                <span>Add New Content</span>
                            </button>
                            <button class="w-full flex items-center space-x-3 text-left p-3 rounded-md hover:bg-gray-50 transition">
                                <div class="bg-blue-100 p-2 rounded-full">
                                    <i class="fas fa-file-export text-blue-500"></i>
                                </div>
                                <span>Generate Reports</span>
                            </button>
                            <button class="w-full flex items-center space-x-3 text-left p-3 rounded-md hover:bg-gray-50 transition">
                                <div class="bg-green-100 p-2 rounded-full">
                                    <i class="fas fa-users-cog text-green-500"></i>
                                </div>
                                <span>Manage Users</span>
                            </button>
                            <button class="w-full flex items-center space-x-3 text-left p-3 rounded-md hover:bg-gray-50 transition">
                                <div class="bg-purple-100 p-2 rounded-full">
                                    <i class="fas fa-cog text-purple-500"></i>
                                </div>
                                <span>Site Settings</span>
                            </button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Toggle sidebar on mobile
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('-translate-x-full');
        });
    </script>
</body>
</html>
