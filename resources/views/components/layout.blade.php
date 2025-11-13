<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrgBase</title>
    
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="sidebar fixed top-0 left-0 h-full w-64 bg-white shadow-md p-6">
    <div class="flex justify-center">
        <h1 class="text-3xl font-bold mb-8">OrgBase</h1>
    </div>

        <nav class="space-y-1">
       
            <a href="{{route('dashboard.show')}}" class="text-black-900 flex items-center gap-3 rounded-lg px-4 py-2 transition-all duration-200 hover:bg-blue-700">Dashboard</a>
            <a href="{{route('members.index')}}" class="text-black-900 flex items-center gap-3 rounded-lg px-4 py-2 transition-all duration-200 hover:bg-blue-700">Members</a>
            <a href="{{route('events.index')}}" class="text-black-900 flex items-center gap-3 rounded-lg px-4 py-2 transition-all duration-200 hover:bg-blue-700">Events</a>
            <a href="{{route('tasks.index')}}" class="text-black-900 flex items-center gap-3 rounded-lg px-4 py-2 transition-all duration-200 hover:bg-blue-700">Tasks</a>
            <a href="{{route('documents.index')}}" class="text-black-900 flex items-center gap-3 rounded-lg px-4 py-2 transition-all duration-200 hover:bg-blue-700">Documents</a>
            <a href="{{route('finances.index')}}" class="text-black-900 flex items-center gap-3 rounded-lg px-4 py-2 transition-all duration-200 hover:bg-blue-700">Finances</a>
        </nav>

        <div class="mt-130 text-black-900 flex items-center gap-3 rounded-lg px-4 py-2 transition-all duration-200 hover:bg-red-700">
            <a>Log out</a>
        </div>


    
    
    </div>
    <main class="ml-64 p-6">
        {{$slot}}
    </main>
</body>
</html>