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
        <h1 class="text-2xl font-bold">OrgBase</h1>
            <div class="-mt-8 space-x-2 justify-end flex"> 
                <button class="bg-white-500 text-black px-4 py-2 rounded">Sign In</button>
                <button class="bg-blue-900 text-white px-4 py-2 rounded">Get Started</button>
            </div>
    </div>

    <div class="container mx-auto py-8 justify-center items-center flex-col flex">
        <h2 class="text-5xl font-bold mb-4 mt-10">Organize Your Community With Ease</h2>
        <p class="text-gray-700">All-in-one platform to manage your members, events, task, documents, and finances. Built for teams that want to focus on what matters.</p>
        <div class="mt-6 space-x-4"> 
                <button class="bg-blue-900 text-white px-4 py-2 rounded">Get Started</button>
                 <button class="bg-white-500 text-black px-4 py-2 rounded">Watch Demo</button>
            </div>
    </div>

    <div class="container mx-auto py-8 justify-center items-center flex-col flex" >
        <h1 class="text-3xl font-bold mb-4 mt-10">Powerful Features</h1>

        {{-- <div class="border p-6 rounded-lg shadow-lg bg-white mt-6 col-span-4">
            <h2 class="text-xl font-bold mb-4 mt-10">Member Management</h2>
            <p class="text-gray-700">Easily manage your community members with our intuitive member management system. Keep track of member details, roles, and communication all in one place.</p>
        </div>

        <div class="border p-6 rounded-lg shadow-lg bg-white mt-6 col-span-4">
            <h2 class="text-xl font-bold mb-4 mt-10">Event Planning</h2>
            <p class="text-gray-700">Plan and organize events seamlessly with our event planning tools. Create event pages, manage RSVPs, and communicate with attendees effortlessly.</p>
        </div> --}}





    </div>
</body>
</html>