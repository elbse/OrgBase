<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>OrgBase</title>
    
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-50">
    <div class="sidebar fixed top-0 left-0 h-full w-64 bg-gradient-to-b from-blue-900 to-blue-800 shadow-xl z-50 flex flex-col">
        <!-- Logo Section -->
        <div class="p-6 border-b border-blue-700">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center">
                    <i class="fa-solid fa-building text-blue-900 text-xl"></i>
                </div>
                <h1 class="text-2xl font-bold text-white">OrgBase</h1>
            </div>
        </div>

        <!-- Navigation Menu -->
        <nav class="flex-1 overflow-y-auto p-4 space-y-2">
            <a href="{{route('dashboard.show')}}" class="group flex items-center gap-3 rounded-lg px-4 py-3 text-white hover:bg-blue-700 transition-all duration-200 hover:translate-x-1">
                <i class="fa-solid fa-chart-line w-5 text-center"></i>
                <span class="font-medium">Dashboard</span>
            </a>
            
            <a href="{{route('members.index')}}" class="group flex items-center gap-3 rounded-lg px-4 py-3 text-white hover:bg-blue-700 transition-all duration-200 hover:translate-x-1">
                <i class="fa-solid fa-users w-5 text-center"></i>
                <span class="font-medium">Members</span>
            </a>
            
            <a href="{{route('events.index')}}" class="group flex items-center gap-3 rounded-lg px-4 py-3 text-white hover:bg-blue-700 transition-all duration-200 hover:translate-x-1">
                <i class="fa-solid fa-calendar-days w-5 text-center"></i>
                <span class="font-medium">Events</span>
            </a>
            
            <a href="{{route('tasks.index')}}" class="group flex items-center gap-3 rounded-lg px-4 py-3 text-white hover:bg-blue-700 transition-all duration-200 hover:translate-x-1">
                <i class="fa-solid fa-tasks w-5 text-center"></i>
                <span class="font-medium">Tasks</span>
            </a>
            
            <a href="{{route('documents.index')}}" class="group flex items-center gap-3 rounded-lg px-4 py-3 text-white hover:bg-blue-700 transition-all duration-200 hover:translate-x-1">
                <i class="fa-solid fa-file w-5 text-center"></i>
                <span class="font-medium">Documents</span>
            </a>
            
            <a href="{{route('finances.index')}}" class="group flex items-center gap-3 rounded-lg px-4 py-3 text-white hover:bg-blue-700 transition-all duration-200 hover:translate-x-1">
                <i class="fa-solid fa-dollar-sign w-5 text-center"></i>
                <span class="font-medium">Finances</span>
            </a>
            
            <a href="{{route('announcements.index')}}" class="group flex items-center gap-3 rounded-lg px-4 py-3 text-white hover:bg-blue-700 transition-all duration-200 hover:translate-x-1">
                <i class="fa-solid fa-bullhorn w-5 text-center"></i>
                <span class="font-medium">Announcements</span>
            </a>
            
            <a href="{{route('organizations.index')}}" class="group flex items-center gap-3 rounded-lg px-4 py-3 text-white hover:bg-blue-700 transition-all duration-200 hover:translate-x-1">
                <i class="fa-solid fa-building w-5 text-center"></i>
                <span class="font-medium">Organizations</span>
            </a>
        </nav>

        <!-- User Section -->
       
    </div>
    
    <main class="ml-64 min-h-screen p-6">
        {{$slot}}
    </main>
</body>
</html>