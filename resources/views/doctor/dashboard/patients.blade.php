<x-app-layout title="Patients">
  <!-- Patients Page -->
  <x-padding.dashboard-main-section-padding>
    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-2xl font-bold text-gray-700">
        <i class="mr-2 text-blue-600 fa-solid fa-user-group"></i>
        Patients
      </h2>
      <div class="flex items-center gap-4">
        <!-- Filter -->
        <select class="px-3 py-2 text-sm border rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option value="all">All</option>
          <option value="new">New</option>
          <option value="ongoing">Ongoing</option>
          <option value="completed">Completed</option>
        </select>

        <!-- Search -->
        <div class="relative">
          <input type="text" placeholder="Search patients..."
            class="w-64 px-4 py-2 text-sm border rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
          <i class="fa-solid fa-magnifying-glass absolute right-3 top-2.5 text-gray-400"></i>
        </div>
      </div>
    </div>

    <!-- Patients List -->
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">

      <!-- Patient Card with Multiple Status -->
      <div class="p-4 bg-white border shadow-sm rounded-xl">
        <div class="flex items-center gap-4">
          <img src="https://cdn-icons-png.flaticon.com/512/2922/2922510.png" alt="Patient"
            class="rounded-full w-14 h-14">
          <div>
            <h3 class="font-semibold text-gray-700">Jane Smith</h3>
            <p class="text-sm text-gray-500">Female, 29 yrs</p>
            <p class="text-xs text-gray-400"><i class="mr-1 fa-solid fa-phone"></i> +62 812 3456 789</p>
          </div>
        </div>
        <div class="flex items-center justify-between mt-4">
          <button class="px-3 py-1 text-sm text-white bg-blue-600 rounded-lg hover:bg-blue-700">
            View
          </button>
          <!-- Multiple Status Badges -->
          <div class="flex gap-2">
            <span class="px-2 py-1 text-xs font-medium text-purple-600 bg-purple-100 rounded-lg">
              New
            </span>
            <span class="px-2 py-1 text-xs font-medium text-green-600 bg-green-100 rounded-lg">
              Completed
            </span>
          </div>
        </div>
      </div>

      <!-- Another Example with Ongoing + Completed -->
      <div class="p-4 bg-white border shadow-sm rounded-xl">
        <div class="flex items-center gap-4">
          <img src="https://cdn-icons-png.flaticon.com/512/921/921071.png" alt="Patient"
            class="rounded-full w-14 h-14">
          <div>
            <h3 class="font-semibold text-gray-700">Michael Brown</h3>
            <p class="text-sm text-gray-500">Male, 42 yrs</p>
            <p class="text-xs text-gray-400"><i class="mr-1 fa-solid fa-phone"></i> +62 811 2233 445</p>
          </div>
        </div>
        <div class="flex items-center justify-between mt-4">
          <button class="px-3 py-1 text-sm text-white bg-blue-600 rounded-lg hover:bg-blue-700">
            View
          </button>
          <!-- Multiple Status Badges -->
          <div class="flex gap-2">
            <span class="px-2 py-1 text-xs font-medium text-yellow-600 bg-yellow-100 rounded-lg">
              Ongoing
            </span>
            <span class="px-2 py-1 text-xs font-medium text-green-600 bg-green-100 rounded-lg">
              Completed
            </span>
          </div>
        </div>
      </div>

    </div>
  </x-padding.dashboard-main-section-padding>
</x-app-layout>
