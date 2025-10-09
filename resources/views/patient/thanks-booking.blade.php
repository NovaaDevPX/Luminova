<x-guest-layout title="Terima Kasih">
  <x-padding.section-padding class="flex flex-col py-20 bg-gradient-to-b from-blue-50 via-white to-blue-50">

    <!-- Header Section -->
    <div class="max-w-3xl px-4 mx-auto text-center">
      <div
        class="inline-flex items-center justify-center w-20 h-20 mb-6 bg-green-100 rounded-full shadow-sm animate-bounce">
        <i class="text-4xl text-green-500 fa-solid fa-check-circle"></i>
      </div>

      <h1 class="text-3xl font-semibold text-gray-700 md:text-4xl">
        Terima Kasih Telah Membuat Janji Temu!
      </h1>
      <p class="mt-3 text-base text-gray-500 md:text-lg">
        Permintaan janji temu Anda telah berhasil dikirim. Tim kami akan meninjau permintaan tersebut dan
        mengirimkan konfirmasi melalui email yang terdaftar.
      </p>
    </div>

    <!-- Illustration -->
    <div class="max-w-sm px-6 mx-auto mt-10">
      <div class="w-[300px] h-[300px] mx-auto">
        <img src="{{ asset('assets/ilustrations/Enthusiastic-cuate.svg') }}" alt="Appointment Confirmation Illustration"
          class="w-full h-full">
      </div>
    </div>

    <!-- Step Cards -->
    <div class="grid max-w-5xl grid-cols-1 gap-8 px-6 mx-auto mt-5 md:grid-cols-3">

      <!-- Step 1 -->
      <div
        class="p-8 text-center transition-all duration-300 bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-md">
        <i class="mb-4 text-4xl text-blue-500 fa-solid fa-envelope-open-text"></i>
        <h3 class="text-lg font-semibold text-gray-700">Cek Email Anda</h3>
        <p class="mt-2 text-sm leading-relaxed text-gray-500">
          Kami akan mengirimkan notifikasi konfirmasi janji temu melalui email Anda.
        </p>
      </div>

      <!-- Step 2 -->
      <div
        class="p-8 text-center transition-all duration-300 bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-md">
        <i class="mb-4 text-4xl text-blue-500 fa-solid fa-user-md"></i>
        <h3 class="text-lg font-semibold text-gray-700">Tunggu Konfirmasi Dokter</h3>
        <p class="mt-2 text-sm leading-relaxed text-gray-500">
          Dokter Anda akan meninjau permintaan dan menyetujui jadwal janji temu.
        </p>
      </div>

      <!-- Step 3 -->
      <div
        class="p-8 text-center transition-all duration-300 bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-md">
        <i class="mb-4 text-4xl text-blue-500 fa-solid fa-calendar-check"></i>
        <h3 class="text-lg font-semibold text-gray-700">Siap untuk Janji Temu</h3>
        <p class="mt-2 text-sm leading-relaxed text-gray-500">
          Setelah dikonfirmasi, Anda dapat hadir sesuai jadwal yang telah disetujui.
        </p>
      </div>

    </div>

    <!-- Call to Action -->
    <div class="max-w-2xl px-6 mx-auto mt-10 text-center">
      <h2 class="mb-3 text-2xl font-semibold text-gray-700">Sambil menunggu konfirmasi...</h2>
      <p class="mb-6 text-base text-gray-500">Anda dapat melihat dokter lain atau menjelajahi layanan kami yang lain.
      </p>
      <a href="{{ route('patient.index') }}"
        class="inline-flex items-center gap-2 px-6 py-3 font-medium text-white transition bg-blue-500 rounded-xl hover:bg-blue-600">
        <i class="fa-solid fa-stethoscope"></i> Lihat Dokter Lain
      </a>
    </div>

  </x-padding.section-padding>
</x-guest-layout>
