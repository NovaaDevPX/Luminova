<x-guest-layout title="Buat Janji Temu">
  <x-padding.section-padding class="py-16 bg-gray-50">

    <!-- Header -->
    <div class="max-w-4xl mx-auto mb-12 text-center">
      <h1 class="text-4xl font-bold text-blue-700">Buat Janji Temu dengan Dokter</h1>
      <p class="mt-3 text-gray-500">Temukan dokter terbaik dan buat janji temu Anda dengan mudah.</p>
    </div>

    <!-- Grid Layout -->
    <div class="grid max-w-6xl gap-10 mx-auto md:grid-cols-2">

      <!-- Doctor Profile Card -->
      <div class="flex flex-col items-center p-8 bg-white shadow-lg rounded-2xl md:items-start">
        <div class="flex flex-col items-center md:flex-row md:items-center md:gap-6">
          <div class="relative w-32 h-32 overflow-hidden rounded-full shadow-md ring-4 ring-blue-100">
            <img src="{{ asset('assets/ilustrations/doctor-profile.svg') }}" alt="Doctor Profile"
              class="object-cover w-full h-full">
          </div>
          <div class="mt-4 text-center md:text-left md:mt-0">
            <h2 class="text-2xl font-bold text-gray-800">dr. {{ $doctor->name }}</h2>
            <span
              class="inline-flex items-center px-3 py-1 mt-2 text-sm font-medium text-blue-700 bg-blue-100 rounded-full">
              <i class="mr-2 fas fa-stethoscope"></i>{{ $doctor->specialization->name }}
            </span>

            @if ($doctor->reviews->count() > 0)
              @php
                $averageRating = round($doctor->reviews->avg('rating'), 1);
              @endphp

              <div class="flex justify-center mt-2 md:justify-start">
                @for ($i = 1; $i <= 5; $i++)
                  @if ($averageRating >= $i)
                    <i class="text-yellow-400 fa-solid fa-star"></i>
                  @elseif ($averageRating > $i - 1 && $averageRating < $i)
                    @if (fmod($averageRating, 1) >= 0.5)
                      <i class="text-yellow-400 fa-solid fa-star-half-stroke"></i>
                    @else
                      <i class="text-gray-300 fa-solid fa-star"></i>
                    @endif
                  @else
                    <i class="text-gray-300 fa-solid fa-star"></i>
                  @endif
                @endfor
                <span class="ml-2 text-sm text-gray-500">({{ number_format($averageRating, 1) }})</span>
              </div>
            @endif
          </div>
        </div>

        <div class="w-full mt-6 space-y-2 text-gray-600">
          <p><i class="mr-2 text-blue-500 fa-solid fa-envelope"></i>{{ $doctor->email }}</p>
          <p><i class="mr-2 text-blue-500 fa-solid fa-phone"></i>{{ $doctor->phone ?? 'Tidak tersedia' }}</p>
          <p><i class="mr-2 text-blue-500 fa-solid fa-location-dot"></i>{{ $doctor->address ?? 'Alamat belum diatur' }}
          </p>
        </div>

        <p class="mt-6 leading-relaxed text-gray-600">
          {{ $doctor->specialization->description ?? 'Dokter berpengalaman dan profesional di bidangnya.' }}
        </p>
      </div>

      <!-- Appointment Form -->
      <div id="form-appointment" class="p-8 bg-white shadow-lg rounded-2xl">
        <h3 class="mb-6 text-2xl font-bold text-center text-gray-800">Formulir Janji Temu</h3>

        <form action="{{ route('doctor.appointment.store') }}" method="POST" class="space-y-5">
          @csrf
          @method('POST')
          <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
          <input type="hidden" name="user_id" value="{{ Auth::guard('web')->user()->id }}">
          <input type="hidden" name="price" id="price" value="{{ $doctor->price ?? 0 }}">

          <!-- Nama -->
          <div>
            <label for="name" class="block mb-2 font-medium text-gray-700">Nama Lengkap</label>
            <input type="text" name="name" id="name" value="{{ Auth::guard('web')->user()->name }}" readonly
              class="w-full px-4 py-2 text-gray-700 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-400 focus:outline-none bg-gray-50"
              required>
          </div>

          <!-- Email -->
          <div>
            <label for="email" class="block mb-2 font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" value="{{ Auth::guard('web')->user()->email }}"
              readonly
              class="w-full px-4 py-2 text-gray-700 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-400 focus:outline-none bg-gray-50"
              required>
          </div>

          <!-- Tanggal -->
          <div>
            <label for="appointment_date" class="block mb-2 font-medium text-gray-700">Tanggal Janji Temu</label>
            <input type="date" name="appointment_date" id="appointment_date"
              class="w-full px-4 py-2 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-400 focus:outline-none"
              required>
          </div>

          <!-- Jam -->
          <div x-data="{ selectedTime: '' }">
            <label for="appointment_time" class="block mb-3 font-medium text-gray-700">
              Pilih Jam Janji Temu
            </label>

            <!-- Kotak jam -->
            <div class="grid grid-cols-3 gap-3 sm:grid-cols-4 md:grid-cols-5">
              @php
                $availableTimes = ['09:00', '10:00', '11:00', '13:00', '14:00', '15:00', '16:00'];
              @endphp

              @foreach ($availableTimes as $time)
                <button type="button" @click="selectedTime = '{{ $time }}'"
                  :class="selectedTime === '{{ $time }}'
                      ?
                      'bg-blue-600 text-white shadow-lg' :
                      'bg-blue-50 text-blue-700 hover:bg-blue-100'"
                  class="w-full px-3 py-2 font-medium text-center transition rounded-xl focus:outline-none">
                  {{ $time }}
                </button>
              @endforeach
            </div>

            <!-- Input hidden untuk dikirim ke server -->
            <input type="hidden" name="appointment_time" x-model="selectedTime" required>

            <!-- Pesan error jika belum memilih jam -->
            <p x-show="!selectedTime" class="mt-2 text-sm text-gray-500">Silakan pilih salah satu jam yang tersedia.</p>
          </div>


          <!-- Catatan -->
          <div>
            <label for="notes" class="block mb-2 font-medium text-gray-700">Keluhan / Catatan</label>
            <textarea name="notes" id="notes" rows="4"
              class="w-full px-4 py-2 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-400 focus:outline-none"
              placeholder="Tuliskan keluhan atau alasan janji temu Anda"></textarea>
          </div>

          <!-- Total Harga -->
          <div class="p-4 mt-4 text-center bg-blue-50 rounded-xl">
            <p class="text-gray-600">Total Biaya Konsultasi</p>
            <p class="mt-1 text-2xl font-bold text-blue-700">Rp {{ number_format($doctor->price ?? 0, 0, ',', '.') }}
            </p>
          </div>

          <!-- Submit -->
          <div class="pt-2 text-center">
            <button type="submit"
              class="w-full py-3 font-semibold text-white transition bg-blue-600 rounded-xl hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">
              <i class="mr-2 fas fa-calendar-check"></i> Konfirmasi Janji Temu
            </button>
          </div>
        </form>
      </div>

    </div>
  </x-padding.section-padding>
</x-guest-layout>
