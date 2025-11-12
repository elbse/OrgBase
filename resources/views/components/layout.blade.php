<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrgBase</title>
    
    @vite('resources/css/app.css')
</head>
<body>
    <div class="sidebar fixed top-0 left-0 h-full w-64 bg-white shadow-md p-6">
    <div class="flex justify-center">
        <h1 class="text-3xl font-bold mb-8">OrgBase</h1>
    </div>

        <nav class="space-y-1">
            <a href="{{route('dashboard.show')}}" class="text-black-900 flex items-center gap-3 rounded-lg px-4 py-3 transition-all duration-200 hover:bg-blue-700">Dashboard</a>
            <a href="{{route('announcements.index')}}" class="text-black-900 flex items-center gap-3 rounded-lg px-4 py-3 transition-all duration-200 hover:bg-blue-700">Announcements</a>
            <a href="{{route('members.index')}}" class="text-black-900 flex items-center gap-3 rounded-lg px-4 py-3 transition-all duration-200 hover:bg-blue-700">Members</a>
            <a href="{{route('events.index')}}" class="text-black-900 flex items-center gap-3 rounded-lg px-4 py-3 transition-all duration-200 hover:bg-blue-700">Events</a>
            <a href="{{route('tasks.index')}}" class="text-black-900 flex items-center gap-3 rounded-lg px-4 py-3 transition-all duration-200 hover:bg-blue-700">Tasks</a>
            <a href="{{route('documents.index')}}" class="text-black-900 flex items-center gap-3 rounded-lg px-4 py-3 transition-all duration-200 hover:bg-blue-700">Documents</a>
            <a href="{{route('finances.index')}}" class="text-black-900 flex items-center gap-3 rounded-lg px-4 py-3 transition-all duration-200 hover:bg-blue-700">Finances</a>
        </nav>


    
    
    </div>
    <main class="ml-64 p-6">
        {{$slot}}
    </main>
</body>
</html>