<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrgBase</title>
    
    @vite('resources/css/app.css')
</head>
<body class="h-screen flex flex-col bg-gray-100">
    <div class="top-bar p-4 bg-white shadow">
        <h1 class="text-2xl font-bold text-blue-900">OrgBase</h1>
            <div class="-mt-8 space-x-2 justify-end flex"> 
                <a href="{{route('dashboard.show')}}" class="bg-white-500 text-black px-4 py-2 rounded pointer cursor-pointer">Sign In</a>
                <button class="bg-blue-900 text-white px-4 py-2 rounded pointer cursor-pointer">Get Started</button>
            </div>
    </div>

    <div class="container mx-auto py-8 justify-center items-center flex-col flex">
        <h2 class="text-5xl font-bold mb-4 mt-10">Organize Your Community With Ease</h2>
        <p class="text-gray-700">All-in-one platform to manage your members, events, task, documents, and finances. Built for teams that want to focus on what matters.</p>
        <div class="mt-6 space-x-4"> 
                <button class="bg-blue-900 text-white px-4 py-2 rounded pointer cursor-pointer">Get Started</button>
                 <button class="bg-white-500 text-black px-4 py-2 rounded pointer cursor-pointer">Watch Demo</button>
            </div>
    </div>

    <div class="cards mx-auto py-16 px-4 max-w-7xl">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Powerful Features</h1>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Everything you need to manage your organization efficiently</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="border border-gray-200 p-8 rounded-xl shadow-sm bg-white hover:shadow-xl transition-shadow duration-300 hover:-translate-y-1 transform transition-transform">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold mb-3 text-gray-900">Member Management</h2>
                <p class="text-gray-600 leading-relaxed">Manage member profiles, roles, and permissions with ease. Keep your team organized and secure.</p>
            </div>

            <div class="border border-gray-200 p-8 rounded-xl shadow-sm bg-white hover:shadow-xl transition-shadow duration-300 hover:-translate-y-1 transform transition-transform">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold mb-3 text-gray-900">Event Planning</h2>
                <p class="text-gray-600 leading-relaxed">Create, schedule and manage events for your organization. Never miss an important date.</p>
            </div>

            <div class="border border-gray-200 p-8 rounded-xl shadow-sm bg-white hover:shadow-xl transition-shadow duration-300 hover:-translate-y-1 transform transition-transform">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold mb-3 text-gray-900">Task Management</h2>
                <p class="text-gray-600 leading-relaxed">Assign and track tasks to keep your team productive and projects on schedule.</p>
            </div>

            <div class="border border-gray-200 p-8 rounded-xl shadow-sm bg-white hover:shadow-xl transition-shadow duration-300 hover:-translate-y-1 transform transition-transform">
                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold mb-3 text-gray-900">Analytics & Reports</h2>
                <p class="text-gray-600 leading-relaxed">Get insights with detailed analytics and generate reports to track your organization's progress.</p>
            </div>

            <div class="border border-gray-200 p-8 rounded-xl shadow-sm bg-white hover:shadow-xl transition-shadow duration-300 hover:-translate-y-1 transform transition-transform">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold mb-3 text-gray-900">Communication Hub</h2>
                <p class="text-gray-600 leading-relaxed">Keep everyone connected with integrated messaging and notification systems.</p>
            </div>

            <div class="border border-gray-200 p-8 rounded-xl shadow-sm bg-white hover:shadow-xl transition-shadow duration-300 hover:-translate-y-1 transform transition-transform">
                <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold mb-3 text-gray-900">Security & Privacy</h2>
                <p class="text-gray-600 leading-relaxed">Enterprise-grade security to keep your data safe and compliant with industry standards.</p>
            </div>
        </div>
    </div>
    </div>

    <div class="cta-section py-10 mt-2 flex flex-col items-center"> 
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Ready to Get Started?</h1>
        <button class="bg-blue-900 text-white px-4 py-2 rounded pointer cursor-pointer">Create your Organization</button>
    </div>

    <div>
        <div class="footer bg-gray-800 text-white py-8 mt-16">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="mb-6 md:mb-0 flex flex-col">
                        <h2 class="text-xl font-bold mb-2">OrgBase</h2>
                        <p class="text-gray-400">© 2024 OrgBase. All rights reserved.</p>
                    </div>
                    <div class="flex space-x-6 mt-6">
                        <a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a>
                        <a href="#" class="text-gray-400 hover:text-white">Terms of Service</a>
                        <a href="#" class="text-gray-400 hover:text-white">Contact Us</a>
    </div>





    </div>
</body>
</html>