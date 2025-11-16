<x-layout>
    <div class="flex justify-between items-center mb-6">

         <div>
            <h1 class="font-bold text-3xl">Welcome Back!</h1>
            <h6 class="font-semibold text-sm my-2">Here's what's happening with your organization today.</h6>
        </div>

        <div class="flex justify-end gap-8 text-xl mb-4">
            <a href=""><i class="fa-solid fa-bell"></i></a>
            <a href=""><i class="fa-solid fa-user"></i></a>
        </div>
    </div>

   

    <div class="grid grid-cols-4 gap-6">
        <div class="border-2 border-blue-900 p-8 m-1.5 border-radius:2px rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300" >
            <h4 class="text-1xl text-black font-bold flex justify-center item-center">Total Members</h4>
        </div>

        <div class="border-2 border-blue-900 p-8 m-1.5 border-radius:2px rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300" >
            <h4 class="text-1xl text-black font-bold flex justify-center item-center">Upcoming Events</h4>
        </div>

        <div class="border-2 border-blue-900 p-8 m-1.5 border-radius:2px rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300" >
            <h4 class="text-1xl text-black font-bold flex justify-center item-center">Announcements</h4>
        </div>

        <div class="border-2 border-blue-900 p-8 m-1.5 border-radius:2px rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300" >
            <h4 class="text-1xl text-black font-bold flex justify-center item-center">Active Tasks</h4>
        </div>

    </div>


</x-layout>