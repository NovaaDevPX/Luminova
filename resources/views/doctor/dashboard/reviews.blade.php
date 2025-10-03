<x-app-layout title="Reviews">

  <!-- Reviews Page -->
  <x-padding.dashboard-main-section-padding>
    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-2xl font-bold text-gray-700">
        <i class="mr-2 text-yellow-500 fa-solid fa-star"></i>
        Reviews
      </h2>
      <div class="relative">
        <input type="text" placeholder="Search reviews..."
          class="w-64 px-4 py-2 text-sm border rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
        <i class="fa-solid fa-magnifying-glass absolute right-3 top-2.5 text-gray-400"></i>
      </div>
    </div>

    <!-- Reviews List -->
    <div class="space-y-4">
      <!-- Review Card -->
      <div class="p-4 bg-white border shadow-sm rounded-xl">
        <div class="flex items-center gap-4">
          <img src="https://cdn-icons-png.flaticon.com/512/2922/2922510.png" alt="Patient"
            class="w-12 h-12 rounded-full">
          <div class="flex-1">
            <div class="flex items-center justify-between">
              <h3 class="font-semibold text-gray-700">Jane Smith</h3>
              <span class="text-xs text-gray-400">02 Oct 2025</span>
            </div>
            <!-- Rating -->
            <div class="flex items-center mt-1 text-yellow-500">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <!-- Comment -->
            <p class="mt-2 text-sm text-gray-600">
              Dokternya sangat ramah dan profesional. Penjelasannya mudah dimengerti.
            </p>
          </div>
        </div>
      </div>

      <!-- Another Review -->
      <div class="p-4 bg-white border shadow-sm rounded-xl">
        <div class="flex items-center gap-4">
          <img src="https://cdn-icons-png.flaticon.com/512/921/921071.png" alt="Patient"
            class="w-12 h-12 rounded-full">
          <div class="flex-1">
            <div class="flex items-center justify-between">
              <h3 class="font-semibold text-gray-700">Michael Brown</h3>
              <span class="text-xs text-gray-400">30 Sep 2025</span>
            </div>
            <!-- Rating -->
            <div class="flex items-center mt-1 text-yellow-500">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <!-- Comment -->
            <p class="mt-2 text-sm text-gray-600">
              Konsultasi cukup baik, tapi agak lama menunggu giliran.
            </p>
          </div>
        </div>
      </div>
    </div>
  </x-padding.dashboard-main-section-padding>
</x-app-layout>
