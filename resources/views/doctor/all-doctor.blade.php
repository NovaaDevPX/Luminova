<x-guest-layout title="Doctor's List">
  <x-padding.section-padding class="pb-10">

    <!-- Search Doctor (Right Top) -->
    <div class="flex justify-end w-full py-4 bg-[#F9FAFB]">
      <div class="relative flex items-center w-full max-w-md">
        <!-- Icon -->
        <span class="absolute text-gray-400 left-4">
          <i class="fas fa-search"></i>
        </span>

        <!-- Input -->
        <input type="text" placeholder="Cari dokter berdasarkan nama..."
          class="w-full py-3 pl-12 pr-24 border border-gray-200 outline-none rounded-xl focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-3s" />

        <!-- Button -->
        <button class="absolute px-4 py-2 text-sm font-medium text-white rounded-lg right-2 btn-primary">
          Cari
        </button>
      </div>
    </div>



    <div class="flex flex-col gap-6 lg:flex-row">
      <!-- Filter Sidebar (Full width on mobile, sticky on desktop) -->
      <div class="w-full p-6 bg-white border border-gray-100 shadow-sm lg:w-1/4 lg:sticky lg:top-4 rounded-2xl">
        <h2 class="mb-4 text-lg font-bold text-gray-800">Filter Spesialis</h2>

        <!-- Small Search in Filters -->
        <div class="mb-4">
          <input type="text" placeholder="Cari spesialis..."
            class="w-full px-4 py-2 transition border border-gray-200 rounded-xl focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent">
        </div>

        <!-- Checkboxes List -->
        <div class="mb-6 space-y-3 overflow-y-auto max-h-96">
          <label class="flex items-center p-2 transition rounded-lg cursor-pointer hover:bg-gray-50">
            <input type="checkbox" class="w-4 h-4 mr-3 text-blue-500 rounded focus:ring-blue-500">
            <i class="mr-2 text-sm text-blue-500 fas fa-stethoscope"></i>
            <span class="font-medium text-gray-700">Umum</span>
          </label>
          <label class="flex items-center p-2 transition rounded-lg cursor-pointer hover:bg-gray-50">
            <input type="checkbox" class="w-4 h-4 mr-3 text-blue-500 rounded focus:ring-blue-500">
            <i class="mr-2 text-sm text-blue-500 fas fa-child"></i>
            <span class="font-medium text-gray-700">Anak</span>
          </label>
          <label class="flex items-center p-2 transition rounded-lg cursor-pointer hover:bg-gray-50">
            <input type="checkbox" class="w-4 h-4 mr-3 text-blue-500 rounded focus:ring-blue-500">
            <i class="mr-2 text-sm text-blue-500 fas fa-tooth"></i>
            <span class="font-medium text-gray-700">Gigi</span>
          </label>
          <label class="flex items-center p-2 transition rounded-lg cursor-pointer hover:bg-gray-50">
            <input type="checkbox" class="w-4 h-4 mr-3 text-blue-500 rounded focus:ring-blue-500">
            <i class="mr-2 text-sm text-blue-500 fas fa-hand-holding-medical"></i>
            <span class="font-medium text-gray-700">Kulit</span>
          </label>
          <label class="flex items-center p-2 transition rounded-lg cursor-pointer hover:bg-gray-50">
            <input type="checkbox" class="w-4 h-4 mr-3 text-blue-500 rounded focus:ring-blue-500">
            <i class="mr-2 text-sm text-blue-500 fas fa-user-md"></i>
            <span class="font-medium text-gray-700">Bedah</span>
          </label>
          <label class="flex items-center p-2 transition rounded-lg cursor-pointer hover:bg-gray-50">
            <input type="checkbox" class="w-4 h-4 mr-3 text-blue-500 rounded focus:ring-blue-500">
            <i class="mr-2 text-sm text-blue-500 fas fa-eye"></i>
            <span class="font-medium text-gray-700">Mata</span>
          </label>
          <label class="flex items-center p-2 transition rounded-lg cursor-pointer hover:bg-gray-50">
            <input type="checkbox" class="w-4 h-4 mr-3 text-blue-500 rounded focus:ring-blue-500">
            <i class="mr-2 text-sm text-blue-500 fas fa-baby"></i>
            <span class="font-medium text-gray-700">Kandungan</span>
          </label>
          <label class="flex items-center p-2 transition rounded-lg cursor-pointer hover:bg-gray-50">
            <input type="checkbox" class="w-4 h-4 mr-3 text-blue-500 rounded focus:ring-blue-500">
            <i class="mr-2 text-sm text-blue-500 fas fa-brain"></i>
            <span class="font-medium text-gray-700">Jiwa</span>
          </label>
          <label class="flex items-center p-2 transition rounded-lg cursor-pointer hover:bg-gray-50">
            <input type="checkbox" class="w-4 h-4 mr-3 text-blue-500 rounded focus:ring-blue-500">
            <i class="mr-2 text-sm text-blue-500 fas fa-ear-hear"></i>
            <span class="font-medium text-gray-700">THT</span>
          </label>
          <label class="flex items-center p-2 transition rounded-lg cursor-pointer hover:bg-gray-50">
            <input type="checkbox" class="w-4 h-4 mr-3 text-blue-500 rounded focus:ring-blue-500">
            <i class="mr-2 text-sm text-blue-500 fas fa-bone"></i>
            <span class="font-medium text-gray-700">Orthopedi</span>
          </label>
        </div>

        <!-- Action Buttons -->
        <div class="flex pt-2 space-x-3">
          <button class="px-4 py-2 font-medium text-white transition  btn-primary rounded-xl hover:opacity-90">
            Terapkan Filter
          </button>
          <button
            class="flex-1 px-4 py-2 font-medium text-blue-500 transition border border-blue-500 rounded-xl hover:bg-blue-50">
            Reset
          </button>
        </div>
      </div>

      <!-- Main Doctor Grid -->
      <div class="w-full lg:w-3/4">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
          <!-- Doctor Card -->
          <div
            class="flex flex-col justify-between p-6 transition-shadow duration-200 bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-md">
            <div class="">
              <div class="mb-4 text-center">
                <img src="https://images.unsplash.com/photo-1594824638658-5d4555c4f0e8?w=80&h=80&fit=crop&crop=face"
                  alt="Dr. Siti Nurhaliza"
                  class="object-cover w-20 h-20 mx-auto border-2 border-gray-100 rounded-full shadow-md">
              </div>
              <h3 class="mb-1 text-xl font-semibold text-center text-gray-800">Dr. Siti Nurhaliza</h3>
              <p class="mb-3 font-medium text-center text-blue-500">Spesialis Anak</p>
              <div class="flex items-center justify-center mb-3">
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <span class="ml-1 text-sm font-medium text-gray-600">5.0 (15 ulasan)</span>
              </div>
              <p class="mb-4 text-sm leading-relaxed text-center text-gray-600">Ahli dalam perawatan anak-anak,
                vaksinasi,
                dan perkembangan kesehatan bayi hingga remaja.</p>
            </div>
            <button class="w-full py-3 font-medium text-white transition btn-primary rounded-xl hover:opacity-90">
              <i class="mr-2 fas fa-calendar-check"></i> Buat Janji
            </button>
          </div>

          <!-- Doctor Card -->
          <div
            class="flex flex-col justify-between p-6 transition-shadow duration-200 bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-md">
            <div class="">
              <div class="mb-4 text-center">
                <img src="https://images.unsplash.com/photo-1594824638658-5d4555c4f0e8?w=80&h=80&fit=crop&crop=face"
                  alt="Dr. Siti Nurhaliza"
                  class="object-cover w-20 h-20 mx-auto border-2 border-gray-100 rounded-full shadow-md">
              </div>
              <h3 class="mb-1 text-xl font-semibold text-center text-gray-800">Dr. Siti Nurhaliza</h3>
              <p class="mb-3 font-medium text-center text-blue-500">Spesialis Anak</p>
              <div class="flex items-center justify-center mb-3">
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <span class="ml-1 text-sm font-medium text-gray-600">5.0 (15 ulasan)</span>
              </div>
              <p class="mb-4 text-sm leading-relaxed text-center text-gray-600">Ahli dalam perawatan anak-anak,
                vaksinasi,
                dan perkembangan kesehatan bayi hingga remaja.</p>
            </div>
            <button class="w-full py-3 font-medium text-white transition bg-blue-500 rounded-xl hover:opacity-90">
              <i class="mr-2 fas fa-calendar-check"></i> Buat Janji
            </button>
          </div>

          <!-- Doctor Card -->
          <div
            class="flex flex-col justify-between p-6 transition-shadow duration-200 bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-md">
            <div class="">
              <div class="mb-4 text-center">
                <img src="https://images.unsplash.com/photo-1594824638658-5d4555c4f0e8?w=80&h=80&fit=crop&crop=face"
                  alt="Dr. Siti Nurhaliza"
                  class="object-cover w-20 h-20 mx-auto border-2 border-gray-100 rounded-full shadow-md">
              </div>
              <h3 class="mb-1 text-xl font-semibold text-center text-gray-800">Dr. Siti Nurhaliza</h3>
              <p class="mb-3 font-medium text-center text-blue-500">Spesialis Anak</p>
              <div class="flex items-center justify-center mb-3">
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <span class="ml-1 text-sm font-medium text-gray-600">5.0 (15 ulasan)</span>
              </div>
              <p class="mb-4 text-sm leading-relaxed text-center text-gray-600">Ahli dalam perawatan anak-anak,
                vaksinasi,
                dan perkembangan kesehatan bayi hingga remaja.</p>
            </div>
            <button class="w-full py-3 font-medium text-white transition bg-blue-500 rounded-xl hover:opacity-90">
              <i class="mr-2 fas fa-calendar-check"></i> Buat Janji
            </button>
          </div>

          <!-- Doctor Card -->
          <div
            class="flex flex-col justify-between p-6 transition-shadow duration-200 bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-md">
            <div class="">
              <div class="mb-4 text-center">
                <img src="https://images.unsplash.com/photo-1594824638658-5d4555c4f0e8?w=80&h=80&fit=crop&crop=face"
                  alt="Dr. Siti Nurhaliza"
                  class="object-cover w-20 h-20 mx-auto border-2 border-gray-100 rounded-full shadow-md">
              </div>
              <h3 class="mb-1 text-xl font-semibold text-center text-gray-800">Dr. Siti Nurhaliza</h3>
              <p class="mb-3 font-medium text-center text-blue-500">Spesialis Anak</p>
              <div class="flex items-center justify-center mb-3">
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <span class="ml-1 text-sm font-medium text-gray-600">5.0 (15 ulasan)</span>
              </div>
              <p class="mb-4 text-sm leading-relaxed text-center text-gray-600">Ahli dalam perawatan anak-anak,
                vaksinasi,
                dan perkembangan kesehatan bayi hingga remaja.</p>
            </div>
            <button class="w-full py-3 font-medium text-white transition bg-blue-500 rounded-xl hover:opacity-90">
              <i class="mr-2 fas fa-calendar-check"></i> Buat Janji
            </button>
          </div>

          <!-- Doctor Card -->
          <div
            class="flex flex-col justify-between p-6 transition-shadow duration-200 bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-md">
            <div class="">
              <div class="mb-4 text-center">
                <img src="https://images.unsplash.com/photo-1594824638658-5d4555c4f0e8?w=80&h=80&fit=crop&crop=face"
                  alt="Dr. Siti Nurhaliza"
                  class="object-cover w-20 h-20 mx-auto border-2 border-gray-100 rounded-full shadow-md">
              </div>
              <h3 class="mb-1 text-xl font-semibold text-center text-gray-800">Dr. Siti Nurhaliza</h3>
              <p class="mb-3 font-medium text-center text-blue-500">Spesialis Anak</p>
              <div class="flex items-center justify-center mb-3">
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <span class="ml-1 text-sm font-medium text-gray-600">5.0 (15 ulasan)</span>
              </div>
              <p class="mb-4 text-sm leading-relaxed text-center text-gray-600">Ahli dalam perawatan anak-anak,
                vaksinasi,
                dan perkembangan kesehatan bayi hingga remaja.</p>
            </div>
            <button class="w-full py-3 font-medium text-white transition bg-blue-500 rounded-xl hover:opacity-90">
              <i class="mr-2 fas fa-calendar-check"></i> Buat Janji
            </button>
          </div>

          <!-- Doctor Card -->
          <div
            class="flex flex-col justify-between p-6 transition-shadow duration-200 bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-md">
            <div class="">
              <div class="mb-4 text-center">
                <img src="https://images.unsplash.com/photo-1594824638658-5d4555c4f0e8?w=80&h=80&fit=crop&crop=face"
                  alt="Dr. Siti Nurhaliza"
                  class="object-cover w-20 h-20 mx-auto border-2 border-gray-100 rounded-full shadow-md">
              </div>
              <h3 class="mb-1 text-xl font-semibold text-center text-gray-800">Dr. Siti Nurhaliza</h3>
              <p class="mb-3 font-medium text-center text-blue-500">Spesialis Anak</p>
              <div class="flex items-center justify-center mb-3">
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <span class="ml-1 text-sm font-medium text-gray-600">5.0 (15 ulasan)</span>
              </div>
              <p class="mb-4 text-sm leading-relaxed text-center text-gray-600">Ahli dalam perawatan anak-anak,
                vaksinasi,
                dan perkembangan kesehatan bayi hingga remaja.</p>
            </div>
            <button class="w-full py-3 font-medium text-white transition bg-blue-500 rounded-xl hover:opacity-90">
              <i class="mr-2 fas fa-calendar-check"></i> Buat Janji
            </button>
          </div>

          <!-- Doctor Card -->
          <div
            class="flex flex-col justify-between p-6 transition-shadow duration-200 bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-md">
            <div class="">
              <div class="mb-4 text-center">
                <img src="https://images.unsplash.com/photo-1594824638658-5d4555c4f0e8?w=80&h=80&fit=crop&crop=face"
                  alt="Dr. Siti Nurhaliza"
                  class="object-cover w-20 h-20 mx-auto border-2 border-gray-100 rounded-full shadow-md">
              </div>
              <h3 class="mb-1 text-xl font-semibold text-center text-gray-800">Dr. Siti Nurhaliza</h3>
              <p class="mb-3 font-medium text-center text-blue-500">Spesialis Anak</p>
              <div class="flex items-center justify-center mb-3">
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <span class="ml-1 text-sm font-medium text-gray-600">5.0 (15 ulasan)</span>
              </div>
              <p class="mb-4 text-sm leading-relaxed text-center text-gray-600">Ahli dalam perawatan anak-anak,
                vaksinasi,
                dan perkembangan kesehatan bayi hingga remaja.</p>
            </div>
            <button class="w-full py-3 font-medium text-white transition bg-blue-500 rounded-xl hover:opacity-90">
              <i class="mr-2 fas fa-calendar-check"></i> Buat Janji
            </button>
          </div>

          <!-- Doctor Card -->
          <div
            class="flex flex-col justify-between p-6 transition-shadow duration-200 bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-md">
            <div class="">
              <div class="mb-4 text-center">
                <img src="https://images.unsplash.com/photo-1594824638658-5d4555c4f0e8?w=80&h=80&fit=crop&crop=face"
                  alt="Dr. Siti Nurhaliza"
                  class="object-cover w-20 h-20 mx-auto border-2 border-gray-100 rounded-full shadow-md">
              </div>
              <h3 class="mb-1 text-xl font-semibold text-center text-gray-800">Dr. Siti Nurhaliza</h3>
              <p class="mb-3 font-medium text-center text-blue-500">Spesialis Anak</p>
              <div class="flex items-center justify-center mb-3">
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <i class="text-sm text-yellow-400 fas fa-star"></i>
                <span class="ml-1 text-sm font-medium text-gray-600">5.0 (15 ulasan)</span>
              </div>
              <p class="mb-4 text-sm leading-relaxed text-center text-gray-600">Ahli dalam perawatan anak-anak,
                vaksinasi,
                dan perkembangan kesehatan bayi hingga remaja.</p>
            </div>
            <button class="w-full py-3 font-medium text-white transition bg-blue-500 rounded-xl hover:opacity-90">
              <i class="mr-2 fas fa-calendar-check"></i> Buat Janji
            </button>
          </div>
        </div>
      </div>
    </div>
  </x-padding.section-padding>
</x-guest-layout>
