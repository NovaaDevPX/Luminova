<x-guest-layout title="Buat Janji Temu">
  <x-padding.section-padding class="py-16 bg-gray-50">

    <!-- Header -->
    <div class="max-w-4xl mx-auto mb-12 text-center">
      <h1 class="text-4xl font-bold text-accent">Buat Janji Temu dengan Dokter</h1>
      <p class="mt-4 text-gray-600">Temukan dokter terbaik dan buat janji temu Anda dengan mudah.</p>
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
                    {{-- Bintang penuh --}}
                    <i class="text-yellow-400 fa-solid fa-star"></i>
                  @elseif ($averageRating > $i - 1 && $averageRating < $i)
                    @if (fmod($averageRating, 1) >= 0.5)
                      {{-- Setengah bintang --}}
                      <i class="text-yellow-400 fa-solid fa-star-half-stroke"></i>
                    @else
                      {{-- Bintang kosong --}}
                      <i class="text-gray-300 fa-solid fa-star"></i>
                    @endif
                  @else
                    {{-- Bintang kosong --}}
                    <i class="text-gray-300 fa-solid fa-star"></i>
                  @endif
                @endfor

                <span class="ml-2 text-sm text-gray-600">
                  ({{ number_format($averageRating, 1) }})
                </span>
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

          <!-- Name -->
          <div>
            <label for="name" class="block mb-2 font-medium text-gray-700">Nama Lengkap</label>
            <input type="text" name="name" id="name" value="{{ Auth::guard('web')->user()->name }}" readonly
              class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none"
              placeholder="Masukkan nama Anda" required>
          </div>

          <!-- Email -->
          <div>
            <label for="email" class="block mb-2 font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" value="{{ Auth::guard('web')->user()->email }}"
              readonly
              class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none"
              placeholder="Masukkan email aktif" required>
          </div>

          <!-- Date -->
          <div>
            <label for="appointment_date" class="block mb-2 font-medium text-gray-700">Tanggal Janji Temu</label>
            <input type="date" name="appointment_date" id="appointment_date"
              class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none"
              required>
          </div>

          <!-- Message -->
          <div>
            <label for="notes" class="block mb-2 font-medium text-gray-700">Keluhan / Catatan</label>
            <textarea name="notes" id="notes" rows="4"
              class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none"
              placeholder="Tuliskan keluhan atau alasan janji temu Anda"></textarea>
          </div>

          <!-- Submit -->
          <div class="pt-2 text-center">
            <button type="submit"
              class="w-full py-3 font-semibold text-white transition bg-blue-600 rounded-xl hover:bg-blue-700">
              <i class="mr-2 fas fa-calendar-check"></i> Konfirmasi Janji Temu
            </button>
          </div>
        </form>
      </div>

    </div>
  </x-padding.section-padding>
</x-guest-layout>
