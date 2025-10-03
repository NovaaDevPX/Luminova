<x-app-layout title="Appointments">
  <!-- Appointments Page -->
  <x-padding.dashboard-main-section-padding>
    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-2xl font-bold text-gray-700">
        <i class="mr-2 text-blue-600 fa-regular fa-calendar-check"></i>
        Appointments
      </h2>
    </div>

    <!-- Tabs (Upcoming / Past) -->
    <div class="flex gap-4 mb-6">
      <button class="px-4 py-2 text-sm font-medium text-blue-600 bg-blue-100 rounded-xl">
        Upcoming
      </button>
      <button class="px-4 py-2 text-sm font-medium text-gray-600 rounded-xl hover:bg-gray-100">
        Past
      </button>
    </div>

    <!-- Appointment List -->
    <div class="space-y-4">
      <!-- Appointment Card -->
      <div class="flex items-center justify-between p-4 bg-white border shadow-sm rounded-xl">
        <div class="flex items-center gap-4">
          <img src="https://cdn-icons-png.flaticon.com/512/2922/2922510.png" alt="Patient"
            class="w-12 h-12 rounded-full">
          <div>
            <h3 class="font-semibold text-gray-700">Jane Smith</h3>
            <p class="text-sm text-gray-500">General Checkup</p>
            <p class="text-sm text-gray-400"><i class="mr-1 fa-regular fa-clock"></i> 10:00 AM - 11:00 AM</p>
          </div>
        </div>
        <span class="px-3 py-1 text-sm font-medium text-green-600 bg-green-100 rounded-xl">
          Confirmed
        </span>
      </div>

      <!-- Another Appointment -->
      <div class="flex items-center justify-between p-4 bg-white border shadow-sm rounded-xl">
        <div class="flex items-center gap-4">
          <img src="https://cdn-icons-png.flaticon.com/512/921/921071.png" alt="Patient"
            class="w-12 h-12 rounded-full">
          <div>
            <h3 class="font-semibold text-gray-700">Michael Brown</h3>
            <p class="text-sm text-gray-500">Cardiology Consultation</p>
            <p class="text-sm text-gray-400"><i class="mr-1 fa-regular fa-clock"></i> 1:00 PM - 1:30 PM</p>
          </div>
        </div>
        <span class="px-3 py-1 text-sm font-medium text-yellow-600 bg-yellow-100 rounded-xl">
          Pending
        </span>
      </div>
    </div>
    </x-padding.dashboar>

</x-app-layout>
