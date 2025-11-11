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
        <h1 class="text-2xl font-bold mb-8">OrgBase</h1>
        <nav class="space-y-4">
            <a href="{{route('dashboard')}}" class="block text-gray-700 hover:text-blue-900">Dashboard</a>
            <a href="{{route('announcements')}}" class="block text-gray-700 hover:text-blue-900">Announcements</a>
            <a href="{{route('members')}}" class="block text-gray-700 hover:text-blue-900">Members</a>
            <a href="{{route('events')}}" class="block text-gray-700 hover:text-blue-900">Events</a>
            <a href="{{route('tasks')}}" class="block text-gray-700 hover:text-blue-900">Tasks</a>
            <a href="#" class="block text-gray-700 hover:text-blue-900">Documents</a>
            <a href="{{route('finances')}}" class="block text-gray-700 hover:text-blue-900">Finances</a>
        </nav>


    
    
    </div>
    {{$slot}}
</body>
</html>